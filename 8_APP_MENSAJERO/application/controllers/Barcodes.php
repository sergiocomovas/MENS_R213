<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barcodes extends CI_Controller {

    public function albaran(){

        echo '
        <!doctype html>
        <html lang="en">
          <head>
            <title>Barcode</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/8d55c2b16b.js"></script>

 
          </head>
          <body>

          <!--swall-->

       

          <script>

            window.onload = function() {
              var input = document.getElementById("procesar").focus();
            }

            function activar(){

              document.getElementById("boton1").disabled = false;

            }
            

            function coso(){
              var input = document.getElementById("procesar").focus();
            }
          </script>



          <style>


         

          
  

          input:checked + label{
            box-shadow: 0 0 0 3px #007bff;
    
          }
        
          ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: black !important;
            opacity: 0.1 !important; /* Firefox */
          }
          
          ::-ms-input-placeholder { /* Microsoft Edge */
            color: black !important;
            opacity: 0.1 !important;
          }

          </style>

          

            <form action="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Barcodes/procesar"  method="post" accept-charset="UTF-8">
            <div class="container pt-3">
                
              <div class="form-group">

                  <div class="row" >
                  
                  
                   <div class="col">
                   <label for="procesar">
                    <h3>MARCA LOS CÓDIGOS</h3>
                    </label>  
                   </div>

                   <div class="col-pull pr-3">
                    <p>

                    <button class="btn btn-link btn-outline-primary" type="button" data-toggle="collapse" onclick="coso()" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      Ayuda/Ejemplos
                    </button>
                  </p>
                        
                   
                   </div>    
                
              </div>
              

         
                  <div class="collapse mb-2" id="collapseExample">
                    <div class="card card-body">
                      1. Marca, en cada linea, un código de barras distinto.<br>
                      2. Opcionalmente puedes añadir información complementaria abriendo paréntesis y cerrando paréntesis. <br><br>
                      Ejemplos: <kbd class="mb-1">01234567890123001 (CALLE FONERS 41)</kbd><kbd class="mb-1">98765432104321001</kbd>
                      <kbd class="mb-1">77665544332211001 (IR ANTES DE LAS 12H, TIENE REEMBOLSO)</kbd>
                    </div>
                  </div>
                  <textarea style="background-color:#E0ECF8"class="form-control" name="procesar" placeholder="MARCA UN CÓDIGO EN CADA LÍNEA AQUÍ..." id="procesar" oninput="activar()" rows="12"></textarea>
                </div>

                
             

                <!-- Button trigger modal -->
                <button id="boton1" type="button" disabled="disabled" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#modelId">
                  CONTINUAR
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Compañía de trasporte</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-check ">

                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="comp" checked value="andrea" id="a1"> 
                            <label class="pr-2" for="a1">MRW ANDREA DORIA</label>
                          </label>

                          <div class="m-4"></div>

                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="comp"  value="valldemossa" id="a2"> 
                            
                            <label class="pr-2" for="a2">MRW CARRETERA DE VALLEMOSSA</label>
                          </label>

                          <div class="m-4"></div>

                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="comp" value="nacex" id="a3"> <label for="a3" class="px-2" style="background-color:orange;color:#FFF;">NACEX</label>
                          </label>

                          <div class="m-4"></div>

                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="comp"  value="mensajeria" id="a4"> <label for="a4"  class="px-2" style="background-color:green; color:#FFF;"> MENSAJERÍA RESPONSABLE</label>
                          </label>

                          <div class="m-4"></div>

                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="comp"  value="NINGUNA" id="a5"><label for="a5" class="pr-2"> NINGUNA</label>
                          </label>

                        </div>
                      </div>
                      <div class="modal-footer">
                      <!-- AAA -->
                      <button 
                      type="submit" class="pr-4 pl-4 btn btn-primary btn-block" >Hacer Albaranes</button>
                      </div>
                    </div>
                  </div>
                </div>


            </div>
            </form>



              
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </body>
        </html> ';

    }

    public function prueba(){

        echo "asdfsadf";
    }

    public function procesar()
    {

        $comp = $this->input->post('comp');

        switch ($comp) {
          case "andrea":
            $valor="MRW C/ANDREA DORIA 9A <br> TELÉFONO: 971 73 21 41";
            break;

          case "valldemossa":
            $valor="MRW C/CARRETERA DE VALLDEMOSSA, 51 <br>TELÉFONO:  971 763 737";
            break;

          case "nacex":
            $valor="NACEX C/SETZE DE JULIOL, 49<br> TELÉFONO: 971 222 232";
            break;
  
          case "mensajeria":
            $valor="MENSAJERÍA RESPONSABLE C/FONERS 41 <br> TELÉFONO: 971 467 600";
            break;
          

          default:
             $valor="<br>¡VOLVEREMOS A PASAR!";
              break; 
        }

        
        $procesar = $this->input->post('procesar');
        $datos = array_values(array_filter(explode(PHP_EOL, $procesar)));
        if (is_null($datos)){$datos="____________";}
        //$datos = preg_replace("/[\r\n|\n|\r]+/", PHP_EOL, $datos);
        //$datos=array_filter($datos, "strlen");
        //$datos = array_values(array_diff($datos, array('')));

        //quitar las vacias: 
        $new_datos = NULL;
        
        foreach($datos as $key){
      
          if ($key!=="\r"){
          $new_datos[] = $key;}
        
        }
       


       echo'
       
       <!doctype html>
       <html lang="en">
         <head>
           <title>Imprimir Albaranes</title>
           <!-- Required meta tags -->
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
           <!-- Bootstrap CSS -->
       
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
           <script src="https://kit.fontawesome.com/8d55c2b16b.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         </head>
         <body>
         <style>


         .swal-text {
          background-color: #FEFAE3;
          padding: 17px;
          border: 1px solid #F0E1A1;
          display: block;
          margin: 22px;
          text-align: center;
          color: #61534e;
        }

            @media all {
                div.saltopagina{
                display: none;
                }
            }
                
            @media print{
                div.saltopagina{
                display:block;
                page-break-before:always;
                }
            }
         </style>';

         echo '<script>$(document).ready(function() {
          swal("¡Recuerda!", "Comprueba que la IMPRESORA esté configurada para imprimir por un solo lado.", "info").then(() => {

            window.print();

          });
          window.onafterprint = function(){

            var coso = document.createElement("a"); 
            document.createElement("a");
            coso.setAttribute("href", "https://mymaps.google.es");
            coso.setAttribute("target", "_blank");
            var newTexto = document.createTextNode("Pulsa aquí para acceder a Google My Maps"); 
            coso.appendChild(newTexto);

            swal({
              content: coso,
              buttons: false,
            }
          
          );
         }

      });</script>';


         foreach ($new_datos as $codigo) {

            $codigo=trim($codigo);
            $codigo=str_replace("  "," ",$codigo);
            $codigo=str_replace("  "," ",$codigo);
            $codigo=str_replace(" (","(",$codigo);
            $mystring = $codigo;
            $findme   = '(';
            $pos = strpos($mystring, $findme);
            if ($pos === false) {
                $texto = "-----";
                $imagen = $codigo;

            } else {
                $pos = $pos; 
                $texto = substr($codigo,$pos);
                $imagen = substr($codigo,0,$pos);
            }
            
           echo '
           

           <div class="text-center h1"><em>JUSTIFICANTE DE ENTREGA  '.$imagen.'</em></div>
           <div class="row">
               
                <div class="col text-center">
                <br>'.date("d-m-Y").'<br>
                    <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Barcodes/codigo/'.$imagen.'">

                    <br><br><big>'.$texto.'</big>


                    <br><br><big>(Opcional) Indique otros detalles del paquete:</big><br><br>
                </div>
                <div class="col text-center border border-primary">
                    <h4>PARTICULAR</h4>
                    <h3><i class="fas fa-2x fa-deaf"></i><br>POR FAVOR, <strong>COMPLETE</strong> CON LOS <strong>DATOS</strong>    SOLICITADOS<br><br>
                    
                    
                    1. NOMBRE Y APELLIDOS<br><br><br><pre>_______________<i class="fas fa-pencil-alt"></i></pre><br>
                    2. DNI<br><br><br><pre>_______________<i class="fas fa-pencil-alt"></i></pre><br>
                    3. FIRMA<br><br><br><pre>_______________<i class="fas fa-pencil-alt"></i></pre><br>
                    </h3>


                </div>
                <div class="col text-center">
                    <h4>SOLO EMPRESAS</h43>
                   
                    
                    <pre><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>______SELLO______<br><br><br><br></pre>
                    
                    </h3>

                    
                </div>


           </div><hr>
        
           <div class="text-center">
           <h6>Sr. Mensajero, si no ha podido efecturar la entrega =POR FAVOR= complete el con el nombre y apellidos del <strong>destinatario</strong> y deje el siguiente <strong>AVISO</strong> por debajo de su puerta: </h6><hr>
           <br><br><br>---<i class="fas fa-cut"></i>---<br><br><br><h3>AVISO</h3>
           A LA ATENCIÓN DE:<br>

           <div class="border border-primary m-4"><br><br>(Indique aquí el nombre de la persona a la que va dirigida el paquete)</div>

           Estimando cliente:<br>Hoy, '.date("d-m-Y").', hemos intentado entregar su paquete nº <big><strong>'.$imagen.'</strong></big> pero no hemos podido.</br>

           POR FAVOR, póngase en contacto con su compañía de trasporte:<br>

           <code>'.$valor.' 
           </code></div>
           
           <div class="saltopagina"></div>';
            

           echo "";
        }
             

         echo'
           <!-- Optional JavaScript -->
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       
           <!-- jQuery first, then Popper.js, then Bootstrap JS -->
           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         </body>
       </html>
       
       ';
    }

    public function index()
	{
		//I'm just using rand() function for data example
		$temp = rand(10000, 99999);
		$this->set_barcode($temp);
	}
	
	public function codigo($code)
	{
        
   //load library
		$this->load->library('zend');
		//load in folder Zend
		$this->zend->load('Zend/Barcode');
		//generate barcode

		Zend_Barcode::render('code128', 'image', array('text'=>$code, 'barHeight'=> 74, 'factor' => 2), array());
    }

    

}