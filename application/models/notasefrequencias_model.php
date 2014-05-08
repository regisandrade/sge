<?php
class Notasefrequencias_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * Função para listar as notas e frequencias de um determinado aluno
	 */
	public function getNotasFrequencias() {
		return $this->db->get("notas_frequencias")->result();
	}
	
	
} // Fim class