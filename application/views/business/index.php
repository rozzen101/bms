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
                        <fieldset>
                            <legend>
                              Business Search Fields
                            </legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Business Permit No.
                                        </label>
                                        <input type="text" name="bPermit" id="bPermit" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Status
                                        </label>
                                        <select name="bStatus" id="bStatus" class="cs-select cs-skin-slide" required>
                                            <option value="" selected>ALL</option>
                                            <option value="ACTIVE">ACTIVE</option>
                                            <option value="PENDING">PENDING</option>
                                            <option value="EXPIRED">EXPIRED</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Business Name
                                        </label>
                                        <input type="text" name="bName" id="bName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Owner
                                        </label>
                                        <input type="text" name="bOwner" id="bOwner" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Business Address
                                        </label>
                                        <input type="text" name="bAddress" id="bAddress" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Business Contact
                                        </label>
                                        <input type="text" name="bContact" id="bContact" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-wide btn-scroll btn-scroll-top ti-search" onclick="loadBusinessTable()">
                                            <span>Search</span>
                                        </button>
                                        <a href="<?php echo base_url();?>index.php/business/add_business" class="btn btn-success btn-wide btn-scroll btn-scroll-top ti-plus">
                                            <span>Add New Business</span>
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
                                                <th>ID</th>
                                                <th>Logo</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Request Date</th>
                                                <th>V</th>
                                                <th>E</th>
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
        loadBusinessTable();
    };
    var oTable;
    function loadBusinessTable(){
        oTable = $('#residentTbl').dataTable( {
          "sDom": "Tfrtip",
          "bProcessing": true,
          "bPaginate": true,
          "bDestroy": true,
          "bInfo": true,
          "bFilter": false,
          "bServerSide": true,
          "iDisplayLength": 10,
          "sAjaxSource": base_url+"index.php/business/get_busines_list",
          "fnServerParams": function ( aoData ) {
            aoData.push( 
                { "name": "bPermit", "value": $("#bPermit").val() },
                { "name": "bStatus", "value": $("#bStatus").val() },
                { "name": "bName", "value": $("#bName").val() },
                { "name": "bOwner", "value": $("#bOwner").val() },
                { "name": "bAddress", "value": $("#bAddress").val() },
                { "name": "bContact", "value": $("#bContact").val() }
            );
          },
          "aoColumns": [ 
            {"bSortable":false,"sWidth": "1%"},
            {"bVisible":false},
            {"bSortable":true,"sWidth": "5%"},
            {"bSortable":true,"sWidth": "10%"},
            {"bSortable":true,"sWidth": "20%"},
            {"bSortable":true,"sWidth": "10%"},
            {"bSortable":true,"sWidth": "10%"},
            {"bSortable":true,"sWidth": "7%"},
            {"bSortable":true,"sWidth": "8%"},
            {"bSortable":false,"sWidth": "1%"},
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

    function deleteBusiness(bid){
        swal({
          title: "Are you sure?",
          text: "This action will not be undo!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn btn-danger",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(){
            $.post(base_url+'index.php/business/delete_business','&bId='+bid,function(data){
                var obj = $.parseJSON(data);
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
                        location.reload();
                    });
                }
            });
        });
    }
</script>