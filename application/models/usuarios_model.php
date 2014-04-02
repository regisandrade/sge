<?php

class Usuarios_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function validate(){
		// grab user input
		$login = $this->security->xss_clean($this->input->post('usuario'));
		$senha = $this->security->xss_clean($this->input->post('senha'));

		// Prep the query
		$this->db->where('us_email', $login);
		$this->db->where('us_pw', sha1($senha));

		// Run the query
		$query = $this->db->get('usuarios');
		#echo ">>> ".$this->db->last_query(); exit;
		// Let's check if there are any results

		if($query->num_rows == 1) {
			// If there is a user, then create session data
			$row = $query->row();
			#print_r($row);exit;
			$data = array(
						'us_id' => $row->us_id,
						'us_nome' => $row->us_nome,
						'us_estado' => $row->us_estado,
						'us_cidade' => $row->us_cidade,
						'us_telefone' => $row->us_telefone,
						'us_email' => $row->us_email,
						'us_permissao' => $row->us_permissao,
						'us_tipo' => $row->us_tipo,
						'us_ativo' => $row->us_ativo,
						'us_time' => $row->us_time,
						'logadminxli'=> true
			        );
			$this->session->set_userdata($data);
			
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
    }

    /**
    * Retorno todos os usuários no banco
    */
    public function getUsuarios() {
    	return $this->db->get("usuarios")->result();;
    }

    /**
    * Retorno um usuário
    */
    public function getUsuario($_id) {
    	return $this->db->where('us_id', $_id)->get('usuarios')->row();
    }

    /**
    * Adicionar usuário
    */
    public function addUsuario($dados = array()) {
		$retorno = $this->db->insert('usuarios', valida_fields('usuarios',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		return ($retorno ? true : false);
    }

    /**
    * Alterar usuário
    */
    public function updateUsuario($id, $dados = array()) {
		$retorno = $this->db->where('us_id',$id)->update('usuarios',valida_fields('usuarios',$dados));
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
		if ($retorno) {
			return true;
		} else {
			return false;
		}
    }

    /**
    * Deletar usuário
    */
    public function deleteUsuario() {

    }

    /**
    * verificar se o e-mail existe
    */
    public function emailExiste($_email) {
    	$retorno = $this->db->where('us_email', $_email)->get('usuarios')->row();
    	return ($retorno ? true : false);
    }

}
