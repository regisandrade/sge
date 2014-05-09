<?php
echo br ();
#echo "<pre>"; print_r($turmas); exit;
?>
<h5 class="widget-name">
	<i class="icon-columns"></i>Lista de notas e frequências
</h5>
<!-- AJAX wizard -->
<div class="widget">
	<form id="wizard2" method="post" action="#"
		class="form-horizontal row-fluid well ui-formwizard">
		<fieldset class="step ui-formwizard-content" id="step3"
			style="display: block;">
			<div class="step-title">
				<i>1</i>
				<h5>Selecionar uma turma</h5>
				<span>Selecionar uma tuma para logo após selecionar a disciplina.</span>
			</div>
			<div>
				<div class="control-group">
					<label class="control-label">Turma:</label>
					<div class="controls">
						<select name="turma" id="turmaNotas" class="select select2-offscreen">
							<option value="">Selecionar uma turma</option>
						<?php foreach($turmas as $turma){?>
							<option value="<?php echo $turma->id.'|'.$turma->sigla.'|'.$turma->nome?>"><?php echo $turma->sigla.'-'.$turma->nome?></option>
						<?php } ?>
						</select>
					</div>
				</div>
			</div>
		</fieldset>
		<fieldset id="step4" class="step ui-formwizard-content"
			style="display: none;">
			<div class="step-title">
				<i>2</i>
				<h5>Selecionar uma disciplina</h5>
				<span>Selecionar uma disciplina para listar as notas e frequências</span>
			</div>
			<div>
				<div class="control-group">
					<label class="control-label">Curso:</label>
					<div class="controls">
						<span id="cursoNotas"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Turma:</label>
					<div class="controls">
						<span id="nomeTurmaNotas"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Disciplina:</label>
					<div class="controls">
						<select name="disciplinaNotas" id="disciplinaNotas" class="select select2-offscreen">
							<option value="">Selecionar uma disciplina</option>
						</select>
					</div>
				</div>
			</div>
		</fieldset>
		<div class="form-actions align-right">
			<input class="btn ui-wizard-content ui-formwizard-button" id="back-2"
				value="Voltar" type="reset" disabled="disabled"> <input type="submit"
				class="btn btn-danger ui-wizard-content ui-formwizard-button"
				id="next-2" value="Avançar">
		</div>
	</form>
	<div class="ocultar-tabela" id="w1">
		<?php 
		echo br(); 
		?>
		<div class="navbar">
			<div class="navbar-inner">
				<h6 id="tituloTabela">123</h6>
			</div>
		</div>
		<div class="table-overflow">
			<table class="table table-striped" id="tabela-dados" border="1">
			    <thead>
			        <tr>
			            <th>Id</th>
			            <th>Nome</th>
			            <th>Nota</th>
			            <th>Frequência</th>
			        </tr>
			    </thead>
			    <tbody>
			    </tbody>
			</table>
		</div>
	</div>
</div>
<!-- /AJAX wizard -->