<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productividad extends CI_Controller {

    public function Guardar($mensajero = NULL, $fecha = NULL){

        $this->load->database();

        //UPDATE `mensa_201` SET `mensa_horastrabajadas` = '1', `mensa_horasfacturadas` = '2', `mensa_horasproduccion` = '3', `mensa_direcciones` = '4', `mensa_gestiones` = '5', `mensa_todo` = '6', `mensa_ratio` = '7', `mensa_coment1` = '8', `mensa_texto1` = '9', `mensa_texto2` = '10' WHERE `mensa_201`.`mensa_id` = 1;


        echo $this->input->post('jornada'); 
        $data = array(
            'mensa_horastrabajadas' => $this->input->post('jornada'),
            'mensa_horasfacturadas' => $this->input->post('dedicado'),
            'mensa_horasproduccion' => $this->input->post('horasproduccion'),
            'mensa_direcciones' => $this->input->post('paqueteria'),
            'mensa_gestiones' => $this->input->post('gestiones'),
            'mensa_todo' => $this->input->post('totalpaquetes'),
            'mensa_ratio' => $this->input->post('totalratio'),
            'mensa_coment1' => $this->input->post('comentarios'),
            'mensa_texto1' => $this->input->post('texto1'),
            'mensa_texto2' => $this->input->post('texto2')
        );

        print_r($data);
        
        $this->db->where('mensa_dia', $fecha);
        $this->db->update('mensa_'.$mensajero, $data);

        echo'<!doctype html>
        <html lang="en">
          <head>
            <title>Espere</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          </head>
          <body>

           <div class="jumbotron">
               <h1 class="display-3">Datos Guardados</h1>
               <p class="lead">Mensajero: '.$mensajero.' <br>
               Fecha: '. date("d/m/Y",strtotime($fecha)).' <br>
               Ratio: '.$this->input->post('totalratio').'<br> </p>
               <hr class="my-2">
               <p>Datos guardados</p>
               <p class="lead">
                   <a class="btn btn-primary btn-lg" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/'.$mensajero.'/'.$fecha.'" role="button">Volver</a>
               </p>
           </div>
              
           
          </body>
        </html>
        ';


    }

    public function Reparto($mensajero = NULL, $fecha = NULL){

    //Url
	//https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Productividad/Reparto/201/2019-02-04

    $this->load->database();

    $sql = "SELECT * FROM `mensa_".$mensajero."` WHERE `mensa_dia` LIKE '".$fecha."'";
    
    $query = $this->db->query($sql);

    $row = $query->row();
    $row->mensajero = $mensajero;

    $row->mensajero_n = "Desconocido"; 

    if ($mensajero == 201){$row->mensajero_n = "Pedro";}
    if ($mensajero == 202){$row->mensajero_n = "Curro";}
    if ($mensajero == 204){$row->mensajero_n = "Arlés";}
    if ($mensajero == 205){$row->mensajero_n = "Gabinet";}
    if ($mensajero == 208){$row->mensajero_n = "Cándido";}
    if ($mensajero == 210){$row->mensajero_n = "Juanje";}

    $this->load->view('productividad', $row);

    }

    public function calendario(){

        $this->load->view('calendario');

    }
        
}
