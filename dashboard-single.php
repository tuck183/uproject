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

      <div class="row row-sm mg-b-15 mg-sm-b-20">
          <div class="col-xl-8">
            <div class="card card-dashboard-twentyone">
              <div class="row no-gutters">
                <div class="col-md-4 ht-400">
                  <div class="card-body">
                    <h6 class="az-content-label">My Queries By Country</h6>
                    <p>The top locations where my queries are located</p>

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
   
                    </div><!-- list-group -->
                  </div>
                </div>
                <div class="col-md-8 ht-400">
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
