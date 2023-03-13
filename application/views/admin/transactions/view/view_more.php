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
                                    <?php $this->load->view('admin/transactions/view/view_info') ?> 
                                        <div class="col-md-9 ">
                                            <div id="navigation_controls" class="mb-3" >
                                                <a href="javascript:;" onclick="jQuery('.brgy-clearance').print()"  class="btn btn-success btn-rounded pull-right">Print</a>
                                            </div>
                                        <div class="card-body mt-5 brgy-clearance ">
                                            <section id="header_section">                                           
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
                                            </section>


                                            <section id="responsible_section">
                                                <div class = "row justify-content-center text-center ">
                                                    <div class = "col-md-12 ml-auto mr-auto ">
                                                        <div class = "clearfix">
                                                            <strong>
                                                                <span class = "text-uppercase mt-5" style = "font-size: 18px;">Project Monitoring and Activity Sheet</span><br>
                                                                    <label style="font-weight: bold; font-size: 17px;">Responsible Section : </label>
                                                                    <span> <label>[&#10003;]<?php echo $transaction_data['type_mon_name'] ?></label>  </span><br>
                                                                 <!--    <?php 
                                                                            foreach ($responsible as $row) :
                                                                       ?>
                                                                     <span> [<?php if ($transaction_data['type_mon_id'] == $row['type_mon_id']) {
                                                                            
                                                                            echo '&#10003;';

                                                                     }  ?> ] <label><?php echo $row['type_mon_name'] ?></label>
                                                                     </span>

                                                                     <?php 

                                                                            endforeach;
                                                                        ?>
                                                                       -->


                                                                    <label style="font-weight: bold; font-size: 17px;">Type of Activity : </label>
                                                                    <span> <label>(&#10003;)<?php echo $transaction_data['type_act_name'] ?></label>  </span><br>
                                                            </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>



                                             <section id="header_section">                                           
                                                <div class = "row justify-content-center mb-3">
                                                    <div class = "col-md-12 ml-auto mr-auto ">
                                                        <div class = "clearfix">
                                                            <div class=" float-left ml-xl-5">
                                                                <h7 style="font-weight: bold;">*RESPONSIBILITY CENTER  </h7>
                                                                <h7>:</h7>
                                                                <span>__________________________________</span>
                                                                <br>
                                                                <h7 style="font-weight: bold;">Date And Time  </h7>
                                                                <h7 style="margin-left: 79px;">:</h7>
                                                                <span >__________________________________</span>

                                                                <!-- <div class="for_training_only mt-auto row justify-content-center" style="border: 1px solid; padding: 20px 0 200px 0; margin: 0;" >
                                                                    <div class = "clearfix">
                                                                        <div class = "col-md-12 ml-auto mr-auto ">
                                                                            <div class=" float-left ml-xl-1">
                                                                                <i><h6 style="font-weight: bold;">For Training Use Only</h6></i>
                                                                            </div><br>
                                                                            <label style="font-weight: bold;">Title of Training : </label><br>
                                                                            <span>__________________________________________________________</span><br>
                                                                             
                                                                            <label style="font-weight: bold;">No. of Participants : </label>
                                                                             <span>____</span>
                                                                            

                                                                          
                                                                            <label style="font-weight: bold;">Female : </label>
                                                                             <span>______</span>
                                                                             <br>  
                                                                             <label style="font-weight: bold;">Over-all Ratings : </label>
                                                                             <span>______</span>
                                                                             <br>  
                                                                              <label style="font-weight: bold;">Name of Trainor : </label>
                                                                             <span>______________-</span>
                                                                             <br>                                                                                            




                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div> -->
                                                               
                                                            </div>     
                                                            <div class=" float-left ml-xl-5">
                                                                <h7 style="font-weight: bold;">NAME OF CSO  </h7>
                                                                <h7>&nbsp; :</h7>
                                                                <span>________________________________</span>
                                                                <br>
                                                                <h7 style="font-weight: bold;">PROJECT TITLE  </h7>
                                                                <h7 >:</h7>
                                                                <span >________________________________</span>
                                                               
                                                            </div>     
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                            <section>
                                                 <div class="row justify-content-center ">
                                                    <div class="col-md-6"  style="border: 1px solid; padding: 20px 0 200px 0; margin: 0;">
                                                        <div class="for_training_only " >
                                                                    <div class = "clearfix">
                                                                        <div class = "col-md-12 ml-auto mr-auto ">
                                                                            <div class=" float-left ml-xl-1">
                                                                                <i><h6 style="font-weight: bold;">For Training Use Only</h6></i>
                                                                            </div><br>
                                                                            <label style="font-weight: bold;">Title of Training : </label><br>
                                                                            <span>__________________________________________________________</span><br>
                                                                             
                                                                            <label style="font-weight: bold;">No. of Participants : </label>
                                                                             <span>____</span>
                                                                            

                                                                          
                                                                            <label style="font-weight: bold;">Female : </label>
                                                                             <span>______</span>
                                                                             <br>  
                                                                             <label style="font-weight: bold;">Over-all Ratings : </label>
                                                                             <span>______</span>
                                                                             <br>  
                                                                              <label style="font-weight: bold;">Name of Trainor : </label>
                                                                             <span>______________-</span>
                                                                             <br>                                                                                            




                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="for_training_only " >
                                                                    <div class = "clearfix">
                                                                        <div class = "col-md-12 ">
                                                                                                                                                              
                                                                           <table style="white-space: nowrap;" class=" table table-sm ">
                                                                                  <tr>
                                                                                    <td>Period (Mo-Year)/as of</td>
                                                                                    <td> : </td>
                                                                                    <td><strong><u><span id="resident_name">_________________</span></u></strong></td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Attendance</td>
                                                                                    <td> : </td>
                                                                                    <td><strong><u><label>Present : </label>&nbsp;<span id="resident_age">_____</span> <label>Absent : </label>&nbsp;<span id="resident_age">_____</span></u></strong></td>
                                                                                  </tr>
                                                                                   <tr>
                                                                                    <td>NOM-Borrowers</td>
                                                                                    <td> : </td>
                                                                                    <td><strong><u><label>Delinquent : </label>&nbsp;<span id="resident_age">_____</span> <label>Overdue : </label>&nbsp;<span id="resident_age">_____</span></u></strong></td>
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



                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                    </div>
                                                </div>

                                                
                                            </section>



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
