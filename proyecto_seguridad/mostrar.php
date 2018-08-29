<!DOCTYPE html>
    <!-- pagina realizada por: Francisco Javier Mendoza Rodriguez -->
<html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title> Mostrar Afin</title>
            <link rel="stylesheet" type="text/css" href="dise.css"/>
        </head>
        <body>
          <div class="afi">
        	<h1>Mostrar Datos Afin</h1>
          <h3>Mendoza Rodriguez Francisco Javier</h3>
          <h3>Neri</h3>
          </div>
<?PHP
$mensaje;
include("conexion2.php");
$sql ="SELECT * FROM afin";
$sql ="SELECT (mensaje) as AES_DECRYPT(mensaje) as AES_DECRYPT(vala,'vala') as AES_DECRYPT(valb,'valb'),as AES_DECRYPT(compi,'compi') FROM afin";
            $resultado=mysqli_query($conexion,$sql);
            echo "<br>";
            echo "<br>";
            echo"<hr>";
            echo "<div class='tabla'>";
            echo "<table border='3'>";
            while ($renglon=mysqli_fetch_assoc($resultado)) {
           	echo "<tr>";
           	echo "<td>";
            echo "</td>";
            echo "<td>";
            echo"<br>";
           	echo "Mensaje:  <br>".$renglon['mensaje'];
            echo"<br>";
            echo"<br>";
           	echo "</td>";
            echo "<td>";
            echo "</td>";
           	echo "<td>";
            echo"<br>";
            echo"<br>";
           	echo "valor A: <br> ".$renglon['vala'];
            echo"<br>";
            echo"<br>";
           	echo "</td>";
            echo "<td>";
            echo "</  td>";
           	echo "<td>";
            echo "</td>";
            echo "<td>";
            echo"<br>";
            echo"<br>";
           	echo "valor B: <br>".$renglon['valb'];
            echo"<br>";
            echo"<br>";
           	echo "</td>";
           	echo "<td>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
            echo"<br>";
            echo"<br>";
           	echo "texto cifrado: <br> ".$renglon['compi'];
            echo"<br>";
            echo"<br>";
           	echo "</td>";
           	echo "</tr>";
            echo "</div>";
           }
           $men=$renglon['mensaje'];
           //echo "men".$men;

//$sql2 ="SELECT * FROM afin where mensaje=".$renglon['mensaje','mensaje']"'";
			//$resul=mysqli_query($conexion,$sql2);
			//echo "".$resul;
          // while ($renglon=mysqli_fetch_assoc($resul)) {
           	echo "<tr>";
           	echo "<td>";
           	//echo "Mensaje:  <br>".$renglon['mensaje'];
           //echo "este".AES_DECRYPT($renglon['mensaje']);
           //}
           ?>
           <a href="afin.php"><button>Ir al registro afin</button></a>
        </body>
        </html>