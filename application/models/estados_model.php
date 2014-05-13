<?php
class Estados_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os alunos no banco
    */
    public function getEstados() {
    	$resultado = $this->db->order_by("sigla","ASC")->get("estados")->result();
    	#echo ">>> <pre>".print_r($this->db->last_query()); exit;
    	return $resultado;
    }

}