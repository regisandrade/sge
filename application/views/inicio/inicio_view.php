<?php 
$this->load->library('session'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>SGE :-: <?php echo $config->empresa;?></title>
<link href="<?php echo base_url()?>public/css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="<?php echo base_url()?>public/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 9]><link href="<?php echo base_url()?>public/css/ie9.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/plugins/forms/jquery.uniform.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/js/files/login.js"></script>

</head>

<body class="no-background">

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<a href="<?php echo base_url()?>" title="" class="logo"><img src="<?php echo base_url()?>uploads/<?php echo $config->arquivo;?>" alt="" /></a>
			<!-- <ul class="top-menu">
				<li class="dropdown">
					<a class="login-top" data-toggle="dropdown"></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="#" title=""><i class="icon-group"></i>Change user</a></li>
						<li><a href="#" title=""><i class="icon-plus"></i>New user</a></li>
						<li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
						<li><a href="#" title=""><i class="icon-remove"></i>Go to the website</a></li>
					</ul>
				</li>
			</ul> -->
		</div>
	</div>
	<!-- /fixed top -->


    <!-- Login block -->
    <div class="login">
        <div class="navbar">
            <div class="navbar-inner">
                <h6><i class="icon-user"></i>Login sistema</h6>
                <!-- <div class="nav pull-right">
                    <a href="#" class="dropdown-toggle navbar-icon" data-toggle="dropdown"><i class="icon-cog"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-plus"></i>Register</a></li>
                        <li><a href="#"><i class="icon-refresh"></i>Recover password</a></li>
                        <li><a href="#"><i class="icon-cog"></i>Settings</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="well">
            <form action="<?php echo base_url('index.php')?>/usuarios/entrar" class="row-fluid" method="POST">
                <div class="control-group">
                    <label class="control-label">Usuário</label>
                    <div class="controls"><input class="span12" type="text" name="usuario" placeholder="usuário" /></div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">Senha:</label>
                    <div class="controls"><input class="span12" type="password" name="senha" placeholder="senha" /></div>
                </div>
                <?php
                if (isset($msg)) {
                ?>
                <div class="control-group">
                    <div class="controls">
                        <p class="text-error"><?php echo $msg;?></p>
                    </div>
                </div>
                <?php
                }
                ?>
                <!-- <div class="control-group">
                    <div class="controls"><label class="checkbox inline"><input type="checkbox" name="checkbox1" class="styled" value="" checked="checked">Relembrar senha</label></div>
                </div> -->

                <div class="login-btn"><input type="submit" value="ENTRAR" class="btn btn-danger btn-block" /></div>
            </form>
        </div>
    </div>
    <!-- /login block -->


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
