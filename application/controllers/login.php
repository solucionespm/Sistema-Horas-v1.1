<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        
        $data = array(
            'datos' =>  ''
        );
		$this->load->view('login_view', $data);
	}
}

