<div class="row">
    <div class="col-md-12">
        <a href="<?php  echo base_url();?>users" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Regresar</a>
    </div>
</div>

    <br>
<h2>Información del Usuario <?php echo $user->login;?></h2>

<div class="invoice-block">
    <div class="row">
       
        <div class="col-md-10">
            <table class="table table-striped" id="datos-generales">
			    <tbody>
			        <tr>
			            <td><strong>Nombre:</strong></td>
			            <td><?php echo $user->nombre;?> <?php echo $user->apellido;?></td>
			        </tr>
			        <tr>
			            <td><strong>Cedula:</strong></td>
			            <td colspan="3"><?php echo $user->cedula;?></td>
			        </tr>
			        <tr>
			            <td><strong>E-Mail:</strong></td>
			            <td colspan="3"><?php echo $user->email;?></td>
			        </tr>
			        <tr>
			            <td><strong>Login:</strong></td>
			            <td><?php echo $user->login;?></td>
			        </tr>
			        <tr>
			            <td><strong>Tipo:</strong></td>
			            <td><?php
								if ($user->tipo == 1) {
								 	echo "Administrador" ;
								 } else {
								 	echo "Ususario" ;
								 }
							?>
						</td>
			        </tr>
			        <tr>
			            <td><strong>Status:</strong></td>
			            <td>
							<?php 
									if ($user->status == 1) {
									 	echo '<label class="label label-success"> Activo </label>' ;
									 } else {
									 	echo '<label class="label label-danger"> Inactivo </label>' ;
									 }
							?>
			            </td>
			        </tr>
			    </tbody>
			</table>

        </div>
    </div>
</div>