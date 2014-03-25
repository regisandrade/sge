<?php

class Configuracao_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getConfiguracao() {
		$config = $this->db->get('configuracao')->result();
		return current($config);
	}
}

?>