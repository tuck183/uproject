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
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Nigeria</h2>
          <div class="az-content-breadcrumb mg-t-15">
            <span>1000 Records</span>
          </div>
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
          </div><!-- az-dashboard-date -->


        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->


      <div class="az-content-body">

      <div class="row row-sm mg-b-15 mg-sm-b-20">
            <div class="col-lg-12">
              <div class="card card-table-two">
                <div class="table-responsive">
                  <table class="table table-striped table-dashboard-two mg-b-0">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Country</th>
                        <th class="wd-lg-25p tx-right">Queries</th>
                        <th class="wd-lg-25p tx-right"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Abuja</td>
                        <td class="tx-right tx-medium tx-inverse">4</td>
                        <td class="tx-right tx-medium tx-danger"><a href="#">View </a> </td>
                      </tr>

                      <tr>
                        <td>Anambra</td>
                        <td class="tx-right tx-medium tx-inverse">4</td>
                        <td class="tx-right tx-medium tx-danger"><a href="#">View </a> </td>
                      </tr>

                      <tr>
                        <td>Kebbi</td>
                        <td class="tx-right tx-medium tx-inverse">4</td>
                        <td class="tx-right tx-medium tx-danger"><a href="#">View </a> </td>
                      </tr>

                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-dashboard-five -->
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
