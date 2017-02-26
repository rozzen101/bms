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
                                                                $blogo = $businessImgURL.'/'.$bData->bId.'/'.$bData->bLogo;
                                                            }else{
                                                                $blogo = $businessImgURL.'/businessDefault.png';
                                                            }
                                                        ?>
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="<?php echo $blogo; ?>" width="150" height="150" border="0">
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
                                                                <a href="<?php echo $bData->bWebsite; ?>" target="_blank"><?php echo $bData->bWebsite; ?></a>
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
                                                        <?php 
                                                            foreach($actionLog->result_array() as $aRow){?>
                                                                <li class="timeline-item">
                                                                    <div class="margin-left-15">
                                                                        <div class="text-muted text-small">
                                                                            <?php echo $aRow['aCreateBy']; ?> - <?php echo date("F t, Y h:i A",strtotime($aRow['aCreatedDate'])); ?>
                                                                        </div>
                                                                        <p>
                                                                            <?php echo $aRow['aRemark']; ?>  
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                        <?php
                                                            }
                                                        ?>
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
                                        <button class="btn btn-icon margin-bottom-5 margin-bottom-5 btn-block" data-toggle="modal" data-target=".bs-barangay-clearance-modal">
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

                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend>
                                              Business Attachment
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

<!-- Requirements for a Barangay Clearance -->
<div class="modal fade bs-barangay-clearance-modal"  tabindex="-1" role="dialog" aria-labelledby="Apply for Barangay Clearance" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Barangay Clearance Application Wizard</h4>
            </div>
            <div class="modal-body">
              <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- start: WIZARD FORM -->
                                    <form action="#" role="form" class="smart-wizard" id="form">
                                        <div id="wizard" class="swMain">
                                            <!-- start: WIZARD SEPS -->
                                            <ul>
                                                <li>
                                                    <a href="#step-1">
                                                        <div class="stepNumber">
                                                            1
                                                        </div>
                                                        <span class="stepDesc"><small> Requirements </small></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-2">
                                                        <div class="stepNumber">
                                                            2
                                                        </div>
                                                        <span class="stepDesc"> <small> Payment </small></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-3">
                                                        <div class="stepNumber">
                                                            3
                                                        </div>
                                                        <span class="stepDesc"> <small> Complete </small> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- end: WIZARD SEPS -->
                                            <!-- start: WIZARD STEP 1 -->
                                            <div id="step-1">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="padding-30">
                                                            <h2 class="StepTitle"><i class="ti-face-smile fa-2x text-primary block margin-bottom-10"></i> Enter your personal information</h2>
                                                            <p>
                                                                This is an added measure against fraud and to help with billing issues.
                                                            </p>
                                                            <p class="text-small">
                                                                Enter security questions in case you lose access to your account.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <fieldset>
                                                            <legend>
                                                                Personal Information
                                                            </legend>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            First Name <span class="symbol required"></span>
                                                                        </label>
                                                                        <input type="text" placeholder="Enter your First Name" class="form-control" name="firstName"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">
                                                                            Last Name <span class="symbol required"></span>
                                                                        </label>
                                                                        <input type="text" placeholder="Enter your Last Name" class="form-control" name="lastName"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="block">
                                                                            Gender
                                                                        </label>
                                                                        <div class="clip-radio radio-primary">
                                                                            <input type="radio" id="wz-female" name="gender" value="female">
                                                                            <label for="wz-female">
                                                                                Female
                                                                            </label>
                                                                            <input type="radio" id="wz-male" name="gender" value="male">
                                                                            <label for="wz-male">
                                                                                Male
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Choose your country or region
                                                                        </label>
                                                                        <select class="form-control" name="country">
                                                                            <option value="">&nbsp;</option>
                                                                            <option value="AL">Alabama</option>
                                                                            <option value="AK">Alaska</option>
                                                                            <option value="AZ">Arizona</option>
                                                                            <option value="AR">Arkansas</option>
                                                                            <option value="CA">California</option>
                                                                            <option value="CO">Colorado</option>
                                                                            <option value="CT">Connecticut</option>
                                                                            <option value="DE">Delaware</option>
                                                                            <option value="FL">Florida</option>
                                                                            <option value="GA">Georgia</option>
                                                                            <option value="HI">Hawaii</option>
                                                                            <option value="ID">Idaho</option>
                                                                            <option value="IL">Illinois</option>
                                                                            <option value="IN">Indiana</option>
                                                                            <option value="IA">Iowa</option>
                                                                            <option value="KS">Kansas</option>
                                                                            <option value="KY">Kentucky</option>
                                                                            <option value="LA">Louisiana</option>
                                                                            <option value="ME">Maine</option>
                                                                            <option value="MD">Maryland</option>
                                                                            <option value="MA">Massachusetts</option>
                                                                            <option value="MI">Michigan</option>
                                                                            <option value="MN">Minnesota</option>
                                                                            <option value="MS">Mississippi</option>
                                                                            <option value="MO">Missouri</option>
                                                                            <option value="MT">Montana</option>
                                                                            <option value="NE">Nebraska</option>
                                                                            <option value="NV">Nevada</option>
                                                                            <option value="NH">New Hampshire</option>
                                                                            <option value="NJ">New Jersey</option>
                                                                            <option value="NM">New Mexico</option>
                                                                            <option value="NY">New York</option>
                                                                            <option value="NC">North Carolina</option>
                                                                            <option value="ND">North Dakota</option>
                                                                            <option value="OH">Ohio</option>
                                                                            <option value="OK">Oklahoma</option>
                                                                            <option value="OR">Oregon</option>
                                                                            <option value="PA">Pennsylvania</option>
                                                                            <option value="RI">Rhode Island</option>
                                                                            <option value="SC">South Carolina</option>
                                                                            <option value="SD">South Dakota</option>
                                                                            <option value="TN">Tennessee</option>
                                                                            <option value="TX">Texas</option>
                                                                            <option value="UT">Utah</option>
                                                                            <option value="VT">Vermont</option>
                                                                            <option value="VA">Virginia</option>
                                                                            <option value="WA">Washington</option>
                                                                            <option value="WV">West Virginia</option>
                                                                            <option value="WI">Wisconsin</option>
                                                                            <option value="WY">Wyoming</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                <a href="javascript:void(0)" data-content="Your personal information is not required for unlawful purposes, but only in order to proceed in this tutorial" data-title="Don't worry!" data-placement="top" data-toggle="popover">
                                                                    Why do you need my personal information?
                                                                </a>
                                                            </p>
                                                        </fieldset>
                                                        <fieldset>
                                                            <legend>
                                                                Security question
                                                            </legend>
                                                            <p>
                                                                Enter security questions in case you lose access to your account. <span class="text-small block">Be sure to pick questions that you will remember the answers to.</span>
                                                            </p>
                                                            <div class="panel-group accordion" id="accordion">
                                                                <div class="panel panel-white">
                                                                    <div class="panel-heading">
                                                                        <h5 class="panel-title">
                                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                            <i class="icon-arrow"></i> What was the name of your first stuffed animal?
                                                                        </a></h5>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="stuffedAnimal" placeholder="Enter the the name of your first stuffed animal">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-white">
                                                                    <div class="panel-heading">
                                                                        <h5 class="panel-title">
                                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                            <i class="icon-arrow"></i> What is your grandfather's first name?
                                                                        </a></h5>
                                                                    </div>
                                                                    <div id="collapseTwo" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="grandfatherName" placeholder="Enter your grandfather's first name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-white">
                                                                    <div class="panel-heading">
                                                                        <h5 class="panel-title">
                                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                            <i class="icon-arrow"></i> In what city your grandmother live?
                                                                        </a></h5>
                                                                    </div>
                                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="grandmotherCity" placeholder="Enter your grandmother's city">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="form-group">
                                                            <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                                                Next <i class="fa fa-arrow-circle-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: WIZARD STEP 1 -->
                                            <!-- start: WIZARD STEP 2 -->
                                            <div id="step-2">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="padding-30">
                                                            <h2 class="StepTitle">Enter billing details</h2>
                                                            <p class="text-large">
                                                                You will need to enter your billing address and select your payment method.
                                                            </p>
                                                            <p class="text-small">
                                                                You can use most major credit card, as well as PayPal.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <fieldset>
                                                            <legend>
                                                                Payment Method
                                                            </legend>
                                                            <label>
                                                                Payment type
                                                            </label>
                                                            <div class="form-group">
                                                                <div class="btn-group" data-toggle="buttons">
                                                                    <label class="btn btn-primary active">
                                                                        <input type="radio" name="paymentMethod" id="option1" autocomplete="off" value="credit card">
                                                                        <i class="fa fa-cc-visa" ></i> <i class="fa fa-cc-mastercard" ></i> Credit Card
                                                                    </label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="paymentMethod" id="option2" autocomplete="off" value="paypal">
                                                                        <i class="fa fa-cc-paypal" ></i> PayPal
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>
                                                                    Card Number
                                                                </label>
                                                                <input type="text" class="form-control" name="cardNumber" placeholder="Enter Your Card Number">
                                                            </div>
                                                            <label>
                                                                Expires
                                                            </label>
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="form-group">
                                                                        <select class="cs-select cs-skin-slide">
                                                                            <option value="" disabled>Month</option>
                                                                            <option value="January">January</option>
                                                                            <option value="February">February</option>
                                                                            <option value="March">March</option>
                                                                            <option value="April">April</option>
                                                                            <option value="May">May</option>
                                                                            <option value="June">June</option>
                                                                            <option value="July">July</option>
                                                                            <option value="August">August</option>
                                                                            <option value="September">September</option>
                                                                            <option value="October">October</option>
                                                                            <option value="November">November</option>
                                                                            <option value="December">December</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="form-group">
                                                                        <select class="cs-select cs-skin-slide">
                                                                            <option value="" disabled>Year</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <label>
                                                                        Security code
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="securityCode" placeholder="Security code">
                                                                            </div>
                                                                        </div>
                                                                        <span class="help-inline col-xs-4">
                                                                            <a href="javascript:void(0)" data-content="The security code is a three-digit number on the back of your credit card, immediately following your main card number." data-title="How to find the security code" data-placement="top" data-toggle="popover">
                                                                                <i class="ti-help-alt text-large text-primary"></i>
                                                                            </a> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="form-group">
                                                            <button class="btn btn-primary btn-o back-step btn-wide pull-left">
                                                                <i class="fa fa-circle-arrow-left"></i> Back
                                                            </button>
                                                            <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                                                Next <i class="fa fa-arrow-circle-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: WIZARD STEP 2 -->
                                            <!-- start: WIZARD STEP 3 -->
                                            <div id="step-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="text-center">
                                                            <h1 class=" ti-check block text-primary"></h1>
                                                            <h2 class="StepTitle">Congratulations!</h2>
                                                            <p class="text-large">
                                                                Your tutorial is complete.
                                                            </p>
                                                            <p class="text-small">
                                                                Thank you for your registration. Your transaction has been completed, and a receipt for your purchase has been emailed to you.  You may log into your account to view details of this transaction.
                                                            </p>
                                                            <a class="btn btn-primary btn-o go-first" href="javascript:void(0)">
                                                                Back to first step
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: WIZARD STEP 3 -->
                                        </div>
                                    </form>
                                    <!-- end: WIZARD FORM -->
                                </div>
                            </div>
                        </div>
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