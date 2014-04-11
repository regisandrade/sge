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
		'<campo_imagem>'=>array('type'=>'file','label'=>'<label_ou_nome_campo>'),
		'<campo_varchar>'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'<label_ou_nome_campo>','class'=>'<nome_class>'),
		'<campo_enum>'=>array('type'=>'enum','valor'=>'"SIM","NAO"',DEFAULT=>'SIM','label'=>'<label_ou_nome_campo>'),
		'<campo_texto_simples>'=>array('type'=>'text','label'=>'<label_ou_nome_campo>'),
		'<campo_texto_rico_ckeditor>'=>array('type'=>'text','ckeditor'=>1,'label'=>'<label_ou_nome_campo>'),
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
		$_SESSION['modulo']['pk'] = 'id_configuracao';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_configuracao'=>array('type'=>'pk','label'=>'N°'),
		'empresa'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Empresa','class'=>'input-xxlarge'),
		'slogan'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'Slogan','class'=>'input-xlarge'),
		'descricao'=>array('type'=>'text','size'=>200,'notnull'=>0,'label'=>'Descrição'),
		'email'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'E-mail','class'=>'input-xlarge'),
		'endereco'=>array('type'=>'text','notnull'=>1,'label'=>'Endereço'),
		'telefone_1'=>array('type'=>'varchar','size'=>15,'notnull'=>1,'label'=>'Telefone 1','class'=>'input-medium'),
		'telefone_2'=>array('type'=>'varchar','size'=>15,'notnull'=>0,'label'=>'Telefone 2','class'=>'input-medium'),
		'facebook'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'Facebook','class'=>'input-xlarge'),
		'twitter'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'Twitter','class'=>'input-xlarge'),
		'linkedin'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'LinkedIn','class'=>'input-xlarge'),
		'meta_descricao'=>array('type'=>'varchar','size'=>200,'label'=>'Meta Descrição','class'=>'input-xxlarge'),
		'latitude_endereco'=>array('type'=>'varchar','size'=>20,'notnull'=>1,'label'=>'Latitude','class'=>'input-medium'),
		'longitude_endereco'=>array('type'=>'varchar','size'=>20,'notnull'=>1,'label'=>'Longitude','class'=>'input-medium'),
		'logo'=>array('type'=>'img','size'=>100,'label'=>'Logo','class'=>'input-xxlarge'),
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
		$_SESSION['modulo']['pk'] = 'id_noticia';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_noticia'=>array('type'=>'pk','label'=>'Nº'),
		'titulo'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Título','class'=>'input-xxlarge'),
		'texto'=>array('type'=>'text','ckeditor'=>0,'notnull'=>1,'label'=>'Notícia'),
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
		$_SESSION['modulo']['pk'] = 'id_galeria';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array('fotos'=>'Fotos');

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_galeria'=>array('type'=>'pk','label'=>'Nº'),
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
		$_SESSION['modulo']['pk'] = 'id_foto';
		$_SESSION['modulo']['anexada'] = 'galerias';
		$_SESSION['modulo']['extensao'] = array();
		$_SESSION['modulo']['pai'] = @$_GET['pai'];

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		 'id_foto'=>array('type'=>'pk','label'=>'Nº'),
		 //'nome'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'nome'),
		 'foto'=>array('type'=>'img','label'=>'Foto'),
		 //'texto'=>array('type'=>'text','ckeditor'=>1,'label'=>'Texto')
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
		$_SESSION['modulo']['pk'] = 'id_empresa';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_empresa'=>array('type'=>'pk','label'=>'Nº'),
		'titulo'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Título','class'=>'input-xxlarge'),
		'texto'=>array('type'=>'text','ckeditor'=>0,'notnull'=>1,'label'=>'Conteúdo'),
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
		$_SESSION['modulo']['pk'] = 'id_banners';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
		'id_banners'=>array('type'=>'pk','label'=>'Nº'),
		'imagem'=>array('type'=>'img','label'=>'Imagem'),
		'titulo'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo','notnull'=>1,'class'=>'input-xxlarge'),
		'link'=>array('type'=>'varchar','size'=>200,'label'=>'Link','class'=>'input-xxlarge'),
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
		$_SESSION['modulo']['pk'] = 'id_descricao_curso';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		$_SESSION['modulo']['order_fk'] = 'Nome';
		$_SESSION['modulo']['where_fk'] = 'Status = 1';

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
			'id_descricao_curso'=>array('type'=>'pk','label'=>'Nº'),
			'codg_curso_descricao'=>array('type'=>'fk','table_fk'=>'curso','fk_id'=>'id','fk_text'=>'nome','label'=>'Curso','notnull'=>1),
			//'nome'=>array('type'=>'varchar','size'=>200,'label'=>'Nome'),
			'apresentacao'=>array('type'=>'text','ckeditor'=>1,'label'=>'Apresentação','notnull'=>1),
			'publico'=>array('type'=>'text','ckeditor'=>1,'label'=>'Público Alvo','notnull'=>1),
			'datas'=>array('type'=>'text','ckeditor'=>1,'label'=>'Datas Importantes','notnull'=>1),
			'inscricao'=>array('type'=>'text','ckeditor'=>1,'label'=>'Inscrição','notnull'=>1),
			'avaliacao'=>array('type'=>'text','ckeditor'=>1,'label'=>'Avaliação','notnull'=>1),
			'disciplinas'=>array('type'=>'text','ckeditor'=>1,'label'=>'Disciplinas','notnull'=>1),
			'metodologia'=>array('type'=>'text','ckeditor'=>1,'label'=>'Matodologia','notnull'=>1),
			'certificados'=>array('type'=>'text','ckeditor'=>1,'label'=>'Certificados','notnull'=>1),
			'duracao'=>array('type'=>'text','ckeditor'=>1,'label'=>'Duração do Curso','notnull'=>1),
			'numeroVagas'=>array('type'=>'text','ckeditor'=>1,'label'=>'Número de Vagas','notnull'=>1),
			'coordenacaogeral'=>array('type'=>'text','ckeditor'=>1,'label'=>'Coordenação Geral','notnull'=>1),
			'coordenacaoacademica'=>array('type'=>'text','ckeditor'=>1,'label'=>'Coordenação Acadêmica','notnull'=>1),
			'horario'=>array('type'=>'text','ckeditor'=>1,'label'=>'Horário das Aulas','notnull'=>1),
			'processo'=>array('type'=>'text','ckeditor'=>1,'label'=>'Processo Seletivo','notnull'=>1),
			'corpoDocente'=>array('type'=>'text','ckeditor'=>1,'label'=>'Corpo Docente','notnull'=>1),
			'informacoes'=>array('type'=>'text','ckeditor'=>1,'label'=>'Informações','notnull'=>1),
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
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =
		array(
			'id'=>array('type'=>'pk','label'=>'Nº'),
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
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
		 'id'=>array('type'=>'pk','label'=>'Nº'),
		 'descricao'=>array('type'=>'varchar','size'=>200,'notnull'=>1,'label'=>'Titulo','class'=>'input-xlarge'),
		 'arquivo'=>array('type'=>'file','notnull'=>1,'label'=>'Artigo'),
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
		$_SESSION['modulo']['pk'] = 'id';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();

		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] =

		array(
			'id'=>array('type'=>'pk','label'=>'Nº'),
			'titulo'=>array('type'=>'varchar','size'=>150,'notnull'=>1,'label'=>'Título','class'=>'input-xlarge'),
			'descricao'=>array('type'=>'text','ckeditor'=>1,'notnull'=>1,'label'=>'Descrição'),
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




