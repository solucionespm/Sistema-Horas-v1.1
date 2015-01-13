<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function createBalancePDF(){
        $id = 2; // Id del Customer
        $data['balance'] = $this->prepaid_model->get_prepaids($id, date('Y-m-d'));
        $clienteArray = $this->clientes_model->get_clientes_single($id);

        $this->load->library('pdf');
        $mpdf = $this->pdf->load();        
        $balancePDF = $this->load->view('tablaBalance', $data, true);
        
        $mpdf->SetHeader('Soluciones PM|'.date('Y-m-d').'|'.$clienteArray[0]['cliente'].'');
        $mpdf->SetFooter('{PAGENO}');

        $mpdf->WriteHTML($balancePDF);
        $mpdf->Output();
    }

    public function sendreport() {            
            $id = 2; // Id del Customer
            
            //==================================================================
            // Consultas a la BD
            //==================================================================
            $prepaidDateNow = $this->prepaid_model->get_prepaids_dateNow($id, date("Y"), date("m"));
            $clienteArray = $this->clientes_model->get_clientes_single($id);
            $data['balance'] = $this->prepaid_model->get_prepaids($id, date('Y-m-d'));
        
            //==================================================================
            // Prueba de la vista del reporte de balance en PDF
            //==================================================================
            $balancePDF = $this->load->view('tablaBalance', $data, true);
        
            echo $balancePDF;
           
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

            $this->email->clear(); // Reseteamos todas las variables de email a un estado vacio
            $this->email->from('hanselcolmenarez@hotmail.com', 'SolucionesPM-Prueba');
            $this->email->to($clienteArray[0]['email_cliente']);
            $this->email->subject('Reporte de Horas');
            $msg='
                <div style="background-color:#CF9E2D; width: 600px; padding:10px; margin:auto; border: 2px solid #3A2919; border-top: 10px solid #3A2919;">
                <h1 style="color:#fff; font-weight:bold;">Prueba de Envio de Email Snippet by Orellana</h1>    
                <p style="margin-left:10px;color:#fff;">Customer: ' . $clienteArray[0]['cliente'] . '</p>
                <p style="margin-left:10px;color:#fff;">Email: ' . $clienteArray[0]['email_cliente'] . '</p>      
                </div>
            ';
            $this->email->message($msg);
            if ( ! $this->email->send()) {
                echo $this->email->print_debugger(); // Cambiar luego por return 'Error';
            }
	}
}