<?php 
echo br(); 
?>
<h5 class="widget-name"><i class="icon-columns"></i>Historico Escolar</h5>

<div class="widget">
	<div class="table-overflow">
		<div id="data-table_wrapper" class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered dataTable" id="data-table" aria-describedby="data-table_info">
				<thead>
					<tr role="row">
						<th class="th-acoes">Ações</th>
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">Nome</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Turma: activate to sort column ascending">Turma</th>
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
										<a title="" class="btn tip" href="<?php echo base_url('index.php')?>/alunos/pdf_historico_escolar/<?php echo $dado->id; ?>" data-original-title="Imprimir"><i class="icon-print"></i></a>
									</li>
								</ul>
							</td>
							<td class=" "><?php echo $dado->nome?></td>
							<td class=" "><?php echo $dado->turma?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>