echo'
        <!doctype html>
        <html lang="es">
          <head>
            <title>Turnos Gabinet</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/litera/bootstrap.min.css">
          </head>
          <body><big><big>';

          $url =  "http://gsx2json.com/api?id=1koZsoKa9QoxSdnXXsbP2YYLwDyvTA-DkIBc3lIz8mWo&columns=false&sheet=1&q="
          .$dia."/"
          .$mes."/"
          .$anyo; 

          $data = file_get_contents($url);
          $tabla = json_decode($data, false);
          
          //print_r($tabla);

          echo '<div class="container-fluid">';


          echo '<div style="background-color:#000; width: 900px;" class="p-2 m-2 rounded" id="capture_0"><h1 class="text-center text-light">AVISOS IMPORTANTES <br><small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small>
          
          
          </h1>


          <textarea rows="10" class="form-control form-control-lg">'.$tabla->rows[0]->observaciones1.' '.$tabla->rows[0]->observaciones1.'</textarea>

          <p class="mt-2 text-light text-center"> Contacto: 637 03 38 45 <small>//615 890 787</small> <br><img class="img-fluid" src="https://www.angel24.es/assets/img/logoB.png"></p>

          <div class="border border-warning m-3">
          <br>ERROR EN LAS HOJAS DE FIRMAS:
          <br>Nos ha llegado un reporte de un error encontrado en la HOJA DE FIRMAS del MES DE MARZO (PRIMERA QUINCENA) donde no aparecen correctamente los días señalizados en el calendario semanal.<br>
          <br>PARA SOLUCIONAR ESTO, escribe correctamente el día en el apartado "COMENTARIOS", justo debajo de tus firmas. 
          <br>Gracias y disculpar las molestias ocasionadas.
          <br>
          </div>

          

          <p class="text-center text-secondary">Correo: friera@angel24.es <small>//srigo@gabinetbalear.com</small></p> 
          
          
          </div>';


          echo '<button type="button" name="" id="capturar_0" class="m-1 btn btn-primary" btn-lg btn-block">Descargar [AVISOS]</button>';    
          
          echo '<a style="display:none;" name="capturar_0b" id="capturar_0b" class="m-1 hidden btn btn-secondary" href="##" role="button">Repetir</a>';


          //PRINCIPIO

          echo '<div style="background-color:#ffccff; width: 900px;" class="p-2 m-2 rounded" id="capture_1">
           <div class="media">
            <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/ib3.png" class="mr-3" height="98">
            <div class="media-body">
              <h4 class="mt-0"><strong>[TV]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
              <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->tv.'</textarea>
            </div>
          </div> <br>
          <p class="text-right"><strong>Ordenanza: </strong>'.$tabla->rows[0]->ordenanza.'</p>



          <table  class="table  table-dark  table-bordered">
            <caption>Gabinet Balear</caption>
            <thead class="thead-inverse">
              <tr>
                <th></th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle" scope="row"><strong>Turno de<br> Mañana</strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvlumm.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvmamm.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvmimm.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvjumm.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvvimm.'</td>
                  <td class="align-middle" ROWSPAN="2" >'.$tabla->rows[0]->tvsa.'</td>
                </tr>
                <tr>
                  <td class="align-middle" scope="row"><strong>Turno de<br> Tarde</strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvlutt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvmatt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvmitt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvjutt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->tvvitt.'</td>
                  
                </tr>
              </tbody>
          </table>

          <hr>

          <div class="media">
            <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/ib3.png" class="mr-3" height="98">
            <div class="media-body">
              <h4 class="mt-0"><strong>[RADIO]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
              <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->radio.'</textarea>
            </div>
          </div> <br>

          <table class="table  table-dark  table-bordered">
            <caption>Gabinet Balear</caption>
            <thead class="thead-inverse">
              <tr>
                <th></th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle" scope="row"><strong>Turno de<br> Mañana</strong></td>
                  <td class="align-middle"  >'.$tabla->rows[0]->ralumm.'</td>
                  <td class="align-middle"  >'.$tabla->rows[0]->ramamm.'</td>
                  <td class="align-middle"  >'.$tabla->rows[0]->ramimm.'</td>
                  <td class="align-middle"  >'.$tabla->rows[0]->rajumm.'</td>
                  <td class="align-middle"  >'.$tabla->rows[0]->ravimm.'</td>
                  <td class="align-middle" ROWSPAN="2" >'.$tabla->rows[0]->rasá.'</td>
                </tr>
                <tr>
                  <td class="align-middle" scope="row"><strong>Turno de<br> Tarde</strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->ralutt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->ramatt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->ramitt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->rajutt.'</td>
                  <td class="align-middle" >'.$tabla->rows[0]->ravitt.'</td>
                  
                </tr>
              </tbody>
          </table>

          <hr>

          <small>
          <div class="form-group">
            <label for="">IB3 Ibiza y Menorca:</label>
            <textarea class="form-control" name="" id="" rows="3">Sin novedades</textarea>
          </div>
          </small>


           </div>';

          echo '<button type="button" name="" id="capturar_1" class="m-1 btn btn-primary" btn-lg btn-block">Descargar [IB3]</button>';    
          
          echo '<a style="display:none;" name="capturar_1b" id="capturar_1b" class="m-1 hidden btn btn-secondary" href="##" role="button">Repetir</a>';


          //conselleries

          echo '<div style="background-color:#ffcccc; width: 900px;" class="p-2 m-2 rounded" id="capture_2">
          <div class="media">
          <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/ib3.png" class="mr-3" height="98">
          <div class="media-body">
            <h4 class="mt-0"><strong>[CONSELLERIES]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
            <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->conselleries.'</textarea>
          </div>
        </div> <br>


        <h2><hr></h2>
        <p>
          <dl class="row">
          <dt class="col-sm-4">De Lunes a Viernes:</dt>
          <dd class="col-sm-8"><p>'.$tabla->rows[0]->conscdelmarentresemana.'</p></dd>
        
          
          </dl>
        </p>

        <h2><hr></h2>
        <p>
          <dl class="row">
          <dt class="col-sm-4">De Lunes a Viernes:</dt>
          <dd class="col-sm-8"><p>'.$tabla->rows[0]->concrespímm.'</p></dd>
          
        
        
          </dl>
        </p>  


        <h2><hr></h2>
        <p>
          <dl class="row">
          <dt class="col-sm-4">De Lunes a Viernes:</dt>
          <dd class="col-sm-8"><p>'.$tabla->rows[0]->consdep1mm.' y '.$tabla->rows[0]->consdep2mm.'</p></dd>
          
        
        
          </dl>
        </p>  
        
        
        
        
      
          </div>';

          echo '<button type="button" name="" id="capturar_2" class="m-1 btn btn-primary" btn-lg btn-block">Descargar [CONSELLERIES]</button>';    
          
          echo '<a style="display:none;" name="capturar_2b" id="capturar_2b" class="m-1 hidden btn btn-secondary" href="##" role="button">Repetir</a>';    
          
          //banca march

          echo '<div style="background-color:#ffffcc; width: 900px;" class="p-2 m-2 rounded" id="capture_3">
           <div class="media">
            <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/otros.png" class="mr-3" height="98">
            <div class="media-body">
              <h4 class="mt-0"><strong>[BANCA MARCH]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
              <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->avingudes.'</textarea>
            </div>
          </div> <br>

          <table class="table  table-dark  table-bordered">
            <caption>Gabinet Balear</caption>
            <thead class="thead-inverse">
              <tr>
                <th></th>
                <th>AVINGUDES</th>
                <th> -- </th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle" >Lunes</td>
                  <td class="align-middle" >'.$tabla->rows[0]->avlu.'</td>
                  <td ROWSPAN="5"> -- </td>
                </tr>
                <tr>
                  <td class="align-middle" >Martes</td>
                  <td class="align-middle" >'.$tabla->rows[0]->avma.'</td>   
                </tr>
                <tr>
                  <td class="align-middle" >Miércoles</td>
                  <td class="align-middle" >'.$tabla->rows[0]->avmi.'</td>       
                </tr>
                <tr>
                  <td class="align-middle" >Jueves</td>               
                  <td class="align-middle" >'.$tabla->rows[0]->avju.'</td>         
                </tr>
                <tr>
                  <td class="align-middle" >Viernes</td>             
                  <td class="align-middle" >'.$tabla->rows[0]->avvi.'</td>
                </tr>                                                                
              </tbody>
          </table>


           </div>';

          echo '<button type="button" name="" id="capturar_3" class="m-1 btn btn-primary" btn-lg btn-block">Descargar [BANCA MARCH]</button>';    
          
          echo '<a style="display:none;" name="capturar_3b" id="capturar_3b" class="m-1 hidden btn btn-secondary" href="##" role="button">Repetir</a>';  
          
          
          //mensajeria

          echo '<div style="background-color:#ccffcc; width: 900px;" class="p-2 m-2 rounded" id="capture_4">
           <div class="media">
            <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/mensa.png" class="mr-3" height="98">
            <div class="media-body">
              <h4 class="mt-0"><strong>[MENSAJERIA]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
              <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->mensajería.'</textarea>
            </div>
          </div> <br>

          <table class="table  table-dark  table-bordered">
            <caption>Gabinet Balear</caption>
            <thead class="thead-inverse">
              <tr>
                <th></th>
                <th>De Lunes a Viernes:</th>
                <th>Extra</th>
                
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle" scope="row"><strong>1. </strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->mefurgomm.'</td>
                  <td ROWSPAN="6" class="align-middle" >'.$tabla->rows[0]->meextrasmm.'<br><br><textarea style="background-color:grey;" class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->meextrastt.'</textarea></td>
                </tr>

                <tr>
                  <td class="align-middle" scope="row"><strong>2. </strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->metric1mm.'</td>
                </tr>

                <tr>
                  <td class="align-middle" scope="row"><strong>3. </strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->metric2mm.'</td>
                </tr>

                <tr>
                  <td class="align-middle" scope="row"><strong>4. </strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->meemoto1mm.'</td>
                </tr>

                <tr>
                  <td class="align-middle" scope="row"><strong>5. </strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->meemoto2mm.'</td>
                </tr>

                <tr>
                  <td class="align-middle" scope="row"><strong>6. </strong></td>
                  <td class="align-middle" >'.$tabla->rows[0]->meemoto3mm.'</td>
                </tr>

              </tbody>
          </table>

          <p class="text-center">Encargado de mantenimiento: '.$tabla->rows[0]->memntnmntmm.'.</p> <hr>

          <div class="media">
            <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/motor.png" class="mr-3" height="98">
          <div class="media-body">
            <h4 class="mt-0"><strong>[TALLERES VILARET]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
            <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->talleres.'</textarea>
          </div>
          </div> <br>          

          <table class="table  table-dark  table-bordered">
          <caption>Gabinet Balear</caption>
          <thead class="thead-inverse">
            <tr>
              
          
            </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle" ROWSPAN="2">De Lunes a Viernes:</td>
                <td class="align-middle" >'.$tabla->rows[0]->vilaret1mt.'</td>

              </tr>
              <tr>
                
                <td class="align-middle" >'.$tabla->rows[0]->vilaret2mt.'</td>   
              </tr>
                                                                       
            </tbody>
        </table> <hr>

        <h3>Otros:</h3>
   
        
        
        <p>Almacén Túnel: <span class="m-1 badge badge-dark"><strong>'.$tabla->rows[0]->atunel.'</strong></span><textarea style="background-color:#ccffcc;" class="p-1 form-control blk" name="" id="" rows="1">'.$tabla->rows[0]->tunel.'</textarea></p>

        <p>Mac Hoteles: <span class="m-1 badge badge-dark"><strong>'.$tabla->rows[0]->hmac.'</strong></span><textarea style="background-color:#ccffcc;" class="p-1 form-control blk" name="" id="" rows="1">'.$tabla->rows[0]->machoteles.'</textarea></p>




        </div>';

          echo '<button type="button" name="" id="capturar_4" class="m-1 btn btn-primary" btn-lg btn-block">Descargar [MENSAJERIA], [TALLERES VILARET] y Otros</button>';    
          
          echo '<a style="display:none;" name="capturar_4b" id="capturar_4b" class="m-1 hidden btn btn-secondary" href="##" role="button">Repetir</a>';
		  

          //print_r($tabla['row']);



          //contadores -emaya

          

          echo '<div style="background-color:#D6EAF8; width: 900px;" class="p-2 m-2 rounded" id="capture_5">
           <div class="media">
            <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/otros.png" class="mr-3" height="98">
            <div class="media-body">
              <h4 class="mt-0"><strong>[CONTADORES]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
              <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->avingudes.'</textarea>
            </div>
          </div> <br>

            <h2> DATOS EMAYA </h2>

            <table class="table table-dark">
              <thead>
                <tr>
                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#D6EAF8">01</pre></h2></h1></th>
                  
                  <th scope="col"><u>'.$tabla->rows[0]->m01.'<</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m01coment.'</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m01mul.' de 5</pre></h2></th>
                  
                </tr>

                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#D6EAF8">02</pre></h2></h1></th>
                  
                  <th scope="col"><u>'.$tabla->rows[0]->m02.'</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m02coment.'</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m02mult.' de 5</pre></h2></th>

                </tr>

                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#D6EAF8">03</pre></h2></h1></th>
                  
                  <th scope="col"><u>'.$tabla->rows[0]->m03.'</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m03coment.'</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m03mult.' de 5</pre></h2></th>

                </tr>  

                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#D6EAF8">04</pre></h2></h1></th>
                  
                  <th scope="col"><u>'.$tabla->rows[0]->m04.'</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m04coment.'</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m04mult.' de 5</pre></h2></th>

                </tr>     
                
                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#D6EAF8">05</pre></h2></h1></th>
                  
                  <th scope="col"><u>'.$tabla->rows[0]->m5.'</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m5coment.'</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m5mult.' de 5</pre></h2></th>

                </tr>    
                
                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#D6EAF8">06</pre></h2></h1></th>
                  
                  <th scope="col"><u>'.$tabla->rows[0]->m6.'</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m6coment.'</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->m6mult.' de 5</pre></h2></th>

                </tr>  
                
                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#D6EAF8">SS</pre></h2></h1></th>
                  
                  <th scope="col"><u>'.$tabla->rows[0]->mss1.'</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->mms1coment.'</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#D6EAF8">'.$tabla->rows[0]->mss1mult1.' de 5</pre></h2></th>

                </tr>   
                
                <tr><th COLSPAN="3">TOTAL HORAS '.$tabla->rows[0]->totalesemaya.'<th></tr>

              </thead>
             
            </table>

          </div>';

          echo '<button type="button" name="" id="capturar_5" class="m-1 btn btn-primary" btn-lg btn-block">Descargar [CONTADORES] (REAL)</button>';    
          
          echo '<a style="display:none;" name="capturar_5b" id="capturar_5b" class="m-1 hidden btn btn-secondary" href="##" role="button">Repetir</a>';  



          //CONTADORES EMAYA FAKE

          echo '<div style="background-color:#996699; width: 900px;" class="p-2 m-2 rounded" id="capture_7">
           <div class="media">
            <img src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/otros.png" class="mr-3" height="98">
            <div class="media-body">
              <h4 class="mt-0"><strong>[CONTADORES]</strong> <small>Semana del '.$tabla->rows[0]->del.' al '.$tabla->rows[0]->al.'</small></h4>
              <textarea class="p-1 form-control blk" name="" id="" rows="2">'.$tabla->rows[0]->avingudes.'</textarea>
            </div>
          </div> <br>

            <h4> Para: aperez@emaya.es </h4>
            <h4> De: "Gabinet Balear" </h4>

            <table class="table table-dark">
              <thead>
                <tr>
                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#996699">01</pre></h2></h1></th>
                  
                  <th scope="col"><u>CÁNDIDO PAULO</u><br><h2><pre style="color:#996699">LU, MA, MI, JU, VI.</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#996699">5 de 5</pre></h2></th>
                  
                </tr>

                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#996699">02</pre></h2></h1></th>
                  
                  <th scope="col"><u>MIGUEL RODRIGUEZ</u><br><h2><pre style="color:#996699">LU, MA, MI, JU, VI.</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#996699">5 de 5</pre></h2></th>

                </tr>

                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#996699">03</pre></h2></h1></th>
                  
                  <th scope="col"><u>ANTONIO BARRIENTOS</u><br><h2><pre style="color:#996699">LU, MA, MI, JU, VI.</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#996699">5 de 5</pre></h2></th>

                </tr>  

                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#996699">04</pre></h2></h1></th>
                  
                  <th scope="col"><u>ANTONIO SÁNCHEZ</u><br><h2><pre style="color:#996699">LU, MA, MI, JU, VI.</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#996699">5 de 5</pre></h2></th>

                </tr>     
                
                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#996699">05</pre></h2></h1></th>
                  
                  <th scope="col"><u>RAFAEL PASTOR</u><br><h2><pre style="color:#996699">LU, MA, MI, JU, VI.</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#996699">5 de 5</h2></th>

                </tr>    
                
                <tr>

                  <th  scope="col"><u>Máquina:</u><br><h2><pre style="color:#996699">06</pre></h2></h1></th>
                  
                  <th scope="col"><u>JULIAN PÉREZ</u><br><h2><pre style="color:#996699">LU, MA, MI, JU, VI.</pre></h2></th>
                  
                  <th class="text-center" scope="col"><u>Días Trabajados:</u><br><h2><pre style="color:#996699">5 de 5</pre></h2></th>

                </tr>  
                
               
                
                <tr><th COLSPAN="3">TOTAL HORAS: 30.-<th></tr>

              </thead>
             
            </table>

          </div>';

          echo '<button type="button" name="" id="capturar_7" class="m-1 btn btn-primary" btn-lg btn-block">Descargar [CONTADORES]</button>';    
          
          echo '<a style="display:none;" name="capturar_7b" id="capturar_7b" class="m-1 hidden btn btn-secondary" href="##" role="button">Repetir</a>';            

          //fin banca march
          
          
          echo '</div><!-- div container-fluid-->';
          echo '    
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

            <!--<script src="https://code.jquery.com/jquery-2.1.1.js"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/js/html2canvas.js"></script>';


          echo '
          <script>
          //tv
          $("#capturar_1").on(`click`, function(){

              html2canvas(document.querySelector("#capture_1")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_1b").attr("download", "tv_'.$dia.'-'.$mes.'.png").attr("href", newData);
                document.getElementById("capturar_1b").style.display = "inline"
                document.getElementById("capturar_1b").click();
            }); 
          });
          </script>';

          echo '
          <script>
          //tv
          $("#capturar_2").on(`click`, function(){

              html2canvas(document.querySelector("#capture_2")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_2b").attr("download", "radio_'.$dia.'-'.$mes.'.png").attr("href", newData);
                document.getElementById("capturar_2b").style.display = "inline"
                document.getElementById("capturar_2b").click();
            }); 
          });
          </script>';          
            
          echo '
          <script>
          //avingudes
          $("#capturar_3").on(`click`, function(){

              html2canvas(document.querySelector("#capture_3")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_3b").attr("download", "AVINGUDES_'.$dia.'-'.$mes.'.png").attr("href", newData);
                document.getElementById("capturar_3b").style.display = "inline"
                document.getElementById("capturar_3b").click();
            }); 
          });
          </script>';
         
          echo '
          <script>
          //tv
          $("#capturar_4").on(`click`, function(){

              html2canvas(document.querySelector("#capture_4")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_4b").attr("download", "MENSAJERIA_'.$dia.'-'.$mes.'.png").attr("href", newData);
                document.getElementById("capturar_4b").style.display = "inline"
                document.getElementById("capturar_4b").click();
            }); 
          });
          </script>';


          echo '
          <script>
          //tv
          $("#capturar_5").on(`click`, function(){

              html2canvas(document.querySelector("#capture_5")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_5b").attr("download", "MENSAJERIA_'.$dia.'-'.$mes.'.png").attr("href", newData);
                document.getElementById("capturar_5b").style.display = "inline"
                document.getElementById("capturar_5b").click();
            }); 
          });
          </script>';

          echo '
          <script>
          //tv
          $("#capturar_7").on(`click`, function(){

              html2canvas(document.querySelector("#capture_7")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_7b").attr("download", "MENSAJERIA_'.$dia.'-'.$mes.'.png").attr("href", newData);
                document.getElementById("capturar_7b").style.display = "inline"
                document.getElementById("capturar_7b").click();
            }); 
          });
          </script>';

          echo '
          <script>
          //tv
          $("#capturar_0").on(`click`, function(){

              html2canvas(document.querySelector("#capture_0")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_0b").attr("download", "MENSAJERIA_'.$dia.'-'.$mes.'.png").attr("href", newData);
                document.getElementById("capturar_0b").style.display = "inline"
                document.getElementById("capturar_0b").click();
            }); 
          });
          </script>';

          echo'
              </body>
          </html>';