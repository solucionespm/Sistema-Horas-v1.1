<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {


	public function index()
	{
        $data['title'] = 'Client';
        $data['subtitle'] = 'Register';
        $data['icon'] = 'credit-card';
        $data['content'] = 'cliente';
        
        $clients = $this->clientes_model->get_clientes();
        
        $data['mensaje'] = "";
        if(isset($_POST['saveLoad'])){

            $client = $_POST['customer'];
            $email = $_POST['email'];
            $datos = array(
                'cliente'           =>  $client,
                'email_cliente'     =>  $email,
                'status_clientes'   =>  1
            );
            $tabla = 'clientes';
            $this->crud_model->agregar($tabla, $datos);
            $data['mensaje'] = "Client have been loaded succesfully";
            
        }
        
        if(isset($_POST['delete'])){

            $client = $_POST['customer'];
            $email = $_POST['email'];
            $datos = array(
                'cliente'           =>  $client,
                'email_cliente'     =>  $email,
                'status_clientes'   =>  1
            );
            
            $this->clientes_model->get_clientes_for_name($client);
            
            $tabla = 'clientes';
            $this->crud_model->delete($id, $datos, $tabla);
            $data['mensaje'] = "Client have been loaded succesfully";
            
        }
        
        $contentData = array(
            'clients'   =>  $clients,
        );   
        
        $data['datosArray'] = $contentData;

		$this->load->view('template_view', $data);
	}
}
