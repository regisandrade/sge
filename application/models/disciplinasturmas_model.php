<?php
class Disciplinasturmas_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * Função para listar as notas e frequencias de um determinado aluno
	 */
	public function getDisciplinas($idTurma) {
		$this->db->select('disciplinas.id, disciplinas.nome, disciplinas_turmas.id_turma');
		$this->db->join('disciplinas', 'disciplinas.id = disciplinas_turmas.id_disciplina');
		$this->db->where('disciplinas_turmas.id_turma',$idTurma);
		$this->db->order_by("disciplinas.nome",'ASC');
		$query = $this->db->get('disciplinas_turmas');
		//echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return $query->result();
	}
	
	
} // Fim class