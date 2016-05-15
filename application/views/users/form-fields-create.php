<form action="<?php  echo base_url();?>users/store" id="form_user_create" class="commentForm" method="post" accept-charset="utf-8">
	<div class="form-group">
		<p class="help-block">Nombre:</p>
	    <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Apellido:</p>
	    <input type="text" name="apellido" id="apellido" value="" placeholder="Apellido" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Cedula:</p>
	    <input type="text" name="cedula" id="cedula" value="" placeholder="Cedula" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">E-Mail:</p>
	    <input type="email" name="email" id="email" value="" placeholder="E-Mail:" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Tipo:</p>
	    <select name="tipo" class="form-control" id="tipo">
	    	<option value="">Seleccione</option>
	    	<option value="1">Administrador</option>
	    	<option value="2">Usuario</option>	    	
	    </select>	    
	</div>
	<div class="form-group">
		<p class="help-block">Login:</p>
	    <input type="text" name="login" id="login" value="" placeholder="Login" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Password:</p>
	    <input type="password" name="password" id="password" value="" placeholder="Password" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Repetir Password:</p>
	    <input type="password" name="confirm_password" id="confirm_password" value="" placeholder="Repetir Password" class="form-control">	    
	</div>
	<div class="action">
        <input type="submit"  class="btn btn-primary" id="registrar" value="Registrar" >
        <a href="<?php  echo base_url();?>users" class="btn btn-default" >Cancelar</a>                  
    </div> 
</form>