<?php

class Upload extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	

	function do_upload()
	{
		$config['upload_path'] = './ordersfiles/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
         
			
		$data['main_content']='preview';
		$this->load->view('includes/template',$data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}
}
?>