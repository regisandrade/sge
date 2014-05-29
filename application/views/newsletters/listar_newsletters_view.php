<?php 
echo br(); 
?>
<h5 class="widget-name"><i class="icon-columns"></i>Newsletters</h5>
<div class="widget">
	<h6><a title="" style="vertical-align: middle;" class="btn tip" href="<?php echo base_url('index.php')?>/newsletters/exportExcel" data-original-title="Exportar Excel"><i class="icon-download"></i></a>&nbsp;Exportar para Excel</a></h6>
	<div class="table-overflow">
		<div id="data-table_wrapper" class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered dataTable" id="data-table" aria-describedby="data-table_info">
				<thead>
					<tr role="row">
						<th role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="#: activate to sort column descending">Nome</th>
						<th role="columnheader" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="e-Mail: activate to sort column ascending">e-Mail</th>
					</tr>
				</thead>
				<tbody role="alert" aria-live="polite" aria-relevant="all">
					<?php
					$count = 0;
					foreach ($resultado as $dado) {
					?>
						<tr class="<?php (++$count%2 ? "odd" : "even") ?>">
							<td class=" "><?php echo $dado->nome?></td>
							<td class=" "><?php echo $dado->email?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>