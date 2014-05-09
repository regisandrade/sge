<?php if ( ! defined('BASEPATH')) exit('Sem permissão de acesso ao arquivo');

class Notasefrequencias extends CI_Controller {

	function __construct(){
        parent::__construct();

        # carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);
		$this->load->model('Notasefrequencias_model','notas',TRUE);
		$this->load->model('Turmas_model','turmas',TRUE);
    }

	public function index($msg)
	{
		$data['config'] = $this->conf->getConfiguracao();
		$data['msg'] = $msg;
		$this->load->view('inicio/inicio_view',$data);
	}
	
	function listarNotasFrequencias() {
		$data['config'] = $this->conf->getConfiguracao();
		$data['turmas'] = $this->turmas->getTurmas();
		
		$data['pagina'] = 'notasefrequencias/listar_notasefrequencias';
		view_sistema('inicio/home_view',$data);
	}

	function getNotasFrequencias() {
		$resultados = $this->notas->getNotasFrequencias($this->uri->segment(3),$this->uri->segment(4));
		echo json_encode($resultados);
	}
	
} // Fim class