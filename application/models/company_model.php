<?php
class Company_model extends CI_model
{
function show_testimonials()
	{
		$A=$this->db->get('testimonials');

		if($A->num_rows>0)
		{
		foreach ($A->result()as $row) {

			$data[]=$row;
		}

		return $data;
	}
}
}