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
                            <a href="<?php echo base_url() ?>Transactions" style="color: #000;">
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
                                 <li><a href="<?php echo base_url() ?>transactions">Transactions</a></li>
                                <li><a href="<?php echo base_url() ?>transactions/view_info">View Information</a></li>
                              
                                
                                
                                
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

                                     <div class="col-md-5 ">
                                        <div class="data-tables">
                                             <table class="tablesaw table-bordered table-hover table" >
                                                
                                                   <tr>
                                                        <td colspan = "2">
                                                        <a  href    = "javascript:;" class = "mt-2  mb-2 btn sub-button text-center  btn-rounded btn-md btn-block"><i class = "fa fa-user" aria-hidden = "true"></i>PMAS Information</a>
                                                        <a  href    = "javascript:;" id="update-cso"

                                                       

                                                         class = "mt-2  mb-2  text-center  btn-rounded btn-md btn-block"><i class = "fa fa-edit" aria-hidden = "true"></i>Update PMAS</a>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <td>PMAS Number</td>
                                                        <td class="cso_name"><?php echo $transaction_data['pmas_no'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date & Time Filed</td>
                                                        <td class="cso_address"><?php echo date('M,d Y', strtotime($transaction_data['date_and_time_filed'])).' '.date('h:i a', strtotime($transaction_data['date_and_time_filed'])) ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Responsible Section</td>
                                                        <td class="contact_person"><?php echo $transaction_data['type_mon_name'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Type of Activity</td>
                                                        <td class="contact_number"><?php echo $transaction_data['type_act_name'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Responsibility Center</td>
                                                        <td class="email"><?php echo $transaction_data['res_center_code'].' - '.$transaction_data['res_center_name'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Date & Time</td>
                                                        <td class="email"><?php echo date('M,d Y', strtotime($transaction_data['date_time'])).' '.date('h:i a', strtotime($transaction_data['date_time'])) ?></</td>
                                                    </tr>

                                                    <?php

                                                        if ($transaction_data['is_training'] == 1) {
                                                            // code...
                                                        
                                                        $training_data =  $this->GetModel->getTransactionTraining_data(array('transaction_id' => $_GET['id']))[0]; 

                                                     ?>
                                                      <tr class="training_section">
                                                        <td colspan = "2">
                                                        <a  href    = "javascript:;" class = "mt-2  mb-2 btn sub-button text-center  btn-rounded btn-md btn-block">About Training</a>
                                                       
                                                    </td>

                                                    </tr>

                                                     <tr>
                                                        <td>Title of Training</td>
                                                        <td class="cso_name"><?php echo $training_data['title_of_training'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Number of Participants</td>
                                                        <td class="cso_address"><?php echo $training_data['no_of_participants'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Female</td>
                                                        <td class="contact_person"><?php echo $training_data['female'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Male</td>
                                                        <td class="contact_number"><?php echo $training_data['no_of_participants'] - $training_data['female'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Over All Ratings</td>
                                                        <td class="email"><?php echo $training_data['over_all_ratings'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Name of Trainor</td>
                                                        <td class="email"><?php echo $training_data['name_of_trainor'] ?></td>
                                                    </tr>

                                                <?php } ?>


                                                 <?php

                                                        if ($transaction_data['is_project_monitoring'] == 1) {
                                                            // code...
                                                        
                                                         $project_data =  $this->GetModel->getTransactionProject_data(array('transaction_id' => $_GET['id']))[0]; 


                                                     ?>


                                                     <tr class="training_section">
                                                        <td colspan = "2">
                                                        <a  href    = "javascript:;" class = "mt-2  mb-2 btn sub-button text-center  btn-rounded btn-md btn-block">Project Monitoring</a>
                                                       
                                                    </td>
                                                    <tr>
                                                        <td>Project Title</td>
                                                        <td class="cso_name"><?php echo $project_data['project_title'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Period (Mo - Year)/as of</td>
                                                        <td class="cso_address"><?php echo date('M,d Y', strtotime($project_data['period'])) ?></td>
                                                    </tr>
                                                     <tr class="training_section">
                                                        <td colspan = "2">
                                                        <h5  class = "  text-center">Attendance</h5>
                                                       
                                                    </td>
                                                    </tr>
                                                     <tr>
                                                        <td>Present</td>
                                                        <td class="contact_person"><?php echo $project_data['attendance_present']  ?> </td>
                                                    </tr>
                                                     <tr>
                                                        <td>Absent</td>
                                                        <td class="contact_person"><?php echo $project_data['attendance_absent']  ?></td>
                                                    </tr>


                                                    <tr class="training_section">
                                                        <td colspan = "2">
                                                        <h5  class = "  text-center">Nom - Borrowers</h5>
                                                       
                                                    </td>
                                                    </tr>
                                                     <tr>
                                                        <td>Delinquent</td>
                                                        <td class="contact_person"><?php echo $project_data['nom_borrowers_delinquent']  ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Overdue</td>
                                                        <td class="contact_person"><?php echo $project_data['nom_borrowers_overdue']  ?></td>
                                                    </tr>

                                                     <tr>
                                                        <td>Total Production</td>
                                                        <td class="contact_person"><?php echo $project_data['total_production']  ?></td>
                                                    </tr>

                                                      <tr>
                                                        <td>Total Collection/Sales</td>
                                                        <td class="contact_person">&#8369; <?php echo $project_data['total_collection_sales']  ?></td>
                                                    </tr>


                                                     <tr>
                                                        <td>Total Released/Purchases</td>
                                                        <td class="contact_person"> &#8369; <?php echo $project_data['total_released_purchases']  ?></td>
                                                    </tr>

                                                     <tr>
                                                        <td>Total Delinquent Account</td>
                                                        <td class="contact_person"> &#8369; <?php echo $project_data['total_delinquent_account']  ?></td>
                                                    </tr>


                                                     <tr>
                                                        <td>Total Over-due Account</td>
                                                        <td class="contact_person">&#8369; <?php echo $project_data['total_over_due_account']  ?></td>
                                                    </tr>

                                                      <tr>
                                                        <td>Cash in bank</td>
                                                        <td class="contact_person"> &#8369; <?php echo $project_data['cash_in_bank']  ?></td>
                                                    </tr>

                                                     <tr>
                                                        <td>Cash on hand</td>
                                                        <td class="contact_person"> &#8369; <?php echo   $project_data['cash_on_hand']  ?></td>
                                                    </tr>
                                                     

                                                      <tr>
                                                        <td>Inventories(Store)</td>
                                                        <td class="contact_person"><?php echo $project_data['inventories']  ?></td>
                                                    </tr>
                                                     
                                                     <?php } ?>


                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-7 ">
                                        
                                        
                                        
                                       
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
       
    <?php $this->load->view('admin/cso/modal/update_cso_modal') ?> 
    <?php $this->load->view('admin/cso/modal/update_cor_modal') ?>
    <?php $this->load->view('admin/cso/modal/update_bylaws_modal') ?>
    <?php $this->load->view('admin/cso/modal/update_article_modal') ?>
     <?php $this->load->view('includes/scripts.php') ?> 


     <script type="text/javascript">

      
     </script>
   

                                                 
</body>

</html>
