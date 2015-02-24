<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

   public function createBalancePDF($dataAllPDF,$nb_customer, $nb_report, $mes_nomb, $year){
        $this->load->library('pdf');
        $mpdf = $this->pdf->load();
        $mpdf->SetHeader('|Soluciones PM||');
        $mpdf->SetFooter('{PAGENO}');
        $mpdf->WriteHTML($dataAllPDF);        
        $archivo =  'temp/'.$nb_customer.'-'.$nb_report.'-'.$mes_nomb.'-'.$year.'.pdf'; 
        $mpdf->Output($archivo,'F');
        return $archivo;
    }

    public function sendreport() {            
        $id = 95; // Id del Customer
        $fecha = '2014-07';//date('Y-m');
        setlocale(LC_TIME, 'en_US');
        $date = explode("-",$fecha);
        $mes_nomb = strftime("%B",mktime(0, 0, 0, $date[1], 1, 2000));
        $year = $date[0];

        //==================================================================
        // Consultas a la BD
        //==================================================================
        
        $clienteArray = $this->clientes_model->get_clientes_single($id);        
                    
        $reportAll['dataReporte'] = $this->prepaid_model->get_prepaids($id, date('Y-m-d'));

        //==================================================================
        // Proceso de carga de datos para el Mail
        //==================================================================        
        
        $data['customerName'] = $clienteArray[0]['cliente'];
        $fechaArr = explode(' ',$fecha);
        $fechaArr = explode('-', $fechaArr[0]);
        $year = $fechaArr[0];
        $month = $fechaArr[1];
        $dateFrom = $fecha . "-01";
        $nextDate = $fecha . "-31";
        
        $data['horas'] = $this->hours_model->get_hours($dateFrom, $nextDate, $id);
        $horas = 0;     $i=0;
        // Validamos que exista un balance menor o mayor a 0 para poder enviar el reporte
        foreach($reportAll['dataReporte'] as $row){            
            $fechaExplode = explode('-',$row['fecha_prepaid']);
            $fechaCompara[$i] = $fechaExplode[0] .'-'. $fechaExplode[1];            
            if(in_array($fecha,$fechaCompara)) $horas = $horas + (float)$row['horas'];
            $i++;            
        }
        
        if($horas < 0 || $horas > 0){
            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';

            $this->email->initialize($config);

            //==================================================================
            // Prueba de la vista del reporte de balance en PDF
            //==================================================================
            if(!empty($data['horas'])){
                $nb_report = 'Detalle';         
                $mesT = strftime("%B",mktime(0, 0, 0, $month, 1, 2000));
                $data['fecha'] = $mesT . ' ' . $fechaArr[0];
                $balanceMesPDF = $this->load->view('balanceMes_view', $data, true);            
                $reportBalanceMes = $this->createBalancePDF($balanceMesPDF, $clienteArray[0]['cliente'], $nb_report, $mes_nomb, $year);
                $this->email->attach($reportBalanceMes);            
            }
            $nb_report = 'Balance';
            $fechaNew = date('Y-m-d');
            $endDate = date("Y-m-01", strtotime("$fechaNew +1 month"));
           // echo $endDate; die();
            $prepaidArray = $this->prepaid_model->get_prepaids($id, $endDate);
            $firstD = reset($prepaidArray);
            $lastD = end($prepaidArray);

            $start = $month = strtotime($firstD['fecha_prepaid']);
            $end = strtotime($lastD['fecha_prepaid']);
            $newPrepaidArray = array();
            while($month <= $end)
            {
                //variables
                 $dateNumber = date('Y-m-01', $month);
                 $dateString = date('F Y', $month);
                 $nextMonth = date("Y-m-d", strtotime("+1 month", strtotime($dateNumber)));        
                 //get arrays of a certain month
                 $tempArray = array();
                 foreach($prepaidArray as $p){
                        $theDate = date('Y-m-d', strtotime($p['fecha_prepaid']));

                        if(($theDate >= $dateNumber) && ($theDate < $nextMonth)){
                            array_push($tempArray, $p);
                        }
                 }
                 ///from this month separate negative and positive array
                $pos_arr=array(); $neg_arr=array();
                foreach($tempArray as $val){
                        ($val['horas']<0) ?  $neg_arr[]=$val : $pos_arr[]=$val;
                }
                ///add to new array positive values and add negatives
                foreach($pos_arr as $p){
                            array_push($newPrepaidArray, $p);
                }
                $negVal = 0;
                foreach($neg_arr as $n){
                          $negVal = $negVal - (-$n['horas']);
                }
                $negVal = number_format($negVal, 2, '.', '');
                //negative array
                if($negVal != 0){
                        $negArray = array(
                                'id_prepaid'    =>  0,
                                'id_clientes'   =>  $id,
                                'fecha_prepaid' =>  $dateNumber,
                                'horas'     =>  $negVal,
                                'id_bills'  =>  0
                        );
                        array_push($newPrepaidArray, $negArray);
                }
                 //****************************************//
                 $month = strtotime("+1 month", $month);
               }
               $prepaidArray = $newPrepaidArray;
               $data = array(
                    'customer'      =>  $id,
                    'endDate'       =>  $endDate,
                    'range'         =>  $rangeArray,
                    'fecha'         =>  $fechaNew,
                    'option'        =>  $option,
                    'prepaidData'   =>  $prepaidArray
               );
            //echo $this->load->view('ajax/loadtableprepaids', $data, true);
            $balanceAllPDF = $this->load->view('tablaBalance_view', $data, true);
            $reportBalancePDF = $this->createBalancePDF($balanceAllPDF, $clienteArray[0]['cliente'], $nb_report, $mes_nomb, $year);
            $this->email->attach($reportBalancePDF);

            $this->email->from('gilberto@solucionespm.com', 'SolucionesPM-Prueba');
            $this->email->to('hanselcolmenarez@hotmail.com'); //$clienteArray[0]['email_cliente']
           // $this->email->cc('hanselcolmenarez@hotmail.com');
            $this->email->subject('Reporte de Horas');

            $msg='
                <div style="background-color:#CF9E2D; width: 600px; padding:10px; margin:auto; border: 2px solid #3A2919; border-top: 10px solid #3A2919;">
                <h1 style="color:#fff; font-weight:bold;">Prueba de Envio de Email by Hansel Colmenarez</h1>    
                <p style="margin-left:10px;color:#fff;">Customer: ' . $clienteArray[0]['cliente'] . '</p>
                <p style="margin-left:10px;color:#fff;">Email: ' . $clienteArray[0]['email_cliente'] . '</p>      
                </div>
            ';
            $this->email->message($msg);
            if ( ! $this->email->send()) {
                echo $this->email->print_debugger(); // Cambiar luego por return 'Error';
            }else{
                echo 'Email enviado Satisfactoriamente a ' . $clienteArray[0]['cliente'];
            }
        }
	}
}