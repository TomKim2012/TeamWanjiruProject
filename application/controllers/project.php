<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

   function aboutwanjiru()
	{
		$data['main_content']='about';
		$this->load->view('includes/template',$data);
	}
	function issues()
	{
		$data['main_content']='issues';
		$this->load->view('includes/template',$data);
	}
	function contact()
	{
		$data['main_content']='contact';
		$this->load->view('includes/template',$data);
	}
	function volunteer()
	{
		$data['main_content']='volunteer';
		$this->load->view('includes/template',$data);
	}
	function starehe()
	{
		$data['main_content']='starehesuccess';
		$this->load->view('includes/template',$data);
	}
	function donate()
	{
		$data['main_content']='donate';
		$this->load->view('includes/template',$data);
	}
	function single()
	{
		$data['main_content']='single';
		$this->load->view('includes/template',$data);
	}
	}