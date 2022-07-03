<?php
# definimos los valores iniciales para nuestro calendario
$month=date("n");
$year=date("Y");
$diaActual=date("j");
 
# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
 
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Calendario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>
		
		#calendar caption {
			text-align:left;
			padding:10px 15px;
			background-color:#003366;
			color:#fff;
			font-weight:bold;
		}
		#calendar th {
			background-color:#006699;
			color:#fff;
			width:40px;
		}
		#calendar td {
			text-align:right;
			padding:12px 15px;
			background-color:silver;
		}
		#calendar .hoy {
			background-color:yellow;
		}
	</style>
</head>
 
<body>

<div class="container-fluid p-4">
    

<table class="table table-bordered" id="calendar">
	<caption><h3><?php echo $meses[$month]." ".$year?></h3></caption>
	<tr>
		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
		<th>Vie</th><th>Sab</th><th>Dom</th>
	</tr>
	<tr bgcolor="silver">
		<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		// hacemos un bucle hasta 42, que es el máximo de valores que puede
		// haber... 6 columnas de 7 dias
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				// determinamos en que dia empieza
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// celca vacia
				echo "<td>&nbsp;</td>";
			}else{
				// mostramos el dia
				if($day==$diaActual)
					echo "<td class='hoy'><a href='https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/201/".$year."-".date('m')."-".str_pad($day, 2, "0", STR_PAD_LEFT)."' target='blank_'>$day</a></td>";
				else
					echo "<td><a href='https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/201/".$year."-".date('m')."-".str_pad($day, 2, "0", STR_PAD_LEFT)."' target='blank_'>$day</a></td>";
				$day++;
			}
			// cuando llega al final de la semana, iniciamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>

    </div>
</body>
</html>