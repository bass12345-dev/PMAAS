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
                                           
                                             <div class="col-md-12"> 

                                            <?php if ($this->session->userdata('user_type') == 'user') {
                                                // code...
                                             ?>

                                             <a href="<?php echo base_url() ?>Pending_transactions/add_transactions" class="btn  mb-3 mt-2 sub-button pull-right" > Add Transactions</a>   
                                         <?php } ?>
                                            <a href="javascript:;" class="btn  mb-3 mt-2 sub-button pull-right mr-2" id="reload_pending" > Reload <i class="ti-loop"></i></a>
                                            </div>
                                        </div>
                                          
                                       
                                        <div class="data-tables">
                                      

                                      
                                            <table id="pending_transactions_table" style="width:100%" class="text-center stripe">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th>PMAS NO</th>
                                                        <th>Date & Time Filed</th>
                                                        <th>Responsible Section</th>
                                                        <th>Type of Activity</th>
                                                        <th>Responsibility Center</th>
                                                        <th>Date And Time</th>
                                                        <th>Person Responsible</th>
                                                         <th></th>
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
    <?php $this->load->view('admin/dashboard/admin_content/modals/add_remarks') ?>
    <?php $this->load->view('admin/transactions/modal/view_remarks') ?>  
     <?php $this->load->view('includes/scripts.php') ?> 
      <script src="https://cdn.tiny.cloud/1/ds0fhm6q5wk0i2dye0vxwap3wi77umvl550koo9laumyhtg1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/ds0fhm6q5wk0i2dye0vxwap3wi77umvl550koo9laumyhtg1/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
     <script type="text/javascript">

             $('textarea#tiny').tinymce({
        height: 500,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
      });

function fetch_pending(){


      $.ajax({
            url: base_url + 'Pending_transactions/get_pending_transactions',
            type: "POST",
            dataType: "json",
            success: function(data) {

                $('#pending_transactions_table').DataTable({

                    scrollY: 500,
                    scrollX: true,
                    "ordering": false,
                    "data": data,
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
                    return '<a href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['name']+'</a>';
                }

            },

              {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return row.s;
                }

            },
            
             

            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return row.action;
                }

            },
          ]

                })


            }

        })



}

fetch_pending();




           


              
     </script>
   
</body>

</html>
