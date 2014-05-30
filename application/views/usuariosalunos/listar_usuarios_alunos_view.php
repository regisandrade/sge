<?php 
echo br(); 
?>
<h5 class="widget-name"><i class="icon-columns"></i>Lista de usuários/alunos</h5>
<?php
echo isset($msg)?"<br><div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\"></button>{$msg}</div>":"";
?>
<div class="widget">
	<div class="table-overflow">
		<div id="data-table_wrapper" class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered dataTable" id="data-table" aria-describedby="data-table_info">
				<thead>
					<tr role="row">
						<th class="th-acoes">Ações</th>
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nome: activate to sort column descending">Nome</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Login: activate to sort column ascending">Login</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
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
									<li class="confirmaResetar">
										<a title="" class="btn tip" nomeAluno="<?php echo $dado->nome?>" caminho="<?php echo base_url('index.php')?>/usuariosalunos/resetarSenhaAluno/<?php echo $dado->id; ?>" data-original-title="Resetar Senha"><i class="icon-cog"></i></a>
									</li>
								</ul>
							</td>
							<td class=" "><?php echo $dado->nome?></td>
							<td class=" "><?php echo $dado->login?></td>
							<td class=" "><?php echo $dado->status;?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>