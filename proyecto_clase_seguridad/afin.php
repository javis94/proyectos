<!DOCTYPE html>
    <!-- pagina realizada por: Francisco Javier Mendoza Rodriguez -->
<html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title> Registro</title>
            <link rel="stylesheet" type="text/css" href="dise2.css"/>
            </head>
            <body>
                <div class="enca">
            <h1>Practica Afin</h1>
            <h3>Mendoza Rodriguez Francisco Javier</h3>
        </div>
        <br>
        <hr>
        <div class="caja">
            <form id="formId" name="registro" method="post" action="afin2.php">
            Texto:<input type="text" pattern="[a-zA-Z]*" name="texto" >
            <script type="text/javascript">
            var f1 = new livevalidation('f1'); add(Validate.presence, {failureMessage: "el texto"});
                </script>    
            <br>	
            Valor A:<input type="password" pattern="[0-9]*" name="a">
            <br>
            Valor B:<input type="password" pattern="[0-9]*" name="b">
            <br>
            <input type="submit" name="Enviar">
            <br>
            </form>
            </div>
           <a href="mostrar.php"><button>Mostrar Datos cifrados</button> </a>
        </body>
        </html>