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
					}
		});
});