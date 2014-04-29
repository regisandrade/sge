<?php
class Controle extends CI_Controller{
	private $modulo;
	private $table;
	private $pk;
	private $extensao;
	private $anexada;
	private $where_fk;
	private $order_fk;

	private $fields;
	private $info;

	public function __construct(){

		parent::__construct();
		$this->modulo = $_SESSION['modulo']['modulo'];
		$this->table = $_SESSION['modulo']['table'];
		$this->pk = $_SESSION['modulo']['pk'];
		$this->fields = $_SESSION['modulo']['fields'];
		$this->anexada = $_SESSION['modulo']['anexada'];
		$this->extensao = $_SESSION['modulo']['extensao'];
		$this->pai = isset($_SESSION['modulo']['pai'])?$_SESSION['modulo']['pai']:0;

		$this->where_fk = isset($_SESSION['modulo']['where_fk']) ? $_SESSION['modulo']['where_fk'] : null;
		$this->order_fk = isset($_SESSION['modulo']['order_fk']) ? $_SESSION['modulo']['order_fk'] : null;

		$this->info = array(
			'modulo'=>$this->modulo,
			'table'=>$this->table,
			'pk'=>$this->pk,
			'fields'=>$this->fields,
			'extensao'=>$this->extensao,
			'anexada'=>$this->anexada,
			'pai'=>$this->pai,
			'filtro'=>isset($_SESSION['modulo']['filtro'])?$_SESSION['modulo']['filtro']:false,
			'where_fk'=>$this->where_fk,
			'order_fk'=>$this->order_fk
		);

		# carrega modelo
        $this->load->model('Configuracao_model','conf',TRUE);

	}


	//Cria um array na sessão com informações de listagem
	public function config_filtro(){

		unset($_POST['pk']);
		$_SESSION['filtros'] = array();
		foreach($_POST as $field => $p){
			if(!empty($p)){
				list($type,$field) = explode('__',$field);
				$_SESSION['filtros'][] = array('type'=>$type,'field'=>$field,'val'=>$p);
			}
		}
		redirect(base_admin('listar'));
	}

	public function listar(){
		$data['config'] = $this->conf->getConfiguracao();

		//Verifica se há algum filtro no array
		if(isset($_SESSION['filtros'])&&count($_SESSION['filtros'])>0){
			foreach($_SESSION['filtros'] as $filto){

				if($filto['type']=='pk'){
					$this->db->where($filto['field'],$filto['val']);
				}

				if($filto['type']=='varchar'){
					$this->db->like($filto['field'],$filto['val']);
				}

				if($filto['type']=='fk'){
					$this->db->where($filto['field'],$filto['val']);
				}

			}
		}

		//Verifica se é uma extensão
		if($this->pai!=0){
			$this->db->where('id_pai',$this->pai);
		}

		#echo "<pre>"; print_r($this); exit;
		$dados = $this->db
					  ->order_by("ordem",'DESC')
					  ->order_by($this->pk,'DESC')
					  ->get($this->table)
					  ->result_array();
		#echo ">>> ".$this->db->last_query(); exit;
					  
		/*$this->load->library('paginacao');
		$this->paginacao->por_pagina(10);
		$data['dados'] = $this->paginacao->rows($dados);
		$data['links'] = $this->paginacao->links();*/

		#echo "<pre>"; print_r($this->info); echo "</pre>"; exit;
		$data['dados'] = $dados;
		$data['info'] = $this->info;
		$data['pagina'] = 'generic/listar';
		view_admin('home_view',$data);
	}

	public function add(){
		$data['config'] = $this->conf->getConfiguracao();
		$data['info'] = $this->info;

		$data['pagina'] = 'generic/add';
		view_admin('home_view',$data);
		}

	public function editar(){
		$data['config'] = $this->conf->getConfiguracao();
		$data['dados']  = $this->db->where($this->pk,$this->uri->segment(4))->get($this->table)->row();

		$data['info'] = $this->info;
		$data['pagina'] = 'generic/editar';
		view_admin('home_view',$data);
		}

	public function ordem(){
		$this->db->where($this->pk,$this->uri->segment(4))->update($this->table,array(
		'ordem'=>$_GET['direcao']
		));
		redirect(base_admin('controle/listar'));
		}

	public function salvar_novo(){

		$_POST['insert_data'] = date('Y-m-d H:i:s');
		$_POST['update_data'] = date('Y-m-d H:i:s');

		if($this->pai!=0){
			$_POST['id_pai'] = $this->pai;
		}
		
		# Verificar datas
		if (isset($_POST['dataInicio'])) {
			$_POST['dataInicio'] = dataBd($_POST['dataInicio']);
		}
		if (isset($_POST['dataFim'])) {
			$_POST['dataFim'] = dataBd($_POST['dataFim']);
		}
		if (isset($_POST['data_nascimento'])) {
			$_POST['data_nascimento'] = dataBd($_POST['data_nascimento']);
		}
		if (isset($_POST['data_inicio'])) {
			$_POST['data_inicio'] = dataBd($_POST['data_inicio']);
		}
		if (isset($_POST['data_fim'])) {
			$_POST['data_fim'] = dataBd($_POST['data_fim']);
		}
		if (isset($_POST['data_01'])) {
			$_POST['data_01'] = dataBd($_POST['data_01']);
		}
		if (isset($_POST['data_02'])) {
			$_POST['data_02'] = dataBd($_POST['data_02']);
		}
		if (isset($_POST['data_03'])) {
			$_POST['data_03'] = dataBd($_POST['data_03']);
		}
		if (isset($_POST['data_04'])) {
			$_POST['data_04'] = dataBd($_POST['data_04']);
		}
		if (isset($_POST['data_05'])) {
			$_POST['data_05'] = dataBd($_POST['data_05']);
		}
		if (isset($_POST['data_06'])) {
			$_POST['data_06'] = dataBd($_POST['data_06']);
		}	
		
		# Arquivos no formulario
		if (isset($_FILES['arquivo']['name'])) {
			
			$path = './uploads/';
			if(!file_exists($path)){
				mkdir($path);
			}

			$config['upload_path'] = "./uploads/";
			$config['upload_url'] = base_url()."uploads/";
			$config['allowed_types'] = 'gif|jpg|JPG|jpeg|JPEG|png|zip|rar|doc|docx|pdf|xls|xlsx';
			$config['overwrite'] = true;

			$this->load->library('upload');
			$this->upload->initialize($config); 

			if(!$this->upload->do_upload('arquivo')) {
				redirect(base_admin('controle/listar/msgid/4'));
			}

			$_POST['arquivo'] = $_FILES['arquivo']['name'];
		}

		#echo "<pre>"; print_r($_FILES); print_r($_POST); exit;
		$this->db->insert($this->table,$_POST);
		#echo "<pre>"; print_r($_POST);
		#echo ">>> ".$this->db->last_query(); exit;
		if(isset($_GET['aplicar'])&&$_GET['aplicar']=='sim'){
			redirect(base_admin('controle/add'));
		}else{
			redirect(base_admin('controle/listar/msgid/1'));
		}
	}

	public function salvar_update(){
		$_POST['update_data'] = date('Y-m-d H:i:s');

		# Verificar datas
		if (isset($_POST['dataInicio'])) {
			$_POST['dataInicio'] = dataBd($_POST['dataInicio']);
		}
		if (isset($_POST['dataFim'])) {
			$_POST['dataFim'] = dataBd($_POST['dataFim']);
		}
		if (isset($_POST['data_nascimento'])) {
			$_POST['data_nascimento'] = dataBd($_POST['data_nascimento']);
		}
		if (isset($_POST['data_inicio'])) {
			$_POST['data_inicio'] = dataBd($_POST['data_inicio']);
		}
		if (isset($_POST['data_fim'])) {
			$_POST['data_fim'] = dataBd($_POST['data_fim']);
		}
		if (isset($_POST['data_01'])) {
			$_POST['data_01'] = dataBd($_POST['data_01']);
		}
		if (isset($_POST['data_02'])) {
			$_POST['data_02'] = dataBd($_POST['data_02']);
		}
		if (isset($_POST['data_03'])) {
			$_POST['data_03'] = dataBd($_POST['data_03']);
		}
		if (isset($_POST['data_04'])) {
			$_POST['data_04'] = dataBd($_POST['data_04']);
		}
		if (isset($_POST['data_05'])) {
			$_POST['data_05'] = dataBd($_POST['data_05']);
		}
		if (isset($_POST['data_06'])) {
			$_POST['data_06'] = dataBd($_POST['data_06']);
		}

		# Arquivos no formulario
		if (isset($_FILES['arquivo']['name'])) {
			
			$path = './uploads/';
			if(!file_exists($path)){
				mkdir($path);
			}

			$config['upload_path'] = "./uploads/";
			$config['upload_url'] = base_url()."uploads/";
			$config['allowed_types'] = 'gif|jpg|JPG|jpeg|JPEG|png|zip|rar|doc|docx|pdf|xls|xlsx';
			$config['overwrite'] = true;

			$this->load->library('upload');
			$this->upload->initialize($config); 

			if(!$this->upload->do_upload('arquivo')) {
				redirect(base_admin('controle/listar/msgid/4'));
			}
		}
		
		$this->db->where($this->pk,$this->uri->segment(4))->update($this->table,$_POST);
		#echo ">>> ".$this->db->last_query(); exit;
		if(isset($_GET['aplicar'])&&$_GET['aplicar']=='sim'){
			redirect(base_admin('editar/'.$this->uri->segment(4)));
		}else{
			redirect(base_admin('controle/listar/msgid/2'));
		}
	}

	public function excluir(){
		if(!permissao($this->modulo,'remover')){
			redirect(base_admin('controle/listar/msgid/5'));
			exit;
		}

		$this->db->where($this->pk,$this->uri->segment(4))->delete($this->table);
			redirect(base_admin('controle/listar/msgid/3'));
	}

} // Fim da classe