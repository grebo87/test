<div>
    <h3>Datos Generales</h3>
    <fieldset>
        <div class="form-group">
            
            <div class="row">
            	
            		<!-- <div class="col col-md-3">
            			<p class="help-block">Foto</p>
	    				<input type="file" class="form-control" name="foto" id="foto"placeholder="">
            		</div> -->
            		<div class="col col-md-3">
						<p class="help-block">Cedula</p>              		
                		<input type="text" class="form-control" required name="personal[cedula]" id="cedula" placeholder="Cedula">
                		
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Nombre</p>
                		<input type="text" class="form-control" name="personal[nombre]" id="nombre" placeholder="Nombre">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Apellido Paterno</p>
                		<input type="text" class="form-control" name="personal[apellido_paterno]" id="apellido_paterno" placeholder="Apellido Paterno">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Apellido Materno</p>
                		<input type="text" class="form-control" name="personal[apellido_materno]" id="apellido_materno" placeholder="Apellido Materno">
            		</div>
            	
			</div>
        </div><br>

        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Sexo</p>
            			<div class="radio">
  							<label><input type="radio" name="personal[sexo]" id="sexo" value="Masculino" placeholder="Masculino">Masculino</label>
						</div>
						<div class="radio">
  							<label><input type="radio" name="personal[sexo]" id="sexo" value="Femenino" placeholder="Femenino">Femenino</label>
						</div>
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Fecha de Nacimiento</p>
                		<input type="date" class="form-control" name="personal[fecha_nacimiento]" id="fecha_nacimiento" placeholder="Fecha de Nacimiento">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Lugar de Nacimiento</p>
                		<textarea class="form-control" rows="3" name="personal[lugar_nacimiento]" id="lugar_nacimiento" placeholder="Lugar de Nacimiento"></textarea>              
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Estado Civil</p>              		
                		<select name="personal[edo_civil]" id="edo_civil" class="form-control">
                			<option value="">Seleccione</option>
                			<option value="Soltero">Soltero</option>
                			<option value="Casado">Casado</option>
                			<option value="Divorciado">Divorciado</option>
                			<option value="Viudo">Viudo</option>
                		</select>
                		
            		</div>
            	
			</div>
        </div><br>

        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">e-mail</p>
            			<input type="email" class="form-control" name="personal[email]" id="email" placeholder="ejemplo@ejemplo.com">
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Teléfono</p>
                		<input type="text" class="form-control" name="personal[telefono_fijo]" id="telefono_fijo" placeholder="(XXXX) XXX-XXXX" maxlength="12">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Móvil</p>
                		<input type="text" class="form-control" name="personal[telefono_movil]" id="telefono_movil" placeholder="(XXXX) XXX-XXXX" maxlength="12">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Fecha de Ingreso</p>              		
                		<input type="date" class="form-control" name="personal[fecha_ingreso]" id="fecha_ingreso" placeholder="Fecha de Ingreso" value="<?php echo date('Y-m-d'); ?>">
                		
            		</div>
            	
			</div>
        </div><br>

        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Móvil Asignado</p>
            			<input type="text" class="form-control" name="personal[movil_asignado]" id="movil_asignado" placeholder="(XXXX) XXX-XXXX" maxlength="12">
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Numero Seguro Social</p>
                		<input type="text" class="form-control" name="personal[num_seg_social]" id="num_seg_social" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Grado de Estudio</p>
						<select name="personal[grade_estudio]" id="grade_estudio" class="form-control">
                			<option value="">Seleccione</option>
                			<option value="Secundaria">Secundaria</option>
                			<option value="Educación Media Superior">Educación Media Superior</option>
                			<option value="Educación Superior">Educación Superior</option>                		
                		</select>                		
            		</div>           	
			</div>
        </div><br>

    </fieldset>

    <h3>Domicilio</h3>
    <fieldset>

    	<div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Estado</p>
            			<input type="text" class="form-control" name="domicilio[estado]" id="estado" placeholder="">
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Municipio</p>
                		<input type="text" class="form-control" name="domicilio[municipio]" id="municipio">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Ciudad</p>
						<input type="text" class="form-control" name="domicilio[ciudad]" id="ciudad">       		
            		</div>
					<div class="col col-md-3">
						<p class="help-block">Calle</p>
						<input type="text" class="form-control" name="domicilio[calle]" id="calle">       		
            		</div>  	
			</div>
        </div><br>

    </fieldset>

    <h3>Puesto</h3>
    <fieldset >
        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Puesto</p>
            			<select name="personal[puesto_id]" id="puesto_id" class="form-control">
                			<option value="">Seleccione</option>
                			<?php foreach ($puestos as $puesto ) { ?>
                					<option value="<?php echo $puesto->id;?>"><?php echo $puesto->nombre;?></option>
                			<?php } ?>             		
                		</select> 
            		</div>	
			</div>
        </div><br>
    </fieldset>
</div>






