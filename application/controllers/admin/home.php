<?php
class Home extends CI_Controller {
	function index(){
		$data['main_content']='admin/welcome';
		$this->load->view('admin/includes/template',$data);
	}
	function category(){
		$data['main_content']='admin/category';
		$this->load->view('admin/includes/template',$data);	
	}

}