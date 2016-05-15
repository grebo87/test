<table class="table table-striped" id="datos-generales">
	<tbody>
		<tr>
			<td><strong>Nombre:</strong></td>
			<td><?php echo $personal->nombre; ?> <?php echo $personal->apellido_paterno; ?> <?php echo $personal->apellido_materno; ?></td>
			<td><strong>Sexo:</strong></td>
			<td><?php echo $personal->sexo; ?></td>
		</tr>

		<tr>
			<td><strong>Edad:</strong></td>
			<td colspan="3"><?php //echo $personal->present()->edad; ?></td>
		</tr>

		<tr>
			<td><strong>Fecha de Nacimiento:</strong></td>
			<td><?php echo $personal->fecha_nacimiento; ?></td>
			<td><strong>Lugar de Nacimiento:</strong></td>
			<td><?php echo $personal->lugar_nacimiento; ?></td>
		</tr>

		<tr>
			<td><strong>Nombre del Padre:</strong></td>
			<td><?php echo $personal->nombre_padre; ?></td>
			<td><strong>Nombre de la Madre:</strong></td>
			<td><?php echo $personal->nombre_madre; ?></td>
		</tr>

		<tr>
			<td><strong>Estado Civil:</strong></td>
			<td><?php echo $personal->edo_civil; ?></td>
			<td><strong>Hijos:</strong></td>
			<td><?php echo $personal->hijos; ?></td>
		</tr>

		<tr>
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
			<td><strong>Tipo de Sangre:</strong></td>
			<td><?php echo $personal->tipo_sangre; ?></td>
			<td><strong>Alergias:</strong></td>
			<td><?php echo $personal->alergias; ?></td>
		</tr>
	</tbody>
</table>