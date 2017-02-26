<?php
class _residents extends CI_Model
{	
		function get_resident_list(){

		$fname =  $this->input->get_post('fname');
		$mname =  $this->input->get_post('mname');
		$lname =  $this->input->get_post('lname');
		$gender =  $this->input->get_post('gender');
		$civil_status =  $this->input->get_post('civil_status');
		$sitio =  $this->input->get_post('sitio');

		$whereData = '';
		if($fname != ''){$whereData .= "fname LIKE '%".$fname."%' AND ";}
		if($mname != ''){$whereData .= "mname LIKE '".$mname."%' AND ";}
		if($lname != ''){$whereData .= "lname LIKE '%".$lname."%' AND ";}
		if($gender != ''){$whereData .= "gender = '".$gender."' AND ";}
		if($civil_status != ''){$whereData .= "civil_status = '".$civil_status."' AND ";}
		if($sitio != ''){$whereData .= "sitio LIKE '%".$sitio."%' AND ";}

		if($whereData != ''){$whereData = "WHERE ".$whereData;}

		$whereData = substr($whereData, 0, -4);

		$sql = "SELECT
				*
				FROM
				tbl_resident
				".$whereData.' GROUP BY res_id';

		$rResult = $this->db->query($sql);
		$iTotal = $rResult->num_rows();
		 
		// Output
		$output = array(
	        "sEcho" => 1,
	        "iTotalRecords" => $iTotal,
	        "iTotalDisplayRecords" => $iTotal,
	        "aaData" => array()
	    );
		 
		$counter=1;
		foreach($rResult->result_array() as $aRow)
		{

			$row = array();
				$row[] = $counter;
				$row[] = $aRow['fname'].' '.$aRow['mname'].' '.$aRow['lname'];
				$row[] = date('m/d/Y',strtotime($aRow['birthdate']));
				$row[] = $aRow['gender'];
				$row[] = $aRow['age'];
				$row[] = $aRow['civil_status'];
				$row[] = $aRow['sitio'];
				$row[] = '<a href="'.base_url().'index.php/residents/view_resident/'.$aRow['res_id'].'" class="btn btn-transparent btn-xs btn-success"><i class="ti-folder"></i></a>';
				$row[] = '<a href="'.base_url().'index.php/residents/delete_resident/'.$aRow['res_id'].'" class="btn btn-transparent btn-xs btn-danger"><i class="ti-close"></i></a>';
			$counter++;
			$output['aaData'][] = $row;
		}
		return $output;
	}

	function save_residents(){
		//ADD BUSINESS INFO
		$rDataArray = array(
			'fname'			=> $this->input->post('bType'),
			'bName'			=> $this->input->post('bName'),
			'bDesc'			=> $this->input->post('bDesc'),
			'bAddress'		=> $this->input->post('bAddress'),
			'bContact'		=> $this->input->post('bContact'),
			'bFax'			=> $this->input->post('bFax'),
			'bEmail'		=> $this->input->post('bEmail'),
			'bWebsite'		=> $this->input->post('bWebsite'),
			'bCleranceFee'	=> $this->input->post('bClearanceFee'),
			'bStatus'		=> 'PENDING',
			'bRequestDate'	=> date("Y-m-d h:i:s", time()),
			'bRemark'		=> $this->input->post('bRemark'),
			'bCreatedBy'	=> $this->session->userdata('username'),
			'bCreatedDate'	=> date("Y-m-d h:i:s", time())
		);
		$insBis = $this->db->insert('tbl_business',$bDataArray);
		if($insBis){
			$bid = $this->db->insert_id();
			//INSERT OWNER
			foreach ($this->input->post('xres_id') as $xres_id){
				$ownerData = array(
					'bid' => $bid,
					'rid' => $xres_id
				);
				$insOwner = $this->db->insert('tbl_business_owner',$ownerData);
			}
			$retInf['ok'] = 1;
			$retInf['msg'] = "New BUSINESS has been ADDED!";
		}else{
			$errNo   = $this->db->_error_number();
       		$errMess = $this->db->_error_message();
			$retInf['ok'] = 0;
			$retInf['msg'] = 'ADD NEW DATA ERROR {$errNo}:{$errMess}!';
		}

		return $retInf;
	}

	function get_resident_data($res_id)
	{
		$query = $this->db->query("SELECT * FROM tbl_resident WHERE res_id = $res_id");

		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}
		else
		{
			return false;
		}
	}

}
?>