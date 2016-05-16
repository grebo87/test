<h3>Editar Registro de Usuario</h3><br>
<form action="<?php  echo base_url();?>users/update" id="form_user_create" class="commentForm" method="post" accept-charset="utf-8">
	<div class="form-group">
		<p class="help-block">Nombre:</p>
	    <input type="text" name="nombre" id="nombre" value="<?php  echo $user->nombre;?>" placeholder="Nombre" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Apellido:</p>
	    <input type="text" name="apellido" id="apellido" value="<?php  echo $user->apellido;?>" placeholder="Apellido" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Cedula:</p>
	    <input type="text" name="cedula" id="cedula" value="<?php  echo $user->cedula;?>" placeholder="Cedula" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">E-Mail:</p>
	    <input type="email" name="email" id="email" value="<?php  echo $user->email;?>" placeholder="E-Mail:" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Tipo:</p>
	    <select name="tipo" class="form-control" id="tipo">
	    	<option value="">Seleccione</option>
	    	<option value="1" <?php if ($user->tipo == 1 ){ echo "selected";}  ?> >Administrador</option>
	    	<option value="2" <?php if ($user->tipo == 2 ){ echo "selected";}  ?>>Usuario</option>	    	
	    </select>	    
	</div>
	<div class="form-group">
		<p class="help-block">Status:</p>
	    <select name="status" class="form-control" id="status">
	    	<option value="">Seleccione</option>
	    	<option value="1" <?php if ($user->status == 1 ){ echo "selected";}  ?> >Activo</option>
	    	<option value="0" <?php if ($user->status == 0 ){ echo "selected";}  ?>>Inactivo</option>	    	
	    </select>	    
	</div>
	<div class="action">
		<input type="hidden" name="id" value="<?php  echo $user->id;?>">
        <input type="submit"  class="btn btn-primary" id="registrar" value="Editar" >
        <a href="<?php  echo base_url();?>users" class="btn btn-default" >Cancelar</a>                  
    </div> 
</form>