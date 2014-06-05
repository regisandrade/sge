<?php 
$this->load->helper('modulos_helper.php');
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i><?php echo ($this->uri->segment(3) ? 'Dados do aluno' : 'Novo aluno'); ?></h5>
<?php
echo isset($msg) ? "<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$msg}</div>":"";
?>
<form name="form1" id="validate" method="post" action="<?php echo base_url('index.php').'/alunos/'.(isset($dados->id) ? 'alterar' : 'gravar')?>" class="form-horizontal">
<input name="id" type="hidden" value="<?php echo (isset($dados->id) ? $dados->id : ''); ?>">
<fieldset>
	<div class="navbar">
		<div class="navbar-inner">
			<h6>Aluno</h6>
			<ul class="navbar-icons">
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/alunos/form_aluno" data-original-title="Adicionar novo aluno"><i class="icon-plus"></i></a></li>
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/alunos/listar" data-original-title="Listar alunos"><i class="icon-reorder"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="well">
		<div class="accordion" id="accordion2">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseBasico"><i class="ico-user"></i>Básico</a>
				</div>
				<div id="collapseBasico" class="accordion-body in collapse" style="height: auto;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Curso:</label>
							<div class="controls">
								<select class="tip select select2-offscreen validate[required]" style="opacity: 0;" id="id_curso" name="id_curso">
									<option value="">Selecione</option>
									<?php 
									foreach ($cursos as $curso){
									?>
									<option value="<?php echo $curso->id; ?>" <?php echo (isset($dados->id_curso) && $dados->id_curso == $curso->id ? 'selected' : '')?>><?php echo $curso->nome; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nome:</label>
							<div class="controls"><input type="text" name="nome" class="tip validate[required] input-xxlarge" value="<?php echo (isset($dados->nome) ? $dados->nome : ''); ?>" maxlength="200" data-placement="right" data-original-title="Nome do aluno"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Data de nascimento:</label>
							<div class="controls"><input type="text" name="data_nascimento" class="tip datepicker validate[required]" value="<?php echo (isset($dados->data_nascimento) ? dataTela($dados->data_nascimento) : ''); ?>" maxlength="10" data-placement="right" data-original-title="Data de nascimento"></div>
						</div>
						<div class="control-group">
							<label class="control-label">E-mail:</label>
							<div class="controls">
								<div class="input-prepend">
									<span class="add-on">@</span><input name="email" id="prependedInput" type="email" class="tip validate[required,custom[email]] input-xlarge" value="<?php echo (isset($dados->email) ? $dados->email : '')?>" data-placement="right" data-original-title="e-Mail">
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Naturalidade:</label>
							<div class="controls"><input type="text" name="naturalidade" class="tip validate[required] input-large" value="<?php echo (isset($dados->naturalidade) ? $dados->naturalidade : '') ?>" maxlength="100" data-placement="right" data-original-title="Cidade onde nasceu"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Estado:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="uf_naturalidade" name="uf_naturalidade">
									<option value="">Selecione</option>
									<?php 
									foreach ($estados as $estado){
									?>
									<option value="<?php echo $estado->sigla; ?>" <?php echo (isset($dados->uf_naturalidade) && $dados->uf_naturalidade == $estado->sigla ? 'selected' : '')?>><?php echo $estado->nome; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nacionalidade:</label>
							<div class="controls"><input type="text" name="nacionalidade" class="tip validate[required] input-large" value="<?php echo (isset($dados->nacionalidade) ? $dados->nacionalidade : ''); ?>" maxlength="150" data-placement="right" data-original-title="País onde nasceu"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Sexo:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="sexo" name="sexo">
									<option value="">Selecione</option>
									<option value="Masculino" <?php echo ((isset($dados->sexo) && $dados->sexo == 'Masculino') ? 'selected' : '')?>>Masculino</option>
									<option value="Feminino" <?php echo ((isset($dados->sexo) && $dados->sexo == 'Feminino') ? 'selected' : '')?>>Feminino</option>									
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">RG:</label>
							<div class="controls"><input type="text" name="rg" class="tip validate[required] input-medium" value="<?php echo (isset($dados->rg) ? $dados->rg : ''); ?>" maxlength="25" data-placement="right" data-original-title="RG"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Orgão Expedidor:</label>
							<div class="controls"><input type="text" name="orgao" class="tip validate[required] input-medium" value="<?php echo (isset($dados->orgao) ? $dados->orgao : ''); ?>" maxlength="15" data-placement="right" data-original-title="Orgão expedidor do RG"></div>
						</div>
						<div class="control-group">
							<label class="control-label">C.P.F.:</label>
							<div class="controls"><input type="text" name="cpf" class="tip validate[required] input-medium" value="<?php echo (isset($dados->cpf) ? $dados->cpf : ''); ?>" maxlength="14" data-mask="999.999.999-99" data-placement="right" data-original-title="C.P.F."></div>
						</div>
						<div class="control-group">
							<label class="control-label">Como ficou sabendo:</label>
							<div class="controls">
								<select  class="select select2-offscreen validate[required]" style="opacity: 0;" id="ficouSabendo" name="ficouSabendo">
									<option value="">Selecione</option>
									<option value="Mala Direta" <?php echo ((isset($dados->ficouSabendo) && $dados->ficouSabendo == 'Mala Direta') ? 'selected' : '')?>>Mala Direta</option>
									<option value="Outdoor" <?php echo ((isset($dados->ficouSabendo) && $dados->ficouSabendo == 'Outdoor') ? 'selected' : '')?>>Outdoor</option>
									<option value="E-mail Marketing" <?php echo ((isset($dados->ficouSabendo) && $dados->ficouSabendo == 'E-mail Marketing') ? 'selected' : '')?>>E-mail Marketing</option>
									<option value="Folder" <?php echo ((isset($dados->ficouSabendo) && $dados->ficouSabendo == 'Folder') ? 'selected' : '')?>>Folder</option>
									<option value="Eventos" <?php echo ((isset($dados->ficouSabendo) && $dados->ficouSabendo == 'Eventos') ? 'selected' : '')?>>Eventos</option>
									<option value="Indicação de ex-alunos" <?php echo ((isset($dados->ficouSabendo) && $dados->ficouSabendo == 'Indicação de ex-alunos') ? 'selected' : '')?>>Indicação de ex-alunos</option>									
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseEndereco"><i class="icon-home"></i>Endereço</a>
				</div>
				<div id="collapseEndereco" class="accordion-body <?php echo (isset($dados->id) ? 'in' : ''); ?> collapse" style="height: <?php echo (isset($dados->id) ? 'auto' : '0px'); ?>;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Endereço:</label>
							<div class="controls"><input type="text" name="endereco" class="tip validate[required] input-xxlarge" value="<?php echo (isset($dadosEndereco->endereco) ? $dadosEndereco->endereco : ''); ?>" maxlength="255" data-placement="right" data-original-title="Endereço"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Bairro:</label>
							<div class="controls"><input type="text" name="bairro" class="tip validate[required] input-large" value="<?php echo (isset($dadosEndereco->bairro) ? $dadosEndereco->bairro : ''); ?>" maxlength="60" data-placement="right" data-original-title="Bairro"></div>
						</div>						
						<div class="control-group">
							<label class="control-label">Cidade:</label>
							<div class="controls"><input type="text" name="cidade" class="tip validate[required] input-large" value="<?php echo (isset($dadosEndereco->bairro) ? $dadosEndereco->bairro : ''); ?>" maxlength="80" data-placement="right" data-original-title="Cidade"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Estado:</label>
							<div class="controls">
								<select class="select select2-offscreen validate[required]" style="opacity: 0;" id="uf_endereco" name="uf_endereco">
									<option value="">Selecione</option>
									<?php 
									foreach ($estados as $estado){
									?>
									<option value="<?php echo $estado->sigla; ?>"<?php echo ((isset($dadosEndereco->uf_endereco) && $dadosEndereco->uf_endereco == $estado->sigla) ? 'selected' : '')?>><?php echo $estado->nome; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">CEP:</label>
							<div class="controls"><input type="text" name="cep" class="tip validate[required] input-small" value="<?php echo (isset($dadosEndereco->cep) ? $dadosEndereco->cep : ''); ?>" maxlength="14" data-mask="99999-999" data-placement="right" data-original-title="CEP"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTelefone"><i class="icon-phone"></i>Telefones</a>
				</div>
				<div id="collapseTelefone" class="accordion-body <?php echo (isset($dados->id) ? 'in' : ''); ?> collapse" style="height: <?php echo (isset($dados->id) ? 'auto' : '0px'); ?>;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Residêncial:</label>
							<div class="controls"><input type="text" name="fone_residencial" class="tip validate[required] input-medium" value="<?php echo (isset($dadosEndereco->fone_residencial) ? $dadosEndereco->fone_residencial : ''); ?>" maxlength="14" data-mask="(99) 9999-9999" data-placement="right" data-original-title="Telefone residêncial"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Celular:</label>
							<div class="controls"><input type="text" name="fone_celular" class="tip validate[required] input-medium" value="<?php echo (isset($dadosEndereco->fone_celular) ? $dadosEndereco->fone_celular : ''); ?>" maxlength="14" data-mask="(99) 9999-9999" data-placement="right" data-original-title="Telefone celular"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Comercial:</label>
							<div class="controls"><input type="text" name="fone_comercial" class="tip input-medium" value="<?php echo (isset($dadosEndereco->fone_comercial) ? $dadosEndereco->fone_comercial : ''); ?>" maxlength="14" data-mask="(99) 9999-9999" data-placement="right" data-original-title="Telefone comercial"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseGraduacao"><i class="ico-briefcase"></i>Graduação</a>
				</div>
				<div id="collapseGraduacao" class="accordion-body <?php echo (isset($dados->id) ? 'in' : ''); ?> collapse" style="height: <?php echo (isset($dados->id) ? 'auto' : '0px'); ?>;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Curso de Graduação:</label>
							<div class="controls"><input type="text" name="curso" class="tip validate[required] input-large" value="<?php echo (isset($dadosGraduacao->curso) ? $dadosGraduacao->curso : ''); ?>" maxlength="150" data-placement="right" data-original-title="Nome do curso de formação"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Instituição:</label>
							<div class="controls"><input type="text" name="instituicao" class="tip validate[required] input-large" value="<?php echo (isset($dadosGraduacao->instituicao) ? $dadosGraduacao->instituicao : ''); ?>" maxlength="150" data-placement="right" data-original-title="Nome da instituição"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Sigla:</label>
							<div class="controls"><input type="text" name="sigla" class="tip validate[required] input-small" value="<?php echo (isset($dadosGraduacao->sigla) ? $dadosGraduacao->sigla : ''); ?>" maxlength="15" data-placement="right" data-original-title="Sigla"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Conclusão:</label>
							<div class="controls"><input type="text" name="ano_conclusao" class="tip validate[required] input-small" value="<?php echo (isset($dadosGraduacao->ano_conclusao) ? $dadosGraduacao->ano_conclusao : ''); ?>" maxlength="4" data-mask="9999" data-placement="right" data-original-title="Ano de conclusão do curso"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseRedesSociais"><i class="icon-facebook-sign"></i><i class="icon-twitter"></i>Redes Sociais</a>
				</div>
				<div id="collapseRedesSociais" class="accordion-body <?php echo (isset($dados->id) ? 'in' : ''); ?> collapse" style="height: <?php echo (isset($dados->id) ? 'auto' : '0px'); ?>;">
					<div class="well">
						<div class="control-group">
							<label class="control-label">Facebook:</label>
							<div class="controls"><input type="text" name="facebook" class="tip input-xlarge" value="<?php echo (isset($dados->facebook) ? $dados->facebook : ''); ?>" maxlength="150" data-placement="right" data-original-title="Endereço do facebook"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Twitter:</label>
							<div class="controls"><input type="text" name="twitter" class="tip input-xlarge" value="<?php echo (isset($dados->twitter) ? $dados->twitter : ''); ?>" maxlength="150" data-placement="right" data-original-title="Endereço do twitter"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-actions">
			<button class="btn btn-primary" type="submit"><i class="icon-ok"></i>&nbsp;Gravar</button>
			<button class="btn btn-success aplicar" type="button" caminho="<?php echo base_url('index.php')?>/alunos/<?php echo (isset($dados->id) ? 'alterar' : 'gravar?aplicar=sim'); ?>"><i class="icon-star"></i>&nbsp;Aplicar</button>
			<button class="btn btn-danger btnVoltar" type="button" caminho="<?php echo base_url('index.php')?>/alunos/listar"><i class="icon-remove"></i>&nbsp;Cancelar</button>
	    </div>
	</div>
</fieldset>
</form>
<?php echo br(2); ?>