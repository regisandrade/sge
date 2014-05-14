<?php
class Usuariosalunos_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os usuarios no banco
    */
    public function getUsuariosAlunos() {
    	$resultado = $this->db->get("usuarios_alunos")->result();
    	#echo ">>> <pre>".print_r($this->db->last_query()); exit;
    	return $resultado;
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
    		$retorno = $this->db->where('id',$_id)->update('usuarios_alunos',valida_fields('usuarios_alunos',$_dados));
    	}
		return ($retorno ? true : false);
    }

    /**
    * Alterar usuario
    */
    public function updateUsuarioAluno($_id, $dados = array()) {
		$retorno = $this->db->where('id',$_id)->update('usuarios_alunos',valida_fields('usuarios_alunos',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		if ($retorno) {
			return true;
		} else {
			return false;
		}
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