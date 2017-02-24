<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resident extends CI_Controller {

	/*
	Developer:  Loubrando Dejito
	Class:      Controller
	Date: 		Feb 11, 2017
	Desc:		Index for resident
	*/
	function index()
	{	
		if($this->session->userdata('is_logged_in') == 1)
		{
			$this->load->view('includes/header');
			$this->load->view('resident/index');
			$this->load->view('includes/footer');
		}
		else
		{
			
			if($this->session->userdata('userid'))
			{	
				$msg = 'You are trying to access a different Barangay!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}
			else
			{	
				$msg = 'Session Ended! Please Relogin!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}


				$this->security_breach($msg,$icon,$url);
		}
		
	}


	/*
	Developer:  Loubrando Dejito
	Class:      Controller
	Date: 		Feb 11, 2017
	Desc:		view resident
	*/
	function add_resident()
	{	
		if($this->session->userdata('is_logged_in') == 1)
		{
			$this->load->view('includes/header');
			$this->load->view('resident/add_resident');
			$this->load->view('includes/footer');
		}
		else
		{
			
			if($this->session->userdata('userid'))
			{	
				$msg = 'You are trying to access a different Barangay!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}
			else
			{	
				$msg = 'Session Ended! Please Relogin!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}


				$this->security_breach($msg,$icon,$url);
		}
		
	}



	/*
	Developer:  Loubrando Dejito
	Class:      Controller
	Date: 		Feb 11, 2017
	Desc:		view resident
	*/
	function view_resident()
	{	
		if($this->session->userdata('is_logged_in') == 1)
		{
			$this->load->view('includes/header');
			$this->load->view('resident/view_resident');
			$this->load->view('includes/footer');
		}
		else
		{
			
			if($this->session->userdata('userid'))
			{	
				$msg = 'You are trying to access a different Barangay!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}
			else
			{	
				$msg = 'Session Ended! Please Relogin!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}


				$this->security_breach($msg,$icon,$url);
		}
		
	}

	/*
	Developer:  Loubrando Dejito
	Class:      Controller
	Date: 		Feb 11, 2017
	Desc:		view resident
	*/
	function save_resident()
	{	
		if($this->session->userdata('is_logged_in') == 1)
		{	
			$res = $this->_residents->save_resident();
			if($res == 1)
			{	
				$msg = 'Resident Added!';
				$icon = 'add_success.png';
				$url = 'resident';
				

				$this->prompt($msg,$icon,$url,$brgy_id);
			}
			else
			{
				echo 'Error 500: Data Insertion problem!';
			}
		}
		else
		{
			$msg = 'Security Access Required!';
			$icon = 'user_access.png';
			$url = 'access';
			

			$this->security_breach($msg,$icon,$url);
		}
		
	}



	/*
	Developer:  Loubrando Dejito
	Class:      Controller
	Date: 		December 31, 2015
	Desc:		General Prompt function
	*/
	function prompt($msg,$icon,$url,$brgy_id)
	{
		if($brgy_id != 0)
		{
			$url = $url.'/'.$brgy_id;
		}

	   $msg = '<center><br><br>
				<img src="'.PUBLIC_URL.'sbadmin/images/'.$icon.'" /><br>
				<b style="font-family:verdana;"> '.$msg.' </b><br>
				<img src="'.PUBLIC_URL.'sbadmin/loading/loading42.gif" /><br>	
				<b style="font-family:verdana;">Redirecting..</b>
				</center>';
		
		echo $msg;

		$this->output->set_header('refresh:3;url='.SITE_URL.'dashboard/'.$url);

	}


    /*
	Developer:  Loubrando Dejito
	Class:      Controller
	Date: 		December 31, 2015
	Desc:		Security Prompt function, it will redirect any attempt if session isn't declared
	*/
	function security_breach($msg,$icon,$url)
	{	

		$msg = '<center><br><br>
				<img src="'.PUBLIC_URL.'login/img/'.$icon.'" /><br>
				<b style="font-family:verdana;">'.$msg.'</b><br>
				<img src="'.PUBLIC_URL.'login/loading/loading42.gif" /><br>	
				<b style="font-family:verdana;">Redirecting..</b>
				</center>';
		
		echo $msg;

		$this->output->set_header('refresh:3;url='.base_url().'index.php/'.$url);
	
	}



}

