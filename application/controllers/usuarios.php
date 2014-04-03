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
		
		$obj = new StdClass;
		$obj->us_id = '';
		$obj->us_nome = '';
		$obj->us_estado = '';
		$obj->us_cidade = '';
		$obj->us_email = '';
		$obj->us_telefone = '';
		$obj->us_tipo = '';
		$obj->us_ativo = 1;


		if(count($_POST)){
			$data['dados'] = valida_fields('usuarios',$_POST);
		}else{
			if($this->uri->segment(3)){
				$user_array = $this->usu->getUsuario($this->uri->segment(3));
				$data['dados'] = $user_array;
			}else{
				$data['dados'] = $obj;			
			}
		}

		if(isset($_POST['us_nome']) && $_POST['us_email'] != ""){
			$senha_descript = $_POST['us_pw'];
			if($_POST['us_pw'] != ""){
				$_POST['us_pw'] = sha1($_POST['us_pw']);
			}
		/*echo "<pre>1212"; print_r($_POST); print_r($data); echo "</pre>";
		die('aqui');*/
			//Editar ou Inserir
			if(empty($_POST['us_id'])){
				
				if(!$this->usu->emailExiste($_POST['us_email'])){
					if(isset($_POST['us_permissao']))
						$_POST['us_permissao'] = json_encode($_POST['us_permissao']);
					
					# Gravar dados
					if($this->usu->addUsuario($_POST))
						$data['msg'] = 'Cadastrado com sucesso!';
					else
						$data['msg'] = 'Erro no cadastro!';
					
					$data['dados'] = $obj;
				}else{
					$data['msg'] = 'Este e-mail já existe, tenet outro';

					$obj->us_id = '';
					$obj->us_nome = $_POST['us_nome'];
					$obj->us_estado = $_POST['us_estado'];
					$obj->us_cidade = $_POST['us_cidade'];
					$obj->us_email = '';
					$obj->us_telefone = $_POST['us_telefone'];
					$obj->us_ativo = 1;
					$data['dados'] = $obj;
				}
				/*echo "<pre>1212"; print_r($_POST); echo "</pre>";
				die('aqui');*/
			}else{
				//Alterar
				if(isset($_POST['us_permissao']))
					$_POST['us_permissao'] = json_encode($_POST['us_permissao']);
				
				$retorno = $this->usu->updateUsuario($_POST['us_id'], $_POST);
				if ($retorno) {
					$data['dados'] = $this->usu->getUsuario($_POST['us_id']);
					$data['msg'] = 'Alterado com sucesso!';
				} else {
					$data['dados'] = $obj;
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

 	function deleteUsuario() {
 		$data['config'] = $this->conf->getConfiguracao();

 		if ($this->usu->deleteUsuario($this->uri->segment(3))) {
 			$data['msg'] = "Registro excluído com sucesso.";
 		} else {
 			$data['msg'] = "Erro ao tentar excluir o registro.";
 		}

 		$data['resultado'] = $this->usu->getUsuarios();

		$data['pagina'] = 'usuarios/listar_usuarios';
 		view_sistema('inicio/home_view',$data);
 	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */