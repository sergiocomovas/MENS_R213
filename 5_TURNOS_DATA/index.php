<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> 

  <link rel="stylesheet" href="css/moda1.css" type="text/css"> 
</head>

<body>


<style>
  .affix {
    top: 20px;
    z-index: 9999 !important;
  }
</style>

<?php include 'fechas.php';?>
  
  <div class="py-2" style="width:99.8%;">
    <div id="container_2" style="display:none;" class="container"> <h1><i class="fas fa-spinner fa-pulse"></i> Espere...</h1></div>
    <div id="container_1" class="container" style="
                                  max-width:100%;
                                  width:99%; 
                                  padding-right: 0px;
                                  margin-right: 0px;
                                  border-right-width: 0px;
                                  margin-left: 0px;">
      <div class="row">
        <div class="col-md-3" style="width:100%;">
          <div style="position:fixed;">

          <!--inicio card-->
          
          <div class="card" style="border-color:green;" >
            <div class="card-header" style="border-bottom-color:green;">Año <?php echo substr($semana, 0, -2);?>  </div>
            <div class="card-body">
              
              <h5>Visualizando Semana <?php echo substr($semana, -2);?>.</h5> 
              <small>
                <h5 style="background-color:green;" class="text-light">Del lunes <?= date('d-m-Y', strtotime($lunesvista)); ?> <br>al domingo <?= date('d-m-Y', strtotime($domingovista)); ?>.</h4>
              </small>
              <hr>
              <p class=" p-y-1">

              Semanas pasadas: <br>

              
              [<a href="index.php?semana=<?php echo $semana-3;?>">
                 <?php echo substr($semana-3, -2);?>
              </a>]

              [<a href="index.php?semana=<?php echo $semana-2;?>">
                 <?php echo substr($semana-2, -2);?>
              </a>]
              
              <a href="index.php?semana=<?php echo $semana-1;?>">
                <i class="fas fa-arrow-left"></i> Ver semana  <?php echo substr($semana-1, -2);?>
              </a>
              
              </p>

              <p data-spy="affix" data-offset-top="1" class="lead">
              <small>
                  Editando semana: <strong><?php echo $semanavista;?></strong>  
              </small>
              </p>

              <p class=" p-y-1">
              
              Semanas futuras: <br>

              <a style="background-color:yellow;" href="index.php?semana=<?php echo $semana+1;?>"><i class="fas fa-arrow-right"></i> Ver semana <?php echo substr($semana+1, -2);?></a>

              [<a href="index.php?semana=<?php echo $semana+2;?>">
                 <?php echo substr($semana+2, -2);?>
              </a>]

              [<a href="index.php?semana=<?php echo $semana+3;?>">
                 <?php echo substr($semana+3, -2);?>
              </a>]
              
              
              
              </p>
              <hr>
              <p class=" p-y-1"><a href="index.php"><i class="fas fa-circle"></i> Esta semana</a></p>
              <p class=" p-y-1"><a href="index.php?semana=201901"><i class="far fa-circle"></i> Año 2019</a></p>
              <!--<p class=" p-y-1"><a href="#"><i class="far fa-circle"></i> Todas las semanas</a></p>-->
            </div>
          </div>
          <br>
          <!--final card-->

          <!--resolver-->
          <!--resolver-->

        </div>
        </div>
        <div class="col-md-9" style=" background-color:#fff;">
          <p class="lead">TURNOS</p>

         

          <!--include 2-->
          <?php include 'aa_emaya.php';?><br>

          <br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
    </div>
  </div>

  <nav style="width:100%" class="navbar py-0 navbar-expand-md bg-dark navbar-dark fixed-bottom">
    <div class="container">
     
      <a class="navbar-brand p-1" href="#"><h6 style="color:#FFF;">Semana <?php echo substr($semana, -2);?>.<br><small>
      <p style="background-color:green;" class="text-light">Del <?= date('d-m-Y', strtotime($lunesvista)); ?> al <?= date('d-m-Y', strtotime($domingovista)); ?>.</p>
      
      </small></h6> </a>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <small>
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="#html_radio">Radio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_television">TV</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_avingudes">Avingudes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_segurarxiu">SegurArxiu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_hotel">Hoteles</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_conselleries">Consellería</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_mensajeria">Mensajería</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#html_emaya">Emaya</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_tunel">Túnel</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_ibiza">Ibiza</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_menorca">Menorca</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_vilaret">Vilaret</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#html_verger">Verger</a>
          </li>

        </ul>
        </small>
        <a class="ml-3 btn navbar-btn btn-primary" href="##">Enviar</a>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script>  


    window.onbeforeunload = preguntarAntesDeSalir;  
    
    function cambiarVar(celda, valor) {
            
      document.getElementById(celda).value = valor;   
    }
    
    //var bPreguntar = true;
     
    function preguntarAntesDeSalir()
    {
      //if (bPreguntar)
      //  return "¿Seguro que quieres salir?";
      document.getElementById("container_1").style.display = "none";
      document.getElementById("container_2").style.display = "block";
    }

  </script>



</body>

</html>