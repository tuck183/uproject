<!DOCTYPE html>
<html lang="en">
  
<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | Dashboard</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <div class="az-sidebar az-sidebar-sticky az-sidebar-indigo-dark">
      <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">logo</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="img/img1.jpg" alt=""></div>
        <div class="media-body">
          <h6>Jane Doe</h6>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active">
            <a href="dashboard.php" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="user.php" class="nav-link"><i class="typcn typcn-document"></i>User Management</a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>Queries</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="create.php" class="nav-sub-link">Create New</a></li>
            </ul>
          </li><!-- nav-item -->

          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Settings</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="profile.php" class="nav-sub-link">Profile</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="typcn typcn-archive"></i>LogOut</a>
          </li><!-- nav-item -->
        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->

    <div class="az-content az-content-dashboard-two">
      <div class="az-header">
        <div class="container-fluid">
           <div class="az-header-left">
            <a href="#" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          
          <div class="az-header-right">

          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->

      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
          <p class="mg-b-0">Dashboard</p>
        </div>
        <div class="az-dashboard-header-right">
          <div class="az-dashboard-date">
            <div class="date">
              <div>20</div>
              <div>
                <span>OCT 2018</span>
                <span>Sunday</span>
              </div>
            </div><!-- az-dashboard-date -->
            <i class="icon ion-md-arrow-forward"></i>
          <div>
            <a href="#" class="btn btn-purple">Create Queries </a>
          </div>
          </div><!-- az-dashboard-date -->


        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->


      <div class="az-content-body">

          <div class="row row-sm mg-b-20">
            <div class="col-lg-6 ht-lg-100p mg-b-10">
              <div class="card card-dashboard-one">
                <div class="card-header">
                  <div>
                    <h4 class="card-title">#Brexit</h4>

                  </div>
                  <div class="btn-group">
                    <a href="view.php" class="btn btn-outline-indigo btn-block">View</a>
                  </div>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="card-body-top">
                    <div>
                      <label class="mg-b-0">Total Impressions</label>
                      <h2>13,956</h2>
                    </div>
                  </div><!-- card-body-top -->
                  <div class="flot-chart-wrapper">
                    <div id="flotChart1a" class="flot-chart"></div>
                  </div><!-- flot-chart-wrapper -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-lg-6 ht-lg-100p mg-b-10">
              <div class="card card-dashboard-one">
                <div class="card-header">
                  <div>
                    <h4 class="card-title">Nike vs Adidas</h4>
                  </div>
                  <div class="btn-group">
                    <a href="view-multiple.php" class="btn btn-outline-indigo btn-block">View</a>
                  </div>

                </div><!-- card-header -->
                <div class="card-body">
                  <div class="card-body-top">
                    <div>
                      <label class="mg-b-0">Total Impressions</label>
                      <h2>13,956</h2>
                    </div>
                  </div><!-- card-body-top -->
                  <div class="flot-chart-wrapper">
                    <div id="flotChart1b" class="flot-chart"></div>
                  </div><!-- flot-chart-wrapper -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-lg-6 ht-lg-100p mg-b-10">
              <div class="card card-dashboard-one">
                <div class="card-header">
                  <div>
                    <h4 class="card-title">@realdonaldtrump</h4>
                  </div>
                  <div class="btn-group">
                    <a href="#" class="btn btn-outline-indigo btn-block">View</a>
                  </div>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="card-body-top">
                    <div>
                      <label class="mg-b-0">Total Impressions</label>
                      <h2>13,956</h2>
                    </div>
                  </div><!-- card-body-top -->
                  <div class="flot-chart-wrapper">
                    <div id="flotChart1c" class="flot-chart"></div>
                  </div><!-- flot-chart-wrapper -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-lg-6 ht-lg-100p mg-b-10">
              <div class="card card-dashboard-one">
                <div class="card-header">
                  <div>
                    <h4 class="card-title">Capitalism vs Socialism</h4>
                  </div>
                  <div class="btn-group">
                    <a href="#" class="btn btn-outline-indigo btn-block">View</a>
                  </div>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="card-body-top">
                    <div>
                      <label class="mg-b-0">Total Impressions</label>
                      <h2>13,956</h2>
                    </div>
                  </div><!-- card-body-top -->
                  <div class="flot-chart-wrapper">
                    <div id="flotChart1d" class="flot-chart"></div>
                  </div><!-- flot-chart-wrapper -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

          </div><!-- row -->


        <div class="row row-sm mg-b-15 mg-sm-b-20">
                      <div class="col-md-12">
          <div class="card card-dashboard-twelve mg-b-20">
            <div class="card-header">
              <h6 class="card-title">Total Query Summary</h6>

              <div class="sales-overview">
                <div class="media">
                  <div class="media-icon bg-purple"><i class="typcn typcn-ticket"></i></div>
                  <div class="media-body">
                    <label>Total Impressions</label>
                    <h4>13,375</h4>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="media-icon bg-teal"><i class="typcn typcn-ticket"></i></div>
                  <div class="media-body">
                    <label>Total Number of Tweets</label>
                    <h4>6,625</h4>
                  </div><!-- media-body -->
                </div><!-- media -->


              </div><!-- sales-overview -->
            </div><!-- card-header -->
            <div class="card-body">
              <div class="chart-legend">
                <div><span class="bg-indigo"></span>Mentions</div>
                <div><span class="bg-teal-b"></span> Tweets</div>
              </div><!-- chart-legend -->
              <div class="chart-wrapper">
                <div id="flotChart" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card-body -->
          </div> <!-- col -->
          </div><!-- card -->
        </div><!-- row -->

      <div class="row row-sm mg-b-15 mg-sm-b-20">
          <div class="col-xl-8">
            <div class="card card-dashboard-twentyone">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <div class="card-body">
                    <h6 class="az-content-label">Queries By Country</h6>
                    <p>The top locations where queries are located</p>

                    <div class="list-group">
                      <div class="list-group-item">
                        <span>United States</span>
                        <span>5,508</span>
                        <div class="progress">
                          <div class="progress-bar wd-85p bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>United Kingdom</span>
                        <span>5,122</span>
                        <div class="progress">
                          <div class="progress-bar wd-75p bg-indigo" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>Russia</span>
                        <span>4,750</span>
                        <div class="progress">
                          <div class="progress-bar wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>China</span>
                        <span>4,300</span>
                        <div class="progress">
                          <div class="progress-bar wd-55p bg-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>Australia</span>
                        <span>4,018</span>
                        <div class="progress">
                          <div class="progress-bar wd-45p bg-teal" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                    </div><!-- list-group -->
                  </div>
                </div>
                <div class="col-md-8">
                  <div id="vmap" class="vmap-wrapper"></div>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col -->

            <div class="col-xl-4">
              <div class="card card-dashboard-calendar">
                <h6 class="card-title">Calendar</h6>
                <div class="card-body"><div class="fc-datepicker"></div></div>
              </div><!-- card -->
            </div><!-- col -->

      </div><!-- row -->

      </div><!-- az-content-body -->
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 | <a href="#">Privacy Policy </a></span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.pie.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="lib/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="js/azia.js"></script>
    <script src="js/chart.flot.sampledata.js"></script>
   <script>
      $(function(){
        'use strict'



        /* ----------------------------------- */

        /* calendar */

        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          dateFormat: 'yy-mm-dd'
        });

       /* Flotcharts */
        var plot = $.plot('#flotChart1a', [{
          data: flotSampleData3,
          color: '#007bff',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
          yaxis: {
            show: true,
            min: 0,
            max: 100,
            ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            tickColor: '#eee'
          },
          xaxis: {
            show: true,
            color: '#fff',
            ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
          }
        });

        var plot = $.plot('#flotChart1b', [{
          data: flotSampleData3,
          color: '#fd7e14',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        },{
          data: flotSampleData4,
          color: '#dc3545',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
          yaxis: {
            show: true,
            min: 0,
            max: 100,
            ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            tickColor: '#eee'
          },
          xaxis: {
            show: true,
            color: '#fff',
            ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
          }
        });

        var plot = $.plot('#flotChart1c', [{
          data: flotSampleData3,
          color: ' #00cccc',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
          yaxis: {
            show: true,
            min: 0,
            max: 100,
            ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            tickColor: '#eee'
          },
          xaxis: {
            show: true,
            color: '#fff',
            ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
          }
        });

        var plot = $.plot('#flotChart1d', [{
          data: flotSampleData3,
          color: '#007bff',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        },{
          data: flotSampleData4,
          color: '#3bb001',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
          yaxis: {
            show: true,
            min: 0,
            max: 100,
            ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            tickColor: '#eee'
          },
          xaxis: {
            show: true,
            color: '#fff',
            ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
          }
        });

        /* Sentiment chart */
        var plot1 = $.plot('#flotChart', [{
            data: flotSampleData5,
            color: '#6610f2'
          },{
            data: flotSampleData3,
            color: '#bc1c0b'
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
            borderColor: '#969dab',
            labelMargin: 5,
            markings: [{
              xaxis: { from: 10, to: 20 },
              color: '#f7f7f7'
            }]
          },
          yaxis: {
            show: false,
            color: '#ced4da',
            tickLength: 10,
            min: 0,
            max: 110,
            font: {
              size: 11,
              color: '#969dab'
            },
            tickFormatter: function formatter(val, axis) {
              return val + 'k';
            }
          },
          xaxis: {
            show: false,
            position: 'top',
            color: 'rgba(0,0,0,0.1)'
          }
        });

        var mqSM = window.matchMedia('(min-width: 576px)');
        var mqSMMD = window.matchMedia('(min-width: 576px) and (max-width: 991px)');
        var mqLG = window.matchMedia('(min-width: 992px)');

        function screenCheck() {
          if (mqSM.matches) {
            plot1.getAxes().yaxis.options.show = true;
            plot1.getAxes().xaxis.options.show = true;
          } else {
            plot1.getAxes().yaxis.options.show = false;
            plot1.getAxes().xaxis.options.show = false;
          }

          if (mqSMMD.matches) {
            var tick = [
              [0, '<span>Oct</span><span>10</span>'],
              [20, '<span>Oct</span><span>12</span>'],
              [40, '<span>Oct</span><span>14</span>'],
              [60, '<span>Oct</span><span>16</span>'],
              [80, '<span>Oct</span><span>18</span>'],
              [100, '<span>Oct</span><span>19</span>'],
              [120, '<span>Oct</span><span>20</span>'],
              [140, '<span>Oct</span><span>23</span>']
            ];

            plot1.getAxes().xaxis.options.ticks = tick;
          }

          if (mqLG.matches) {
            var tick = [
              [10, '<span>Oct</span><span>10</span>'],
              [20, '<span>Oct</span><span>11</span>'],
              [30, '<span>Oct</span><span>12</span>'],
              [40, '<span>Oct</span><span>13</span>'],
              [50, '<span>Oct</span><span>14</span>'],
              [60, '<span>Oct</span><span>15</span>'],
              [70, '<span>Oct</span><span>16</span>'],
              [80, '<span>Oct</span><span>17</span>'],
              [90, '<span>Oct</span><span>18</span>'],
              [100, '<span>Oct</span><span>19</span>'],
              [110, '<span>Oct</span><span>20</span>'],
              [120, '<span>Oct</span><span>21</span>'],
              [130, '<span>Oct</span><span>22</span>'],
              [140, '<span>Oct</span><span>23</span>']
            ];

            plot1.getAxes().xaxis.options.ticks = tick;
          }
        }

        screenCheck();
        mqSM.addListener(screenCheck);
        mqSMMD.addListener(screenCheck);
        mqLG.addListener(screenCheck);

        plot1.setupGrid();
        plot1.draw();
        /* Country Map */

        $('#vmap').vectorMap({
          map: 'world_en',
          showTooltip: true,
          backgroundColor: '#f8f9fa',
          color: '#ced4da',
          colors: {
            us: '#6610f2',
            gb: '#8b4bf3',
            ru: '#aa7df3',
            cn: '#c8aef4',
            au: '#dfd3f2'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderOpacity: .3,
          borderWidth: 3,
          borderColor: '#fff',
          hoverOpacity: .85
        });
        /** CHARTS **/

 

      });
    </script>
 
  </body>
</html>
