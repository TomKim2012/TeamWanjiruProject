<?php
class Message_model extends CI_model
{
function insert_message()
    {
    	$new_message_insert_data= array(
    		'user' => $this->input->post('user'),
			'message' => $this->input->post('message'),
			'order_id' => $this->input->post('message_id'),
			
			 );
		$insert=$this->db->insert('messages',$new_message_insert_data);
		return $insert;
	}
	function Getmessages($mes)
	{
		$userid=$this->session->userdata['my_id'];
		$data=array();
		$this->db->where('user',$userid);
		$this->db->where('order_id',$mes);

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
		$userid=$this->session->userdata['my_id'];
		$this->db->where('user_id',$userid);
		$this->db->where('order',$mes);
		$C=$this->db->get('comments');

		if($C->num_rows>0)
		{
		foreach ($C->result()as $row) {

			$data[]=$row;
		}

		return $data;
	}
	}
	function insert_comment()
    {
    	$insert_comment_data= array(

			'comment' => $this->input->post('comment'),
			'msg_id' => $this->input->post('mess_id'),
			'user_id' =>$this->input->post('comment_user'),
			'order' =>$this->input->post('order_id'),
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