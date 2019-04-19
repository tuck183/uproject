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
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <div class="az-sidebar az-sidebar-sticky az-sidebar-indigo-dark">
      <div class="az-sidebar-header">
        <a href="index.php" class="az-logo">logo</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="img/img1.jpg" alt=""></div>
        <div class="media-body">
          <h6>Jane Doe</h6>
          <span>Premium Member</span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item ">
            <a href="dashboard.php" class="nav-link"><i class="typcn typcn-clipboard"></i>Dashboard</a>
          </li><!-- nav-item -->
          <li class="nav-item ">
            <a href="user.php" class="nav-link"><i class="typcn typcn-document"></i>User Management</a>
          </li><!-- nav-item -->
          <li class="nav-item active show">
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
          <div class="az-header-right">
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->

      <div class="az-content-header d-block d-md-flex">
            <div>
             <a class="color-primary" href="#"> <h6 class="az-content-title tx-18 mg-b-5">Nike vs Adidas</h6> </a>
            </div>


        <div class="az-content-header-right">
          <div class="az-dashboard-date">
              <div class="media">
                <div class="media-body">
                  <label>Start Date</label>
                  <h6>Oct 10, 2018</h6>
                </div><!-- media-body -->
              </div><!-- media -->

              <div class="media">
                <div class="media-body">
                  <label>End Date</label>
                  <h6>Oct 23, 2018</h6>
                </div><!-- media-body -->
              </div><!-- media -->

              <a href="#" class="btn btn-purple">Export</a>

          </div><!-- az-dashboard-date -->


        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->


      <div class="az-content-body">

          <div class="row row-sm mg-b-10">
          <div class="card card-dashboard-twelve mg-b-20 col-md-12">
            <div class="card-header">
              <h6 class="card-title">Nigeria <span>(Abuja)</span></h6>

              <div class="sales-overview">
                <div class="media">
                  <div class="media-icon bg-purple"><i class="typcn typcn-ticket"></i></div>
                  <div class="media-body">
                    <label>Impressions</label>
                    <h4>13,375</h4>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="media-icon bg-primary"><i class="typcn typcn-chart-area-outline"></i></div>
                  <div class="media-body">
                    <label>Tweets</label>
                    <h4>2,832</h4>
                  </div><!-- media-body -->
                </div><!-- media -->


                <div class="media col-md-6">
                  <div class="media-body">
                    <label>Context</label>
                    <p>The total revenue from all events transactions. Depending on your implementation, this can include tax, discounts such as early bird promo.</p>
                  </div><!-- media-body -->
                </div><!-- media -->

                <div class="media col-md-3">
                  <div class="media-body">
              <select class="form-control select2-no-search">
                <option value="Firefox">All</option>
                <option value="Chrome">Positive</option>
                <option value="Chrome">Negative</option>
                <option value="Chrome">Neutral</option>
              </select>
                  </div><!-- media-body -->
                </div><!-- media -->

              </div><!-- sales-overview -->
            </div><!-- card-header -->
            <div class="card-body">
              <div class="chart-legend">
                <div><span class="bg-indigo"></span> Nike Impressions</div>
                <div><span class="bg-danger"></span>Adidas Impressions</div>
              </div><!-- chart-legend -->
              <div class="chart-wrapper">
                <div id="flotChart" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- row -->


          <!-- sentiment analysis -->
            <div class="row row-sm mg-b-10">
          <div class="col-md-6 mg-b-10 card card-dashboard-thirteen">
            <label class="az-content-label">Tweet Sentiment Analysis - Nike</label>
                        <div class="row mg-t-20 mg-b-20">
              <div class="col-lg-8">
                <div id="flotPie" class="wd-100p ht-250"></div>
              </div><!-- col -->
              <div class="col-lg-4 mg-t-40 mg-lg-t-0">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="media">
                      <div class="media-icon tx-danger">
                        <i class="icon ion-ios-man"></i>
                      </div>
                      <div class="media-body">
                        <h6>3,890 <span>(26%)</span></h6>
                        <label>Negative</label>
                      </div><!-- media-body -->
                    </div><!-- media -->
                
                  </div><!-- col -->
                  <div class="col-sm-12 mg-t-0 mg-sm-t-0">
                    <div class="media">
                      <div class="media-icon tx-success">
                        <i class="icon ion-ios-man"></i>
                      </div>
                      <div class="media-body">
                        <h6>8,005 <span>(39%)</span></h6>
                        <label>Positive</label>
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- col -->
                  <div class="col-sm-12 mg-t-0">
                    <div class="media">
                      <div class="media-icon tx-warning">
                        <i class="icon ion-ios-man"></i>
                      </div>
                      <div class="media-body">
                        <h6>2,120 <span>(20%)</span></h6>
                        <label>Neutral</label>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    
                  </div><!-- col -->

                </div><!-- row -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card -->

        <div class="col-md-6 mg-b-10">
          <div class="card card-dashboard-thirteen">
            <label class="az-content-label">Tweet Sentiment Analysis - Adidas</label>

            <div class="row mg-t-20 mg-b-20">
              <div class="col-lg-8">
                <div id="flotPie1" class="wd-100p ht-250"></div>
              </div><!-- col -->
              <div class="col-lg-4 mg-t-40 mg-lg-t-0">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="media">
                      <div class="media-icon tx-danger">
                        <i class="icon ion-ios-man"></i>
                      </div>
                      <div class="media-body">
                        <h6>3,890 <span>(26%)</span></h6>
                        <label>Negative</label>
                      </div><!-- media-body -->
                    </div><!-- media -->
                
                  </div><!-- col -->
                  <div class="col-sm-12 mg-t-0 mg-sm-t-0">
                    <div class="media">
                      <div class="media-icon tx-success">
                        <i class="icon ion-ios-man"></i>
                      </div>
                      <div class="media-body">
                        <h6>8,005 <span>(39%)</span></h6>
                        <label>Positive</label>
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- col -->
                  <div class="col-sm-12 mg-t-0">
                    <div class="media">
                      <div class="media-icon tx-warning">
                        <i class="icon ion-ios-man"></i>
                      </div>
                      <div class="media-body">
                        <h6>2,120 <span>(20%)</span></h6>
                        <label>Neutral</label>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    
                  </div><!-- col -->

                </div><!-- row -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card -->
        </div> <!-- column -->

            
              <div class="col-lg-12 ">
                <div class="mg-t-20 mg-lg-t-0">
              <div class="card card-dashboard-twentyfour">
                <div class="card-header">
                  <h6 class="card-title">Total Impressions</h6>
                  <span>This Week</span>
                </div><!-- card-header -->
                <div class="card-body">

                  <div class="d-flex justify-content-between mg-b-15">
                    <div class="chart-legend">
                      <div><span class="bg-pink"></span> Today</div>
                      <div><span class="bg-gray-400"></span> Yesterday</div>
                    </div><!-- chart-legend -->
                  </div>
                  <div class="chart-wrapper">
                    <div id="flotLine1" class="flot-chart"></div>
                  </div><!-- chart-wrapper -->
                </div><!-- card-body -->
              </div>
              </div><!-- card -->
            </div>

            </div><!-- end row -->





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
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.pie.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="js/azia.js"></script>
    <script src="js/chart.flot.sampledata.js"></script>
   <script>
     $(function(){
        'use strict'

  
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

        $.plot('#flotPie', [
          { label: 'Negative', data: [[1,25]], color: '#dc3545'},
          { label: 'Positive', data: [[1,38]], color: '#3bb001'},
          { label: 'Neutral', data: [[1,20]], color: '#ffc107'}
        ], {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 3/4,
                formatter: labelFormatter
              }
            }
          },
          legend: { show: false }
        });

        $.plot('#flotPie1', [
          { label: 'Negative', data: [[1,25]], color: '#dc3545'},
          { label: 'Positive', data: [[1,38]], color: '#3bb001'},
          { label: 'Neutral', data: [[1,20]], color: '#ffc107'}
        ], {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 3/4,
                formatter: labelFormatter
              }
            }
          },
          legend: { show: false }
        });
        function labelFormatter(label, series) {
          return '<div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">' + Math.round(series.percent) + '%</div>';
        }

    $.plot('#flotLine1', [{
          data: [[1,0],[2,0],[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,12],[10,9],[11,12],[12,8],[13,5],[14,10],[15,11]],
          color: '#ced4da'
        },{
          data: [[1,0],[2,0],[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,9],[10,11],[11,5]],
          color: '#f10075'
        }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.12 } ] }
            }
          },
          grid: {
            borderWidth: 0
          },
          yaxis: {
            min: 0,
            max: 15,
            tickColor: '#ddd',
            ticks: [[0,''],[5,'100K'],[10,'200K'],[15,'300K']],
            font: {
              color: '#444',
              size: 10
            }
          },
          xaxis: {
            mode: 'categories',
            tickColor: '#eee',
            ticks: [[0,'3am'],[1,'4am'],[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],
          [12,'3pm'],[13,'4pm'],[14,'5pm']],
            font: {
              color: '#999',
              size: 9
            }
          }
        });


      });
    </script>
 
  </body>
</html>
