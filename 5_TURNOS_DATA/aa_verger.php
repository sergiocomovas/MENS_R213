<!--CABEZA-->
<!--form comenzar-->
<?php 

$funcion_action ="verger";
$semana_action= $semanavista;
$anyo_action= $anyovista; 
$url_action="https://wendy.log99.es/index.php/A_turnos/".$funcion_action."/".$semana_action."/".$anyo_action."/";

?>

<form action="<?php echo $url_action?>" method="get">
<p>
    <button type="submit" class="btn float-right btn-sm btn-outline-primary"><i class="fas fa-save"></i> Guardar<br>verger</button>
    <big>Verger</big>
    <br>De lunes a sábado de <strong>8.00</strong> a <strong>Cierre</strong>
</p>   

<hr>
 
<!--VARIABLES QUE HEREDO DEL SISTEMA-->

<!--
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/verger/<?php echo $semanavista; ?>/<?php echo $anyovista; ?>">data</a></p>
<p>Pillo <a href="https://wendy.log99.es/index.php/A_turnos/semanas/verger/<?php echo $semanaanterior; ?>/<?php echo $anyoanterior; ?>">data anterior</a></p>
-->

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/verger/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/verger/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/verger/".$semanaanterior."/".$anyoultima; 

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

<!--SCROLL verger-->
<a name="html_verger"></a>

<!--SCROLL6-->
<div class="scrollmenu" style="border-radius: 25px 0px 0px 0px; background-color:black;"><table><!--incio div tabla-->

<!--PRIMERA CELDA-->

<th  valign="top" style="width: 260px; color: #FFFF66; padding: 5px 5px 5px 5px; " >

<div class="container">


    <h2 class="">Verger</h2><br>
    <i class="fas fa-10x fa-arrow-circle-right"></i>

</div>


</th>



<!--FIN PRIMERA CENDA-->

  
<!--CARD LUNES-->




    <th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; background-color: #FFFF66;" >

        <div style="width:250px;"  class="card m-y-1">

            <div class="card-block">

                <div class="float-left m-1">
                    <h5>Verger</h5>
                </div>
                <div class="float-right m-1">
                    <small>  <?php echo $turnos[datos][0][ve_autodate]; ?>  </small>
                </div>
                <br>
            </div>

            <!--<img class="card-img-top img-fluid" src="img/b1.png" alt="Card image">-->
            
            <div class="card-block m-1"><!--inicio cardblock principal-->
			
                <!--uno-->
                <p class="card-text text-center"><small> 
                    <i class="far fa-2x fa-hospital"></i>
                   
                    <br>
                    Hospital Son Llatzer
                </small></p>
			
                
                <div class="form-group">
            
                    <textarea class="form-control form-control-lg" 
                        maxlength="98"
                        id="ve_verger" 
                        name="ve_verger"
                        rows="6"><?php echo $turnos[datos][0][ve_verger]; ?></textarea>
                    
                    <label for="ve_verger">
                        <a onClick="cambiarVar('ve_verger','<?php echo $turnosultima[datos][0][ve_verger]; ?>')" href="#!"><i class="far fa-copy"></i> Copiar última.</a>
                    </label>
                
                </div>  
                <!--fin uno-->       

            </div><!--fin cardblock princial-->

        </div>
    </th> <!--fin ROW--> 

<!-- FIN CARD LUNES -->

<!--ÚLTIMA CELDA-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; color:red; background-color:black;" >
<div class="container">

<p style="color:#dc3545;"> ¿Desea añadir algún comentario?</p>
    <textarea class="form-control form-control-lg" 
        maxlength="255"
        id="ve_comentarios" 
        name="ve_comentarios"
        rows="8"><?php echo $turnos[datos][0][ve_comentarios]; ?></textarea><br>

<p style="color:#dc3545;"> Por Favor: acuérdese de guardar. </p>
    <button type="submit"  class="btn btn-danger btn-lg btn-block">Guardar Verger</button>

</div>


</th>



<!--FIN ÚLTIMA CENDA-->




<!-- FIN CARD SÁBADO -->



</table></div><!--fin div tabla-->
<!--form comenzar-->
</form>