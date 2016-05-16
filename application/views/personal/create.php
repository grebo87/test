<div class="row">
    <div class="col-md-12">
        <a href="<?php  echo base_url();?>personal" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Regresar</a>
    </div>
</div>
<br>



    <div class="inner-spacer">
    <h3>Registro de Personal</h3><br>
    	<form action="<?php  echo base_url();?>personal/store" id="form-personal-create"  method="post" accept-charset="utf-8">
    		<?php include('shared/form-fields-create.php'); ?>
    	<div class="action">
	        <input type="submit"  class="btn btn-primary" id="registrar" value="Registrar" >
	        <a href="<?php  echo base_url();?>personal" class="btn btn-default" >Cancelar</a>                  
    	</div> 
    	</form>
    </div>
