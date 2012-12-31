<?php
class forum_model extends CI_model
{
function insert_message()
    {
    	$new_message_insert_data= array(
    		'title' => $this->input->post('title'),
			'message' => $this->input->post('message'),
			'user' =>$this->session->userdata('username'),
			 );
		$insert=$this->db->insert('messages',$new_message_insert_data);
		return $insert;
	}
	function Getmessages()
	{
		$Q=$this->db->get('messages');

		if($Q->num_rows>0)
		{
		foreach ($Q->result()as $row) {

			$data[]=$row;
		}

		return $data;
	}
	}
	function Getcomments($mes)
	{
		$data=array();
		$this->db->where('mesid',$mes);
		$C=$this->db->get('comments');

		if($C->num_rows>0)
		{
		foreach ($C->result()as $row) {

			$data[]=$row;
		}

		return $data;
	}
	}
	function insertcomment()
    {
    	$insert_comment_data= array(

			'comments' => $this->input->post('comments'),
			'mesid' => $this->input->post('mesid'),
			'user' =>$this->session->userdata('username'),
			 );

		$update=$this->db->insert('comments',$insert_comment_data);
		return $update;
	}
	function Getmescomments($mes) {

	$data=array();
	$this->db->where('id',$mes);
	$query=$this->db->get('messages');

		if($query->num_rows() > 0){

		foreach ($query->result() as $row) 
		{
		# code...
		    $data[]= $row;
		}

		}
		   return $data;
		}
	}
?>