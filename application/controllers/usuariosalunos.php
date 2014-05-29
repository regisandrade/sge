<?php if ( ! defined('BASEPATH')) exit('Sem permissão de acesso ao arquivo');

class Usuariosalunos extends CI_Controller {

	function __construct(){
        parent::__construct();

        # carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);
		$this->load->model('Usuariosalunos_model','usuAlunos',TRUE);
    }

    function listarUsuariosAlunos() {
 		$data['config'] = $this->conf->getConfiguracao();
		$data['resultado'] = $this->usuAlunos->getUsuariosAlunos();

		$data['pagina'] = 'usuariosalunos/listar_usuarios_alunos';
 		view_sistema('inicio/home_view',$data);
 	}
}