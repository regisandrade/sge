<?php
class Matriculas_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function matricularAluno($_id_aluno) {
		/*
		Regras:
		1. Verificar se o aluno já esta matriculado na turma selecionada
		2. Matricular o aluno
		3. Alterar o status web=Não na tabela de aluno, para ele não aparecer
		   no relatório :: Pré-inscrição
		*/
		$resultado = $this->db->get("newsletters")->result();
	}
}