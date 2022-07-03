<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  
  <title><?= $mensajero_n ?> - <?= $mensa_semana ?></title>

  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/neon.css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/js/animate-in.js"></script>
  <style>
    #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: yellow; /* Set a background color */
    color: white; /* Text color */
    /* cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
  }

  #myBtn:hover {
    background-color: #fff; /* Add a dark-grey background on hover */
  }
  </style>

</head>

<body>

<form action="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/productividad/guardar/<?= $mensajero ?>/<?= $mensa_dia ?>" method="post">
  <!-- Navbar -->
  <!-- Cover -->
  <div class="section-fade-out" style="background-image: url(&quot;https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/fondo2.jpg&quot;); background-position: center bottom; box-shadow: black 0px 0px 4px; text-shadow: black 0px 0px 4px;" id="m-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3">
          <h2 class="">MENSAJERO <?= $mensajero ?> <a style="color:yellow"><?= $mensajero_n ?></a> - FECHA&nbsp;
          
          <?= date("d-m-Y",strtotime($mensa_dia)); ?></h2>
        </div>
      </div>
      <div class="row mb-3 bg-secondary rounded pt-1">
        <div class="col-md-12">
          <h5 class=""><span class="badge badge-pill badge-secondary"><?= $mensa_semana ?></span> mensajeros: <a href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/201/<?= $mensa_dia?>">Pedro</a>, <a href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/202/<?= $mensa_dia?>">Curro</a>, <a href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/204/<?= $mensa_dia?>">Arlés</a>,
          <a href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/208/<?= $mensa_dia?>">Cándido</a>,
          <a href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/210/<?= $mensa_dia?>">Juanje</a>.</h6>
        </div>
      </div>


 



      <div class="row">
        <div class="col-md-3">
          <h6 class="">JORNADA&nbsp;</h6>
          <!--- casilla --->
            <div class="input-group">
              <input name="jornada" step="0.01" type="number" class="form-control" id="jo" value="<?= $mensa_horastrabajadas ?>" placeholder="!!!">
              <div class="input-group-append"><button disabled class="btn btn-primary" type="button"><i class="fas fa-hourglass"></i></i></button></div>
            </div>
          <!--- fin casilla --->
        </div>
        <div class="col-md-3">
          <h6 class="">TIEMPO DEDICADO</h6>
          <!--- casilla --->
            <div class="input-group">
              <input onchange="escribir()" type="number" name="dedicado" step="0.01" class="form-control" id="de" value="<?= $mensa_horasfacturadas ?>"placeholder="!!!">
              <div class="input-group-append"><button disabled class="btn btn-primary" type="button"><i class="fas fa-hourglass-half"></i></i></button></div>
            </div>
          <!--- fin casilla --->
        </div>
        <div class="col-md-3">
          <h6 class="">PAQUETERÍA</h6>
          <!--- casilla --->
            <div class="input-group">
              <input onchange="escribir1()" type="number" name="paqueteria" step="0.01" class="form-control" id="pa" value="<?= $mensa_direcciones ?>"placeholder="!!!">
              <div class="input-group-append"><button  disabled class="btn btn-primary" type="button"><i class="fas fa-boxes"></i></button></div>
            </div>
          <!--- fin casilla --->
        </div>
        <div class="col-md-3">
          <h6 class="">GESTIONES</h6>
          <!--- casilla --->
            <div class="input-group">
              <input onchange="escribir1()" type="number" name="gestiones" step="0.01" class="form-control" id="ge" value="<?= $mensa_gestiones ?>"placeholder="!!!">
              <div class="input-group-append"><button disabled class="btn btn-primary" type="button"><i class="fas fa-parachute-box"></i></button></div>
            </div>
          <!--- fin casilla --->
          <input type="hidden" name="horasproduccion" step="0.01" value="<?= $mensa_horasproduccion ?>" id="parcial1">
          <input type="hidden" name="totalpaquetes" step="0.01"value="<?= $mensa_todo ?>" id="total1">
          <input type="hidden"name="totalratio" step="0.01" value="<?= $mensa_ratio ?>" id="ratio1">

            <script>

                function escribir(){

                    document.getElementById("parcial1").value = parseFloat(document.getElementById("jo").value) - parseFloat(document.getElementById("de").value);

                    document.getElementById("horas").innerHTML = "Tiempo dedicado solo para reparto de paquetería: " + document.getElementById("parcial1").value + " horas.";

                }

                function escribir1(){

                    document.getElementById("total1").value = parseFloat(document.getElementById("pa").value) + parseFloat(document.getElementById("ge").value);

                    document.getElementById("ratio1").value = parseFloat(document.getElementById("total1").value) / parseFloat(document.getElementById("parcial1").value);

                    document.getElementById("productividad_final").innerHTML = "Total productividad del mensajero: " + parseFloat(document.getElementById("ratio1").value).toFixed(2) + " paquete/hora.";

                }
            </script>

        </div>
      </div>


      <!--casillas-->

      <span name="subir" id="subir"></span>
      

      <div class="row">
        <div class="col-md-6">
          <p style="color:yellow;" id="horas" class="lead text-center">...</p>
          <h6 class="text-center"><hr>Albaranes tiempo dedicado:<br><i class="fa fa-arrow-down"></i></h6>
          
          
          <!--- casilla --->
            <div class="form-group row w-100">
            <textarea id="" name="texto1" style="font-family: monospace;" wrap="off" rows="8"  class="form-control w-100" id="exampleTextarea"><?= $mensa_texto1 ?></textarea>
            </div>
          <!--- fin casilla --->
        </div>
        <div  class="col-md-6">
        <p style="color:yellow;" id="productividad_final" class="lead text-center">...</p>
          <h6 class="text-center"><hr>Albaranes de paquetes:<br><i class="fa  fa-arrow-down"></i></h6>
          <!--- casilla --->
          <div class="form-group row w-100">
          <textarea id="" name="texto2" style="font-family: monospace;" wrap="off" rows="8"  class="form-control w-100" id="exampleTextarea"><?= $mensa_texto2 ?></textarea>
          <!--- fin casilla --->
        </div>
        
      </div>

    </div>

    
   

  </div>
 
  <div class="alert alert-secondary m-4" role="alert">
            <div class="form-group">
              <label for="">Comentarios</label>
              <input name="comentarios" type="text" value="<?= $mensa_coment1 ?>" class="form-control"  aria-describedby="helpId" placeholder="">
            </div>
</div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6">
          <pre style="color:yellow;" class="">...
Pedro Fijo
------------------------------  -------------------- -------------------- 
PLATAFORMA->NACEX (x1)          Sin albarán          Precio: €5.-  
REPARTO TARDE->MRW (x1)         Alabrán: 9999        Precio: €58,53.-

Cándido Fijo
------------------------------  -------------------- -------------------- 
PLATAFORMA->NACEX (x1)          Sin albarán          Precio: €5.-
SERV. HSJD->NACEX (x1)          Sin albarán          Precio: €58,75.-

Curro Fijo
------------------------------  -------------------- -------------------- 
SERV. RADZA->NACEX (x1)         Sin albarán          Precio: €60.-
SERV. PERIODICOS->NACEX (x1)    Sin albarán          Precio: €5.-

Arlés Fijo
------------------------------  -------------------- -------------------- 
PLATAFORMA->NACEX (x1)          Sin albarán          Precio: €5.-

Carpetas diario
------------------------------  -------------------- -------------------- 
CARPETAS->MRW (x1)              Sin albarán          Precio: €5.- 


* Cándido: 5 horas.
* Curro: 5,75 horas.
        
          
          </pre>
        </div>

        <div class="col-md-6">
          <pre style="color:aquamarine;" class="">...
Reparto
------------------------------  -------------------- -------------------- 
REPARTO->NACEX (x???)           Sin albarán          Precio: €5.-
REPARTO->MRW (x???)             Sin alabrán          Precio: €0,56.-
          
Devolución
------------------------------  -------------------- -------------------- 
DEVOLUCIÓN->MRW (x1)            Sin albarán          Precio: €5.-
DEVOLUCIÓN->NACEX (x1)          Sin albarán          Precio: €5.-    


Fruta (Martes y Jueves)
------------------------------  -------------------- -------------------- 
FRUTA->VARIOS (x1)              Sin albarán          Precio: €27,97.-

Badulake (Martes y Viernes)
------------------------------  -------------------- -------------------- 
SERVICIO->BADULAKE (x3)         Albarán:             Precio: €15.-

Servicios/Varios
------------------------------  -------------------- -------------------- 
SERVICIO->FRONDA (x1)           Alabrán:             Precio: €5.-
SERVICIO->??? (x??)             Albarán:             Precio: €5.-

FREMAP (Martes y viernes)
------------------------------  -------------------- -------------------- 
SERVICIO->FREMAP (x4)           Albarán:             Precio: €5.-

Troncosos
------------------------------  -------------------- -------------------- 
GESTION->MRW (x?)               Albarán: ??          Precio: 7.-
GESTION->NACEX (x?)             Albarán: ??          Precio: 7,36.-

Inmediatos
------------------------------  -------------------- -------------------- 
INMEDIATO->MRW (x?)             Albarán: ??          Precio: ??.-
INMEDIATO->NACEX (x?)           Albarán: ??          Precio: ??.-
INMEDIATO->ANGEL 24 (x?)        Albarán: ??          Precio: ??.-
INMEDIATO->??? (x?)             Albarán: ??          Precio: ??.-      
          </pre>
        </div>
      </div>
    </div>
  </div>
  <!-- Article style section -->
  <!-- Features -->
  <!-- Features -->
  <!-- Carousel reviews -->
  
  <!-- Call to action -->
  <div class="py-5 bg-dark" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center text-center text-md-left">
          <button type="submit" id="guardar" class="btn btn-block btn-primary">GUARDAR</button>
            </form>

           <div id="myBtn" class="rounded">
                       
            <a name="" id="" class="btn btn-secondary" href="#guardar" role="button">GUARDAR</a>
            <a name="" id="" onclick="topFunction()" class="btn btn-primary" href="#subir" role="button">Arriba</a>

           </div>
            
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/js/smooth-scroll.js"></script>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      //document.body.scrollTop = 20; // For Safari
      //document.documentElement.scrollTop = 20; // For Chrome, Firefox, IE and Opera
      //location.hash = "#" + subir;
      //alert('canuto');
    }
</script>

</body>

</html>