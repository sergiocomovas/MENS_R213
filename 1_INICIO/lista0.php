<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css" > 
  <!--CSS LEAFLET-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
   integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
   crossorigin=""/>
   <link rel="stylesheet" href="close.css" type="text/css" > 
 
  <!--<link rel="stylesheet" href="leaflet.css" type="text/css">-->

  <!--JS LEAFLET-->
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
   integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
   crossorigin=""></script>


</head>

<body>
  
      <div class="row">
        <div class="col-md-12">
        <h2>MAPA   | <a href="" onclick="window.print()">IMPRIMIR <?php

$fechahoy = getdate(); 
echo $fechahoy =  $fechahoy[year].'-'.$fechahoy[mon].'-'.$fechahoy[mday];
        
        
 ?></a> </h2>
        <div style="height: 900px;" id="mapigeneral"></div>
                        <script>
              
                          var mymapgeneral = L.map(`mapigeneral`,{zoomControl: false}).setView([39.571271,   2.651339], 16);
                          L.tileLayer(`https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}`, {
                          id: `mapbox.streets`,
                          accessToken: `pk.eyJ1IjoiY2F0eG85OSIsImEiOiJjamNxOGV1a2sxeTZsMnduMGpnYmtyaTNxIn0.-o5AHxYMD2dxEpezQ7Neqg`
                          }).addTo(mymapgeneral)
                          

                        </script>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th><small><small>DIRECCION</small></small></th>
                <th><small><small>OTROS DATOS</small></small></th>
              </tr>
            </thead>
            <tbody>


              <!--REPETIR-->
              <!--FIN DE REPETIR-->
          
           
           <?php 
            

            $conexionF1 = mysqli_connect("localhost", "loges_root" , "Ladrillo69", "loges_hu");
            $sql = ("
                    SELECT * FROM `1_MR_REPARTO`  
                    WHERE  `1_MR_REPARTO`.`RE_AUTODATE` > '$fechahoy'                    
                    ORDER BY `1_MR_REPARTO`.`CP_CP` ASC, `1_MR_REPARTO`.`RE_CARRERNUM` ASC");
                        
                    if(!$result = mysqli_query($conexionF1, $sql)) die();

                    while($row = mysqli_fetch_array($result)) 
                        {

                        //$id=utf8_encode($row['CP_ID']); 
                        $id=utf8_encode($row['RE_ID']);
                       
                        $id_2 = substr($id, -2);
                        $urgencia=utf8_encode($row['RE_URGENCIA']); 
                        $oficial=utf8_encode($row['RE_OFICIAL']);
                        $etiqueta=utf8_encode($row['RE_CARRERNUM']);
                        $comentarios=utf8_encode($row['RE_COMENTARIOS']);
                        $carrerigual=utf8_encode($row['CP_CARRER']);
                        $lat=$row['RE_LAT'];
                        $lon=$row['RE_LON'];
                        $lon1=$lon+0.000900;
                        
                        echo "<tr>";
                        echo "<td style='background-color: #fff;'><big>";  
                        echo $id_2;
                        echo "</big><br>";
                        echo $etiqueta;
                        echo "<br><small><small>(".$oficial.")</small></small>";
                        echo "</td>";
                        echo "<td width='60%'>";
                        echo "<div style='height: 180px;' id='mapid".$id."a'></div>
                        <script>
              
                          var mymap".$id." = L.map(`mapid".$id."a`,{zoomControl: false}).setView([".$lat.", ".$lon1."], 18);
                          L.tileLayer(`https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}`, {
                          id: `mapbox.streets`,
                          accessToken: `pk.eyJ1IjoiY2F0eG85OSIsImEiOiJjamNxOGV1a2sxeTZsMnduMGpnYmtyaTNxIn0.-o5AHxYMD2dxEpezQ7Neqg`
                          }).addTo(mymap".$id.")
                          var marker = L.marker([".$lat.", ".$lon."]).addTo(mymap".$id.");
  
                          var popup = L.popup().setLatLng([".$lat.", ".$lon."]).setContent(`(".$id_2.")`).addTo(mymapgeneral);
                        </script>
              
                        ";
                        echo "<br></td>";
                        echo "</tr>";

                      
                      }
                      $close = mysqli_close($conexionF1) 
                      or die("Ha sucedido un error inexperado en la desconexion de la base de datos");             
            ?>

            </tbody>
          </table>
        </div>
      </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>