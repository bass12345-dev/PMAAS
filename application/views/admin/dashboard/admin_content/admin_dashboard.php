




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
                                                Number of all Transactions</div>
                                                <h2><?php echo $count_admin_completed ?></h2>
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
                                                <h2><?php echo $count_admin_pending ?></h2>
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
                    <div class="col-lg-12 mt-sm-30 mt-xs-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title">New Transaction</h4>                             
                                     <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div class="trad-history mt-4">
                                    <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                    <div class="table-responsive">
                                    <table class="dbkit-table">
                                    <tr class="heading-td">
                                    <td>PMAS NO</td>
                                    <td>Date & Time Filed</td>
                                    <td>Person Responsible</td>
                                    <td>Type of Activity</td>
                                    <td>CSO</td>
                                    <td>Date And Time</td>
                                    </tr>
                                
                                 
                                    </table>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                    <div class="table-responsive">
                                    <table class="dbkit-table">
                                    <tr class="heading-td">
                                    <td>Trading ID</td>
                                    <td>Time</td>
                                    <td>Status</td>
                                    <td>Amount</td>
                                    <td>Last Trade</td>
                                    </tr>
                                    
                                    </table>
                                    </div>
                                    </div>
                                    </div>
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



                </div>

           
            </div>
        </div>
      
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
  
<?php $this->load->view('includes/offset.php') ?> 
     <?php $this->load->view('includes/scripts.php') ?> 

     <script>

        var year = $('#admin_year option:selected').val();;

        function load_graph($this){

                load_user_chart($this.value)
        }

        function load_user_chart(year){
            


            $.ajax({
                url : base_url + 'Transactions/load_admin_chart',
                data:{year : year},
                method : 'POST',
                dataType : 'json',
                success : function(data)
                {
                    console.log(data)
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



     load_user_chart(year);
     </script>
   
</body>

</html>
