<br>

<form action="<?php  echo base_url();?>users/change_password" id="form_change_password" class="commentForm" method="post" accept-charset="utf-8">
	<div class="form-group">
		<p class="help-block">Password Actual:</p>
	    <input type="password" name="password_actual" id="password_actual"  class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Nuevo Password:</p>
	    <input type="password" name="password1" id="password1" placeholder="Password" class="form-control">	    
	</div>
	<div class="form-group">
		<p class="help-block">Repetir Nuevo Password:</p>
	    <input type="password" name="confirm_password" id="confirm_password" placeholder="Repetir Password" class="form-control">	    
	</div>
	<div class="action">
	<input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>">
        <input type="submit"  class="btn btn-primary" id="registrar" value="Registrar" >
        <a href="<?php  echo base_url();?>users/perfil" class="btn btn-default" >Cancelar</a>                  
    </div> 
</form>