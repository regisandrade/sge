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
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/alunos/form_aluno" data-original-title="Adicionar novo aluno"><i class="icon-plus"></i></a></li>
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/alunos/listar" data-original-title="Listar alunos"><i class="icon-reorder"></i></a></li>
				<!-- <li><a title="" class="tip" href="#" data-original-title="Parameters"><i class="icon-cogs"></i></a></li> -->
			</ul>
		</div>
	</div>
	<form name="form_aluno" id="form_aluno" action="" method="post">
	<input type="hidden" name="id" id="id" value="" />
	<input type="hidden" name="web" id="web" value="Não" />
	<div class="well">
		<div class="accordion" id="accordion2">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1"><i class="ico-user"></i>Básico</a>
				</div>
				<div id="collapseOne1" class="accordion-body in collapse" style="height: auto;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Curso:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="id_curso" name="id_curso">
									<option value="">Selecione</option>
									<?php 
									foreach ($cursos as $curso){
									?>
									<option value="<?php echo $curso->id; ?>"><?php echo $curso->nome; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nome:</label>
							<div class="controls"><input type="text" name="nome" class="validate[required] input-xxlarge" value="<?php //echo $dados->nome; ?>" maxlength="200"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Data de nascimento:</label>
							<div class="controls"><input type="text" name="data_nascimento" class="tip datepicker validate[required]" value="<?php //echo $dados->nome; ?>" maxlength="10"></div>
						</div>						
						<div class="control-group">
							<label class="control-label">Sexo:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="sexo" name="sexo">
									<option value="">Selecione</option>
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>									
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">E-mail:</label>
							<div class="controls">
								<div class="input-prepend">
									<span class="add-on">@</span><input name="email" id="prependedInput" type="email" class="validate[required,custom[email]] input-xlarge" value="<?php //echo $dados->email?>">
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Naturalidade:</label>
							<div class="controls"><input type="text" name="naturalidade" class="validate[required] input-large" value="<?php //echo $dados->nome; ?>" maxlength="150"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Estado:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="uf_naturalidade" name="uf_naturalidade">
									<option value="">Selecione</option>
									<?php 
									foreach ($estados as $estado){
									?>
									<option value="<?php echo $estado->sigla; ?>"><?php echo $estado->nome; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nacionalidade:</label>
							<div class="controls"><input type="text" name="nacionalidade" class="validate[required] input-large" value="<?php //echo $dados->nome; ?>" maxlength="150"></div>
						</div>
						<div class="control-group">
							<label class="control-label">RG:</label>
							<div class="controls"><input type="text" name="rg" class="validate[required] input-medium" value="<?php //echo $dados->nome; ?>" maxlength="25"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Orgão Expedidor:</label>
							<div class="controls"><input type="text" name="orgao" class="validate[required] input-medium" value="<?php //echo $dados->nome; ?>" maxlength="15"></div>
						</div>
						<div class="control-group">
							<label class="control-label">C.P.F.:</label>
							<div class="controls"><input type="text" name="cpf" class="validate[required] input-medium" value="<?php //echo $dados->nome; ?>" maxlength="14" data-mask="999.999.999-99"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo1"><i class="icon-home"></i>Endereço</a>
				</div>
				<div id="collapseTwo1" class="accordion-body collapse" style="height: 0px;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Curso:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="id_curso" name="id_curso">
									<option value="">Selecione</option>
									<?php 
									foreach ($cursos as $curso){
									?>
									<option value="<?php echo $curso->id; ?>"><?php echo $curso->nome; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nome:</label>
							<div class="controls"><input type="text" name="nome" class="validate[required] input-xxlarge" value="<?php //echo $dados->nome; ?>" maxlength="200"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Data de nascimento:</label>
							<div class="controls"><input type="text" name="data_nascimento" class="tip datepicker validate[required]" value="<?php //echo $dados->nome; ?>" maxlength="10"></div>
						</div>						
						<div class="control-group">
							<label class="control-label">Sexo:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="sexo" name="sexo">
									<option value="">Selecione</option>
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>									
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">E-mail:</label>
							<div class="controls">
								<div class="input-prepend">
									<span class="add-on">@</span><input name="email" id="prependedInput" type="email" class="validate[required,custom[email]] input-xlarge" value="<?php //echo $dados->email?>">
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Naturalidade:</label>
							<div class="controls"><input type="text" name="naturalidade" class="validate[required] input-large" value="<?php //echo $dados->nome; ?>" maxlength="150"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Estado:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="uf_naturalidade" name="uf_naturalidade">
									<option value="">Selecione</option>
									<?php 
									foreach ($estados as $estado){
									?>
									<option value="<?php echo $estado->sigla; ?>"><?php echo $estado->nome; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nacionalidade:</label>
							<div class="controls"><input type="text" name="nacionalidade" class="validate[required] input-large" value="<?php //echo $dados->nome; ?>" maxlength="150"></div>
						</div>
						<div class="control-group">
							<label class="control-label">RG:</label>
							<div class="controls"><input type="text" name="rg" class="validate[required] input-medium" value="<?php //echo $dados->nome; ?>" maxlength="25"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Orgão Expedidor:</label>
							<div class="controls"><input type="text" name="orgao" class="validate[required] input-medium" value="<?php //echo $dados->nome; ?>" maxlength="15"></div>
						</div>
						<div class="control-group">
							<label class="control-label">C.P.F.:</label>
							<div class="controls"><input type="text" name="cpf" class="validate[required] input-medium" value="<?php //echo $dados->nome; ?>" maxlength="14" data-mask="999.999.999-99"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTree1"><i class="ico-briefcase"></i>Graduação</a>
				</div>
				<div id="collapseTree1" class="accordion-body collapse" style="height: 0px;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Graduação:</label>
							<div class="controls"><input type="text" name="graduacao" class="validate[required] input-large" value="<?php //echo $dados->graduacao; ?>" maxlength="150"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Instituição:</label>
							<div class="controls"><input type="text" name="instituicao" class="validate[required] input-large" value="<?php //echo $dados->instituicao; ?>" maxlength="150"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Sigla:</label>
							<div class="controls"><input type="text" name="sigla" class="validate[required] input-small" value="<?php //echo $dados->sigla; ?>" maxlength="15"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Conclusão:</label>
							<div class="controls"><input type="text" name="ano_conclusao" class="validate[required] input-small" value="<?php //echo $dados->ano_conclusao; ?>" maxlength="4" data-mask="9999"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour1"><i class="ico-globe"></i>Usuário</a>
				</div>
				<div id="collapseFour1" class="accordion-body collapse" style="height: 0px;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Usuário:</label>
							<div class="controls"><input type="text" name="login" class="validate[required] input-large" value="<?php //echo $dados->login; ?>" maxlength="150"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Senha:</label>
							<div class="controls"><input type="text" name="senha" class="validate[required] input-medium" value="" maxlength="20"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Repetir senha:</label>
							<div class="controls"><input type="text" name="senha2" class="validate[required] input-medium" value="" maxlength="20"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
</fieldset>
</form>
<?php echo br(2); ?>