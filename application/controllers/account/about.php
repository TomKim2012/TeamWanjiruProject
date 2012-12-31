<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {	
	public function index()
	{
		$data['main_content']='account/about';
		$this->load->view('includes/template',$data);		
		
		/*$this->load->controller('homepage');
		$this->homepage->login(); //Checks for User-Login*/
	}
}