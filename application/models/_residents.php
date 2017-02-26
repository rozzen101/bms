<?php
class _residents extends CI_Model
{	
		function get_resident_list(){

		$rFname =  $this->input->get_post('rFname');
		$rMname =  $this->input->get_post('rMname');
		$rLname =  $this->input->get_post('rLname');
		$rGender =  $this->input->get_post('rGender');
		$rCivil_status =  $this->input->get_post('rCivil_status');
		$rSitio =  $this->input->get_post('rSitio');

		$whereData = '';
		if($rFname != ''){$whereData .= "rFname LIKE '%".$rFname."%' AND ";}
		if($rMname != ''){$whereData .= "rMname LIKE '".$rMname."%' AND ";}
		if($rLname != ''){$whereData .= "rLname LIKE '%".$rLname."%' AND ";}
		if($rGender != ''){$whereData .= "rGender = '".$rGender."' AND ";}
		if($rCivil_status != ''){$whereData .= "rCivil_status = '".$rCivil_status."' AND ";}
		if($rSitio != ''){$whereData .= "rSitio LIKE '%".$rSitio."%' AND ";}

		if($whereData != ''){$whereData = "WHERE ".$whereData;}

		$whereData = substr($whereData, 0, -4);

		$sql = "SELECT
				*
				FROM
				tbl_resident
				".$whereData.' GROUP BY rId';

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
				$row[] = $aRow['rFname'].' '.$aRow['rMname'].' '.$aRow['rLname'];
				$row[] = date('m/d/Y',strtotime($aRow['rBirthdate']));
				$row[] = $aRow['rGender'];
				$row[] = $aRow['rAge'];
				$row[] = $aRow['rCivil_status'];
				$row[] = $aRow['rSitio'];
				$row[] = '<a href="'.base_url().'index.php/residents/view_resident/'.$aRow['rId'].'" class="btn btn-transparent btn-xs btn-success"><i class="ti-folder"></i></a>';
				$row[] = '<button class="btn btn-transparent btn-xs btn-danger" onclick="deleteResident('.$aRow['rId'].')"><i class="ti-close"></i></button>';
			$counter++;
			$output['aaData'][] = $row;
		}
		return $output;
	}

	function save_resident(){
		//ADD RESIDENT INFO
		$rDataArray = array(
			'rFname'			=> $this->input->post('rFname'),
			'rMname'			=> $this->input->post('rMname'),
			'rLname'			=> $this->input->post('rLname'),
			'rBirthdate'		=> date("Y-m-d", strtotime($this->input->post('rBirthdate'))),
			'rAge'				=> $this->input->post('rAge'),
			'rGender'			=> $this->input->post('rGender'),
			'rCivil_status'		=> $this->input->post('rCivil_status'),
			'rEmployment'		=> $this->input->post('rEmployment'),
			'rVoter'			=> $this->input->post('rVoter'),
			'rContact_no'		=> $this->input->post('rContact_no'),
			'rBarangay'			=> $this->input->post('rBarangay'),
			'rSitio'			=> $this->input->post('rSitio'),
			'rStatus'			=> $this->input->post('rStatus'),
			'rDate_added'		=> date("Y-m-d h:i:s", time()),
			'rAdded_by'			=> $this->session->userdata('username')
		);
		$insRes = $this->db->insert('tbl_resident',$rDataArray);
		if($insRes){
			$rId = $this->db->insert_id();
			//FOR FILE UPLOAD
			if(isset($_FILES['rImage']["tmp_name"])){
				$rImage=$_FILES['rImage']["name"];
			  if ($_FILES['rImage']["error"] > 0){
					$msg="<b>DOCUMENT</b> ERROR during UPLOAD!";
					return $msg;
			  }else{
					//GET FILE EXTENSION
					$ext_temp=explode(".", $rImage);
					$ext = end($ext_temp);
					$newFileName="rImage_".$rId.".".$ext;
					//GET FILE LOCATION
					$dirLocation="public/residents_images/".$rId."/";
					if (!file_exists("public/residents_images/".$rId)) {
						mkdir("public/residents_images/".$rId, 0777, true);
					}

					//SAVE NEW FILE
					move_uploaded_file($_FILES['rImage']["tmp_name"],$dirLocation."".$newFileName);
					
					//SAVE TO DATABASE
					$this->db->where('rId',$rId);
					$this->db->update('tbl_resident',array('rImage'=>$newFileName));
			  }
			}
			//END FILE UPLAD

			//ADD TO ACTION LOG
			$actioLogArray = array(
				'aModule'		=> 'RESIDNET',
				'aSubId'		=> $rId,
				'aRemark'		=> 'Reisdent Added',
				'aCreateBy'		=> $rDataArray['rAdded_by'],
				'aCreatedDate'	=> $rDataArray['rDate_added']
			);
			$this->db->insert('tbl_action_log',$actioLogArray);

			$retInf['ok'] = 1;
			$retInf['bid'] = $rId;
			$retInf['msg'] = "New RESIDENT has been ADDED!";
		}else{
			$errNo   = $this->db->_error_number();
       		$errMess = $this->db->_error_message();
			$retInf['ok'] = 0;
			$retInf['msg'] = 'ADD NEW DATA ERROR {$errNo}:{$errMess}!';
		}

		return $retInf;
	}

	function delete_resident(){
		$rId = $this->input->post('rId');  
		$this->db->where('rId',$rId);
		$res = $this->db->delete('tbl_resident');
		if($res){

			//ADD TO ACTION LOG
			$actioLogArray = array(
				'aModule'		=> 'RESIDENT',
				'aSubId'		=> $rId,
				'aRemark'		=> 'Delete Resident ID no. '.$rId,
				'aCreateBy'		=> $this->session->userdata('username'),
				'aCreatedDate'	=> date("Y-m-d h:i:s", time())
			);
			$this->db->insert('tbl_action_log',$actioLogArray);

			$retInf['ok'] = 1;
			$retInf['msg'] = "RESIDENT has been DELETED!";
		}else{
			$errNo   = $this->db->_error_number();
       		$errMess = $this->db->_error_message();
			$retInf['ok'] = 0;
			$retInf['msg'] = 'DELETE ERROR {$errNo}:{$errMess}!';
		}
		return $retInf;
	}


	function get_resident_data($rId){
		$query = $this->db->query("SELECT * FROM tbl_resident WHERE rId = $rId");
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

}
?>