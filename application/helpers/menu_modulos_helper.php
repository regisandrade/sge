<?php
function getMenu() {
	# Criar o menu do primeiro nível
	$menu = array('Cadastro' =>  
						array('Alunos' => 'modulo/banners',
							  'Artigos' => 'generic/modulos/artigos',
							  'Avisos' => 'generic/modulos/avisos',
							  'Cronogramas' => 'caminho',
							  'Currículos' => 'caminho',
							  'Cursos' => 'generic/modulos/cursos',
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
						array('Configuração' => 'generic/modulos/configuracao',
							  'Descriçoes dos Cursos' => 'generic/modulos/descricaoCursos',
							  'Banners' => 'generic/modulos/banners',
							  'Empresa' => 'generic/modulos/empresa',
							  'Fotos' => 'generic/modulos/galerias',
							  'Notícias' => 'generic/modulos/noticias'),
		  		  'Sair' => 
				  		array('Sair'=>'usuarios/logout'));

	return $menu;
}
?>