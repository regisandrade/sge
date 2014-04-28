<?php
function getMenu() {
	# Criar o menu do primeiro nível
	$menu = array('Cadastro' =>  
						array('Alunos' => 'modulo/banners',
							  'Artigos' => 'generic/modulos/artigos',
							  'Avisos' => 'generic/modulos/avisos',
							  'Cronogramas' => 'generic/modulos/cronogramas',
							  'Currículos' => 'generic/modulos/curriculos',
							  'Cursos' => 'generic/modulos/cursos',
							  'Depoimentos' => 'caminho',
							  'Material de apoio' => 'caminho',
							  'Links' => 'generic/modulos/links',
							  'Notas & Frequências' => 'caminho',
							  'Professores' => 'generic/modulos/professores',
							  'Turmas' => 'generic/modulos/turmas',
							  'Disciplinas' => 'generic/modulos/disciplinas',
							  'Disciplinas da Turma' => 'generic/modulos/disciplinas_turmas',
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
				  		array('Boletos Emitidos'=>'usuarios/listarUsuarios',
				  			  'Bancos' => 'generic/modulos/bancos',
				  			  'Contas bancárias' => 'generic/modulos/contas_bancarias',
				  			  'Centros de custos' => 'generic/modulos/centros_custos',
				  			  'Categorias de contas' => 'generic/modulos/categorias_contas',
				  			  'Contas' => 'generic/modulos/contas',
				  			 ),
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