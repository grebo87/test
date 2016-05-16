<div class="row">
    <div class="col-md-12">
        <a href="<?php  echo base_url();?>personal" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Regresar</a>
    </div>
</div>
<br>



<div class="inner-spacer">
        <h3>Editar Registro del Personal</h3><br>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#datos_generales" data-toggle="tab">Datos Generales</a></li>
            <li><a href="#domicilio" data-toggle="tab">Domicilio</a></li>
            <li><a href="#puesto" data-toggle="tab">Puesto</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="datos_generales">
                <form action="<?php  echo base_url();?>personal/update_datos_generales" id="form-personal-create"  method="post" accept-charset="utf-8">
                        <?php include('shared/form-fields-edit.php'); ?>
                        <div class="action">
                            <input type="submit"  class="btn btn-primary"  value="Editar" >
                            <a href="<?php  echo base_url();?>personal" class="btn btn-default" >Cancelar</a>                  
                        </div> 
                </form>
            </div>
            <div class="tab-pane" id="domicilio">
                <form action="<?php  echo base_url();?>personal/update_domicilio" id="form-personal-create"  method="post" accept-charset="utf-8">
                        <?php include('shared/form-fields-edit-domicilio.php'); ?>
                        <div class="action">
                            <input type="submit"  class="btn btn-primary"  value="Editar" >
                            <a href="<?php  echo base_url();?>personal" class="btn btn-default" >Cancelar</a>                  
                        </div> 
                </form>
            </div>
            <div class="tab-pane" id="puesto">
                <form action="<?php  echo base_url();?>personal/update_puesto" id="form-personal-create"  method="post" accept-charset="utf-8">
                        <?php include('shared/form-fields-edit-puesto.php'); ?>
                        <div class="action">
                            <input type="submit"  class="btn btn-primary"  value="Editar" >
                            <a href="<?php  echo base_url();?>personal" class="btn btn-default" >Cancelar</a>                  
                        </div> 
                </form>
            </div>
        </div>


    	
</div><br><br>