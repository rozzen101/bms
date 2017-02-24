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
                                   
                                            <div id="panel_edit_account" class="tab-pane fade in active">
                                                <form action="<?php echo base_url();?>index.php/resident/save_resident" method="post" role="form" id="form"  enctype="multipart/form-data">
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
                                                                        <input type="text" class="form-control" id="fname" name="fname" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">
                                                                        Middlename
                                                                    </label>
                                                                       <input type="text"  class="form-control" id="mname" name="mname" required>
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">
                                                                        Lastname
                                                                    </label>
                                                                       <input type="text"  class="form-control" id="lname" name="lname" required>
                                                                  
                                                                </div>
                                                                 <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="block">
                                                                                        Birthdate
                                                                                    </label>
                                                                            <p class="input-group input-append datepicker date">
                                                                                <input type="text" class="form-control" id="birthdate" name="birthdate" required/>
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
                                                                            <input type="number"  class="form-control" id="age" name="age" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                    <label class="control-label">
                                                                        Gender
                                                                    </label>
                                                                  <select class="cs-select cs-skin-slide" id="gender" name="gender">
                                                                    <option value="Male" data-class="fa fa-male" >Male</option>
                                                                    <option value="Female" data-class="fa fa-female" >Female</option>
                                                                </select>
                                                                 </div>

                                                                <div class="col-md-4">
                                                                     <label class="block">
                                                                        Civil Status
                                                                    </label>
                                                                     <select class="cs-select cs-skin-slide" id="civil_Status" name="civil_Status">
                                                                    <option value="Male" data-class="fa fa-user" >Single</option>
                                                                    <option value="Female" data-class="fa fa-heart" >Married</option>
                                                                </select>
                                                                 </div>
                                                                  </div>
                                                                </div>    
                                                            </div>




                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                           <div class="form-group">
                                                                            <label class="control-label">
                                                                                Barangay
                                                                            </label>
                                                                        
                                                                               <input type="text"  class="form-control" id="barangay" name="barangay" required>
                                                                             
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                       <div class="col-md-4">
                                                                           <div class="form-group">
                                                                            <label class="control-label">
                                                                                Sitio/Street
                                                                            </label>
                                                                        
                                                                               <input type="text"  class="form-control" id="address" name="address" required>
                                                                             
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                  <div class="row">
                                                                       <div class="col-md-4">
                                                                           <div class="form-group">
                                                                            <label class="control-label">
                                                                                Mobile
                                                                            </label>
                                                                        
                                                                               <input type="text"  class="form-control" id="mobile_no" name="mobile_no" >
                                                                             
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                       <div class="col-md-4">
                                                                           <div class="form-group">
                                                                            <label class="control-label">
                                                                                Tel No
                                                                            </label>
                                                                        
                                                                               <input type="text"  class="form-control" id="tel_no" name="tel_no" >
                                                                             
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                        <div class="form-group">
                                                                    <label class="control-label">
                                                                        Voter
                                                                    </label>
                                                                <select class="cs-select cs-skin-slide" id="voter" name="voter">
                                                                    <option value="Yes" data-class="fa fa-check" >Yes</option>
                                                                    <option value="No" data-class="fa fa-close" >No</option>
                                                                </select>
                                                                </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                       <div class="form-group">
                                                                    <label class="control-label">
                                                                        Employment
                                                                    </label>
                                                                      <select class="cs-select cs-skin-slide" id="employment" name="employment">
                                                                    <option value="Employed" data-class="fa fa-briefcase" >Employed</option>
                                                                    <option value="Unemployed" data-class="fa fa-book" >Unemployed</option>
                                                                </select>
                                                                </div>
                                                                    </div>
                                                                </div>



                                                                <div class="form-group">
                                                                    <label>
                                                                        Display Picture
                                                                    </label>
                                                                     <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="user-image">
                                                                        <div class="fileinput-new thumbnail">
                                                                            <img id="blah" src="<?php echo base_url();?>public/assets/images/avatar-1-xl.jpg" >
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                                        <div class="user-image-buttons">
                                                                            <span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
                                                                                <input type="file" id="imgInp">
                                                                            </span>
                                                                            <a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
                                                                                <i class="fa fa-times"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>


                                                                  <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-wide btn-scroll btn-scroll-top ti-save">
                                                                      <span>Save</span>
                                                                </button>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            
                                    </div>
                             
                        </div>
                        <!-- end: USER PROFILE -->
                    </div>
                </div>
            </div>





<script type="text/javascript">
function view_resident()
{
    window.location.href = '<?php echo base_url();?>index.php/view_resident';
}

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}




$("#imgInp").change(function(){
    var ext = $('#imgInp').val().split('.').pop().toLowerCase();
if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
{
    alert('invalid extension!');
}
else
{
    readURL(this);
}
});
</script>