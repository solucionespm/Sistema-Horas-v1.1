<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {


	public function index()
	{
        $data['title'] = 'Client';
        $data['subtitle'] = 'Register';
        $data['icon'] = 'credit-card';
        $data['content'] = 'cliente';
       
       $contentData = array(
            'datos' =>  ''
        );
        
        $data['datosArray'] = $contentData;

		$this->load->view('template_view', $data);
	}
    
    public function registerCliente(){
        $this->load->helper('form');
    }
}
