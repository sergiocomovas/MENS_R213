<!--CABEZA-->
<!--form comenzar-->
<?php 

$funcion_action ="contadores";
$semana_action= $semanavista;
$anyo_action= $anyovista; 
$url_action="https://wendy.log99.es/index.php/A_turnos/".$funcion_action."/".$semana_action."/".$anyo_action."/";

?>

<form action="<?php echo $url_action?>" method="get">
<p>
    <button type="submit" class="btn float-right btn-sm btn-outline-primary"><i class="fas fa-save"></i> Guardar<br>EMAYA</button>
    <big>EMAYA</big>
    <br>De lunes a sábado de <strong>8.00</strong> a <strong>Cierre</strong>
</p>   

<hr>

<?php

$url = "https://wendy.log99.es/index.php/A_turnos/semanas/EMAYA/".$semanavista."/".$anyovista; 

//$urlanterior = "https://wendy.log99.es/index.php/A_turnos/semanas/EMAYA/".$semanaanterior."/".$anyoanterior; 

$urlultima = "https://wendy.log99.es/index.php/A_turnos/semanas/EMAYA/".$semanaanterior."/".$anyoultima; 

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

<!--SCROLL EMAYA-->
<a name="html_emaya"></a>

<!--SCROLL6-->
<div class="scrollmenu" style="border-radius: 25px 0px 0px 0px; background-color:black;"><table><!--incio div tabla-->

<!--PRIMERA CELDA-->

<th  valign="top" style="width: 260px; color: #2874a6; padding: 5px 5px 5px 5px; " >

<div class="container">

    <h2 class="">EMAYA</h2><br>
    <i class="fas fa-10x fa-arrow-circle-right"></i>

</div>

</th>

<!--FIN PRIMERA CELDA-->
  
<!--CARD 01-->

    <th  valign="top" style="width: 330px; padding: 5px 5px 5px 5px; background-color: #2874a6;" >

        <div style="width:330px;"  class="card m-y-1">

            <div class="card-block">

            <?php include 'aa_emaya_01.php';?><br>

            </div><!--fin cardblock princial-->

        </div>
    </th> <!--fin ROW--> 

<!-- FIN CARD 01 -->
<!--CARD 02-->

    <th  valign="top" style="width: 330px; padding: 5px 5px 5px 5px; background-color: #2874a6;" >

<div style="width:330px;"  class="card m-y-1">

    <div class="card-block">

    <?php include 'aa_emaya_02.php';?><br>

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 

<!-- FIN CARD 02 -->


<!-- CARD 03 -->

    <th  valign="top" style="width: 330px; padding: 5px 5px 5px 5px; background-color: #2874a6;" >

<div style="width:330px;"  class="card m-y-1">

    <div class="card-block">

    <?php include 'aa_emaya_03.php';?><br>

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 
<!-- FIN CARD 03 --> 

<!-- CARD 04 -->

    <th  valign="top" style="width: 330px; padding: 5px 5px 5px 5px; background-color: #2874a6;" >

<div style="width:330px;"  class="card m-y-1">

    <div class="card-block">

    <?php include 'aa_emaya_04.php';?><br>

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 
<!-- FIN CARD 04 -->

<!-- CARD 05 -->

    <th  valign="top" style="width: 330px; padding: 5px 5px 5px 5px; background-color: #2874a6;" >

<div style="width:330px;"  class="card m-y-1">

    <div class="card-block">

    <?php include 'aa_emaya_05.php';?><br>

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 
<!-- FIN CARD 05 --> 

<!-- CARD 06 -->

    <th  valign="top" style="width: 330px; padding: 5px 5px 5px 5px; background-color: #2874a6;" >

<div style="width:330px;"  class="card m-y-1">

    <div class="card-block">

    <?php include 'aa_emaya_06.php';?><br>

    </div><!--fin cardblock princial-->

</div>
</th> <!--fin ROW--> 
<!-- FIN CARD 06 --> 


<!--ÚLTIMA CELDA-->

<th  valign="top" style="width: 260px; padding: 5px 5px 5px 5px; color:red; background-color:black;" >
    
<div class="container">

    <p style="color:#dc3545;"> Por Favor: acuérdese de guardar. </p>
        <button type="submit" xtabindex="000213" class="btn btn-danger btn-lg btn-block">Guardar EMAYA</button>

</div>


</th>



<!--FIN ÚLTIMA CENDA-->




<!-- FIN CARD SÁBADO -->



</table></div><!--fin div tabla-->
<!--form comenzar-->
</form>