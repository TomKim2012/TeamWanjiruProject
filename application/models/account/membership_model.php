<?php
class Membership_model extends CI_Model {
	function validate(){
		/*$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',md5($this->input->post('password')));
		$this->db->select('country_id, zone_id, firstname','lastname');
		$query = $this->db->get('member');*/

		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$query = $this->db->query("SELECT * FROM member WHERE email ='$email' AND password= '$password'");
		if($query->num_rows>=1){
		foreach ($query->result_array() as $row)
			 {
			 $data=$row;
			 }
			return $data;
		}
		else
		{
		return false;
		}
	}
}