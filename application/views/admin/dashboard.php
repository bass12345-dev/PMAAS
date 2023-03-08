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
                            <div class="col-md-4 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-3 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">
                                                <!-- <i class="ti-thumb-up"></i>  -->

                                                Number of all Transactions</div>
                                                <h2>2,315</h2>
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
                    <div class="trd-history-tabs">
                  <!--   <ul class="nav" role="tablist">
                    <li>
                    <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                    </li>
                    <li>
                    <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                    </li>
                    </ul> -->
                    </div>
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
                    <td>Responsible Section</td>
                    <td>Type of Activity</td>
                    <td>Responsibility Center</td>
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
                            <select class="form-control " >
                            <option >2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            
                        </select>
                        </div>
                        
                        <canvas id="bar-chart" width="800" height="450"></canvas>
                  
                    </div>
                    </div>
                    </div>

                </div>



                </div>

              
               
                <!-- row area start -->
                <!-- <div class="row">
                  
                    <div class="col-lg-12 mt-sm-30 mt-xs-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Trading History</h4>
                                    <div class="trd-history-tabs">
                                        <ul class="nav" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                                            </li>
                                        </ul>
                                    </div>
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
                                                        <td>Trading ID</td>
                                                        <td>Time</td>
                                                        <td>Status</td>
                                                        <td>Amount</td>
                                                        <td>Last Trade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78211</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$758.90</td>
                                                        <td>$05245.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>782782</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$77878.90</td>
                                                        <td>$7778.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$0945.090</td>
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
                                                    <tr>
                                                        <td>8964978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$445.90</td>
                                                        <td>$094545.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$78.90</td>
                                                        <td>$074852945.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78527878</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$65465.090</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div> -->
              
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
      <!--   <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer> -->
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
  
<?php $this->load->view('includes/offset.php') ?> 
     <?php $this->load->view('includes/scripts.php') ?> 

     <script>
         new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
     </script>
   
</body>

</html>
