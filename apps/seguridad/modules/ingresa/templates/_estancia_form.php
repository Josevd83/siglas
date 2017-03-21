<!--
<div class="sf_admin_form_row sf_admin_text">
    <div id="error_pase" class="error" style="display: none;"></div>
    <div>
        <label for="">N° de pase</label>
        <div class="content" id="llave_ingreso_id">
            <input id="seguridad_ingreso_llave_ingreso_id" name="seguridad_ingreso[llave_ingreso_id]" maxlength="4" size="4" onkeydown="return solo_num(event)"/>
            <script>
                var key_into = new Array();
                <?php
                $llaves_ocupadas = Doctrine::getTable('Seguridad_LlaveIngreso')->getAllOrderBy(array('n_pase'));
                
                foreach ($llaves_ocupadas as $llave_ocupada) {
                    echo "key_into[".$llave_ocupada->getNPase()."] = '".$llave_ocupada->getStatus()."';";
                }
                ?>
//alert(key_into);
            </script>
        </div>
    </div>
</div>
-->


<div class="sf_admin_form_row sf_admin_text">
    <div id="error_pase" class="error" style="display: none;"></div>
    <div>
	<?php
	$q = Doctrine::getTable('Seguridad_LlaveIngreso')
			->createQuery('c')
			->where('c.status = ?', 'D')
			->orderBy('c.n_pase');
	$llaves_ocupadas = $q->execute();
	?>
        <label for="">N° de pase<br><span style="font-size:9.5px;"><?php echo "Disponibles: ".count($llaves_ocupadas) ?></span></label>
        <div class="content" id="llave_ingreso_id">
            <select id="seguridad_ingreso_llave_ingreso_id" name="seguridad_ingreso[llave_ingreso_id]">
		 <option value=""></option>
                <?php
                //$motivos = Doctrine::getTable('Seguridad_llave_ingreso')->getAllOrderBy(array('descripcion'));
		//$llaves_ocupadas = Doctrine::getTable('Seguridad_llaveIngreso')->getAllOrderBy(array('id'));
		                
                foreach ($llaves_ocupadas as $llave_ocupada) { 
                    if($llave_ocupada->getId()!=100000){ ?>
                    <option value="<?php echo $llave_ocupada->getId(); ?>"><?php echo $llave_ocupada->getNPase(); ?></option>
                <?php }} ?>
            </select>
	    <script>
                var key_into = new Array();
                <?php
                $llaves_ocupadas = Doctrine::getTable('Seguridad_LlaveIngreso')->getAllOrderBy(array('n_pase'));
		
                foreach ($llaves_ocupadas as $llave_ocupada) {
                    //echo "key_into[".$llave_ocupada->getNPase()."] = '".$llave_ocupada->getStatus()."';";
		      echo "key_into[".$llave_ocupada->getId()."] = '".$llave_ocupada->getStatus()."';";
                }
                ?>
//alert(key_into.length);
            </script>
        </div>
    </div>
</div>
