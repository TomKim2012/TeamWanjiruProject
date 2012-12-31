<?php
class Users extends CI_model{

	public function is_member($facebook_user){
      $this->db->where('email', $facebook_user['email']);

      $query = $this->db->get('users');
      if($query->num_rows == 1)
      {
      	return true;
      }
      else{
      	return false;
      }
	}

	public function log_in($facebook_user){
		$data = array (
			'is_logged_in'=> 1,
			'email' => $facebook_user['email'],
			'name' => $facebook_user['name'],
			'firstname' => $facebook_user['first_name'],
			'lastname' => $facebook_user['last_name'],
			'username'=>$facebook_user['username']
			);
		echo $facebook_user['username'];
		$this->session->set_userdata($data);
		redirect('home/members');
	}

	public function sign_up_from_facebook($facebook_user){
		$data = array(
				'first_name' => $facebook_user['first_name'],
				'last_name' => $facebook_user['last_name'],
				'email' => $facebook_user['email'],
				'gender' => $facebook_user['gender'],
				'username' => $facebook_user['username']
			);
		$this -> db ->insert('users',$data);
		redirect('home/members');
	}
}
?>