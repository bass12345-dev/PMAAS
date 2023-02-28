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
    <div class="page-container  sbar_collapsed" >
      
        <div class="main-content ">
            <!-- header area start -->
             <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <span style="font-size:23px;">
                            <a href="<?php echo base_url() ?>cso" style="color: #000;">
                            <i class="fa fa-arrow-left"></i>
                            </a>
                        </span>
                   
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <a href="<?php echo base_url() ?>login" class="pull-right text-danger" style="font-size: 20px;">Logout</a>
                     
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
           <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?php echo $title ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url() ?>">Home</a></li>
                                 <li><a href="<?php echo base_url() ?>cso">CSO</a></li>
                                <li><a href="<?php echo base_url() ?>cso/view_transactions?id=<?php echo $_GET['id'] ?>"><?php echo $title ?></a></li>
                              
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner ">


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card " style="border: 1px solid;">
                            <div class="card-body">
                                
                               
                                <div class="row">
                                   
                                    <div class="col-md-10 ">

                                        <div class="row">
                                            <div class="col-md-6"><input type="text" class="form-control pull-right mt-2" name="daterange" value="01/01/2023 - 01/15/2023" /></div>
                                             <div class="col-md-6">  <a href="<?php echo base_url() ?>cso/add_trans?id=<?php echo $_GET['id'] ?>" class="btn  mb-3 mt-2 sub-button pull-right" > Add Transactions</a> </div>
                                            
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

                                      
                                            <table id="transactions_table" style="width:100%" class="text-center">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th>PMAS NO</th>
                                                        <th>Date & Time Filed</th>
                                                        <th>Approved By</th>
                                                        <th>Type of Activity</th>
                                                        <th>Date And Time</th>
                                                        <th>Responsibility Center</th>
                                                        <th>Project Title</th>   
                                                       <th>Actions</th>  
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                    <tr>
                                                        <td>asasd</td>
                                                         <td>asasd</td>
                                                          <td>asasd</td>
                                                           <td>asasd</td>
                                                            <td>asasd</td>
                                                             <td>asasd</td>
                                                              <td>asasd</td>
                                                               <td><ul class="d-flex justify-content-center">
                                <li class="mr-3 "><a href="<?php echo base_url() ?>cso/print" class="text-secondary action-icon"  id="update-responsible"><i class="fa fa-print"></i></a></li>
                            
                                </ul></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                     <div class="col-md-2">
                                        <div class="card p-0 mt-5">      
                                                            
                                            <center><h2 ><?php echo $title ?></h2> </center>   
                                            <a href="<?php echo base_url() ?>cso/view_profile?id=<?php echo $_GET['id'] ?>" class="btn  mt-3 btn-success" > View Profile</a>                
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
