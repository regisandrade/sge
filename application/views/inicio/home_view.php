<?php 
$this->load->library('session');
//verifica_usuario_logado();

# Definindo constantes
define('ID_USUARIO', $this->session->userdata('us_id'));
define('NOME_USUARIO', $this->session->userdata('us_nome'));

echo doctype('html5');
?>
<html lang="pt-br">
<head>
<?php
$metas = array(
		 array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8'),
		 array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0')
	);
echo meta($metas);
?>
<title>SGE :-: <?php echo $config->empresa;?></title>
<?php echo link_tag(base_url().'public/css/generic.css') . "\n"; ?>
<?php echo link_tag(base_url().'public/css/main.css') . "\n"; ?>
<!--[if IE 8]><?php echo link_tag(base_url().'public/css/ie8.css'); ?><![endif]-->
<?php echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700') . "\n"; ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/prettify.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.bootbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/ui/jquery.elfinder.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.autosize.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.inputmask.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.listbox.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.validation.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.validationEngine-pt_BR.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.form.wizard.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.form.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/tables/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/files/functions.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/graph.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/chart1.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/chart2.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/chart3.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/generic.js"></script>

</head>

<body>

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<ul class="top-menu">
				<li><a class="fullview"></a></li>
				<li class="dropdown">
					<a class="user-menu" data-toggle="dropdown"><span><?php echo NOME_USUARIO; ?> <b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('index.php')?>/usuarios/form_usuario/<?php echo ID_USUARIO; ?>" title=""><i class="icon-user"></i>Dados do usuário</a></li>
						<li><a href="<?php echo base_url('index.php')?>/usuarios/logout" title=""><i class="icon-remove"></i>Sair</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /fixed top -->


	<!-- Content container -->
	<div id="container">

		<?php $this->load->view("inicio/menu_view"); ?>

		<!-- Content -->
		<div id="content">

		    <!-- Content wrapper -->
		    <div class="wrapper">

			    <!-- Breadcrumbs line -->
			    <div class="crumbs">
		            <ul id="breadcrumbs" class="breadcrumb"> 
		                <li><a href="<?php echo base_url('index.php')?>/inicio/home">Administração</a></li>
		                <!-- <li class="active"><a href="calendar.html" title="">Calendar</a></li> -->
		            </ul>
			    </div>
			    <!-- /breadcrumbs line -->

				<?php
				if(isset($pagina)){
					$this->load->view("{$pagina}_view");
				}else{
					$this->load->view("inicio/meio_view");
				}
				?>

		    </div>
		    <!-- /content wrapper -->

		</div>
		<!-- /content -->

	</div>
	<!-- /content container -->


	<!-- Footer -->
	<div id="footer">
		<div class="copyrights">&copy; <?php echo $config->empresa;?></div>
	</div>
	<!-- /footer -->

</body>
</html>