<br><fieldset>
        <div class="form-group">
            
            <div class="row">
            	
            		<!-- <div class="col col-md-3">
            			<p class="help-block">Foto</p>
	    				<input type="file" class="form-control" name="foto" id="foto"placeholder="">
            		</div> -->
            		<div class="col col-md-3">
						<p class="help-block">Cedula</p>              		
                		<input type="text" class="form-control" required name="personal[cedula]" id="cedula" value="<?php echo $personal->cedula;?>" placeholder="Cedula">
                		
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Nombre</p>
                		<input type="text" class="form-control" name="personal[nombre]" id="nombre" value="<?php echo $personal->nombre;?>" placeholder="Nombre">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Apellido Paterno</p>
                		<input type="text" class="form-control" name="personal[apellido_paterno]" id="apellido_paterno"  value="<?php echo $personal->apellido_paterno;?>" placeholder="Apellido Paterno">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Apellido Materno</p>
                		<input type="text" class="form-control" name="personal[apellido_materno]" id="apellido_materno" value="<?php echo $personal->apellido_materno;?>" placeholder="Apellido Materno">
            		</div>
            	
			</div>
        </div><br>

        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Sexo</p>
            			<div class="radio">
  							<label><input type="radio" name="personal[sexo]" id="sexo" value="Masculino" placeholder="Masculino" <?php if($personal->sexo == "Masculino"){ echo "checked";} ?>>Masculino</label>
						</div>
						<div class="radio">
  							<label><input type="radio" name="personal[sexo]" id="sexo" value="Femenino" placeholder="Femenino" <?php if($personal->sexo == "Femenino"){ echo "checked";} ?>>Femenino</label>
						</div>
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Fecha de Nacimiento</p>
                		<input type="date" class="form-control" name="personal[fecha_nacimiento]" id="fecha_nacimiento" value="<?php echo $personal->fecha_nacimiento;?>" placeholder="Fecha de Nacimiento">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Lugar de Nacimiento</p>
                		<textarea class="form-control" rows="3" name="personal[lugar_nacimiento]" id="lugar_nacimiento" value="<?php echo $personal->lugar_nacimiento;?>" placeholder="Lugar de Nacimiento"><?php echo $personal->lugar_nacimiento;?></textarea>              
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Estado Civil</p>              		
                		<select name="personal[edo_civil]" id="edo_civil" class="form-control">
                			<option value="">Seleccione</option>
                			<option value="Soltero" <?php if($personal->edo_civil == "Soltero"){ echo "selected";} ?>>Soltero</option>
                			<option value="Casado" <?php if($personal->edo_civil == "Casado"){ echo "selected";} ?>>Casado</option>
                			<option value="Divorciado" <?php if($personal->edo_civil == "Divorciado"){ echo "selected";} ?>>Divorciado</option>
                			<option value="Viudo" <?php if($personal->edo_civil == "Viudo"){ echo "selected";} ?>>Viudo</option>
                		</select>
                		
            		</div>
            	
			</div>
        </div><br>

        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">e-mail</p>
            			<input type="email" class="form-control" name="personal[email]" id="email" value="<?php echo $personal->email;?>" placeholder="ejemplo@ejemplo.com">
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Teléfono</p>
                		<input type="text" class="form-control" name="personal[telefono_fijo]" id="telefono_fijo" value="<?php echo $personal->telefono_fijo;?>" placeholder="(XXXX) XXX-XXXX" maxlength="12">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Móvil</p>
                		<input type="text" class="form-control" name="personal[telefono_movil]" id="telefono_movil" value="<?php echo $personal->telefono_movil;?>" placeholder="(XXXX) XXX-XXXX" maxlength="12">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Fecha de Ingreso</p>              		
                		<input type="date" class="form-control" name="personal[fecha_ingreso]" id="fecha_ingreso" placeholder="Fecha de Ingreso" value="<?php echo $personal->fecha_ingreso;?>">
                		
            		</div>
            	
			</div>
        </div><br>

        <div class="form-group">
        	<div class="row">
            	
            		<div class="col col-md-3">
            			<p class="help-block">Móvil Asignado</p>
            			<input type="text" class="form-control" name="personal[movil_asignado]" id="movil_asignado" value="<?php echo $personal->movil_asignado;?>" placeholder="(XXXX) XXX-XXXX" maxlength="12">
            		</div>
            		<div class="col col-md-3">
            			<p class="help-block">Numero Seguro Social</p>
                		<input type="text" class="form-control" name="personal[num_seg_social]" id="num_seg_social" value="<?php echo $personal->num_seg_social;?>" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16">
            		</div>
            		<div class="col col-md-3">
						<p class="help-block">Grado de Estudio</p>
						<select name="personal[grade_estudio]" id="grade_estudio" class="form-control">
                			<option value="" >Seleccione</option>
                			<option value="Secundaria"  <?php if($personal->grade_estudio == "Secundaria"){ echo "selected";} ?>>Secundaria</option>
                			<option value="Educación Media Superior" <?php if($personal->grade_estudio == "Educación Media Superior"){ echo "selected";} ?>>Educación Media Superior</option>
                			<option value="Educación Superior" <?php if($personal->grade_estudio == "Educación Superior"){ echo "selected";} ?>>Educación Superior</option>                		
                		</select>                		
            		</div> 
                    <input type="hidden" name="personal[id]" value="<?php echo $personal->id;?>">       	
			</div>
        </div><br>

    </fieldset>