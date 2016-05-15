<fieldset >
        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Puesto</p>
            			<select name="personal[puesto_id]" id="puesto_id" class="form-control">
                			<option value="">Seleccione</option>
                			<?php foreach ($puestos as $puesto ) { ?>
                					<option <?php if($puesto->id == $personal->puesto_id ){ echo "selected"; }?> value="<?php echo $puesto->id;?>"><?php echo $puesto->nombre;?></option>
                			<?php } ?>             		
                		</select> 
            		</div>	
			</div>
			<input type="hidden" name="personal[personal_id]" value="<?php echo $personal->id;?>">
        </div><br>
</fieldset>