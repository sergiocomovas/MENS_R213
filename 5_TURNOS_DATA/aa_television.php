<!--CABEZA-->
<!--form com=enzar-->
<?php 

$funcion_action ="television";
$semana_action= $semanavista;
$anyo_action= $anyovista; 
$url_action="https://wendy.log99.es/index.php/A_turnos/".$funcion_action."/".$semana_action."/".$anyo_action."/";

?>

<form action="<?php echo $url_action?>" method="get">
<p>
    <button type="submit" class="btn float-right btn-sm btn-outline-primary"><i class="fas fa-save"></i> Guardar<br>TV</button>
    <big>IB3 TV</big>
    <br>De lunes a sábado de <strong>8.00</strong> a <strong>Cierre</strong>
</p>   

<hr>
 
<!--VARIABLES QUE HEREDO DEL SISTEMA-->

<!--
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/television/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/television/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>
-->

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/tv/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/television/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/tv/".$semanaanterior."/".$anyoultima; 

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

<!--SCROLL television-->
<a name="html_television"></a>

<!--SCROLL6-->
<div class="scrollmenu" style="border-radius: 25px 0px 0px 0px; background-color:black;"><table><!--incio div tabla-->

<!--PRIMERA CELDA-->

<th  valign="top" style="width: 260px; color: #e6ffe6; padding: 5px 5px 5px 5px; " >

<div class="container">


    <h2 class="">Televisión</h2><br>
    <i class="fas fa-10x fa-arrow-circle-right"></i>

</div>


</th>



<!--FIN PRIMERA CENDA-->

  
<!--CARD LUNES-->




    <th style="width: 260px; padding: 5px 5px 5px 5px; background-color: #e6ffe6;" >

        <div style="width:250px;"  class="card m-y-1">

            <div class="card-block">

                <div class="float-left m-1">
                    <h5>LUNES</h5>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][tv_autodate]; ?>  </small>
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
                        id="tv_lu_mm" 
                        name="tv_lu_mm"
                        
                        rows="3"><?php echo $turnos[datos][0][tv_lu_mm]; ?></textarea>
                    
                    <label for="tv_lu_mm">
                        <a onClick="cambiarVar('tv_lu_mm','<?php echo $turnosultima[datos][0][tv_lu_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
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
                        id="tv_lu_tt" 
                        name="tv_lu_tt"
                        
                        rows="3"><?php echo $turnos[datos][0][tv_lu_tt]; ?></textarea>
                    
                    <label for="tv_lu_tt"><a onclick="cambiarVar('tv_lu_tt','<?php echo $turnosultima[datos][0][tv_lu_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
                
                </div>  
                <!--fin uno-->   

            </div><!--fin cardblock princial-->

        </div>
    </th> <!--fin ROW--> 




<!-- FIN CARD LUNES -->


<!--CARD MARTES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color: #e6ffe6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MARTES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][tv_autodate]; ?> </small>
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
                id="tv_ma_mm" 
                name="tv_ma_mm"
              
                rows="3"><?php echo $turnos[datos][0][tv_ma_mm]; ?></textarea>
            
            <label for="tv_ma_mm">
                <a onClick="cambiarVar('tv_ma_mm','<?php echo $turnosultima[datos][0][tv_ma_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
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
                id="tv_ma_tt" 
                name="tv_ma_tt"
               
                rows="3"><?php echo $turnos[datos][0][tv_ma_tt]; ?></textarea>
            
            <label for="tv_ma_tt"><a onclick="cambiarVar('tv_ma_tt','<?php echo $turnosultima[datos][0][tv_ma_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MARTES -->


<!--CARD MIÉRCOLES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color: #e6ffe6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MIÉRCOLES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][tv_autodate]; ?> </small>
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
                id="tv_mi_mm" 
                name="tv_mi_mm"
             
                rows="3"><?php echo $turnos[datos][0][tv_mi_mm]; ?></textarea>
            
            <label for="tv_mi_mm">
                <a onClick="cambiarVar('tv_mi_mm','<?php echo $turnosultima[datos][0][tv_mi_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
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
                id="tv_mi_tt" 
                name="tv_mi_tt"
          
                rows="3"><?php echo $turnos[datos][0][tv_mi_tt]; ?></textarea>
            
            <label for="tv_mi_tt"><a onclick="cambiarVar('tv_mi_tt','<?php echo $turnosultima[datos][0][tv_mi_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MIÉRCOLES -->



<!--CARD JUEVES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color: #e6ffe6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>JUEVES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][tv_autodate]; ?> </small>
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
                id="tv_ju_mm" 
                name="tv_ju_mm"
             
                rows="3"><?php echo $turnos[datos][0][tv_ju_mm]; ?></textarea>
            
            <label for="tv_ju_mm">
                <a onClick="cambiarVar('tv_ju_mm','<?php echo $turnosultima[datos][0][tv_ju_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
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
                id="tv_ju_tt" 
                name="tv_ju_tt"
               
                rows="3"><?php echo $turnos[datos][0][tv_ju_tt]; ?></textarea>
            
            <label for="tv_ju_tt"><a onclick="cambiarVar('tv_ju_tt','<?php echo $turnosultima[datos][0][tv_ju_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD JUEVES -->


<!--CARD VIERNES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color: #e6ffe6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>VIERNES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][tv_autodate]; ?> </small>
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
                id="tv_vi_mm" 
                name="tv_vi_mm"
               
                rows="3"><?php echo $turnos[datos][0][tv_vi_mm]; ?></textarea>
            
            <label for="tv_vi_mm">
                <a onClick="cambiarVar('tv_vi_mm','<?php echo $turnosultima[datos][0][tv_vi_mm]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
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
                id="tv_vi_tt" 
                name="tv_vi_tt"
              
                rows="3"><?php echo $turnos[datos][0][tv_vi_tt]; ?></textarea>
            
            <label for="tv_vi_tt"><a onclick="cambiarVar('tv_vi_tt','<?php echo $turnosultima[datos][0][tv_vi_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD VIERNES -->



<!--CARD SÁBADO-->


<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #e6ffe6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>SÁBADO</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][tv_autodate]; ?> </small>
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
                id="tv_sa_tt" 
                name="tv_sa_tt"
            
                rows="3"><?php echo $turnos[datos][0][tv_sa_tt]; ?></textarea>
            
            <label for="tv_sa_tt"><a onclick="cambiarVar('tv_sa_tt','<?php echo $turnosultima[datos][0][tv_sa_tt]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!--CARD ORDENANZA-->


<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #e6ffe6;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5><strong>ORDENANZA</strong></h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][tv_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    


        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="far fa-calendar" aria-hidden="true"></i>
            Entre semana
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                id="tv_ordenanza" 
                name="tv_ordenanza"
            
                style="color:green;"
                rows="3"><?php echo $turnos[datos][0][tv_ordenanza]; ?></textarea>
            
            <label for="tv_ordenanza"><a onclick="cambiarVar('tv_ordenanza','<?php echo $turnosultima[datos][0][tv_ordenanza]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
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
        id="tv_comentarios" 
        name="tv_comentarios"
       
        rows="8"><?php echo $turnos[datos][0][tv_comentarios]; ?></textarea><br>

<p style="color:#dc3545;"> Por Favor: acuérdese de guardar. </p>
    <button type="submit" com="000234" class="btn btn-danger btn-lg btn-block">Guardar TV</button>

</div>


</th>



<!--FIN ÚLTIMA CENDA-->




<!-- FIN CARD SÁBADO -->



</table></div><!--fin div tabla-->
<!--form com=enzar-->
</form>