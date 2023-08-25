

  


			<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Dashboard</h4> </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                            <h5 class="text-muted vb">Data User</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-danger"><?php echo $data_admin ?></h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $data_admin ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data_admin ?>0%"> <span class="sr-only"><?php echo $data_admin ?></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">Hasil Produksi Telur</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-primary"><?php echo $data_peternakan ?></h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="<?php echo $data_peternakan ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data_peternakan ?>%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
																<div class="col-lg-3 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">Telur Kualitas Baik</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-megna"><?php echo $data_telurbaik ?></h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="<?php echo $data_telurbaik ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data_telurbaik ?>%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
																
																<div class="col-lg-3 col-sm-6  b-0">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe016;"></i>
                                            <h5 class="text-muted vb">Telur Kualitas Busuk</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-success"><?php echo $data_telurbusuk ?></h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $data_telurbusuk ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data_telurbusuk ?>%"> <span class="sr-only"><?php echo $data_telurbusuk ?></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
                <div class="col-lg-12"> 
		  <!-- BAR CHART -->
          <div class="white-box">
            <div class="box-header with-border">
              <h3 class="box-title">Jumlah Data Pertabel</h3>

              
            </div>
            <div class="box-body">
             
                
                <?php
            $nama[] = 'Admin';
            $jumlah[] = (float) $data_admin;

            $nama[] = 'Produksi Telur';
            $jumlah[] = (float) $data_peternakan; 

            $nama[] = 'Pesan';
            $jumlah[] = (float) $data_pesan;


          ?>
          <script type="text/javascript" src="<?php echo base_url() ?>assets/js/chartjs/chart.min.js"></script>
                <canvas id="canvas" height="230" width="900" name="canvas"></canvas>
                
          <script>
            var lineChartData = {
                labels : <?php echo json_encode($nama);?>,
                datasets : [
                    
                    {
                        fillColor: "#428bca",
                        strokeColor: "#428bca",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jumlah);?>
                    }

                ]
                
            }
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
    </script>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>   
		<div class="col-lg-12">       
<div class="row">
        <div class="col-lg-6">
              <div class="white-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Jumlah Produksi Telur Per Kualitas</h3>

                  
                </div>
                <div class="box-body chart-responsive">
                <script src="<?php echo base_url() ?>assets/admin/chart.js/Chart.js"></script>
                  <canvas id="pieChart" name="pieChart"></canvas>
                <script>
                  // disini bray
                  var pieChartCanvas = document.getElementById("pieChart").getContext('2d')
                  var pieChart       = new Chart(pieChartCanvas)
                  var PieData        = [
                  <?php foreach($chart as $chart) {?>
                    
                    {
                      value    : <?php echo $chart->jumlah; ?>,
                      color    : '<?php echo $chart->warna_chart; ?>',
                      highlight: '<?php echo $chart->warna_chart; ?>',
                      label    : '<?php echo $chart->kualitas_telur; ?>'
                    },
                    <?php } ?>
                  ]
                  var pieOptions     = {
                    //Boolean - Whether we should show a stroke on each segment
                    segmentShowStroke    : true,
                    //String - The colour of each segment stroke
                    segmentStrokeColor   : '#fff',
                    //Number - The width of each segment stroke
                    segmentStrokeWidth   : 2,
                    //Number - The percentage of the chart that we cut out of the middle
                    percentageInnerCutout: 50, // This is 0 for Pie charts
                    //Number - Amount of animation steps
                    animationSteps       : 100,
                    //String - Animation easing effect
                    animationEasing      : 'easeOutBounce',
                    //Boolean - Whether we animate the rotation of the Doughnut
                    animateRotate        : true,
                    //Boolean - Whether we animate scaling the Doughnut from the centre
                    animateScale         : false,
                    //Boolean - whether to make the chart responsive to window resizing
                    responsive           : true,
                    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                    maintainAspectRatio  : true,
                    //String - A legend template
                    legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
                  }
                  //Create pie or douhnut chart
                  // You can switch between pie and douhnut using the method below.
                  pieChart.Doughnut(PieData, pieOptions)
                </script>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <div class="col-lg-6"> 
          <!-- BAR CHART -->
          <div class="white-box">
            <div class="box-header with-border">
              <h3 class="box-title">Jumlah Peminat Artikel Per Kategori</h3>

              
            </div>
            <div class="box-body">
              <div class="chart">
                <script src="<?php echo base_url() ?>assets/admin/chart.js/Chart.js"></script>
                <?php foreach($chart_bar as $chart_bar) {
                  $nama_bar[] = ucfirst(substr($chart_bar->kualitas_telur,9));
                  $data_bar[] = (integer) $chart_bar->jumlah;

                } ?>
                <canvas id="barChart"></canvas>
                <script>
                var barChartData = {
                  labels : <?php echo json_encode($nama_bar); ?>,
                  datasets : [
                    {
                      fillColor : " #428bca",
                      strokeColor : "#428bca",
                      data : <?php echo json_encode($data_bar); ?>
                    }
                  ]
                }

                var myLine = new Chart(document.getElementById("barChart").getContext("2d")).Bar(barChartData);
                </script>
						
              </div>
			</div>
			</div>
            <!-- /.box-body -->
		  </div>
			</div>
          <!-- /.box -->
</div>
</div>
                <!--row -->
								<script>
var refreshId = setInterval(function()
{
    $('#page-wrapper');
}, 1000);
</script>
