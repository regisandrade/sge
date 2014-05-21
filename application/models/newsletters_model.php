<?php
class Newsletters_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getUsuariosNewsletter() {
		return $this->db
					->order_by("nome")
					->get("newsletters")->result();
		#echo ">>> <pre>".print_r($this->db->last_query()); exit;
	}
}