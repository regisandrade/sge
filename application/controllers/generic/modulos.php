<?php

/*
-----------------VEJA UM MODELO COMPLETO-----------------

	public function <nome_do_modelo>(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = '<nome_do_modelo>';
		$_SESSION['modulo']['table'] = '<nome_da_tabela_do_modelo>';
		$_SESSION['modulo']['pk'] = '<nome_chave_primaria>';
		$_SESSION['modulo']['anexada'] = 'produtos';
		$_SESSION['modulo']['extensao'] = array();
		$_SESSION['modulo']['pai'] = @$_GET['pai'];
		$_SESSION['modulo']['order'] = 'coluna'; // Coluna utilizada para ordenar a consulta
		$_SESSION['modulo']['order_fk'] = 'coluna_fk'; // Coluna utilizada para ordenar a consulta FK

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'<campo_chave_primaria>'=>array('type'=>'pk','label'=>'<label_ou_nome_campo>'),
		'<campo_imagem>'=>array('type'=>'img','label'=>'<label_ou_nome_campo>'),
		'<campo_file>'=>array('type'=>'file','label'=>'<label_ou_nome_campo>'),
		'<campo_varchar>'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'<label_ou_nome_campo>','class'=>'<nome_class>'),
		'<campo_enum>'=>array('type'=>'enum','valor'=>'"SIM","NAO"',DEFAULT=>'SIM','label'=>'<label_ou_nome_campo>'),
		'<campo_texto_simples>'=>array('type'=>'text','label'=>'<label_ou_nome_campo>'),
		'<campo_texto_rico_ckeditor>'=>array('type'=>'text','class'=>'ckeditor','label'=>'<label_ou_nome_campo>'),
		'<campo_data>'=>array('type'=>'date','notnull'=>0,'label'=>'<label_ou_nome_campo>'),
		'<campo_chave_estrangeira>'=>array('type'=>'fk','table_fk'=>'<nome_tabela_estrangeira>','fk_id'=>'<id_tabela_estrangeira>','fk_text'=>'<campo_texto_tabela_estrangeira>','label'=>'<label_ou_nome_campo>'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

------FIM DO EXEMPLO---------

*/

class Modulos extends CI_Controller{

   public function __construct(){
	   parent::__construct();
	   $_SESSION['filtros'] = array();
	   }

	public function configuracao(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'configuracao';
		$_SESSION['modulo']['table'] = 'configuracao';
		$_SESSION['modulo']['nomeTela'] = 'configuração';
		$_SESSION['modulo']['pk'] = 'id_configuracao';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
			'id_configuracao'=>array('type'=>'pk','label'=>'N°'),
			'empresa'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Empresa','class'=>'input-xxlarge'),
			'slogan'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'Slogan','class'=>'input-xlarge'),
			'descricao'=>array('type'=>'text','class'=>'ckeditor','size'=>200,'notnull'=>0,'label'=>'Descrição'),
			'email'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'E-mail','class'=>'input-xlarge'),
			'endereco'=>array('type'=>'text','class'=>'ckeditor','notnull'=>1,'label'=>'Endereço'),
			'telefone_1'=>array('type'=>'varchar','size'=>15,'notnull'=>1,'label'=>'Telefone 1','class'=>'input-medium'),
			'telefone_2'=>array('type'=>'varchar','size'=>15,'notnull'=>0,'label'=>'Telefone 2','class'=>'input-medium'),
			'facebook'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'Facebook','class'=>'input-xlarge'),
			'twitter'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'Twitter','class'=>'input-xlarge'),
			'linkedin'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'LinkedIn','class'=>'input-xlarge'),
			'meta_descricao'=>array('type'=>'varchar','size'=>200,'label'=>'Meta Descrição','class'=>'input-xxlarge'),
			'latitude_endereco'=>array('type'=>'varchar','size'=>20,'notnull'=>1,'label'=>'Latitude','class'=>'input-medium'),
			'longitude_endereco'=>array('type'=>'varchar','size'=>20,'notnull'=>1,'label'=>'Longitude','class'=>'input-medium'),
			'arquivo'=>array('type'=>'file', 'label'=>'Logo'),
			'url_area_aluno'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'URL área do aluno','class'=>'input-xlarge'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}


	public function noticias(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'noticias';
		$_SESSION['modulo']['table'] = 'noticias';
		$_SESSION['modulo']['nomeTela'] = 'notícias';
		$_SESSION['modulo']['pk'] = 'id_noticia';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_noticia'=>array('type'=>'pk','label'=>'Id'),
		'titulo'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Título','class'=>'input-xxlarge'),
		'texto'=>array('type'=>'text','class'=>'ckeditor','notnull'=>1,'label'=>'Notícia'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

	public function galerias(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'galerias';
		$_SESSION['modulo']['table'] = 'galerias';
		$_SESSION['modulo']['nomeTela'] = 'galerias';
		$_SESSION['modulo']['pk'] = 'id_galeria';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array('fotos'=>'Fotos');

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_galeria'=>array('type'=>'pk','label'=>'Id'),
		//'imagem'=>array('type'=>'img','label'=>'Imagem Capa'),
		'titulo'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Título','class'=>'input-xxlarge'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

	public function fotos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'fotos';
		$_SESSION['modulo']['table'] = 'fotos';
		$_SESSION['modulo']['nomeTela'] = 'fotos';
		$_SESSION['modulo']['pk'] = 'id_foto';
		$_SESSION['modulo']['anexada'] = 'galerias';
		$_SESSION['modulo']['extensao'] = array();
		$_SESSION['modulo']['pai'] = @$_GET['pai'];

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		 'id_foto'=>array('type'=>'pk','label'=>'Id'),
		 //'nome'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'nome'),
		 'foto'=>array('type'=>'img','label'=>'Foto'),
		 //'texto'=>array('type'=>'text','class'=>'ckeditor','label'=>'Texto')
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function empresa(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'empresa';
		$_SESSION['modulo']['table'] = 'empresa';
		$_SESSION['modulo']['nomeTela'] = 'empresa';
		$_SESSION['modulo']['pk'] = 'id_empresa';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_empresa'=>array('type'=>'pk','label'=>'Id'),
		'titulo'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Título','class'=>'input-xxlarge'),
		'texto'=>array('type'=>'text','class'=>'ckeditor','notnull'=>1,'label'=>'Conteúdo'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

	public function banners(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'banners';
		$_SESSION['modulo']['table'] = 'banners';
		$_SESSION['modulo']['nomeTela'] = 'banners';
		$_SESSION['modulo']['pk'] = 'id_banners';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_banners'=>array('type'=>'pk','label'=>'Id'),
		'imagem'=>array('type'=>'img','label'=>'Imagem'),
		'titulo'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo','class'=>'input-xxlarge'),
		'link'=>array('type'=>'varchar','size'=>200,'label'=>'Link','notnull'=>1,'class'=>'input-xxlarge'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

	public function descricaoCursos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'descricaoCursos';
		$_SESSION['modulo']['table'] = 'descricaoCursos';
		$_SESSION['modulo']['nomeTela'] = 'descrição do curso';
		$_SESSION['modulo']['pk'] = 'id_descricao_curso';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		$_SESSION['modulo']['order_fk'] = 'Nome';
		$_SESSION['modulo']['where_fk'] = 'Status = 1';

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
			'id_descricao_curso'=>array('type'=>'pk','label'=>'Id'),
			'codg_curso_descricao'=>array('type'=>'fk','table_fk'=>'curso','fk_id'=>'id','fk_text'=>'nome','label'=>'Curso','notnull'=>1),
			//'nome'=>array('type'=>'varchar','size'=>200,'label'=>'Nome'),
			'apresentacao'=>array('type'=>'text','class'=>'ckeditor','label'=>'Apresentação','notnull'=>1),
			'publico'=>array('type'=>'text','class'=>'ckeditor','label'=>'Público Alvo','notnull'=>1),
			'datas'=>array('type'=>'text','class'=>'ckeditor','label'=>'Datas Importantes','notnull'=>1),
			'inscricao'=>array('type'=>'text','class'=>'ckeditor','label'=>'Inscrição','notnull'=>1),
			'avaliacao'=>array('type'=>'text','class'=>'ckeditor','label'=>'Avaliação','notnull'=>1),
			'disciplinas'=>array('type'=>'text','class'=>'ckeditor','label'=>'Disciplinas','notnull'=>1),
			'metodologia'=>array('type'=>'text','class'=>'ckeditor','label'=>'Matodologia','notnull'=>1),
			'certificados'=>array('type'=>'text','class'=>'ckeditor','label'=>'Certificados','notnull'=>1),
			'duracao'=>array('type'=>'text','class'=>'ckeditor','label'=>'Duração do Curso','notnull'=>1),
			'numeroVagas'=>array('type'=>'text','class'=>'ckeditor','label'=>'Número de Vagas','notnull'=>1),
			'coordenacaogeral'=>array('type'=>'text','class'=>'ckeditor','label'=>'Coordenação Geral','notnull'=>1),
			'coordenacaoacademica'=>array('type'=>'text','class'=>'ckeditor','label'=>'Coordenação Acadêmica','notnull'=>1),
			'horario'=>array('type'=>'text','class'=>'ckeditor','label'=>'Horário das Aulas','notnull'=>1),
			'processo'=>array('type'=>'text','class'=>'ckeditor','label'=>'Processo Seletivo','notnull'=>1),
			'corpoDocente'=>array('type'=>'text','class'=>'ckeditor','label'=>'Corpo Docente','notnull'=>1),
			'informacoes'=>array('type'=>'text','class'=>'ckeditor','label'=>'Informações','notnull'=>1),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

	public function cursos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'cursos';
		$_SESSION['modulo']['table'] = 'curso';
		$_SESSION['modulo']['nomeTela'] = 'cursos';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Nome','class'=>'input-xxlarge'),
			'qtdeHoras'=>array('type'=>'varchar','size'=>10,'notnull'=>1, 'label'=>'Carga Horária','class'=>'input-small'),
			'dataInicio'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data Inicial'),
			'dataFim'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data Final'),
			'status'=>array('type'=>'enum','valor'=>'"Ativo","Inativo"', 'DEFAULT' => 'Ativo', 'notnull'=>1, 'label'=>'Status'),
			'flagMba'=>array('type'=>'enum','valor'=>'"Sim","Não"', 'DEFAULT' => 'Sim', 'notnull'=>1, 'label'=>'MBA'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

	public function artigos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'artigos';
		$_SESSION['modulo']['table'] = 'artigos';
		$_SESSION['modulo']['nomeTela'] = 'artigos';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
		 'id'=>array('type'=>'pk','label'=>'Id'),
		 'titulo'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo','class'=>'input-xlarge'),
		 'arquivo'=>array('type'=>'file','label'=>'Artigo'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function avisos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'avisos';
		$_SESSION['modulo']['table'] = 'avisos';
		$_SESSION['modulo']['nomeTela'] = 'avisos';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'titulo'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Título','class'=>'input-xlarge'),
			'descricao'=>array('type'=>'text','class'=>'ckeditor','notnull'=>1,'label'=>'Descrição'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	# Financeiro
	public function bancos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'bancos';
		$_SESSION['modulo']['table'] = 'bancos';
		$_SESSION['modulo']['nomeTela'] = 'bancos';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
			'site'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Site','class'=>'input-xlarge'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function contas_bancarias(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'contas_bancarias';
		$_SESSION['modulo']['table'] = 'contas_bancarias';
		$_SESSION['modulo']['nomeTela'] = 'contas bancárias';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_banco'=>array('type'=>'fk','table_fk'=>'bancos','fk_id'=>'id','fk_text'=>'nome','label'=>'Banco','notnull'=>0,'class'=>''),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
			'agencia'=>array('type'=>'varchar','size'=>20,'notnull'=>0,'label'=>'Agência','class'=>'input-medium'),
			'numero'=>array('type'=>'varchar','size'=>45,'notnull'=>0,'label'=>'Número','class'=>'input-medium'),
			'operacao'=>array('type'=>'int','notnull'=>1,'label'=>'Operação','class'=>'input-medium'),
			'gerente'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Gerente','class'=>'input-medium'),
			'telefone'=>array('type'=>'varchar','size'=>15,'notnull'=>1,'label'=>'Telefone','class'=>'input-medium'),
			
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function centros_custos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'centros_custos';
		$_SESSION['modulo']['table'] = 'centros_custos';
		$_SESSION['modulo']['nomeTela'] = 'centro de custo';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function categorias_contas(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'categorias_contas';
		$_SESSION['modulo']['table'] = 'categorias_contas';
		$_SESSION['modulo']['nomeTela'] = 'categoria da conta';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'tipo'=>array('type'=>'enum','valor'=>'"Receita","Despesa"', 'DEFAULT' => 'Receita', 'notnull'=>0, 'label'=>'Tipo'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function contas(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'contas';
		$_SESSION['modulo']['table'] = 'contas';
		$_SESSION['modulo']['nomeTela'] = 'contas';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_conta_bancaria'=>array('type'=>'fk','table_fk'=>'contas_bancarias','fk_id'=>'id','fk_text'=>'nome','label'=>'Conta Bancária','notnull'=>0),
			'id_categoria'=>array('type'=>'fk','table_fk'=>'categorias_contas','fk_id'=>'id','fk_text'=>'nome','label'=>'Categoria','notnull'=>0),
			'tipo'=>array('type'=>'enum','valor'=>'"Receita","Despesa"', 'DEFAULT' => 'Receita', 'notnull'=>0, 'label'=>'Tipo'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
			'valor'=>array('type'=>'varchar','size'=>15,'notnull'=>0,'label'=>'Valor','class'=>'input-xlarge'),
			'data_vencimento'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data Vencimento'),
			'pago'=>array('type'=>'enum','valor'=>'"Sim","Não"', 'DEFAULT' => 'Não', 'notnull'=>0, 'label'=>'Pago'),
			'recorrencia'=>array('type'=>'enum','valor'=>'"Sim","Não"', 'DEFAULT' => 'Não', 'notnull'=>0, 'label'=>'Recorrência'),
			'frequencia'=>array('type'=>'enum','valor'=>'"Diária","Semanal","Mensal","Bimestral","Trimestral","Semestral","Anual"', 'DEFAULT' => 'Diária', 'notnull'=>1, 'label'=>'Frequência'),
			'data_competencia'=>array('type'=>'varchar','size'=>10,'notnull'=>0,'label'=>'Data Competência','class'=>'input-xlarge'),
			/*'id_centro_custo'=>array('type'=>'fk','table_fk'=>'centros_custos','fk_id'=>'id','fk_text'=>'nome','label'=>'Centro Custo','notnull'=>0),*/
			'observacoes'=>array('type'=>'text','class'=>'ckeditor','label'=>'Observações','notnull'=>1),
			'arquivo'=>array('type'=>'file','label'=>'Arquivo'),
			
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function turmas(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'turmas';
		$_SESSION['modulo']['table'] = 'turmas';
		$_SESSION['modulo']['nomeTela'] = 'turmas';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'sigla'=>array('type'=>'varchar','size'=>30,'notnull'=>0,'label'=>'Sigla','class'=>'input-medium'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
			'id_curso'=>array('type'=>'fk','table_fk'=>'curso','fk_id'=>'id','fk_text'=>'nome','label'=>'Curso','notnull'=>1),
			'turma_fechada'=>array('type'=>'enum','valor'=>'"Sim","Não"', 'DEFAULT' => 'Não', 'notnull'=>0, 'label'=>'Turma Fechada?'),
			'data_inicio'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data Inicial'),
			'data_fim'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data Final'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function disciplinas_turmas(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'disciplinas_turmas';
		$_SESSION['modulo']['table'] = 'disciplinas_turmas';
		$_SESSION['modulo']['nomeTela'] = 'disciplinas da turma';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_turma'=>array('type'=>'fk','table_fk'=>'turmas','fk_id'=>'id','fk_text'=>'nome','label'=>'Turma','notnull'=>1),
			'id_disciplina'=>array('type'=>'fk','table_fk'=>'disciplinas','fk_id'=>'id','fk_text'=>'nome','label'=>'Disciplina','notnull'=>1),
			'id_professor'=>array('type'=>'fk','table_fk'=>'professores','fk_id'=>'id','fk_text'=>'nome','label'=>'Professor','notnull'=>1),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function disciplinas(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'disciplinas';
		$_SESSION['modulo']['table'] = 'disciplinas';
		$_SESSION['modulo']['nomeTela'] = 'disciplinas';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function professores(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'professores';
		$_SESSION['modulo']['table'] = 'professores';
		$_SESSION['modulo']['nomeTela'] = 'professores';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xxlarge'),
			'data_nascimento'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data de nascimento'),
			'sexo'=>array('type'=>'enum','valor'=>'"Masculino","Feminino"', 'DEFAULT' => 'Masculino', 'notnull'=>0, 'label'=>'Sexo'),
			'rg'=>array('type'=>'int','notnull'=>1,'label'=>'RG','class'=>'input-medium'),
			'orgao_expedidor'=>array('type'=>'varchar','size'=>10,'notnull'=>0,'label'=>'Orgão','class'=>'input-medium'),
			'cpf'=>array('type'=>'varchar','size'=>14,'notnull'=>0,'label'=>'CPF','class'=>'input-medium','data-mask'=>'999.999.999-99'),
			'pis'=>array('type'=>'varchar','size'=>10,'notnull'=>0,'label'=>'PIS','class'=>'input-medium'),
			'banco'=>array('type'=>'varchar','size'=>50,'notnull'=>0,'label'=>'Banco','class'=>'input-medium'),
			'agencia'=>array('type'=>'varchar','size'=>20,'notnull'=>0,'label'=>'Agência','class'=>'input-medium'),
			'conta'=>array('type'=>'varchar','size'=>20,'notnull'=>0,'label'=>'Conta','class'=>'input-medium'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function links(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'links';
		$_SESSION['modulo']['table'] = 'links';
		$_SESSION['modulo']['nomeTela'] = 'links';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'nome'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
			'url'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Url','class'=>'input-large'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function curriculos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'curriculos';
		$_SESSION['modulo']['table'] = 'curriculos';
		$_SESSION['modulo']['nomeTela'] = 'currículos';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_curso'=>array('type'=>'fk','table_fk'=>'curso','fk_id'=>'id','fk_text'=>'nome','label'=>'Curso','notnull'=>1),
			'id_professor'=>array('type'=>'fk','table_fk'=>'professores','fk_id'=>'id','fk_text'=>'nome','label'=>'Professor','notnull'=>1),
			'url'=>array('type'=>'varchar','size'=>150,'notnull'=>0,'label'=>'Url','class'=>'input-xlarge'),
			'titulacao'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Titulação','class'=>'input-xlarge'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function cronogramas(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'cronogramas';
		$_SESSION['modulo']['table'] = 'cronogramas';
		$_SESSION['modulo']['nomeTela'] = 'cronogramas';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_turma'=>array('type'=>'fk','table_fk'=>'turmas','fk_id'=>'id','fk_text'=>'nome','label'=>'Turma','notnull'=>1),
			'id_disciplina'=>array('type'=>'fk','table_fk'=>'disciplinas','fk_id'=>'id','fk_text'=>'nome','label'=>'Disciplina','notnull'=>1),
			'data_01'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data 01'),
			'data_02'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data 02'),
			'data_03'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data 03'),
			'data_04'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data 04'),
			'data_05'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data 05'),
			'data_06'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data 06'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function alunos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'alunos';
		$_SESSION['modulo']['table'] = 'alunos';
		$_SESSION['modulo']['nomeTela'] = 'alunos';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_curso'=>array('type'=>'fk','table_fk'=>'curso','fk_id'=>'id','fk_text'=>'nome','label'=>'Curso','notnull'=>1),
			'ano'=>array('type'=>'int','size'=>4,'notnull'=>0,'label'=>'Ano','class'=>'input-small'),
			'nome'=>array('type'=>'varchar','size'=>250,'notnull'=>0,'label'=>'Nome','class'=>'input-xlarge'),
			'data_nascimento'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data de Nascimento','class'=>'input-xlarge'),
			'naturalidade'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Naturalidade','class'=>'input-xlarge'),
			'uf_naturalidade'=>array('type'=>'fk','table_fk'=>'estados','fk_id'=>'id','fk_text'=>'nome','label'=>'UF Naturalidade','notnull'=>1),
			'nacionalidade'=>array('type'=>'varchar','size'=>50,'notnull'=>1,'label'=>'Nacionalidade','class'=>'input-xlarge'),
			'sexo'=>array('type'=>'enum','valor'=>'"Masculino","Feminino"', 'DEFAULT' => 'Masculino', 'notnull'=>0, 'label'=>'Sexo'),
			'rg'=>array('type'=>'int','notnull'=>1,'label'=>'RG','class'=>'input-medium'),
			'orgao_expedidor'=>array('type'=>'varchar','size'=>10,'notnull'=>0,'label'=>'Orgão','class'=>'input-medium'),
			'cpf'=>array('type'=>'varchar','size'=>14,'notnull'=>0,'label'=>'C.P.F.','class'=>'input-medium','data-mask'=>'999.999.999-99'),
			'email'=>array('type'=>'varchar','size'=>250,'notnull'=>0,'label'=>'e-Mail','class'=>'input-xlarge'),
			'status'=>array('type'=>'enum','valor'=>'"Ativo","Inativo"', 'DEFAULT' => 'Ativo', 'notnull'=>0, 'label'=>'Status'),
			'web'=>array('type'=>'enum','valor'=>'"Cadastro pela web","Cadastro pelo sistema"', 'DEFAULT' => 'Cadastro pela web', 'notnull'=>0, 'label'=>'web', 'naoMostrar'=>true),
			'enviado'=>array('type'=>'enum','valor'=>'"Notificado","Não Notificado"', 'DEFAULT' => 'Não Notificado', 'notnull'=>0, 'label'=>'Enviado Cartão de Aniversário', 'naoMostrar'=>true),
			'data_vencimento_parcela'=>array('type'=>'varchar','size'=>2,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge'),
			'tituloEleitoral'=>array('type'=>'varchar','size'=>20,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge', 'naoMostrar'=>true),
			'reservista'=>array('type'=>'varchar','size'=>20,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge', 'naoMostrar'=>true),
			'estadoCivil'=>array('type'=>'varchar','size'=>20,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge', 'naoMostrar'=>true),
			'filiacaoPai'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge', 'naoMostrar'=>true),
			'filiacaoMae'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge', 'naoMostrar'=>true),
			'situacao'=>array('type'=>'enum','valor'=>'"Ativo","Inativo"', 'DEFAULT' => 'Ativo', 'notnull'=>0, 'label'=>'Situação'),
			'twitter'=>array('type'=>'varchar','size'=>100,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge'),
			'facebook'=>array('type'=>'varchar','size'=>100,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge'),
			'ficouSabendo'=>array('type'=>'enum','valor'=>'"Mala direta","Outdoor","E-mail Marketing","Folder","Eventos","Indicação de ex alunos","Outros"', 'DEFAULT' => 'Ativo', 'notnull'=>0, 'label'=>'Situação'),
			'ficouSabendoOutro'=>array('type'=>'varchar','size'=>30,'notnull'=>1,'label'=>'Data de Vencimento da Parcela','class'=>'input-xlarge'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function depoimentos(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'depoimentos';
		$_SESSION['modulo']['table'] = 'depoimentos';
		$_SESSION['modulo']['nomeTela'] = 'depoimentos';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_curso'=>array('type'=>'fk','table_fk'=>'curso','fk_id'=>'id','fk_text'=>'nome','label'=>'Curso','notnull'=>1),
			'id_aluno'=>array('type'=>'fk','table_fk'=>'alunos','fk_id'=>'id','fk_text'=>'nome','label'=>'Aluno','notnull'=>1, 'naoMostrar'=>true),
			'depoimento'=>array('type'=>'text','class'=>'ckeditor','size'=>200,'notnull'=>0,'label'=>'Depoimento'),
			'data_depoimento'=>array('type'=>'date','size'=>10,'notnull'=>1,'label'=>'Data'),
			'status'=>array('type'=>'enum','valor'=>'"Ativo","Inativo"', 'DEFAULT' => 'Ativo', 'notnull'=>0, 'label'=>'Status'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function exercicios(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'exercicios';
		$_SESSION['modulo']['table'] = 'exercicios';
		$_SESSION['modulo']['nomeTela'] = 'ecercícios';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'ano'=>array('type'=>'int','size'=>4,'notnull'=>0,'label'=>'Ano','class'=>'input-small'),
			'descricao'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo','class'=>'input-xlarge'),
			'id_turma'=>array('type'=>'fk','table_fk'=>'turmas','fk_id'=>'id','fk_text'=>'nome','label'=>'Turma','notnull'=>1),
			'arquivo'=>array('type'=>'file','label'=>'Artigo'),
			'tipo_material'=>array('type'=>'enum','valor'=>'"Exercícios","Material didático","Trabalhos","Apostilas"', 'DEFAULT' => 'Ativo', 'notnull'=>0, 'label'=>'Status'),
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}

	public function notas_frequencias(){
		$_SESSION['modulo'] = array();
		$_SESSION['modulo']['modulo']  = 'notas_frequencias';
		$_SESSION['modulo']['table'] = 'notas_frequencias';
		$_SESSION['modulo']['nomeTela'] = 'notas & frequeências';
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Id'),
			'id_aluno'=>array('type'=>'fk','table_fk'=>'alunos','fk_id'=>'id','fk_text'=>'nome','label'=>'Aluno','notnull'=>1),
			'id_turma'=>array('type'=>'fk','table_fk'=>'turmas','fk_id'=>'id','fk_text'=>'nome','label'=>'Turma','notnull'=>1),
			'id_disciplina'=>array('type'=>'fk','table_fk'=>'disciplinas','fk_id'=>'id','fk_text'=>'nome','label'=>'Disciplina','notnull'=>1),
			'nota'=>array('type'=>'varchar','size'=>10,'label'=>'Nota','class'=>'input-small'),
			'frequencia'=>array('type'=>'int','label'=>'Frequência','class'=>'input-small'),	
		);

		//Instalando o modulo
		$this->install();
		//ir para controlador

		redirect(base_admin('controle/listar'));
	}


    /*INSTALL MODULO NÃO MEXER*/
	public function install(){
		
		if(!$this->db->table_exists($_SESSION['modulo']['table'])){
			
			$SQL_TABLE = "CREATE TABLE ".$_SESSION['modulo']['table']."(";

			foreach($_SESSION['modulo']['fields'] as $field => $f){
				
				//PRIMARY KEY
				if($f['type']=='pk'){
					$SQL_TABLE .= $field." integer not null auto_increment primary key,";
					}

				//VARCHAR
				if($f['type']=='varchar'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." varchar(".$f['size'].") {$null},";
					}

				//ENUM
				if($f['type']=='enum'){
					$SQL_TABLE .= $field." enum(".$f['valor'].") not null DEFAULT '".$f['DEFAULT']."',";
					}

				//IMG
				if($f['type']=='img'){
					$SQL_TABLE .= $field." varchar(200),";
					}

				//FILE
				if($f['type']=='file'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." varchar(150) {$null},";
					}

				//DATE
				if($f['type']=='date'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." date $null,";
					}

				//DATETIME
				if($f['type']=='datetime'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." datetime $null,";
					}

				//FK
				if($f['type']=='fk'){
					$SQL_TABLE .= $field." integer default 0,";
					}

				//INT
				if($f['type']=='int'){
					$SQL_TABLE .= $field." integer default 0,";
					}

				//TEXT
				if($f['type']=='text'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." text $null,";
					}
			}
			
			if(isset($_SESSION['modulo']['pai'])){
				$SQL_TABLE .= "id_pai integer default 0,";
			}

			$SQL_TABLE .= "ordem integer default 1,";
			$SQL_TABLE .= "insert_data datetime default '0000-00-00 00:00:00',";
			$SQL_TABLE .= "update_data datetime default '0000-00-00 00:00:00',";
			$SQL_TABLE .= "us_id integer not null);";

			$this->db->query($SQL_TABLE);

			#echo "<pre>"; print_r($SQL_TABLE); exit;

			//echo "Tabela <b>".$_SESSION['modulo']['table']."</b> criada<br>";
			}else{
				echo "Ja existe a tabela <b>".$_SESSION['modulo']['table']."</b><br>";
			}

		}

}