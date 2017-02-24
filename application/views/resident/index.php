<div class="main-content" >
<div class="wrap-content container" id="container">
<!-- start: FIELDSET -->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                  
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                              <div class="row">
                                                      <div class="col-md-2">
                                                        <div class="form-group">
                                                                <a href="<?php echo base_url();?>index.php/resident/add_resident" class="btn btn-success btn-wide btn-scroll btn-scroll-top ti-plus" onClick="add_resident();">
                                                                      <span>Add Resident</span>
                                                                </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <fieldset>
                                                <legend>
                                                  Resident
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label>
                                                                Firstname
                                                            </label>
                                                            <input type="text" name="fname" id="fname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Middlename
                                                            </label>
                                                            <input type="text" name="mname" id="mname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Lastname
                                                            </label>
                                                            <input type="text" name="lname" id="lname" class="form-control">
                                                        </div>
                                                    </div>
                                                   
                                                </div>


                                                <div class="row">
                                                <div class="col-md-2">
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

                                                 <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Age
                                                            </label>
                                                            <input type="number" name="age" id="age" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="block">
                                                                Gender
                                                            </label>
                                                            <div class="clip-radio radio-primary">
                                                            <input type="radio" id="male" name="gender" value="male" checked="checked">
                                                                <label for="male">
                                                                    Male
                                                                </label>
                                                                <input type="radio" id="female" name="gender" value="female">
                                                                <label for="female">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
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

                                                </div>

                                                 <div class="row">
                                                      <div class="col-md-2">
                                                        <div class="form-group">
                                                                <button type="button" class="btn btn-primary btn-wide btn-scroll btn-scroll-top ti-search">
                                                                      <span>Search</span>
                                                                </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>


                                                      


                                            <fieldset>
                                                <legend>
                                                    Result
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                           <!-- start: STRIPED ROWS -->
                      
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped table-hover" id="sample-table-2">
                                        <thead>
                                            <tr>
                                                <th class="center">Photo</th>
                                                <th>Fullname</th>
                                                <th class="hidden-xs">Age</th>
                                                <th class="hidden-xs">Civil Status</th>
                                                <th class="hidden-xs">Phone</th>
                                                <th></th>
                                            </tr>
                                        </thead>            
                                        <tbody>
                                            <tr style="cursor:pointer;" onClick="view_resident();">
                                                <td class="center"><img src="<?php echo base_url();?>public/assets/images/avatar-1.jpg" class="img-rounded" alt="image"/></td>
                                                <td>Peter Clark</td>
                                                <td class="hidden-xs">UI Designer</td>
                                                <td class="hidden-xs">
                                                <a href="#" rel="nofollow" target="_blank">
                                                    peter@example.com
                                                </a></td>
                                                <td class="hidden-xs">(641)-734-4763</td>
                                                <td class="center">
                                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                    <a href="#" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Share"><i class="fa fa-share"></i></a>
                                                    <a href="#" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                </div>
                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="btn-group" dropdown>
                                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" dropdown-toggle>
                                                            <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                            <li>
                                                                <a href="#">
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Share
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Remove
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <!-- end: STRIPED ROWS -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: FIELDSET -->



<script type="text/javascript">
function view_resident()
{
    window.location.href = '<?php echo base_url();?>index.php/resident/view_resident';
}
</script>