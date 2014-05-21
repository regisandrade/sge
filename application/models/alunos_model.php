<?php
class Alunos_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os alunos no banco
    */
    public function getAlunos() {
        $this->db->select('alunos.id,alunos.nome,alunos.email,
                          enderecos.fone_residencial,enderecos.fone_celular,
                          curso.nome AS nomeCurso');
        $this->db->from('alunos');
        $this->db->join('enderecos', 'enderecos.id_aluno = alunos.id','LEFT');
        $this->db->join('curso', 'curso.id = alunos.id_curso','LEFT');
        $this->db->where('alunos.status != ', 'Excluído');
        $query = $this->db->get();
        #echo ">>> <pre>".print_r($this->db->last_query()); exit;
        return $query->result();
    }

    /**
    * Retorno um aluno
    */
    public function getAluno($_id) {
    	return $this->db->where('id', $_id)->get('alunos')->row();
    }

    /**
    * Verificar se o aluno esta cadastrado, com os campos de e-mail, cpf e curso
    */
    public function verificarExisteAluno($_param = array()) {
        return $this->db
                        ->where('cpf', $_param['cpf'])
                        ->where('email', $_param['email'])
                        ->where('id_curso', $_param['id_curso'])
                        ->get('alunos')->count_all();
    }

    /**
    * Adicionar aluno
    */
    public function addAluno($dados = array(), $id=null) {
    	if(is_null($id)) { #Insert
    		$retorno = $this->db->insert('alunos', valida_fields('alunos',$dados));
    		$retorno = $this->db->insert_id();
    	}
    	else { #Update
    		$retorno = $this->db->where('id',$_id)->update('alunos',valida_fields('alunos',$dados));
    	}
		return $retorno;
    }

    /**
    * Alterar aluno
    */
    public function updateAluno($_id, $dados = array()) {
		$retorno = $this->db->where('id',$_id)->update('alunos',valida_fields('alunos',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return ($retorno ? true : false);
    }

    /**
    * Deletar aluno
    */
    public function deleteAluno($_id, $_status) {
    	$dados = array('status' => $_status);
		$retorno = $this->db->where('id',$_id)->update('alunos',$dados);
		return ($retorno ? true : false);
    }

    /**
    * Relação de alunos cadastrados pela web
    */
    public function getCadastradoPelaWeb() {
        $this->db->select('alunos.id,alunos.nome,alunos.email,
                          enderecos.cidade,enderecos.uf_endereco,
                          enderecos.fone_residencial,enderecos.fone_celular,
                          curso.nome AS nomeCurso');
        $this->db->from('alunos');
        $this->db->join('enderecos', 'enderecos.id_aluno = alunos.id','LEFT');
        $this->db->join('curso', 'curso.id = alunos.id_curso','LEFT');
        $this->db->where('alunos.web = ', 'Sim');
        $query = $this->db->get();
        #echo ">>> <pre>".print_r($this->db->last_query()); exit;
        return $query->result();
    }

    /*
      Buscar os dados do aluno para montar o histórico 
    */
    public function getHistoricoEscolar($_id_aluno) {

    }

    /*
      Buscar os dados do aluno com estatus excluído
    */
    public function getAlunosPotenciais() {
        $this->db->select('alunos.id,alunos.nome,alunos.email,
                          enderecos.cidade,enderecos.uf_endereco,
                          enderecos.fone_residencial,enderecos.fone_celular,
                          curso.nome AS nomeCurso');
        $this->db->from('alunos');
        $this->db->join('enderecos', 'enderecos.id_aluno = alunos.id','LEFT');
        $this->db->join('curso', 'curso.id = alunos.id_curso','LEFT');
        $this->db->where('alunos.status = ', 'Excluído');
        $query = $this->db->get();
        #echo ">>> <pre>".print_r($this->db->last_query()); exit;
        return $query->result();
    }

}