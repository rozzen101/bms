<?php
class _access extends CI_Model
{
	function verify_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$query = $this->db->query("SELECT * FROM tbl_access WHERE username = '$username' AND password = '$password'");

		if($query->num_rows() > 0)
		{	

			foreach($query->result() as $row)
			{
				$flag = $row->log_flag;
				$userid = $row->userid;
				$data = array(
					'userid' => $row->userid,
					'username' => $row->username,
					'email' => $row->email,
					'fname' => $row->fname,
					'mname' => $row->mname,
					'lname' => $row->lname,
					'brgy_id' => $row->brgy_id,
					'usertype' => $row->usertype,
					'is_logged_in' => 1
					);

				$this->session->set_userdata($data);
			}

			if($flag > 0)
			{
				/*Overide User*/
				
				return 3;
			}
			else
			{
				/*Logged In*/
				$update_log_flag = $this->db->query("UPDATE tbl_access SET log_flag = 1 WHERE userid = $userid");
				return 1;
			}
			
		}
		else
		{	
			/*Invalid Logged in*/
			return 0;
		}
	}



	function end_session()
	{
		

		if($this->session->userdata('userid'))
		{	
			$userid = $this->session->userdata('userid');
			$update_log_flag = $this->db->query("UPDATE tbl_access SET log_flag = 0 WHERE userid = $userid");
			if($update_log_flag)
			{
				/*End Session and Update Log flag*/
				return 1;
			}
			else
			{
				/*Error*/
				return 0;
			}
		}
		else
		{	
			
				/*Error*/
				return 0;
		}

		
	}

}

?>