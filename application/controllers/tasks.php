<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tasks extends CI_Controller {


	public function index()
	{
        $data['mensaje'] = "";
        if(isset($_POST['guardar'])){
            $conteo = $_POST['task'];
            foreach($conteo as $key => $c){
                $fechaA = explode('/', $_POST['fecha'][$key]);
                $fecha = $fechaA[2] . '-' . $fechaA[1] . '-' . $fechaA[0];
                //12/03/2014    
                $datos = array(
                    'id_tareas'     =>  $_POST['task'][$key],
                    'id_subtareas'  =>  $_POST['subtask'][$key],
                    'id_clientes'   =>  $_POST['customer'][$key],
                    'id_proyectos'  =>  $_POST['project'][$key],
                    'id_usuarios'   =>  1,
                    'fecha_horas'   =>  $fecha,
                    'inicio_horas'  =>  $_POST['from'][$key],
                    'fin_horas'     =>  $_POST['to'][$key],
                    'detalle_horas' =>  $_POST['detail'][$key]
                ); 
                $tabla = 'horas';
                $this->crud_model->agregar($tabla, $datos);
            }
            $data['mensaje'] = "Tasks have been saved succesfully";
        }
        
        $data['title'] = 'Tasks';
        $data['subtitle'] = 'Adding tasks';
        $data['icon'] = 'calendar';
        $data['content'] = 'tasks';
        
        $tasks = $this->tasks_model->get_tasks();
        //$subtasks = $this->tasks_model->get_all_subtasks();
        $clients = $this->clientes_model->get_clientes();
        //$proyectos = $this->clientes_model->get_proyectos($clients[8]['id_clientes']);
        
        $contentData = array(
            'tasks'     =>  $tasks,
            'clients'  =>  $clients
        );
        
        $data['datosArray'] = $contentData;
        
		$this->load->view('template_view', $data);
	}
}

