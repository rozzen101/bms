<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Business extends CI_Controller {
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

	function index()
	{	
		if($this->session->userdata('is_logged_in') == 1)
		{
			$this->load->view('includes/header');
			$this->load->view('business/index');
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

	function add_business(){
		if($this->session->userdata('is_logged_in') == 1)
		{
			$data['bType'] = $this->_business->get_busines_type();
			$this->load->view('includes/header');
			$this->load->view('business/new_business',$data);
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

	function view_business($bid){
		$isBusinessExist = $this->_genFunction->ch_business($bid);
		if(!isset($bid)){redirect('business', 'refresh');}
		else if(!$isBusinessExist){redirect('business', 'refresh');}
		if($this->session->userdata('is_logged_in') == 1)
		{
			$module = 'BUSINESS';
			$data['actionLog'] = $this->_genFunction->get_action_log($bid,$module);
			$data['bInf'] = $this->_business->get_business_inf($bid);
			$data['bType'] = $this->_business->get_busines_type();
			$this->load->view('includes/header');
			$this->load->view('business/view_business',$data);
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

	function edit_business($bid){
		$isBusinessExist = $this->_genFunction->ch_business($bid);
		if(!isset($bid)){redirect('business', 'refresh');}
		else if(!$isBusinessExist){redirect('business', 'refresh');}
		if($this->session->userdata('is_logged_in') == 1)
		{
			$data['bInf'] = $this->_business->get_business_inf($bid);
			$data['bType'] = $this->_business->get_busines_type();
			$this->load->view('includes/header');
			$this->load->view('business/edit_business',$data);
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

	function save_business(){
		$res = $this->_business->add_business();
		echo json_encode($res);
	}

	function update_business(){
		$res = $this->_business->update_business();
		echo json_encode($res);
	}

	function delete_business(){
		$res = $this->_business->delete_business();
		echo json_encode($res);
	}

	function resident_lookup(){
		$res = $this->_genFunction->get_resident_list();
		echo json_encode($res);
	}

	function get_busines_list(){
		$res = $this->_business->get_busines_list();
		echo json_encode($res);
	}

	function resident_indData(){
		$resId = $this->input->post('resId');
		$res = $this->_residents->get_resident_data($resId);
		if($res){
			$rowData = $res[0];
			$prPix = $this->_genFunction->get_prPix($rowData->display_picture, $rowData->gender);
			if($rowData->mobile_no != ''){$mobile_no = $rowData->mobile_no;}else{$mobile_no = '-';}
			if($rowData->tel_no != ''){$tel_no = $rowData->tel_no;}else{$tel_no = '-';}
			echo '<tr id="resInfo'.$rowData->res_id.'">
				<input type="hidden" class="rox_res" name="xres_id[]" value="'.$rowData->res_id.'">
                <td class="center"><img src="'.$prPix.'" width="32" height="32" class="img-circle" border="0" alt="image"/></td>
                <td>'.$rowData->fname.' ('.$rowData->mname.') '.$rowData->lname.'</td>
                <td class="hidden-xs">'.$rowData->civil_status.'</td>
                <td class="hidden-xs">'.$mobile_no.'</td>
                <td class="hidden-xs">'.$tel_no.'</td>
                <td class="center">
	                <div>
	                    <button type="button" class="btn btn-transparent btn-xs btn-danger" onclick="removeRes('.$rowData->res_id.')"><i class="fa fa-times fa fa-white"></i></button>
	                </div>
                </td>
            </tr>';
		}else{
			echo 1;
		}
	}

}

