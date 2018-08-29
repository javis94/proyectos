<?PHP
include("conexion.php");
			
			$letras[0]="a"; $letras[1]="b"; $letras[2]="c"; $letras[3]="d";
			$letras[4]="e"; $letras[5]="f"; $letras[6]="g"; $letras[7]="h";
			$letras[8]="i"; $letras[9]="j"; $letras[10]="k"; $letras[11]="l";
			$letras[12]="m"; $letras[13]="n"; $letras[14]="o"; $letras[15]="p";
			$letras[16]="q"; $letras[17]="r"; $letras[18]="s"; $letras[19]="t";
			$letras[20]="u"; $letras[21]="v"; $letras[22]="w"; $letras[23]="x";
			$letras[24]="y"; $letras[25]="z"; $letras[26]=" ";

			//$javis="abcdefghijklmnopqrstuvwxyz ";
			$vala=$_POST['a'];
			$valb=$_POST['b'];
			$mensaje=$_POST['texto'];
			$long=strlen($mensaje);
			$conta=26;
			echo"<br>";
			//echo "abc".$long;
			echo("<br>");
			$compi="";

			for($j=0; $j < $long; $j=$j+1)
			{
				//echo "jota: ".$j;
				//echo "<br>";
				for($i=0; $i<$conta; $i++)
				{
				//	echo "iii: ".$i;
				//echo "<br>";

					//echo"".$mensaje[$j];
					//echo "<br>";
					//echo "".$long;
				if ($letras[$i] == $mensaje[$j]) {	
					    echo "".$letras[$i];
						//echo $letras[$i] + "<br>";
						echo "".$letras[$j];

						if ($mensaje[$j] == $letras[26]) {
							$compi.=" ";  

						}
						else {
							//echo $letras[$i] + "<br>";
							//echo $i;
							$cifrado=(($vala*$i)+$valb)%26;
							//echo $letras[$i];
							//echo "cif".$cifrado;
							//echo "<br>";
							//echo "",$letras[$cifrado];	
							$compi.=$letras[$cifrado];
							//echo "<br><br>";
							echo "".$cifrado;
						}
					}
				}
			
			}
						echo"<div class='tabla'>";
			echo "<table border='3'>";
			echo "<tr>";
			echo"<td>";
			echo "<br>";
			echo "Este es el mensaje sin cifrar <br>";
			echo "<br>";
			echo "<br>";
			echo $mensaje;
			echo"<br>";
			echo"</td>";
			echo"<td>";
			echo"este es el valor de a : <br> ";
			echo"<br>";
			echo"<br>".$vala;
			echo"</td>";
			echo "<br>";
			echo"<td>";
			echo"este es el valor de b: <br>";
			echo "<br>";
			echo "<br>".$valb	;
			echo"</td>";
			echo"<td>";
			echo"<br>";
			echo "Este es el mensaje cifrado <br>";
			echo"<br>";
			echo"<br>";
			echo "".$compi;
			echo"</td>";
			echo"</tr>";
			echo "</div>";
			echo "<table>";


			$sql ="INSERT INTO afin(mensaje,vala,valb,compi) VALUES('$mensaje',AES_ENCRYPT('$vala','vala'),AES_ENCRYPT('$valb','valb'),'$compi')";
			mysqli_query ($conexion,$sql); 
		?>
		
		<a href="afin.php"> <button>Regresar al registro afin</button> </a>
		<a href="mostrar.php"> <button>Ir al encryptado de afin</button> </a>
