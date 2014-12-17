<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function loadTaskList(){
        /*echo '<pre>';
        print_r($_POST);
        die();*/
        echo $this->load->view('ajax/taskList', $_POST, true);
    }
    
    public function loadprojects($id){
        $data['projects'] = $this->clientes_model->get_proyectos($id);
        echo $this->load->view('ajax/loadprojects', $data, true);
    }
    
    public function loadsubtasks($id){
        $data['subtasks'] = $this->tasks_model->get_subtasks($id);
        echo $this->load->view('ajax/loadsubtasks', $data, true);
    }
    
    public function loadTablePrepaids(){
        //$data['post'] = $_POST;
        $endDate = '';
        $rangeArray = array();
        $fecha = $_POST['option'];
        $customer = $_POST['customer'];
        $option = $_POST['option'];
        
        if($customer=='all'){
            if($option!='range'){
                $endDate = $fecha . '-01';
                $endDate = date("Y-m-d", strtotime("$endDate +1 month"));
                $prepaidArray = $this->prepaid_model->get_prepaids_all($endDate);
                $datosArray = array();
                
                if(!empty($prepaidArray)){
                    foreach($prepaidArray as $p){
                        $singleCliente = $this->clientes_model->get_clientes_single($p['id_clientes']);
                        $temp = array(
                            'id_prepaid'        =>  $p['id_prepaid'],
                            'id_clientes'       =>  $p['id_clientes'],
                            'ultima_fecha'      =>  $p['fecha_prepaid'],
                            'saldo'             =>  $p['horas'],
                            'cliente'           =>  $singleCliente[0]['cliente']
                        );
                        array_push($datosArray, $temp);
                    }
                    asort($datosArray);
                }
            }else{
                $from = date('Y-m-d', strtotime($_POST['fechaFrom']));
                $to = date('Y-m-d', strtotime($_POST['fechaTo']));
                $prepaidArray = $this->prepaid_model->get_prepaids_range($customer, $from, $to);
                $rangeArray['from'] = $from;
                $rangeArray['to'] = $to;
            }
                    $data = array(
                        'customer'      =>  'All',
                        'endDate'       =>  $endDate,
                        'range'         =>  $rangeArray,
                        'fecha'         =>  $fecha,
                        'option'        =>  $option,
                        'prepaidData'   =>  $datosArray
                    );
                    echo $this->load->view('ajax/loadtableprepaidsAll', $data, true);
        }else{
            if($option!='range'){

                $endDate = $fecha . '-01';
                $endDate = date("Y-m-d", strtotime("$endDate +1 month"));

                $prepaidArray = $this->prepaid_model->get_prepaids($customer, $endDate);
            }else{
                $from = date('Y-m-d', strtotime($_POST['fechaFrom']));
                $to = date('Y-m-d', strtotime($_POST['fechaTo']));
                $prepaidArray = $this->prepaid_model->get_prepaids_range($customer, $from, $to);
                $rangeArray['from'] = $from;
                $rangeArray['to'] = $to;
            }

            $data = array(
                'customer'      =>  $customer,
                'endDate'       =>  $endDate,
                'range'         =>  $rangeArray,
                'fecha'         =>  $fecha,
                'option'        =>  $option,
                'prepaidData'   =>  $prepaidArray
            );
            echo $this->load->view('ajax/loadtableprepaids', $data, true);
        }
    }
    
    public function loadhours($fecha, $customer){
        $data['fecha'] = $fecha;
        $data['customer'] = $customer;
        echo $this->load->view('ajax/loadhourdetail', $data, true);
    }
    
}