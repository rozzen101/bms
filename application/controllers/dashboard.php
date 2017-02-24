<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	/*
	Developer:  Loubrando Dejito
	Class:      Controller
	Date: 		December 31, 2015
	Desc:		Index for BIS
	*/
	function index()
	{	
		if($this->session->userdata('is_logged_in') == 1)
		{
			$this->load->view('includes/header');
			$this->load->view('dashboard/index');
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

		$this->output->set_header('refresh:3;url='.base_url().'index.php/dashboard/'.$url);

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

		$this->output->set_header('refresh:3;url='.base_url().'index.php/dashboard/'.$url);
	
	}



}

