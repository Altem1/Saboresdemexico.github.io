function validarform5(){

	var todo_correcto=true;

	if (document.getElementById('nombre').value.length < 2) {
		
		alert("Escribe un nombre correcto de al menos 3 letras");

		document.getElementById('nombre').focus();

		todo_correcto=false;
	}

	if (document.getElementById('direccion').value.length < 10) {
		
		alert("Escribe una direccion valida de al menos 10 letras");

		document.getElementById('direccion').focus();

		todo_correcto=false;
	}

	var expresion= /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[_a-z0-9-]+(.[_a-z0-9-]+)*(.[a-z]{2,3})$/;
	var email = document.form1.email.value;
	if (!expresion.test(email)) {

		alert("Escribe un e-mail valido");

		document.getElementById('email').focus();

		todo_correcto=false;
	} 

	var telefono = document.getElementById('telefono').value;

	if (isNaN(telefono) || telefono.length != 10) {

		alert("Numero invalido, debe tener 10 digitos.");

		document.getElementById('telefono').focus();

		todo_correcto=false;
	}

	if (!document.getElementById('acepto').checked) {
		
		alert("Acepta los terminos y condiciones para poder registrate");

		document.getElementById('acepto').focus();

		todo_correcto=false;
	}

	return todo_correcto;
}
