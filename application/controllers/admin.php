<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
        $data['title'] = 'Dashboard';
        $data['subtitle'] = 'General settings';
        $data['icon'] = 'home';
        $data['content'] = 'dashboard';
        
        $contentData = array(
            'datos' =>  ''
        );
        
        $data['datosArray'] = $contentData;
        
		$this->load->view('template_view', $data);
	}
}

