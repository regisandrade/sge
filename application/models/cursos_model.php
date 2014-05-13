<?php
class Cursos_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
    * Retorno todos os alunos no banco
    */
    public function getCursos() {
    	$resultado = $this->db
    					  ->where("status","Ativo")
    					  ->order_by("nome","ASC")
    					  ->get("curso")->result();
    	#echo ">>> <pre>".print_r($this->db->last_query()); exit;
    	return $resultado;
    }

}