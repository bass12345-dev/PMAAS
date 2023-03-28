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
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php $this->load->view('includes/sidebar.php') ?> 
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
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
                        <div class="card" style="border: 1px solid;">
                            <div class="card-body">
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="header-title"><?php echo $title ?></h4>
                                    </div>
                                    <div class="col-md-6">
                                         <button class="btn btn-primary pull-right mb-2">Add</button>
                                    </div>
                                </div>    -->
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="data-tables">
                                            <table id="logs_table" style="width:100%" class="text-center">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User</th>
                                                        <th>Action</th>
                                                        <th>Date And Time</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>
                                            </table>
                                             <!-- <button  type="button" class="btn mt-1 mb-4 pr-4 pl-4  btn-danger " id="delete-multiple-center">Delete</button> -->
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
        <!-- footer area start-->
    <?php $this->load->view('admin/responsibility_center/modal/update_res_modal.php') ?> 
    <?php $this->load->view('includes/offset.php') ?>  
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
  
    <?php $this->load->view('includes/offset.php') ?> 
     <?php $this->load->view('includes/scripts.php') ?> 

     <script type="text/javascript">
          var logs_table = $('#logs_table').DataTable({
            "ordering": false,
            pageLength: 20,
            "ajax" : {
                        "url": base_url + 'Activity_logs/get_logs',
                        "dataSrc": "",
            },

              'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"     style="color: #000;" class="table-font-size "  >'+data['n']+'</a>';
                }

            },
              {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['user_id']+'"  style="color: #000;" class="table-font-size "  >'+data['user']+'</a>';
                }

            },
              {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['user_id']+'"  style="color: #000;" class="table-font-size "  >'+data['action']+'</a>';
                }

            },

             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['user_id']+'"  style="color: #000;" class="table-font-size "  >'+data['date_and_time']+'</a>';
                }

            },

          ]
      });
     </script>
   
</body>

</html>
