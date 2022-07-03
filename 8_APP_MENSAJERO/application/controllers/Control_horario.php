<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Horario extends CI_Controller {

    public function firma(){

        //https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Control_horario/firma
        $this->load->view('firmas_1/firmas');

    }

    public function index(){

        //VIEW
        //http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Control_horario
		
        $this->load->view('control_horario/control_horario_index');

    }

    public function index2(){

        //VIEW
        //http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Control_horario/index2

        echo 'Hola mundo';

    }

    

}//fin class