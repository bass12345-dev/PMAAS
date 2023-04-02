<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 
    

</head>

<body>
   
    <!-- preloader area start -->
     <?php $this->load->view('includes/preloader.php') ?> 

    <div class="login-area login-bg" >
        
        <div class="container">
            <div class="login-box ptb--100 animate__animated animate__zoomInDown">
                <form id="login_form">
                    <div class="login-form-head">                    
                        <img src="peso_logo.png" width="150" height="200">
                        <h1 class="mt-2" style="color: #fff;">PMAAS </h1>
                    </div>
                        <div class="login-form-body">
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Username</label>
                                    <input type="text" id="exampleInputUsername" name="username" required >
                                        <i class="ti-user"></i>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                    <input type="text" id="exampleInputPassword1" name="password" style="-webkit-text-security: disc;" required>
                                    <i class="ti-lock lock"></i>
                                     

                            </div>


                         

                            <button id="form_submit" type="submit" class="btn  btn-lg btn-block"  style="background-color: #3F6BA4; color: #fff; font-size: 15px;" > Log In </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
   <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- offset area end -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
    <!-- jquery latest version -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.all.min.js" integrity="sha512-KfbhdnXs2iEeelTjRJ+QWO9veR3rm6BocSoNoZ4bpPIZCsE1ysIRHwV80yazSHKmX99DM0nzjoCZjsjNDE628w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script type="text/javascript">
      var base_url = '<?php echo base_url(); ?>';  
              /*================================
    Login 
    ==================================*/

     $('#login_form').on('submit', function(e) {
    e.preventDefault();

        // window.location.href = 'dashboard';

         $.ajax({
            type: "POST",
            url: base_url + 'Login/verify',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {

                    
                    $('#form_submit').html('<span class="loader"></span>');
                    $('#form_submit').attr('disabled','disabled');
                   
            },
            success: function(data)
            {            

                if (data.response) {

                   if (data.res) {

                         location.reload();
                            
                   }else {

                  

                     Swal.fire({
                        text: data.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                    $("#form_submit").removeAttr('disabled');
                    $('#form_submit').text('Login');
                    $('#form_submit').remove('<span class="loader"></span>');
                    


                   }
                }else {

                   
                    Swal.fire({
                        text: data.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                    $("#form_submit").removeAttr('disabled');
                    $('#form_submit').text('Login');
                    $('#form_submit').remove('<span class="loader"></span>');
                    

                }
            }

        })
    })

         /*================================
    Preloader
    ==================================*/

    var preloader = $('#preloader');
    $(window).on('load', function() {
        setTimeout(function() {
            preloader.fadeOut('slow', function() { $(this).remove(); });
        }, 300)
    });

        /*================================
    login form
    ==================================*/
    $('.form-gp input').on('focus', function() {
        $(this).parent('.form-gp').addClass('focused');
    });
    $('.form-gp input').on('focusout', function() {
        if ($(this).val().length === 0) {
            $(this).parent('.form-gp').removeClass('focused');
        }
    });

     </script>
   
</body>

</html>
