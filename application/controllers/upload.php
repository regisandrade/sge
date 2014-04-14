<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	// function index()
	// {
	// 	$this->load->view('upload_form', array('error' => ' ' ));
	// }

	function do_upload()
	{

		$path = './uploads/';

		if(!file_exists($path)){
			mkdir($path);
		}

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|JPG|jpeg|JPEG|png|zip|rar|doc|docx|pdf|xls|xlsx';
		$config['overwrite'] = FALSE;
		//$config['file_name'] = url_title(str_ireplace(array('png','jpg','jpeg','gif','doc','xls','pdf','rar','zip'),array('','','','','','','','','','','',''),$arquivo['name']));

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()) {
			echo array('error' => $this->upload->display_errors());
			return false;
		}
		else {
			echo array('upload_data' => $this->upload->data());
			return true;
		}
	}
}
?>