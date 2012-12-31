<?php
class users_model extends CI_model
{
	function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean(md5($this->input->post('upasswd')));
 
        // Prep the query
        $this->db->where('email', $username);
        $this->db->where('password', $password);
 
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'my_id' => $row->id,
                    'first_name' => $row->firstname,
                    'last_name' => $row->lastname,
                    'phone' => $row->phone,
                    'mail' => $row->email,
                    'Address'=>$row->address,
                    'code'=>$row->code,
                    'country'=>$row->country,
                    'city'=>$row->city,
                    'date'=>$row->date,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
    function check_mail(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('email'));
 
        // Prep the query
        $this->db->where('email', $username);
        
 
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
        	$data = array(
                    'my_email' => $username,
                    'verified' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
    function existvalidate(){
        // grab user input
        $Mail=$this->session->userdata['email'];
 
        // Prep the query
        $this->db->where('email', $Mail);
        
 
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
        	
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
    function change_password(){
		$myemail=$this->session->userdata['my_email'];
		$update_pass=array(

		'password' =>md5($this->input->post('cpass'))
		);
		$this->db->where('email', $myemail);
$update=$this->db->update('users', $update_pass);

		return $update;

	}
	function gettotalcost($userid) {
		$sum=0;
		$total=0;
		$this->db->where('email',$userid);
		$this->db->where('status','Received');
		$query=$this->db->get('orders');
			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$sum=$row->totalcost;
				$total=$total+$sum;
			}	
		}
		return $total;
	}
	function gettotalorder($userid) {
		$sum=0;
		$this->db->where('email',$userid);
		$query=$this->db->get('orders');
			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$sum=$sum+1;
			}	
		}
		return $sum;
	}

	function getreceivedorder($userid) {
		$total=0;
		$this->db->where('email',$userid);
		$this->db->where('status','Received');
		$query=$this->db->get('orders');
			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$total=$total+1;
			}	
		}
		return $total;
	}
	function getprocessingorder($userid) {
		$total=0;
		$this->db->where('email',$userid);
		$this->db->where('status','Processing');
		$query=$this->db->get('orders');
			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$total=$total+1;
			}	
		}
		return $total;
	}
	function getcompletedorder($userid) {
		$total=0;
		$this->db->where('email',$userid);
		$this->db->where('status','Completed');
		$query=$this->db->get('orders');
			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$total=$total+1;
			}	
		}
		return $total;
	}
	function getcancelledorder($userid) {
		$total=0;
		$this->db->where('email',$userid);
		$this->db->where('status','Cancelled');
		$query=$this->db->get('orders');
			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$total=$total+1;
			}	
		}
		return $total;
	}
	function gettotalusers($userid) {
		$total=0;
		$this->db->where('email',$userid);
		$query=$this->db->get('users');
			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$total=$total+1;
			}	
		}
		return $total;
	}
	function gethomeorders($userid) {
		
		$data=array();
		$this->db->where('email',$userid);
		$this->db->order_by("orderno", "desc");
		$this->db->limit('5');
		$query=$this->db->get('orders');

			if($query->num_rows() > 0){

			foreach ($query->result() as $row) {
				# code...
				$data[]= $row;	
			}			
		}
		return $data;
	}



//Auto Member Module
	function auto_member(){
		//$passn=rand();
		//$rand_pass=array(
		//'autopasscreation' =>$passn,
		//);
		//$this->session->set_userdata($rand_pass);
		
		$new_member=array(
		'firstname' =>$this->session->userdata['firstname'],
		'lastname' =>$this->session->userdata['lastname'],
		'email' =>$this->session->userdata['email'],
		'country' =>$this->session->userdata['country'],
		'password' =>md5($this->session->userdata['firstname'])
		);
		$insert_auto =$this->db->insert('users',$new_member);

		return $insert_auto;

	}
	//Auto Member End









	
function create_member(){
		
		$new_member=array(
		'firstname' =>$this->input->post('firstname'),
		'lastname' =>$this->input->post('lastname'),
		//'phone' =>$this->input->post('phone'),
		'email' =>$this->input->post('email'),
		//'address' =>$this->input->post('address'),
		//'code'=>$this->input->post('pcode'),
		'country' =>$this->input->post('country'),
		'city'=>$this->input->post('city'),
		'password' =>md5($this->input->post('pass1'))
		
		
		);
		$insert =$this->db->insert('users',$new_member);
		return $insert;

	}
	function check_username($username)
	{
	    $this->db->select('username');
	    $this->db->where('username',$username);
	    $query = $this->db->get('users');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}

	function check_email($email)
	{
		$this->db->select('email');
	    $this->db->where('email',$email);
	    $query = $this->db->get('users');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}

		
    }

?>