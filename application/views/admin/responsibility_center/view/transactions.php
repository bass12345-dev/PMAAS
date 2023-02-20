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
                            <a href="<?php echo base_url() ?>responsibility_center" style="color: #000;">
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
            <?php $this->load->view('includes/breadcrumbs.php') ?> 
            <!-- page title area end -->
            <div class="main-content-inner ">


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card " style="border: 1px solid;">
                            <div class="card-body">
                                <a href="<?php echo base_url() ?>responsibility_center/add_t?id=<?php echo $_GET['id'] ?>&&code=<?php echo $_GET['code_number'] ?>" class="btn  mb-3 sub-button" > Add Transactions</a> 
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="card">      
                                            <h3 class="header-title">Responsibility Center</h3>                               
                                            <h2 ><?php echo $title ?></h2>                   
                                        </div>
                                    </div>
                                    <div class="col-md-10 ">
                                        <div class="data-tables">
                                            <table id="transactions_table" style="width:100%" class="text-center">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th>PMAS NO</th>
                                                        <th>Date & Time Filed</th>
                                                        <th>Approved By</th>
                                                        <th>Type of Activity</th>
                                                        <th>Date And Time</th>
                                                        <th>Project Title</th>   
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
       
  
     <?php $this->load->view('includes/scripts.php') ?> 
   
</body>

</html>
