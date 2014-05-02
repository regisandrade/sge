<?php
if(!permissao($info['modulo'],'editar')){
  echo "<div class=\"alert alert-error\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          Você não tem permissão para <strong>Editar</strong> o módulo ".$info['nomeTela']."
        </div>";
  exit;
}

#echo "<pre>"; print_r($dados); echo "</pre>";
echo br(); 
?>
<h5 class="widget-name"><i class="icon-th-list"></i>Alterar <?php echo $info['nomeTela']; ?></h5>
<form name="form1" id="validate" method="post" action='<?php echo base_admin("controle/salvar_update/".$this->uri->segment(4))?>' class="form-horizontal">
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
        $nome_itens = $dados->$field;
        if(strpos($nome_itens,'.png')||strpos($nome_itens,'.jpeg')||strpos($nome_itens,'.JPG')||strpos($nome_itens,'.jpg')||strpos($nome_itens,'.gif')){
          $src = $dados->$field;
        }else if(strpos($nome_itens,'.zip') || strpos($nome_itens,'.rar')){
          $src = 'arquivos/imagem/rar-icon.png';
        }else if(strpos($nome_itens,'.pdf')){
          $src = 'arquivos/imagem/pdf-icon.png';
        }else if(strpos($nome_itens,'.doc')||strpos($nome_itens,'.docx')){
          $src = 'arquivos/imagem/word-icon.png';
        }else if(strpos($nome_itens,'.xls')||strpos($nome_itens,'.xlsx')){
          $src = 'arquivos/imagem/excel-icon.png';
        }
    ?>
    <div class="control-group">
      <label class="control-label"><?php echo $f['label']?>:</label>
      <div class="controls">
        <input type="hidden" id="rece_imagem_<?php echo $field?>" name="<?php echo $field?>" value="<?php echo $dados->$field?>" />
        <a style="font-size:13px;" onclick="return abrir_gerenciador('#img_<?php echo $field?>','#rece_imagem_<?php echo $field?>')"  href="javascript:void(0)">
        <img id="img_<?php echo $field?>" style="max-width:70px; max-height:70px;" src="<?php echo base_url().'public/img/'.$src?>" />
        </a><br />
        <a style="font-size:13px;" onclick="return abrir_gerenciador('#img_<?php echo $field?>','#rece_imagem_<?php echo $field?>')"  href="javascript:void(0)">Enviar</a>
      </div>
    </div>
    <?php 
      }
      if($f['type']=='fk'){
    ?>
      <div class="control-group">
        <label class="control-label"><?php echo $f['label']?>:</label>
        <div class="controls">
          <select class="tip select select2-offscreen <?php echo (isset($f['class']) ? $f['class'] : '').(isset($f['notnull']) ? ' validate[required]' : '') ?>" 
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
            #echo "<pre>"; print_r($fk); print_r($f); print_r($dados); echo "</pre>"; exit;
            ?>
            <option <?php echo $dados->$field == $fk[$f['fk_id']]?'selected':''?> value="<?php echo $fk[$f['fk_id']]?>"><?php echo $fk[$f['fk_text']]?></option>
            <?php }?>
          </select>
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
                 value="<?php echo $dados->$field;?>" 
                 class="tip <?php echo (isset($f['class']) ? $f['class'] : '') . (isset($f['notnull']) ? ' validate[required]': '') ?>" 
                 maxlength="<?php echo $f['size']?>"
                 data-original-title="<?php echo $f['label']?>"
                 data-placement="right"></div>
      </div>
    <?php 
      }
      //echo "<pre>"; print_r($f); echo "</pre>";
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
                  echo "<option ".($dados->$field == $valor ? 'selected' : '')." value=\"".$valor."\">".$valor."</option> ";
                }
                ?> 
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
                                     name="<?php echo $field?>" 
                                     value="<?php echo dataTela($dados->$field)?>"
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
                                        class="tip <?php echo (isset($f['ckeditor']) ? ' texto' : '') . (isset($f['notnull']) ? ' validate[required]': '') ?>" 
                                        name="<?php echo $field?>"
                                        data-original-title="<?php echo $f['label']?>"
                                        data-placement="right"><?php echo $dados->$field?></textarea></div>
      </div>
    <?php 
      }
      if($f['type']=='int'){
    ?>
        <div class="control-group">
          <label class="control-label"><?php echo $f['label']?>:</label>
          <div class="controls"><input type="text" 
                                       class="tip <?php echo (isset($f['class']) ? $f['class'] : '') . (isset($f['notnull']) ? ' validate[required]': '') ?>" 
                                       name="<?php echo $field?>" value="<?php echo $dados->$field?>"
                                       data-original-title="<?php echo $f['label']?>"
                                       data-placement="right"></div>
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
        <?php 
        if (isset($dados->arquivo)) {
        ?>
          <br><br>Foto atual: <img src="<?php echo base_url('')."uploads/".$dados->arquivo?>" alt="<?php echo $dados->arquivo?>" title="<?php echo $dados->arquivo?>" />
        <?php
        }
        ?>
        
      </div>
    </div>
    <?php 
      }
    }
  ?>
    <div class="form-actions">
      <button class="btn btn-primary" type="submit"><i class="icon-ok"></i>&nbsp;Gravar</button>
      <button class="btn btn-success" type="button"><i class="icon-star"></i>&nbsp;Aplicar</button>
      <button class="btn btn-danger btnVoltar" type="button" caminho="<?php echo base_admin('controle/listar')?>"><i class="icon-remove"></i>&nbsp;Cancelar</button>
    </div>
  </div>
</fieldset>
</form>
<?php echo br(); ?>