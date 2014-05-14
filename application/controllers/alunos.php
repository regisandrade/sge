<?php if ( ! defined('BASEPATH')) exit('Sem permissão de acesso ao arquivo');

class Alunos extends CI_Controller {

	function __construct(){
        parent::__construct();

        # carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);
		$this->load->model('alunos_model','alu',TRUE);
		$this->load->model('enderecos_model','ende',TRUE);
		$this->load->model('graduacoes_model','gra',TRUE);
		$this->load->model('usuariosalunos_model','usu',TRUE);
		$this->load->model('estados_model','uf',TRUE);
		$this->load->model('cursos_model','cur',TRUE);
    }

    public function index($msg)
	{
		$data['config'] = $this->conf->getConfiguracao();
		$data['msg'] = $msg;
		$this->load->view('inicio/inicio_view',$data);
	}
	
	public function form_aluno(){
		$data['config'] = $this->conf->getConfiguracao();
		$data['estados'] = $this->uf->getEstados();
		$data['cursos'] = $this->cur->getCursos();
		
		$data['pagina'] = 'alunos/form_aluno';
		view_sistema('inicio/home_view',$data);
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
		echo "<pre>"; print_r($_POST);
		# 1. Gravar os dados do aluno
		$dadosBasico = array('id_curso' => $_POST['id_curso'],
							 'nome' => $_POST['nome'],
							 'data_nascimento' => dataBd($_POST['data_nascimento']),
							 'naturalidade' => $_POST['naturalidade'],
							 'uf_naturalidade' => $_POST['uf_naturalidade'],
							 'nacionalidade' => $_POST['nacionalidade'],
							 'sexo' => $_POST['sexo'],
							 'rg' => $_POST['rg'],
							 'orgao' => $_POST['orgao'],
							 'cpf' => $_POST['cpf'],
							 'email' => $_POST['email'],
							 'web' => $_POST['web']);
		$id_aluno = $this->alu->addAluno($dadosBasico);
		
		if(!$id_aluno){
			$data['msg'] = "Erro ao tentar gravar dados do aluno";
		}
		
		# 2. Gravar o endereço do aluno
		$dadosEndereco = array('id_aluno' => $id_aluno,
								'endereco' => $_POST['endereco'],
								'bairro' => $_POST['bairro'],
								'cep' => $_POST['cep'],
								'cidade' => $_POST['cidade'],
								'uf_endereco' => $_POST['uf_endereco'],
								'fone_residencial' => $_POST['fone_residencial'],
								'fone_celular' => $_POST['fone_celular'],
								'fone_comercial' => $_POST['fone_comercial']);
		
		if(!$this->ende->addEndereco($dadosEndereco)){
			$data['msg'] = "Erro ao tentar gravar dados do endereco";
		}
		
		# 3. Gravar a graduação do aluno
		$dadosGraduacao = array('id_aluno' => $id_aluno,
				'curso' => $_POST['curso'],
				'instituicao' => $_POST['instituicao'],
				'sigla' => $_POST['sigla'],
				'cidade' => $_POST['cidade'],
				'ano_conclusao' => $_POST['ano_conclusao']);
		
		if(!$this->gra->addGraduacao($dadosGraduacao)){
			$data['msg'] = "Erro ao tentar gravar dados da graduação";
		}
		
		# 4. Gracar o usuário/email do aluno com senha sha1
		$dadosUsuario = array('id_aluno' => $id_aluno,
				'login' => $_POST['email'],
				'senha' => sha1('123@456'));
		
		if(!$this->usu->addUsuarioAluno($dadosUsuario)){
			$data['msg'] = "Erro ao tentar gravar dados da graduação";
		}
		die;
		
		$data['pagina'] = 'alunos/listar_alunos';
		view_sistema('inicio/home_view',$data);
	}

}