<!DOCTYPE html>
<html lang="en">
  
<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | Profile</title>

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
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <div class="az-sidebar az-sidebar-sticky az-sidebar-indigo-dark">
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
          <li class="nav-item">
            <a href="user.php" class="nav-link"><i class="typcn typcn-document"></i>User Management</a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>Queries</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="create.php" class="nav-sub-link">Create New</a></li>
            </ul>
          </li><!-- nav-item -->

          <li class="nav-item active show">
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
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">User Profile</h2>
          <div class="az-content-breadcrumb mg-t-15">
            <span>Home</span>
            <span>Profile</span>
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
      <div class="row row-sm">
        <div class="col-lg-8">
          <div class="row row-sm mg-b-20">
              <div class="col-md-6">
                <div class="az-form-group">
                  <label class="form-label">Full Name</label>
                  <input type="email" class="form-control" placeholder="" value="John Doe">
                </div><!-- az-form-group -->
              </div><!-- col -->

              <div class="col-md-6">
                <div class="az-form-group">
                  <label class="form-label">Organization</label>
                  <input type="email" class="form-control" placeholder="" value="VaultNoir Limited">
                </div><!-- az-form-group -->
              </div><!-- col -->
            </div><!-- row -->

          <div class="row row-sm mg-b-20">
              <div class="col-md-12">
                <div class="az-form-group">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="" value="JohnDoe@vaultnoir.com">
                </div><!-- az-form-group -->
              </div><!-- col -->
            </div><!-- row -->

          <div class="row row-xs wd-xl-80p">
            <div class="col-sm-6 col-md-3"><button class="btn btn-az-primary btn-block">Save</button></div>
          </div><!-- row -->
        </div><!-- col -->



        <div class="col-lg-4">
          <div class="row row-sm mg-b-20">
              <div class="col-md-12  mg-b-10">
                <div class="az-form-group">
                  <label class="form-label">Old Password</label>
                  <input type="password" class="form-control" placeholder="" value="John">
                </div><!-- az-form-group -->
              </div><!-- col -->

              <div class="col-md-12 mg-b-10">
                <div class="az-form-group">
                  <label class="form-label">New Password</label>
                  <input type="Password" class="form-control" placeholder="" value="VaultNoir">
                </div><!-- az-form-group -->
              </div><!-- col -->

              <div class="col-md-12">
                <div class="az-form-group">
                  <label class="form-label">Re-type New Password</label>
                  <input type="Password" class="form-control" placeholder="" value="VaultNoir">
                </div><!-- az-form-group -->
              </div><!-- col -->

            </div><!-- row -->

          <div class="row row-xs">
            <div class="col-sm-12 col-md-12"><button class="btn btn-az-primary btn-block" data-toggle="modal" data-target="#modaldemo2">Change Password</button></div>
          </div><!-- row -->
        </div><!-- col -->

</div>

      </div><!-- az-content-body -->
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 | <a href="#">Privacy Policy </a></span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->

    <div id="modaldemo2" class="modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
            <p class="mg-b-20 mg-x-20">Your password has been changed successfully</p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script src="lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <script src="lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
    <script src="lib/pickerjs/picker.min.js"></script>

    <script src="js/azia.js"></script>
    <script>

      $(function(){
        'use strict'
        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });


      });
    </script>
  </body>
 
  </body>
</html>
