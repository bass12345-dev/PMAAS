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
                              
                                <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                    <!-- <button class="btn btn-outline-secondary " type="button" ><?php echo date('Y', time()) ?></button> -->
                                    <input type="text" name="year" class="form-control"  value="<?php echo date('Y', time()) ?>" readonly>
                                   <!-- <div class="dropdown-menu">

                                           <?php

                                            $var = 2080;

                                            for ($i= date('Y', time()); $i <=  $var; $i++) { 

                                               echo '<a class="dropdown-item" href="#">'.$i.'</a>';
                                                // code...
                                            }

                                         ?> 
                                      
                                    </div>  -->
                                  </div>

                                  <div class="input-group-prepend">
                                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo date('m', time()) ?></button> -->

                                    <!-- <button class="btn btn-outline-secondary " type="button" ><?php echo date('m', time()) ?></button> -->
                              
                                     <input type="text" name="month" class="form-control" value="<?php echo date('m', time()) ?>" readonly>
                                    
                                    
                                  </div>
                                  <input type="number" class="form-control  wizard-required input " value="12" name="pmas_number" readonly >
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
                          <!--   <div class="form-group">
                                <label for="inputPassword4">Date & Time Filed</label>

                                  <div class="input-group date" id="id_0">
                            <input type="text" value="05/16/2018 12:31:00 AM" name="date_and_time_filed" class="form-control input" onkeypress="return false;"/>
                            <div class="input-group-addon input-group-append">
                                <div class="input-group-text">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                              
                              
                                <div class="wizard-form-error"></div>
                            </div> -->
                          
                          
                            <div class="form-group clearfix">
                                <button type="button" class="form-wizard-next-btn float-right" id="first-next">Next</button>
                            </div>
                        </fieldset> 
                        <fieldset class="wizard-fieldset">
                            <h5>Information</h5>

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
                                            <!-- <option value="0" selected></option> -->
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
                               <div class="col-12">Name of CSO</div>
                                 <div class="form-group">
                                        <select class="form-control cso wizard-required" name="cso_id" style="width: 100%;" >

                                            <?php 

                                                foreach ($cso as $row) :
                                           ?>
                                           <option value="<?php echo $row['cso_id'] ?>"> <?php echo $row['cso_name'] ?></option>
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

                       
                            <?php $this->load->view('admin/transactions/add_section/for_training') ?>
                            <?php $this->load->view('admin/transactions/add_section/for_project_monitoring') ?>



                        
                                
                            <div class="form-group clearfix">
                                 <button type="submit" class="form-wizard-submit float-right btn-add-transaction">  Submit</button>
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                <!-- <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a> -->
                            </div>
                        </fieldset> 
                      

                        
                    </form>
                </div>
            </div>
