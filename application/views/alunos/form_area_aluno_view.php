<?php
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i>Login do aluno</h5>
<?php
echo isset($msg) ? "<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$msg}</div>":"";
?>
<form name="form1" id="validate" method="post" action='<?php echo base_url('index.php') ?>/usuariosalunos/loginAluno/' class="form-horizontal">
<fieldset>
	<div class="well">
		<div class="control-group">
			<label class="control-label">Usuário/e-Mail:</label>
			<div class="controls"><input type="text" name="login" 
				class="tip validate[required] input-xlarge" maxlength="200"
				data-original-title="Usuário ou e-Mail para login"
            	data-placement="right"></div>
		</div>
		<div class="control-group">
			<label class="control-label">Senha:</label>
			<div class="controls"><input type="password" name="senha" 
				class="tip validate[required] input-xlarge" maxlength="200"
				data-original-title="Senha para login"
            	data-placement="right"></div>
		</div>
    	<div class="form-actions">
			<button type="submit" class="btn btn-primary">Entrar</button>
			<button type="button" class="btn btn-danger">Cancelar</button>
		</div>
	</div>
</fieldset>
</form>
<?php echo br(2); ?>