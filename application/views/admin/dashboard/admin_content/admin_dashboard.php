




<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 



    <!-- modernizr css -->
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
                 <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-4 mt-3 mb-2">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-3 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">
                                                <!-- <i class="ti-thumb-up"></i>  -->
                                                Completed Transactions</div>
                                                <h2 id="count-c">0</h2>
                                                <!-- <h2><?php echo $count_admin_completed ?></h2> -->
                                        </div>

                                                <!-- <canvas id="seolinechart1" height="50"></canvas> -->
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 mt-3 mb-2">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-3 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">
                                                <!-- <i class="ti-thumb-up"></i>  -->
                                                Pending Transactions</div>
                                                
                                                <h2 id="count-p">0</h2>
                                        </div>
                                        
                                                <!-- <canvas id="seolinechart1" height="50"></canvas> -->
                                    </div>

                                </div>
                            </div>
                                               <!--  <div class="col-md-6 mt-md-5 mb-3">
                                                <div class="card">
                                                <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-share"></i> Share</div>
                                                <h2>3,984</h2>
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                                </div>
                                                </div>
                                                </div> -->
                                               
                                             
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12 mt-sm-10 mt-xs-10">
                        <div class="card">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Show</h4>   
                                                    
                                     <select class="custome-select border-0 pr-3" id="show_" onchange="load_pending(this)">
                                        <option selected>5</option>
                                        <option value="10">10</option>
                                        <option value="10">15</option>
                                    </select>
                                </div> 
                                <div class="trad-history mt-4 ">
                                    <a href="javascript:;" class="btn sub-button pull-right mb-2" id="reload_admin_pending">Reload <i class="ti-loop"></i></a>
                                    <table  style="width:100%" class="text-center stripe table" id="pending_transactions_limit">
                                        <thead class="bg-light text-capitalize">
                                            <th>PMAS NO</th>
                                            <th>Date & Time Filed</th>
                                            <th>Responsible Section</th>
                                            <th>Type of Activity</th>
                                            
                                            <th>Date And Time</th>
                                            <th>Person Responsible</th>
                                            <th></th>
                                            <th>Action</th>
                                       </thead>
                                       <tbody>
                                

                                        </tbody>

                                    </table> 

                                    <a href="<?php echo base_url() ?>pending_transactions" class="btn btn-outline-secondary">See More</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row mt-2">
               <div class="col-lg-12 mt-sm-30 mt-xs-30">
                    <div class="card">
                    <div class="card-body">
                        <div class="col-md-2 pull-right "   >
                            <select class="form-control " id="admin_year" onchange="load_graph(this)"  >
                            <option selected >2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            
                        </select>
                        </div>
                        
                        <canvas id="admin-bar-chart" width="800" height="450"></canvas>
                  
                    </div>
                    </div>
                    </div>

                </div>



                <div class="row mt-2">
               <div class="col-lg-12 mt-sm-30 mt-xs-30" id="owl">
                <div class="container owl-2-style" >
                    <div class="owl-carousel owl-2">
                    <?php foreach ($users as $row) {
                        // code...
                     ?>
                    <div class="media-29101" >
                                <img src="<?php echo base_url() ?>uploads/profile_pic/<?php echo $row['profile_pic'] ?>">
                                <h3><a href="#"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'] ?></a></h3>
                                <p><?php echo $row['user_type'] ?></p>
                              </div>
                           
                    <?php } ?>
                         </div>
                    </div>
                </div>

                </div>



                </div>

           
            </div>
        </div>
      
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <?php $this->load->view('admin/dashboard/admin_content/modals/add_remarks') ?> 
    <?php $this->load->view('includes/offset.php') ?> 
     <?php $this->load->view('includes/scripts.php') ?> 
       <script src="https://cdn.tiny.cloud/1/ds0fhm6q5wk0i2dye0vxwap3wi77umvl550koo9laumyhtg1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/ds0fhm6q5wk0i2dye0vxwap3wi77umvl550koo9laumyhtg1/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
     <script>

         $('textarea#tiny').tinymce({
        height: 500,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
      });

        var year = $('#admin_year option:selected').val();
        var show = $('#show_ option:selected').val();;
        
        function load_pending($this){
            load_pending_transactions($this.value)
        }
        function load_graph($this){

                load_admin_chart($this.value)
        }

        function load_admin_chart(year){
            


            $.ajax({
                url : base_url + 'Transactions/load_admin_chart',
                data:{year : year},
                method : 'POST',
                dataType : 'json',
                success : function(data)
                {
                  
                    try{
                                 new Chart(document.getElementById("admin-bar-chart"), {
                                    type: 'bar',
                                    data: {
                                      labels: data.label,
                                      datasets: [
                                        {
                                            label               : 'Transactions',
                                             backgroundColor    :  "#3F6BA4",
                                             borderColor: 'rgb(23, 125, 255)',
                                            data                : data.data
                                        }
                                      ]
                                    },
                                    options: {

                                     legend: {
                                                position: 'top',
                                                labels: {
                                                    padding: 10,
                                                    fontColor: '#007bff',
                                                }
                                            },
                                            

                                     responsive: true,
                                      title: {
                                        display: true,
                                        text: 'Transactions in year ' + year
                                      },

                                      scales: {
                                            y: {
                                                
                                                    beginAtZero: true
                                                
                                            }
                                        },
                                                  
                                    }
                                });
                    }catch(error) {

                    }
                },
                    error: function (xhr, status, error) {
                // error here...
            },
            })
            



     }

    

     function load_pending_transactions(show){
        
        var table = $('#pending_transactions_limit')
        table.find('tbody').html('')
        var tr1 = $('<tr>')
        tr1.html('<th class="py-1 px-2 text-center">Please Wait</th>')
        table.find('tbody').append(tr1)
        setTimeout(() => {



             $.ajax({
             method : 'GET',
            url : base_url + 'Pending_transactions/load_admin_pending_l/'+show,
            // Error Function
            error: err => {
                console.log(err)
                alert("An error occured")
               
              
            },
            dataType: 'json',
            // Succes Function
            success: function(resp) {
                console.log(resp)

                tr1.html('')
                    table.find('tbody').append(tr1)
                if (resp.length > 0) {
                    // If returned json data is not empty
                    var i = 1;
                    // looping the returned data
                    Object.keys(resp).map(k => {
                        // creating new table row element
                        var tr = $('<tr>')
                         
                          
                        tr.append('<td class="py-1 px-2" style="font-weight: bold;">' + resp[k].pmas_no + '</td>')
                        tr.append('<td class="py-1 px-2">' + resp[k].date_and_time_filed + '</td>')
                        tr.append('<td class="py-1 px-2">' + resp[k].type_mon_name + '</td>')
                        tr.append('<td class="py-1 px-2">' + resp[k].type_act_name + '</td>')
                        tr.append('<td class="py-1 px-2">' + resp[k].date_time +  '</td>')
                        tr.append('<td class="py-1 px-2">' + resp[k].name + '</td>')
                         tr.append('<td class="py-1 px-2">' + resp[k].s + '</td>')
                        tr.append(resp[k].actions)

                       
                         

                        // Append table row item to table body
                        table.find('tbody').append(tr)
                    })
                } else {
                    // If returned json data is empty
                    var tr = $('<tr>')
                    tr.append('<th class="py-1 px-2 text-center">No data to display</th>')
                    table.find('tbody').append(tr)
                }
              
            }
        })






            }, 500)


     }



    $(document).on('click','a#reload_admin_pending',function (e) {

              load_pending_transactions(show);
            
    });




     load_pending_transactions(show);
     load_admin_chart(year);
     </script>
   
</body>

</html>
