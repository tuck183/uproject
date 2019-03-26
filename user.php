<!DOCTYPE html>
<html lang="en">
  
<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | User Management</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body class="az-body az-body-sidebar">

    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">logo</a>
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
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link"><i class="typcn typcn-clipboard"></i>Dashboard</a>
          </li><!-- nav-item -->
          <li class="nav-item active">
            <a href="user.php" class="nav-link"><i class="typcn typcn-document"></i>User Management</a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>Queries</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="elem-accordion.html" class="nav-sub-link">Create Query</a></li>
              <li class="nav-sub-item"><a href="elem-accordion.html" class="nav-sub-link">Manage Queries</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-archive"></i>Settings</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="#" class="nav-sub-link">Change Password</a></li>
              <li class="nav-sub-item"><a href="#" class="nav-sub-link">Edit Profile</a></li>

            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="login.php" class="nav-link with-sub"><i class="typcn typcn-archive"></i>Sign Out</a>
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

     <div class="az-content-body">
          <div class="az-content-breadcrumb mg-t-15">
            <span>Home</span>
            <span>All Users</span>
          </div>

          <div class="mg-b-20">
            <div class="col-lg-12">

            <table id="example2" class="table">
              <thead>
                <tr>
                  <th class="wd-20p">Name</th>
                  <th class="wd-25p">Organization</th>
                  <th class="wd-20p">Email</th>
                  <th class="wd-20p"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>VaultNoir</td>
                  <td>john@doe.com</td>
                  <td>        
                <select class="form-control select2-no-search">
                <option value="">Choose One</option>
                <option value=""  data-toggle="modal" data-target="#modaldemo2">Approve</option>
                <option value="" data-toggle="modal" data-target="#modaldemo1">Delete</option>
              </select>
            </td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>VaultNoir</td>
                  <td>john@doe.com</td>
                  <td>        
                <select class="form-control select2-no-search">
                <option value="">Choose One</option>
                <option value="">Approve</option>
                <option value="">View</option>
                <option value="">Delete</option>
              </select>
            </td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>VaultNoir</td>
                  <td>john@doe.com</td>
                  <td>        
                <select class="form-control  select2-no-search">
                <option value="">Choose One</option>
                <option value="">Approve</option>
                <option value="">View</option>
                <option value="">Delete</option>
              </select>
            </td>
                </tr>



              </tbody>
            </table>
        </div>  <!-- row -->
      </div> <!-- column -->





      </div><!-- az-content-body -->
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 </span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->

    <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">Alert</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h6>Are you sure you want to delete this user?</h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-indigo">Yes, Delete</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div id="modaldemo2" class="modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
            <p class="mg-b-20 mg-x-20">User has been activated successfully</p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/azia.js"></script>
    <script>

      $(function(){
        'use strict'
        $('#example2').DataTable({
          // responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

          $('.select2').select2({
            placeholder: 'Choose one'
          });


        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
 
  </body>
</html>
