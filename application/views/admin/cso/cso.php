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
                                            <table id="cso_table" style="width:100%" class="text-center">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                      
                                                        <th>CSO</th>
                                                       
                                                       <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                            </table>
                                            
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="card">                                     
                                            <h4 class="header-title">Add CSO</h4>
                                                <form id="add_cso_form">
                                                    <div class="form-group">
                                                        <label >CSO</label>
                                                            <input  type="text" class="form-control" name="cso"  placeholder="" required>      
                                                    </div>

                                                    <div class="form-group">
                                                        <label >Description</label>
                                                            <textarea class="form-control">
                                                                
                                                            </textarea>
                                                    </div>

                                                     <div class="form-group">
                                                        <label >COR</label>
                                                            <input  type="file" class="form-control" id="cor"  onchange="ValidateSingleInput(this);" name="cor"  placeholder="" required>      
                                                    </div>

                                                 


                                                    <div class="form-group">
                                                        <label >BYLAWS</label>
                                                            <input  type="file" class="form-control" name="bylaws" onchange="ValidateSingleInput(this);"  placeholder="" required>      
                                                    </div>

                                                     <div class="form-group">
                                                        <label >ARTICLE</label>
                                                            <input  type="file" class="form-control" name="article" onchange="ValidateSingleInput(this);"  placeholder="" required>      
                                                    </div>

                                                    
                                                    <button  type="submit" class="btn mt-1 pr-4 pl-4 btn-add-cso sub-button"> Submit</button>
                                                    
                                                    <div class="alert"></div>
                                                 
                                                </form>                                         
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                     <div id="canvas_container">
                                        <canvas id="pdf_renderer"></canvas>
                                    </div>
                                        <div id="navigation_controls">
                                            <button id="go_previous" class="btn ">Previous</button>
                                            <input id="current_page" value="1" type="number"/>
                                            <button id="go_next" class="btn ">Next</button>
                                        </div>
                                        <div id="zoom_controls">  
                                            <button id="zoom_in" class="btn " >+</button>
                                            <button id="zoom_out" class="btn ">-</button>
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


     <script type="text/javascript">


         var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 1
        }
     
        pdfjsLib.getDocument('./x.pdf').then((pdf) => {
     
            myState.pdf = pdf;
            render();
        });
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
        document.getElementById('zoom_in').addEventListener('click', (e) => {
            if(myState.pdf == null) return;
            myState.zoom += 0.5;
            render();
        });
        document.getElementById('zoom_out').addEventListener('click', (e) => {
            if(myState.pdf == null) return;
            myState.zoom -= 0.5;
            render();
        });
         

     </script>
   
</body>

</html>
