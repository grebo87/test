// ========================================================================
//  Eventos Usuarios
// ========================================================================
$(function() {

		$("#form_user_create").validate({
					rules: {
						nombre: "required",
						apellido: "required",
						login: {
							required: true,
							minlength: 2
						},
						password: {
							required: true,
							minlength: 5
						},
						confirm_password: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						email: {
							required: true,
							email: true
						},
						cedula: {
							required: true,
							minlength: 5,
							maxlength:8,
						},
						tipo: "required",
						status: "required",
						password_actual: "required",
					},
					messages: {
						nombre: "El campo es Requerido",
						apellido: "El campo es Requerido",
						login: {
							required: "El campo es Requerido",
							minlength: "Minimo 2 caracteres"
						},
						password: {
							required: "El campo es Requerido",
							minlength: "Minimo 5 caracteres"
						},
						confirm_password: {
							required: "El campo es Requerido",
							minlength: "Minimo 5 caracteres",
							equalTo: "Las contaseña no son iguales"
						},
						email: "Ingrese un email valido",
						cedula: "El campo es Requerido",
						tipo: "El campo es Requerido",
						status: "El campo es Requerido",
						password_actual: "El campo es Requerido",
					}
		});
});


// ========================================================================
//  Eventos Personal
// ========================================================================
$(function() {

		$("#form-personal-create").validate({
					rules: {
						
						'personal[cedula]': {
							required: true,
							minlength: 5,
							maxlength:8,
						},
						'personal[nombre]':{
							required: true,
						},
						'personal[apellido_paterno]':{
							required: true,
						},
						'personal[apellido_materno]':{
							required: true,
						},
						'personal[sexo]':{
							required: true,
						},
						'personal[fecha_nacimiento]':{
							required: true,
							date:true,
						},
						'personal[lugar_nacimiento]':{
							required: true,
						},
						'personal[edo_civil]':{
							required: true,
						},
						'personal[email]':{
							required: true,
							email:true,
						},
						'personal[telefono_fijo]':{
							required: true,
							number:true,
						},
						'personal[telefono_movil]':{
							required: true,
							number:true,
						},
						'personal[fecha_ingreso]':{
							required: true,
							date:true,
						},
						'personal[movil_asignado]':{
							required: true,
							number:true,
						},
						'personal[num_seg_social]':{
							required: true,
						},
						'personal[grade_estudio]':{
							required: true,
						},
						'domicilio[estado]':{
							required: true,
						},
						'domicilio[municipio]':{
							required: true,
						},
						'domicilio[ciudad]':{
							required: true,
						},
						'domicilio[calle]':{
							required: true,
						},
						'personal[puesto_id]':{
							required: true,
						},
						

					},
					messages: {
						
						'personal[cedula]':  {
							required: "El campo es Requerido",
							minlength: "Minimo 5 caracteres",
							maxlength:"Maximo 8 caracteres",
						},
						'personal[nombre]':{
							required: "El campo es Requerido",
						},
						'personal[apellido_paterno]':{
							required: "El campo es Requerido",
						},
						'personal[apellido_materno]':{
							required: "El campo es Requerido",
						},
						'personal[sexo]':{
							required: "El campo es Requerido",
						},
						'personal[fecha_nacimiento]':{
							required: "El campo es Requerido",
							date:"Debe ser una fecha",
						},
						'personal[lugar_nacimiento]':{
							required: "El campo es Requerido",			
						},
						'personal[edo_civil]':{
							required: "El campo es Requerido",			
						},
						'personal[email]':{
							required: "El campo es Requerido",
							email:"Debe ser un Correo",			
						},
						'personal[telefono_fijo]':{
							required: "El campo es Requerido",
							number:"Solo numeros",			
						},
						'personal[telefono_movil]':{
							required: "El campo es Requerido",
							number:"Solo numeros",			
						},
						'personal[fecha_ingreso]':{
							required: "El campo es Requerido",
							date:"Debe ser una fecha",			
						},
						'personal[movil_asignado]':{
							required: "El campo es Requerido",
							number:"Solo numeros",			
						},
						'personal[num_seg_social]':{
							required: "El campo es Requerido",	
						},
						'personal[grade_estudio]':{
							required: "El campo es Requerido",	
						},
						'domicilio[estado]':{
							required: "El campo es Requerido",	
						},
						'domicilio[municipio]':{
							required: "El campo es Requerido",	
						},
						'domicilio[ciudad]':{
							required: "El campo es Requerido",	
						},
						'domicilio[calle]':{
							required: "El campo es Requerido",	
						},
						'personal[puesto_id]':{
							required: "El campo es Requerido",	
						},


					},
					
		});


});



// ========================================================================
//  Eventos Usuarios Perfil
// ========================================================================
$(function() {

		$("#form_change_password").validate({
					rules: {
						
						password: {
							required: true,
							minlength: 5
						},
						confirm_password: {
							required: true,
							minlength: 5,
							equalTo: "#password1"
						},
						password_actual: "required",
					},
					messages: {
						
						password: {
							required: "El campo es Requerido",
							minlength: "Minimo 5 caracteres"
						},
						confirm_password: {
							required: "El campo es Requerido",
							minlength: "Minimo 5 caracteres",
							equalTo: "Las contaseña no son iguales"
						},
						password_actual: "El campo es Requerido",
					}
		});
});