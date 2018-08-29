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
    <link rel="icon" type="image/png" href="/especialidad/imagenes/logojavier2.png" />
    <link rel="stylesheet" type="text/css" href="/especialidad/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/especialidad/css/dise.css" />
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/especialidad/css/dise.css" />
    <script type="text/javascript" src="libs/ajax.js"></script>
     <!-- Alertity -->
    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs/js/alertify/lib/alertify.min.js"></script>

        </head>
        <body>
        <div class="logo">
        <img src="/especialidad/imagenes/logojavier2.png" alt="logo de la pagina" />
        </div>
         <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="inicio.html">Inicio</a>
      <a class="navbar-brand" href="catalogo.php">Catalogo</a>
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
                echo "<div class='catalogo'>";
                echo "</br>Articulo :  </br>" .$renglon['articulo'];
                echo "</br>";
                echo "</br>precio :  </br>" .$renglon['precio'];
                echo " </br> cantidad:</br>" .$renglon['cantidad'];
                echo " </br>";
                echo "<td><img src='/especialidad/imagenes/catalogo/".$renglon['imagen'] . "'</td>";
                echo "<br>";
                echo "<div class='col-md-10'>";
                echo"<div>Cantidad:";
                  echo"<input id='txt_cantidad' name='txt_cantidad' type='text' class='col-md-2 form-control' placeholder='Ingrese cantidad' autocomplete='off' />";
                echo"</div>";
                echo"</div>";
                echo "<br>";
                echo "<br>";
                echo "<div class='col-md-5'>";
                echo "<div style='margin-top: 25px;''>";
                echo "<button type='button' class='btn btn-success btn-agregar-producto'>Agregar</button>";
                echo "</div>";
            echo"</div>";
                
                echo "</div>";


                }
                mysqli_close($conexion);
            ?>      
    </body>
</html>