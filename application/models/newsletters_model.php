<?php
class Newsletters_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getUsuariosNewsletter() {
		$resultado = $this->db->get("newsletters")->result();
	}
}