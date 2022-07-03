   <!--proximo número-->
   <?php 
    //mysql_set_charset('utf8');
    $conexionF1 = mysqli_connect("localhost", "loges_root" , "Ladrillo69", "loges_hu");
    $sql1 = "SELECT MAX(RE_ID)+1 AS Q FROM `1_MR_REPARTO`";
   
    
    if(!$result = mysqli_query($conexionF1, $sql1)) die();
 
            while($row = mysqli_fetch_array($result)) 
                {   $id = $row['Q'];
                    $id_2 = substr($id, -2);
                    $id_3 = substr($id, -3, 1); 
                  
                    echo '<p style="color:grey"><i class="fa fa-list-ol" aria-hidden="true"></i> Vamos por el núm:</p>';
                    echo '<h1 class="display-1 text-danger"><small style="color:grey"><small>';
                    echo $id_3; 
                    echo '</small></small><big><big>'.$id_2.'</big></big></h1>'; 
                
                }

   ?>


<!--botnes de imprimir-->

<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <a href="http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/lista0.php">IMPRRIMIR TODO</a>
    <span class="badge badge-primary badge-pill"><i class="fa fa-print" aria-hidden="true"></i></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/lista3.php">IMPRIMIR 07003</a>
    <span class="badge badge-primary badge-pill">07003</span>
  </li>

</ul>