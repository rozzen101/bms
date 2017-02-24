<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends CI_Controller {

	function index()
	{
		$this->load->view('login/index');
	}

	function verify_login()
	{
		$this->load->model('_access');
		$res = $this->_access->verify_login();
		echo $res;
	}


	function end_session()
	{		
		$this->load->model('_access');
		$res = $this->_access->end_session();

		if($res == 1)
		{
			$this->session->sess_destroy();
			redirect(SITE_URL.'access','refresh');
		}
		else
		{	
			
			redirect(SITE_URL.'access','refresh');
		}
		
	}


	function test()
	{
		$query = $this->db->query("SELECT * FROM templates WHERE templateid = 1");

		if($query->num_rows() > 0)
		{
			$row = $query->row();

			echo $row->header;
			echo $row->body;
			echo $row->footer;

		}
	}


}

