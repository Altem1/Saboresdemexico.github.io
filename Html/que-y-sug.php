<?php
    $conexion=mysqli_connect('localhost', 'id19067445_altem', 'L4X&&b0h}r=>%4E]', 'id19067445_quejas');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quejas y sugerencias</title>
	<link rel="stylesheet" type="text/css" href="../Css/que-y-sug.css">
	<script type="text/javascript" src="../Js/que-y-sug.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<link rel="icon" href="../Imagenes/icon.png">
</head>
<body>

	<header>
		<div class="arriba">
			<img class="logo" src="../Imagenes/Logo.png">
			<h2 class="titulo"> Sabores de Mexico </h2>
			<a href="../Html/Index.html">Pagina Principal</a>
		</div>
	</header>

	<h1>Quejas y sugerencias</h1>
	<form name="Form" method="post" onsubmit="return validarform5();">

		<p>Por favor ingrese la información solicitada en el formulario</p>

		<ul>

			<li>
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre">
			</li>

			<li>
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email">
			</li>

			<li>
				<label for="telefono">Teléfono </label>
				<input type="tel" name="telefono" id="telefono">
			</li>

			<li>
				<label>Descripción de lo acontecido</label>
				<textarea id="motivo" maxlength="1500" name="descripcion"></textarea>
			</li>

			<li class="condicion">
				<label class="dife">
					<input type="checkbox" value="SI" id="acepto"> 
					He leido y acepto las condiciones
				</label>
			</li>

		</ul>

		<button name="Enviar">Enviar</button>
		
	</form>

	<footer>

		<div class="abcont">

			<ul>
				<a id="colblanc" href="./Acerca de.html">Acerca de...</a>
			</ul>

			<ul>
				Nuestras Redes
				<li><a id="colblanc" href="https://www.facebook.com/Sabores-de-México-110563195003527">Facebook</a></li>
				<li><a id="colblanc" href="https://www.instagram.com/sabores.de.mexico.04/">Instagram</a></li>
			</ul>

			<ul>
				<a id="colblanc" href="../Html/que-y-sug.php">Contactanos</a>
			</ul>

		</div>
	</footer>

</body>
</html>

<?php
    if(isset($_POST["Enviar"])){
        $result=mysqli_query($conexion, "INSERT INTO formulario (NOMBRE,MAIL,TELEFONO,DESCRIPCION)
        VALUES('{$_POST['nombre']}','{$_POST['email']}','{$_POST['telefono']}','{$_POST['descripcion']}')");
?>

<html>
    <head>
        <meta http-equiv="refresh" content="0;url='redireccion.html'">
	</head>
    <body>
    </body>
</html>

<?php
    }
    include "cerrar_conexion.php";
?>

<?php

include("enviacorreo.php")

?>