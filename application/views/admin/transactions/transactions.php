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
                                            <div class="col-md-3"><input type="text" class="form-control pull-right mt-2 mb-2" name="daterange" value="01/01/2023 - 01/15/2023" /></div>


                                           
                                            
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
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th>PMAS NO</th>
                                                        <th>Date & Time Filed</th>
                                                        <th>Responsible Section</th>
                                                        <th>Type of Activity</th>
                                                        <th>Responsibility Center</th>
                                                        <th>Date And Time</th>
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
         $(function() {
  $('input[name="daterange"]').daterangepicker({
            opens: 'left'
          }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          });
        });
     </script>
   
</body>

</html>
