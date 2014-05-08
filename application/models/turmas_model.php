<?php
class Turmas_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * Retorno todas as turmas
	 */
	public function getTurmas() {
		$this->db->select('turmas.id, turmas.sigla, curso.nome');
		$this->db->join('curso', 'curso.id = turmas.id_curso');
		$this->db->where('curso.status','Ativo');
		$this->db->order_by("sigla",'ASC');
		$query = $this->db->get('turmas');
		//echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return $query->result();
	}
	
}