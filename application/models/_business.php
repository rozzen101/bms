<?php
class _business extends CI_Model
{
	function add_business(){
		//ADD BUSINESS INFO
		$bDataArray = array(
			'bType'			=> $this->input->post('bType'),
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
			//FOR FILE UPLOAD
			if(isset($_FILES['bLogo']["tmp_name"])){
				$bLogo=$_FILES['bLogo']["name"];
			  if ($_FILES['bLogo']["error"] > 0){
					$msg="<b>DOCUMENT</b> ERROR during UPLOAD!";
					return $msg;
			  }else{
					//GET FILE EXTENSION
					$ext_temp=explode(".", $bLogo);
					$ext = end($ext_temp);
					$newFileName="bLogo_".$bid.".".$ext;
					//GET FILE LOCATION
					$dirLocation="public/business/".$bid."/";
					if (!file_exists("public/business/".$bid)) {
						mkdir("public/business/".$bid, 0777, true);
					}

					//SAVE NEW FILE
					move_uploaded_file($_FILES['bLogo']["tmp_name"],$dirLocation."".$newFileName);
					
					//SAVE TO DATABASE
					$this->db->where('bId',$bid);
					$this->db->update('tbl_business',array('bLogo'=>$newFileName));
			  }
			}
			//END FILE UPLAD
			//INSERT OWNER
			foreach ($this->input->post('xres_id') as $xres_id){
				$ownerData = array(
					'bid' => $bid,
					'rid' => $xres_id
				);
				$insOwner = $this->db->insert('tbl_business_owner',$ownerData);
			}

			//UPDATE AUTO NUMBERS
			//$this->db->query("UPDATE tbl_auto_numbers SET auRunningVal='{$auRunningVal}' WHERE auKeyname='BID'");

			$retInf['ok'] = 1;
			$retInf['bid'] = $bid;
			$retInf['msg'] = "New BUSINESS has been ADDED!";
		}else{
			$errNo   = $this->db->_error_number();
       		$errMess = $this->db->_error_message();
			$retInf['ok'] = 0;
			$retInf['msg'] = 'ADD NEW DATA ERROR {$errNo}:{$errMess}!';
		}

		return $retInf;
	}

	function update_business(){
		$bId = $this->input->post('xbId');
		//UPDATE BUSINESS INFO
		$bDataArray = array(
			'bType'			=> $this->input->post('bType'),
			'bName'			=> $this->input->post('bName'),
			'bDesc'			=> $this->input->post('bDesc'),
			'bAddress'		=> $this->input->post('bAddress'),
			'bContact'		=> $this->input->post('bContact'),
			'bFax'			=> $this->input->post('bFax'),
			'bEmail'		=> $this->input->post('bEmail'),
			'bWebsite'		=> $this->input->post('bWebsite'),
			'bCleranceFee'	=> $this->input->post('bClearanceFee'),
			'bRemark'		=> $this->input->post('bRemark'),
			'bEditedBy'		=> $this->session->userdata('username'),
			'bEditedDate'	=> date("Y-m-d h:i:s", time())
		);
		$this->db->where('bId',$bId);
		$insBis = $this->db->update('tbl_business',$bDataArray); 
		if($insBis){
			//FOR FILE UPLOAD
			if(isset($_FILES['bLogo']["tmp_name"])){
				$bLogo=$_FILES['bLogo']["name"];
			  if ($_FILES['bLogo']["error"] > 0){
					$msg="<b>DOCUMENT</b> ERROR during UPLOAD!";
					return $msg;
			  }else{
					//GET FILE EXTENSION
					$ext_temp=explode(".", $bLogo);
					$ext = end($ext_temp);
					$newFileName="bLogo_".$bId.".".$ext;
					//GET FILE LOCATION
					$dirLocation="public/business/".$bId."/";
					if (!file_exists("public/business/".$bId)) {
						mkdir("public/business/".$bId, 0777, true);
					}

					//SAVE NEW FILE
					move_uploaded_file($_FILES['bLogo']["tmp_name"],$dirLocation."".$newFileName);
					
					//SAVE TO DATABASE
					$this->db->where('bId',$bId);
					$this->db->update('tbl_business',array('bLogo'=>$newFileName));
			  }
			}
			//END FILE UPLAD
			//GET OWNER LIST
			$newOwnerArray = $this->input->post('xres_id');
			$ownArray = array();
			$this->db->where('bid',$bId);
			$ownCon = $this->db->get('tbl_business_owner');
			foreach($ownCon->result_array() as $aRow){$ownArray[] = $aRow['rid'];}
			//CHECK IF OWNER IS CHANGE
			foreach ($ownArray as $oldOwner) {
				if (!in_array($oldOwner, $newOwnerArray)) {
					$this->db->where('rid',$oldOwner);
				    $this->db->delete('tbl_business_owner');
				}
			}
			
			//UPDATE OWNER
			foreach ($this->input->post('xres_id') as $xres_id){
				//CHECK IF OWNER IS CHANGE
				$this->db->where('rid',$xres_id);
				$chOwner = $this->db->get('tbl_business_owner');
				if( $chOwner->num_rows() <= 0 ){
					//INSERT NEW OWNER
					$ownerData = array(
						'bid' => $bId,
						'rid' => $xres_id
					);
					$insOwner = $this->db->insert('tbl_business_owner',$ownerData);
				}
			}

			//UPDATE AUTO NUMBERS
			//$this->db->query("UPDATE tbl_auto_numbers SET auRunningVal='{$auRunningVal}' WHERE auKeyname='BID'");

			$retInf['ok'] = 1;
			$retInf['msg'] = "BUSINESS has been UPDATED!";
		}else{
			$errNo   = $this->db->_error_number();
       		$errMess = $this->db->_error_message();
			$retInf['ok'] = 0;
			$retInf['msg'] = 'UPDATE ERROR {$errNo}:{$errMess}!';
		}

		return $retInf;
	}

	function get_busines_list(){

		$bPermit =  $this->input->get_post('bPermit');
		$bStatus =  $this->input->get_post('bStatus');
		$bName =  $this->input->get_post('bName');
		$bOwner =  $this->input->get_post('bOwner');
		$bAddress =  $this->input->get_post('bAddress');
		$bContact =  $this->input->get_post('bContact');

		$whereData = '';
		if($bPermit != ''){$whereData .= "b.bPermitNo LIKE '%".$bPermit."%' AND ";}
		if($bStatus != ''){$whereData .= "b.bStatus LIKE '".$bStatus."%' AND ";}
		if($bOwner != ''){$whereData .= "r.fname LIKE '%".$bOwner."' AND ";}
		if($bName != ''){$whereData .= "b.bName LIKE '%".$bName."' AND ";}
		if($bAddress != ''){$whereData .= "b.bAddress LIKE '%".$bAddress."%' AND ";}
		if($bContact != ''){$whereData .= "b.bContact LIKE '%".$bContact."' AND ";}

		if($whereData != ''){$whereData = "WHERE ".$whereData;}

		$whereData = substr($whereData, 0, -4);

		$sql = "SELECT
				b.bId,
				b.bLogo,
				b.bType,
				b.bName,
				b.bAddress,
				b.bContact,
				b.bEmail,
				b.bStatus,
				b.bRequestDate
				FROM
				tbl_business AS b
				INNER JOIN tbl_business_type AS bt ON b.bType = bt.tId
				INNER JOIN tbl_business_owner AS bo ON b.bId = bo.bid
				INNER JOIN tbl_resident AS r ON bo.rid = r.res_id ".$whereData.' GROUP BY b.bId';

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
			$businessImgURL = $this->config->item('businessImgURL');
			if($aRow['bLogo'] != ''){
				$blogo = $businessImgURL.'/'.$aRow['bId'].'/'.$aRow['bLogo'];
			}else{
				$blogo = $businessImgURL.'/businessDefault.png';
			}
			$row = array();
				$row[] = $counter;
				$row[] = $aRow['bId'];
				$row[] = '<img src="'.$blogo.'" width="32" height="32" class="img-circle" border="0"/>';
				$row[] = $aRow['bName'];
				$row[] = $aRow['bAddress'];
				$row[] = $aRow['bContact'];
				$row[] = $aRow['bEmail'];
				$row[] = $aRow['bStatus'];
				$row[] = date("Y-m-d", strtotime($aRow['bRequestDate']));
				$row[] = '<a href="'.base_url().'index.php/business/view_business/'.$aRow['bId'].'" class="btn btn-transparent btn-xs btn-success"><i class="ti-folder"></i></a>';
				$row[] = '<a href="'.base_url().'index.php/business/edit_business/'.$aRow['bId'].'" class="btn btn-transparent btn-xs btn-primary"><i class="ti-pencil-alt"></i></a>';
				$row[] = '<button class="btn btn-transparent btn-xs btn-danger" onclick="deleteBusiness('.$aRow['bId'].')"><i class="ti-close"></i></button>';
			$counter++;
			$output['aaData'][] = $row;
		}
		return $output;
	}

	function delete_business(){
		$bId = $this->input->post('bId');  
		$this->db->where('bId',$bId);
		$res = $this->db->delete('tbl_business');
		if($res){
			//DELETE OWNER
			$this->db->where('bid',$bId);
			$this->db->delete('tbl_business_owner');
			$retInf['ok'] = 1;
			$retInf['msg'] = "BUSINESS has been DELETED!";
		}else{
			$errNo   = $this->db->_error_number();
       		$errMess = $this->db->_error_message();
			$retInf['ok'] = 0;
			$retInf['msg'] = 'DELETE ERROR {$errNo}:{$errMess}!';
		}
		return $retInf;
	}

	function get_busines_type(){
		$res = $this->db->get('tbl_business_type');
		return $res->result_array();
	}

	function get_business_inf($bid){
        $this->db->where('bId',$bid);
        $res = $this->db->get('view_business');
        //return $res->result_array();
        return $res;
    }

}

?>