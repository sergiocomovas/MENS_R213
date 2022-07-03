
   <div class="col-md-6">


      
      <div class="card">

      <?php include("mapa.php"); ?>
      <div class="card-body border border-dark">

 
    <?php

    $fechahoy = getdate(); 
    $fechahoy =  $fechahoy[year].'-'.$fechahoy[mon].'-'.$fechahoy[mday];

    $conexionF1 = mysqli_connect("localhost", "loges_root" , "Ladrillo69", "loges_hu");
    $sql = ("
            SELECT * FROM `1_MR_REPARTO`  
            WHERE  `1_MR_REPARTO`.`RE_AUTODATE` > '$fechahoy'
            $and
            ORDER BY `1_MR_REPARTO`.`RE_ID` DESC LIMIT 1
            ");
                
            if(!$result = mysqli_query($conexionF1, $sql)) die();
 
            while($row = mysqli_fetch_array($result)) 
                {

                //$id=utf8_encode($row['CP_ID']); 
                $id=utf8_encode($row['RE_ID']);
                $urgencia=utf8_encode($row['RE_URGENCIA']); 
                $etiqueta=utf8_encode($row['RE_CARRERNUM']);
                $comentarios=utf8_encode($row['RE_COMENTARIOS']);
                $carrerigual=utf8_encode($row['CP_CARRER']);
                $lat=$row['RE_LAT'];
                $lon=$row['RE_LON'];

                //$id_2 = substr($id, -2);
                //id_3 = substr($id, -3, 1);        

                //http://wendy.log99.es/index.php/mensajeria/insertar/holamunso/3/4/5
                echo '<p class=" p-y-1"><span class="badge badge-danger"><i class="fa fa-cube" aria-hidden="true"></i>'.substr($row['RE_ID'],-2).'</span> <a target="_blank" href="https://maps.google.com/?q='.$lat.','.$lon.'&z=25">'.$etiqueta.'</a> <small>('.$urgencia.', '.$comentarios.')  
                <spam class="float-right">
                <a href="agrupar.php?ab=A&id='.$id.'&retorno='.$_GET['retorno'].'">🅰</a>  ,  
                <a href="agrupar.php?ab=B&id='.$id.'&retorno='.$_GET['retorno'].'">🅱</a>  ,  
                <a href="agrupar.php?ab=AB&id='.$id.'&retorno='.$_GET['retorno'].'">🆎</a>  
                </small>  
                </spam> <i style="color:#D3D3D3" class="fa fa-trash" aria-hidden="true"></i> <p> ';
                 
                $sqltime = "SELECT * FROM `1_MR_REPARTO` WHERE `RE_AUTODATE` > '$fechahoy' AND `CP_CARRER` = '$carrerigual' AND `RE_ID` != $id ";
                
                if(!$result2 = mysqli_query($conexionF1, $sqltime)) die();
 
                while($row = mysqli_fetch_array($result2)) 

                    {
                        //echo $sqltime. '<br>';    
                        echo '<small style="color:grey"><i class="fa fa-cube" aria-hidden="true"></i>'.substr($row['RE_ID'],-2).' </small>';
                    }

                echo "</p></p>"; 

                }
              $close = mysqli_close($conexionF1) 
              or die("Ha sucedido un error inexperado en la desconexion de la base de datos"); 
              
        ?>
                       
               
                       <div id="mapdiv"></div>        
        </div>



        <div class="card-header border border-success bg-dark text-white">
        dfsafds <br>
        
        </div>
  

    </div>


 <script src="https://openlayers.org/api/OpenLayers.js"></script>
 
 <script>
 
   map = new OpenLayers.Map("mapdiv");
   map.addLayer(new OpenLayers.Layer.OSM());
   
   epsg4326 =  new OpenLayers.Projection("EPSG:4326"); //WGS 1984 projection
   projectTo = map.getProjectionObject(); //The map projection (Spherical Mercator)
  
   var lonLat = new OpenLayers.LonLat(  2.650017, 39.57541 ).transform(epsg4326, projectTo);

   var serlat = "<?php echo $lat;?>";
   var serlon = "<?php echo $lon;?>";
   var sername = "<?php echo substr($id,-2);?>"
     
   
   var zoom= 15;
   
   map.setCenter (lonLat, zoom);

   var vectorLayer = new OpenLayers.Layer.Vector("Overlay");
   
   // Define markers as "features" of the vector layer:
  
   var feature = new OpenLayers.Feature.Vector(
          
           new OpenLayers.Geometry.Point( serlon , serlat  ).transform(epsg4326, projectTo),
           {description:sername} ,
           {externalGraphic: 'http://www.clker.com/cliparts/I/l/L/S/W/9/map-marker-hi.png',  graphicHeight: 25, graphicWidth: 21, graphicXOffset:-12, graphicYOffset:-25  }
       
       );    
   vectorLayer.addFeatures(feature);
   createPopup(feature);
   
  
   map.addLayer(vectorLayer);

   
   //Add a selector control to the vectorLayer with popup functions
   var controls = {
    
     selector: new OpenLayers.Control.SelectFeature(vectorLayer, { onSelect: createPopup, onUnselect: destroyPopup })
   };

   
   function createPopup(feature) {
      
     feature.popup = new OpenLayers.Popup.FramedCloud("pop",
         feature.geometry.getBounds().getCenterLonLat(),
         null,
         '<div class="markerContent">'+feature.attributes.description+'</div>',
         null,
         true,
         function() { controls['selector'].unselectAll(); }
     );
     //feature.popup.closeOnMove = true;
     map.addPopup(feature.popup);
   }

   function destroyPopup(feature) {
     feature.popup.destroy();
     feature.popup = null;
   }
   
   map.addControl(controls['selector']);
   controls['selector'].activate();
     
 </script>