<?php
class _genFunction extends CI_Model
{
	function get_resident_list(){
		
    $aColumns = array( 'res_id','fname','mname','lname','display_picture','age','gender','birthdate','status' );
    $sIndexColumn = "res_id";
    $sTable = "tbl_resident";
     
     
    /*
     * Paging
     */
    $sLimit = "";
    if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
    {
        $sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".
            intval( $_GET['iDisplayLength'] );
    }
     
     
    /*
     * Ordering
     */
    $sOrder = "";
    if ( isset( $_GET['iSortCol_0'] ) )
    {
        $sOrder = "ORDER BY  ";
        for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
        {
            if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
            {
                $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
                    ".($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
            }
        }
         
        $sOrder = substr_replace( $sOrder, "", -2 );
        if ( $sOrder == "ORDER BY" )
        {
            $sOrder = "";
        }
    }
     
     
    /*
     * Filtering
     * NOTE this does not match the built-in DataTables filtering which does it
     * word by word on any field. It's possible to do here, but concerned about efficiency
     * on very large tables, and MySQL's regex functionality is very limited
     */
    $sWhere = "";
    if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
    {
        $sWhere = "WHERE (";
        for ( $i=0 ; $i<count($aColumns) ; $i++ )
        {
            if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" )
            {
                $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
            }
        }
        $sWhere = substr_replace( $sWhere, "", -3 );
        $sWhere .= ')';
    }
     
    /* Individual column filtering */
    for ( $i=0 ; $i<count($aColumns) ; $i++ )
    {
        if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
        {
            if ( $sWhere == "" )
            {
                $sWhere = "WHERE ";
            }
            else
            {
                $sWhere .= " AND ";
            }
            $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string($_GET['sSearch_'.$i])."%' ";
        }
    }
     
     
    /*
     * SQL queries
     * Get data to display
     */
    $sQuery = "
        SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $aColumns))."
        FROM   $sTable
        $sWhere
        $sOrder
        $sLimit
    ";
    $rResult = $this->db->query($sQuery);
     
    /* Data set length after filtering */
    $sQuery = "
        SELECT FOUND_ROWS()
    ";
    $rResultFilterTotal = $rResult->num_rows();
    $aResultFilterTotal = $rResult->result_array();
    $iFilteredTotal = $rResultFilterTotal;
     
    /* Total data set length */
    $sQuery = "
        SELECT COUNT(".$sIndexColumn.") AS myCounter
        FROM   $sTable
    ";
    $aResult = $this->db->query($sQuery);

    $rResultTotal = $aResult->num_rows();
    $aResultTotal =$aResult->row();
    $iTotal = $aResultTotal->myCounter;
     
    /*
     * Output
     */
    $output = array(
        "sEcho" => intval($_GET['sEcho']),
        "iTotalRecords" => $iTotal,
        "iTotalDisplayRecords" => $iFilteredTotal,
        "aaData" => array()
    );
    
    $counter=1;
	foreach($rResult->result_array() as $aRow)
	{
		$birthdate=date("m/d/Y",strtotime(str_replace("-", "/", $aRow['birthdate'])));

		if($aRow['status'] == 'RESIDING'){$resStatus = '<font class="label label-default">'.$aRow['status'].'</font>';}
		elseif($aRow['status'] == 'DISEASED'){$resStatus = '<font class="label label-danger">'.$aRow['status'].'</font>';}
		else{$resStatus = '<font class="label label-warning">'.$aRow['status'].'</font>';}

		$imgURL = $this->config->item('imgURL');
		if($aRow['display_picture'] != ''){
			$primaryPix = $imgURL.'/'.$aRow['display_picture'];
		}else{
			if($aRow['gender'] == 'FEMALE'){$primaryPix = $imgURL.'/femaleDefault.jpg';}
			else{$primaryPix = $imgURL.'/maleDefault.jpg';}
		}
		$row = array();
			$row[] = $counter;
			$row[] = $aRow['res_id'];
			$row[] = '<img src="'.$primaryPix.'" width="32" height="32" class="img-circle" border="0"/>';
			$row[] = $aRow['fname'];
			$row[] = $aRow['mname'];
			$row[] = $aRow['lname'];
			$row[] = $birthdate;
			$row[] = $aRow['gender'];
			$row[] = $resStatus;
		$counter++;
		$output['aaData'][] = $row;
	}

	return $output;
	}

	function get_prPix($img, $gender){
		$imgURL = $this->config->item('imgURL');
		if($img != ''){
			$primaryPix = $imgURL.'/'.$img;
		}else{
			if($gender == 'FEMALE'){$primaryPix = $imgURL.'/femaleDefault.jpg';}
			else{$primaryPix = $imgURL.'/maleDefault.jpg';}
		}
		return $primaryPix;
	}

    function ch_business($bid){
        $this->db->where('bId',$bid);
        $res = $this->db->get('tbl_business');
        $isBusinessExist = false;
        if($res->num_rows() > 0){$isBusinessExist = true;}
        return $isBusinessExist;
    }

    function get_action_log($bId,$module){
        $this->db->where(array('aSubId' => $bId, 'aModule' => $module)); 
        $res = $this->db->get('tbl_action_log');
        return $res;
    }

    function get_action_log_admin($bId,$admin){
        $this->db->where(array('aSubId' => $bId, 'aCreateBy' => $admin)); 
        $res = $this->db->get('tbl_action_log');
        return $res;
    }

    //FOR AUTO NUMBERS
    function get_auNum(){
        $res=$this->db->get('tbl_auto_numbers');
            $reAuNum=array();
            foreach($res->result_array() as $aRow){
                if($aRow['auEnable']==1){
                    //FOR DETECTING DELETED NUMBER
                    if($aRow['auKeyname'] == 'QUONO'){
                        //GET ALL QOUTATION 
                        $res = $this->db->query("SELECT REPLACE(qCode, '".$aRow['auPrefix']."', '') AS res FROM tbl_quotation_header WHERE qCode LIKE '".$aRow['auPrefix']."%'");
                    }else if($aRow['auKeyname'] == 'INVNO'){
                        //GET ALL INVOICE
                        $res = $this->db->query("SELECT REPLACE(invCode, '".$aRow['auPrefix']."', '') AS res FROM tbl_invoice_header WHERE invCode LIKE '".$aRow['auPrefix']."%'");
                    }else if($aRow['auKeyname'] == 'CUSTNO'){
                        //GET ALL CUSTOMER
                        $res = $this->db->query("SELECT REPLACE(cCode, '".$aRow['auPrefix']."', '') AS res FROM tbl_customer WHERE cCode LIKE '".$aRow['auPrefix']."%'");
                    }else{
                        //GET ALL AUTO INVOICE
                        $res = $this->db->query("SELECT REPLACE(invCode, '".$aRow['auPrefix']."', '') AS res FROM tbl_invoice_header WHERE invCode LIKE '".$aRow['auPrefix']."%'");
                    }
                    //END DETECTING DELETED NUMBER FOR NOW

                    //GENERATE NEW NUMBER
                    if($aRow['auRunningVal'] == ''){$aRow['auRunningVal']=$aRow['auValue'];}
                    //NEW ALGO
                        $counter_head = $aRow['auPrefix'];//prefix
                        $counter_run = strval($aRow['auRunningVal']);//value
                        $temp_id = $counter_run + $aRow['auIncrement'];//increment

                        $len1 = strlen($counter_run);
                        $len = strlen($temp_id);
                        $conz = '';

                        for($i = 0; $i < ($len1 - $len) ; $i++){$conz .= '0';}

                        $new_id  = $counter_head.$conz.$temp_id;
                        $newRunningVal = $conz.$temp_id;
                    //END OF NEW ALGO
                    //END NEW MUNER GENERATION

                        

                    //CONTINUE DETECTING DELETED NUMBER
                        $isDeleted = FALSE;
                        $auNumber = array();
                        $auGenNumber = array();
                        $start_counter = strval($aRow['auValue']);
                        for($fr = $aRow['auValue'];$fr < $aRow['auRunningVal'];$fr++){
                            
                            $temp_counter = $start_counter + $aRow['auIncrement'];//increment

                            $l1 = strlen($start_counter);
                            $l2 = strlen($temp_counter);
                            $c1 = '';
                            
                            for($i = 0; $i < ($l1 - $l2) ; $i++){$c1 .= '0';}

                            $auNumber[] = $c1.$temp_counter;
                            $start_counter = $c1.$temp_counter;
                        }
                        foreach ($res->result_array() as $key => $rx101) {
                            $auGenNumber[] = $rx101['res'];
                        }

                        //COMARATE RESULT
                            $result101 = array_diff($auNumber,$auGenNumber);
                            //SAVE RESULT RO ANOTHER ARRAY TO ARRANGE THE KEY
                            $fResult = array();
                            foreach ($result101 as $key => $rxs101){$fResult[] = $rxs101;}

                            if(count($fResult) > 0){
                                $newRunningVal=$fResult[0];
                                $new_id  = $counter_head.$newRunningVal;
                                $isDeleted = TRUE;
                            }
                            //print_r($result101);
                            //print_r($auNumber);
                            //var_dump($newRunningVal);
                    //END DETECTING DELETED NUMBER
                    $reAuNum[$aRow['auKeyname']]['auEnable']=true;
                    $reAuNum[$aRow['auKeyname']]['auRunningVal'] = $newRunningVal;
                    $reAuNum[$aRow['auKeyname']]['auPrefix'] = $aRow['auPrefix'];
                    $reAuNum[$aRow['auKeyname']]['auValue'] = $aRow['auValue'];
                    $reAuNum[$aRow['auKeyname']]['auIncrement']=$aRow['auIncrement'];
                    $reAuNum[$aRow['auKeyname']]['auNewId'] = $new_id;
                    $reAuNum[$aRow['auKeyname']]['auIsDeleted'] = $isDeleted;
                    //CHECK FOR MAX VALUE
                    if($aRow['auMaxVal']<$newRunningVal){$reAuNum[$aRow['auKeyname']]['auMaxVal']='rox';}else{$reAuNum[$aRow['auKeyname']]['auMaxVal']=$aRow['auMaxVal'];}
                }else{
                    $reAuNum[$aRow['auKeyname']]['auEnable']=false;
                }
        }
        return $reAuNum;
    }
    //END AUTO NUMBERS
}

?>