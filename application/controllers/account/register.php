<?php
class Register extends CI_Controller {
	private $error = array(); //For Storing errors

	function index(){
		
		$this->load->model('account/member');
		$data['country_id'] =110;
		$this->load->model('localisation/country');
    	$data['countries'] = $this->country->getCountries();

		$data['main_content']='account/register';
		$this->load->view('common/template',$data);
    }

	

	function validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','Name','trim|required');
		$this->form_validation->set_rules('lastname','Last Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('telephone','Cell Phone','trim|required');
		$this->form_validation->set_rules('country_id','Country Name','required');
		$this->form_validation->set_rules('zone_id','County Name','required');

		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('confirm','Password Confirmation','trim|required|matches[password]');

		if($this->form_validation->run() == false){
			$data['main_content']='account/register';
			$this->load->view('common/template',$data);
		}
		else{
			$this->load->model('account/member');
			if($query=$this->member->addCustomer($this->input->post()))
			{

				$data=array(
					'email' =>$this->input->post('email'),
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'country_id' => $this->input->post('country_id'),
					'county_id' => $this->input->post('zone_id'),
					'is_logged_in' =>true
					);
				
				redirect('account/success');	
			}
			else{

				$data['main_content']='account/register';
				$this->load->view('common/template',$data);
			}
		}
	}

	  public function zone($country_id,$zone_id) {
		$data['text_select']  = ' --- Please Select --- ';
		$data['text_none'] = ' --- None --- ';

		$output = '<option value="">'.$data['text_select'].'</option>';
		
		$this->load->model('localisation/zone');

    	$results= $this->zone->getZonesByCountryId($country_id);
        
      	foreach ($results as $result) {
        	$output .= '<option value="'. $result['zone_id']. '"';
	
	    	if (isset($this->request->get['zone_id']) && ($zone_id==$result['zone_id'])) {
	      		$output .= 'selected="selected"';
	    	}
	
	    	$output .= '>' . $result['name'] . '</option>';
    	} 
		
		if (!$results) {
		  	$output .= '<option value="0">' . $data['text_none'] . '</option>';
		}
	
		echo $output;
  	}  

}
?>