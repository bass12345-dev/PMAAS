<div class="sidebar-menu ">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>"><img src="peso_logo.png" alt="logo"></a>
                    
                </div>
            </div>
            <div class="main-menu " >
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu" >
                        <?php 
                        $last = $this->uri->total_segments();
                        $page = $this->uri->segment($last);
                        


                         ?>

                            <?php if ($this->session->userdata('user_type') == 'admin') {
                                // code...
                             ?>
                            <li class="<?= $page == '' ? 'active' : ''?>"><a href="<?php echo base_url() ?>" ><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
                            <li class="<?= $page == 'transactions' || $page == 'Transactions' ? 'active' : ''?>"><a href="<?php echo base_url() ?>transactions"><i class="fa fa-file"></i> <span>Completed Transactions </span></a></li>
                            <li  class="<?= $page == 'pending_transactions' || $page == 'Pending_transactions' ? 'active' : ''?>"><a href="<?php echo base_url() ?>pending_transactions"><i class="fa fa-hourglass-start"></i> <span>Pending Transactions</span> <span class="badge badge-danger count_pending">4</span></a></li>
                            <li class="<?= $page == 'cso' || $page == 'Cso' ? 'active' : ''?>"><a href="<?php echo base_url() ?>cso"><i class="fa fa-sitemap"></i> <span>CSO </span></a></li>
                            <li class="<?= $page == 'responsibility_center' || $page == 'Responsibility_center' ? 'active' : ''?>"><a href="<?php echo base_url() ?>responsibility_center"><i class="fa fa-chevron-right"></i> <span>Responsibilty Center</span></a></li>
                            <li class="<?= $page == 'responsible_section' || $page == 'Responsible_section' ? 'active' : ''?>"><a href="<?php echo base_url() ?>responsible_section"><i class="fa fa-chevron-right"></i> <span>Responsible Section</span></a></li>
                            <li class="<?= $page == 'type_of_activity' || $page == 'Type_of_activity' ? 'active' : ''?>"><a href="<?php echo base_url() ?>type_of_activity"><i class="fa fa-chevron-right"></i> <span>Type of Activity</span></a></li>
                            <li class="<?= $page == 'users' || $page == 'Users' ? 'active' : ''?>"><a href="<?php echo base_url() ?>users"><i class="fa fa-users"></i> <span>Users</span></a></li>
                            
                            <hr> 
                            <span style="color: #fff;" class="ml-1 p-2 mb-5">Others</span>
                            <li class="<?= $page == 'back_up' || $page == 'Back_up' ? 'active' : ''?>"><a href="<?php echo base_url() ?>back_up"><i class="fa fa-database"></i> <span>Backup Database</span></a></li>
                            <li class="<?= $page == 'activity_logs' || $page == 'Activity_logs' ? 'active' : ''?>"><a href="<?php echo base_url() ?>Activity_logs"><i class="fa fa-history"></i> <span>Activity Logs</span></a></li>
                            <!--  <li><a href="<?php echo base_url() ?>Wallpaper"><i class="ti-map-alt"></i> <span>Login Wallpaper</span></a></li> -->
                             <br>
                             <br>
                             <br>
                             <br>
                           

                            <?php }else {?>

                            <li class="<?= $page == '' ? 'active' : ''?>"><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                            <li class="<?= $page == 'transactions' || $page == 'Transactions' ? 'active' : ''?>"><a href="<?php echo base_url() ?>transactions"><i class="fa fa-file"></i> <span>Completed Transactions</span></a></li>
                            <li  class="<?= $page == 'pending_transactions' || $page == 'Pending_transactions' ? 'active' : ''?>"><a href="<?php echo base_url() ?>Pending_transactions"><i class="fa fa-hourglass-start"></i> <span>My Pending Transactions</span></a></li>

                            <li class="<?= $page == 'activity_logs' || $page == 'Activity_logs' ? 'active' : ''?>"><a href="<?php echo base_url() ?>Activity_logs"><i class="fa fa-history"></i> <span>Activity Logs</span></a></li>
                           
                            <?php }; ?>
                            

                        </ul>
                    </nav>
                </div>
            </div>
        </div>