<!--CABEZA-->
<!--form comenzar-->
<?php 

$funcion_action ="mensajeria";
$semana_action= $semanavista;
$anyo_action= $anyovista; 
$url_action="https://wendy.log99.es/index.php/A_turnos/".$funcion_action."/".$semana_action."/".$anyo_action."/";

?>

<form action="<?php echo $url_action?>" method="get">
<p>
    <button type="submit" class="btn float-right btn-sm btn-outline-primary"><i class="fas fa-save"></i> Guardar<br>mensajeria</button>
    <big>MENSAJERÍA RESPONSABLE</big>
    <br>De lunes a sábado de <strong>8.00</strong> a <strong>Cierre</strong>
</p>   

<hr>
 
<!--VARIABLES QUE HEREDO DEL SISTEMA-->

<!--
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/mensajeria/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/mensajeria/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>
-->

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/mensajeria/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/mensajeria/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/mensajeria/".$semanaanterior."/".$anyoultima; 

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

<!--SCROLL mensajeria-->
<a name="html_mensajeria"></a>

<!--SCROLL6-->
<div class="scrollmenu" style="border-radius: 25px 0px 0px 0px; background-color:black;"><table><!--incio div tabla-->

<!--PRIMERA CELDA-->

<th  valign="top" style="width: 260px; color: #ABEBC6  ; padding: 5px 5px 5px 5px; " >

<div class="container">


    <h2 class="">Mensajería</h2><br>
    <i class="fas fa-10x fa-arrow-circle-right"></i>

</div>


</th>



<!--FIN PRIMERA CENDA-->

  
<!--CARD VEHICULO 1-->

    <th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #ABEBC6;" >

        <div style="width:250px;"  class="card m-y-1">

            <div class="card-block">

                <div class="float-left m-1">
                    <h5>TRICICLO 1</h5>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][mr_autodate]; ?>  </small>
                </div>
                <br>
            </div>

            <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
            
            <div class="card-block m-1"><!--inicio cardblock principal-->
			
                <!--uno-->
                <p class="card-text text-center"><small> 
                    <i class="fas fa-2x fa-bicycle"></i><br>
                    DE LUNES A VIERNES
                </small></p>
			
                
                <div class="form-group">
            
                    <textarea class="form-control form-control-lg" 
                        maxlength="98"
                        id="mr_triciclo_1" 
                        name="mr_triciclo_1"
                        rows="6"><?php echo $turnos[datos][0][mr_triciclo_1]; ?></textarea>
                    
                    <label for="mr_triciclo_1">
                        <a onClick="cambiarVar('mr_triciclo_1','<?php echo $turnosultima[datos][0][mr_triciclo_1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
                    </label>
                
                </div>  
                <!--fin uno-->       

            </div><!--fin cardblock princial-->

        </div>
    </th> <!--fin ROW--> 

<!-- FIN CARD VEHICULO 1 -->



<!--CARD VEHICULO 2-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #ABEBC6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>TRICICLO 2</h5>
        </div>
        <div class="float-right m-1">
            <small>  <?php echo $turnos[datos][0][mr_autodate]; ?>  </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-2x fa-bicycle"></i><br>
            DE LUNES A VIERNES
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="98"
                id="mr_triciclo_2" 
                name="mr_triciclo_2"
                rows="6"><?php echo $turnos[datos][0][mr_triciclo_2]; ?></textarea>
            
            <label for="mr_triciclo_2">
                <a onClick="cambiarVar('mr_triciclo_2','<?php echo $turnosultima[datos][0][mr_triciclo_2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->       

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!-- FIN CARD VEHICULO 2 -->


<!-- -->


<!--CARD MOTO 1-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #ABEBC6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MOTO 1</h5>
        </div>
        <div class="float-right m-1">
            <small>  <?php echo $turnos[datos][0][mr_autodate]; ?>  </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-2x fa-motorcycle"></i><br>
            DE LUNES A VIERNES
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                style="background-color: #EAFAF1; color:green;"
            
                maxlength="98"
                id="mr_moto_1" 
                name="mr_moto_1"
                rows="6"><?php echo $turnos[datos][0][mr_moto_1]; ?></textarea>
            
            <label for="mr_moto_1">
                <a onClick="cambiarVar('mr_moto_1','<?php echo $turnosultima[datos][0][mr_moto_1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->       

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!-- FIN CARD MOTO 1 -->

<!--CARD MOTO 2-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #ABEBC6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MOTO 2</h5>
        </div>
        <div class="float-right m-1">
            <small>  <?php echo $turnos[datos][0][mr_autodate]; ?>  </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-2x fa-motorcycle"></i><br>
            DE LUNES A VIERNES
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                style="background-color: #EAFAF1; color:green;"
            
                maxlength="98"
                id="mr_moto_2" 
                name="mr_moto_2"
                rows="6"><?php echo $turnos[datos][0][mr_moto_2]; ?></textarea>
            
            <label for="mr_moto_2">
                <a onClick="cambiarVar('mr_moto_2','<?php echo $turnosultima[datos][0][mr_moto_2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->       

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!-- FIN CARD MOTO 2 -->

<!--CARD MOTO 3-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #ABEBC6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MOTO 3</h5>
        </div>
        <div class="float-right m-1">
            <small>  <?php echo $turnos[datos][0][mr_autodate]; ?>  </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-2x fa-motorcycle"></i><br>
            DE LUNES A VIERNES
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                style="background-color: #EAFAF1; color:green;"
            
                maxlength="98"
                id="mr_moto_3" 
                name="mr_moto_3"
                rows="6"><?php echo $turnos[datos][0][mr_moto_3]; ?></textarea>
            
            <label for="mr_moto_3">
                <a onClick="cambiarVar('mr_moto_3','<?php echo $turnosultima[datos][0][mr_moto_3]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->       

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!-- FIN CARD MOTO 3 -->

<!--CARD EXTRA 1-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #ABEBC6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>EXTRA 1</h5>
        </div>
        <div class="float-right m-1">
            <small>  <?php echo $turnos[datos][0][mr_autodate]; ?>  </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-2x fa-truck"></i><br>
            DE LUNES A VIERNES
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg"             
                maxlength="98"
                id="mr_extra_1" 
                name="mr_extra_1"
                rows="6"><?php echo $turnos[datos][0][mr_extra_1]; ?></textarea>
            
            <label for="mr_extra_1">
                <a onClick="cambiarVar('mr_extra_1','<?php echo $turnosultima[datos][0][mr_extra_1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->       

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!-- FIN CARD EXTRA 1 -->


<!--CARD EXTRA 2-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #ABEBC6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>EXTRA 2</h5>
        </div>
        <div class="float-right m-1">
            <small>  <?php echo $turnos[datos][0][mr_autodate]; ?>  </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-2x fa-truck"></i><br>
            DE LUNES A VIERNES
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg"             
                maxlength="98"
                id="mr_extra_2" 
                name="mr_extra_2"
                rows="6"><?php echo $turnos[datos][0][mr_extra_2]; ?></textarea>
            
            <label for="mr_extra_2">
                <a onClick="cambiarVar('mr_extra_2','<?php echo $turnosultima[datos][0][mr_extra_2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->       

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!-- FIN CARD EXTRA 2 -->

<!--ÚLTIMA CELDA-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; color:red; background-color:black;" >
<div class="container">

<p style="color:#dc3545;"> ¿Desea añadir algún comentario?</p>
    <textarea class="form-control form-control-lg" 
        maxlength="255"
        id="mr_comentarios" 
        name="mr_comentarios"
        xtabindex="00213"
        rows="8"><?php echo $turnos[datos][0][mr_comentarios]; ?></textarea><br>

<p style="color:#dc3545;"> Por Favor: acuérdese de guardar. </p>
    <button type="submit" xtabindex="000213" class="btn btn-danger btn-lg btn-block">Guardar mensajeria</button>

</div>


</th>



<!--FIN ÚLTIMA CENDA-->




<!-- FIN CARD SÁBADO -->



</table></div><!--fin div tabla-->
<!--form comenzar-->
</form>