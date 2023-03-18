<div class="sidebar-menu ">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>"><img src="peso_logo.png" alt="logo"></a>
                    
                </div>
            </div>
            <div class="main-menu " >
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            

                            <?php if ($this->session->userdata('user_type') == 'admin') {
                                // code...
                             ?>
                            <li><a href="<?php echo base_url() ?>"><i class="ti-map-alt"></i> <span>Dashboard</span></a></li>
                            <li><a href="<?php echo base_url() ?>transactions"><i class="ti-map-alt"></i> <span>Completed Transactions</span></a></li>
                            <li><a href="<?php echo base_url() ?>pending_transactions"><i class="ti-map-alt"></i> <span>Pending Transactions</span> <span class="badge badge-danger count_pending">4</span></a></li>
                            <li><a href="<?php echo base_url() ?>cso"><i class="ti-map-alt"></i> <span>CSO</span></a></li>
                            <li><a href="<?php echo base_url() ?>responsibility_center"><i class="ti-map-alt"></i> <span>Responsibilty Center</span></a></li>
                            <li><a href="<?php echo base_url() ?>responsible_section"><i class="ti-map-alt"></i> <span>Responsible Section</span></a></li>
                            <li><a href="<?php echo base_url() ?>type_of_activity"><i class="ti-map-alt"></i> <span>Type of Activity</span></a></li>
                            <li><a href="<?php echo base_url() ?>users"><i class="ti-map-alt"></i> <span>Users</span></a></li>
                            <li><a href="<?php echo base_url() ?>back_up"><i class="ti-map-alt"></i> <span>Backup Database</span></a></li>
                            <li><a href="<?php echo base_url() ?>users"><i class="ti-map-alt"></i> <span>Users</span></a></li>
                            <li><a href="<?php echo base_url() ?>users"><i class="ti-map-alt"></i> <span>Users</span></a></li>

                            <?php }else {?>

                            <li><a href="<?php echo base_url() ?>"><i class="ti-map-alt"></i> <span>Dashboard</span></a></li>
                            <li><a href="<?php echo base_url() ?>Pending_transactions"><i class="ti-map-alt"></i> <span>My Pending Transactions</span></a></li>
                            <li><a href="<?php echo base_url() ?>transactions"><i class="ti-map-alt"></i> <span>All Transactions</span></a></li>
                           
                            <?php }; ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>