<?php
if(!permissao($info['modulo'],'adicionar')){
  echo "<div class=\"alert alert-error\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          Você não tem permissão para <strong>Cadastrar</strong> no módulo ".$info['nomeTela']."
        </div>";
  exit;
}

#$this->load->helper('modulos_helper.php');
#echo "<pre>"; print_r($_SESSION); echo "</pre>";
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i>Cadastrar <?php echo $info['nomeTela']; ?></h5>
<form name="form1" id="validate" method="post" action='<?php echo base_admin('controle/salvar_novo')?>' class="form-horizontal" enctype="multipart/form-data">
<input name="us_id" type="hidden" value="<?php echo $this->session->userdata('us_id'); ?>">
<fieldset>
  <div class="navbar">
    <div class="navbar-inner">
      <h6><?php echo ucfirst($info['nomeTela']); ?></h6>
      <ul class="navbar-icons">
        <li><a title="" class="tip" href="<?php echo base_admin('controle/add')?>" data-original-title="Cadastrar <?php echo ucfirst($info['nomeTela']); ?>"><i class="icon-plus"></i></a></li>
        <li><a title="" class="tip" href="<?php echo base_admin('controle/listar')?>" data-original-title="Listar <?php echo ucfirst($info['nomeTela']); ?>"><i class="icon-reorder"></i></a></li>
        <!-- <li><a title="" class="tip" href="#" data-original-title="Parameters"><i class="icon-cogs"></i></a></li> -->
      </ul>
    </div>
  </div>
  <div class="well">
    <?php 
    foreach($info['fields'] as $field => $f){
      if($f['type']=='img'){
    ?>
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
      if($f['type']=='file'){
    ?>
    <div class="control-group">
      <label class="control-label"><?php echo $f['label']?>:</label>
      <div class="controls">
        <input type="file" size="24" style="opacity: 0;" 
               name="<?php echo $field?>" 
               class="tip styled <?php echo (isset($f['notnull']) ? 'validate[required]': '') ?>"
               data-original-title="<?php echo $f['label']?>"
               data-placement="right">
      </div>
    </div>
    <?php 
      }
      if($f['type']=='varchar'){
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
        <div class="controls">
          <input type="text" name="<?php echo $field?>" 
          		class="tip <?php echo (isset($f['class']) ? $f['class'] : '') . (isset($f['notnull']) ? ' validate[required]': '') ?>" 
          		maxlength="<?php echo $f['size']?>" 
          		<?php echo (isset($f['data-mask']) ? 'data-mask="'.$f['data-mask'].'"' : '') ?>
          		data-original-title="<?php echo $f['label']?>"
              	data-placement="right"></div>
      </div>
    <?php 
      }
      #echo "<pre>"; print_r($f); echo "</pre>";
      if($f['type']=='fk'){
        #echo "<pre>"; print_r($f); echo "</pre>";
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
        <div class="controls">
          <select class="tip select select2-offscreen <?php echo (isset($f['class']) ? $f['class'] : '') . (isset($f['notnull']) ? ' validate[required]' : '') ?>" 
                  name="<?php echo $field?>"
                  data-original-title="<?php echo $f['label']?>"
                  data-placement="right">
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
              #echo "<pre>"; print_r($fk); print_r($f); echo "</pre>"; exit;
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
        <div class="controls"><input type="text" class="tip datepicker validate[required]" 
                                     name="<?php echo $field?>" id="<?php echo $field?>" 
                                     data-original-title="<?php echo $f['label']?>"
                                     data-placement="right"></div>
      </div>
    <?php 
      }
      if($f['type']=='text'){
    ?>
            <div class="control-group">
              <label class="control-label"><?php echo $f['label']?>:</label>
              <div class="controls"><textarea rows="10" cols="100" 
                                              class="tip <?php echo (isset($f['class']) ? $f['class'] : '') . (isset($f['notnull']) ? ' validate[required]': '') ?>" 
                                              name="<?php echo $field?>"
                                              data-original-title="<?php echo $f['label']?>"
                                              data-placement="right"></textarea></div>
            </div>
    <?php 
      }
      if($f['type']=='int'){
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
        <div class="controls"><input type="text" class="tip <?php echo (isset($f['class']) ? $f['class'] : '') . (isset($f['notnull']) ? ' validate[required]': '') ?>" 
                                     name="<?php echo $field?>"
                                     data-original-title="<?php echo $f['label']?>"
                                     data-placement="right"></div>
      </div>
    <?php 
      }
      if($f['type']=='enum'){
        $valores = explode(",", str_replace('"', '', $f['valor']));
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
          <div class="controls">
            <select tabindex="-1" name="<?php echo $field?>" 
                    class="tip select select2-offscreen <?php if(isset($f['notnull'])){echo "validate[required]";}?>" 
                    data-placeholder="Selecionar"
                    data-original-title="<?php echo $f['label']?>"
                    data-placement="right">
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
      <button class="btn btn-primary" type="submit"><i class="icon-ok"></i>&nbsp;Gravar</button>
      <button class="btn btn-success aplicar" type="button" caminho="<?php echo base_admin('controle/salvar_novo'.'?aplicar=sim')?>"><i class="icon-star"></i>&nbsp;Aplicar</button>
      <button class="btn btn-danger btnVoltar" type="button" caminho="<?php echo base_admin('controle/listar')?>"><i class="icon-remove"></i>&nbsp;Cancelar</button>
    </div>
  </div>
</fieldset>
</form>
<?php echo br(); ?>