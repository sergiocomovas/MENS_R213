<!--¿Que necesito saber-->
<!--Variables que hereda del sistema.-->


<!--VARIABLES QUE HEREDO DEL SISTEMA-->


<!--<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/emaya01/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/emaya01/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>-->

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/emaya05/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/emaya1/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/emaya05/".$semanaanterior."/".$anyoultima; 

$data = file_get_contents($url);

$turnos = json_decode($data, true);

$dataultima = file_get_contents($urlultima);

$turnosultima = json_decode($dataultima, true);

//echo "<br>";
//echo $products[datos][0][mr_anyo]; 

//foreach ($products as $product) {
//    print_r($product);
//    echo "<br>--------"; 
//}



?>

                <div class="float-left m-1">
                    <h4 class="p-1">Máquina 05</h4>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][em_05_autodate]; ?>  </small>
                </div>
                <br>
            </div>

            <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
            
            <div class="card-block m-1"><!--inicio cardblock principal-->
			
                <!--uno-->
          

                        <!--LUNES-->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>LUNES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_05_lu" 
                        name="em_05_lu"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_05_lu];?>"><?php echo $turnos[datos][0][em_05_lu];?></option>


                            <option value="RAFAEL PASTOR ESPASES">RAFAEL PASTOR ESPASES</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_05_lu];?>"><?php echo $turnosultima[datos][0][em_05_lu];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_05_lu','<?php echo $turnosultima[datos][0][em_05_lu]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN LUNES -->

                        <!--MARTES-->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>MARTES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_05_ma" 
                        name="em_05_ma"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_05_ma];?>"><?php echo $turnos[datos][0][em_05_ma];?></option>


                            <option value="RAFAEL PASTOR ESPASES">RAFAEL PASTOR ESPASES</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_05_ma];?>"><?php echo $turnosultima[datos][0][em_05_ma];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_05_ma','<?php echo $turnosultima[datos][0][em_05_ma]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN MARTES -->                        

                        <!--MIÉRCOLES-->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>MIÉRCOLES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_05_mi" 
                        name="em_05_mi"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_05_mi];?>"><?php echo $turnos[datos][0][em_05_mi];?></option>


                            <option value="RAFAEL PASTOR ESPASES">RAFAEL PASTOR ESPASES</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_05_mi];?>"><?php echo $turnosultima[datos][0][em_05_mi];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_05_mi','<?php echo $turnosultima[datos][0][em_05_mi]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN MIERCOLES -->                                       
       
                        <!--JUEVES-->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>JUEVES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_05_ju" 
                        name="em_05_ju"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_05_ju];?>"><?php echo $turnos[datos][0][em_05_ju];?></option>
                            
                            <option value="RAFAEL PASTOR ESPASES">RAFAEL PASTOR ESPASES</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_05_ju];?>"><?php echo $turnosultima[datos][0][em_05_ju];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_05_ju','<?php echo $turnosultima[datos][0][em_05_ju]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN JUEVES -->
                   
                        <!-- VIERNES -->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>VIERNES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_05_vi" 
                        name="em_05_vi"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_05_vi];?>"><?php echo $turnos[datos][0][em_05_vi];?></option>


                            <option value="RAFAEL PASTOR ESPASES">RAFAEL PASTOR ESPASES</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_05_vi];?>"><?php echo $turnosultima[datos][0][em_05_vi];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_05_vi','<?php echo $turnosultima[datos][0][em_05_vi]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN LUNES -->

    

                <div class="form-group">
                    <label for="exampleFormControlInput1">Comentarios:</label>
                    <input 
                        id="em_05_com" 
                        name="em_05_com"
                        type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $turnos[datos][0][em_05_comentarios]; ?>" placeholder="">
                </div>
			
                
       
                    <!--fin lunes-->

              

               
                                     
                

                </div>
                <!--fin uno-->    

       