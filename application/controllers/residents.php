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

	function view_resident($rId){
		if($this->session->userdata('is_logged_in') == 1)
		{
			$module = 'RESIDENT';
			$data['actionLog'] = $this->_genFunction->get_action_log($rId,$module);
			$data['rInf'] = $this->_residents->get_resident_data($rId);
			$this->load->view('includes/header');
			$this->load->view('residents/view_resident',$data);
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

	function update_resident(){
		$res = $this->_residents->update_resident();
		echo json_encode($res);
	}

	function get_resident_list(){
		$res = $this->_residents->get_resident_list();
		echo json_encode($res);
	}

	function get_document(){
		$dRes = $this->_genFunction->get_document();
		$dRow = $dRes->row();
		$rId=$this->input->post('rId');
		$data['rInf'] = $this->_residents->get_resident_data($rId);
		$content = $this->load->view('documents/'.$dRow->dFilename,$data);

	}


}

