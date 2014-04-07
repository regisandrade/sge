<?php
function getMenu() {
	# Criar o menu do primeiro nível
	$menu = array('Cadastro' =>  
						array('Alunos' => 'modulo/banners',
							  'Artigos' => 'caminho',
							  'Avisos' => 'caminho',
							  'Cronogramas' => 'caminho',
							  'Currículos' => 'caminho',
							  'Cursos' => 'caminho',
							  'Depoimentos' => 'caminho',
							  'Disciplinas' => 'caminho',
							  'Material de apoio' => 'caminho',
							  'Links' => 'caminho',
							  'Notas & Frequências' => 'caminho',
							  'Professores' => 'caminho',
							  'Turmas' => 'caminho',
							  ),
				  'Educacional' => 
				  		array('Matrículas'=>'caminho',
							  'Senhas dos Alunos' => 'caminho',
							  'Alunos em potencial' => 'caminho',
							  'Pré-Inscrições' => 'caminho',
							  'Históricos Escolares' => 'caminho',
							  'Área do Aluno' => 'caminho',
				  			 ),
				  'Newsletter' => 
				  		array('Newsletter'=>'usuarios/listarUsuarios'),
				  'Financeiro' => 
				  		array('Boletos Emitidos'=>'usuarios/listarUsuarios'),
				  'Usuários' => 
				  		array('Lista de usuários'=>'usuarios/listarUsuarios',
				  			  'Novo usuários'=>'usuarios/form_usuario'),
				  'Site' =>  
						array('Configuração' => 'modulo/configuracao',
							  'Banners' => 'modulo/banners',
							  'Empresa' => 'caminho',
							  'Fotos' => 'caminho',
							  'Notícias' => 'caminho'),
		  		  'Sair' => 
				  		array('Sair'=>'usuarios/logout'));

	return $menu;
}
?>