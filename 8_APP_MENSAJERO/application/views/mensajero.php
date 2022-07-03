<!doctype html>
<html lang="en">
  <head>
	<title>Mensajeros</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--tonglez-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!---->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>

  <style>

    /*.fixed-top {
    max-height: 100vh;
    overflow: auto;
    }*/

   
    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        background-color: yellow;
        padding: 50px;
        font-size: 20px;
    }

  </style>


 
  </head>
  <body><big><big>
	  




    <div class="container-fluid">
        <!--añadir-->

        
        <div class="card m-1">
            <div class="card-header">
                <h4>Hacer Informe</h4>
            </div>
            <div class="card-body">
                
            
            
            <!--formulario-->
            <div class="form-group">
                  <label for="mensajero">Mensajero</label>
                  <input type="text" name="mensajero" id="mensajero" class="form-control" aria-describedby="HelpMensajero" value="<?= $mensajero ?>" readonly>
                  
            </div>
            

            <div class="form-group">
              <label for="fecha">Fecha de hoy</label>
              <input type="text" name="fecha" id="fecha" class="form-control" placeholder="Fecha" aria-describedby="HelpFecha" value="<?= $fecha ?>" readonly >
              
            </div>

            <div class="form-group">
              <label for="vehiculo">Vehículo</label>
              <select multiple class="bg-warning form-control form-control-lg" name="vehiculo" id="vehiculo">
                <option name="furgo" class="m-3">Furgo</option>
                <option name="moto" class="m-3">Moto</option>
                <option name="triciclo" class="m-3">Triciclo</option>
                <option name="cercanía" class="m-3">Cercanía</option>
                
              </select>
            </div>   
            
            
            <!--extra-->


            </div>

            <div style="z-index:1000; padding-top: 10px; padding-bottom: 10px;" class="bg-warning"> <h3 class="p-4 text-primary">Apartados:</h3></div>

            
            <div style="z-index:1000; padding-top: 10px; padding-bottom: 10px;" class="sticky bg-warning">
                
            
            <small><small><div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a onclick="goToAnchor('goToPage')" class="my-1 nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">1. REPARTO NORMAL <span id="demo-di1"></span></a>
                <a onclick="goToAnchor('goToPage')" class="my-1 nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">2.  INMEDIATOS <span id="demo-di2"></a>
                <a onclick="goToAnchor('goToPage')" class="my-1 nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">3. SERVICIOS FIJOS <span id="demo-di3"></span></a>
                <a onclick="goToAnchor('goToPage')" class="my-1 nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">4. POR TIEMPO/GESTIONES <span id="demo-di4"></a>
            
            </div></small></small>

            </div>

            <a name="goToPage"></a>
            <script>

            function goToAnchor(anchor) {
                var loc = document.location.toString().split('#')[0];
                document.location = loc + '#' + anchor;
                return false;
            }
            </script>
           

            <br><br><br><br><br><br>
          
            
                <div class="p-3 bg-primary rounded-top text-light  tab-content" id="v-pills-tabContent">
                    
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <!--reparto normal-->



                    <div class="form-group">
                      <label for="numero-mrw">Reparto normal: número de paquetes <span id="demo-mrw"></span> de MRW</label>
                      <input type="range" value="0" class="form-control" name="numero-mrw" id="numero-mrw" aria-describedby="Helpnumero-mrw" placeholder="numero-mrw">
                    </div>

                    <div class="form-group">
                      <label for="numero-nacex700">Reparto normal: número de paquetes <span id="demo-nacex700"></span> de Nacex Mauricio</label>
                      <input type="range" value="0" class="form-control" name="numero-nacex700" id="numero-nacex700" aria-describedby="Helpnumero-nacex700" placeholder="numero-nacex700">
                    </div>

                    <div class="form-group">
                      <label for="numero-nacex705">Reparto normal: número de paquetes <span id="demo-nacex705"></span> de Nacex Angélica</label>
                      <input type="range" value="0" class="form-control" name="numero-nacex705" id="numero-nacex705" aria-describedby="Helpnumero-nacex705" placeholder="numero-nacex705">
                    </div>

                    <div class="form-group">
                      <label for="numero-otros">Reparto normal: número de paquetes <span id="demo-otros"></span> de Otros/Xisca</label>
                      <input type="range" value="0" class="form-control" name="numero-otros" id="numero-otros" aria-describedby="Helpnumero-otros" placeholder="numero-otros">
                    </div>



                    <!--boton de añadir a la lista-->

                    <a class="enlaceajax btn btn-block btn-warning btn-lg" 
                        href="#destino1" 
                        role="button" 
                        data-mensajero="<?= $mensajero ?>" 
                        data-fecha="<?= $fecha ?>"  
                                        
                        > Añadir a Reparto Normal </a>

                        <script>

                        $(document).ready(function(){ 
                        $(".enlaceajax").click(function(evento){

                        evento.preventDefault();
                        //var select = $(this).attr('data-select');
                        
                        var invent1 = '#numero-mrw';
                        var invent2 = '#numero-nacex700'; 
                        var invent3 = '#numero-nacex705';
                        var invent4 = '#numero-otros';

                        $.get("https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Tab1", {
            
                            date_invent1: $(invent1).val(),
                            date_invent2: $(invent2).val(),
                            date_invent3: $(invent3).val(),
                            date_invent4: $(invent4).val(),
                            
                            //orden_num: $(this).attr('data-orden'), 
                            date_fecha: $(this).attr('data-fecha'), 
                            date_mensajero: $(this).attr('data-mensajero')}, 
            
                        function(respuesta){
				            $("#destino1").html(respuesta);
               
		                    })
                        });
                    })

                    </script>


                    <div class="text-center m-3" id="destino1"></div>


                    </div><!--fin del primer tab, reparto normal-->
                
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


            

                        <div class="form-group">
                          <label for="">Número de Servicios Inmediatos:</label>
                          <select onchange="multiplicarInputs(this)" class="form-control form-control-lg bg-warning" name="" id="">
                            <option selected disabled value="0">Selecciona</option>
                            <option value ="1">1</option>
                            <option value ="2">2</option>
                            <option value ="3">3</option>
                            <option value ="4">4</option>
                            <option value ="5">5</option>
                          </select>
                        </div>

                        <div id="divMultiInputs"><br><br><br><br><br></div>

                        <script>

                            function multiplicarInputs(text){
                               
                                var num= text.value
                                var div='';
                                for (var i=0;i<num;i++){ 
                                    var cont=i+1;
                                    div+="<hr> <h3 class='text-warning'>Inmediato Núm: "+cont+"</h3> <div class= 'form-group '> <label for= 'cliente '>Cliente</label> <input type= 'text ' class= 'form-control ' name= 'cliente"+cont+"' id= 'cliente"+cont+"' aria-describedby= 'HelpCliente ' placeholder= 'Nombre del Cliente '> </div> <div class= 'form-group '> <label for= 'cliente '>Direciones</label> <input type= 'number ' min= '0 ' class= 'form-control ' name= 'direcciones"+cont+"' id= 'direcciones"+cont+"' aria-describedby= 'HelpCliente '> </div> <div class= 'form-group '> <label for= 'cliente '>Código de Referencias</label> <input type= 'text ' class= 'form-control ' name= 'referencias"+cont+"' id= 'referencias"+cont+"' aria-describedby= 'HelpCliente ' placeholder= 'Nombre del Cliente '> </div>&nbsp;";
                                }

                                document.getElementById("divMultiInputs").innerHTML=div;
}
                        

                        </script>

                    <!--boton de añadir a la lista-->

                    <a class="enlaceajax2 btn btn-block btn-warning btn-lg" 
                        href="#destino2" 
                        role="button" 
                        data-mensajero="<?= $mensajero ?>" 
                        data-fecha="<?= $fecha ?>"  
                                        
                        > Añadir a Inmediatos </a>

                        <script>

                        $(document).ready(function(){ 
                        $(".enlaceajax2").click(function(evento){

                        evento.preventDefault();
                        //var select = $(this).attr('data-select');
                        
                        var invent11 = '#cliente1';
                        var invent12 = '#cliente2';
                        var invent13 = '#cliente3';
                        var invent14 = '#cliente4';
                        var invent15 = '#cliente5';
                        var invent21 = '#direcciones1';
                        var invent22 = '#direcciones2';
                        var invent23 = '#direcciones3';
                        var invent24 = '#direcciones4';
                        var invent25 = '#direcciones5';
                        var invent31 = '#referencias1';
                        var invent32 = '#referencias2';
                        var invent33 = '#referencias3';
                        var invent34 = '#referencias4';
                        var invent35 = '#referencias5';
                     

                        $.get("https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Tab2", {
            
                            date_cliente1: $(invent11).val(),
                            date_cliente2: $(invent12).val(),
                            date_cliente3: $(invent13).val(),
                            date_cliente4: $(invent14).val(),
                            date_cliente5: $(invent15).val(),

                            date_direcciones1: $(invent21).val(),
                            date_direcciones2: $(invent22).val(),
                            date_direcciones3: $(invent23).val(),
                            date_direcciones4: $(invent24).val(),
                            date_direcciones5: $(invent25).val(),

                            date_referencias1: $(invent31).val(),
                            date_referencias2: $(invent32).val(),
                            date_referencias3: $(invent33).val(),
                            date_referencias4: $(invent34).val(),
                            date_referencias5: $(invent35).val(),
                            
                            //orden_num: $(this).attr('data-orden'), 
                            date_fecha: $(this).attr('data-fecha'), 
                            date_mensajero: $(this).attr('data-mensajero')}, 
            
                        function(respuesta){
				            $("#destino2").html(respuesta);
               
		                    })
                        });
                    })

                    </script>


                    <div class="text-center m-3" id="destino2"></div>







                        



                    </div><!--del segundo tab-->


                    
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Servicio</th>
                                <th></th>
                                <th>Direcciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Periódicos</td>
                                <td>
                                    
                                    <input id="toggle-periodicos" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-periodicos').change(function() {
                                            document.getElementById('numero-periodicos').value=3;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-periodicos" id="numero-periodicos" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>
 
                            <tr>
                                <td scope="row">Radza</td>
                                <td>
                                    
                                    <input id="toggle-Radza" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Radza').change(function() {
                                            document.getElementById('numero-Radza').value=1;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Radza" id="numero-Radza" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>    
                            
                            
                            <tr>
                                <td scope="row">Plataforma-Mrw</td>
                                <td>
                                    
                                    <input id="toggle-Plataforma-Mrw" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Plataforma-Mrw').change(function() {
                                            document.getElementById('numero-Plataforma-Mrw').value=1;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Plataforma-Mrw" id="numero-Plataforma-Mrw" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>

                            <tr>
                                <td scope="row">Plataforma-Nacex</td>
                                <td>
                                    
                                    <input id="toggle-Plataforma-Nacex" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Plataforma-Nacex').change(function() {
                                            document.getElementById('numero-Plataforma-Nacex').value=1;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Plataforma-Nacex" id="numero-Plataforma-Nacex" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>

                            <tr>
                                <td scope="row">San-Juan-De-Dios</td>
                                <td>
                                    
                                    <input id="toggle-San-Juan-De-Dios" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-San-Juan-De-Dios').change(function() {
                                            document.getElementById('numero-San-Juan-De-Dios').value=3;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-San-Juan-De-Dios" id="numero-San-Juan-De-Dios" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>                            

                            <tr>
                                <td scope="row">Fremap</td>
                                <td>
                                    
                                    <input id="toggle-Fremap" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Fremap').change(function() {
                                            document.getElementById('numero-Fremap').value=3;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Fremap" id="numero-Fremap" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>


                            <tr>
                                <td scope="row">Badulake</td>
                                <td>
                                    
                                    <input id="toggle-Badulake" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Badulake').change(function() {
                                            document.getElementById('numero-Badulake').value=2;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Badulake" id="numero-Badulake" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>


                            <tr>
                                <td scope="row">Fruta</td>
                                <td>
                                    
                                    <input id="toggle-Fruta" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Fruta').change(function() {
                                            document.getElementById('numero-Fruta').value=6;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Fruta" id="numero-Fruta" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>
                            
                            <tr>
                                <td scope="row">Rebost</td>
                                <td>
                                    
                                    <input id="toggle-Rebost" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Rebost').change(function() {
                                            document.getElementById('numero-Rebost').value=3;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Rebost" id="numero-Rebost" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>
                            
                            <tr>
                                <td scope="row">Flores-Manana</td>
                                <td>
                                    
                                    <input id="toggle-Flores-Manana" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Flores-Manana').change(function() {
                                            document.getElementById('numero-Flores-Manana').value=1;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Flores-Manana" id="numero-Flores-Manana" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>

                            <tr>
                                <td scope="row">Flores-Tarde</td>
                                <td>
                                    
                                    <input id="toggle-Flores-Tarde" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Flores-Tarde').change(function() {
                                            document.getElementById('numero-Flores-Tarde').value=1;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Flores-Tarde" id="numero-Flores-Tarde" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>   
                            <tr>
                                <td scope="row">Devoluciones-Nacex</td>
                                <td>
                                    
                                    <input id="toggle-Devoluciones-Nacex" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Devoluciones-Nacex').change(function() {
                                            document.getElementById('numero-Devoluciones-Nacex').value=1;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Devoluciones-Nacex" id="numero-Devoluciones-Nacex" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>  
                            <tr>
                                <td scope="row">Devoluciones-Mrw</td>
                                <td>
                                    
                                    <input id="toggle-Devoluciones-Mrw" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Devoluciones-Mrw').change(function() {
                                            document.getElementById('numero-Devoluciones-Mrw').value=1;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Devoluciones-Mrw" id="numero-Devoluciones-Mrw" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>                           
                            <tr>
                                <td scope="row">Varios</td>
                                <td>
                                    
                                    <input id="toggle-Varios" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" type="checkbox">

                                    <script>
                                    $(function() {
                                        $('#toggle-Varios').change(function() {
                                            document.getElementById('numero-Varios').value=3;
                                        })
                                    })
                                    </script>

                                </td>
                                <td>

                                    <div class="form-group">
                                      
                                      <input type="number" 
                                      class="form-control" name="numero-Varios" id="numero-Varios" 
                                      placeholder=""
                                      value="0">
                                 
                                    </div>


                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!--boton de añadir a la lista-->

                    <a class="enlaceajax3 btn btn-block btn-warning btn-lg" 
                        href="#destino3" 
                        role="button" 
                        data-mensajero="<?= $mensajero ?>" 
                        data-fecha="<?= $fecha ?>"  
                                        
                        > Añadir a Servicios Fijos </a>

                        <script>

                        $(document).ready(function(){ 
                        $(".enlaceajax3").click(function(evento){

                        evento.preventDefault();
                        //var select = $(this).attr('data-select');
                        
                        var inventVarios = '#numero-Varios';
                        var inventFloresTarde = '#numero-Flores-Tarde';
                        var inventFloresManana = '#numero-Flores-Manana';
                        var inventRebost = '#numero-Rebost';
                        var inventFruta = '#numero-Fruta';
                        var inventBadulake = '#numero-Badulake';
                        var inventFremap = '#numero-Fremap';
                        var inventSanJuanDeDios = '#numero-San-Juan-De-Dios';
                        var inventPlataformaNacex = '#numero-Plataforma-Nacex';
                        var inventPlataformaMrw = '#numero-Plataforma-Mrw';
                        var inventPeriodicos = '#numero-periodicos';
                        var invent_D_Nacex = '#numero-Devoluciones-Nacex';
                        var invent_D_MRW = '#numero-Devoluciones-Mrw';
                        var inventRadza = '#numero-Radza';

                        $.get("https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Tab3", {


                            date_varios: $(inventVarios).val(), 
                            date_florestarde: $(inventFloresTarde).val(), 
                            date_floresmana: $(inventFloresManana).val(),
                            date_rebost: $(inventRebost).val(), 
                            date_fruta: $(inventFruta).val(), 
                            date_badulake: $(inventBadulake).val(), 
                            date_fremap: $(inventFremap).val(), 
                            date_sanjuandedios: $(inventSanJuanDeDios).val(), 
                            date_plataformanacex: $(inventPlataformaNacex).val(), 
                            date_plataformamrw: $(inventPlataformaMrw).val(), 
                            date_periodicos: $(inventPeriodicos).val(),
                            date_d_nacex: $(invent_D_Nacex).val(), 
                            date_d_mrw: $(invent_D_MRW).val(),
                            date_radza: $(inventRadza).val(),
                            
                            
                            //orden_num: $(this).attr('data-orden'), 
                            date_fecha: $(this).attr('data-fecha'), 
                            date_mensajero: $(this).attr('data-mensajero')}, 
            
                        function(respuesta){
				            $("#destino3").html(respuesta);
               
		                    })
                        });
                    })

                    </script>


                    <div class="text-center m-3" id="destino3"></div>



                    </div><!--fin del tercer tab-->
                    
                     <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">


                     <!--ultimo tab-->

                     <div class="form-group">
                          <label for="">Número de Gestiones</label>
                          <select onchange="multiplicarInputs1(this)" class="form-control form-control-lg bg-warning" name="" id="">
                            <option selected disabled value="0">Selecciona</option>
                            <option value ="1">1</option>
                            <option value ="2">2</option>
                            <option value ="3">3</option>
                            <option value ="4">4</option>
                            <option value ="5">5</option>
                          </select>
                        </div>

                        <div id="divMultiInputs1"><br><br><br><br><br></div>

                        <script>

                            function multiplicarInputs1(text){
                               
                                var num= text.value
                                var div='';
                                for (var i=0;i<num;i++){ 
                                    var cont=i+1;
                                    div+="<hr> <h3 class='text-warning'>Servicio con Gestión Núm: "+cont+"</h3>                      <div class='form-group'>                      <label for='cliente-tiempo-espera'>Cliente</label>                       <input type='text' name='cliente-tiempo-espera"+cont+"' id='cliente-tiempo-espera"+cont+"' class='form-control' placeholder='cliente' >                     </div>                     <div class='form-group'>                       <label for='referencias'>Referencias</label>                       <textarea class='form-control' name='referencias-tiempo-espera"+cont+"' id='referencias-tiempo-espera"+cont+"' rows='8'></textarea></div>                     <div class='form-group'>                       <label for='tiempoenespera'>Tiempo En Espera (minutos):</label>                       <input type='number' name='tiempoenespera-tiempo-espera"+cont+"' id='tiempoenespera-tiempo-espera"+cont+"' class='form-control' placeholder='tiempoenespera' min='5'                        value='5'>                    </div>&nbsp;";
                                }

                                document.getElementById("divMultiInputs1").innerHTML=div;}
                    
                        </script>

                                            <!--boton de añadir a la lista-->

                    <a class="enlaceajax4 btn btn-block btn-warning btn-lg" 
                        href="#destino4" 
                        role="button" 
                        data-mensajero="<?= $mensajero ?>" 
                        data-fecha="<?= $fecha ?>"  
                                        
                        > Añadir a Gestiones </a>

                        <script>

                        $(document).ready(function(){ 
                        $(".enlaceajax4").click(function(evento){

                        evento.preventDefault();
                        //var select = $(this).attr('data-select');
                        
                        var invent11 = '#cliente-tiempo-espera1';
                        var invent12 = '#cliente-tiempo-espera2';
                        var invent13 = '#cliente-tiempo-espera3';
                        var invent14 = '#cliente-tiempo-espera4';
                        var invent15 = '#cliente-tiempo-espera5';
                        var invent21 = '#referencias-tiempo-espera1';
                        var invent22 = '#referencias-tiempo-espera2';
                        var invent23 = '#referencias-tiempo-espera3';
                        var invent24 = '#referencias-tiempo-espera4';
                        var invent25 = '#referencias-tiempo-espera5';
                        var invent31 = '#tiempoenespera-tiempo-espera1';
                        var invent32 = '#tiempoenespera-tiempo-espera2';
                        var invent33 = '#tiempoenespera-tiempo-espera3';
                        var invent34 = '#tiempoenespera-tiempo-espera4';
                        var invent35 = '#tiempoenespera-tiempo-espera5';
                     

                        $.get("https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Tab4", {
            
                            date_cliente1: $(invent11).val(),
                            date_cliente2: $(invent12).val(),
                            date_cliente3: $(invent13).val(),
                            date_cliente4: $(invent14).val(),
                            date_cliente5: $(invent15).val(),

                            date_referencias1: $(invent21).val(),
                            date_referencias2: $(invent22).val(),
                            date_referencias3: $(invent23).val(),
                            date_referencias4: $(invent24).val(),
                            date_referencias5: $(invent25).val(),

                            date_tiempoenespera1: $(invent31).val(),
                            date_tiempoenespera2: $(invent32).val(),
                            date_tiempoenespera3: $(invent33).val(),
                            date_tiempoenespera4: $(invent34).val(),
                            date_tiempoenespera5: $(invent35).val(),
                            
                            //orden_num: $(this).attr('data-orden'), 
                            date_fecha: $(this).attr('data-fecha'), 
                            date_mensajero: $(this).attr('data-mensajero')}, 
            
                        function(respuesta){
				            $("#destino4").html(respuesta);
               
		                    })
                        });
                    })

                    </script>


                    <div class="text-center m-3" id="destino4"></div>





                     


                     </div><!--fin del último tab-->
                
                
                
                </div>

               
            <div class="card-footer text-center">

                    ¿Has acabado de añadir los datos en los <span class="text-primary">Apartados</span>? Pulsa <a class="text-danger" href="#oculto" onclick="mostrar_div()">aquí</a> para continuar.

                    <div id="oculto" style="display:none;">
                    <hr>

                    <a name="" id="" class="text-uppercase btn btn-block btn-lg btn-danger" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/EMail/<?= $mensajero ?>/<?= $fecha ?>" role="button">ENVÍAR INFORME<br>MENSAJERO: <?= $mensajero ?><br>FECHA: <?= $fecha ?></a>


                    </div>

                    <script>
                    
                    function mostrar_div(){
                        
                        document.getElementById("oculto").style.display = "block";
                    }
                    
                    </script>

            </div>

            </div> <!--cardbody-->

            







        </div>

        
  </big></big></div>

  <br><br><br>




 


	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>

        var slider1 = document.getElementById("numero-mrw");
        var output1 = document.getElementById("demo-mrw");
        output1.innerHTML = slider1.value; // Display the default slider value

        // Update the current slider value (each time you drag the slider handle)
        slider1.oninput = function() {
        output1.innerHTML = this.value;
        }

        var slider4 = document.getElementById("numero-otros");
        var output4 = document.getElementById("demo-otros");
        output4.innerHTML = slider4.value; // Display the default slider value

        // Update the current slider value (each time you drag the slider handle)
        slider4.oninput = function() {
        output4.innerHTML = this.value;
        }

        var slider2 = document.getElementById("numero-nacex700");
        var output2 = document.getElementById("demo-nacex700");
        output2.innerHTML = slider2.value; // Display the default slider value

        // Update the current slider value (each time you drag the slider handle)
        slider2.oninput = function() {
        output2.innerHTML = this.value;
        }

        var slider3 = document.getElementById("numero-nacex705");
        var output3 = document.getElementById("demo-nacex705");
        output3.innerHTML = slider3.value; // Display the default slider value

        // Update the current slider value (each time you drag the slider handle)
        slider3.oninput = function() {
        output3.innerHTML = this.value;
        }

    </script>


   

	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    
  </body>
</html>