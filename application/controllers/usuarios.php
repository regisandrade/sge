<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){
        parent::__construct();

        # carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);
		$this->load->model('Usuarios_model','usu',TRUE);
    }

	public function index($msg)
	{
		$data['config'] = $this->conf->getConfiguracao();
		
		$data['msg'] = $msg;
		$this->load->view('inicio/inicio_view',$data);
	}

	public function form_usuario(){

		$data['config'] = $this->conf->getConfiguracao();

		if(count($_POST)){
			$data['dados'] = valida_fields('usuarios',$_POST);
		}else{
			if($this->uri->segment(3)){
				$user_array = $this->usu->getUsuario($this->uri->segment(3));
				$data['dados'] = $user_array;
			}else{
				$data['dados'] = array('us_id'=>0,'us_nome'=>'','us_estado'=>'','us_permissao'=>'','us_cidade'=>'','us_email'=>'','us_telefone'=>'','us_tipo'=>'','us_ativo'=>1);
			}
		}
		if(isset($_POST['us_nome']) && $_POST['us_email'] != ""){
			$senha_descript = $_POST['senha'];
			if($_POST['senha'] != ""){
				$_POST['us_pw'] = sha1($_POST['senha']);
			}

			//Editar ou Inserir
			if(empty($_POST['us_id'])){
				#echo "<pre>1212"; print_r($_POST); echo "</pre>";
				if(!$this->usu->emailExiste($_POST['us_email'])){
					$_POST['us_permissao'] = json_encode($_POST['us_permissao']);
					$this->usu->addUsuario($_POST);
					$data['dados'] = array('us_id'=>'','us_nome'=>'','us_estado'=>'','us_cidade'=>'','us_email'=>'','us_telefone'=>'','us_tipo'=>'','us_ativo'=>1);
					$data['msg'] = 'Cadastrado com sucesso!';
				}else{
					$data['msg'] = 'E-mail já existe';
				}
			}else{
				//Alterar
				if(isset($_POST['us_permissao'])){
					$_POST['us_permissao'] = json_encode($_POST['us_permissao']);
				}
				$retorno = $this->usu->updateUsuario($_POST['us_id'], $_POST);
				if ($retorno) {
					$data['dados'] = $this->usu->getUsuario($_POST['us_id']);
					$data['msg'] = 'Alterado com sucesso!';
				} else {
					$data['dados'] = array('us_id'=>'','us_nome'=>'','us_estado'=>'','us_cidade'=>'','us_email'=>'','us_telefone'=>'','us_tipo'=>'','us_ativo'=>1);
					$data['msg'] = 'Erro ao alterar usuário!';
				}
			}
		}

		$data['pagina'] = 'usuarios/form_usuario';
		view_sistema('inicio/home_view',$data);
	}

	public function entrar() {
		# Validar
        $result = $this->usu->validate();
        if (! $result) {
        	$msg = 'Usuário ou senha inválido.';
            $this->index($msg);
        } else {
			redirect('inicio/home');
        }
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('/');
 	}

 	function listarUsuarios() {
 		$data['config'] = $this->conf->getConfiguracao();
		$data['resultado'] = $this->usu->getUsuarios();

		$data['pagina'] = 'usuarios/listar_usuarios';
 		view_sistema('inicio/home_view',$data);
 	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */