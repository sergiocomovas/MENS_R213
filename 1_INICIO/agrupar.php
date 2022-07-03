<?php 




#modificar cada vez#########
$base="loges_hu";
$tabla="";
############################



$conexion = mysql_connect("localhost", "loges_root" , "Ladrillo69");
mysql_select_db($base,$conexion);


			
if (mysql_errno($conexion)==0){
				
				

            mysql_query("
            
            UPDATE `1_MR_REPARTO` 
            SET `RE_COMENTARIOS` = '".$_GET['ab']."' 
            WHERE `1_MR_REPARTO`.`RE_ID` = ".$_GET['id'].";
		
			",$conexion);
	
	
	echo " <script language='Javascript'>
       document.location.href='http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/index.php?retorno=".$_GET['retorno']."';
	 </script>";

          
			}else{
        if (mysql_errno($conexion)==1062){echo "<h2>No ha podido añadirse el registro<br>Error: Índice Repetido</h2>";
            }else{ 
            $numerror=mysql_errno($conexion);
            $descrerror=mysql_error($conexion);
            echo "Se ha producido el error nº $numerror ($descrerror)  <br>";
			}
				}

# cerramos la conexion

 mysql_close();




?>