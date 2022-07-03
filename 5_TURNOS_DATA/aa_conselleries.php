<!--CABEZA-->
<!--form comenzar-->
<?php 

$funcion_action ="conselleries";
$semana_action= $semanavista;
$anyo_action= $anyovista; 
$url_action="https://wendy.log99.es/index.php/A_turnos/".$funcion_action."/".$semana_action."/".$anyo_action."/";

?>

<form action="<?php echo $url_action?>" method="get">
<p>
    <button type="submit" class="btn float-right btn-sm btn-outline-primary"><i class="fas fa-save"></i> Guardar<br>Conselleries</button>
    <big>Conselleries</big>
    <br>De lunes a viernes de <strong>8.00</strong> a <strong>Cierre</strong>
</p>   

<hr>
 
<!--VARIABLES QUE HEREDO DEL SISTEMA-->

<!--
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/conselleries/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/conselleries/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>
-->

<?php

 $url = "https://wendy.log99.es/index.php/A_turnos/semanas/conselleries/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/conselleries/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/conselleries/".$semanaanterior."/".$anyoultima; 

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

<!--SCROLL conselleries-->
<a name="html_conselleries"></a>

<!--SCROLL6-->
<div class="scrollmenu" style="border-radius: 25px 0px 0px 0px; background-color:black;"><table><!--incio div tabla-->

<!--PRIMERA CELDA-->

<th  valign="top" style="width: 260px; color:#FAE5D3  ; padding: 5px 5px 5px 5px; " >

<div class="container">


    <h2 class="">Conselleries</h2><br>
    <i class="fas fa-10x fa-arrow-circle-right"></i>

</div>


</th>



<!--FIN PRIMERA CENDA-->

  
<!--CARD LUNES-->




    <th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#FAE5D3  ;" >

        <div style="width:250px;"  class="card m-y-1">

            <div class="card-block">

                <div class="float-left m-1">
                    <h5>LUNES</h5>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][c1_autodate]; ?>  </small>
                </div>
                <br>
            </div>

            <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
            
            <div class="card-block m-1"><!--inicio cardblock principal-->
			
                <!--uno-->
                <p class="card-text text-center"><small> 
                    <i class="fas fa-map-marker-alt"></i></i>
                    Av. Gabriel Alomar
                </small></p>
			
                
                <div class="form-group">
            
                    <textarea style="background-color:#F8F9F9;" class="form-control form-control-lg" 
                        maxlength="38"
                        id="c1_lu_d1" 
                        name="c1_lu_d1"
                        com="11"
                        rows="3"><?php echo $turnos[datos][0][c1_lu_d1]; ?></textarea>
                    
                    <label for="c1_lu_d1">
                        <a onClick="cambiarVar('c1_lu_d1','<?php echo $turnosultima[datos][0][c1_lu_d1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
                    </label>
                
                </div>  
                <!--fin uno-->      

                <!--dos-->
                <p class="card-text text-center"><small> 
                    <i class="fas fa-map-marker-alt"></i></i>
                    Joan Crespí
                </small></p>
			
                
                <div class="form-group">
            
                    <textarea class="form-control form-control-lg" 
                        maxlength="38"
                        id="c1_lu_d2" 
                        name="c1_lu_d2"
                        com="12"
                        rows="3"><?php echo $turnos[datos][0][c1_lu_d2]; ?></textarea>
                    
                    <label for="c1_lu_d2"><a onclick="cambiarVar('c1_lu_d2','<?php echo $turnosultima[datos][0][c1_lu_d2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
                
                </div>  
                <!--fin uno-->   

            </div><!--fin cardblock princial-->

        </div>
    </th> <!--fin ROW--> 




<!-- FIN CARD LUNES -->


<!--CARD MARTES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#FAE5D3  ;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MARTES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][c1_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Av. Gabriel Alomar
        </small></p>
    
        
        <div class="form-group">
    
            <textarea style="background-color:#F8F9F9;" class="form-control form-control-lg" 
                maxlength="38"
                id="c1_ma_d1" 
                name="c1_ma_d1"
                com="13"
                rows="3"><?php echo $turnos[datos][0][c1_ma_d1]; ?></textarea>
            
            <label for="c1_ma_d1">
                <a onClick="cambiarVar('c1_ma_d1','<?php echo $turnosultima[datos][0][c1_ma_d1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Joan Crespí
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="c1_ma_d2" 
                name="c1_ma_d2"
                com="14"
                rows="3"><?php echo $turnos[datos][0][c1_ma_d2]; ?></textarea>
            
            <label for="c1_ma_d2"><a onclick="cambiarVar('c1_ma_d2','<?php echo $turnosultima[datos][0][c1_ma_d2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MARTES -->


<!--CARD MIÉRCOLES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#FAE5D3  ;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>MIÉRCOLES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][c1_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Av. Gabriel Alomar
        </small></p>
    
        
        <div class="form-group">
    
            <textarea style="background-color:#F8F9F9;"  class="form-control form-control-lg" 
                maxlength="38"
                id="c1_mi_d1" 
                name="c1_mi_d1"
                com="15"
                rows="3"><?php echo $turnos[datos][0][c1_mi_d1]; ?></textarea>
            
            <label for="c1_mi_d1">
                <a onClick="cambiarVar('c1_mi_d1','<?php echo $turnosultima[datos][0][c1_mi_d1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Joan Crespí
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="c1_mi_d2" 
                name="c1_mi_d2"
                com="16"
                rows="3"><?php echo $turnos[datos][0][c1_mi_d2]; ?></textarea>
            
            <label for="c1_mi_d2"><a onclick="cambiarVar('c1_mi_d2','<?php echo $turnosultima[datos][0][c1_mi_d2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD MIÉRCOLES -->



<!--CARD JUEVES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#FAE5D3  ;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>JUEVES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][c1_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Av. Gabriel Alomar
        </small></p>
    
        
        <div class="form-group">
    
            <textarea style="background-color:#F8F9F9;"  class="form-control form-control-lg" 
                maxlength="38"
                id="c1_ju_d1" 
                name="c1_ju_d1"
                com="17"
                rows="3"><?php echo $turnos[datos][0][c1_ju_d1]; ?></textarea>
            
            <label for="c1_ju_d1">
                <a onClick="cambiarVar('c1_ju_d1','<?php echo $turnosultima[datos][0][c1_ju_d1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Joan Crespí
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                maxlength="38"
                id="c1_ju_d2" 
                name="c1_ju_d2"
                com="18"
                rows="3"><?php echo $turnos[datos][0][c1_ju_d2]; ?></textarea>
            
            <label for="c1_ju_d2"><a onclick="cambiarVar('c1_ju_d2','<?php echo $turnosultima[datos][0][c1_ju_d2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
        </div>  
        <!--fin uno-->   

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 




<!-- FIN CARD JUEVES -->


<!--CARD VIERNES-->




<th style="width: 260px; padding: 5px 5px 5px 5px; background-color:#FAE5D3  ;" >

<div style="width:250px;"  class="card m-y-1">

    <div class="card-block">

        <div class="float-left m-1">
            <h5>VIERNES</h5>
        </div>
        <div class="float-right m-1">
             <small> <?php echo $turnos[datos][0][c1_autodate]; ?> </small>
        </div>
        <br>
    </div>

    <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
    
    <div class="card-block m-1"><!--inicio cardblock principal-->
    
        <!--uno-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Av. Gabriel Alomar
        </small></p>
    
        
        <div class="form-group">
    
            <textarea style="background-color:#F8F9F9;"  class="form-control form-control-lg" 
                maxlength="38"
                id="c1_vi_d1" 
                name="c1_vi_d1"
                com="19"
                rows="3"><?php echo $turnos[datos][0][c1_vi_d1]; ?></textarea>
            
            <label for="c1_vi_d1">
                <a onClick="cambiarVar('c1_vi_d1','<?php echo $turnosultima[datos][0][c1_vi_d1]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
            </label>
        
        </div>  
        <!--fin uno-->      

        <!--dos-->
        <p class="card-text text-center"><small> 
            <i class="fas fa-map-marker-alt"></i></i>
            Joan Crespí
        </small></p>
    
        
        <div class="form-group">
    
            <textarea class="form-control form-control-lg" 
                id="c1_vi_d2" 
                name="c1_vi_d2"
                com="20"
                rows="3"><?php echo $turnos[datos][0][c1_vi_d2]; ?></textarea>
            
            <label for="c1_vi_d2"><a onclick="cambiarVar('c1_vi_d2','<?php echo $turnosultima[datos][0][c1_vi_d2]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a></label>
        
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
        id="c1_comentarios" 
        name="c1_comentarios"
        com="22"
        rows="8"><?php echo $turnos[datos][0][c1_comentarios]; ?></textarea><br>

<p style="color:#dc3545;"> Por Favor: acuérdese de guardar. </p>
    <button type="submit" com="23" class="btn btn-danger btn-lg btn-block">Guardar Conselleries</button>

</div>

</th>


<!--FIN ÚLTIMA CENDA-->


<!-- FIN CARD SÁBADO -->


</table></div><!--fin div tabla-->
<!--form comenzar-->
</form>