<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index($msg)
	{
		$this->load->model('Configuracao_model','conf',TRUE);
		$data['config'] = $this->conf->getConfiguracao();
		
		$data['msg'] = $msg;
		$this->load->view('inicio/inicio_view',$data);
	}

	public function entrar() {
		# carrega modelo
		$this->load->model('Usuarios_model','usu',TRUE);

		# Validar
        $result = $this->usu->validate();
        if (! $result) {
        	$msg = 'Usuário ou senha inválido.';
            $this->index($msg);
        } else {
			redirect('home');
        }
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('/');
 	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */