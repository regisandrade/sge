<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){
        parent::__construct();

        $this->load->model('Configuracao_model','conf',TRUE);
    }

	public function index($msg)
	{
		$data['config'] = $this->conf->getConfiguracao();
		
		$data['msg'] = $msg;
		$this->load->view('inicio/inicio_view',$data);
	}

	public function form_usuario(){

		$data['config'] = $this->conf->getConfiguracao();

		/*if(count($_POST)){
			$data['dados'] = valida_fields('usuarios',$_POST);
		}else{
			if($this->uri->segment(3)){
				$user_array = $this->db->where('us_id',$this->uri->segment(3))->get('usuarios')->result_array();
				#echo ">>> ".$this->db->last_query();
				$data['dados'] = $user_array[0];
			}else{
				$data['dados'] = array('us_id'=>0,'us_nome'=>'','us_estado'=>'','us_permissao'=>'','us_cidade'=>'','us_email'=>'','us_telefone'=>'','us_tipo'=>'','us_ativo'=>1);
			}
		}

		if(isset($_POST['us_nome']) && $_POST['us_email']!=""){
			$senha_descript = $_POST['senha'];
			if($_POST['senha']!=""){
				$_POST['us_pw'] = sha1($_POST['senha']);
			}
			//Editar ou Inserir
			if($_POST['us_id']==0){
				if(!$this->email_exists($_POST['us_email'])){
					$_POST['us_permissao'] = json_encode($_POST['us_permissao']);
					$this->db->insert('usuarios',valida_fields('usuarios',$_POST));
					$data['dados'] = array('us_id'=>'','us_nome'=>'','us_estado'=>'','us_cidade'=>'','us_email'=>'','us_telefone'=>'','us_tipo'=>'','us_ativo'=>1);
					$data['error'] = 'Cadastrado com sucesso!';
				}else{
					$data['error'] = 'E-mail já existe';
				}
			}else{
				//Alterar
				if(isset($_POST['us_permissao'])){
					$_POST['us_permissao'] = json_encode($_POST['us_permissao']);
				}
				$this->db->where('us_id',$this->uri->segment(4))->update('usuarios',valida_fields('usuarios',$_POST));
				$user_array = $this->db->where('us_id',$this->uri->segment(4))->get('usuarios')->result_array();
				$data['dados'] = $user_array[0];
				$data['error'] = 'Alterado com sucesso!';
			}
		}*/

		$data['pagina'] = 'usuarios/form_usuario';
		view_sistema('inicio/home_view',$data);
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
			redirect('inicio/home');
        }
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('/');
 	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */