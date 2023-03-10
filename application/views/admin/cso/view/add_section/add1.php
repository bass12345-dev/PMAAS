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

             <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <span style="font-size:23px;">
                            <a href="<?php echo base_url() ?>cso/view_transactions?id=<?php echo $_GET['id'] ?>" style="color: #000;">
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

            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?php echo $title ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url() ?>">Home</a></li>
                                <li><a href="<?php echo base_url() ?>cso">CSO</a></li>
                                <li><a href="<?php echo base_url() ?>cso/view_transactions?id=<?php echo $_GET['id'] ?>"><?php echo $title ?></a></li>
                                <li><a href="javascript:;">Add Transaction</a></li>
                                <!-- <li><span><?php echo $title ?></span></li> -->
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
           
         
            <div class="main-content-inner " style="background-color: #fff;">

                <section class="wizard-section" style="background-color: #fff;">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-6">
                            <div class="wizard-content-left d-flex justify-content-center align-items-center">

                                
                                 <!--    <canvas id="pdf_renderer" style="height: 500px;"  ></canvas> -->
                               
                                
                            </div>
                        </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-wizard">
                    <form id="transactions_form" >
                        <div class="form-wizard-header">
                            <p>Fill all form field to go next step</p>
                           <!--  <ul class="list-unstyled form-wizard-steps clearfix">
                                <li class="active"><span>1</span></li>
                                <li><span>2</span></li>
                                <li><span>3</span></li>
                                <li><span>4</span></li>
                                
                               
                            </ul> -->
                        </div>
                        <fieldset class="wizard-fieldset show">
                            <h5>Information</h5>
                          
                              <div class="form-group">
                                <label >PMAS NO</label>
                                <input type="hidden" value="<?php echo $_GET['id'] ?>" name="cso_id">
                                <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary " type="button" ><?php echo date('Y', time()) ?></button>
                                   <!--  <div class="dropdown-menu">

                                           <?php

                                            $var = 2080;

                                            for ($i= date('Y', time()); $i <=  $var; $i++) { 

                                               echo '<a class="dropdown-item" href="#">'.$i.'</a>';
                                                // code...
                                            }

                                         ?> 
                                      
                                    </div> -->

                                  </div>

                                  <div class="input-group-prepend">
                                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo date('m', time()) ?></button> -->

                                    <button class="btn btn-outline-secondary " type="button" ><?php echo date('m', time()) ?></button>
                                   <!--  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      
                                    </div> -->
                                    
                                  </div>
                                  <input type="number" class="form-control input" name="pmas_number" aria-label="Text input with dropdown button" >
                              </div>
                                <div class="wizard-form-error"></div>
                            </div>


                             <!-- <div class="form-group">
                                <label >PMAS NO</label>
                               <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><?php echo date('Y', time()).' - '.date('m', time())  ?></span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                <div class="wizard-form-error"></div>
                            </div> -->
                            <!-- div class="form-group">
                                <label >PMAS NO</label>
                                <input type="text" class="form-control input"  placeholder="PMAS NO">
                                <div class="wizard-form-error"></div>
                            </div> -->
                            <div class="form-group">
                                <label for="inputPassword4">Date & Time Filed</label>

                                  <div class="input-group date" id="id_0">
                            <input type="text" value="05/16/2018 12:31:00 AM" name="date_and_time_filed" class="form-control input" onkeypress="return false;"/>
                            <div class="input-group-addon input-group-append">
                                <div class="input-group-text">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                              
                                <!-- <input type="text" class="form-control input" name="date_and_time_filed"  placeholder="" onkeypress="return false;" > -->
                                <div class="wizard-form-error"></div>
                            </div>
                            
                          
                            <div class="form-group clearfix">
                                <button type="button" class="form-wizard-next-btn float-right" id="first-next">Next</button>
                            </div>
                        </fieldset> 
                        <fieldset class="wizard-fieldset">
                            <h5>Account Information</h5>

                             <div class="form-group">     
                               <div class="col-12">Responsible Section</div>
                                    <div class="form-group">
                                        <select class="form-control input" name="type_of_monitoring_id"   >
                                            <?php 

                                                foreach ($responsible as $row) :
                                                    

                                           ?>

                                           <option value="<?php echo $row['type_mon_id'] ?>"><?php echo $row['type_mon_name'] ?></option>

                                           <?php 

                                                endforeach;
                                            ?>
                                            
                                        </select>
                                    </div>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">     
                               <div class="col-12">Type of Activity</div>
                                    <div class="form-group">
                                        <select class="form-control input" id="myselect" name="type_of_activity_id"  >
                                            <?php 

                                                foreach ($activities as $row) :
                                                    

                                           ?>

                                           <option value="<?php echo $row['type_act_id'] ?>"><?php echo $row['type_act_name'] ?></option>

                                           <?php 

                                                endforeach;
                                            ?>
                                            
                                        </select>
                                    </div>
                                <div class="wizard-form-error"></div>
                            </div>

                             <div class="form-group" id="under_type_activity_select" hidden>     
                               <div class="col-12">Type </div>
                                    <div class="form-group">
                                        <select class="form-control input" name="under_type_of_activity_id">
                                            <option value="0" selected></option>
                                            <?php 

                                                foreach ($under_type_activies as $row) :
                                           ?>
                                           <option value="<?php echo $row['under_type_act_id'] ?>"><?php echo $row['under_type_act_name'] ?></option>
                                           <?php 

                                                endforeach;
                                            ?>       
                                        </select>
                                    </div>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group">     
                               <div class="col-12">Responsibility Center</div>
                                 <div class="form-group">
                                        <select class="form-control responsibility" name="responsibility_center_id" style="width: 100%;">

                                            <?php 

                                                foreach ($responsibility_centers as $row) :
                                           ?>
                                           <option value="<?php echo $row['res_center_id'] ?>"><?php echo $row['res_center_code'] ?> - <?php echo $row['res_center_name'] ?></option>
                                           <?php 

                                                endforeach;
                                            ?>       
                                        </select>
                                    </div>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group">     
                               <div class="col-12">Date And Time</div>
                                  <div class="input-group date" id="id_1">
                            <input type="text" value="05/16/2018 12:31:00 AM" class="form-control input" name="date_time" onkeypress="return false;" />
                            <div class="input-group-addon input-group-append">
                                <div class="input-group-text">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                              
                                <!-- <input type="date" class="form-control input" id="datepicker2" placeholder=""  onkeypress="return false;"> -->
                                <div class="wizard-form-error"></div>
                            </div>
                                
                            <div class="form-group clearfix">
                                 <button type="submit" class="form-wizard-submit float-right btn-add-transaction">  Submit</button>
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                              <!--   <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a> -->
                            </div>
                        </fieldset> 
                        <fieldset class="wizard-fieldset">
                            <h5>Bank Information</h5>
                            <div class="form-group">
                                <div class="col-12">Title of Training</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">No of partcipants</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                 <div class="col-12">Female</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">Over-all Ratings</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                             <div class="form-group">
                                <div class="col-12">Name of Trainor</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                        </fieldset> 

                        <fieldset class="wizard-fieldset">
                            <h5>Payment Information</h5>
                            <!-- <div class="form-group">
                                Payment Type
                                <div class="wizard-form-radio">
                                    <input name="radio-name" id="mastercard" type="radio">
                                    <label for="mastercard">Master Card</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="radio-name" id="visacard" type="radio">
                                    <label for="visacard">Visa Card</label>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="col-12">Project Title</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">Period (Mo - Year)/as of</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                            
                             <h2>Attendance</h2>
                             <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="col-12">Present</div>
                                        <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="col-12">Absent</div>
                                        <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                            </div>

                            <h2>NOM - Borrowers</h2>
                             <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="col-12">Delinquent</div>
                                        <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="col-12">Overdue</div>
                                        <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                            </div>


                             <div class="form-group">
                                <div class="col-12">Total Production</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>

                             <div class="form-group">
                                <div class="col-12">Total Collection/Sales</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>

                             <div class="form-group">
                                <div class="col-12">Total Released/Purchases</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>

                             <div class="form-group">
                                <div class="col-12">Total Delinquent Account</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                           

                           <div class="form-group">
                                <div class="col-12">Total Over-due Account</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>


                              <div class="form-group">
                                <div class="col-12">Cash in bank</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>

                             <div class="form-group">
                                <div class="col-12">Cash on hand</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>

                             <div class="form-group">
                                <div class="col-12">Inventories(Store)</div>
                                <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                <div class="wizard-form-error"></div>
                            </div>
                           <!--  <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="cardname">
                                        <label for="cardname" class="wizard-form-text-label">Card Number*</label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="cvc">
                                        <label for="cvc" class="wizard-form-text-label">CVC*</label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                            </div> -->
                          <!--   <div class="row">
                                <div class="col-12">Expiry Date</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">Date</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                            <option value="">9</option>
                                            <option value="">10</option>
                                            <option value="">11</option>
                                            <option value="">12</option>
                                            <option value="">13</option>
                                            <option value="">14</option>
                                            <option value="">15</option>
                                            <option value="">16</option>
                                            <option value="">17</option>
                                            <option value="">18</option>
                                            <option value="">19</option>
                                            <option value="">20</option>
                                            <option value="">21</option>
                                            <option value="">22</option>
                                            <option value="">23</option>
                                            <option value="">24</option>
                                            <option value="">25</option>
                                            <option value="">26</option>
                                            <option value="">27</option>
                                            <option value="">28</option>
                                            <option value="">29</option>
                                            <option value="">30</option>
                                            <option value="">31</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">Month</option>
                                            <option value="">jan</option>
                                            <option value="">Feb</option>
                                            <option value="">March</option>
                                            <option value="">April</option>
                                            <option value="">May</option>
                                            <option value="">June</option>
                                            <option value="">Jully</option>
                                            <option value="">August</option>
                                            <option value="">Sept</option>
                                            <option value="">Oct</option>
                                            <option value="">Nov</option>
                                            <option value="">Dec</option>   
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">Years</option>
                                            <option value="">2019</option>
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                            <option value="">2022</option>
                                            <option value="">2023</option>
                                            <option value="">2024</option>
                                            <option value="">2025</option>
                                            <option value="">2026</option>
                                            <option value="">2027</option>
                                            <option value="">2028</option>
                                            <option value="">2029</option>
                                            <option value="">2030</option>
                                            <option value="">2031</option>
                                            <option value="">2032</option>
                                            <option value="">2033</option>
                                            <option value="">2034</option>
                                            <option value="">2035</option>
                                            <option value="">2036</option>
                                            <option value="">2037</option>
                                            <option value="">2038</option>
                                            <option value="">2039</option>
                                            <option value="">2040</option>  
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                               
                                <!-- <a href="javascript:;" class="form-wizard-submit float-right">Submit</a> -->
                            </div>
                        </fieldset> 
                    </form>
                </div>
            </div>
        </div>
    </section>


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

          var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 1
        }
         

         pdfjsLib.getDocument(base_url + 'x.pdf').then((pdf) => {
                myState.pdf = pdf;
                render();
                 });




        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
         
                var canvas = document.getElementById("pdf_renderer");
                var ctx = canvas.getContext('2d');
     
                var viewport = page.getViewport(myState.zoom);
                canvas.width = viewport.width;
                canvas.height = viewport.height;
         
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                });
            });
        }


        jQuery(document).ready(function() {
    // click on next button
    jQuery('.form-wizard-next-btn').click(function() {
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        var next = jQuery(this);
        var nextWizardStep = true;
        parentFieldset.find('.wizard-required').each(function(){
            var thisValue = jQuery(this).val();

            console.log(thisValue)

            if( thisValue == "") {
                jQuery(this).siblings(".wizard-form-error").slideDown();
                nextWizardStep = false;
            }
            else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
        if( nextWizardStep) {
            next.parents('.wizard-fieldset').removeClass("show","400");
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
            next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
            jQuery(document).find('.wizard-fieldset').each(function(){
                if(jQuery(this).hasClass('show')){
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        if(jQuery(this).attr('data-attr') == formAtrr){
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        }
    });
    //click on previous button
    jQuery('.form-wizard-previous-btn').click(function() {
        var counter = parseInt(jQuery(".wizard-counter").text());;
        var prev =jQuery(this);
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        prev.parents('.wizard-fieldset').removeClass("show","400");
        prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
        currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
        jQuery(document).find('.wizard-fieldset').each(function(){
            if(jQuery(this).hasClass('show')){
                var formAtrr = jQuery(this).attr('data-tab-content');
                jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                    if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                    }else{
                        jQuery(this).removeClass('active');
                    }
                });
            }
        });
    });
    //click on form submit button
    jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        parentFieldset.find('.wizard-required').each(function() {
            var thisValue = jQuery(this).val();
            if( thisValue == "" ) {
                jQuery(this).siblings(".wizard-form-error").slideDown();
            }
            else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
    });
    // focus on input field check empty or not
    // jQuery(".form-control").on('focus', function(){
    //     var tmpThis = jQuery(this).val();
    //     if(tmpThis == '' ) {
    //         jQuery(this).parent().addClass("focus-input");
    //     }
    //     else if(tmpThis !='' ){
    //         jQuery(this).parent().addClass("focus-input");
    //     }
    // }).on('blur', function(){
    //     var tmpThis = jQuery(this).val();
    //     if(tmpThis == '' ) {
    //         jQuery(this).parent().removeClass("focus-input");
    //         jQuery(this).siblings('.wizard-form-error').slideDown("3000");
    //     }
    //     else if(tmpThis !='' ){
    //         jQuery(this).parent().addClass("focus-input");
    //         jQuery(this).siblings('.wizard-form-error').slideUp("3000");
    //     }
    // });
});
    
        

         $('#id_0').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "YYYY/MM/DD hh:mm:ss A",
        });


         $('#id_1').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "YYYY/MM/DD hh:mm:ss A",
        });

        var select2 =     $('.responsibility').select2({});
        select2.data('select2').$selection.css({'height' : '40px','border' : '1px solid'});



     
        $( "#myselect" ).on( "change", function() {
        var text = $('#myselect').find('option:selected').text().toString().toLowerCase();
        if (text == 'training') {
                $('#under_type_activity_select').removeAttr('hidden');
            }else {
                $('#under_type_activity_select').attr('hidden','hidden');
            }
        })

       

  
        




     </script>
   
</body>

</html>
