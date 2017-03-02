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
                        <form name="residentForm" id="residentForm" action="<?php echo base_url();?>index.php/residents/save_resident" autocomplete="off" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <legend>
                              Resident Information
                            </legend>
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
                                            <input id="rImage" name="rImage" class="form-control" type="file" class="file" accept="image/x-png, image/gif, image/jpeg, image/jpg" onchange="readURL(this);">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                   <div class="form-group">
                                        <label>
                                            First Name
                                        </label>
                                        <input type="text" name="rFname" id="rFname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                      <div class="form-group">
                                        <label>
                                            Middle Name
                                        </label>
                                        <input type="text" name="rMname" id="rMname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                   <div class="form-group">
                                        <label>
                                            Last Name
                                        </label>
                                        <input type="text" name="rLname" id="rLname" class="form-control">
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
                                            <input type="text" class="form-control" name="rBirthdate" id="rBirthdate" value="<?php echo date('m/d/Y');?>"/ readonly="true">
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
                                        <input type="number" name="rAge" id="rAge" class="form-control">
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="block">
                                            Gender
                                        </label>
                                          <select name="rGender" id="rGender" class="cs-select cs-skin-slide">
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
                                          <select name="rCivil_status" id="rCivil_status" class="cs-select cs-skin-slide">
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
                                          <select name="rEmployment" id="rEmployment" class="cs-select cs-skin-slide">
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
                                          <select name="rVoter" id="rVoter" class="cs-select cs-skin-slide">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>
                                            Contact No.
                                        </label>
                                        <input type="text" name="rContact_no" id="rContact_no" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>
                                            Barangay
                                        </label>
                                        <input type="text" name="rBarangay" id="rBarangay" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>
                                            Sitio
                                        </label>
                                        <input type="text" name="rSitio" id="rSitio" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label>
                                            Resident Status
                                        </label>
                                        <select name="rStatus" id="rStatus" class="cs-select cs-skin-slide">
                                            <option value="Residing">Residing</option>
                                            <option value="Deceased">Deceased</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                         <div class="pull-right">
                            <div class="form-group" id="loadImg">
                                <button type="button" class="btn btn-success btn-wide btn-scroll btn-scroll-top ti-plus" onclick="save_resident()"><span>Save</span></button>
                                <a href="<?php echo base_url();?>index.php/residents" class="btn btn-danger btn-wide btn-scroll btn-scroll-top ti-arrow-left"><span>Cancel</span></a>
                            </div>
                        </div>
                        </fieldset>
                       
                        </form>
                    </div>
                </div>
            </div>
       </div>
      
    <!-- end: FIELDSET -->
                
                




<script type="text/javascript">
function view_resident() {
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

function save_resident(){
        if($("#rFname").val() == ''){
             $("#rFname").focus();
             swal({
                        title: "ERROR!",
                        text: "First Name must not be Empty",
                        type: "warning",
                        confirmButtonColor: "#c82e29"
              });

        }else if($("#rMname").val() == ''){
            $("#rMname").focus();
             swal({
                        title: "ERROR!",
                        text: "Middle Name must not be Empty",
                        type: "warning",
                        confirmButtonColor: "#c82e29"
              });
        }else if($("#rLname").val() == ''){
            $("#rLname").focus();
             swal({
                        title: "ERROR!",
                        text: "Last Name must not be Empty",
                        type: "warning",
                        confirmButtonColor: "#c82e29"
              });
        }else if($("#rAge").val() == '' || $("#rAge").val() == 0){
            $("#rAge").focus();
             swal({
                        title: "ERROR!",
                        text: "Age must not be Empty or Zero",
                        type: "warning",
                        confirmButtonColor: "#c82e29"
              });
        }else if($("#rBarangay").val() == ''){
            $("#rBarangay").focus();
             swal({
                        title: "ERROR!",
                        text: "Barangay must not be Empty",
                        type: "warning",
                        confirmButtonColor: "#c82e29"
              });
        }else if($("#rSitio").val() == ''){
            $("#rSitio").focus();
             swal({
                        title: "ERROR!",
                        text: "Sitio must not be Empty",
                        type: "warning",
                        confirmButtonColor: "#c82e29"
              });
        }else{
        //CHECK FIELD
            var myTemp = $("#loadImg").html();
            $("#residentForm").ajaxForm({
              beforeSend: function() {
                $("#loadImg").html("<img src='"+base_url+"public/assets/images/loading/loading10.gif' border='0'/>");
              },
              complete: function(xhr) {
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
                      location.href = base_url+'index.php/residents/view_resident/'+obj.rId;
                    });
                }
              }
            }).submit();
        }
        
    }
</script>