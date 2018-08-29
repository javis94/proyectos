	<DOCTYPE html>
		<html  lang="es">
		<head>
			<meta charset="utf-8">
			<title>Requisicion de personal</title>
			<link rel="stylesheet" type="text/css" href="requisicion.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		</head>
	<body>
		<div class="team" style="text-align: center;">
			<table border="1" style="text-align: center;" width="1300px">
				<tr>
					<td>
		<img src="images/team.png" alt="logo Team Foods" width="200" height="100">
	</td>
	<td>
		<h3>Requisición de Personal</h3>
	</td>
	<td>
		<p>  <b>MO-REH-FO-004 </b> </p>
		 <b> Versión 2 <b>
</td>
	</tr>
		</table>
		<hr>
	</div>
	<form id="formId" name="requisicion" method="post" action="guardar.php" >
		<h4 style="text-align: center;">Informacion del Cargo </h4>
		<br> <br>
		<div class=" izquierda" style="text-align: center;">
		<div style="text-align: center;">
					<label style="width: 250px;">Solicitante:</label>
					<select style="width: 250px" name="Nombre" required class="color">
						<option value="">Seleccionar</option>
						<?PHP
						include "conexion.php";		
			$sql = "SELECT * FROM solicitantes";
			$resultado=mysqli_query ($conexion,$sql);
          while ($renglon=mysqli_fetch_array($resultado)){
            echo '<option value="'.utf8_decode(($renglon['Nombre'])).'">'.utf8_decode(($renglon['Nombre'])).'</option>';
        }
  
		?>
	</select>
		</div>

		<br> <br>
		<div style="text-align: center;">
		<label style="width: 250px">Tipo de Solicitud:</label>
	<select style="width: 250px" name="tipo_solicitud" required class="color">
		<option value="">Seleccionar</option>
		<?php
        		include "conexion.php";
        		$sql2 ="SELECT * FROM solicitud";
        		$resultado=mysqli_query($conexion,$sql2);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['tipo_solicitud'].'">'.$renglon['tipo_solicitud'].'</option>';        		}
        		?>
	</select>	
		</div>	
		</div>
		<div class="derecha" style="text-align: center;">
	<div class="fecha_solicitud" style="text-align: center;">
<label style="width: 250px">Fecha de Solicitud:</label>
			<input name="fecha_solicitud" type="date" required="" style="width: 250px" class="color">
		</div>
		<br><br>

		<div style="text-align: center;">
			<label style="width: 250px">Departamento:</label>
			<select style="width:250px" name="departamento" required class="color">
				<option value="">Seleccionar</option>
				<?php
				include "conexion.php";
        		$sql3 ="SELECT * FROM departamento";
        		$resultado=mysqli_query($conexion,$sql3);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['departamento'].'">'.$renglon['departamento'].'</option>';        		}
        		?>
			</select>
		</div>
		<br><br>
	</div>

	<div class="fecha_maxima" style="text-align: center;">
		<label style="width: 250px">Fecha Máxima de Cubrimiento:</label>
		<input type="date" name="fecha_maxima_cubrimiento" style="width: 250px" class="color">
		<br>
	</div>
<br><br>

<div class="vacante" style="text-align: center;">
	<div style="text-align: center;">
		<label style="width: 250px"> Nombre de la Vacante:</label>
	<select style="width:500px" name="vacante" required class="color" >
		<option value="">Seleccionar</option>
		<?php
        		include "conexion.php";
        		$sql4 ="SELECT * FROM vacante";
        		$resultado=mysqli_query($conexion,$sql4);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['vacante'].'">'.$renglon['vacante']." ".$renglon['tiempo'].'</option>';        		}
        		?>
	</select>
	</div>
	
	<br> <br>
<div style="text-align: center;">
	<label style="width: 250px">Remplazo de</label>
		<input type="text" name="remplazo" required="" style="width: 500px" class="color">
</div>
<br><br>
</div>

<div class="izquierda" style="text-align: center;">
	<div style="text-align: center;">
		<label style="width: 250px">Tipo de Contrato:</label>
			<select style="width: 250px" name="tipo_vacante" required class="color">
				<option value="">Seleccionar</option>
			<?php
        		include "conexion.php";
        		$sql5 ="SELECT * FROM tipo_vacante";
        		$resultado=mysqli_query($conexion,$sql5);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['tipo_vacante'].'">'.$renglon['tipo_vacante'].'</option>';        		}
        		?>
			</select>
	</div>
	<br><br>
	<div style="text-align: center;">
		<label style="width: 250px">Autorización del Lider</label>
			<select style="width: 250px" name="autorizacion" required class="color">
				<option value="">Seleccionar</option>
			<?php
        		include "conexion.php";
        		$sql7 ="SELECT * FROM autorizacion";
        		$resultado=mysqli_query($conexion,$sql7);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['autorizacion'].'">'.$renglon['autorizacion'].'</option>';        		}
        		?>
			</select>
	</div>
</div>

<div class="derecha" style="text-align: center;" >
	<div style="text-align: center;">
	<label style="width: 250px">Ubicación</label>
			<select style="width: 250px" name="ubicacion" required class="color">
				<option value="">Seleccionar</option>
				<?php
        		include "conexion.php";
        		$sql6 ="SELECT * FROM ubicacion";
        		$resultado=mysqli_query($conexion,$sql6);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['ubicacion'].'">'.$renglon['ubicacion'].'</option>';        		}
        		?>
			</select>	
	</div>
	<br><br>

	<div style="text-align: center;">
		<label style="width: 250px">Aprobación</label>
			<select style="width: 250px" name="aprobacion" required class="color">
				<option value="">Seleccionar:</option>
				<?php
        		include "conexion.php";
        		$sql8 ="SELECT * FROM aprobacion";
        		$resultado=mysqli_query($conexion,$sql8);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['aprobacion'].'">'.$renglon['aprobacion'].'</option>';        		}
        		?>
			</select>
	</div>
<br><br>
</div>	
<div class="izquierda" style="text-align: center;">
	<br><br>
	<div style="text-align: center;">
		<label style="width: 250px">Estudios:</label>
				<select style="width: 250px" name="estudios" required class="color">
					<option value="">Seleccionar</option>
				<?php
        		include "conexion.php";
        		$sql9 ="SELECT * FROM Estudios";
        		$resultado=mysqli_query($conexion,$sql9);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['estudios'].'">'.$renglon['estudios'].'</option>';        		}
        		?>	
				</select>
	</div>
	<br><br>

	<div style="text-align: center;">
	<label style="width: 250px">Rango de Edad</label>
	<input type="number" name="edad" required="" style="width: 50px" class="color"> A
	<input type="number" name="edad2" required="" style="width: 50px" class="color">
	</div>
	<br> <br>
</div>

<div class="derecha" style="text-align: center;">
			<div style="text-align: center;">
				<label style="width: 250px">Sexo</label>
				<select style="width: 250px" name="sexo" required class="color">
					<option value="">Seleccionar</option>
					<?php
        		include "conexion.php";
        		$sql10 ="SELECT * FROM sexo";
        		$resultado=mysqli_query($conexion,$sql10);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['sexo'].'">'.$renglon['sexo'].'</option>';        		}
        		?>	
				</select>
			</div>
			<br><br>

			<div style="text-align: center;">
			<label style="width: 250px">Estado Civil</label>
				<select style="width: 250px" name="civil" required class="color" >
					<option value="">Seleccionar</option>
					<?php
        		include "conexion.php";
        		$sql11 ="SELECT * FROM civil";
        		$resultado=mysqli_query($conexion,$sql11);
        		while ($renglon=mysqli_fetch_array($resultado)) {
        		echo '<option value="'.$renglon['civil'].'">'.$renglon['civil'].'</option>';        		}
        		?>
        	</select>
        	<br><br>
		</div>
		</div>

		<br> <br>
		<div class="experiencia" style="text-align: center;" class="form-group">
			<div style="text-align: center;">
				<label style="width: 250px">Experiencia</label>
				<input type="text" name="experiencia" size="110" style="height: 60px" required="" class="color" maxlength="200">
 			</div>
 			<br> <br>
		</div>
		<div class="experiencia" style="text-align: center;">
			<div style="text-align: center;">
				<label style="width: 250px">Conocimientos</label>
				<input type="text" name="conocimientos" size="110" style="height: 60px" class="color" maxlength="200">
			</div>
			<br> <br>
		</div>
		<div class="experiencia" style="text-align: center;">
			<div style="text-align: center;">
				<label style="width: 250px">Habilidades</label>
				<input type="text" name="habilidades" size="110" style="height: 60px" class="color" maxlength="200">
			</div>
			<br> <br>
		</div>
		<div class="experiencia" style="text-align: center;">
			<div style="text-align: center;">
				<label style="width: 250px">Competencias</label>
				<input type="text" name="competencias" size="110" style="height: 60px" class="color" maxlength="200">
			</div>
			<br> <br>	
		</div>
		<div class="experiencia" style="text-align: center;" maxlength="200">
			<div style="text-align: center;">
				<label style="width: 250px">Desebles y/o Adicionales</label>
				<input type="text" name="adicionales" size="110" style="height: 60px" class="color" maxlength="200">
				<br><br>
			</div>
			<br><br>
		</div>
		<div class="bott" style="text-align: center;">
		<input type="submit" name="guardar" style="width: 250px" size="110" class="btn btn-outline-success btn-lg" >
		</div>
</form>
</body>
</html>

