<?php
if(!permissao($info['modulo'],'adicionar')){
  echo "<div class=\"alert alert-error\" style=\"margin-top: 16px;\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Atenção!</strong> Você não tem permissão para adicionar".$info['modulo']."</div>";
  exit;
}

$this->load->helper('modulos_helper.php');
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i>[Modulo]</h5>
<form name="form1" id="validate" method="post" action='<?php echo base_url('index.php') ?>/usuarios/form_usuario/<?php echo $this->uri->segment(3); ?>' class="form-horizontal">
<input name="us_id" type="hidden" value="<?php echo $this->uri->segment(3)?>">
<fieldset>
  <div class="navbar">
    <div class="navbar-inner">
      <h6>Usuário</h6>
      <ul class="navbar-icons">
        <li><a title="" class="tip" href="<?php echo base_url('index.php')?>/usuarios/form_usuario" data-original-title="Adicionar novo usuário"><i class="icon-plus"></i></a></li>
        <li><a title="" class="tip" href="<?php echo base_url('index.php')?>/usuarios/listarUsuarios" data-original-title="Listar usuários"><i class="icon-reorder"></i></a></li>
        <!-- <li><a title="" class="tip" href="#" data-original-title="Parameters"><i class="icon-cogs"></i></a></li> -->
      </ul>
    </div>
  </div>
  <div class="well">
    <?php 
    foreach($info['fields'] as $field => $f){
      if($f['type']=='img'){
    ?>
    <input type="hidden" id="rece_imagem_<?php echo $field?>" name="<?php echo $field?>" />
    <div class="control-group">
      <label class="control-label"><?php echo $f['label']?>:</label>
      <div class="controls">
        <input type="hidden" id="rece_imagem_<?php echo $field?>" name="<?php echo $field?>"  />
        <a style="font-size:13px;" onclick="return abrir_gerenciador('#img_<?php echo $field?>','#rece_imagem_<?php echo $field?>')"  href="javascript:void(0)">
        <img id="img_<?php echo $field?>" style="max-width:70px; max-height:70px;"
             src="<?php echo base_url('arquivoadmin/imagem/no_image-100x100.jpg')?>" />
        </a><br />
        <a style="font-size:13px;" onclick="return abrir_gerenciador('#img_<?php echo $field?>','#rece_imagem_<?php echo $field?>')"  href="javascript:void(0)">Enviar</a>
      </div>
    </div>
    <?php 
      }
      if($f['type']=='varchar'){
    ?>
      <div class="control-group">
        <label class="control-label">?php echo $f['label']?>:</label>
        <div class="controls">
          <input type="text" name="<?php echo $field?>" <?php if(isset($f['notnull'])){echo "class='validate[required]'";}?> style="width:50%" maxlength="<?php echo $f['size']?>"></div>
      </div>
    <?php 
      }
      if($f['type']=='fk'){
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
        <div class="controls">
          <select class="styled <?php if(isset($f['notnull'])){echo "validate[required]";}?>" name="<?php echo $field?>">
            <option value="<?php echo isset($f['notnull'])?'':'0';?>">--Selecione--</option>
            <?php
            if(isset($info['where_fk'])){
              $this->db->where($info['where_fk']);
            }
            if(isset($info['order_fk'])){
              $this->db->order_by($info['order_fk']);
            }
            $table_fks = $this->db
                            ->get($f['table_fk'])
                            ->result_array();

            $this->output->enable_profiler(TRUE);
            foreach($table_fks as $fk){
            ?>
            <option value="<?php echo $fk[$f['fk_id']]?>"><?php echo $fk[$f['fk_text']]?></option>
            <?php }?>
          </select>
        </div>
      </div>
    <?php
      }
      if($f['type']=='date'){
    ?>
    <div class="control-group">
      <label class="control-label"><?php echo $f['label']?>:</label>
      <div class="controls"><input type="text" class="datepicker validate[required]" style="width:120px" name="<?php echo $field?>" value="<?php echo date('Y-m-d')?>" /></div>
    </div>
    <?php 
      }
      if($f['type']=='text'){?>
    <div class="control-group">
      <label class="control-label"><?php echo $f['label']?>:</label>
      <div class="controls"><textarea <?php echo isset($f['ckeditor'])?'class="texto"':''?> style="width:50%" name="<?php echo $field?>"></textarea></div>
    </div>
  <?php 
      }
    }
  ?>
  </div>
</fieldset>
</form>