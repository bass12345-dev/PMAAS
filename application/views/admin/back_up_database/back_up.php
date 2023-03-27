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
        <div class="main-content ">
            <!-- header area start -->
            <?php $this->load->view('includes/topbar.php') ?> 
            <!-- header area end -->
            <!-- page title area start -->
            <?php $this->load->view('includes/breadcrumbs.php') ?> 
            <!-- page title area end -->
            <div class="main-content-inner  ">


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card  animate__animated animate__zoomInDown " style="border: 1px solid;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="header-title"><?php echo $title ?></h4>
                                    </div>
                                    <div class="col-md-6">
                                         <button class="btn  pull-right mb-2 back-up-database sub-button">Back Up Now</button>
                                    </div>


                                    <div class="invoice-table table-responsive mt-5">
                                            <table class="table table-bordered table-hover text-right" id="database_table">
                                            <thead>
                                            <tr class="text-capitalize">
                                            <th class="text-center" style="width: 5%;">#</th>
                                            <th class="text-center" >Databse</th>
                                            
                                            <th  class="text-center">Action</th>
                                           
                                            </tr>
                                            </thead>
                                            <tbody>
                                           
                                            </tbody>
                                        </table>
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
         function fetch_database(){


         var table = $('#database_table')
         table.find('tbody').html('')
          var tr1 = $('<tr>')
          tr1.html('<th class="py-1 px-2 text-center">Please Wait</th>')
          table.find('tbody').append(tr1)
            setTimeout(() => {

            $.ajax({     
            url: base_url + 'Back_up/get_database',            
            dataType: 'json',         
            error: err => {
                console.log(err)
                alert("An error occured")
                
              
            },
                success: function(resp) {
                tr1.html('')
                    table.find('tbody').append(tr1)

                resp.sort().reverse()    
                if (resp.length > 0) {
                    // If returned json data is not empty
                    var i = 0;
                    // looping the returned data
                    Object.keys(resp).map(k => {
                        // creating new table row element
                        var tr = $('<tr>')
                         i++;
                            // second column data
                        tr.append('<td class="text-center">' + i  + '</td>')
                        tr.append('<td class="text-center">' + resp[k].database + '</td>')
                            // third column data
                        tr.append('<td class="py-1 px-2"><ul class="d-flex justify-content-center">\
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon"  id="import"><i class="fa fa-database"></i> </a> <span style="font-size=: 15px;">Import</span> </li>\
                                 <li class="mr-3 "><a href="'+base_url+'database/'+resp[k].database+'" class="text-secondary action-icon"  id="import"><i class="fa fa-download"></i></a>   Download</li>\
                                </ul></td>')
                         

                        // Append table row item to table body
                        table.find('tbody').append(tr)
                    })
                } else {
                    // If returned json data is empty
                    var tr = $('<tr>')
                    tr.append('<th class="py-1 px-2 text-center">No data to display</th>')
                    table.find('tbody').append(tr)
                }
              
            }

        }) }, 500)
            // Succes Function
         }


         fetch_database();
     </script>
   
</body>

</html>
