<div class="main-content" >
<div class="wrap-content container" id="container">
<!-- start: FIELDSET -->
    <div class="container-fluid container-fullw bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                              <h1 class="mainTitle">Edit Business Form</h1>
                                    <span class="mainDescription">Please fill all the necessary fields.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form name="businessForm" id="businessForm" action="<?php echo base_url();?>index.php/business/update_business" autocomplete="off" method="POST">
                        <fieldset>
                            <legend>
                              Business Owner Information
                            </legend>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover" id="sample-table-2">
                                        <thead>
                                            <tr>
                                                <th class="center">Photo</th>
                                                <th>Fullname</th>
                                                <th class="hidden-xs">Civil Status</th>
                                                <th class="hidden-xs">Mobile #</th>
                                                <th class="hidden-xs">Phone</th>
                                                <th></th>
                                            </tr>
                                        </thead>            
                                        <tbody id="ownerList">
                                            <?php
                                                foreach($bInf->result_array() as $rowData){
                                                    $imgURL = $this->config->item('imgURL');
                                                    if($rowData['display_picture'] != ''){
                                                        $primaryPix = $imgURL.'/'.$rowData['display_picture'];
                                                    }else{
                                                        if($rowData['gender'] == 'FEMALE'){$primaryPix = $imgURL.'/femaleDefault.jpg';}
                                                        else{$primaryPix = $imgURL.'/maleDefault.jpg';}
                                                    }

                                                    if($rowData['mobile_no'] != ''){$mobile_no = $rowData['mobile_no'];}else{$mobile_no = '-';}
                                                    if($rowData['tel_no'] != ''){$tel_no = $rowData['tel_no'];}else{$tel_no = '-';}
                                                    echo '<tr id="resInfo'.$rowData['res_id'].'">
                                                        <input type="hidden" class="rox_res" name="xres_id[]" value="'.$rowData['res_id'].'">
                                                        <td class="center"><img src="'.$primaryPix.'" width="32" height="32" class="img-circle" border="0" alt="image"/></td>
                                                        <td>'.$rowData['fname'].' ('.$rowData['mname'].') '.$rowData['lname'].'</td>
                                                        <td class="hidden-xs">'.$rowData['civil_status'].'</td>
                                                        <td class="hidden-xs">'.$mobile_no.'</td>
                                                        <td class="hidden-xs">'.$tel_no.'</td>
                                                        <td class="center">
                                                            <div>
                                                                <button type="button" class="btn btn-transparent btn-xs btn-danger" onclick="removeRes('.$rowData['res_id'].')"><i class="fa fa-times fa fa-white"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-wide btn-scroll btn-scroll-top ti-search" data-toggle="modal" data-target=".resident-lookup">
                                            <span>Resident Look-up</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <?php 
                            $bData = $bInf->row();
                            $businessImgURL = $this->config->item('businessImgURL');
                            if($bData->bLogo != ''){
                                $blogo = $businessImgURL.'/'.$bData->bLogo;
                            }else{
                                $blogo = $businessImgURL.'/businessDefault.png';
                            }
                        ?>
                        <fieldset>
                            <legend>
                              Business Information
                            </legend>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            Business Name
                                        </label>
                                        <input type="text" name="bName" id="bName" class="form-control" value="<?php echo $bData->bName; ?>" required>
                                        <input type="hidden" name="xbId" id="xbId" value="<?php echo $bData->bId; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            Business Description
                                        </label>
                                        <textarea name="bDesc" id="bDesc" placeholder="" class="form-control" required><?php echo $bData->bDesc; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            Business Address
                                        </label>
                                        <input type="text" name="bAddress" id="bAddress" class="form-control" value="<?php echo $bData->bAddress; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Contact No.
                                        </label>
                                        <input type="text" name="bContact" id="bContact" class="form-control" value="<?php echo $bData->bContact; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Fax No.
                                        </label>
                                        <input type="text" name="bFax" id="bFax" class="form-control" value="<?php echo $bData->bFax; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Email
                                        </label>
                                        <input type="text" name="bEmail" id="bEmail" class="form-control" value="<?php echo $bData->bEmail; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            Website
                                        </label>
                                        <input type="text" name="bWebsite" id="bWebsite" class="form-control" value="<?php echo $bData->bWebsite; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>
                              Other Information
                            </legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Business Type
                                        </label>
                                        <select name="bType" id="bType" class="cs-select cs-skin-slide" required>
                                            <?php
                                                foreach($bType as $row){
                                                    if($bData->tId == $row['tId']){
                                                        echo '<option value="'.$row['tId'].'" selected>'.$row['tName'].'</option>';
                                                    }else{
                                                        echo '<option value="'.$row['tId'].'">'.$row['tName'].'</option>';
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Clearance Fee
                                        </label>
                                        <input type="text" name="bClearanceFee" id="bClearanceFee" class="form-control" value="<?php echo $bData->bCleranceFee; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            Remark
                                        </label>
                                        <textarea name="bRemark" id="bRemark" placeholder="" class="form-control"><?php echo $bData->bRemark; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="pull-right">
                            <div class="form-group" id="loadImg">
                                <button type="button" class="btn btn-success btn-wide btn-scroll btn-scroll-top ti-plus" onclick="save_business()"><span>Save</span></button>
                                <a href="<?php echo base_url();?>index.php/business" class="btn btn-danger btn-wide btn-scroll btn-scroll-top ti-arrow-left"><span>Cancel</span></a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: FIELDSET -->


<!-- MODAL FOR RESIDENT LOOK-UP -->
<div id="resident-lookup" class="modal fade resident-lookup"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Resident Look-up Table</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="residentTbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Img</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Birthdate</th>
                            <th>Gender</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.onload=function(){
        loadResident();
        chTblStatus();
    };
    function loadResident(){
        $('#residentTbl').dataTable( {
              "sDom": "Tfrtip",
              "bProcessing": true,
              "bPaginate": true,
              "bDestroy": true,
              "bInfo": true,
              "bFilter": true,
              "bServerSide": true,
              "iDisplayLength": 10,
              "sAjaxSource": base_url+"index.php/business/resident_lookup",
              "aoColumns": [ 
                {"bSortable":false,"sWidth": "1%"},
                {"bVisible":false},
               
                {"bSortable":true,"sWidth": "5%"},
                {"bSortable":true,"sWidth": "20%"},
                {"bSortable":true,"sWidth": "10%"},
                {"bSortable":true,"sWidth": "20%"},
                {"bSortable":true,"sWidth": "20%"},
                {"bSortable":true,"sWidth": "7%"},
                {"bSortable":true,"sWidth": "8%"}
              ],
              "fnCreatedRow": function( nRow, aData, iDataIndex ) {
                  $(nRow).attr('id', "invoice_rid"+aData[1]);
                  $(nRow).attr("class","sel");
                  $(nRow).attr("style","text-align:center;cursor:pointer;");
                  $(nRow).attr("onclick","select_resident("+aData[1]+")");

                   /*for(j=0;j<8;j++)
                   {
                     $('td:eq('+j+')', nRow).attr("onclick","select_resident_('"+aData[1]+"')");
                   }*/
              },
              "fnDrawCallback": function ( oSettings ) {
                  /* Need to redo the counters if filtered or sorted */
                  if ( oSettings.bSorted || oSettings.bFiltered )
                  {
                    for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ )
                    {
                      $('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
                    }
                  }
                }
          });
    }

    function save_business(){
        //CHECK FIELD
        if($(".rox_res").length <= 0){
            bootbox.alert("<img src='"+base_url+"public/assets/images/dialog-warning.png' border='0'> No Owner SELECTED!");
        }else if($("#bName").val() == ''){
            bootbox.alert("<img src='"+base_url+"public/assets/images/dialog-warning.png' border='0'> Business Name Field is EMPTY!");
        }else if($("#bDesc").val() == ''){
            bootbox.alert("<img src='"+base_url+"public/assets/images/dialog-warning.png' border='0'> Business Description Field is EMPTY!");
        }else if($("#bAddress").val() == ''){
            bootbox.alert("<img src='"+base_url+"public/assets/images/dialog-warning.png' border='0'> Business Address Field is EMPTY!");
        }else if($("#bContact").val() == ''){
            bootbox.alert("<img src='"+base_url+"public/assets/images/dialog-warning.png' border='0'> Business Contact Field is EMPTY!");
        }else if($("#bClearanceFee").val() == ''){
            bootbox.alert("<img src='"+base_url+"public/assets/images/dialog-warning.png' border='0'> Business Clearance Fee Field is EMPTY!");
        }else if(isNaN($("#bClearanceFee").val())){
            bootbox.alert("<img src='"+base_url+"public/assets/images/dialog-warning.png' border='0'> Business Clearance Fee Field is NOT NUMERIC!");
        }else{
            var myTemp = $("#loadImg").html();
            $("#businessForm").ajaxForm({
              beforeSend: function() {
                $("#loadImg").html("<img src='"+base_url+"public/assets/images/loading/loading10.gif' border='0'/>");
              },
              complete: function(xhr) {
                //bootbox.alert(xhr.responseText);
                $("#loadImg").html(myTemp);
                var obj = $.parseJSON(xhr.responseText);
                if(obj.ok == 0){
                    swal({
                        title: "ERROR!",
                        text: obj.msg,
                        type: "warning",
                        confirmButtonColor: "#c82e29"
                    });
                }else{
                    swal({
                        title: "Success!",
                        text: obj.msg,
                        type: "success",
                        confirmButtonColor: "#007AFF"
                    },
                    function(){
                      location.href = base_url+'index.php/business/view_business/<?php echo $bData->bId; ?>';
                    });
                }
              }
            }).submit();
        }
    }

    function select_resident(rid){
        $("#resident-lookup").modal('toggle');
        if(!chIfExist(rid)){
            //ADD LOADING IMG
            $( "#noOwnerSelected" ).remove();
            $("#ownerList").append('<tr id="ownerLoading"><td colspan="7"><center><img src="'+base_url+'public/assets/images/loading/loading11.gif" border="0"/></center></td></tr>');
            //GET RESIDENT INFO.
            $.post(base_url+'index.php/business/resident_indData','&resId='+rid,function(data){
                if(data != 1){
                    $("#ownerList").append(data);
                    $( "#ownerLoading" ).remove();
                    chTblStatus();
                }else{
                    swal({
                        title: "ERROR!",
                        text: "<b>RESIDENT</b> look-up ERROR!",
                        type: "warning",
                        confirmButtonColor: "#c82e29"
                    },
                    function(){
                        $( "#ownerLoading" ).remove();
                        chTblStatus();
                    });
                }
            });
        }
    }

    function removeRes(rid){
        $("#resInfo"+rid).slideUp('slow');
        $("#resInfo"+rid).remove();
        chTblStatus();
    }

    function chTblStatus(){
        if($(".rox_res").length){
            $( "#noOwnerSelected" ).remove();
        }else{
            $("#ownerList").html('<tr id="noOwnerSelected"><td colspan="7"><center>No Owner Selected!</center></td></tr>');
        }
    }

    function chIfExist(rid){
        var val = false;
        if($("#resInfo"+rid).length){
            val = true;
        }
        return val;
    }

    function setFee(){
        var myTypeData = '<?php echo json_encode($bType); ?>';
        obj = $.parseJSON(myTypeData);
        for (var i in obj) {
          alert(obj[i]);
        }
    }
</script>


