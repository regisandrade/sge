<?php 
$this->load->helper('modulos_helper.php');
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i><?php echo ($this->uri->segment(3) ? 'Dados do aluno' : 'Novo aluno'); ?></h5>
<?php
echo isset($msg) ? "<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$msg}</div>":"";
?>
<form name="form1" id="validate" method="post" action='<?php echo base_url('index.php') ?>/alunos/form_usuario/<?php echo $this->uri->segment(3); ?>' class="form-horizontal">
<input name="us_id" type="hidden" value="<?php echo $this->uri->segment(3)?>">
<fieldset>
	<div class="navbar">
		<div class="navbar-inner">
			<h6>Alunos</h6>
			<ul class="navbar-icons">
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/alunos/form_usuario" data-original-title="Adicionar novo aluno"><i class="icon-plus"></i></a></li>
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/alunos/listarUsuarios" data-original-title="Listar alunos"><i class="icon-reorder"></i></a></li>
				<!-- <li><a title="" class="tip" href="#" data-original-title="Parameters"><i class="icon-cogs"></i></a></li> -->
			</ul>
		</div>
	</div>
	<div class="well">
		<div class="accordion" id="accordion2">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1"><i class="icon-ok"></i>Collapsible Group Item #1</a>
				</div>
				<div id="collapseOne1" class="accordion-body in collapse" style="height: auto;">
					<div class="accordion-inner">Anim pariatur cliche...</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo1"><i class="icon-reorder"></i>Collapsible Group Item #2</a>
				</div>
				<div id="collapseTwo1" class="accordion-body collapse" style="height: 0px;">
					<div class="accordion-inner">Anim pariatur cliche...</div>
				</div>
			</div>
		</div>
	</div>
</fieldset>
</form>
<?php echo br(2); ?>
<script type="text/javascript">
	$(function(){
		$("#us_tipo").val(<?php echo $dados->us_tipo?>);
	});
</script>