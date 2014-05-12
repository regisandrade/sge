<?php
function getMenu() {
	# Criar o menu do primeiro nível
	$menu = array('Cadastro' =>  
						array(
							  'Artigos' => 'generic/modulos/artigos',
							  'Avisos' => 'generic/modulos/avisos',							  
							  'Links' => 'generic/modulos/links',
							  ),
				  'Educacional' => 
				  		array(
				  			  'Alunos' => 'alunos/listar',
				  			  'Matrículas'=>'caminho',
				  			  'Cronogramas' => 'generic/modulos/cronogramas',
				  			  'Currículos' => 'generic/modulos/curriculos',
				  			  'Cursos' => 'generic/modulos/cursos',
				  			  'Depoimentos' => 'generic/modulos/depoimentos',
				  			  'Disciplinas' => 'generic/modulos/disciplinas',
				  			  'Disciplinas da Turma' => 'generic/modulos/disciplinas_turmas',
				  			  'Material de apoio' => 'generic/modulos/exercicios',
				  			  'Notas & Frequências' => 'notasefrequencias/listarNotasFrequencias',
				  			  'Professores' => 'generic/modulos/professores',
				  			  'Turmas' => 'generic/modulos/turmas',
							  'Senhas dos Alunos' => 'alunos/getSenhasAlunos',
							  'Alunos em potencial' => 'alunos/relAlunosPotenciais',
							  'Pré-Inscrições' => 'alunos/relAlunosPreInscricao',
							  'Históricos Escolares' => 'alunos/relHistoricoEscolar',
							  'Área do Aluno' => 'alunos/formAreaAluno',
				  			 ),
				  'Newsletter' => 
				  		array('Newsletter'=>'usuarios/listarUsuarios'),
				  'Financeiro' => 
				  		array('Boletos Emitidos'=>'usuarios/listarUsuarios',
				  			  'Bancos' => 'generic/modulos/bancos',
				  			  'Contas bancárias' => 'generic/modulos/contas_bancarias',
				  			  /*'Centros de custos' => 'generic/modulos/centros_custos',*/
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