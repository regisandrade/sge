<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public $dados;

	function __construct(){
        parent::__construct();

        $this->load->model('Configuracao_model','conf',TRUE);
		/*$dados['config'] = $this->conf->getConfiguracao();*/
    }

	public function index() {
		/*$this->load->model('Configuracao_model','conf',TRUE);*/
		$data['config'] = $this->conf->getConfiguracao();

		$this->load->view('inicio/inicio_view',$data);
	}

	public function home() {
		/*$this->load->model('Configuracao_model','conf',TRUE);*/
		$data['config'] = $this->conf->getConfiguracao();

		$this->load->view('inicio/home_view',$data);
	}

}