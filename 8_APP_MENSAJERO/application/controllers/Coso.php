<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coso extends CI_Controller {

    public function index(){

        //echo "coso";
        $this->load->view('coso/coso');
    }

}