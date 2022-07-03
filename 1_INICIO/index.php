<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <link rel="stylesheet" href="css.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="theme.css" type="text/css">
   

    
    <!-- MOBILE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- MODERNIZR -->
    <script type="text/javascript" src="javascripts/vendor/modernizr.custom.js"></script>
  


  </head><body class="bg-dark">
    <div class="row mx-4 my-4 w3-animate-left">
    <div class="container-fluid"><div class="row">
    
    <!--FECHAS-->
    <div class="col-md-2">
    
    <?php include("izquierda.php"); ?>
    
    </div>
    <!--FIN DE FECHAS-->
   

    <div class="col-md-4" style=""><div class="card">
    <div class="card-header">
    
    <small>
    <ul class="nav nav-pills nav-fill">
      
        <li class="nav-item">
          <?php $archivo="nada.php"; $and=" "; ?>
          <a class="nav-link <?php if($_GET['retorno']=="7001"){echo "active"; $archivo="codigo_01.php"; $and=" AND `CP_CP` = 7001 ";}?>"  href="http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/index.php?retorno=7001">07001</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['retorno']=="7002"){echo "active"; $archivo="codigo_02.php"; $and=" AND `CP_CP` = 7002 ";}?>" href="http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/index.php?retorno=7002">07002</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['retorno']=="7003"){echo "active"; $archivo="codigo_03.php"; $and=" AND `CP_CP` = 7003 ";}?>" href="http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/index.php?retorno=7003">07003</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['retorno']=="7006"){echo "active"; $archivo="codigo_06.php"; $and=" AND `CP_CP` = 7006 ";}?>" href="http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/index.php?retorno=7006">07006</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['retorno']=="7012"){echo "active"; $archivo="codigo_12.php"; $and=" AND `CP_CP` = 7012 ";}?>" href="http://oklgrtuhcu.log99.es/MENS_R213/1_INICIO/index.php?retorno=7012">07012</a>
        </li>
        <?php //CANCELO EL AND
         $and = " ";?>
    
    </ul>
    </small>
      

    </div>
    <div class="card-body bg-dark">
      <!--<h4 class="text-light">07001</h4>
      <h6 class="text-warning">Callejero del 07001</h6>
      <p class="p-y-1 text-white">Selecciona</p>-->
      <form class="form-inline " id="formulario" name="formulario" method="post" action="#">  
      <!--fecha-->
      <input type="hidden" index="0" name="date" class="form-control text-primary w-100">
      <div class="row p-2 mx-1" style="background-color: rgb(221, 221, 221);">

        <div class="col-2 px-1" style="">
      
          <input type="text" autofocus index="1" id="num" name="num" class="form-control text-primary  w-100" placeholder="00">
        
        </div>

        <div class="col-10 px-1" style="">

          <input 
              id="search-navigation" 
              type="text" 
              index="2" 
              name="carrer" 
              class="form-control w-100" 
              placeholder="CARRER DE.."
              data-list=".navigation_list" 
              data-nodata="No results found" 
              autocomplete="off"
              >
      
        </div>

    </div> 
    </form>


    <ul style="color:white" class="vertical navigation_list">

  

    <?php include($archivo);?>
    
    </ul>


  </div>
    
  </div></div>


  <?php include("diario.php");?>
    
 
  </div>
  </div></div></div><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.9.1.min.js"><\/script>')</script>

  <!--scrip-->
  <script>
    function putas( p1, p2, p3, p4, p6, p5) {

      var Om = document.formulario.num.value;
      
      if (Om === undefined || Om === null || Om ==="") { Om = "00"; }

      //alert(p6);

      window.location.href = 'http://wendy.log99.es/index.php/mensajeria/insertar/'
      +p6+'/'
      +p1+'/'
      +p2+'/'
      +Om+'/'
      +p3+'/'
      +p4+'/'
      ; 
    }
  		
    /*function myFunction ( form ) 
      { 
          var i = 1; 
          while (i < 4) {
              //text += "The number is " + i;
              var Elemento = "v" + i;
              alert (Elemento);  
              document.getElementById(Elemento).innerHTML = form.num.value;
              i++;
          }

      }
      */

  </script> 
  
  <!-- JS -->
  <script type="text/javascript" src="javascripts/vendor/jquery.hideseek.min.js"></script>
  <script type="text/javascript" src="javascripts/vendor/rainbow-custom.min.js"></script>
  <script type="text/javascript" src="javascripts/vendor/jquery.anchor.js"></script>
  <script src="javascripts/initializers.js"></script>
  <!-- JS ends -->  





</body></html>