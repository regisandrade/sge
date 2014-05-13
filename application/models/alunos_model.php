<?php
class Alunos_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os alunos no banco
    */
    public function getAlunos() {
    	$resultado = $this->db->get("alunos")->result();
    	#echo ">>> <pre>".print_r($this->db->last_query()); exit;
    	return $resultado;
    }

    /**
    * Retorno um aluno
    */
    public function getAluno($_id) {
    	return $this->db->where('id', $_id)->get('alunos')->row();
    }

    /**
    * Adicionar aluno
    */
    public function addUsuario($dados = array()) {
		$retorno = $this->db->insert('alunos', valida_fields('alunos',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return ($retorno ? true : false);
    }

    /**
    * Alterar aluno
    */
    public function updateUsuario($_id, $dados = array()) {
		$retorno = $this->db->where('id',$_id)->update('alunos',valida_fields('alunos',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		if ($retorno) {
			return true;
		} else {
			return false;
		}
    }

    /**
    * Deletar aluno
    */
    public function deleteUsuario($_id) {
		$retorno = $this->db->where('id', $_id)->delete('alunos');
		return ($retorno ? true : false);
    }

}