<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {
        public function __construct(){
            parent::__construct();
            require_once('mpdf/mpdf.php');
        }
    
        public function reporteBilling(){
                //convertir array a variables
                foreach($_GET as $key=>$value) { $$key = $value; }
                //revisar si options es range
                if(($option=='range' || $option==0) && ($fechaFrom=='' || $fechaTo=='')){
                    echo 'error';
                }else{
                    $options = $_GET;

                    if($user!='all'){
                        $singleUser = $this->users_model->get_user_name($user);
                        $data['nameUser'] = $singleUser[0]['nombres_usuarios'];
                    }else{
                        $data['nameUser'] = 'All Users';
                    }

                    if($customer!='all'){
                        $singleCliente = $this->clientes_model->get_cliente_name($customer);
                        $data['nameCustomer'] = $singleCliente[0]['cliente'];
                    }else{
                        $data['nameCustomer'] = 'All Customers';
                    }

                    if($option=='range'){
                        $fDate = date('d-m-Y', strtotime($fechaFrom));
                        $tDate = date('d-m-Y', strtotime($fechaTo));
                        $data['period'] = 'From ' . $fDate . ' Through ' . $tDate;
                    }else{
                        $data['period'] = date('F Y', strtotime($option));
                    }

                    $resultadoModelo = $this->hours_model->get_hours_report($options);
                    $data['resultadoHora'] = $resultadoModelo;
                    $html = $this->load->view('ajax/loadtablePDFreportshours', $data, true);
                    $mpdf=new mPDF('utf-8', array(279.4,215.9));
                    $mpdf->SetTitle("SOLUCIONES PM");
                    $mpdf->SetAuthor("SPM");
                    $mpdf->SetWatermarkText('SolucionesPM');
                    $mpdf->showWatermarkText = true;
                    $mpdf->watermark_font = 'DejaVuSansCondensed';
                    $mpdf->watermarkTextAlpha = 0.1;
                    $mpdf->SetDisplayMode('fullpage');


                    $archivo = 'reporte.pdf';
                    $mpdf->WriteHTML($html);

                    $mpdf->Output($archivo, 'D');
            }
        }
        
        public function generic(){
                    $html = $this->load->view('ajax/genericPDF', '', true);
                    $mpdf=new mPDF('utf-8', array(279.4,215.9));
                    $mpdf->SetTitle("SOLUCIONES PM");
                    $mpdf->SetAuthor("SPM");
                    $mpdf->SetWatermarkText('SolucionesPM');
                    $mpdf->showWatermarkText = true;
                    $mpdf->watermark_font = 'DejaVuSansCondensed';
                    $mpdf->watermarkTextAlpha = 0.1;
                    $mpdf->SetDisplayMode('fullpage');


                    $archivo = 'generic.pdf';
                    $mpdf->WriteHTML($html);

                    $mpdf->Output($archivo, 'D');
        }
}

