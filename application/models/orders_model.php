<?php
class Orders_model extends CI_model
{
	function show_orders($userid)
	{
		$this->db->where('email',$userid);
		$A=$this->db->get('orders');

		if($A->num_rows>0)
		{
		foreach ($A->result()as $row) {

			$data[]=$row;
		}

		return $data;
	}
}
function show_area($sarea)
	{
		$this->db->where('no',$sarea);
		$A=$this->db->get('subject_area');

		if($A->num_rows>0)
		{
		foreach ($A->result()as $row) {

			$data['area']=$row;
		}

		return $data;
	}
}
function show_type($dtype)
	{
		$this->db->where('id',$dtype);
		$A=$this->db->get('document_types');

		if($A->num_rows>0)
		{
		foreach ($A->result()as $row) {

			$data['document']=$row;
		}

		return $data;
	}
}

function insert_order(){
	    $stat='Received';


		$new_orders=array(

		        'topic'=>$this->session->userdata['topic'],
                'subject'=>$this->session->userdata['subject_area'],
                'type'=>$this->session->userdata['document_type'],
                'pages'=>$this->session->userdata['pages'],
                'spacing'=>$this->session->userdata['spacing'],
                'urgency'=>$this->session->userdata['urgency'],
                'Style'=>$this->session->userdata['style'],
                'aclecel'=>$this->session->userdata['academic_level'],
                'lstyle'=>$this->session->userdata['language_style'],
                'totalcost'=>$this->session->userdata['total'],
                'description'=>$this->session->userdata['instructions'],
                'status'=>$this->$stat,

                'Fname'=>$this->session->userdata['firstname'],
                'Lname'=>$this->session->userdata['lastname'],
                'phone'=>$this->session->userdata['phone'],
                'email'=>$this->session->userdata['email'],
                'country'=>$this->session->userdata['country']
		        
		
		);
		$insert =$this->db->insert('orders',$new_orders);
		return $insert;

	}


}
?>