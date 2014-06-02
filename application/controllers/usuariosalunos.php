<?php if ( ! defined('BASEPATH')) exit('Sem permissão de acesso ao arquivo');

class Usuariosalunos extends CI_Controller {

	function __construct(){
        parent::__construct();

        # carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);
		$this->load->model('Usuariosalunos_model','usuAlunos',TRUE);
		$this->load->model('Alunos_model','alu',TRUE);
    }

    function listarUsuariosAlunos() {
 		$data['config'] = $this->conf->getConfiguracao();
		$data['resultado'] = $this->usuAlunos->getUsuariosAlunos();

		$data['pagina'] = 'usuariosalunos/listar_usuarios_alunos';
 		view_sistema('inicio/home_view',$data);
 	}

 	/**
 	* Função para resetar a senha do aluno e enviar um e-mail para o mesmo
 	*/
	function resetarSenhaAluno() {
		$data['config'] = $this->conf->getConfiguracao();

		# 1) Verificar se o aluno esta ok
		$temUsuario = $this->usuAlunos->getUsuarioAluno($this->uri->segment(3));
		
		if($temUsuario) {
			# 2) Resetar a senha
			$this->usuAlunos->resetarSenha($this->uri->segment(3));
			
			# 3) Enviar a senha para o aluno

			$nomeAluno = $this->alu->getNomeAluno($temUsuario->id_aluno);
			$data['msg'] = "A senha do aluno(a) <strong>".$nomeAluno->nome."</strong>, foi alterada e enviada para ele(a) por e-mail.<br>Sua nova senha é: <strong>mudar123</strong>.";
		}
		else {
			$data['msg'] = "Atenção<br>Este aluno(a) não esta cadastrado em nosso sistema.";
		}
		
		$data['resultado'] = $this->usuAlunos->getUsuariosAlunos();
		$data['pagina'] = 'usuariosalunos/listar_usuarios_alunos';
		view_sistema('inicio/home_view',$data);
	}

	/**
	* Função criada para logar pela área administrativa do sistema.
	*/
	function loginAluno() {
		$retorno = $this->usuAlunos->loginaluno($this->input->post('login'),$this->input->post('senha'));
		if ($retorno) {
			# Colocar aqui o caminho da area do aluno
		} else {
			# Erro
			$data['msg'] = "Atenção<br>Usuário/e-Mail ou Senha estão incorretos.";
			$data['pagina'] = 'alunos/formAreaAluno';
			view_sistema('inicio/home_view',$data);
		}
		
	}

}