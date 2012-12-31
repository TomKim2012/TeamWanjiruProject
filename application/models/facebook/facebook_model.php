<?php
class Facebook_model extends CI_Model {	
	public function __construct()
	{
		parent::__construct();
		
		$config = array(
						'appId'  => '312795372163536',
						'secret' => '91be7c3a1507ce90ae86ea311fbd0bfa',
						'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
						);
		
		$this->load->library('Facebook', $config);

		$user = $this->facebook->getUser();

		// We may or may not have this data based on whether the user is logged in.
		//
		// If we have a $user id here, it means we know the user is logged into
		// Facebook, but we don't know if the access token is valid. An access
		// token is invalid if the user logged out of Facebook.
		$profile = null;
		if($user)
		{
			try {
		  // Proceed knowing you have a logged in user who's authenticated.
			$profile = $this->facebook->api('/me?fields=id,name,link,hometown,email');
			} catch (FacebookApiException $e) {
				error_log($e);
			    $user = null;
			}		
		}
		$logout = array( 'next' => 'http://localhost:8030/TeamWanjiru/teamwanjiruproject/index.php/account/logout/fb_logout' );		
		$fb_data = array(
						'me' => $profile,
						'uid' => $user,
						'loginUrl' => $this->facebook->getLoginUrl(
						array(
								'scope' => 'email,user_hometown,publish_stream', // app permissions
								'redirect_uri' =>'http://localhost:8030/TeamWanjiru/teamwanjiruproject/index.php/account/login' // URL where you want to redirect your users after a successful login
						)
						),
						'logoutUrl' => $this->facebook->getLogoutUrl($logout),
						// Get the current access token
						'access_token' => $this ->facebook->getAccessToken(),
					);
		$this->session->set_userdata('fb_data', $fb_data);
		echo $this->session->userdata('fb_data');
	}

	public function fbLogout()
	{
	$this->facebook->destroySession();
	}
}
