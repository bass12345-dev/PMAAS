<div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?php echo $title ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url() ?>">Home</a></li>
                                <li><a href="<?php echo base_url() ?>"><?php echo $title ?></a></li>
                                <!-- <li><span><?php echo $title ?></span></li> -->
                                
                                
                                
                            </ul>
                        </div>
                    </div>
             <div class="col-sm-6 clearfix">
                        <div class=" pull-right">
                            <a href="<?php echo base_url() ?>View/user_profile?id=<?php echo $this->session->userdata('user_id') ?>" style="color: #000; font-size: 20px;"><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('middle_name').' '.$this->session->userdata('last_name').' '.$this->session->userdata('extension').' || '.$this->session->userdata('user_type') ?> </a>
                           <!--  <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>