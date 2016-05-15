<br>
<fieldset>

    	<div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Estado</p>
            			<input type="text" class="form-control" name="domicilio[estado]" id="estado" value="<?php echo $domicilio->estado;?>">
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Municipio</p>
                		<input type="text" class="form-control" name="domicilio[municipio]" id="municipio" value="<?php echo $domicilio->municipio;?>">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Ciudad</p>
						<input type="text" class="form-control" name="domicilio[ciudad]" id="ciudad" value="<?php echo $domicilio->ciudad;?>">       		
            		</div>
					<div class="col col-md-3">
						<p class="help-block">Calle</p>
						<input type="text" class="form-control" name="domicilio[calle]" id="calle" value="<?php echo $domicilio->calle;?>">       		
            		</div>  	
			</div>
			<div class="row">
				<input type="hidden" name="domicilio[domicilio_id]" value="<?php echo $domicilio->id;?>">
				<input type="hidden" name="domicilio[personal_id]" value="<?php echo $personal->id;?>">
			</div>
        </div><br>

</fieldset>