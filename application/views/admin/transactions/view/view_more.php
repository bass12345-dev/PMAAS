<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 

<style type="text/css">
    .pmas_code {
        padding: 2px 7px 2px 7px;
        border: 1px solid #000;
        text-align: center;
        vertical-align: middle;
        line-height: 20px;
    }
</style>
       




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

                                     <div class="col-md-3 ">
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
                                    
                                    <div class="col-md-9 ">


                                        <div id="navigation_controls" class="mb-3" >
                                           

                                             <a href="javascript:;" onclick="jQuery('.brgy-clearance').print()"  class="btn btn-success btn-rounded pull-right">Print</a>
                                        </div>

                                       <div class="card-body mt-5 brgy-clearance ">
                                        
                                        <div class = "row justify-content-center mb-3">
                                                <div class = "col-md-12 ml-auto mr-auto ">
                                                <div class = "clearfix">
                                                <div class=" float-right ml-xl-5">
                                                        <div class="pmas_code">
                                                        <label style="font-weight: bold;">PMAS NO</label>
                                                        <label style="font-weight: bold;"><?php echo $transaction_data['pmas_no'] ?></label>
                                                        </div>
                                                        <label style="margin-top: 10px;">Date & Time Filed</label> : <span id="resident_name" style="font-weight: bold; text-decoration: underline;"><?php echo date('M,d Y', strtotime($transaction_data['date_and_time_filed'])).' '.date('h:i a', strtotime($transaction_data['date_and_time_filed'])) ?></span><br>
                                                        <label>Approved By : _______________( )MC ( )MTC/B</label>
                                                </div>
                                                <div class=" float-left ml-xl-5">
                                                        <h6 style="font-weight: bold;">OFFICE OF THE CITY MAYOR</h6>
                                                        <h6 style="font-weight: bold;">Cooperative & Public Employment Services Division</h6>
                                                        <label style="font-size: 18px;">Oroquieta City</label>
                                                </div>     
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class = "row justify-content-center text-center ">
                                                    <div class = "col-md-12 ml-auto mr-auto ">
                                                    <div class = "clearfix">
                                                  
                                                    
                                                                <strong>

                                                                    <span class = "text-uppercase mt-5" style = "font-size: 18px;">Project Monitoring and Activity Sheet</span><br>
                                                                    <label>Responsible Section : </label>

                                                                    <?php 
                                                                            foreach ($responsible as $row) :
                                                                       ?>
                                                                     <span> [<?php if ($transaction_data['type_mon_id'] == $row['type_mon_id']) {
                                                                            
                                                                            echo '&#10003;';

                                                                     }  ?> ] <label><?php echo $row['type_mon_name'] ?></label>
                                                                     </span>

                                                                     <?php 

                                                                            endforeach;
                                                                        ?>
                                                                      
                                                                </strong>
                                                            </div>
                                                        </div>
                                                    </div>



                                   
                                    
                                    </div>

                                                 <div class="row justify-content-center border-top">
                                 <div class="col-sm-4 mt-2 border-right">
                                      <div id="brgy_official">
                                        <p class="text-center">
                                            <span class="text-uppercase font-weight-bold">Sample</span>
                                            <br><i> Sample</i><br><br>
                                            <span class="text-uppercase font-weight-bold"><i>Sample</i></span><br><br>
                                            <span class="text-uppercase font-weight-bold"><i>Sample</i></span>
                                          </p>

                                          <p class="font-weight-bold"><u><i>Barangay Kagawad</i></u></p>
                                          <p class="text-center">
                                          
                                            <span class="text-uppercase font-weight-bold">Sample </span><br><i> Sample</i><br> <br>
                                          
                                     
                                          </p>
                                          <p class="font-weight-bold"><u><i>Barangay SK</i></u></p>
                                          <p class="text-center">
                                            <span class="text-uppercase font-weight-bold">as</span><br><i> Sample</i><br><br>
                                          </p>
                                      </div>
                                    </div>
                                    <div class="col-sm-8 mt-2">
                                      <div class="mr-0 text-right mb-4">Date: <strong><u>asd</u></strong></div>
                                        <div class="text-uppercase mb-4 "><strong>To Whom It May Concern,</strong></div>
                                        <div class="text-justify ">
                                            <p class="indent">This is to certify that <!-- he person whose name appears hereon  --><span id="resident_name">_________________</span> <span id="resident_age">_____</span>  is bonifide 
                                              <strong>resident</strong> of this Barangay. <span id="gender">___</span>  <!-- and has requested  --> is personally known to me of her good moral character. <span id="gende">___</span> <strong><!-- Barangay
                                                Clearance --> is peace loving and law abiding citizen in this community. </strong> <!-- from this office
                                              and the result is/are listed below: --> </p>
                                            <span class="text-hide" id="resident_id"></span>
                                            <table style="white-space: nowrap;" class="mt-4 mb-4 table table-sm ">
                                              <tr>
                                                <td>Name</td>
                                                <td> : </td>
                                                <td><strong><u><span id="resident_name">_________________</span></u></strong></td>
                                              </tr>
                                              <tr>
                                                <td>Age</td>
                                                <td> : </td>
                                                <td><strong><u><span id="resident_age">_____</span></u></strong></td>
                                              </tr>
                                              <tr>
                                                <td>Status</td>
                                                <td> : </td>
                                                <td><strong><u><span id="resident_civil_status">______</span></u></strong></td>
                                              </tr>
                                              <tr>
                                                <td>Address</td>
                                                <td> : </td>
                                                <td><strong><u><span class="text-capitalize" id="resident_purok">_________</span></u></strong></td>
                                              </tr>
                                              <tr>
                                                <td>Record</td>
                                                <td> : </td>
                                                <td><strong><u><span id="resident_record">_______________
                                              </tr>
                                            </table>
                                             <p class="indent">According to our record <!-- he person whose name appears hereon  --><span id="gend">__</span> <span id="record">_____________________________________________________
                                             </span>
                                           </p>

                                           <p class="indent">This barangay Clearance is issued upon personal request of the aboved name person for all intents purposes that may serve her best </p>

                                             <p class="indent">WITNESSETH my signature this  123 at Barangay Apil, Oroquieta City, Misamis Occidental Philippines. </p>


                                          </div>
                                          <div class="text-left mt-7 mb-6"> 
                                            <div class="mr-2  text-uppercase"><strong> Sample</strong></div>
                                            <div class="mr-4"> Sample</div>
                                          </div>
                                          <div class="text-right "> 
                                            <div class="mr-2  text-uppercase"><strong>asd</strong></div>
                                            <div class="mr-4">Sample</div>
                                          </div>

                                          <table class="mt-5 mb-5">
                                            <tr>
                                              <td>CTC No.</td>
                                              <td> : </td>
                                              <td><strong><u><span id="ctc_no">_____</span></u></strong></td>
                                            </tr>
                                            <tr>
                                              <td>Issued on</td>
                                              <td> : </td>
                                              <td><strong><u><span id="issued_on" data-issued-on="sd"></span>
                                                    123</u></strong> </td>
                                            </tr>
                                            <tr>
                                              <td>Issued at</td>
                                              <td> : </td>
                                              <td><strong><u><span id="issued_at">Brgy. Apil</span></u></strong></td>
                                            </tr>
                                          </table>
                                      </div>
                                    </div>

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
       
    <?php $this->load->view('admin/cso/modal/update_cso_modal') ?> 
    <?php $this->load->view('admin/cso/modal/update_cor_modal') ?>
    <?php $this->load->view('admin/cso/modal/update_bylaws_modal') ?>
    <?php $this->load->view('admin/cso/modal/update_article_modal') ?>
     <?php $this->load->view('includes/scripts.php') ?> 


     <script type="text/javascript">

      
     </script>
   

                                                 
</body>

</html>
