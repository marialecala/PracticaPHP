<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 1</title>
	</head>
	<body>
		<h1>Ejercicio 1: Nombre compuesto</h1>
		
		<form action="#" method="POST">
			<input type="text" name="nombre">
			<input type="text" name="primerapellido">
			<input type="text" name="segundoapellido">
			<input type="submit">
		</form>

		<?php

		// Para definir si es post o get 

			// if (isset($_POST ["nombre"])){

			// 	echo "POST";

			// } else {

			// 	echo "GET";
			// }

		// Para comprobar si los espacios del formulario están vacíos. Ejercicio1

			if(isset($_POST["nombre"])){
				if(empty($_POST["nombre"])){
					echo "<p>Oye! Está vacío el nombre</p>";
				}
				if(empty($_POST["primerapellido"])){
					echo "<p>Oye! Está vacío el primer apellido</p>";
				}
				if(empty($_POST["segundoapellido"])){
					echo "<p>Oye! Está vacío el segundo apellido</p>";
				}

				if(!empty($_POST["nombre"])&& !empty($_POST["primerapellido"])&&!empty($_POST["segundoapellido"])){
					echo "<p>".$_POST["nombre"]." ".$_POST["primerapellido"]." ".$_POST["segundoapellido"]."</p>";

				}
			}

		// Ejercicio2

			if(isset($_POST["nombre"])){
				if(empty($_POST["nombre"])){
					echo "<p>Oye! Está vacío el nombre</p>";
				}
				else if(is_numeric($_POST["nombre"])){
				echo "No es un numero";
				}
				if(empty($_POST["primerapellido"])){
					echo "<p>Oye! Está vacío el primer apellido</p>";
				}
				if(empty($_POST["segundoapellido"])){
					echo "<p>Oye! Está vacío el segundo apellido</p>";
				}

				if(!empty($_POST["nombre"])&& !empty($_POST["primerapellido"])&&!empty($_POST["segundoapellido"])){
					echo "<p>".ucfirst($_POST["nombre"])." ".ucfirst($_POST["primerapellido"])." ".ucfirst($_POST["segundoapellido"])."</p>";
				}	
			}		
		?>
	</body>
</html>