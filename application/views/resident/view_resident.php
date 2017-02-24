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
                                                    Edit
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
                                                                        <div class="fileinput-new thumbnail"><img src="<?php echo base_url();?>public/assets/images/avatar-1-xl.jpg" alt="">
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                                        <div class="user-image-buttons">
                                                                            <span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
                                                                                <input type="file">
                                                                            </span>
                                                                            <a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
                                                                                <i class="fa fa-times"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table class="table table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="3">LOUBRANDO GARCIA DEJITO</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Gender:</td>
                                                                        <td><label>MALE </label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Birthdate:</td>
                                                                        <td><label>06-03-1992 </label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Age:</td>
                                                                        <td><label>25 </label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Employment:</td>
                                                                        <td><label>EMPLOYED </label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Voter:</td>
                                                                        <td><label>YES </label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status:</td>
                                                                        <td><label>RESIDING </label></td>
                                                                    </tr>
                                                                </tbody>
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
                                                <form action="#" role="form" id="form">
                                                    <fieldset>
                                                        <legend>
                                                            Personal Information
                                                        </legend>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">
                                                                        Firstname
                                                                    </label>
                                                                    <input type="text" class="form-control" id="fname" name="fname">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">
                                                                        Middlename
                                                                    </label>
                                                                    <input type="text"  class="form-control" id="mname" name="mname">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">
                                                                        Lastname
                                                                    </label>
                                                                    <input type="text"  class="form-control" id="lname" name="lname">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="block">
                                                                                        Birthdate
                                                                                    </label>
                                                                            <p class="input-group input-append datepicker date">
                                                                                <input type="text" class="form-control" id="birthdate" name="birthdate"/>
                                                                                <span class="input-group-btn">
                                                                                    <button type="button" class="btn btn-default">
                                                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                                                    </button> </span>
                                                                            </p> 
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                             <label class="control-label">
                                                                                Age
                                                                            </label>
                                                                            <input type="number"  class="form-control" id="age" name="age">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">
                                                                        Gender
                                                                    </label>
                                                                    <div class="clip-radio radio-primary">

                                                                        <input type="radio" value="male" name="gender" id="male" checked>
                                                                        <label for="male">
                                                                            Male
                                                                        </label>
                                                                        <input type="radio" value="female" name="gender" id="female">
                                                                        <label for="female">
                                                                            Female
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="block">
                                                                        Civil Status
                                                                    </label>
                                                                    <div class="clip-radio radio-primary">
                                                                        <input type="radio" id="single" name="civil_status" value="Single" checked="checked">
                                                                        <label for="single">
                                                                            Single
                                                                        </label>
                                                                        <input type="radio" id="married" name="civil_status" value="Married" >
                                                                        <label for="married">
                                                                            Married
                                                                        </label>
                                                                        <input type="radio" id="divorced" name="civil_status" value="Divorced" >
                                                                        <label for="divorced">
                                                                            Divorced
                                                                        </label>
                                                                        <input type="radio" id="widowed" name="civil_status" value="Widowed" >
                                                                        <label for="widowed">
                                                                            Widowed
                                                                        </label>
                                                                    </div>
                                                                </div>


                                                                      
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                    <label class="control-label">
                                                                        Voter
                                                                    </label>
                                                                    <div class="clip-radio radio-primary">

                                                                        <input type="radio" value="no" name="voter" id="no" checked>
                                                                        <label for="no">
                                                                            No
                                                                        </label>
                                                                        <input type="radio" value="yes" name="voter" id="yes">
                                                                        <label for="yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                       <div class="form-group">
                                                                    <label class="control-label">
                                                                        Employment
                                                                    </label>
                                                                    <div class="clip-radio radio-primary">

                                                                        <input type="radio" value="unemployed" name="employment" id="unemployed" checked>
                                                                        <label for="unemployed">
                                                                            Unemployed
                                                                        </label>
                                                                        <input type="radio" value="employed" name="employment" id="employed">
                                                                        <label for="employed">
                                                                            Employed
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>
                                                                        Display Picture
                                                                    </label>
                                                                     <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="user-image">
                                                                        <div class="fileinput-new thumbnail"><img src="<?php echo base_url();?>public/assets/images/avatar-1-xl.jpg" alt="">
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                                        <div class="user-image-buttons">
                                                                            <span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
                                                                                <input type="file">
                                                                            </span>
                                                                            <a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
                                                                                <i class="fa fa-times"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                  <div class="form-group">
                                                                <button type="button" class="btn btn-primary btn-wide btn-scroll btn-scroll-top ti-save">
                                                                      <span>Update</span>
                                                                </button>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
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
function view_resident()
{
    window.location.href = '<?php echo base_url();?>index.php/view_resident';
}
</script>