<?php
session_start();
?>
<!DOCTYPE html>
    <!-- pagina realizada por: Francisco Javier Mendoza Rodriguez -->
<html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title> Cátalogo</title>
            <meta name ="keywords" content="Fracisco Javier Mendoza Rodriguez, Pagina de catalogo "/>
    <meta name="author" content="Francisco Javier Mendoza Rodriguez"/>
    <meta name="description" content="poketienda y accesorios " />
    <link rel="stylesheet" type="text/css" href="/especialidad/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/especialidad/css/dise.css" />
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/especialidad/css/dise.css" />
    <link rel="icon" type="image/png" href="/especialidad/imagenes/logojavier2.png" />
        </head>
        <body>
        <div class="logo">
        <img src="/especialidad/imagenes/logojavier2.png" alt="logo de la pagina" />
        </div>
         <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="inicio.html">Inicio</a>
      <a class="navbar-brand" href="carrito.php">Carrito</a>
      <a class="navbar-brand" href="login.html">Login</a>
      <a class="navbar-brand" href="acercade.html">Acerca De</a>
      <a class="navbar-brand" href="registro.html">Registro</a>
    </div>
    </div>
    </nav>
    <br>
        <div class="cat">
            Catálogo
            <img src="/especialidad/imagenes/pichu.png">          
        </div>
        <div class="chica">
            <img src="/especialidad/imagenes/chica_pokemon.png" width="500">
            <p>  TU primera compra es GRATIS !!!! </p> 
        </div>

            <?PHP
                $servidor="localhost";
            $usuario="root";
            $clave="";
            $conexion = mysqli_connect($servidor, $usuario, $clave);
            if(!$conexion)
            {
                echo "error";
                exit; 
            }
            if (!mysqli_select_db($conexion,"catalogo"))
            {
                echo "error al seleccionar";
                exit;
            }
            $sql = "select * from cat where cantidad > 0";
            $resultado=mysqli_query ($conexion,$sql);
                while($renglon=mysqli_fetch_assoc($resultado))
                {
                echo "</br>Articulo :  </br>" .$renglon['articulo'];
                echo "</br>";
                echo "</br>precio :  </br>" .$renglon['precio'];
                echo " </br> cantidad:</br>" .$renglon['cantidad'];
                echo " </br>";
                echo "<td><img src='/especialidad/imagenes/catalogo/".$renglon['imagen'] . "'</td>";
                echo"<div class='cond'>";
                if ($renglon['cantidad'] ==1)
                {
                echo "Ultimo articulo";
                }
                echo"</div>";
                 echo"<div class='cinco'>";
                 if ($renglon['cantidad'] ==5)
                {
                echo "Ultimos 5";
                }
                 echo "</div>";
                echo "</div>";
                }
                mysqli_close($conexion);
            ?>      
    </body>
</html>