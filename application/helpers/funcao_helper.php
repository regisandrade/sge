<?php

function set_alert($tipo,$msg){
	 $_SESSION['notificacao'][] = array('tipo'=>$tipo,'msg'=>$msg);
	}

function get_alerts(){
	 return isset($_SESSION['notificacao'])?$_SESSION['notificacao']:array();
	}

function zerar_alert(){
	 $_SESSION['notificacao'] = array();
	}


function dataUSA($data){
	list($d,$m,$y) = @explode('/',$data);
	return "$y-$m-$d";
}

function is_date($data){
	$date = @explode('-',$data);
	if(count($date)==3){
		$res = checkdate($date[1],$date[2],$date[0]);
		return $res==1;
	}else{
		return false;
	}
}

function dataHora ()
{
	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo');
	# strftime("%A, %d de %B de %Y", strtotime( date('Y-m-d') )); // Dia da semana, data de mês de ano
	return strftime("%d de %B de %Y", strtotime( date('Y-m-d') ));
}

function set_menu($menu='',$sub=''){
	 $objMenu = new stdClass;
	 $objMenu->menu = $menu;
	 $objMenu->sub = $sub;
	 $_SESSION['menu'] = $objMenu;
	}

function get_menu(){
	 
	 if(isset($_SESSION['menu'])){
		 return $_SESSION['menu'];
		 }else{
		 $objMenu = new stdClass;
		 $objMenu->menu = 'home';
		 $objMenu->sub = '';
		 return $objMenu;
		 }
	 
	}	
 
function base_admin($s = ''){
	$ci =& get_instance();
	return base_url('index.php/'.$ci->config->config['folder_admin'].'/'.$s);
	}

function verifica_usuario_logado(){
	if($this->session->userdata('logadminxli') !== false){
		redirect('/');
	}
}

function alias($url,$alias=''){
	$ci =& get_instance();
	
	if($alias==''){
		$alias = $url;
		}
	
	$alias = rtrim($alias,'-');
	
	$rs_alias = $ci->db
	->where('alias',$alias)
	->where('url',$url)
	->get('url_alias')->result();
	
	if(count($rs_alias)==0){
			 $ci->db->insert('url_alias',array(
			 'alias'=>$alias,
			 'url'=>$url
			 ));
			 
			}
	 return base_url('index.php/'.$alias);	
	}

function permissao($modulo,$acao){
	if(get_user()->us_tipo==2){
	$permissao = json_decode(get_user()->us_permissao);
	return isset($permissao->$modulo->$acao);
	}else{
		return true;
		}
	}

function view_sistema($view,$data=array()){
	$ci =& get_instance();
	$ci->load->view($view,$data);
}
	
function get_user_tipo(){
	$CI =& get_instance();
    $CI->load->library('session');
	return $CI->session->userdata('us_tipo');
}

function get_user(){
	$CI =& get_instance();
    $CI->load->library('session');
	return $CI->session->userdata('us_id');
}

function gerar_link($mostrar_para = array(1), $url = '', $texto = '', $attr = ''){
	 if(in_array(get_user()->us_tipo,$mostrar_para)){
	   echo anchor($url,$texto, $attr);
	 }
	}
	

function valida_fields($table,$fields){
	$ci = & get_instance();
	$fields_table = $ci->db->list_fields($table);
	$new_dados = array();
	foreach($fields as $k=> $f){
		if(in_array($k,$fields_table)){
			if($f != "" && $f != NULL){
			 $new_dados[$k] = $f;
			}
		}
	}
	return $new_dados;	
	}

function tipo_usuario($str){
	switch($str){
		case 1: return "Administrador"; break;
		case 2: return "Autor"; break;
		case 3: return "Colaborador"; break;
		case 4: return "Editor"; break;
		}
	}					
	
function gerarSenha(){
	$caracteresAceitos = 'abcdefghijklmnopqrstuvxywz0123456789';
	$max = strlen($caracteresAceitos)-1;
	$password = null;

	for($i=0; $i < 6; $i++) {
		$password .= $caracteresAceitos{mt_rand(0, $max)};
	}
	return $password;
}
