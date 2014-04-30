<?php 
echo br();
?>
<h5 class="widget-name"><i class="icon-columns"></i></i>Listar <?php echo $info['nomeTela']; ?></h5>
<?php
//echo "<pre>"; print_r(); die;
if ($this->uri->segment(5)) {
  $alertcss = "alert-success";
  switch ($this->uri->segment(5)) {
    case 1: # Gravar
      $msg = "Registro gravado com sucesso.";
      break;
    case 2: # Alterar
      $msg = "Registro alterado com sucesso.";
      break;
    case 3: # Excluir
      $msg = "Registro excluído com sucesso.";
      break;
    case 4: # Arquivo
      $msg = "Erro no envio do arquivo selecionado.";
      $alertcss = "alert-error";
      break;
    case 5: # Permissao
      $msg = "<strong>Atenção</strong><br>Você não tem permissão para excluir registros.";
      $alertcss = "";
      break;
  }
  echo "<div class=\"alert ".$alertcss."\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ".$msg."
        </div>";
}
?>
<div class="widget">
  <div class="navbar">
    <div class="navbar-inner">
      <h6><?php echo ucfirst($info['modulo']); ?></h6>
      <ul class="navbar-icons">
        <li><a title="" class="tip" href="<?php echo base_admin('controle/add')?>" data-original-title="Cadastrar <?php echo ucfirst($info['modulo']); ?>"><i class="icon-plus"></i></a></li>
        <li><a title="" class="tip" href="<?php echo base_admin('controle/listar')?>" data-original-title="Listar <?php echo ucfirst($info['modulo']); ?>"><i class="icon-reorder"></i></a></li>
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
            <th class="th-id">Id</th>
            <?php
            //Cabeçalho
            foreach($info['fields'] as $field => $f){
              if($f['type']=='varchar'||$f['type']=='img'||$f['type']=='int'||$f['type']=='fk'||$f['type']=='date'||($f['type']=='text'&&!isset($f['ckeditor']))){
            ?>
              <th <?php echo $f['type']=='date'?'width="100px"':''?>><?php echo $f['label']?></th>
            <?php 
              }
            }
            ?>
            <?php foreach($info['extensao'] as $extensao => $name_extensao){?>
              <th>&nbsp;</th>
            <?php }?>
          </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        <?php
        //dado do banco
        $count = 0;
        foreach($dados as $d){
        ?>
        <tr class="<?php (++$count%2 ? "odd" : "even") ?>">
          <td>
            <ul class="table-controls">
              <li>
                <a title class="btn tip" href="<?php echo base_admin('controle/editar')?>/<?php echo $d[$info['pk']]; ?>" data-original-title="Editar"><i class="icon-pencil"></i></a>
              </li>
              <li>
                <a title class="btn tip confirma" href="#" caminho="<?php echo base_admin('controle/excluir')?>/<?php echo $d[$info['pk']]; ?>" data-original-title="Excluir"><i class="icon-remove"></i></a>
              </li>
            </ul>
          </td>
          <td class=" sorting_1"><?php echo $d[$info['pk']]?></td>
          <?php
          // Conteudo
          foreach($info['fields'] as $field => $f){
          if($f['type']=='varchar'||$f['type']=='img'||$f['type']=='int'||$f['type']=='fk'||$f['type']=='date'||($f['type']=='text'&&!isset($f['ckeditor']))){
          ?>
            <td class=" ">
            <!-- Mostrando Valor Imagem -->
            <?php
          if($f['type']=='img'){

          	if(strpos($d[$field],'.png')||strpos($d[$field],'.jpg')||strpos($d[$field],'.JPG')||strpos($d[$field],'.jpeg')||strpos($d[$field],'.gif')){
          		if(@image_url($d[$field],'100x60')){
          			echo '<img src=\''.(image_url($d[$field],'100x60')).'\' />';
          			}
          	 }else{
          		   echo str_ireplace('public/imagem/gerenciador/','',$d[$field]);
          		 }
          	}

          if($f['type']=='fk'){
          	$fk_table = $this->db->where($f['fk_id'],$d[$field])->get($f['table_fk'])->result_array();
          	if(isset($fk_table[0])){
          		echo $fk_table[0][$f['fk_text']];
          		}else{
          			echo "-";
          			}
          	}

          if($f['type']=='varchar'){
          	echo $d[$field];
          	}

          if($f['type']=='date'){
          	echo dataTela($d[$field]);
          	}

          if($f['type']=='text'){
          	echo texto($d[$field],100);
          }
          
          if($f['type']=='int'){
          	echo $d[$field];
          }

          ?>
            </td>
          <?php }}?>

          <?php foreach($info['extensao'] as $extensao => $name_extensao){?>
          <td class=" "><a class="btn btn-block btn-success" href="<?php echo base_admin('modulos/'.$extensao.'/?pai='.$d[$info['pk']])?>"><?php echo $name_extensao?></a></td>
          <?php }?>
          </tr>
        <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>