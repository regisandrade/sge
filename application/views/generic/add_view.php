<?php
/*if(!permissao($info['modulo'],'adicionar')){
  echo "<div class=\"alert alert-error\" style=\"margin-top: 16px;\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Atenção!</strong> Você não tem permissão para adicionar".$info['modulo']."</div>";
  exit;
}*/

#$this->load->helper('modulos_helper.php');
#echo "<pre>"; print_r($_SESSION); echo "</pre>";
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i><?php echo ucfirst($info['modulo']); ?></h5>
<form name="form1" id="validate" method="post" action='<?php echo base_admin('controle/salvar_novo')?>' class="form-horizontal">
<input name="us_id" type="hidden" value="<?php echo $this->session->userdata('us_id'); ?>">
<fieldset>
  <div class="navbar">
    <div class="navbar-inner">
      <h6><?php echo ucfirst($info['modulo']); ?></h6>
      <ul class="navbar-icons">
        <li><a title="" class="tip" href="<?php echo base_admin('controle/add')?>" data-original-title="Adicionar novo usuário"><i class="icon-plus"></i></a></li>
        <li><a title="" class="tip" href="<?php echo base_admin('controle/listar')?>" data-original-title="Listar usuários"><i class="icon-reorder"></i></a></li>
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
        <label class="control-label"><?php echo $f['label']?>:</label>
        <div class="controls">
          <input type="text" name="<?php echo $field?>" class="<?php echo $f['class'] . (isset($f['notnull']) ? ' validate[required]': '') ?>" maxlength="<?php echo $f['size']?>"></div>
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
        <div class="controls"><input type="text" class="datepicker validate[required]" name="<?php echo $field?>" value="" /></div>
      </div>
    <?php 
      }
      if($f['type']=='text'){
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
        <div class="controls"><textarea <?php echo isset($f['ckeditor'])?'class="texto"':''?> style="width:50%" name="<?php echo $field?>"></textarea></div>
      </div>
    <?php 
      }
      if($f['type']=='enum'){
        $valores = explode(",", str_replace('"', '', $f['valor']));
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
          <div class="controls">
            <select tabindex="-1" name="<?php echo $field?>" class="select select2-offscreen <?php if(isset($f['notnull'])){echo "validate[required]";}?>" data-placeholder="Selecionar">
                <option value=""></option> 
                <?php
                foreach ($valores as $valor) {
                  echo "<option value=\"".$valor."\">".$valor."</option> ";
                }
                ?> 
            </select>
          </div>
      </div>
    <?php
      }
    }
  ?>
    <div class="form-actions">
      <button class="btn btn-primary" type="submit">Gravar</button>
      <button class="btn btn-danger" type="button">Cancelar</button>
    </div>
  </div>
</fieldset>
</form>
<?php echo br(); ?>