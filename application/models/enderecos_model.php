<?php
class Enderecos_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os enderecos no banco
    */
    public function getEnderecos() {
    	$resultado = $this->db->get("enderecos")->result();
    	#echo ">>> <pre>".print_r($this->db->last_query()); exit;
    	return $resultado;
    }

    /**
    * Retorno um endereco
    */
    public function getEndereco($_id, $id_aluno = null) {
    	return $this->db->where('id', $_id)->get('enderecos')->row();
    }

    /**
    * Adicionar endereco
    */
    public function addEndereco($dados = array(), $id=null) {
    	if(is_null($id)) { #Insert
    		$retorno = $this->db->insert('enderecos', valida_fields('enderecos',$dados));
    	}
    	else { #Update
    		$retorno = $this->db->where('id',$_id)->update('enderecos',valida_fields('enderecos',$dados));
    	}
		return ($retorno ? true : false);
    }

    /**
    * Alterar endereco
    */
    public function updateEndereco($_id, $dados = array()) {
		$retorno = $this->db->where('id',$_id)->update('enderecos',valida_fields('enderecos',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		if ($retorno) {
			return true;
		} else {
			return false;
		}
    }

    /**
    * Deletar endereco
    */
    public function deleteAluno($_id) {
		$retorno = $this->db->where('id', $_id)->delete('enderecos');
		return ($retorno ? true : false);
    }

}