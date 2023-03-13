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
            <!-- header area start -->
             <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <span style="font-size:23px;">
                            <a href="<?php echo base_url() ?>" style="color: #000;">
                            <i class="fa fa-arrow-left"></i>
                            </a>
                        </span>
                   
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <a href="<?php echo base_url() ?>Out/sign_out" class="pull-right text-danger" style="font-size: 20px;">Logout</a>
                     
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
                                <li><a href="<?php echo base_url() ?>MyProfile"><?php echo $title ?></a></li>
                              
                                
                                
                                
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

                                     <div class="col-md-6 ">
                                        <div class="data-tables">
                                             <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch id="_table">
                                                
                                                   <tr>
                                                        <td colspan = "2">
                                                        <a  href    = "javascript:;" class = "mt-2  mb-2 btn sub-button text-center  btn-rounded btn-md btn-block"><i class = "fa fa-user" aria-hidden = "true"></i> Personal Information</a>
                                                       
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td class="name"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Username</td>
                                                        <td class="username"></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Type</td>
                                                        <td class="user_type"></td>
                                                    </tr>
                                                    
                                                  
                                            </table>
                                            <button class="btn btn-block btn-rounded btn-success">Update</button>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 ">

                                       
                                        
                                            <div id="canvas_container" >

                                                <div class="loader-div" hidden >
                                                    <div class="loader"></div>
                                                </div>
                                                <img src="./../assets/images/not_found.jpg" id="pdf_error" height="600px"  width ="600px" >
                                        <canvas id="pdf_renderer" style="width: 100%;"></canvas>
                                        
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
       

     <?php $this->load->view('includes/scripts.php') ?> 


     <script type="text/javascript">


          function    load_my_profile(){


        $.ajax({
                            type: "POST",
                            url: base_url + 'Users/get_my_profile',
                            cache: false,
                            dataType: 'json',  
                            success: function(data){
                                // console.log(data)
                                // $('.cso_name').text(data.data.cso_name)
                               






                                       
                            }

                    })

                }

                load_my_profile();
       
     </script>
   

                                                 
</body>

</html>
