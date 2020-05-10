<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>

	<?php

	if(isset($_POST['enviar'])){ //Sólo ejecuto cuando clicke el botón enviar
		$idioma=$_POST['idioma']; //Cojo los valores enviados por POST
		$perfil=$_POST['perfil'];
		$zona_horaria=$_POST['zona_horaria']; 

		session_start(); //Inicio sesión

		$_SESSION = [ //Guardo toda la información de las variables en un array asociativo
			"idioma"=>$idioma,
			"perfil"=>$perfil,
			"zona_horaria"=>$zona_horaria 
		];

		echo "La información de la sesión ha sido seteada"; //Informo sobre que he seteado los valores





	}




?>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" data-ajax="false" enctype="multipart/form-data">
        
			<fieldset>
				<legend>Preferencias</legend>

				<p>Idioma:</p>
				<select name="idioma">
					<option value="español">español</option>
					<option value="inglés">inglés</option>
				</select>

				<p>Perfil público:</p>
				<select name="perfil">
					<option value="si">si</option>
					<option value="no">no</option>
				</select>

				<p>Zona horaria:</p>
				<select name="zona_horaria">
					<option value="GMT-2">GMT-2</option>
					<option value="GMT-1">GMT-1</option>
					<option value="GMT">GMT</option>
					<option value="GMT+1">GMT+1</option>
					<option value="GMT+2">GMT+2</option>
				</select>

				<input type="submit" name="enviar" value="Establecer preferencias">
				<br/>
				<a href="mostrar.php">Mostrar preferencias</a>

			</fieldset>

		</form>
	</body>
</html>