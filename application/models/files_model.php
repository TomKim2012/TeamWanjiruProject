<?php
error_reporting(E_ALL & ~E_NOTICE);

class Files_Model extends CI_Model {
 
   public function insert_file($filename,$doctype, $subarea)
   {
      $data = array(
                 'upload'     => $filename,
                 'subject'     => $subarea,
                 'type'     => $doctype,
         //'title'        => $title
                'topic'=>$this->session->userdata['topic'],
                //'subject'=>$this->session->userdata['subject_area'],
                //'type'=>$this->session->userdata['document_type'],
                'pages'=>$this->session->userdata['pages'],
                'spacing'=>$this->session->userdata['spacing'],
                'urgency'=>$this->session->userdata['urgency'],
                'Style'=>$this->session->userdata['style'],
                'aclecel'=>$this->session->userdata['academic_level'],
                'lstyle'=>$this->session->userdata['language_style'],
                'totalcost'=>$this->session->userdata['total'],
                'description'=>$this->session->userdata['instructions'],

                'Fname'=>$this->session->userdata['firstname'],
                'Lname'=>$this->session->userdata['lastname'],
                'phone'=>$this->session->userdata['phone'],
                'email'=>$this->session->userdata['email'],
                'country'=>$this->session->userdata['country']
      );
      $this->db->insert('orders', $data);
      return $this->db->insert_id();
   }
   public function save_order($doctype, $subarea,$instr)
   {
      $data = array(
        
                 'subject'     => $subarea,
                 'type'     => $doctype,
                'topic'=>$this->session->userdata['topic'],
                'pages'=>$this->session->userdata['pages'],
                'spacing'=>$this->session->userdata['spacing'],
                'urgency'=>$this->session->userdata['urgency'],
                'Style'=>$this->session->userdata['style'],
                'aclecel'=>$this->session->userdata['academic_level'],
                'lstyle'=>$this->session->userdata['language_style'],
                'totalcost'=>$this->session->userdata['total'],
                //'description'=>$this->session->userdata['instructions'],
                'description'=>$instr,
                'Fname'=>$this->session->userdata['firstname'],
                'Lname'=>$this->session->userdata['lastname'],
                'phone'=>$this->session->userdata['phone'],
                'email'=>$this->session->userdata['email'],
                'country'=>$this->session->userdata['country']
      );
      $this->db->insert('orders', $data);
      return $this->db->insert_id();
   }
 
 
}