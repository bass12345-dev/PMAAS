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
                            

                            <?php if ($this->session->userdata('user_type') == 'admin') {
                                // code...
                             ?>
                            <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                            <li><a href="<?php echo base_url() ?>transactions"><i class="fa fa-file"></i> <span>Completed Transactions</span></a></li>
                            <li><a href="<?php echo base_url() ?>pending_transactions"><i class="fa fa-hourglass-start"></i> <span>Pending Transactions</span> <span class="badge badge-danger count_pending">4</span></a></li>
                            <li><a href="<?php echo base_url() ?>cso"><i class="fa fa-sitemap"></i> <span>CSO</span></a></li>
                            <li><a href="<?php echo base_url() ?>responsibility_center"><i class="fa fa-chevron-right"></i> <span>Responsibilty Center</span></a></li>
                            <li><a href="<?php echo base_url() ?>responsible_section"><i class="fa fa-chevron-right"></i> <span>Responsible Section</span></a></li>
                            <li><a href="<?php echo base_url() ?>type_of_activity"><i class="fa fa-chevron-right"></i> <span>Type of Activity</span></a></li>
                            <li><a href="<?php echo base_url() ?>users"><i class="fa fa-users"></i> <span>Users</span></a></li>
                            
                            <hr> 
                            <span style="color: #fff;" class="ml-1 p-2 mb-5">Others</span>
                            <li><a href="<?php echo base_url() ?>back_up"><i class="fa fa-database"></i> <span>Backup Database</span></a></li>
                            <li><a href="<?php echo base_url() ?>Activity_logs"><i class="fa fa-history"></i> <span>Activity Logs</span></a></li>
                             <li><a href="<?php echo base_url() ?>Wallpaper"><i class="ti-map-alt"></i> <span>Login Wallpaper</span></a></li>
                             <br>
                             <br>
                             <br>
                             <br>
                           

                            <?php }else {?>

                            <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                            <li><a href="<?php echo base_url() ?>Pending_transactions"><i class="fa fa-hourglass-start"></i> <span>My Pending Transactions</span></a></li>
                            <li><a href="<?php echo base_url() ?>transactions"><i class="fa fa-file"></i> <span>Completed Transactions</span></a></li>
                            <li><a href="<?php echo base_url() ?>Activity_logs"><i class="fa fa-history"></i> <span>Activity Logs</span></a></li>
                           
                            <?php }; ?>
                            

                        </ul>
                    </nav>
                </div>
            </div>
        </div>