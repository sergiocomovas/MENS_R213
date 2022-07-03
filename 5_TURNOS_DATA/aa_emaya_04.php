<!--¿Que necesito saber-->
<!--Variables que hereda del sistema.-->


<!--VARIABLES QUE HEREDO DEL SISTEMA-->


<!--<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/emaya01/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/emaya01/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>-->

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/emaya04/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/emaya1/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/emaya04/".$semanaanterior."/".$anyoultima; 

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
                    <h4 class="p-1">Máquina 04</h4>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][em_04_autodate]; ?>  </small>
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
                        id="em_04_lu" 
                        name="em_04_lu"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_04_lu];?>"><?php echo $turnos[datos][0][em_04_lu];?></option>


                            <option value="ANTONIO SÁNCHEZ RAMIREZ">ANTONIO SÁNCHEZ RAMIREZ</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_04_lu];?>"><?php echo $turnosultima[datos][0][em_04_lu];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_04_lu','<?php echo $turnosultima[datos][0][em_04_lu]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN LUNES -->

                        <!--MARTES-->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>MARTES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_04_ma" 
                        name="em_04_ma"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_04_ma];?>"><?php echo $turnos[datos][0][em_04_ma];?></option>


                            <option value="ANTONIO SÁNCHEZ RAMIREZ">ANTONIO SÁNCHEZ RAMIREZ</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_04_ma];?>"><?php echo $turnosultima[datos][0][em_04_ma];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_04_ma','<?php echo $turnosultima[datos][0][em_04_ma]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN MARTES -->                        

                        <!--MIÉRCOLES-->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>MIÉRCOLES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_04_mi" 
                        name="em_04_mi"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_04_mi];?>"><?php echo $turnos[datos][0][em_04_mi];?></option>


                            <option value="ANTONIO SÁNCHEZ RAMIREZ">ANTONIO SÁNCHEZ RAMIREZ</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_04_mi];?>"><?php echo $turnosultima[datos][0][em_04_mi];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_04_mi','<?php echo $turnosultima[datos][0][em_04_mi]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN MIERCOLES -->                                       
       
                        <!--JUEVES-->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>JUEVES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_04_ju" 
                        name="em_04_ju"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_04_ju];?>"><?php echo $turnos[datos][0][em_04_ju];?></option>
                            
                            <option value="ANTONIO SÁNCHEZ RAMIREZ">ANTONIO SÁNCHEZ RAMIREZ</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_04_ju];?>"><?php echo $turnosultima[datos][0][em_04_ju];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_04_ju','<?php echo $turnosultima[datos][0][em_04_ju]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN JUEVES -->
                   
                        <!-- VIERNES -->
                        <div class="form-group row">

                        <label for="staticEmail" class="col-sm-3 col-form-label"><code>VIERNES</code></label>

                        <div class="col-sm-7">
                        <select 
                        id="em_04_vi" 
                        name="em_04_vi"
                        class="form-control" id="exampleFormControlSelect1">
                        
                            <option value="<?php echo $turnos[datos][0][em_04_vi];?>"><?php echo $turnos[datos][0][em_04_vi];?></option>


                            <option value="ANTONIO SÁNCHEZ RAMIREZ">ANTONIO SÁNCHEZ RAMIREZ</option>
                            <option value="SS1 - CÁNDIDO PAULO">SS1 - CÁNDIDO PAULO</option>
                            <option value="SS2 - ANTONIO CABALLERO">SS2 - ANTONIO CABALLERO</option>
                            <option value="RR - ROTACIÓN">ROTACIÓN</option>
                            <option value="VER COMENTARIOS">VER COMENTARIOS</option>

                             <option value="<?php echo $turnosultima[datos][0][em_04_vi];?>"><?php echo $turnosultima[datos][0][em_04_vi];?></option>

                        </select>

                        </div>

                        
                        <a class="py-1" onClick="cambiarVar('em_04_vi','<?php echo $turnosultima[datos][0][em_04_vi]; ?>')" href="#!"><i class="far fa-copy"></i></a>
                        


                        </div>
                        <!-- FIN LUNES -->

    

                <div class="form-group">
                    <label for="exampleFormControlInput1">Comentarios:</label>
                    <input 
                        id="em_04_com" 
                        name="em_04_com"
                        type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $turnos[datos][0][em_04_comentarios]; ?>" placeholder="">
                </div>
			
                
       
                    <!--fin lunes-->

              

               
                                     
                

                </div>
                <!--fin uno-->    

       