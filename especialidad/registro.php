 <!DOCTYPE html>
    <!-- pagina realizada por: Francisco Javier Mendoza Rodriguez -->
<html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title> Almacenar en la base de datos</title>
            </head>
    <body>
    <h1>Almacenar en la base de datos</h1>
        <?PHP session_start(); ?>
        <?PHP include_once $_SERVER['DOCUMENT_ROOT'] .'/especialidad/securimage/securimage.php';
        $securimage =new Securimage();
        if ($securimage->check($_POST['captcha_code']) == false) {
            echo "<br /> El codigo es incorrecto !!! <br /> <br />";
            echo "hacer click <a href=javascript:history.go(-1)>Aqui </a> para reintentar.";
                exit;
        }
        echo "<br /><br /> EL CODIGO ES CORRECTO !!!";
        ?>
       <?PHP
			$servidor="localhost";
			$usuario="root";
			$clave="";
			$conexion = mysqli_connect($servidor, $usuario, $clave);
			if (!$conexion)
				{ echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }
			if (!mysqli_select_db($conexion,"registro"))
				{ echo "<h2>Error al seleccionar la base de datos!!!"; exit; }
			extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_REFS,'frm');
		$sql = "INSERT INTO usuario (nombre,paterno,materno,correo,RFC,login,clave,direccion) values(AES_ENCRYPT('$frm_nombre','nombre'),AES_ENCRYPT('$frm_paterno','paterno'),AES_ENCRYPT('$frm_materno','materno'),AES_ENCRYPT('$frm_correo','correo'),AES_ENCRYPT('$frm_RFC','RFC'),AES_ENCRYPT('$frm_login','login'),AES_ENCRYPT('$frm_clave','clave'),AES_ENCRYPT('$frm_direccion','direccion'))";
        require 'login.html';

    mysqli_query ($conexion,$sql); 
		?>
        
        <br />
    </body>
</html>