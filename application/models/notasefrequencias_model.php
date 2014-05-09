<?php
class Notasefrequencias_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * Função para listar as notas e frequencias de um determinado aluno
	 */
	public function getNotasFrequencias($disciplina,$turma) {
		$this->db->select('notas_frequencias.id, 
						  notas_frequencias.nota, 
						  notas_frequencias.frequencia,
						  notas_frequencias.id_aluno,
						  disciplinas.nome AS nomeDisciplina
						  ');
		$this->db->join('disciplinas', 'disciplinas.id = notas_frequencias.id_disciplina');
		$this->db->where('notas_frequencias.id_turma',$turma);
		$this->db->where('notas_frequencias.id_disciplina',$disciplina);
		$query = $this->db->get("notas_frequencias");
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return $query->result();
	}
	
	
} // Fim class