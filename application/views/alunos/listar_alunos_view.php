<?php 
echo br(); 
?>
<h5 class="widget-name"><i class="icon-columns"></i>Lista de alunos</h5>
<?php
echo isset($msg)?"<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$msg}</div>":"";
?>

<div class="widget">
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
	<div class="table-overflow">
		<div id="data-table_wrapper" class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered dataTable" id="data-table" aria-describedby="data-table_info">
				<thead>
					<tr role="row">
						<th class="th-acoes">Ações</th>
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">Nome</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="e-Mail: activate to sort column ascending">e-Mail</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Telefone: activate to sort column ascending">Telefone</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Curso activate to sort column ascending">Curso</th>
					</tr>
				</thead>
				<tbody role="alert" aria-live="polite" aria-relevant="all">
					<?php
					$count = 0;
					foreach ($resultado as $dado) {
					?>
						<tr class="<?php (++$count%2 ? "odd" : "even") ?>">
							<td>
								<ul class="table-controls">
									<li>
										<a title="" class="btn tip" href="<?php echo base_url('index.php')?>/alunos/form_aluno/<?php echo $dado->id; ?>" data-original-title="Editar"><i class="icon-pencil"></i></a>
									</li>
									<li>
										<a title="" class="btn tip confirma" href="#" caminho="<?php echo base_url('index.php')?>/alunos/deleteAluno/<?php echo $dado->id; ?>" data-original-title="Excluir"><i class="icon-remove"></i></a>
									</li>
								</ul>
							</td>
							<td class=" "><?php echo $dado->nome?></td>
							<td class=" "><?php echo $dado->email?></td>
							<td class=" "><?php echo '123';//$dado->telefone?></td>
							<td class=" "><?php echo $dado->id_curso;?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>