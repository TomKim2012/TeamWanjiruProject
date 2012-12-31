<?php
include (APPPATH.'libraries/facebook/facebook.php');

class Fbconnect extends Facebook{
		public $user = null;
		public $user_id = null;
		public $fb = false;
		public $fbSession = false;
		public $appkey = 0;

	public function Fbconnect(){
		$ci = & get_instance(); //Super Object for codeIgnitor
		$ci-> config -> load('facebook',TRUE); // Receives as an array
		$config = $ci -> config -> item('facebook'); //Grab the config array returned
		parent:: __construct($config); //overide the parent config method for facebook
		
		$this->user_id = $this->getUser(); //set the user Id
		$me= null; // Bunch of information about the user; set it to null to avoid cases where they might be logged in twice
		if($this->user_id)
		{
			try{
			 $me= $this->api('/me'); //the me returns all the information that we are requesting.
			 $this->user = $me; //store all the values in the variable me.
			}catch(FacebookApiException $e){
				error_log($e);
			}
		}
	}

	public function send_back($value){
	return ($value);
	}

	public function test(){
		$ci = & get_instance();
	}
}
?>