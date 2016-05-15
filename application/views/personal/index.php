<h3>Listado del Personal</h3><br>
<div class="row">
    <div class="col col-md-6">
        <a href="<?php  echo base_url();?>personal/create" class="btn btn-primary">
            <i class="fa fa-plus-square" ></i>  Registrar Personal
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
			<th>telefono fijo</th>
			<th>Fecha de ingreso</th>			
			<th>status</th>
			<th>acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($personal as $persona) { ?>		
			<tr>
				<td><?php echo $persona->id ;?></td>
				<td><?php echo $persona->cedula ;?></td>
				<td><?php echo $persona->nombre ;?></td>
				<td><?php echo $persona->apellido_paterno ;?></td>
				<td><?php echo $persona->telefono_fijo ;?></td>
				
				<td><?php echo strftime("%d-%m-%Y",strtotime($persona->fecha_ingreso));?></td>
				<td>
					<?php 
						if ($persona->status == 1) {
						 	echo '<label class="label label-success"> Activo </label>' ;
						 } else {
						 	echo '<label class="label label-danger"> Inactivo </label>' ;
						 }
					?>
				</td>
				
				<td>
					<div class="btn-group btn-group-sm">
                        <a href="<?php  echo base_url();?>personal/<?php  echo $persona->id;?>" class="btn btn-info" title="Ver"><i class="fa fa-eye"></i></a>
                        <a href="<?php  echo base_url();?>personal/<?php  echo $persona->id;?>/edit" class="btn btn-primary" title="Modificar"><i class="fa fa-pencil"></i></a>
                        <a href="<?php  echo base_url();?>personal/delete/<?php  echo $persona->id;?>" class="btn btn-danger" title="Eliminar" onclick="if(confirm('&iquest;Esta seguro que desea Eliminar al usuario?')) return true;  else return false;"><i class="fa fa-trash"></i></a>
                    </div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>