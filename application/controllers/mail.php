<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

   public function createBalancePDF($dataAllPDF,$nb_customer, $nb_report){
        $this->load->library('pdf');
        $mpdf = $this->pdf->load();
        $mpdf->SetHeader('Soluciones PM|'.date('Y-m-d').'|'.$nb_customer.'');
        $mpdf->SetFooter('{PAGENO}');
        $mpdf->WriteHTML($dataAllPDF);        
        $archivo =  'temp/Balance_'.$nb_report.'_'.$nb_customer.'.pdf';
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
        // Proceso de carga de datos para el Mail
        //==================================================================
        $this->load->library('email');
        $config['protocol'] = 'sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        //==================================================================
        // Prueba de la vista del reporte de balance en PDF
        //==================================================================
        if(!empty($prepaidMes['dataReporte'])){
            $nb_report = 'Mes';
            $fecha = date('Y-m');            
            $singleCliente = $this->clientes_model->get_clientes_single($id);
            $data['customerName'] = $clienteArray[0]['cliente'];
            $fechaArr = explode(' ',$fecha); 
            $fechaArr = explode('-', $fechaArr[0]);
            $year = $fechaArr[0];
            $month = $fechaArr[1];
            $dateFrom = $fecha . "-01";
            $nextDate = $fecha . "-31";
            $data['horas'] = $this->hours_model->get_hours($dateFrom, $nextDate, $id);
            $mesT = strftime("%B",mktime(0, 0, 0, $month, 1, 2000));
            $data['fecha'] = $mesT . ' ' . $fechaArr[0];
            $balanceMesPDF = $this->load->view('ajax/loadhourdetail', $data, true);            
            $reportBalanceMes = $this->createBalancePDF($balanceMesPDF, $clienteArray[0]['cliente'], $nb_report);
            $this->email->attach($reportBalanceMes);            
        }
        $nb_report = 'Final';
        $balanceAllPDF = $this->load->view('tablaBalance_view', $reportAll, true);
        $reportBalancePDF = $this->createBalancePDF($balanceAllPDF, $clienteArray[0]['cliente'], $nb_report);
        $this->email->attach($reportBalancePDF);


        $this->email->from('hanselcolmenarez@hotmail.com', 'SolucionesPM-Prueba');
        $this->email->to('hanselcolmenarez@hotmail.com'); //$clienteArray[0]['email_cliente']
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
        }else{
            echo 'Email enviado Satisfactoriamente a' . $clienteArray[0]['email_cliente'];
        }
	}
}