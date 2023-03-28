 <div class="col-md-12 ">
                                        <div class="data-tables">
                                             <table class="tablesaw table-bordered table-hover table" >
                                                
                                                   <tr>
                                                        <td colspan = "2">
                                                        <a  href    = "javascript:;" class = "mt-2  mb-2 btn sub-button text-center  btn-rounded btn-md btn-block"><i class = "fa fa-user" aria-hidden = "true"></i>PMAS Information</a>
                                                       

                                                         <?php if ($transaction_data['status'] == 'pending') {
                                                           
                                                         ?>
                                                          <a  href    = "javascript:;" id="update-pmas"
                                                         class = "mt-2  mb-2  text-center  btn-rounded btn-md btn-block"><i class = "fa fa-edit" aria-hidden = "true"></i>Update PMAS</a>

                                                      <?php }  ?>

                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="t_title">PMAS Number</td>
                                                        <td class="cso_name"><?php echo $transaction_data['pmas_no'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="t_title">Date & Time Filed</td>
                                                        <td class="cso_address"><?php echo date('M,d Y', strtotime($transaction_data['date_and_time_filed'])).' '.date('h:i a', strtotime($transaction_data['date_and_time_filed'])) ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td class="t_title">Responsible Section</td>
                                                        <td class="contact_person"><?php echo $transaction_data['type_mon_name'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td class="t_title">Type of Activity</td>
                                                        <td class="contact_number"><?php echo $transaction_data['type_act_name'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td class="t_title">Responsibility Center</td>
                                                        <td class="email"><?php echo $transaction_data['res_center_code'].' - '.$transaction_data['res_center_name'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td class="t_title">Date & Time</td>
                                                        <td class="email"><?php echo date('M,d Y', strtotime($transaction_data['date_time'])).' '.date('h:i a', strtotime($transaction_data['date_time'])) ?></</td>
                                                    </tr>

                                                     <tr>
                                                        <td class="t_title">Added By</td>
                                                        <td class="email"><?php echo $transaction_data['first_name'].' '.$transaction_data['middle_name'].' '.$transaction_data['last_name'].' '.$transaction_data['extension'] ?></</td>
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
                                                        <td class="t_title">Title of Training</td>
                                                        <td class="cso_name"><?php echo $training_data['title_of_training'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="t_title">Number of Participants</td>
                                                        <td class="cso_address"><?php echo $training_data['no_of_participants'] ?></td>
                                                    </tr>
                                                     <tr >
                                                        <td class="t_title">Female</td>
                                                        <td class="contact_person"><?php echo $training_data['female'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td class="t_title">Male</td>
                                                        <td class="contact_number"><?php echo $training_data['no_of_participants'] - $training_data['female'] ?></td>
                                                    </tr>
                                                     <tr >
                                                        <td class="t_title">Over All Ratings</td>
                                                        <td class="email"><?php echo $training_data['over_all_ratings'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td class="t_title">Name of Trainor</td>
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