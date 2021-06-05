<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">
    <title>Project Nucleus&trade; by Infuware&reg;</title>
    <!-- vendor css -->
    <link href="assets/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/lib/typicons.font/typicons.css" rel="stylesheet">
	<link href="assets/lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <!-- azia CSS -->
    <link rel="stylesheet" href="assets/css/azia.css">
  </head>
  <body class="az-body az-dashboard-eight">
    <div class="az-header az-header-primary">
      <div class="container">
        <div class="az-header-left">
          <a href="#" class="az-logo">Project Nucleus</a>
          <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        
        <div class="az-header-right">
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="assets/img/siteimgs/gears.png" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="assets/img/siteimgs/gears.png" alt="">
                </div><!-- az-img-user -->
                <h6>Derek M. Kennard</h6>
                <span>Chief Technology Officer</span>
              </div><!-- az-header-profile -->
              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
			  <a href="https://myprojectnucleus/charts/data/chartBuilder.php" target="_blank" onclick="close_window();return true;" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Reload Data</a>
              <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
			  
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-navbar az-navbar-two az-navbar-dashboard-eight">
      <div class="container">
        <div class="az-navbar-header">
          <a href="index.html" class="az-logo">azia</a>
        </div><!-- az-navbar-header -->
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active show">
            <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Corporate Snapshot</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Referral Dashboard</a></li>
              <li class="nav-sub-item"><a href="dashboard-two.html" class="nav-sub-link">Pharmacy Dashboard</a></li>
              <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link">Finance Dashboard</a></li>
              <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link">Inventory Dashboard</a></li>
              <li class="nav-sub-item"><a href="dashboard-five.html" class="nav-sub-link">IT Dashboard</a></li>
              <!--<li class="nav-sub-item"><a href="dashboard-six.html" class="nav-sub-link">Finance Dashboard</a></li>
              <li class="nav-sub-item"><a href="dashboard-seven.html" class="nav-sub-link">Cryptocurrency</a></li>
              <li class="nav-sub-item active"><a href="dashboard-eight.html" class="nav-sub-link">Executive Dashboard</a></li>
              <li class="nav-sub-item"><a href="dashboard-nine.html" class="nav-sub-link">Campaign Dashboard</a></li>
              <li class="nav-sub-item"><a href="dashboard-ten.html" class="nav-sub-link">Product Dashboard</a></li>-->
            </ul>
          </li><!-- nav-item -->          
          </li><!-- nav-item -->
        </ul><!-- nav -->
      </div><!-- container-fluid -->
    </div><!-- az-navbar -->
	
<main class="container">
    <div class="row">
        <?php Messages::display(); ?>
    </div>	
    <div class="row">
	      <?php if (!empty($view)) {
          require($view);
      } ?>
</div>
</main><!-- /.container -->
<div class="az-footer ht-40">
      <div class="container pd-t-0-f ht-100p">
        <span>&copy; 2021 Infuware&reg; - My Project Nucleus&trade;</span>
      </div><!-- container -->
    </div><!-- az-footer -->




    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/ionicons/ionicons.js"></script>
    <script src="assets/lib/jquery.flot/jquery.flot.js"></script>
    <script src="assets/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="assets/lib/chart.js/Chart.bundle.min.js"></script>

    <script src="assets/lib/peity/jquery.peity.min.js"></script>
	<script src="assets/js/azia.js"></script>
    <script src="assets/js/chart.flot.sampledata.js"></script>
	<script src="charts/js/DashboardData.js"></script>
	
    <script>
      $(function(){
        'use strict'

          const plot = $.plot('#flotChart', [{
              data: flotSampleData10,
              color: '#80bdff',
              lines: {
                  fillColor: {colors: [{opacity: .6}, {opacity: .4}]}
              }
          }, {
              data: flotSampleData4,
              color: '#007bff',
              lines: {
                  fillColor: {colors: [{opacity: .8}, {opacity: .6}]}
              }
          }, {
              data: flotSampleData11,
              color: '#003d80',
              lines: {
                  fillColor: {colors: [{opacity: .9}, {opacity: .7}]}
              }
          }], {
              series: {
                  shadowSize: 0,
                  lines: {
                      show: true,
                      lineWidth: 0,
                      fill: true
                  }
              },
              grid: {
                  borderWidth: 0,
                  aboveData: true
              },
              yaxis: {
                  show: true,
                  min: 0,
                  max: 150,
                  color: 'rgba(255,255,255,0.2)',
                  ticks: [[0, ''], [25, '2,500'], [50, '5,000'], [75, '7,500'], [100, '10,000']]
              },
              xaxis: {
                  show: true,
                  ticks: [[0, ''], [8, 'Jan'], [20, 'Feb'], [32, 'Mar'], [44, 'Apr'], [56, 'May'], [68, 'Jun'], [80, 'Jul'], [92, 'Aug'], [104, 'Sep'], [116, 'Oct'], [128, 'Nov'], [140, 'Dec']],
                  color: 'rgba(255,255,255,0.2)'
              }
          });

          $.plot('#flotChart1', [{
            data: flotReferralCharts ,
            color: '#007bff'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.1 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 2000
          },
    			xaxis: { show: false }
    		});
       

        $.plot('#flotChart2', [{
            data: flotRxFillCharts,
            color: '#fff'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 2000
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart3', [{
            data: flotClmCltCharts,
            color: '#007bff'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 2000
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart4', [{
            data: flotDsoCharts,
            color: '#fff'
           }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 90
          },
    			xaxis: { show: false }
    		});

          const ctx6 = document.getElementById('chartBar6').getContext('2d');
          new Chart(ctx6, {
          type: 'bar',
          data: {
            labels: PharmGrthDates,
            datasets: [{
			  label: "Infusion",
              data: [350,410,590,615,725,860,960,1040,1100,1210,1320,1420],
              backgroundColor: '#2b91fe'
            },{
			  label: "Specialty",
              data: [280,340,420,435,555,670,680,750,740,850,930,1030],
              backgroundColor: '#A0ED16'
            }]
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: true,
                labels: {
                  display: true, 
                }
            },
            scales: {
              xAxes: [{
                //stacked: true,
                display: false,
                barPercentage: 0.5,
                ticks: {
                  beginAtZero:true,
                  fontSize: 11
                }
              }],
              yAxes: [{
                ticks: {
                  fontSize: 10,
                  color: '#eee',
                  min: 0,
                  max: 1600
                }
              }]
            }
          }
        });

        // Progress
          const prog1 = $('#progressBar1 .progress-bar:first-child');
          prog1.css('width','30%');
        prog1.attr('aria-valuenow','30');
        prog1.text('30%');

          const prog2 = $('#progressBar1 .progress-bar:last-child');
          prog2.css('width','53%');
        prog2.attr('aria-valuenow', '53');
        prog2.text('53%');

        // Progress
          const prog3 = $('#progressBar2 .progress-bar:first-child');
          prog3.css('width','35%');
        prog3.attr('aria-valuenow','35');
        prog3.text('35%');

          const prog4 = $('#progressBar2 .progress-bar:last-child');
          prog4.css('width','37%');
        prog4.attr('aria-valuenow', '37');
        prog4.text('37%');

		// Mini Bar charts
        $('.peity-bar').peity('bar');
      });
    </script>
  </body>
</html>
