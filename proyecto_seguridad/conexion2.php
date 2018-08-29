<?PHP
$link;
            $servidor="localhost";
            $usuario="ver";
            $clave="javis940818";
            $conexion = mysqli_connect($servidor, $usuario, $clave);
            if(!$conexion)
            {
                echo "error";
                exit; 
            }
            if (!mysqli_select_db($conexion,"cifrado"))
            {
                echo "error al seleccionar la Base de Datos";
                exit;
            }
            ?>