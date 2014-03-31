<?php 
echo br(); 
?>
<h5 class="widget-name"><i class="icon-columns"></i></i>Lista de usuários</h5>
<?php
echo isset($error)?"<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$error}</div>":"";

?>

<div class="widget">
	<div class="navbar"><div class="navbar-inner"><h6>Usuários</h6></div></div>
	<div class="table-overflow">
		<div id="data-table_wrapper" class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered dataTable" id="data-table" aria-describedby="data-table_info">
				<thead>
					<tr role="row">
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
							<td class=" sorting_1"><?php echo $dado->us_id?></td>
							<td class=" "><?php echo $dado->us_nome?></td>
							<td class=" "><?php echo $dado->us_email?></td>
							<td class=" "><?php echo $dado->us_telefone?></td>
							<td class=" "><?php echo $dado->us_tipo?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>