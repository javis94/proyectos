		<DOCTYPE html>
	<html  lang="es">
	<head>
		<meta charset="utf-8">
		<title>Requisicion de personal</title>
		<link rel="stylesheet" type="text/css" href="requisicion.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>


<?PHP
			$servidor="localhost";
			$usuario="root";
			$clave="";
			$conexion = mysqli_connect($servidor, $usuario, $clave);
			if (!$conexion)
				{ 
					echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; 
				}
			if (!mysqli_select_db($conexion,"requisicion"))
				{ 
					echo "<h2>Error al seleccionar la base de datos!!!"; exit; 
		}

		$Nombre = $_POST["Nombre"];
		$tipo_solicitud =$_POST["tipo_solicitud"];
		$fecha_solicitud= $_POST["fecha_solicitud"];
		$departamento = $_POST["departamento"];
		$fecha_maxima_cubrimiento = $_POST["fecha_maxima_cubrimiento"];
		$vacante =$_POST["vacante"];
		$remplazo =  $_POST["remplazo"];
		$tipo_vacante =  $_POST["tipo_vacante"];
		$autorizacion =  $_POST["autorizacion"];
		$ubicacion =  $_POST["ubicacion"];
		$aprobacion =  $_POST["aprobacion"];
		$estudios =  $_POST["estudios"];
		$edad =  $_POST["edad"];
		$edad2= $_POST["edad2"];
		$sexo = $_POST["sexo"];
		$civil = $_POST["civil"];
		$experiencia = $_POST["experiencia"];
		$conocimientos = $_POST["conocimientos"];
		$habilidades = $_POST["habilidades"];
		$competencias = $_POST["competencias"];
		$adicionales = $_POST["adicionales"];

		$experiencia = utf8_decode($experiencia);
		$conocimientos = utf8_decode($conocimientos);
		$habilidades = utf8_decode($habilidades);
		$competencias = utf8_decode($competencias);
		$adicionales = utf8_decode($adicionales);
		$remplazo = utf8_decode($remplazo);

		$experiencia = strtoupper($experiencia);
		$conocimientos = strtoupper($conocimientos);
		$habilidades = strtoupper($habilidades);
		$competencias = strtoupper($competencias);
		$adicionales = strtoupper($adicionales);
		$remplazo = strtoupper($remplazo);

		$date = date("d-m-Y");
		$mod_date = strtotime($date."+ 15days");
		echo date("d-m-Y",$mod_date) . "\n";

		$fecha_hora_actual = date('Y-m-d H:i:s');

		$sql20 = "INSERT INTO requisicion(Nombre,tipo_solicitud,fecha_solicitud,departamento,fecha_maxima_cubrimiento,vacante,remplazo,tipo_vacante,autorizacion,ubicacion,aprobacion,estudios,edad,edad2,sexo,civil,experiencia,conocimientos,habilidades,competencias,adicionales,fecha_hora_actual) values('$Nombre','$tipo_solicitud','$fecha_solicitud','$departamento','$fecha_maxima_cubrimiento','$vacante','$remplazo','$tipo_vacante','$autorizacion','$ubicacion','$aprobacion','$estudios','$edad','$edad2','$sexo','$civil','$experiencia','$conocimientos','$habilidades','$competencias','$adicionales','$fecha_hora_actual')";
		 mysqli_query ($conexion,$sql20);
		 echo "<br>";
		?>

	<body>
		<div class="team" style="text-align: center;">
		<img src="images/team.png" alt="logo Team Foods" width="200" height="100">
		<h3>Requisición de Personal</h3>
		<hr>
	</div>
	<div class="pdf" style="text-align: center;">
		<div style="text-align: center;">
			<div class="bott" style="text-align: center;">
		<a href="pdf.php"><button  name="PDF" style="width: 250px" size="100" class="btn btn-outline-success btn-lg"> PDF </button> </a>
		</div>
	</div>
	</body>

</html>

