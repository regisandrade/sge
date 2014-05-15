<?php
class Graduacoes_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os graduacoes no banco
    */
    public function getGraduacoes() {
    	$resultado = $this->db->get("graduacoes")->result();
    	#echo ">>> <pre>".print_r($this->db->last_query()); exit;
    	return $resultado;
    }

    /**
    * Retorno um Graduacao
    */
    public function getGraduacao($_id) {
    	return $this->db->where('id', $_id)->get('graduacoes')->row();
    }

    /**
    * Retorno graduacao do aluno
    */
    public function getGraduacaoAluno($_id_aluno) {
        return $this->db->where('id_aluno', $_id_aluno)->get('graduacoes')->row();
    }
    /**
    * Adicionar Graduacao
    */
    public function addGraduacao($dados = array(), $id=null) {
    	if(is_null($id)) { #Insert
    		$retorno = $this->db->insert('graduacoes', valida_fields('graduacoes',$dados));
    	}
    	else { #Update
    		$retorno = $this->db->where('id',$_id)->update('graduacoes',valida_fields('graduacoes',$dados));
    	}
		return ($retorno ? true : false);
    }

    /**
    * Alterar Graduacao
    */
    public function updateGraduacao($_id, $dados = array()) {
		$retorno = $this->db->where('id_aluno',$_id)->update('graduacoes',valida_fields('graduacoes',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return ($retorno ? true : false);
    }

    /**
    * Deletar Graduacao
    */
    public function deleteGraduacao($_id) {
		$retorno = $this->db->where('id', $_id)->delete('graduacoes');
		return ($retorno ? true : false);
    }

}