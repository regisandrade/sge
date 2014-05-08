<?php if ( ! defined('BASEPATH')) exit('Sem permissão de acesso ao arquivo');

class Disciplinasturmas extends CI_Controller {

	function __construct(){
		parent::__construct();

		# carrega modelo
		$this->load->model('Disciplinasturmas_model','disciplinasturmas',TRUE);
	}

	/**
	* Buscar todas as disciplinas da turma passada
	* @
	*/
	public function getDisciplinas(){
		$resultados = $this->disciplinasturmas->getDisciplinas($this->uri->segment(3));
		echo json_encode($resultados);
	}

}// final da classe