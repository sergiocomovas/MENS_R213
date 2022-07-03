  <!--php que busca la fecha-->
  <?php 
    $conexion = mysqli_connect("localhost", "loges_root" , "Ladrillo69");

    mysqli_set_charset('utf8',$conexion);

    mysqli_select_db(loges_hu,$conexion);
	
	if (mysqli_errno($conexion)==0){
		$sql = "SELECT * FROM `rr_aa` WHERE `mr_date` = curdate()";
        $piza5=mysqli_query($sql, $conexion);	
        while($row = mysqli_fetch_array($piza5))
		{     
            //       
			$semanahoy=$row['mr_largo'];
			//echo $anohoy=$row['mr_anyo'];
            //echo $nomhoy=$row['mr_nom'];
            //echo $hoy=$row['mr_date'];
			
		}						
	}else{ 
	$numerror=mysqli_errno($conexion);
	$descrerror=mysqli_error($conexion);
	echo "Se ha producido el error nº $numerror ($descrerror)  <br>";
	}
	?>
  <!--fin de php que busca la fecha-->
  

  <!-- mira si tiene que tomar la fecha de hoy o la del parámetro-->
  <?php
  	if ($_GET['semana']==''){$semana=$semanahoy;
  	}else{
	  $semana=$_GET['semana'];
	  if ($semana==201853){$semana=201901;}
	  if ($semana==201900){$semana=201852;}

	  }
      //turnos de la semana actual o la indicada
      
	if (mysqli_errno($conexion)==0){
		$sql = "SELECT * FROM `rr_aa` WHERE `mr_largo` = ".$semana."
		AND `mr_nom` = 'lunes'" ;
		$piza6=mysqli_query($sql, $conexion);	
		while($row = mysqli_fetch_array($piza6))
		{           
			//       
			$lunesvista=$row['mr_date'];
			$semanaanterior_id=$row['mr_id']-1;

		}
		$sql = "SELECT * FROM `rr_aa` WHERE `mr_largo` = ".$semana."
		AND `mr_nom` = 'domingo'" ;
		$piza7=mysqli_query($sql, $conexion);	
		while($row = mysqli_fetch_array($piza7))
		{           
			//       
			$domingovista=$row['mr_date'];
			$anyovista=$row['mr_anyo'];
			$semanavista=$row['mr_semana'];
	
		}	
		$sql = "SELECT * FROM `rr_aa` WHERE `mr_id` = ".$semanaanterior_id;
		$piza8=mysqli_query($sql, $conexion);	
		while($row = mysqli_fetch_array($piza8))
		{           
			//       
			
			$anyoanterior=$row['mr_anyo'];
			$semanaanterior=$row['mr_semana'];
			
		}
		$sql = "SELECT * FROM `rr_aa` WHERE `mr_largo` = ".$semanahoy."
		AND `mr_nom` = 'lunes'" ;
		$piza9=mysqli_query($sql, $conexion);	
		while($row = mysqli_fetch_array($piza9))
		{           
			//       
			$semanaultima_id=$row['mr_id']-1;

		}
		$sql = "SELECT * FROM `rr_aa` WHERE `mr_id` = ".$semanaultima_id;
		$piza8=mysqli_query($sql, $conexion);	
		while($row = mysqli_fetch_array($piza8))
		{           
			//       
			
			$anyoultima=$row['mr_anyo'];
			$semanaultima=$row['mr_semana'];
			
		}

		}else{ 
		$numerror=mysqli_errno($conexion);
		$descrerror=mysqli_error($conexion);
		echo "Se ha producido el error nº $numerror ($descrerror)  <br>";
		}

  ?>

  <!--CARGAR DATOS-->