<table class="table table-striped" id="datos-generales">
	<tbody>
		<tr>
			<th colspan="4" style="text-align:center;" align="">Datos Generales</th>
		</tr>
		<tr>
			<td><strong>Nombre:</strong></td>
			<td><?php echo $personal->nombre; ?> <?php echo $personal->apellido_paterno; ?> <?php echo $personal->apellido_materno; ?></td>
			<td><strong>Cedula:</strong></td>
			<td><?php echo $personal->cedula; ?></td>
		</tr>

		<tr>
			<td><strong>Edad:</strong></td>
			<td><?php echo $edad; ?></td>
			<td><strong>Sexo:</strong></td>
			<td><?php echo $personal->sexo; ?></td>
		</tr>

		<tr>
			<td><strong>Fecha de Nacimiento:</strong></td>
			<td><?php echo strftime("%d-%m-%Y",strtotime($personal->fecha_nacimiento) );?></td>
			<td><strong>Lugar de Nacimiento:</strong></td>
			<td><?php echo $personal->lugar_nacimiento; ?></td>
		</tr>

		<tr>
			<td><strong>Estado Civil:</strong></td>
			<td><?php echo $personal->edo_civil; ?></td>
			<td><strong>E-Mail:</strong></td>
			<td colspan="3"><?php echo $personal->email; ?></td>
		</tr>

		<tr>
			<td><strong>Teléfono:</strong></td>
			<td><?php echo $personal->telefono_fijo; ?></td>
			<td><strong>Móvil:</strong></td>
		    <td><?php echo $personal->telefono_movil; ?></td>
		</tr>

		<tr>
			<td><strong>Fecha de Ingreso:</strong></td>
			<td><?php echo $personal->fecha_ingreso; ?></td>
			<td><strong>Móvil Asignado:</strong></td>
			<td><?php echo $personal->movil_asignado; ?></td>
		</tr>

		<tr>
			<td><strong>Numero Seguro Social:</strong></td>
			<td><?php echo $personal->num_seg_social; ?></td>
			<td><strong>Grado de Estudio:</strong></td>
			<td><?php echo $personal->grade_estudio; ?></td>
		</tr>
		<tr>
			<td><strong>Puesto:</strong></td>
			<td colspan="3"><?php echo $puesto->nombre; ?></td>
			
		</tr>
	</tbody>
</table>