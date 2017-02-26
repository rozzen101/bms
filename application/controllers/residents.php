<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Residents extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('_genFunction');
		$this->load->model('_residents');
		$this->load->model('_business');
		if($this->session->userdata('is_logged_in') != 1){
			if($this->session->userdata(' ')){	
				$msg = 'You are trying to access a different Barangay!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}else{	
				$msg = 'Session Ended! Please Relogin!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}
			$this->security_breach($msg,$icon,$url);
		}
	}

	function index(){	
		if($this->session->userdata('is_logged_in') == 1)	{
			$this->load->view('includes/header');
			$this->load->view('residents/index');
			$this->load->view('includes/footer');
		}
		else{
			if($this->session->userdata(' ')){	
				$msg = 'You are trying to access a different Barangay!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}else{	
				$msg = 'Session Ended! Please Relogin!';
				$icon = 'user_access.png';
				$url = 'access/end_session';
			}
			$this->security_breach($msg,$icon,$url);
		}	
	}

	function new_resident(){
			if($this->session->userdata('is_logged_in') == 1)
			{
	
				$this->load->view('includes/header');
				$this->load->view('residents/new_resident');
				$this->load->view('includes/footer');
			}
			else
			{
				
				if($this->session->userdata(' '))
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

	function save_resident(){
		$res = $this->_residents->save_resident();
		echo json_encode($res);
	}

	function delete_resident(){
		$res = $this->_residents->delete_resident();
		echo json_encode($res);
	}

	function get_resident_list(){
		$res = $this->_residents->get_resident_list();
		echo json_encode($res);
	}


}

