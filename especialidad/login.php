<?php

try{
$SESSION['login']=$_POST['login'];
$SESSION['clave']=$_POST['clave'];
//$SESSION['usurio']='javier';
//$SESSION['contraseña']='javier';
//echo $_POST['usuario'];
//echo $_POST['contra'];
//echo $SESSION['usu'];
//echo $SESSION['co'];
    
    $servidor="localhost";
    $usuario="root";
    $clave="";
 $conexion = mysqli_connect($servidor, $usuario, $clave);
            if (!$conexion)
            { echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }
    if (mysqli_select_db($conexion,"registro"));
    {
    //$sql = "select * from prueba where usuario = '" .$_POST['usuario'] ."'AND contra  = '".$_POST['contra']."'";  
    $sql = "select * from usuario where login = AES_ENCRYPT('".$_POST['login']."', 'login')  AND clave = AES_ENCRYPT('".$_POST['clave']."', 'clave')";
    //echo "Sent: ".$sql;
     //$sentencia= $conexion->prepare($sql);
     //echo "Sent: ".$sentencia;
     $resEmp = mysqli_query($conexion,$sql) ;
     //$totEmp = mysqli_fetch_row($resEmp);
     //$consulta = mysqli_fetch_row($sql);
     //echo "'<p>'Sent: '</p>'". $totEmp; 
     //if($resEmp == true) {
     if ($fila=mysqli_fetch_array($resEmp)) {
                //echo "Login: ".$_POST['login'];
                //echo "<br />clave: ".$_POST['clave'];
                session_start();
                $sesion=session_id();
                $_SESSION['usuario']=$_POST['login'];
                //$_SESSION['clave']=$_POST['clave)'];
                echo "'<p> <h1>Bienvenido: </p>'". $_SESSION['usuario']. "'</h1>'"; 
        require 'carrito.php';
        }
        else {
            echo "<h1>Datos Incorrectos</h1>";
            //$errores .='<li>Datos incorrectos</li>';
            require 'login.html';
    }
}
}
    catch(PDO_Exception $e) {
        echo"error" .$e->getMessage();
    }


	?>

	