<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 

     <script 
src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
  </script>


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
                                    <div class="col-md-6">
                                        <div class="data-tables">
                                             <h4 class="header-title">Active</h4>
                                            <table id="users_table" style="width:100%" class="text-center mb-3">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                      
                                                        <th>Name</th>  
                                                        <th>Username</th> 
                                                         <th>Type</th>                                                     
                                                       <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                            </table>
                                            <h4 class="header-title">InActive</h4>
                                              <table id="inactiveusers_table" style="width:100%" class="text-center ">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                      
                                                        <th>Name</th>  
                                                        <th>Username</th> 
                                                         <th>Type</th>                                                     
                                                       <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <?php $this->load->view('admin/users/section/add')?>
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
         var inactiveusers_table = $('#inactiveusers_table').DataTable({

             scrollX: true, 
             

           "ajax" : {
                        "url": base_url + 'Users/get_inactive',
                        "dataSrc": "",
            },
             'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['user_id']+'"  style="color: #000;" class="table-font-size "  >'+data['name']+'</a>';
                }

            },
              {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['user_id']+'"  style="color: #000;" class="table-font-size "  >'+data['username']+'</a>';
                }

            },
              {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;"   data-id="'+data['user_id']+'"  style="color: #000;" class="table-font-size "  >'+data['user_type']+'</a>';
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
            //         return '<ul class="d-flex justify-content-center">\
            //                     '+row.action1+'\
            //                     '+row.action2+'\
            //                     \
            //                     </ul>';
            //     }

            // },
          ]

         })
     </script>

  
   
</body>

</html>
