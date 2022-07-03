<?php 

    //mysql_set_charset('utf8');
    $conexionF1 = mysqli_connect("localhost", "loges_root" , "Ladrillo69", "loges_hu");
    
    
    $sql = ('
            SELECT * FROM `1_MR_07006`
            ');
                
            if(!$result = mysqli_query($conexionF1, $sql)) die();
             
            include('while.php');
 
            
            $close = mysqli_close($conexionF1) 
            or die("Ha sucedido un error inexperado en la desconexion de la base de datos"); 
              
              ?>