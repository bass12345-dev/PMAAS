<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 

     <script 
src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
  </script>


</head>

<body>
   
    <!-- preloader area start -->
     <?php $this->load->view('includes/preloader.php') ?> 
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php $this->load->view('includes/sidebar.php') ?> 
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php $this->load->view('includes/topbar.php') ?> 
            <!-- header area end -->
            <!-- page title area start -->
            <?php $this->load->view('includes/breadcrumbs.php') ?> 
            <!-- page title area end -->
            <div class="main-content-inner ">


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card" style="border: 1px solid;">
                            <div class="card-body">
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="header-title"><?php echo $title ?></h4>
                                    </div>
                                    <div class="col-md-6">
                                         <button class="btn btn-primary pull-right mb-2">Add</button>
                                    </div>
                                </div>    -->
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="data-tables">
                                            <table id="users_table" style="width:100%" class="text-center ">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                      
                                                        <th>Name</th>  
                                                        <th>Username</th> 
                                                         <th>Type</th>                                                     
                                                       <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                            </table>
                                            
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="card">                                     
                                            <h4 class="header-title">Add User</h4>
                                                <form id="add_user_form">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                            <input  type="text" class="form-control" name="first_name"  placeholder="" required>      
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Middle Name</label>
                                                            <input  type="text" class="form-control" name="middle_name"  placeholder="" >      
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                            <input  type="text" class="form-control" name="last_name"  placeholder="" required>      
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Extension</label>
                                                            <input  type="text" class="form-control" name="ext"  placeholder="" >      
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Profile Pic</label>
                                                            <input  type="file" class="form-control" name="profile_pic"  placeholder="" >      
                                                    </div>
 
                                                     <div class="form-group ">
                                                      <label for="inputEmail4">User Type</label>
                                                        <select id="inputState" name="user_type" class="form-control">
                                                            
                                                            <option selected value="user">User</option> 
                                                            <option value="admin">Admin</option> 
                                                                                                
                                                      </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Username</label>
                                                            <input  type="text" class="form-control" name="username"  placeholder="" required>      
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                            <input  type="text" class="form-control" name="password"  placeholder="" required>      
                                                    </div>

                                                    <button  type="submit" class="btn mt-1 pr-4 pl-4 btn-add-user sub-button"> Submit</button>
                                                    
                                                    <div class="alert"></div>
                                                 
                                                </form>                                         
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
        <!-- footer area start-->
    <?php $this->load->view('admin/responsibility_center/modal/update_res_modal.php') ?> 
    <?php $this->load->view('includes/offset.php') ?>  
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
  
    <?php $this->load->view('includes/offset.php') ?> 
     <?php $this->load->view('includes/scripts.php') ?> 


  
   
</body>

</html>
