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
                            <h5>Update Information</h5>
                           
                          
                              <div class="form-group">
                                <label >PMAS NO</label>
                              
                                <div class="input-group mb-3">
                               <div class="input-group-prepend">                                  
                                    <input type="text" name="year" class="form-control"  value="" readonly>                               
                                  </div>

                                  <div class="input-group-prepend">
                                 
                                     <input type="text" name="month" class="form-control" value="" readonly>
                                    
                                    
                                  </div>
                                  <input type="number" class="form-control  wizard-required input " value="" name="pmas_number" readonly >
                              </div>
                                <div class="wizard-form-error"></div>
                            </div>


                            <div class="form-group clearfix">
                                <button type="button" class="form-wizard-next-btn float-right" id="first-next">Next</button>
                            </div>
                        </fieldset> 
                        <fieldset class="wizard-fieldset">
                            <h5>Information</h5>

                             <div class="form-group">     
                               <div class="col-12">Responsible Section</div>
                                    <div class="form-group">
                                        <select class="form-control input" name="update_type_of_monitoring_id" id="update_type_of_monitoring_id"   >
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
                                        <select class="form-control input" id="myselect" name="update_type_of_activity_id"  >
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
                                        <select class="form-control responsibility" id="update_responsibility_center_id" name="update_responsibility_center_id" style="width: 100%;">

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
                                        <select class="form-control cso wizard-required" id="update_cso_id" name="update_cso_id" style="width: 100%;" >

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
                            <input type="text" value="05/16/2018 12:31:00 AM" class="form-control input" name="update_date_time" onkeypress="return false;" />
                            <div class="input-group-addon input-group-append">
                                <div class="input-group-text">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                              
                                <!-- <input type="date" class="form-control input" id="datepicker2" placeholder=""  onkeypress="return false;"> -->
                                <div class="wizard-form-error"></div>
                            </div>

                       
                            <?php $this->load->view('admin/transactions/view/update_section/for_training_update') ?>
                            <?php $this->load->view('admin/transactions/view/update_section/for_project_monitoring_update') ?>



                        
                                
                            <div class="form-group clearfix">
                                 <button type="submit" class="form-wizard-submit float-right btn-add-transaction">  Submit</button>
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                <!-- <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a> -->
                            </div>
                        </fieldset> 
                      

                        
                    </form>
                </div>
            </div>
