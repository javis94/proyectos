<?php

try{
    
session_start();
$SESSION['usu']=$_POST['usuario'];
$SESSION['co']=$_POST['contra'];

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
    if (!mysqli_select_db($conexion,"practica1"));
    $sql = "select * from practica where usuario ='" . $_POST['usuario'] . "' AND contra = '".$_POST['contra']."'";
        
//$query = "SELECT * FROM practica WHERE usuario ='" . $_POST['usuario'] . "' AND contra = '".$_POST['contra']."'";
    echo "Sent: ". $sql;
 //$sentencia= $conexion->prepare($sql);
 //$consulta=$sentencia->fetch(); 
      $conta=0;
    $resultado=mysqli_query ($conexion,$sql);
                echo "<table border='1'>";
                while($renglon=mysqli_fetch_assoc($resultado))
                {
                    print_r($renglon);
                    $contador=$conta+1;
                }
    
print_r($sql);
 if($contador ==1 ){
    echo '<h2>Datos correctos</h2>';
    require 'comentarios.php';
 
 }else{
      echo '<h2>Datos incorrectos</h2>';
 }
    
} catch(PDO_Exception $e){
    echo "Error: " .$e->getMessage();
}
//     echo "<br>$sentencia </br> !!!";


?>