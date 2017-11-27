<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- cambiar titulo -->
	<title>PLANTILLA FORMULARIO	</title>
</head>
<body>
	<!-- cambiar titulo -->
	<h1>TITULO DEL FORMULARIO</h1>
	<form action="	#" method="POST"></form>
	<!-- introducir los campos del formulario -->
	<!-- importante en cada campo dever ir la etiqueta "name" que será el nombre que PHP necesita para obtener los datos  -->
<!-- 	Ejemplos:
	texto:<input type="text name="nombre">-->
	<!-- Botón de enviar -->
	<input type="submit">
	</form>
	<?php
			// Aqui entra el procesamiento
			// Lo primero es comprobar si la petición es GET o POST
			// Lo normal es sólo hacer cosas cuando sea POST
			// Con la variable array asociativo "$_SERVER"
			// podemos ver que tipo de solicitud es
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		// Aqui viene el código a ejecutar cuando la
		// solicitud es un POST, es decir, el usuario
		// ha pulsado sobre el botón "Enviar" y llegan
		// los datos al servidor

		// Los datos se encuentran dentro de la variable predefinida
		// "$_POST" (que es otro array asosiativo)
		// Para acceder a los campos del formulario, hay que indicar el nombre del campo
		// Si por ejemplo el formulario incluye un campo de texto
		// con "edad" (<input type="number" name="edad">), se accederá
		// $_POST ["edad"]

		// Lo primero es comprobar si el dato no es vacio
		// Lo haremos usando la función "empty"
		// CAMBIAR nombre_campo por el nombre del campo que sea
		if (!empty($_POST["nombre_campo"])) {
		// Procesar los datos
		// Para sacar código HTML, usamos "echo"
		// En el caso de abajo, mostramos el campo tal cual nos llega
		echo $_POST["nombre_campo"];
		} else {
		// Podemos mostrar mensaje al usuario
		// advirtiendo que está vacio
		echo "El campo está vacio";
			}
		}
	?>
		}
	}
</body>
</html>