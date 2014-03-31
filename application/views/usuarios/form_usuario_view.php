<?php 
$this->load->helper('modulos_helper.php');
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i><?php echo ($this->uri->segment(3) ? 'Dados do usuário' : 'Novo usuário'); ?></h5>
<?php
echo isset($error)?"<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$error}</div>":"";
?>
<form name="form1" id="validar_formulario" method="post" action='<?php echo base_url('index.php') ?>/usuarios/form_usuario/<?php echo $this->uri->segment(3); ?>?aplicar=sim' class="form-horizontal">
<input name="us_id" type="hidden" value="<?php echo $this->uri->segment(3)?>">
<fieldset>
	<div class="well">
		<div class="control-group">
			<label class="control-label">Nome:</label>
			<div class="controls"><input type="text" name="us_nome" class="input-xlarge validate[required]" value="<?php echo $dados['us_nome']?>" maxlength="200"></div>
		</div>
		<div class="control-group">
			<label class="control-label">Cidade:</label>
			<div class="controls"><input type="text" name="us_cidade" class="input-xlarge" value="<?php echo $dados['us_cidade']?>" maxlength="200"></div>
		</div>
		<div class="control-group">
			<label class="control-label">Estado:</label>
			<div class="controls">
			<select name="estado" class="styled" style="opacity: 0;">
					<option selected="" value="">UF</option>
					<option value="AC" <?php echo ($dados['us_estado'] == 'AC' ? 'selected="true"' : '') ?>>Acre</option>
					<option value="AL" <?php echo ($dados['us_estado'] == 'AL' ? 'selected="true"' : '') ?>>Alagoas</option>
					<option value="AP" <?php echo ($dados['us_estado'] == 'AP' ? 'selected="true"' : '') ?>>Amapá</option>
					<option value="AM" <?php echo ($dados['us_estado'] == 'AM' ? 'selected="true"' : '') ?>>Amazonas</option>
					<option value="BA" <?php echo ($dados['us_estado'] == 'BA' ? 'selected="true"' : '') ?>>Bahia</option>
					<option value="CE" <?php echo ($dados['us_estado'] == 'CE' ? 'selected="true"' : '') ?>>Ceará</option>
					<option value="DF" <?php echo ($dados['us_estado'] == 'DF' ? 'selected="true"' : '') ?>>Distrito Federal</option>
					<option value="ES" <?php echo ($dados['us_estado'] == 'ES' ? 'selected="true"' : '') ?>>Espírito Santo</option>
					<option value="GO" <?php echo ($dados['us_estado'] == 'GO' ? 'selected="true"' : '') ?>>Goiás</option>
					<option value="MA" <?php echo ($dados['us_estado'] == 'MA' ? 'selected="true"' : '') ?>>Maranhão</option>
					<option value="MT" <?php echo ($dados['us_estado'] == 'MT' ? 'selected="true"' : '') ?>>Mato Grosso</option>
					<option value="MS" <?php echo ($dados['us_estado'] == 'MS' ? 'selected="true"' : '') ?>>Mato Grosso do Sul</option>
					<option value="MG" <?php echo ($dados['us_estado'] == 'MG' ? 'selected="true"' : '') ?>>Minas Gerais</option>
					<option value="PA" <?php echo ($dados['us_estado'] == 'PA' ? 'selected="true"' : '') ?>>Pará</option>
					<option value="PB" <?php echo ($dados['us_estado'] == 'PB' ? 'selected="true"' : '') ?>>Paraíba</option>
					<option value="PR" <?php echo ($dados['us_estado'] == 'PR' ? 'selected="true"' : '') ?>>Paraná</option>
					<option value="PE" <?php echo ($dados['us_estado'] == 'PE' ? 'selected="true"' : '') ?>>Pernambuco</option>
					<option value="PI" <?php echo ($dados['us_estado'] == 'PI' ? 'selected="true"' : '') ?>>Piauí</option>
					<option value="RJ" <?php echo ($dados['us_estado'] == 'RJ' ? 'selected="true"' : '') ?>>Rio de Janeiro</option>
					<option value="RS" <?php echo ($dados['us_estado'] == 'RS' ? 'selected="true"' : '') ?>>Rio Grande do Sul</option>
					<option value="RN" <?php echo ($dados['us_estado'] == 'RN' ? 'selected="true"' : '') ?>>Rio Grande do Norte</option>
					<option value="RO" <?php echo ($dados['us_estado'] == 'RO' ? 'selected="true"' : '') ?> <?php echo ($dados['us_estado'] == 'AC' ? 'selected="true"' : '') ?>>Rondônia</option>
					<option value="RR" <?php echo ($dados['us_estado'] == 'RR' ? 'selected="true"' : '') ?>>Roraima</option>
					<option value="SE" <?php echo ($dados['us_estado'] == 'SE' ? 'selected="true"' : '') ?>>Santa Catarina</option>
					<option value="SP" <?php echo ($dados['us_estado'] == 'SP' ? 'selected="true"' : '') ?>>São Paulo</option>
					<option value="SE" <?php echo ($dados['us_estado'] == 'SE' ? 'selected="true"' : '') ?>>Sergipe</option>
					<option value="TO" <?php echo ($dados['us_estado'] == 'TO' ? 'selected="true"' : '') ?>>Tocantins</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Telefone:</label>
			<div class="controls"><input type="text" name="us_telefone" class="input-xlarge validate[required]" value="<?php echo $dados['us_telefone']?>" maxlength="20"></div>
		</div>
		<div class="control-group">
			<label class="control-label"><strong>Dados para acessar o painel</strong></label>
		</div>
		<div class="control-group">
			<label class="control-label">E-mail:</label>
			<div class="controls"><input type="text" name="us_email" class="input-xlarge" value="<?php echo $dados['us_email']?>" maxlength="20"></div>
		</div>
		<div class="control-group">
			<label class="control-label">Senha do usuário:</label>
			<div class="controls"><input type="password" name="senha" class="input-medium" <?php if($dados['us_id']==0){?>class="validate[required]"<?php }?> maxlength="20"></div>
		</div>
		<div class="control-group">
			<label class="control-label">Repetir senha do usuário:</label>
			<div class="controls"><input type="password" name="senha2" class="input-medium" <?php if($dados['us_id']==0){?>class="validate[required,equals[id_senha]]"<?php }?> maxlength="20"></div>
		</div>
		<?php if(get_user_tipo() == 1){?>
		<div class="control-group">
			<label class="control-label">Função do usuário:</label>
			<div class="controls">
				<select  class="styled validate[required]" style="opacity: 0;" id="us_tipo" name="us_tipo">
					<option value="">Selecione</option>
					<option value="1">Administrador</option>
					<option value="2">Administrador de conteúdo</option>
				</select>
			</div>
		</div>
		<?php }?>
		<div class="control-group">
			<label class="control-label">Usuário pode logar no sistema?</label>
			<div class="controls">
				<select class="styled validate[required]" id="us_ativo" name="us_ativo">
					<option value="1">Sim</option>
					<option value="0">Não</option>
				</select>
			</div>
		</div>

		<?php if(get_user_tipo() == 1){?>
		<div class="control-group">
			<label class="control-label">Permissão do usuário:</label>
			<div class="controls">
				<?php
				$permissao = json_decode($dados['us_permissao']);
				foreach(modulos() as $modulo => $descricao){
					//echo "<pre>"; print_r($modulo); echo "</pre>";
				?>
					<strong><?php echo $descricao?>: </strong>
					<label class="checkbox inline">
						<input type="checkbox" name="us_permissao[<?php echo $modulo?>][adicionar]" <?php echo isset($permissao->{$modulo}->adicionar)?'checked':''?> value="1">Adicionar
					</label>
					<label class="checkbox inline">
						<input type="checkbox" name="us_permissao[<?php echo $modulo?>][editar]" <?php echo isset($permissao->{$modulo}->editar)?'checked':''?> value="1">Editar
					</label>
					<label class="checkbox inline">
						<input type="checkbox" name="us_permissao[<?php echo $modulo?>][remover]" <?php echo isset($permissao->{$modulo}->remover)?'checked':''?> value="1">Excluir
					</label>
					<br>
				<?php }?>
			</div>
		</div>
    	<?php }?>
    	<div class="form-actions">
			<button type="submit" class="btn btn-primary">Gravar</button>
			<button type="button" class="btn btn-danger">Cancelar</button>
		</div>
	</div>
</fieldset>
<?php echo br(2); ?>
<script type="text/javascript">
	$(function(){
		$("#us_tipo").val(<?php echo $dados['us_tipo']?>);
	});
</script>