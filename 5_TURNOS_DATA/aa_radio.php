<!--CABEZA-->
<!--form comenzar-->
<?php 

$funcion_action ="radio";
$semana_action= $semanavista;
$anyo_action= $anyovista; 
$url_action="https://wendy.log99.es/index.php/A_turnos/".$funcion_action."/".$semana_action."/".$anyo_action."/";

?>

<form action="<?php echo $url_action?>" method="get">
<p>
    <button type="submit" class="btn float-right btn-sm btn-outline-primary"><i class="fas fa-save"></i> Guardar<br>Radio</button>
    <big>IB3 Radio</big>
    <br>De lunes a Sábado de <strong>8.00</strong> a <strong>Cierre</strong>
</p>   

<hr>
 
<!--VARIABLES QUE HEREDO DEL SISTEMA-->

<!--
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/radio/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/radio/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>
-->

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/radio/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/radio/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/radio/".$semanaanterior."/".$anyoultima; 

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

<!--SCROLL RADIO-->
<a name="html_radio"></a>

<!--SCROLL6-->
<div class="scrollmenu" style="border-radius: 25px 0px 0px 0px; background-color:black;"><table><!--incio div tabla-->

<!--PRIMERA CELDA-->

<th  valign="top" style="width: 260px; color:#CFD8DC; padding: 5px 5px 5px 5px; " >

<div class="container">


    <h2 class="">Radio</h2><br>
    <i class="fas fa-10x fa-arrow-circle-right"></i>

</div>


</th>



<!--FIN PRIMERA CENDA-->

  
<!--CARD LUNES-->




    <th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#CFD8DC;" >

        <div style="width:250px;"  class="card m-y-1">

            <div class="card-block">

                <div class="float-left m-1">
                    <h5>LUNES</h5>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][ra_autodate]; ?>  </small>
                </div>
                <br>
            </div>

            <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
            
            <div class="card-block m-1"><!--inicio cardblock principal-->
			
                <!--uno-->
                <p class="card-text text-center"><small> 
                    <i class="far fa-calendar" aria-hidden="true"></i>
                    Mañanas
                </small></p>
			
                
                <div class="form-group">
            
                    <textarea class="form-control form-control-lg" 
                        maxlength="38"
                        id="ra_lu_mm" 
                        name="ra_lu_mm"
                        com="11"
                        rows="3"><?php echo $turnos[datos][0][ra_lu_mm]; ?></textarea>
                    
                    <label for="ra_lu_mm">
                        <a onClick="cambiarVar('ra_lu_mm','<?php echo $turnosultima[datos][0][ra_lu_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
                    </label>
                
                </div>  
                <!--fin uno-->      

                <!--dos-->
                <p class="card-text text-center"><small> 
                    <i class="far fa-calendar" aria-hidden="true"></i>
                    Tardes
                </small></p>
			
                
                <div class="form-group">
            
                    <textarea class="form-control form-control-lg" 
                        maxlength="38"
                        id="ra_lu_tt" 
                        name="ra_lu_tt"
                        com="12"
                        rows="3"><?php echo $turnos[datos][0][ra_lu_tt]; ?></textarea>
                    
                    <label for="ra_lu_tt"><a onclick="cambiarVar('ra_lu_tt','<?php echo $turnosultima[datos][0][ra_lu_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
                
                </div>  
                <!--fin uno-->   

            </div><!--fin cardblock princial-->

        </div>
    </th> <!--fin ROW--> 




<!-- FIN CARD LUNES -->


<!--CARD MARTES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#CFD8DC;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MARTES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][ra_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Mañanas
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="ra_ma_mm" 
                name="ra_ma_mm"
                com="13"
                rows="3"><?php echo $turnos[datos][0][ra_ma_mm]; ?></textarea>
            
            <label for="ra_ma_mm">
                <a onClick="cambiarVar('ra_ma_mm','<?php echo $turnosultima[datos][0][ra_ma_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Tardes
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="ra_ma_tt" 
                name="ra_ma_tt"
                com="14"
                rows="3"><?php echo $turnos[datos][0][ra_ma_tt]; ?></textarea>
            
            <label for="ra_ma_tt"><a onclick="cambiarVar('ra_ma_tt','<?php echo $turnosultima[datos][0][ra_ma_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MARTES -->


<!--CARD MIÉRCOLES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#CFD8DC;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MIÉRCOLES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][ra_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Mañanas
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="ra_mi_mm" 
                name="ra_mi_mm"
                com="15"
                rows="3"><?php echo $turnos[datos][0][ra_mi_mm]; ?></textarea>
            
            <label for="ra_mi_mm">
                <a onClick="cambiarVar('ra_mi_mm','<?php echo $turnosultima[datos][0][ra_mi_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Tardes
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="ra_mi_tt" 
                name="ra_mi_tt"
                com="16"
                rows="3"><?php echo $turnos[datos][0][ra_mi_tt]; ?></textarea>
            
            <label for="ra_mi_tt"><a onclick="cambiarVar('ra_mi_tt','<?php echo $turnosultima[datos][0][ra_mi_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MIÉRCOLES -->



<!--CARD JUEVES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#CFD8DC;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>JUEVES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][ra_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Mañanas
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="ra_ju_mm" 
                name="ra_ju_mm"
                com="17"
                rows="3"><?php echo $turnos[datos][0][ra_ju_mm]; ?></textarea>
            
            <label for="ra_ju_mm">
                <a onClick="cambiarVar('ra_ju_mm','<?php echo $turnosultima[datos][0][ra_ju_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Tardes
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="ra_ju_tt" 
                name="ra_ju_tt"
                com="18"
                rows="3"><?php echo $turnos[datos][0][ra_ju_tt]; ?></textarea>
            
            <label for="ra_ju_tt"><a onclick="cambiarVar('ra_ju_tt','<?php echo $turnosultima[datos][0][ra_ju_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD JUEVES -->


<!--CARD VIERNES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#CFD8DC;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>VIERNES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][ra_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Mañanas
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="ra_vi_mm" 
                name="ra_vi_mm"
                com="19"
                rows="3"><?php echo $turnos[datos][0][ra_vi_mm]; ?></textarea>
            
            <label for="ra_vi_mm">
                <a onClick="cambiarVar('ra_vi_mm','<?php echo $turnosultima[datos][0][ra_vi_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Tardes
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                id="ra_vi_tt" 
                name="ra_vi_tt"
                com="20"
                rows="3"><?php echo $turnos[datos][0][ra_vi_tt]; ?></textarea>
            
            <label for="ra_vi_tt"><a onclick="cambiarVar('ra_vi_tt','<?php echo $turnosultima[datos][0][ra_vi_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD VIERNES -->



<!--CARD SÁBADO-->


<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color:#CFD8DC;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>SÁBADO</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][ra_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    


        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Todo el día
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                id="ra_sa_tt" 
                name="ra_sa_tt"
                com="21"
                rows="3"><?php echo $turnos[datos][0][ra_sa_tt]; ?></textarea>
            
            <label for="ra_sa_tt"><a onclick="cambiarVar('ra_sa_tt','<?php echo $turnosultima[datos][0][ra_sa_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!--ÚLTIMA CELDA-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; color:red; background-color:black;" >
<div class="container">

<p style="color:#dc3545;"> ¿Desea añadir algún comentario?</p>
    <textarea class="form-control form-control-lg" 
        maxlength="255"
        id="ra_comentarios" 
        name="ra_comentarios"
        com="22"
        rows="8"><?php echo $turnos[datos][0][ra_comentarios]; ?></textarea><br>

<p style="color:#dc3545;"> Por Favor: acuérdese de guardar. </p>
    <button type="submit" com="23" class="btn btn-danger btn-lg btn-block">Guardar Radio</button>

</div>

</th>


<!--FIN ÚLTIMA CENDA-->


<!-- FIN CARD SÁBADO -->


</table></div><!--fin div tabla-->
<!--form comenzar-->
</form>