<?php 
echo br(); 
?>
<h5 class="widget-name"><i class="icon-columns"></i></i>Lista de usuários</h5>
<?php
echo isset($msg)?"<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$msg}</div>":"";

?>

<div class="widget">
	<div class="navbar">
		<div class="navbar-inner">
			<h6>Usuários</h6>
			<ul class="navbar-icons">
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/usuarios/form_usuario" data-original-title="Adicionar novo usuário"><i class="icon-plus"></i></a></li>
				<li><a title="" class="tip" href="<?php echo base_url('index.php')?>/usuarios/listarUsuarios" data-original-title="Listar usuários"><i class="icon-reorder"></i></a></li>
				<!-- <li><a title="" class="tip" href="#" data-original-title="Parameters"><i class="icon-cogs"></i></a></li> -->
			</ul>
		</div>
	</div>
	<div class="table-overflow">
		<div id="data-table_wrapper" class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered dataTable" id="data-table" aria-describedby="data-table_info">
				<thead>
					<tr role="row">
						<th>Ações</th>
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Nome</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="e-Mail: activate to sort column ascending">e-Mail</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Telefone: activate to sort column ascending">Telefone</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Função: activate to sort column ascending">Função</th>
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
										<a title="" class="btn tip" href="<?php echo base_url('index.php')?>/usuarios/form_usuario/<?php echo $dado->us_id; ?>" data-original-title="Editar"><i class="icon-pencil"></i></a>
									</li>
									<li>
										<a title="" class="btn tip" href="<?php echo base_url('index.php')?>/usuarios/deleteUsuario/<?php echo $dado->us_id; ?>" data-original-title="Excluir"><i class="icon-remove"></i></a>
									</li>
								</ul>
							</td>
							<td class=" sorting_1"><?php echo $dado->us_id?></td>
							<td class=" "><?php echo $dado->us_nome?></td>
							<td class=" "><?php echo $dado->us_email?></td>
							<td class=" "><?php echo $dado->us_telefone?></td>
							<td class=" "><?php echo tipo_usuario($dado->us_tipo);?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>