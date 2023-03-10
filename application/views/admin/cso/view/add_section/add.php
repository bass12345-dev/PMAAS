<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 

    <style type="text/css">
        label {
            font-weight: bold;
            font-size: 20px;
        }

        .input {

            border: 1px solid;
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
                                <li><a href="javascript:;">Add Transaction</a></li>
                                <!-- <li><span><?php echo $title ?></span></li> -->
                                
                                
                                
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
                        <div class="card ">
                            <div class="card-body">                              
                                <form>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">PMAS NO</label>
                                          <input type="email" class="form-control input" id="inputEmail4" placeholder="PMAS NO">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Date & Time Filed</label>
                                          <input type="date" class="form-control input" id="inputPassword4" placeholder="">
                                        </div>
                                        <!-- <div class="form-group col-md-4">
                                          <label for="inputPassword4">Approved By</label>
                                          <input type="text" class="form-control" id="inputPassword4" placeholder="Approved By">
                                        </div> -->
                                      </div>
                                      <div class="form-row">
                                       
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Responsible Section</label>
                                          <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                        </div>
                                        <!-- <div class="form-group col-md-4">
                                          <label for="inputPassword4">Approved By</label>
                                          <input type="text" class="form-control" id="inputPassword4" placeholder="Approved By">
                                        </div> -->
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6" >
                                          <label for="inputEmail4">Responsibility Center</label>
                                            <select id="inputState" class="form-control responsibility"  >
                                                <option >Sample1</option> 
                                                <option >Sample2</option> 
                                                <option>Regular Monthly</option> 
                                                <option >Training</option>                                            
                                          </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Type of Activity</label>
                                            <select id="inputState" class="form-control input">
                                                <option selected>Regular Monthly Meeting</option> 
                                                <option selected>Regular Monthly COOP Visit</option> 
                                                <option selected>Job Vacancy Solicitation</option> 
                                                <option selected>Regular Monthly</option> 
                                                <option selected>Training</option>                                            
                                          </select>
                                        </div>
                                        <div class="form-group col-md-3">   
                                        <label for="inputEmail4">Type</label>
                                          <select id="inputState" class="form-control input">
                                                <option selected>SKL</option> 
                                                <option selected>MDT</option> 
                                                <option selected>CD</option> 
                                                <option selected>PRS</option> 
                                                                                        
                                          </select>
                                        </div>
                                      </div>
                                       <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Date and Time</label>
                                          <input type="date" class="form-control input" id="inputEmail4" placeholder="Email">
                                        </div>
                                        
                                      </div>

                                      <div class="row">
                                        <div class="col-6 mt-3 mb-3">
                                             <div class="card " style="border: 1px solid;">
                                                <div class="card-body"> 
                                                    <i><h5>For Training Use Only</h5></i>

                                                     <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                          <label for="inputEmail4">Title of Training</label>
                                                          <input type="email" class="form-control input " id="inputEmail4" placeholder="">
                                                        </div>
                                                       
                                                      </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                          <label for="inputEmail4">No. of Participants</label>
                                                          <input type="email" class="form-control input" id="inputEmail4" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                          <label for="inputPassword4">Female</label>
                                                          <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                                        </div>
                                                       
                                                      </div>

                                                      <div class="form-row">
                                                         <div class="form-group col-md-6">
                                                          <label for="inputPassword4">Over-all Ratings</label>
                                                          <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                          <label for="inputPassword4">Name of the Trainor</label>
                                                          <input type="text" class="form-control input" id="inputPassword4" placeholder="">
                                                        </div>
                                                       
                                                      </div>
                                                </div>
                                              </div>   

                                              <div class="card mt-3" style="border: 1px solid;">
                                                <div class="card-body"> 
                                                   
                                                     <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Prepared By :</label>
                                                        <div class="col-sm-9">
                                                          <input type="email" class="form-control mx-sm-3 input" id="inputEmail3" placeholder="">
                                                        </div>
                                                      </div>
                                                    
                                                </div>
                                              </div>   
                                        </div>

                                        <div class="col-6 mt-3 mb-3">
                                             <div class="card " style="border: 1px solid;">
                                                <div class="card-body"> 

                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">Project Title</label>
                                                        <div class="col-sm-8">
                                                           <input type="text" class="form-control input" id="inputPassword4" placeholder="Project Title">
                                                        </div>
                                                      </div>
                                                   
                                              
                                                      <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">Period (Mo-Year)/as of :</label>
                                                        <div class="col-sm-8">
                                                          <input type="email" class="form-control input" id="inputEmail3" placeholder="">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Attendance</label>
                                                        <div class="col-sm-3">
                                                           
                                                              <div class="form-group">
                                                                <input type="text" id="inputPassword6" class="form-control mx-sm-3 input" aria-describedby="passwordHelpInline" placeholder="Present">
                                                              </div>
                                                           
                                                        </div>
                                                         <div class="col-sm-3">
                                                            <xform class="form-inline">
                                                              <div class="form-group">
                                                                
                                                                <input type="text" id="inputPassword6" class="form-control mx-sm-3 input" aria-describedby="passwordHelpInline" placeholder="Absent">
                                                              
                                                              </div>
                                                            </form>
                                                        </div>
                                                      </div>
                                                       <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">NOM-Borrowers</label>
                                                          <div class="col-sm-3">
                                                           
                                                              <div class="form-group">
                                                               
                                                                <input type="text" id="inputPassword6" class="form-control mx-sm-3 input" aria-describedby="passwordHelpInline" placeholder="Delinquent">
                                                               
                                                              </div>
                                                           
                                                        </div>
                                                         <div class="col-sm-3">
                                                            <form class="form-inline">
                                                              <div class="form-group">
                                                                
                                                                <input type="text" id="inputPassword6" class="form-control mx-sm-3 input" aria-describedby="passwordHelpInline" placeholder="Overdue">
                                                              
                                                              </div>
                                                            </form>
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Total Production</label>
                                                        <div class="col-sm-8">
                                                          <input type="text" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Total Collection/Sales</label>
                                                        <div class="col-sm-8">
                                                          <input type="text" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Total Released/Purchases</label>
                                                        <div class="col-sm-8">
                                                          <input type="text" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>

                                                       <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Total Delinquent Account</label>
                                                        <div class="col-sm-8">
                                                          <input type="text" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>

                                                       <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Total Over-due Account</label>
                                                        <div class="col-sm-8">
                                                          <input type="text" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Cash in Bank</label>
                                                        <div class="col-sm-8">
                                                          <input type="text" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Cash on hand</label>
                                                        <div class="col-sm-8">
                                                          <input type="text" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Inventories(Store)</label>
                                                        <div class="col-sm-8">
                                                          <input type="password" class="form-control input" id="inputPassword3" placeholder="">
                                                        </div>
                                                      </div>  


                                                     <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Are book of accounts updated</label>
                                                          <div class="col-sm-8">
                                                             <div class="custom-control ">
                                                            <input type="checkbox" value="1" >
                                                            <label  >Yes </label>
                                                          </div>

                                                           <div class="custom-control ">
                                                            <input type="checkbox" value="2" >
                                                            <label  >Yes </label>
                                                          </div>
                                                        </div>
                                                      </div>



                                                      <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Is the aging of accounts listed at the back?</label>
                                                            <div class="col-sm-8">
                                                             <div class="custom-control ">
                                                            <input type="checkbox" >
                                                            <label  >Yes </label>
                                                          </div>

                                                           <div class="custom-control ">
                                                            <input type="checkbox" >
                                                            <label  >Yes </label>
                                                          </div>
                                                        </div>
                                                      </div>











                                                     
                                               

                                                    
                                                </div>
                                              </div>   
                                        </div>
                                      </div>
                               
                                      <button type="submit" class="btn  btn-lg btn-block" style="background-color: #3F6BA4; color: #fff;"><label style="color: #fff;">Submit</label></button>
                                </form>
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
         

            var select2 =     $('.responsibility').select2({

                });
        

        select2.data('select2').$selection.css({'height' : '37px','border' : '1px solid'});
     </script>
   
</body>

</html>
