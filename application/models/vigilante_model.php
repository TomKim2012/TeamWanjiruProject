<?php
class vigilante_model extends CI_model
{

function Getgroup($group) {

	$data=array();
	$this->db->where('id',$group);
	$query=$this->db->get('vigilante_groups');

if($query->num_rows() > 0){

foreach ($query->result() as $row) 
{
# code...
    $data[]= $row;
}

}
   return $data;
}
function Getedit($edit) {

	$data=array();
	$this->db->where('id',$edit);
	$query=$this->db->get('vigilante_groups');

if($query->num_rows() > 0){

foreach ($query->result() as $row) 
{
# code...
    $data[]= $row;
}

}
   return $data;
}
function update_group()
    {
    	$group_update_data= array(
			'id' => $this->input->post('gid'),
			'name' => $this->input->post('name'),
			'profile' => $this->input->post('profile'),

			//'date' => $this->now()
			 );
    	$this->db->where('id',$this->input->post('gid'));

		$update=$this->db->update('vigilante_groups',$group_update_data);
		return $update;
	}
function Getvigilante()
	{
		$Q=$this->db->get('vigilante_groups');

		if($Q->num_rows>0)
		{
		foreach ($Q->result()as $row) {

			$data[]=$row;
		}

		return $data;
	}
}
}
?>