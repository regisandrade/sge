<?php if ( ! defined('BASEPATH')) exit('Sem permissão de acesso ao arquivo');

class Alunos extends CI_Controller {

	function __construct(){
        parent::__construct();

        # carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);
		$this->load->model('Alunos_model','alu',TRUE);
    }

    public function index($msg)
	{
		$data['config'] = $this->conf->getConfiguracao();
		$data['msg'] = $msg;
		$this->load->view('inicio/inicio_view',$data);
	}

	public function listar()
	{
		$data['config'] = $this->conf->getConfiguracao();
		$data['resultado'] = $this->alu->getAlunos();

		$data['pagina'] = 'alunos/listar_alunos';
 		view_sistema('inicio/home_view',$data);
	}

	public function deletar()
	{
		$data['config'] = $this->conf->getConfiguracao();

		if ($this->alu->deleteAluno($this->uri->segment(3))) {
			$data['msg'] = "Registro excluído com sucesso.";
		} else {
			$data['msg'] = "Erro ao tentar excluir o registro.";
		}

		$data['resultado'] = $this->alu->getAlunos();

		$data['pagina'] = 'alunos/listar_alunos';
		view_sistema('inicio/home_view',$data);
	}

	public function gravar()
	{
		$data['config'] = $this->conf->getConfiguracao();

		# Colocar aqui o código
		
		$data['pagina'] = 'alunos/listar_alunos';
		view_sistema('inicio/home_view',$data);
	}

}