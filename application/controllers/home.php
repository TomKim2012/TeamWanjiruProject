<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {	
	public function index()
	{
		$this->load->model('post_model'); 
		$data['posts'] =$this->post_model->getlatestposts(); //Gets the latest posts
		$data['main_content']='homepage';
		$this->load->view('includes/template',$data);		
		$this -> login(); //Checks for User-Login
	}

	public function login(){
		$this->load->library ('fbconnect');
	}

	/* Function to request for permissions from facebook the data */
	public function facebook_request(){
		$this->load-> library('fbconnect');

		/* Remember using url instead of uri; will lead to an unstoppable loop within this function */
		$data = array(
 			'redirect_uri' => site_url('home/handle_facebook_login'),
 			'scope' => 'email,user_hometown'				
			);
		redirect($this->fbconnect->getLoginUrl($data));
	}

	/* Function to handle the data returned */
	public function handle_facebook_login(){
		$this->load-> library('fbconnect'); //Our facebook Library

	 if ($this->fbconnect->user){//Has data come from facebook
      /* echo '<pre>'; print_r ($this->fbconnect->user); echo'</pre>';} */      
        $this->load-> model('users'); //Load the users Model
        $facebook_user = $this->fbconnect->user;//facebook data
            //The Logic
	        if($this->users->is_member($facebook_user)){
	        	$this->users->log_in($facebook_user); //Already exists Sign him/her in;
	        }else{
	        	$this->users->sign_up_from_facebook($facebook_user);
	        	$this->users->log_in($facebook_user);
	        }    
        }
        else{
        	echo "Something went wrong during the connection with Facebook";
        }
       
	}

	/* Function to handle inside the Members Page */
	public function members(){
		if($this->session->userdata('is_logged_in')){
		 $data=$this->session->all_userdata(); 
		 $data['main_content']='account/about';
		 $this->load->view('account/ac_template',$data);		 
		}
		else{
		 redirect('home/login');	
		}    
	}
	/* Function to handle inside the Members Page */
	public function volunteer(){
		if($this->session->userdata('is_logged_in')){
		 $data=$this->session->all_userdata(); 
		 $data['main_content']='account/volunteer';
		 $this->load->view('account/ac_template',$data);
		 }
		else{
		 redirect('home/login');	
		}    
	}

	/* Function to handle inside the Members Page */
	public function donate(){
		if($this->session->userdata('is_logged_in')){
		$data=$this->session->all_userdata(); 
		$data['main_content']='account/donate';
		$this->load->view('account/ac_template',$data);
		}
		else{
		 redirect('home/login');	
		}    
	}

	/* Function to handle inside the Members Page */
	public function events(){
		if($this->session->userdata('is_logged_in')){
		$data=$this->session->all_userdata(); 
		$data['main_content']='account/donate';
		$this->load->view('account/ac_template',$data);
		}
		else{
		 redirect('home/login');	
		}    
	}

	/* Function to handle inside the Members Page */
	public function notifications(){
		if($this->session->userdata('is_logged_in')){
		$data=$this->session->all_userdata(); 
		$data['main_content']='account/notifications';
		$this->load->view('account/ac_template',$data);
		}
		else{
		 redirect('home/login');	
		}    
	}

	/* Function to handle inside the Members Page */
	public function friends(){
		if($this->session->userdata('is_logged_in')){
		$data=$this->session->all_userdata(); 
		$data['main_content']='account/friends';
		$this->load->view('account/ac_template',$data);
		}
		else{
		 redirect('home/login');	
		}    
	}

	/* Function to handle inside the Members Page */
	public function account(){
		if($this->session->userdata('is_logged_in')){
		$data=$this->session->all_userdata(); 
		$data['main_content']='account/account';
		$this->load->view('account/ac_template',$data);
		}
		else{
		 redirect('home/login');	
		}    
	}
	/* Function to handle inside the Members Page */
	public function faqs(){
		if($this->session->userdata('is_logged_in')){
		$data=$this->session->all_userdata(); 
		$data['main_content']='account/faq';
		$this->load->view('account/ac_template',$data);
		}
		else{
		 redirect('home/login');	
		}    
	}

	function log_out()
	{
		$this->session->sess_destroy();
		 $this->load->view('account/login');
	}
 }

