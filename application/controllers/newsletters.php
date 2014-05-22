<?php if ( ! defined('BASEPATH')) exit('Sem permissão de acesso ao arquivo');

class Newsletters extends CI_Controller {

	function __construct(){
        parent::__construct();

        # carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);
		$this->load->model('Newsletters_model','news',TRUE);
    }

	function getUsuariosNewsletter() {
 		$data['config'] = $this->conf->getConfiguracao();
 		$data['resultado'] = $this->news->getUsuariosNewsletter();
 		#echo "<pre>"; print_r($data); exit;
		$data['pagina'] = 'newsletters/listar_newsletters';
 		view_sistema('inicio/home_view',$data);
 	}

 	function exportExcel() {
 		$data['config'] = $this->conf->getConfiguracao();

		$this->load->library('export');
		$sql = $this->news->getUsuariosNewsletter();
		$this->export->to_excel($sql, 'nameForFile'); 

		$data['pagina'] = 'newsletters/listar_newsletters';
 		view_sistema('inicio/home_view',$data);
 	}

}