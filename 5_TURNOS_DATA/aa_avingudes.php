<!--CABEZA-->
<!--form comenzar-->
<?php 

$funcion_action ="avingudes";
$semana_action= $semanavista;
$anyo_action= $anyovista; 
$url_action="https://wendy.log99.es/index.php/A_turnos/".$funcion_action."/".$semana_action."/".$anyo_action."/";

?>

<form action="<?php echo $url_action?>" method="get">
<p>
    <button type="submit" class="btn float-right btn-sm btn-outline-primary"><i class="fas fa-save"></i> Guardar<br>Avingudes</button>
    <big>AVINGUDES</big>
    <br>De lunes a sábado de <strong>8.00</strong> a <strong>Cierre</strong>
</p>   

<hr>
 
<!--VARIABLES QUE HEREDO DEL SISTEMA-->

<!--
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/avingudes/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/avingudes/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>
-->

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/avingudes/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/avingudes/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/avingudes/".$semanaanterior."/".$anyoultima; 

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

<!--SCROLL avingudes-->
<a name="html_avingudes"></a>

<!--SCROLL6-->
<div class="scrollmenu" style="border-radius: 25px 0px 0px 0px; background-color:black;"><table><!--incio div tabla-->

<!--PRIMERA CELDA-->

<th  valign="top" style="width: 260px; color: #F4ECF7; padding: 5px 5px 5px 5px; " >

<div class="container">


    <h2 class="">Avingudes</h2><br>
    <i class="fas fa-10x fa-arrow-circle-right"></i>

</div>


</th>



<!--FIN PRIMERA CENDA-->

  
<!--CARD LUNES-->




    <th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #F4ECF7;" >

        <div style="width:250px;"  class="card m-y-1">

            <div class="card-block">

                <div class="float-left m-1">
                    <h5>LUNES</h5>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][bm_autodate]; ?>  </small>
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
                        id="bm_lu" 
                        name="bm_lu"
                        xtabindex="00021"
                        rows="3"><?php echo $turnos[datos][0][bm_lu]; ?></textarea>
                    
                    <label for="bm_lu">
                        <a onClick="cambiarVar('bm_lu','<?php echo $turnosultima[datos][0][bm_lu]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
                    </label>
                
                </div>  
                <!--fin uno-->      

               

            </div><!--fin cardblock princial-->

        </div>
    </th> <!--fin ROW--> 




<!-- FIN CARD LUNES -->


<!--CARD MARTES-->




<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #F4ECF7;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MARTES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][bm_autodate]; ?> </small>
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
                id="bm_ma" 
                name="bm_ma"
                xtabindex="00023"
                rows="3"><?php echo $turnos[datos][0][bm_ma]; ?></textarea>
            
            <label for="bm_ma">
                <a onClick="cambiarVar('bm_ma','<?php echo $turnosultima[datos][0][bm_ma]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

     

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MARTES -->


<!--CARD MIÉRCOLES-->




<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #F4ECF7;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MIÉRCOLES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][bm_autodate]; ?> </small>
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
                id="bm_mi" 
                name="bm_mi"
                xtabindex="00025"
                rows="3"><?php echo $turnos[datos][0][bm_mi]; ?></textarea>
            
            <label for="bm_mi">
                <a onClick="cambiarVar('bm_mi','<?php echo $turnosultima[datos][0][bm_mi]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

      

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MIÉRCOLES -->



<!--CARD JUEVES-->




<th   valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #F4ECF7;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>JUEVES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][bm_autodate]; ?> </small>
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
                id="bm_ju" 
                name="bm_ju"
                xtabindex="00027"
                rows="3"><?php echo $turnos[datos][0][bm_ju]; ?></textarea>
            
            <label for="bm_ju">
                <a onClick="cambiarVar('bm_ju','<?php echo $turnosultima[datos][0][bm_ju]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

       

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD JUEVES -->


<!--CARD VIERNES-->




<th  valign="top"  style="width: 260px; padding: 5px 5px 5px 5px; background-color: #F4ECF7;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>VIERNES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][bm_autodate]; ?> </small>
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
                id="bm_vi" 
                name="bm_vi"
                xtabindex="00029"
                rows="3"><?php echo $turnos[datos][0][bm_vi]; ?></textarea>
            
            <label for="bm_vi">
                <a onClick="cambiarVar('bm_vi','<?php echo $turnosultima[datos][0][bm_vi]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

    

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD VIERNES -->





<!--ÚLTIMA CELDA-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; color:red; background-color:black;" >
<div class="container">

<p style="color:#dc3545;"> ¿Desea añadir algún comentario?</p>
    <textarea class="form-control form-control-lg" 
        maxlength="255"
        id="bm_comentarios" 
        name="bm_comentarios"
        xtabindex="00213"
        rows="8"><?php echo $turnos[datos][0][bm_comentarios]; ?></textarea><br>

<p style="color:#dc3545;"> Por Favor: acuérdese de guardar. </p>
    <button type="submit" xtabindex="000213" class="btn btn-danger btn-lg btn-block">Guardar Avingudes</button>

</div>


</th>



<!--FIN ÚLTIMA CENDA-->




<!-- FIN CARD SÁBADO -->



</table></div><!--fin div tabla-->
<!--form comenzar-->
</form>