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
<?php echo link_tag(base_url().'public/css/main.css') . "\n"; ?>
<!-- <?php echo link_tag(base_url().'public/css/main.css'); ?> -->
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
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.form.wizard.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.form.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/tables/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/files/functions.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/graph.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/chart1.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/chart2.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/charts/chart3.js"></script>

</head>

<body>

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<ul class="top-menu">
				<li class="dropdown">
					<a class="user-menu" data-toggle="dropdown"><span><?php echo NOME_USUARIO; ?> <b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('index.php')?>/usuarios/form_usuario/<?php echo ID_USUARIO; ?>" title=""><i class="icon-user"></i>Dados</a></li>
						<li><a href="<?php echo base_url('index.php')?>/usuarios/logout" title=""><i class="icon-remove"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /fixed top -->


	<!-- Content container -->
	<div id="container">

		<!-- Sidebar -->
		<div id="sidebar">

			<div class="sidebar-tabs">
		        <ul class="tabs-nav two-items">
		            <!-- <li><a href="#general" title=""><i class="icon-reorder"></i></a></li>
		            <li><a href="#stuff" title=""><i class="icon-cogs"></i></a></li> -->
		        </ul>

		        <div id="general">

			        <!-- Sidebar user -->
			        <div class="sidebar-user widget">
						<a href="<?php echo base_url('index.php')?>/inicio/home" title="" class="user"><img src="<?php echo base_url()?>public/img/<?php echo $config->logo;?>" alt="" /></a>
			        </div>
			        <!-- /sidebar user -->

				    <!-- Main navigation -->
			        <ul class="navigation widget">
			            <li class="active"><a href="index.html" title=""><i class="icon-home"></i>Dashboard</a></li>
			            <li><a href="#" title="" class="expand"><i class="icon-reorder"></i>Form elements<strong>3</strong></a>
			                <ul>
			                    <li><a href="forms.html" title="">Form components</a></li>
			                    <li><a href="wysiwyg.html" title="">WYSIWYG editor</a></li>
			                    <li><a href="form_wizards.html" title="">Wizards</a></li>
			                </ul>
			            </li>
			            <li><a href="#" title="" class="expand"><i class="icon-tasks"></i>Components<strong>4</strong></a>
			                <ul>
			                    <li><a href="components.html" title="">Content components</a></li>
			                    <li><a href="content_grid.html" title="">Content grid</a></li>
			                    <li><a href="blank.html" title="">Blank page</a></li>
			                </ul>
			            </li>
			            <li><a href="media.html" title=""><i class="icon-picture"></i>Media</a></li>
			            <li><a href="icons.html" title=""><i class="icon-th"></i>Icons</a></li>
			            <li><a href="charts.html" title=""><i class="icon-signal"></i>Charts &amp; graphs</a></li>
			            <li><a href="invoice.html" title=""><i class="icon-copy"></i>Invoice</a></li>
			            <li><a href="tables.html" title=""><i class="icon-table"></i>Tables</a></li>
			            <li><a href="#" title="" class="expand"><i class="icon-warning-sign"></i>Error pages<strong>6</strong></a>
			                <ul>
			                    <li><a href="403.html" title="">403 page</a></li>
			                    <li><a href="404.html" title="">404 page</a></li>
			                    <li><a href="405.html" title="">405 page</a></li>
			                    <li><a href="500.html" title="">500 page</a></li>
			                    <li><a href="503.html" title="">503 page</a></li>
			                    <li><a href="offline.html" title="">Offline page</a></li>
			                </ul>
			            </li>
			            <li><a href="typography.html" title=""><i class="icon-text-height"></i>Typography</a></li>
			            <li><a href="calendar.html" title=""><i class="icon-calendar"></i>Calendar</a></li>
			            <li><a href="file_management.html" title=""><i class="icon-cogs"></i>File management</a></li>
	                    <li><a href="#" title="" class="expand"><i class="icon-indent-right"></i>Menu levels<strong>3</strong></a>
			                <ul>
			                    <li><a href="#" title="">Link</a></li>
			                    <li><a href="#" title="" class="expand">Link with submenu</a>
					                <ul>
					                    <li><a href="#" title="">Lorem ipsum</a></li>
					                    <li><a href="#" title="">Dolor sit amet</a></li>
					                </ul>
			                    </li>
			                    <li><a href="#" title="">Link</a></li>
			                </ul>
	                    </li>
			            <li><a href="#" title="" class="expand"><i class="icon-sitemap"></i>Page layouts<strong>3</strong></a>
			                <ul>
			                    <li><a href="no_sidebar_tabs.html" title="">No sidebar tabs</a></li>
			                    <li><a href="no_action_tabs.html" title="">No action tabs</a></li>
			                    <li><a href="actions_on_top.html" title="">Action tabs on top</a></li>
			                    <li><a href="no_breadcrumbs.html" title="">No breadcrumbs line</a></li>
			                </ul>
			            </li>
			        </ul>
			        <!-- /main navigation -->

		        </div>

		    </div>
		</div>
		<!-- /sidebar -->


		<!-- Content -->
		<div id="content">

		    <!-- Content wrapper -->
		    <div class="wrapper">

			    <!-- Breadcrumbs line -->
			    <div class="crumbs">
		            <ul id="breadcrumbs" class="breadcrumb"> 
		                <li><a href="<?php echo base_url('index.php')?>/inicio/home">Principal</a></li>
		                <li class="active"><a href="#" title="">...</a></li>
		            </ul>
			    </div>
			    <!-- /breadcrumbs line -->

				<?php
				echo '>>>'.$pagina;
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
		<!-- <ul class="footer-links">
			<li><a href="" title=""><i class="icon-cogs"></i>Contact admin</a></li>
			<li><a href="" title=""><i class="icon-screenshot"></i>Report bug</a></li>
		</ul> -->
	</div>
	<!-- /footer -->

</body>
</html>