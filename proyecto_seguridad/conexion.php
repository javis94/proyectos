<?PHP
$link;
			$servidor="localhost";
			$usuario="insertar";
			$clave="javis940818";
			$conexion = mysqli_connect($servidor, $usuario, $clave);
			if (!$conexion)
				{ 
					echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; 
				}
			if (!mysqli_select_db($conexion,"cifrado"))
				{ 
					echo "<h2>Error al seleccionar la base de datos!!!"; exit; 
		}
