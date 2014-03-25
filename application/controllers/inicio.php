<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->model('Configuracao_model','conf',TRUE);
		$data['config'] = $this->conf->getConfiguracao();

		$this->load->view('inicio/inicio_view',$data);
	}

}