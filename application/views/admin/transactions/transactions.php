<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 



</head>

<body>
   
    <!-- preloader area start -->
     <?php $this->load->view('includes/preloader.php') ?> 
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container " >
        
         <?php $this->load->view('includes/sidebar.php') ?> 

        <div class="main-content ">
            <!-- header area start -->
             <?php $this->load->view('includes/topbar.php') ?> 
            <!-- header area end -->
            <!-- page title area start -->
           <?php $this->load->view('includes/breadcrumbs.php') ?> 
            <!-- page title area end -->
            <div class="main-content-inner ">


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card " style="border: 1px solid;">
                            <div class="card-body">
                                
                               
                                <div class="row">
                                   
                                    <div class="col-md-12 ">

                                        <div class="row">
                                            

                                            <div class="input-group mb-3 col-md-5">
                                                <input type="text" class="form-control pull-right mt-2 mb-2" name="daterange" value="" style="height: 45px;" />
                                             
                                              <div class="input-group-append">
                                                <div class="col-md-12">  <a href="javascript:;" id="reset" class="btn  mb-3 mt-2 sub-button pull-right" >Reload <i class="ti-loop"></i></a> </div>
                                              </div>
                                            </div>
                                           
                                            
                                        </div>
                                          
                                       
                                        <div class="data-tables">
                                          <!--   <table border="0" >
                                                <tbody><tr>
                                                    <td>Start Date:</td>
                                                    <td><input type="text" id="min" class="form-control" name="min"></td>
                                                </tr>
                                                <tr>
                                                    <td>End date:</td>
                                                    <td><input type="text" id="max" class="form-control" name="max"></td>
                                                </tr>
                                            </tbody>
                                        </table> -->

                                      
                                            <table id="transactions_table" style="width:100%" class="text-center stripe">
                                                <thead class="bg-light text-capitalize" >
                                                    <tr>
                                                        <th>PMAS NO</th>
                                                        <th>Date & Time Filed</th>
                                                        <th>Responsible Section</th>
                                                        <th>Type of Activity</th>
                                                        <th>Responsibility Center</th>
                                                        <th>Date And Time</th>
                                                        <th>CSO</th>
                                                        <!-- <th>Added By</th> -->
                                                        <th>Actions</th>  
                                                    </tr>
                                                </thead> 
                                               
                                            </table>
                                        </div>
                                    </div>


                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
       
    <?php $this->load->view('admin/transactions/modal/view_more_transaction') ?> 
     <?php $this->load->view('includes/scripts.php') ?> 
      
     <script type="text/javascript">




        function fetch(start_date = '', end_date = '', filter = false){

            $.ajax({
            url: base_url + 'Transactions/get_transactions',
            type: "POST",
            data: {
                start_date: start_date,
                end_date: end_date,
                filter : filter
            },
            dataType: "json",
            success: function(data) {

                

                $('#transactions_table').DataTable({

                    
                    scrollY: 600,
                    scrollX: true,
                    "ordering": false,
                    "data": data,
                    "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [
                  {
                     extend: 'excel',
                     text: 'Excel',
                     className: 'btn btn-default ',
                     exportOptions: {
                        columns: 'th:not(:last-child)'
                     }
                  },
                   {
                     extend: 'pdf',
                     text: 'pdf',
                     className: 'btn btn-default',
                     exportOptions: {
                        columns: 'th:not(:last-child)'
                     }
                  },

                {
                     extend: 'print',
                     text: 'print',
                     className: 'btn btn-default',
                     exportOptions: {
                        columns: 'th:not(:last-child)'
                     }
                  },



               ],
                    
                                'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<b><a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['pmas_no']+'</a></b>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['date_and_time_filed']+'</a>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['type_mon_name']+'</a>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['type_act_name']+'</a>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['responsibility_center']+'</a>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['date_time']+'</a>';
                }

            },

             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['cso']+'</a>';
                }

            },


            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return row.action;
                }

            },



            // {
            //     // data: "song_title",
            //     data: null,
            //     render: function (data, type, row) {
            //         return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['name']+'</a>';
            //     }

            // },
            
             

            // {
            //     // data: "song_title",
            //     data: null,
            //     render: function (data, type, row) {
            //         return '<ul class="d-flex justify-content-center">\
            //                     <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'+data['transaction_id']+'" data-a="'+data['is_training']+'" data-b="'+data['is_project_monitoring']+'"  id="view_more_transaction"><i class="fa fa-eye"></i></a></li>\
            //                     <li><a href="javascript:;" data-id="'+data['type_act_id']+'"  id="delete-activity"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>\
            //                     </ul>';
            //     }

            // },
            ]
                })

            }


        })





    }





         $(function() {

  $('input[name="daterange"]').daterangepicker({
            opens: 'right',
             ranges:{
            'Today' : [moment(), moment()],
            'Yesterday' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days' : [moment().subtract(29, 'days'), moment()],
            'This Month' : [moment().startOf('month'), moment().endOf('month')],
            'Last Month' : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        format : 'YYYY-MM-DD'
          }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            $('#transactions_table').DataTable().destroy();
            fetch(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'),filter = true );
          });
        });


    $(document).on('click','a#reset',function (e) {
          $('#transactions_table').DataTable().destroy();
            fetch();
    })      

          fetch();
     </script>
   
</body>

</html>
