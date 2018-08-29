
<?php
include "conexion.php";
$date = date("d-m-Y");
$sql3 ="SELECT * FROM vacante";
        		$resultado=mysqli_query($conexion,$sql3);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        			echo "</br>vacante :  </br>" .$renglon['vacante'];
                echo "</br>";
                echo "</br>tiempo :  </br>" .$renglon['tiempo'];
                echo "<br>";
$mod_date = strtotime($date."+".$renglon['tiempo']."days");
echo date("d-m-Y",$mod_date) . "\n";
}

?>