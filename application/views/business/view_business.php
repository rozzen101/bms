<style type="text/css">
.modal-body {
    background: white;
}
</style>

<div class="main-content" >
    <div class="wrap-content container" id="container">

        <!-- start: USER PROFILE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable">
                        <ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
                            <li class="active">
                                <a data-toggle="tab" href="#panel_overview">
                                    Overview
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#panel_edit_account">
                                    Owner
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#panel_projects">
                                    Certificates
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="panel_overview" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-sm-5 col-md-4">
                                        <div class="user-left">
                                            <div class="center">
                                              
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="user-image">
                                                        <?php
                                                            $bData = $bInf->row();
                                                            $businessImgURL = $this->config->item('businessImgURL');
                                                            if($bData->bLogo != ''){
                                                                $blogo = $businessImgURL.'/'.$bData->bLogo;
                                                            }else{
                                                                $blogo = $businessImgURL.'/businessDefault.png';
                                                            }
                                                        ?>
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="<?php echo $blogo; ?>" width="150" height="150" class="img-circle" border="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3"><?php echo $bData->bName; ?><br><h6><?php echo $bData->bDesc; ?></h6></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Type:</td>
                                                        <td><label><?php echo $bData->tName; ?></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Contact No:</td>
                                                        <td><label><?php echo $bData->bContact; ?></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fax:</td>
                                                        <td><label><?php echo $bData->bFax; ?></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email:</td>
                                                        <td><label><?php echo $bData->bEmail; ?></label></td>
                                                    </tr>
                                                    <?php if($bData->bWebsite != ''){?>
                                                    <tr>
                                                        <td>Website:</td>
                                                        <td><!-- <label><?php echo $bData->bWebsite; ?></label> -->
                                                            <font class="links cl-effect-1">
                                                                <a href="<?php echo $bData->bWebsite; ?>">VISIT LINK</a>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <tr>
                                                        <td>Address:</td>
                                                        <td><label><?php echo $bData->bAddress; ?></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">Remark:</td>
                                                        <td><label><?php echo $bData->bRemark; ?></label></td>
                                                    </tr>
                                                </tbody>
                                                <tfooter>
                                                    <tr>
                                                        <th colspan="2">
                                                            <div class="col col-md-6"><a href="<?php echo base_url();?>index.php/business/edit_business/<?php echo $bData->bId; ?>" class="btn btn-primary btn-block">Edit</a></div>
                                                            <div class="col col-md-6"><a href="<?php echo base_url();?>index.php/business" class="btn btn-danger btn-block">Back</a></div>
                                                            <!-- <div class="col col-md-6"><button class="btn btn-primary btn-block" onclick="showMsg()">test</button></div>showMsg -->
                                                        </th>
                                                    </tr>
                                                </tfooter>
                                            </table>
                                        
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-md-8">
                                    
                                        <div class="panel panel-white" id="activities">
                                            <div class="panel-heading border-light">
                                                <h4 class="panel-title text-primary">Recent Activities</h4>
                                                <paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>
                                            </div>
                                            <div collapse="activities" ng-init="activities=false" class="panel-wrapper">
                                                <div class="panel-body">
                                                    <ul class="timeline-xs">
                                                         <li class="timeline-item">
                                                            <div class="margin-left-15">
                                                                <div class="text-muted text-small">
                                                                    February 11, 2017 10:00 AM
                                                                </div>
                                                                <p>
                                                                    Updated Resident Details
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-item">
                                                            <div class="margin-left-15">
                                                                <div class="text-muted text-small">
                                                                   February 10, 2017 08:43 AM
                                                                </div>
                                                                <p>
                                                                    Request Clearanace for Employment
                                                                </p>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="panel_edit_account" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                            <table class="table table-striped table-hover" id="sample-table-2">
                                                <thead>
                                                    <tr>
                                                        <th class="center">Photo</th>
                                                        <th>Fullname</th>
                                                        <th class="hidden-xs">Civil Status</th>
                                                        <th class="hidden-xs">Mobile #</th>
                                                        <th class="hidden-xs">Phone</th>
                                                        <th class="hidden-xs">Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>            
                                                <tbody>
                                                    <?php 
                                                        foreach($bInf->result_array() as $aRow){ 
                                                            $birthdate=date("m/d/Y",strtotime(str_replace("-", "/", $aRow['birthdate'])));

                                                            if($aRow['status'] == 'RESIDING'){$resStatus = '<font class="label label-default">'.$aRow['status'].'</font>';}
                                                            elseif($aRow['status'] == 'DISEASED'){$resStatus = '<font class="label label-danger">'.$aRow['status'].'</font>';}
                                                            else{$resStatus = '<font class="label label-warning">'.$aRow['status'].'</font>';}

                                                            if($aRow['mobile_no'] != ''){$mobile_no = $aRow['mobile_no'];}else{$mobile_no = '-';}
                                                            if($aRow['tel_no'] != ''){$tel_no = $aRow['tel_no'];}else{$tel_no = '-';}

                                                            $imgURL = $this->config->item('imgURL');
                                                            if($aRow['display_picture'] != ''){
                                                                $primaryPix = $imgURL.'/'.$aRow['display_picture'];
                                                            }else{
                                                                if($aRow['gender'] == 'FEMALE'){$primaryPix = $imgURL.'/femaleDefault.jpg';}
                                                                else{$primaryPix = $imgURL.'/maleDefault.jpg';}
                                                            }
                                                            
                                                    ?>
                                                        <tr>
                                                            <td class="center"><img src="<?php echo $primaryPix;?>" width="32" height="32" class="img-circle" border="0"/></td>
                                                            <td><?php echo $aRow['fname'];?> <?php echo $aRow['mname'];?> <?php echo $aRow['lname'];?></td>
                                                            <td class="hidden-xs"><?php echo $aRow['civil_status'];?></td>
                                                            <td class="hidden-xs"><?php echo $mobile_no;?></td>
                                                            <td class="hidden-xs"><?php echo $tel_no;?></td>
                                                            <td class="hidden-xs"><?php echo $resStatus;?></td>
                                                            <td class="center">
                                                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                                    <a href="<?php echo base_url();?>index.php/resident/view_resident/<?php echo $aRow['res_id']; ?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="panel_projects" class="tab-pane fade">
                                <div class="row space20">
                                            <div class="col-sm-3">
                                                <button class="btn btn-icon margin-bottom-5 margin-bottom-5 btn-block" data-toggle="modal" data-target=".bs-example-modal">
                                                    <i class="fa fa-check-square-o text-primary text-extra-large margin-bottom-10"></i>
                                                    Barangay Clearance
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-icon margin-bottom-5 btn-block">
                                                    <i class="fa fa-rouble block text-primary text-extra-large margin-bottom-10"></i>
                                                    Barangay Business Clearance 
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-icon margin-bottom-5 btn-block">
                                                    <i class="fa fa-user block text-primary text-extra-large margin-bottom-10"></i>
                                                    Certificate of Indigency
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-icon margin-bottom-5 btn-block">
                                                    <i class="fa fa-user block text-primary text-extra-large margin-bottom-10"></i>
                                                    Certificate of Indigency
                                                </button>
                                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: USER PROFILE -->



        </div>
                    
    </div>
</div>

<!-- Small Modal -->
<div class="modal fade bs-example-modal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
          <?php $this->load->view('Certificates/cert_of_indigency'); ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                Close
            </button>
            <button type="button" class="btn btn-primary">
                Save changes
            </button>
        </div>
    </div>
</div>
</div>
<!-- /Small Modal -->



<script type="text/javascript">
function showMsg(){
    swal({
        title: "Success!",
        text: 'MY MESSAGE',
        type: "warning",
        confirmButtonColor: "#007AFF"
    },
    function(){
      alert('sud');
    });
}
</script>