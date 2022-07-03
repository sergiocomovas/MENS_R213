<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function Reparto($mensajero = NULL, $fecha = NULL){
			
	//Url
	//http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Reparto/hola/mundo
		
		$data = array(
			'mensajero' => $mensajero,
			'fecha' => $fecha
		);
	
		$this->load->view('mensajero', $data);

		
	}

	public Function Email($mensajero,$fecha){
	
		//http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/EMail

		$this->load->database();


		echo '<!doctype html>
		<html lang="en">
		  <head>
			<title>Title</title>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		  </head>
		  <body onload="window.print();"><div class="container-fluid">
			  
		  ';
			  
		  
		$texto = '<h1>Informe de '.$mensajero.'</h1>';
		$texto = $texto. '<h1>Fecha '.$fecha.'</h1>';


		$sql = "SELECT * FROM `1_MR_INFO` WHERE `mr_mensajero` LIKE '%".$mensajero."%' AND `mr_fecha` LIKE '%".$fecha."%' AND `mr_tipo` LIKE '%Servicios Fijos%' ORDER BY `mr_id` DESC";
		
		$query = $this->db->query($sql);

		foreach ($query->result() as $row)
		{
				$texto = $texto.
				"<BR><BR>ID: 0000".$row->mr_id.
				"<BR>".$row->mr_tipo." (".$row->mr_ref.")".
				"<BR>Número de direcciones o paquetes: ".$row->mr_direcciones.
				"<BR>Precio: [--DobleClickParaEscribir--]";
		}

		//Servicios Inmediatos
		$sql = "SELECT * FROM `1_MR_INFO` WHERE `mr_mensajero` LIKE '%".$mensajero."%' AND `mr_fecha` LIKE '%".$fecha."%' AND `mr_tipo` LIKE '%Servicios Inmediatos%' ORDER BY `mr_id` DESC";
		
		$query = $this->db->query($sql);

		foreach ($query->result() as $row)
		{
				$texto = $texto. "<BR><BR>ID: 0000".$row->mr_id.
				"<BR>".$row->mr_tipo." (".$row->mr_ref.")".
				"<BR>Datos adicionales: ".$row->mr_direcciones.
				"<BR>Comentarios: ".$row->mr_comentarios. 
				"<BR>Precio: [--DobleClickParaEscribir--]";
		}

		//Espera
		$sql = "SELECT * FROM `1_MR_INFO` WHERE `mr_mensajero` LIKE '%".$mensajero."%' AND `mr_fecha` LIKE '%".$fecha."%' AND `mr_tipo` LIKE '%Espera%' ORDER BY `mr_id` DESC";
		
		$query = $this->db->query($sql);

		foreach ($query->result() as $row)
		{
				$texto = $texto."<BR><BR>ID: 0000".$row->mr_id.
				"<BR>".$row->mr_tipo.
				"<BR>Cliente: ".$row->mr_ref. 
				"<BR>Comentarios: ".$row->mr_comentarios.
				"<BR>Espera: ".$row->mr_minutos." min.".
				"<BR>Precio: [--DobleClickParaEscribir--]";
		}

		//Normal
		$sql = "SELECT * FROM `1_MR_INFO` WHERE `mr_mensajero` LIKE '%".$mensajero."%' AND `mr_fecha` LIKE '%".$fecha."%' AND `mr_tipo` LIKE '%Normal%' ORDER BY `mr_id` DESC";
		
		$query = $this->db->query($sql);

		foreach ($query->result() as $row)
		{
				$texto = $texto. "<BR><BR>ID: 0000".$row->mr_id.
				"<BR>".$row->mr_tipo.
				"<BR>Total Paquetes: ".$row->mr_direcciones.
				"<BR>Desglose: ".$row->mr_comentarios.
				"<BR>Precio: [--DobleClickParaEscribir--]";
		}

		echo $texto; 
		echo '<hr>';


		$this->load->library('email');

		$this->email->from('srigo@gabinetbalear.com', 'Informes');
		$this->email->to('info@mensajeriaresponsable.com');
		$this->email->bcc('catxo99@gmail.com');

		$this->email->subject('Informes');
		$this->email->message('Re-enviar<br><pre>---------------</pre><br><br><br>'.$texto);

		$this->email->send();			
		
		echo '</div><!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</body>
		</html>';
	}

	public function Fechas(){
		//https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/fechas
		
		$this->load->view('calendario');
	}

	public function tab4(){

		$this->load->database();
		//$this->db->delete('mytable', array('id' => $id));

		$this->db->delete('1_MR_INFO', array( 'mr_mensajero' => $this->input->get('date_mensajero'), 'mr_fecha' => $this->input->get('date_fecha'), 'mr_tipo' => 'Gestiones con tiempo en Espera' ));

		$contador = 0;

		if ($this->input->get('date_cliente1')){

			
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Gestiones con tiempo en Espera',
				'mr_ref' => $this->input->get('date_cliente1'), 
				'mr_minutos' => $this->input->get('date_tiempoenespera1'),
				'mr_comentarios' => $this->input->get('date_referencias1')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente2')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Gestiones con tiempo en Espera',
				'mr_ref' => $this->input->get('date_cliente2'), 
				'mr_minutos' => $this->input->get('date_tiempoenespera2'),
				'mr_comentarios' => $this->input->get('date_referencias2')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente3')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Gestiones con tiempo en Espera',
				'mr_ref' => $this->input->get('date_cliente3'), 
				'mr_minutos' => $this->input->get('date_tiempoenespera3'),
				'mr_comentarios' => $this->input->get('date_referencias3')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente4')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Gestiones con tiempo en Espera',
				'mr_ref' => $this->input->get('date_cliente4'), 
				'mr_minutos' => $this->input->get('date_tiempoenespera4'),
				'mr_comentarios' => $this->input->get('date_referencias4')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente5')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Gestiones con tiempo en Espera',
				'mr_ref' => $this->input->get('date_cliente5'), 
				'mr_minutos' => $this->input->get('date_tiempoenespera5'),
				'mr_comentarios' => $this->input->get('date_referencias5')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		echo '<img src="http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/vale.png" height="50px" onload="myScript4()">';

		echo '<br>Datos Guardados<br><br><br>';

		echo "<script> function myScript4(){
			
			document.getElementById('demo-di4').innerHTML = 
			".$contador."
			;	
		
		}</script>";



	}

	public function tab2(){

		$this->load->database();
		//$this->db->delete('mytable', array('id' => $id));
		$this->db->delete('1_MR_INFO', array( 'mr_mensajero' => $this->input->get('date_mensajero'), 'mr_fecha' => $this->input->get('date_fecha'), 'mr_tipo' => 'Servicios Inmediatos' ));
		$contador = 0;

	


		if ($this->input->get('date_cliente1')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Servicios Inmediatos',
				'mr_ref' => $this->input->get('date_cliente1'), 
				'mr_direcciones' => $this->input->get('date_direcciones1'),
				'mr_comentarios' => $this->input->get('date_referencias1')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente2')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Servicios Inmediatos',
				'mr_ref' => $this->input->get('date_cliente2'), 
				'mr_direcciones' => $this->input->get('date_direcciones2'),
				'mr_comentarios' => $this->input->get('date_referencias2')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente3')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Servicios Inmediatos',
				'mr_ref' => $this->input->get('date_cliente3'), 
				'mr_direcciones' => $this->input->get('date_direcciones3'),
				'mr_comentarios' => $this->input->get('date_referencias3')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente4')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Servicios Inmediatos',
				'mr_ref' => $this->input->get('date_cliente4'), 
				'mr_direcciones' => $this->input->get('date_direcciones4'),
				'mr_comentarios' => $this->input->get('date_referencias4')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		if ($this->input->get('date_cliente5')){
			
			$data = array(
				'mr_mensajero' =>  $this->input->get('date_mensajero'),
				'mr_fecha' => $this->input->get('date_fecha'),
				'mr_tipo' => 'Servicios Inmediatos',
				'mr_ref' => $this->input->get('date_cliente5'), 
				'mr_direcciones' => $this->input->get('date_direcciones5'),
				'mr_comentarios' => $this->input->get('date_referencias5')		
			);
		
			$this->db->insert('1_MR_INFO', $data);

			$contador = $contador+1;
		
		
		}; 

		echo '<img src="http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/vale.png" height="50px" onload="myScript2()">';

		echo '<br>Datos Guardados<br><br><br><a onclick="goToAnchor(`goToPage`)" class="btn btn-outline-warning  btnNext">¿Quieres completar el siguiente apartado?</a>';
		
		echo "    <script>

        $('.btnNext').click(function(){
            $('.nav-pills > .active').next('a').trigger('click');
        });

    	</script>";

		echo "<script> function myScript2(){
			
			document.getElementById('demo-di2').innerHTML = 
			".$contador."
			;	
		
		}</script>";

	}

	public function tab3(){

		$name = [
			'Varios' => $this->input->get('date_varios'), 
            'Serv. Flores Tarde' => $this->input->get('date_florestarde'),
            'Serv. Flores Mañana' => $this->input->get('date_floresmana'),
			'Serv. Rebost' => $this->input->get('date_rebost'), 
			'Radza' => $this->input->get('date_radza'), 
            'Fruta Ángel 24' => $this->input->get('date_fruta'),
            'Serv. Badulake' => $this->input->get('date_badulake'),
            'Serv. Fremap' => $this->input->get('date_fremap'), 
            'San Juan de Dios' => $this->input->get('date_sanjuandedios'),
            'Plataforma Nacex' => $this->input->get('date_plataformanacex'),
			'Plataforma MRW' => $this->input->get('date_plataformamrw'),
			'Devoluciones Nacex' => $this->input->get('date_d_nacex'),
			'Devoluciones MRW' => $this->input->get('date_d_mrw'),
            'Plataforma Periódicos' => $this->input->get('date_periodicos')
		];

		$this->load->database();
		//$this->db->delete('mytable', array('id' => $id));
		$this->db->delete('1_MR_INFO', array( 'mr_mensajero' => $this->input->get('date_mensajero'), 'mr_fecha' => $this->input->get('date_fecha'), 'mr_tipo' => 'Servicios Fijos' ));
		$contador = 0; 

		foreach ($name as $key => $value) {

			//echo $key . ':' . $value . '<br>';

			if ($value!=0){ 
			
				$data = array(
					'mr_mensajero' =>  $this->input->get('date_mensajero'),
					'mr_fecha' => $this->input->get('date_fecha'),
					'mr_tipo' => 'Servicios Fijos',
					'mr_ref' => $key, 
					'mr_direcciones' => $value,
					'mr_comentarios' => 
							$key. ': '.$value
				);
			
				$this->db->insert('1_MR_INFO', $data);

				$contador = $contador+$value;
			}


		}

		echo '<img src="http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/vale.png" height="50px" onload="myScript3()">';

		echo '<br>Datos Guardados<br><br><br><a onclick="goToAnchor(`goToPage`)" class="btn btn-outline-warning  btnNext">¿Quieres completar el siguiente apartado?</a>';
		
		echo "    <script>

        $('.btnNext').click(function(){
            $('.nav-pills > .active').next('a').trigger('click');
        });

    	</script>";

		echo "<script> function myScript3(){
			
			document.getElementById('demo-di3').innerHTML = 
			".$contador."
			;	
		
		}</script>";

	}

	public function tab1(){

		//http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Tab1
		
		echo '<input type="hidden" id="di1" name="di1" value="'.$this->input->get('date_invent1').'">';
		echo '<input type="hidden" id="di2" name="di2" value="'.$this->input->get('date_invent2').'">';
		echo '<input type="hidden" id="di3" name="di3" value="'.$this->input->get('date_invent3').'">';
		echo '<input type="hidden" id="di4" name="di4" value="'.$this->input->get('date_invent4').'">';




		//INSERT INTO `1_MR_INFO` (`mr_id`, `mr_autodata`, `mr_mensajero`, `mr_fecha`, `mr_tipo`, `mr_ref`, `mr_comentarios`, `mr_minutos`, `mr_km`, `mr_direcciones`, `mr_detalles1`, `mr_detalles2`, `mr_detalles3`, `mr_euros`, `mr_total`) VALUES (NULL, current_timestamp(), 'SERGIO RIGO', '03-01', 'REPARTO NORMAL', 'MRW', '10 PAQUETES', '', '', '', '', '', '', '', '');

		$this->load->database();
		//$this->db->delete('mytable', array('id' => $id));
		$this->db->delete('1_MR_INFO', array( 'mr_mensajero' => $this->input->get('date_mensajero'), 'mr_fecha' => $this->input->get('date_fecha'), 'mr_tipo' => 'Reparto Normal' ));

		$data = array(
			'mr_mensajero' =>  $this->input->get('date_mensajero'),
			'mr_fecha' => $this->input->get('date_fecha'),
			'mr_tipo' => 'Reparto Normal',
			'mr_direcciones' => ( 
				$this->input->get('date_invent1') + 
				$this->input->get('date_invent2') + 
				$this->input->get('date_invent3') + 
				$this->input->get('date_invent4') 
			),

			'mr_comentarios' => 
				      'Paquetes MRW: '.$this->input->get('date_invent1').'; '.
				'Paquetes NACEX 700: '.$this->input->get('date_invent2').'; '.
				'Paquetes NACEX 705: '.$this->input->get('date_invent3').'; '.
				    'Paquetes OTROS: '.$this->input->get('date_invent4')
			
			
		);
	
		$this->db->insert('1_MR_INFO', $data);

		echo '<img src="http://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/img/vale.png" height="50px" onload="myScript()">';

		

		echo '<br>Datos Guardados<br><br><br><a onclick="goToAnchor(`goToPage`)" class="btn btn-outline-warning  btnNext">¿Quieres completar el siguiente apartado?</a>';
		
		echo "    <script>

        $('.btnNext').click(function(){
            $('.nav-pills > .active').next('a').trigger('click');
        });

    	</script>";

		echo "<script> function myScript(){
			
			document.getElementById('demo-di1').innerHTML = 
			parseInt(document.getElementById('di1').value) + 
			parseInt(document.getElementById('di2').value) + 
			parseInt(document.getElementById('di3').value) + 
			parseInt(document.getElementById('di4').value)
			;	
		
		}</script>";
	}


}
