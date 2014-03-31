<?php
function getMenu() {
	# Criar o menu do primeiro nível
	$menu = array('Cadastro' =>  
						array('Banners' => 'modulo/banners',
							  'Empresa' => 'caminho',
							  'Fotos' => 'caminho',
							  'Notícias' => 'caminho'),
				  'Administração' => 
				  		array('Configuração'=>'caminho'),
				  'Usuários' => 
				  		array('Lista de usuários'=>'usuarios/listarUsuarios',
				  			  'Novo usuários'=>'usuarios/form_usuario'),
				  'Sair' => 'caminho');

	return $menu;
}
?>