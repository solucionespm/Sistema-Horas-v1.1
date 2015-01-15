<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

   public function createBalancePDF($dataAllPDF,$nb_customer, $nb_report){
        $this->load->library('pdf');
        $mpdf = $this->pdf->load();
        $mpdf->SetHeader('Soluciones PM|'.date('Y-m-d').'|'.$nb_customer.'');
        $mpdf->SetFooter('{PAGENO}');
        $mpdf->WriteHTML($dataAllPDF);        
        $archivo =  'Balance_'.$nb_report.'_'.$nb_customer.'.pdf';
        $mpdf->Output($archivo,'F');
        return $archivo;
    }

    public function sendreport() {            
        $id = 2; // Id del Customer

        //==================================================================
        // Consultas a la BD
        //==================================================================
        $prepaidMes['dataReporte'] = $this->prepaid_model->get_prepaids_dateNow($id, date("Y"), date("m"));
        $clienteArray = $this->clientes_model->get_clientes_single($id);
        $reportAll['dataReporte'] = $this->prepaid_model->get_prepaids($id, date('Y-m-d'));


        //==================================================================
        // Prueba de la vista del reporte de balance en PDF
        //==================================================================
        if(!empty($prepaidMes['dataReporte'])){
            $nb_report = 'Mes';
            $balanceMesPDF = $this->load->view('balanceMes_view', $prepaidMes, true);
            $reportBalanceMes = $this->createBalancePDF($balanceMesPDF, $clienteArray[0]['cliente'], $nb_report);
            $this->email->attach('rh/' . $attach);
        }
        $nb_report = 'Final';
        $balanceAllPDF = $this->load->view('tablaBalance_view', $reportAll, true);
        $reportBalancePDF = $this->createBalancePDF($balanceAllPDF, $clienteArray[0]['cliente'], $nb_report);
        $this->email->attach('rh/' . $attach);
        
        var_dump($reportBalanceMes); echo '<br>';
        var_dump($reportBalancePDF);
        die();
        
        if($attach!=''){
            
            
        }
        //==================================================================
        // Proceso de carga de datos para el Mail
        //==================================================================
        $this->load->library('email');
        $config['protocol'] = 'sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from('hanselcolmenarez@hotmail.com', 'SolucionesPM-Prueba');
        $this->email->to($clienteArray[0]['email_cliente']);
        $this->email->subject('Reporte de Horas');

        if($attach!=''){
            $this->email->attach('sp/' . $attach);
        }
        $msg='
            <div style="background-color:#CF9E2D; width: 600px; padding:10px; margin:auto; border: 2px solid #3A2919; border-top: 10px solid #3A2919;">
            <h1 style="color:#fff; font-weight:bold;">Prueba de Envio de Email Snippet by Orellana</h1>    
            <p style="margin-left:10px;color:#fff;">Customer: ' . $clienteArray[0]['cliente'] . '</p>
            <p style="margin-left:10px;color:#fff;">Email: ' . $clienteArray[0]['email_cliente'] . '</p>      
            </div>
        ';
        $this->email->message($msg);
        die(); // matamos el proceso para no cargar la parte de mail
        if ( ! $this->email->send()) {
            echo $this->email->print_debugger(); // Cambiar luego por return 'Error';
        }
	}
}