<h3>Listas de Usuarios</h3><br>
<div class="row">
    <div class="col col-md-6">
        <a href="<?php  echo base_url();?>users/create" class="btn btn-primary">
            <i class="fa fa-plus-square" ></i>  Registrar Usuario
        </a>
                
    </div>                                                    
</div><br><br>
<table class="table table-condensed table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>cedula</th>
			<th>nombre</th>
			<th>apellido</th>
			<th>login</th>
			<th>email</th>			
			<th>status</th>
			<th>tipo</th>
			<th>acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user) { ?>		
			<tr>
				<td><?php echo $user->id ;?></td>
				<td><?php echo $user->cedula ;?></td>
				<td><?php echo $user->nombre ;?></td>
				<td><?php echo $user->apellido ;?></td>
				<td><?php echo $user->login ;?></td>
				<td><?php echo $user->email ;?></td>
				<td>
					<?php 
						if ($user->status == 1) {
						 	echo '<label class="label label-success"> Activo </label>' ;
						 } else {
						 	echo '<label class="label label-danger"> Inactivo </label>' ;
						 }
					?></td>
				<td>
					<?php
						if ($user->tipo == 1) {
						 	echo "Administrador" ;
						 } else {
						 	echo "Ususario" ;
						 }
					?>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
                        <a href="<?php  echo base_url();?>users/show/<?php  echo $user->id;?>" class="btn btn-info" title="Ver"><i class="fa fa-eye"></i></a>
                        <a href="<?php  echo base_url();?>users/edit/<?php  echo $user->id;?>" class="btn btn-primary" title="Modificar"><i class="fa fa-pencil"></i></a>
                        <a href="<?php  echo base_url();?>users/delete/<?php  echo $user->id;?>" class="btn btn-danger" title="Eliminar" onclick="if(confirm('&iquest;Esta seguro que desea Eliminar al usuario?')) return true;  else return false;"><i class="fa fa-trash"></i></a>
                    </div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>