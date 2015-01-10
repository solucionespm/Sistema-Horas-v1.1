<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function sendreport() {            
            $id = 2; // Id del Customer
            $year = date("Y");
            $month = date("m");

            // Variables para determinar el saldo positivo o negativo
            $saldoP = 0;    $saldoN = 0;

            //==================================================================
            // Consultas a la BD
            //==================================================================

            $prepaidDateNow = $this->prepaid_model->get_prepaids_dateNow($id, $year, $month);
            $prepaidArray = $this->clientes_model->get_clientes_single($id);

            foreach ($prepaidDateNow as $value) {
                if($value['horas'] < 0){
                    $saldoN = $saldoN + floatval($value['horas']);
                }else{
                    $saldoP = $saldoP + floatval($value['horas']);
                }
            }
            $saldoMes = array(
                'saldoP'     =>  $saldoP, //Saldo positivo por mes
                'saldoN'     =>  $saldoN, //Saldo negativo por mes
            );
            array_push($prepaidDateNow, $saldoMes);
            var_dump($prepaidDateNow);
            die(); // matamos el proceso para no cargar la parte de mail

            //==================================================================
            // Proceso de carga de datos para el Mail
            //==================================================================

            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';

            $this->email->initialize($config);

            foreach ($prepaidArray as $row) { // Realizamos el ciclo para recorrer los datos del cliente                
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