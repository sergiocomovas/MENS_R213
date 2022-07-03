<?php while($row = mysqli_fetch_array($result)) 
                {

                //$id=utf8_encode($row['CP_ID']); 
                $carrer=utf8_encode($row['CP_CARRER']);
                $codigopostal=utf8_encode($row['CP_CP']);; 
                $etiqueta=utf8_encode($row['CP_ETIQUETA']);


                //http://wendy.log99.es/index.php/mensajeria/insertar/holamunso/3/4/5
                echo '<li>

                        MRW: 
                        '. $etiqueta .' <br>---------

                        <a onClick="putas(`'.$carrer.'`,
                                          `'.$etiqueta.'`,
                                          `'.$codigopostal.'`,
                                          `Normal`,
                                          `'.$codigopostal.'`)" class="foco" href="#"><span style="background-color:rgb(77, 156, 112)" class="badge badge-secondary">Normal.</span>
                        
                                          </a>
                        </li>
                      ';
                

                }
?>