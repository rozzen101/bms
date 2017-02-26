<style type="text/css">
.modal-body {
    background: white;
}
input {
    width: 250px;
    padding: 5px;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
}
</style>

<div class="main-content" >
<div class="wrap-content container" id="container">

                        <!-- start: USER PROFILE -->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                          <h1 class="mainTitle">Add New Resident Form</h1>
                                                <span class="mainDescription">Please fill all the necessary fields.</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                          <div class="col-md-12">
                        <form name="businessForm" id="businessForm" action="<?php echo base_url();?>index.php/residents/save_residents" autocomplete="off" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <legend>
                              Resident Information
                            </legend>
                            <!-- <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <center>
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="user-image">
                                                <div class="fileinput-new thumbnail"><img id="imgPreview" src="<?php echo base_url();?>public/assets/images/default_user.png" height="100" width="200">
                                                </div>
                                              
                                                <div class="user-image-buttons">
                                                    <span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
                                                        <input type="file" id="display_picture" name="display_picture">
                                                    </span>
                                                    <a  id="imgRemove" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                       
                                          <label>
                                            Display Picture
                                        </label>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div> -->
                            <div class="row">
                              <div class="col-md-3">
                                    <div class="col-md-12">
                                        <center>
                                            <div class="fileinput-new thumbnail">
                                                <img id="shLogo" src="<?php echo base_url();?>public/assets/images/default_user.png"  width="150" height="150" border="0">
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>
                                                Select Business Logo
                                            </label>
                                            <input id="display_picture" name="display_picture" class="form-control" type="file" class="file" accept="image/x-png, image/gif, image/jpeg, image/jpg" onchange="readURL(this);" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                   <div class="form-group">
                                        <label>
                                            First Name
                                        </label>
                                        <input type="text" name="bName" id="bName" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                      <div class="form-group">
                                        <label>
                                            Middle Name
                                        </label>
                                        <input type="text" name="bName" id="bName" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                   <div class="form-group">
                                        <label>
                                            Last Name
                                        </label>
                                        <input type="text" name="bName" id="bName" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="block">
                                            Birthdate
                                        </label>
                                        <p class="input-group input-append datepicker date">
                                            <input type="text" class="form-control"/>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default">
                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                </button> </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Age
                                        </label>
                                        <input type="number" name="age" id="age" class="form-control">
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="block">
                                            Gender
                                        </label>
                                          <select name="gender" id="gender" class="cs-select cs-skin-slide" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="block">
                                            Civil Status
                                        </label>
                                          <select name="civil_status" id="civil_status" class="cs-select cs-skin-slide" required>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                </div>

                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="block">
                                            Employment
                                        </label>
                                          <select name="employment" id="employment" class="cs-select cs-skin-slide" required>
                                            <option value="Employed">Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                        </select>
                                    </div>
                                </div>


                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="block">
                                            Voter
                                        </label>
                                          <select name="voter" id="voter" class="cs-select cs-skin-slide" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Contact No.
                                        </label>
                                        <input type="text" name="bContact" id="bContact" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Barangay
                                        </label>
                                        <input type="text" name="bFax" id="bFax" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Sitio
                                        </label>
                                        <input type="text" name="bEmail" id="bEmail" class="form-control" required>
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
      
    <!-- end: FIELDSET -->
                
                




<script type="text/javascript">
function view_resident()
{
    window.location.href = '<?php echo base_url();?>index.php/view_resident';
}



function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#shLogo')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>