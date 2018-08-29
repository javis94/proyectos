<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trasposicion</title>
<body>
<form action="" id="form" method="post">
<textarea rows="3" cols="40" name="txt" placeholder="texto a Cifrar/Texto a Decifrar ...." id="clipboard"></textarea><br />
<br />
<br />
<input type="submit" name="enc" value="Cifrar" id="button" />
<input type="submit" name="dec" value="Decifrar" id="button"/>
</form>
</head>
</html>
<?php
if(isset($_POST['txt']))
{
	$text=$_POST['txt'];
	$text=preg_replace('/\s+/','',$text);
	$length=strlen($text);
	$count=0;
	$len=sqrt($length);
	$sqr=intval($len);
	$square=$sqr*$sqr;
	$col=$length-$square;
if(isset($_POST['enc']))
{
	
	$nombre= $_POST['txt'];
//insertar registro
//$accion= "INSERT INTO tran(cifrar)
//VALUES ('$nombre')";
//$consulta = mysql_query($accion, $conexion); 
        
    
	
	if($square!=$length)
	{
		if($col<=$sqr)
		{
		$count=0;
		for($i=0;$i<$sqr+1;$i++)
			{
			for($j=0;$j<$sqr;$j++)
			{
			if($count<$length)
			{
				$text_array[$j][$i]=$text[$count];
				$count++;
			}
			else
			{
				$text_array[$j][$i]="*";
			}
			}
		}
		echo "<h2><u>Resultado</u></h2>";
		?>
       
		<input type="text" disabled style="border-style:none; background-color:#069; color:#FFF; width:100%" id="copy" value="
		<?php
        for($i=0;$i<$sqr;$i++)
		{
			for($j=0;$j<$sqr+1;$j++)
			{
				echo $text_array[$i][$j]." ";
			}
		}	
		}
		else if($col>$sqr)
		{
			$count=0;
			for($i=0;$i<$sqr+2;$i++)
			{
				for($j=0;$j<$sqr;$j++)
				{
					if($count<$length)
					{
						$text_array[$j][$i]=$text[$count];
						$count++;
					}
					else
					{
						$text_array[$j][$i]="*";
					}
				}
			}
			echo "<h2><u>Resultado</u></h2>";
			?>
			<input type="text" disabled style="border-style:none; background-color:#069; color:#FFF; width:100%" id="copy" value="
			<?php
			for($i=0;$i<$sqr;$i++)
			{
				for($j=0;$j<$sqr+2;$j++)
				{
					echo $text_array[$i][$j]." ";
				}
			}	
		}?>"/><br>
        
			<?php
	}
	else if($square==$length)
	{
		square_matrix($sqr,$text);
	}
}
else if(isset($_POST['dec']))
{
	if($square != $length)
	{
		if($col<=$sqr)
		{
			$count=0;
			
			for($i=0;$i<$sqr;$i++)
			{
				for($j=0;$j<$sqr+1;$j++)
				{	
					
					if($count<$length)
					{
					$cipher_array[$i][$j]=$text[$count];
					$count++;
					}
					else
					 $cipher_array[$i][$j]=" ";
				}
			}
			
			echo "<h2><u>Resultado</u></h2>";
			?>
			<input type="text" disabled style="border-style:none; background-color:#069; color:#FFF; width:100%" id="copy" value="
            <?php
			for($i=0;$i<$sqr+1;$i++)
			{
				for($j=0;$j<$sqr;$j++)
				{
					if($cipher_array[$j][$i]=='*')
					break;
					echo preg_replace('/\s+/','',$cipher_array[$j][$i]." ");
				}
			}
			?>"/><br>
        
        <?php	
		}
		else if($col>$sqr)
		{
			$count=0;
			for($i=0;$i<$sqr;$i++)
			{
				for($j=0;$j<$sqr+2;$j++)
			{	
			
				if($count<$length)
				{
				$cipher_array[$i][$j]=$text[$count];
				$count++;
				}
				else
					$cipher_array[$i][$j]=" ";
				
			}	
		}
		echo "<h2><u>Resultado</u></h2>";
		?>
		<input type="text" disabled style="border-style:none; background-color:#069; color:#FFF; width:100%" id="copy" value="
		<?php
		for($i=0;$i<$sqr+2;$i++)
		{	
			for($j=0;$j<$sqr;$j++)
			{
				if($cipher_array[$j][$i]=='*')
				break;
				echo preg_replace('/\s+/','',$cipher_array[$j][$i]." ");	
			} 
		}
		?>"/><br>
     
        <?php	
	}
	
}
else if($square==$length)
{
	square_matrix($sqr,$text);
}
}
}

function square_matrix($sqr,$text) 
{
	$count=0;
	for($i=0;$i<$sqr;$i++)
		{
			for($j=0;$j<$sqr;$j++)
			{
				$text_array[$i][$j]=$text[$count];
				$count++;	
			}
		}
		echo "<h2><u>Resultado</u></h2>";
		?>
           
        <input type="text" style="border-style:none; background-color:#069; color:#FFF; width:100%" id="copy" value="
        <?php
		for($i=0;$i<$sqr;$i++)
		{
			for($j=0;$j<$sqr;$j++)
			{
			echo $text_array[$j][$i]." ";
			}
		}
		?>"/><br>
        
        <?php
}
?>
           <div align="center" style="background-color: coral"> 
			
	</div>
</section>
</body>
</html>
