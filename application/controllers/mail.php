<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Mail extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function sendreport() {            
            $id = 2; // Id del Customer
            $datosArray = array();
            $fecha = date('Y-m-d');
            $endDate = $fecha . '-01';
            $endDate = date("Y-m-d", strtotime("$endDate +1 month"));
            $dateForm = date("Y-m-d");
            $dataCondi = $this->prepaid_model->get_prepaids($id,$dateForm);            
            
            //Condicionamos si posee actividad o no el cliente.
            $saldo = 0; // Inicializamos el saldo a 0 (NO posee actividad)
            $rangeArray = array();
            foreach ($dataCondi as $value) {
                if(in_array($dateForm, $value)){
                    $saldo = $saldo + floatval($value['horas']);                   
                }
            }
            if($saldo != 0){
                //Consulta para Obtener los datos del cliente
                $prepaidArray = $this->clientes_model->get_clientes_single($id);
                echo 'Posee Actividad' + $saldo;  // Mensaje para efectos de prueba
                $dataAll = $this->prepaid_model->get_prepaids_all($endDate);
                
                foreach ($dataAll as $p) { // Realizamos el ciclo para recorrer los datos del cliente
                    $temp = array(
                        'id_prepaid'        =>  $p['id_prepaid'],
                        'id_clientes'       =>  $p['id_clientes'],
                        'ultima_fecha'      =>  $p['fecha_prepaid'],
                        'saldo'             =>  $p['horas'],
                        'cliente'           =>  $prepaidArray[0]['cliente']                        
                    );
                    array_push($datosArray, $temp);
                }                
                $data = array(
                        'customer'      =>  'All',
                        'endDate'       =>  $endDate,
                        'range'         =>  $rangeArray,
                        'fecha'         =>  $fecha,
                        'option'        =>  '',
                        'showButton'    => 'hidden', // Necesario para poder condicionar si se muestra o no los botones
                        'prepaidData'   =>  $datosArray
                    );
                echo $this->load->view('ajax/loadtableprepaidsAll', $data, true);                
            }
            $prepaidArray = $this->prepaid_model->get_prepaids($id, $endDate);
            $data = array(
                    'customer'      =>  'All',
                    'endDate'       =>  $endDate,
                    'range'         =>  $rangeArray,
                    'fecha'         =>  $fecha,
                    'option'        =>  '',
                    'showButton'    =>  'hidden', // Necesario para poder condicionar si se muestra o no los botones
                    'prepaidData'   =>  $prepaidArray
                );

            echo $this->load->view('ajax/loadtableprepaids', $data, true);
            die(); // matamos el proceso para no cargar la parte de mail

            //Comenzamos a cargar el email.
            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';

            $this->email->initialize($config);
            
            $dataMail = $this->clientes_model->get_clientes_single($id);
            foreach ($dataMail as $row) { // Realizamos el ciclo para recorrer los datos del cliente                
                $this->email->clear(); // Reseteamos todas las variables de email a un estado vacio
                $this->email->from('hanselcolmenarez@hotmail.com', 'SolucionesPM-Prueba');
                $this->email->to($row['email_cliente']);
                $this->email->subject('Reporte de Horas');
                $msg='
                    <div style="background-color:#CF9E2D; width: 600px; padding:10px; margin:auto; border: 2px solid #3A2919; border-top: 10px solid #3A2919;">
                    <h1 style="color:#fff; font-weight:bold;">Prueba de Envio de Email Snippet by Orellana</h1>    
                    <p style="margin-left:10px;color:#fff;">Customer: ' . $row['cliente'] . '</p>
                    <p style="margin-left:10px;color:#fff;">Email: ' . $row['email_cliente'] . '</p>      
                    </div>
                    ';
                $this->email->message($msg);
                if ( ! $this->email->send()) {
                    echo $this->email->print_debugger(); // Cambiar luego por return 'Error';
                }
            }
	}
}