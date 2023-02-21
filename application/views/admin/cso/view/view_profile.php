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
    <div class="page-container  sbar_collapsed" >
      
        <div class="main-content ">
            <!-- header area start -->
             <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <span style="font-size:23px;">
                            <a href="<?php echo base_url() ?>cso/view_transactions?id=<?php echo $_GET['id'] ?>" style="color: #000;">
                            <i class="fa fa-arrow-left"></i>
                            </a>
                        </span>
                   
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <a href="<?php echo base_url() ?>login" class="pull-right text-danger" style="font-size: 20px;">Logout</a>
                     
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
                                 <li><a href="<?php echo base_url() ?>cso">CSO</a></li>
                                <li><a href="<?php echo base_url() ?>cso/view_transactions?id=<?php echo $_GET['id'] ?>">View Transactions</a></li>
                                <li><a href="<?php echo base_url() ?>cso/view_profile?id=<?php echo $_GET['id'] ?>"><?php echo $title ?></a></li>
                              
                                
                                
                                
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
                                             <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch id="patient1_table">
                                                
                                                   <tr>
                                                        <td colspan = "2">
                                                        <a  href    = "#" class = "mt-2  mb-2 btn sub-button text-left  btn-rounded btn-md btn-block"><i class = "fa fa-user" aria-hidden = "true"></i> CSO Information</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSO</td>
                                                        <td><?php echo $data['cso_name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td><?php echo $data['address'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Contact Person</td>
                                                        <td><?php echo $data['contact_person'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Contact Number</td>
                                                        <td><?php echo $data['contact_number'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Email</td>
                                                        <td><?php echo $data['email'] ?></td>
                                                    </tr>

                                                     <tr>
                                                        <td>COR</td>
                                                        <td><a href="javascript:;" id="view_cor" data-id="<?php echo $data['cor'] ?>">View COR</a></td>
                                                    </tr>

                                                     <tr>
                                                        <td>Bylaws</td>
                                                       <td><a href="javascript:;"  id="view_bylaws" data-id="<?php echo $data['by_laws'] ?>">View Bylaws</a></td>
                                                    </tr>

                                                      <tr>
                                                        <td>Article</td>
                                                        <td><a href="javascript:;" id="view_article" data-id="<?php echo $data['article'] ?>">View Article</a></td>
                                                    </tr>
                                                  
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 ">

                                        <div id="navigation_controls" class="mb-3" hidden>
                                            <button id="go_previous" class="btn sub-button btn-rounded">Previous</button>
                                            <input id="current_page" value="1" type="number" disabled />
                                            <button id="go_next" class="btn sub-button btn-rounded">Next</button>

                                        <!--      <button id="zoom_in" class="btn sub-button btn-rounded" >+</button>
                                            <button id="zoom_out" class="btn sub-button btn-rounded">-</button> -->

                                             <a href="" id="download" class="btn btn-success btn-rounded pull-right">Download</a>
                                        </div>
                                        
                                           
                                       
                                        
                                            <div id="canvas_container" >
                                                <img src="" id="pdf_error" height="600px"  width ="600px" hidden>
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

          var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 1
        }


        $(document).on('click','a#view_cor',function (e) {
            if ($(this).data('id') == '') {
                 $('#pdf_error').removeAttr('hidden');
                $('#pdf_error').attr("src","./../assets/images/not_found.jpg");
            }
            else {
                $("a#download").attr("href", base_url + "uploads/cso_files/cor/" + $(this).data('id') );
                 $('#navigation_controls').removeAttr('hidden');

            pdfjsLib.getDocument('./../uploads/cso_files/cor/'+$(this).data('id')).then((pdf) => {
     
                myState.pdf = pdf;
                render();
                 });
            }

         })


        $(document).on('click','a#view_bylaws',function (e) {

            if ($(this).data('id') == '') {
                 $('#pdf_error').removeAttr('hidden');
                $('#pdf_error').attr("src","./../assets/images/not_found.jpg");
            }else{
             $("a#download").attr("href", base_url + "uploads/cso_files/bylaws/" + $(this).data('id') );
             $('#navigation_controls').removeAttr('hidden');

            pdfjsLib.getDocument('./../uploads/cso_files/bylaws/'+$(this).data('id')).then((pdf) => {
                myState.pdf = pdf;
                render();
                 });
             }
         })
         $(document).on('click','a#view_article',function (e) {

            if ($(this).data('id') == '') {               
                $('#pdf_error').removeAttr('hidden');
                $('#pdf_error').attr("src","./../assets/images/not_found.jpg");
            }else{
                $("a#download").attr("href", base_url + "uploads/cso_files/articles/" + $(this).data('id') );
                $('#navigation_controls').removeAttr('hidden');
                pdfjsLib.getDocument('./../uploads/cso_files/articles/'+$(this).data('id')).then((pdf) => {
     
                myState.pdf = pdf;
                render();
                 });
            }
         })
         
     
     
        
        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
         
                var canvas = document.getElementById("pdf_renderer");
                var ctx = canvas.getContext('2d');
     
                var viewport = page.getViewport(myState.zoom);
                canvas.width = viewport.width;
                canvas.height = viewport.height;
         
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                });
            });
        }
        document.getElementById('go_previous').addEventListener('click', (e) => {
            if(myState.pdf == null || myState.currentPage == 1) 
              return;
            myState.currentPage -= 1;
            document.getElementById("current_page").value = myState.currentPage;
            render();
        });
        document.getElementById('go_next').addEventListener('click', (e) => {
            if(myState.pdf == null || myState.currentPage > myState.pdf._pdfInfo.numPages) 
               return;
            myState.currentPage += 1;
            document.getElementById("current_page").value = myState.currentPage;
            render();
        });
        document.getElementById('current_page').addEventListener('keypress', (e) => {
            if(myState.pdf == null) return;
         
            // Get key code 
            var code = (e.keyCode ? e.keyCode : e.which);
         
            // If key code matches that of the Enter key 
            if(code == 13) {
                var desiredPage = 
                document.getElementById('current_page').valueAsNumber;
                                 
                if(desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
                    myState.currentPage = desiredPage;
                    document.getElementById("current_page").value = desiredPage;
                    render();
                }
            }
        });
        // document.getElementById('zoom_in').addEventListener('click', (e) => {
        //     if(myState.pdf == null) return;
        //     myState.zoom += 0.5;
        //     render();
        // });
        // document.getElementById('zoom_out').addEventListener('click', (e) => {
        //     if(myState.pdf == null) return;
        //     myState.zoom -= 0.5;
        //     render();
        // });
     </script>
   
</body>

</html>
