



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
                                                <h2><?php echo $count_user_completed ?></h2>
                                        </div>

                                                <!-- <canvas id="seolinechart1" height="50"></canvas> -->
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-3 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">
                                                <!-- <i class="ti-thumb-up"></i>  -->
                                                Pending Transactions</div>
                                                <h2><?php echo $count_user_pending ?></h2>
                                        </div>
                                        
                                                <!-- <canvas id="seolinechart1" height="50"></canvas> -->
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

                       <!--   <div class="col-md-2 pull-right "   >
                            <button class="btn btn-primary btn-rounded" id="print-user-chart">Print PDF</button>
                            
                    
                        </div> -->
                        
                        <div class="col-md-2 pull-right "   >
                            <select class="form-control " id="user_year" onchange="load_graph(this)"  >
                            <option selected >2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            
                        </select>
                        </div>
                        <div id="reportPage">
                         <canvas id="user-bar-chart"  width="800" height="450"></canvas>
                     </div>
                      <!--   <div id="verview-shart" style="width:100%;" ></div> -->
                      
                  
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

        var year = $('#user_year option:selected').val();;

        function load_graph($this){

                load_user_chart($this.value)
        }

                function load_user_chart(year){
            


            $.ajax({
                url : base_url + 'Transactions/load_user_chart',
                data:{year : year},
                method : 'POST',
                dataType : 'json',
                success : function(data)
                {
                    console.log(data)
                    try{


                        new Chart(document.getElementById("user-bar-chart"), {
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
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
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



     $('#print-user-chart').click(function(event) {
  // get size of report page
  var reportPageHeight = $('#reportPage').innerHeight();
  var reportPageWidth = $('#reportPage').innerWidth();

  // create a new canvas object that we will populate with all other canvas objects
  var pdfCanvas = $('<canvas />').attr({
    id: "canvaspdf",
    width: reportPageWidth,
    height: reportPageHeight
  });

  // keep track canvas position
  var pdfctx = $(pdfCanvas)[0].getContext('2d');
  var pdfctxX = 0;
  var pdfctxY = 0;
  var buffer = 100;

  // for each chart.js chart
  $("canvas").each(function(index) {
    // get the chart height/width
    var canvasHeight = $(this).innerHeight();
    var canvasWidth = $(this).innerWidth();

    // draw the chart into the new canvas
    pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
    pdfctxX += canvasWidth + buffer;

    // our report page is in a grid pattern so replicate that in the new canvas
    if (index % 2 === 1) {
      pdfctxX = 0;
      pdfctxY += canvasHeight + buffer;
    }
  });

  // create new pdf and add our new canvas as an image
  var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
  pdf.addImage($(pdfCanvas)[0], 'PNG', 0, 0);

  // download the pdf
  pdf.save('filename.pdf');
});

    //     function load_user_chart(year){
            


    //         $.ajax({
    //             url : base_url + 'Transactions/load_user_chart',
    //             data:{year : year},
    //             method : 'POST',
    //             dataType : 'json',
    //             success : function(data)
    //             {
    //                 console.log(data)
    //                 try{


    //                         var myConfig = {
    //     "type": "bar",

    //     "scale-x": { //X-Axis
    //         "labels": data.label,
    //         "label": {
    //             "font-size": 14,
    //             "offset-x": 0,
    //         },
    //         "item": { //Scale Items (scale values or labels)
    //             "font-size": 10,
    //         },
    //         "guide": { //Guides
    //             "visible": false,
    //             "line-style": "solid", //"solid", "dotted", "dashed", "dashdot"
    //             "alpha": 1
    //         }
    //     },
    //     "plot": { "aspect": "spline" },
    //     "series": [{
    //             "values": data.data,
    //             "line-color": "#007bff",
    //             /* "dotted" | "dashed" */
    //             "line-width": 5 /* in pixels */ ,
    //             "marker": { /* Marker object */
    //                 "background-color": "#007bff",
    //                 /* hexadecimal or RGB value */
    //                 "size": 5,
    //                 /* in pixels */
    //                 "border-color": "#007bff",
    //                 /* hexadecimal or RBG value */
    //             }
    //         },
           
    //     ]
    // };

    // zingchart.render({
    //     id: 'verview-shart',
    //     data: myConfig,
    //     height: "100%",
    //     width: "100%"
    // });
    //                             //  new Chart(document.getElementById("user-bar-chart"), {
    //                             //     type: 'bar',
    //                             //     data: {
    //                             //       labels: data.label,
    //                             //       datasets: [
    //                             //         {
    //                             //             label               : 'Transactions',
    //                             //              backgroundColor    :  "#3F6BA4",
    //                             //              borderColor: 'rgb(23, 125, 255)',
    //                             //             data                : data.data
    //                             //         }
    //                             //       ]
    //                             //     },
    //                             //     options: {
    //                             //      legend: {
    //                             //                 position: 'top',
    //                             //                 labels: {
    //                             //                     padding: 10,
    //                             //                     fontColor: '#007bff',
    //                             //                 }
    //                             //             },

    //                             //      responsive: true,
    //                             //       title: {
    //                             //         display: true,
    //                             //         text: 'Transactions in year ' + year
    //                             //       },

    //                             //       scales: {
    //                             //             yAxes: [{
    //                             //                 ticks: {
    //                             //                     beginAtZero: true
    //                             //                 }
    //                             //             }]
    //                             //         },
                                                  
    //                             //     }
    //                             // });
    //                 }catch(error) {

    //                 }
    //             },
    //                 error: function (xhr, status, error) {
    //             // error here...
    //         },
    //         })
            



    //  }



     load_user_chart(year);


     </script>
   
</body>

</html>
