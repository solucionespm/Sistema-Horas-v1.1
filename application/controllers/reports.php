<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {


	public function list_hours()
	{
                                $data['title'] = 'Reports';
                                $data['subtitle'] = 'Reports Hours';
                                $data['icon'] = 'print';
                                $data['content'] = 'reports_hours';

                                $clients = $this->clientes_model->get_clientes();

                                $data['mensaje'] = "";
                                if(isset($_POST['saveLoad'])){

                                }

                                $m = strftime('%m');
                                $y = strftime('%Y');
                                $meses = array();

                                for($i=1; $i<120; $i++)
                                    {
                                        $m--;
                                            if($m <= 0)
                                            {
                                                $y--;
                                                $m = 12;
                                            }
                                        $mesT = "";    
                        //                if($m==1){$mesT = 'January';}
                        //                if($m==2){$mesT = 'February';}    
                        //                if($m==3){$mesT = 'March';}    
                        //                if($m==4){$mesT = 'April';}    
                        //                if($m==5){$mesT = 'May';}    
                        //                if($m==6){$mesT = 'June';}    
                        //                if($m==7){$mesT = 'July';}    
                        //                if($m==8){$mesT = 'August';}    
                        //                if($m==9){$mesT = 'September';}    
                        //                if($m==10){$mesT = 'October';}    
                        //                if($m==11){$mesT = 'November';}    
                        //                if($m==12){$mesT = 'December';}  

                                        $mesT = strftime("%B",mktime(0, 0, 0, $m, 1, 2000));

                                        $mesesTexto = $mesT . ' ' . $y;  
                                        array_push($meses, array(
                                            'meses' =>  "$y-$m-01",
                                            'mesesTexto' =>  $mesesTexto
                                        ));
                                    }

                                $meses[0]['mesesTexto'] = 'Previous month';
                                $thisMonth = strftime('%Y').'-'.strftime('%m').'-01';

                                $contentData = array(
                                    'clients'   =>  $clients,
                                    'month'     =>  $meses,
                                    'thisMonth' =>  $thisMonth
                                );


                                $data['datosArray'] = $contentData;
        
		$this->load->view('template_view', $data);
	}
}

