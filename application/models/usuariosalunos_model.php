<?php
class Usuariosalunos_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os usuarios no banco
    */
    public function getUsuariosAlunos() {
        $this->db->select('usuarios_alunos.id,alunos.nome,
                          usuarios_alunos.login, usuarios_alunos.status');
        $this->db->from('usuarios_alunos');
        $this->db->join('alunos', 'alunos.id = usuarios_alunos.id_aluno');
        $query = $this->db->get();
        #echo ">>> <pre>".print_r($this->db->last_query()); exit;
        return $query->result();
    }

    /**
    * Retorno um usuarios
    */
    public function getUsuarioAluno($_id, $id_aluno = null) {
    	return $this->db->where('id', $_id)->get('usuarios_alunos')->row();
    }

    /**
    * Adicionar usuario
    */
    public function addUsuarioAluno($_dados = array(), $_id=null) {
    	if(is_null($_id)) { #Insert
    		$retorno = $this->db->insert('usuarios_alunos', valida_fields('usuarios_alunos',$_dados));
    	}
    	else { #Update
    		$retorno = $this->db->where('id_aluno',$_id)->update('usuarios_alunos',valida_fields('usuarios_alunos',$_dados));
    	}
		return ($retorno ? true : false);
    }

    /**
    * Alterar usuario
    */
    public function updateUsuarioAluno($_id, $dados = array()) {
		$retorno = $this->db->where('id_aluno',$_id)->update('usuarios_alunos',valida_fields('usuarios_alunos',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return ($retorno ? true : false);
    }

    /**
    * Alterar login usuario
    */
    public function updateLoginUsuarioAluno($_id, $dados = array()) {
        $retorno = $this->db->where('id_aluno',$_id)->update('usuarios_alunos',valida_fields('usuarios_alunos',$dados));
        #echo ">>> <pre>".print_r($this->db->last_query()); exit;
        return ($retorno ? true : false);
    }

    /**
    * Deletar usuario
    */
    public function deleteUsuarioAluno($_id) {
    	$dados = array('status' => 'Excluído');
		$retorno = $this->db->where('id',$_id)->update('usuarios_alunos',$dados);
		return ($retorno ? true : false);
    }

}