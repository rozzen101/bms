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
                                                      
                                                    </div>
                                                </div>
                                            <fieldset>
                                                <legend>
                                                  Resident Search Fields
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                Firstname
                                                            </label>
                                                            <input type="text" name="fname" id="fname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Middlename
                                                            </label>
                                                            <input type="text" name="mname" id="mname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Lastname
                                                            </label>
                                                            <input type="text" name="lname" id="lname" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                 
                                                  <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="block">
                                                                Gender
                                                            </label>
                                                            <select name="gender" id="gender" class="cs-select cs-skin-slide" required>
                                                                <option value=""></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="block">
                                                                Civil Status
                                                            </label>
                                                            <select name="civil_status" id="civil_status" class="cs-select cs-skin-slide" required>
                                                                <option value=""></option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                       <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                Sitio
                                                            </label>
                                                            <input type="text" name="sitio" id="sitio" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>


                                            

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-primary btn-wide btn-scroll btn-scroll-top ti-search" onclick="loadResidentTable()">
                                                                      <span>Search</span>
                                                        </button>
                                                          <a href="<?php echo base_url();?>index.php/residents/new_resident" class="btn btn-success btn-wide btn-scroll btn-scroll-top ti-plus" onClick="add_resident();">
                                                              <span>Add New Resident</span>
                                                         </a>
                                                    </div>
                                                </div>
                                            </div>

                                            </fieldset>


                                                      


                                           <fieldset>
                                            <legend>
                                              Business List
                                            </legend>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-striped table-bordered table-hover table-full-width" id="residentTbl">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Fullname</th>
                                                                <th>Birthdate</th>
                                                                <th>Gender</th>
                                                                <th>Age</th>
                                                                <th>Civil Status</th>
                                                                <th>Sitio</th>
                                                                <th>V</th>
                                                                <th>D</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table><br>
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
   window.onload=function(){
        loadResidentTable();
    };
    var oTable;
    function loadResidentTable(){
        oTable = $('#residentTbl').dataTable( {
          "sDom": "Tfrtip",
          "bProcessing": true,
          "bPaginate": true,
          "bDestroy": true,
          "bInfo": true,
          "bFilter": false,
          "bServerSide": true,
          "iDisplayLength": 10,
          "sAjaxSource": base_url+"index.php/residents/get_resident_list",
          "fnServerParams": function ( aoData ) {
            aoData.push( 
                { "name": "fname", "value": $("#fname").val() },
                { "name": "mname", "value": $("#mname").val() },
                { "name": "lname", "value": $("#lname").val() },
                { "name": "birthdate", "value": $("#birthdate").val() },
                { "name": "age", "value": $("#age").val() },
                { "name": "gender", "value": $("#gender").val() },
                { "name": "civil_status", "value": $("#civil_status").val() },
                { "name": "sitio", "value": $("#sitio").val() }
            );
          },
          "aoColumns": [ 
            {"bSortable":false,"sWidth": "1%"},
            {"bSortable":true,"sWidth": "20%"},
            {"bSortable":true,"sWidth": "5%"},
            {"bSortable":true,"sWidth": "5%"},
            {"bSortable":true,"sWidth": "5%"},
            {"bSortable":true,"sWidth": "10%"},
            {"bSortable":true,"sWidth": "10%"},
            {"bSortable":false,"sWidth": "1%"},
            {"bSortable":false,"sWidth": "1%"}
          ],
          "fnCreatedRow": function( nRow, aData, iDataIndex ) {
              //$(nRow).attr('id', "invoice_rid"+aData[1]);
              //$(nRow).attr("class","sel");
              //$(nRow).attr("style","text-align:center;cursor:pointer;");
              //$(nRow).attr("onclick","select_resident("+aData[1]+")");

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

function view_resident()
{
    window.location.href = '<?php echo base_url();?>index.php/resident/view_resident';
}
</script>