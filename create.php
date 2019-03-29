<!DOCTYPE html>
<html lang="en">
  
<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | Create Query</title>

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
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Create Query</h2>
          <div class="az-content-breadcrumb mg-t-15">
            <span>Home</span>
            <span>Create Query</span>
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
          <div class="az-content-label mg-b-5">Select data type <i class="ion-ios-information-circle" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
            <div class="row row-sm mg-b-15">
               
            <div class="col-lg-3 float-left ">
              <label class="rdiobox">
                <input name="rdio" type="radio">
                <span>Phrase</span>
              </label>
            </div><!-- col-3 -->

            <div class="col-lg-3 float-left">
              <label class="rdiobox">
                <input name="rdio" type="radio">
                <span>Handle</span>
              </label>
            </div><!-- col-3 -->

            <div class="col-lg-3 float-left">
              <label class="rdiobox">
                <input name="rdio" type="radio">
                <span>Hashtag</span>
              </label>
            </div><!-- col-3 -->

          </div><!-- row -->

           <div class="az-content-label mg-b-10">Insert Phrase </div>
            <div class="row row-xs mg-b-10">
              <input type="hidden" name="count" value="1" />
              <div class="col-md-6 control-group" id="fields">
                <div class=" controls" id="profs">
                  <form class="input-append">
                    <div id="input-group field">
                      <input class="form-control" id="field1" name="prof1" type="text" placeholder="" data-items="8"/>
                      <button id="b1" class="btn btn-indigo add-more" type="button">+</button>
                    </div>
                  </form>
                </div>
              </div> <!-- control group -->


            <div class="col-md-6">
                <div class="az-form-group">
                  <label class="form-label">Context <i class="ion-ios-information-circle" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></label>
                  
                  <input type="email" class="form-control" placeholder="" value="">
                </div><!-- az-form-group -->
              </div><!-- col -->

            </div> <!-- row -->

            <div class="row row-xs mg-b-20">
              <label class="ckbox">
                <input type="checkbox"><span class="az-content-label">Click to update query daily <i class="ion-ios-information-circle" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></span>
              </label>
            </div> <!-- row -->

            <div class="row row-xs mg-b-10">
              <div class="col-md-6">
                <div class="az-form-group">
                  <label class="form-label">Start Date</label>
            <div class="input-group">
              <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
            </div>
                </div><!-- az-form-group -->
              </div><!-- col -->

             <div class="col-md-6">
                <div class="az-form-group">
                  <label class="form-label">End Date</label>
            <div class="input-group">
              <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
            </div>
                </div><!-- az-form-group -->
              </div><!-- col -->
            </div><!-- row -->

          <div class="row row-sm mg-b-20">
            <div class="col-lg-6">
              <p class="mg-b-10">Select Country</p>
              <select class="form-control select2-no-search">
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
              </select>
            </div><!-- col -->

              <div class="col-md-6">
                <div class="az-form-group">
                  <label class="form-label">City</label>
                  <input type="email" class="form-control" placeholder="" value="">
                </div><!-- az-form-group -->
              </div><!-- col -->
            </div><!-- row -->

          <div class="row row-sm mg-b-10">

          </div>

          <div class="row row-xs wd-xl-80p">
            <div class="col-sm-6 col-md-3"><button class="btn btn-az-primary btn-block">Create Query</button></div>
          </div><!-- row -->


      </div><!-- az-content-body -->
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 | <a href="#">Privacy Policy </a></span>
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

        $('[data-toggle="tooltip"]').tooltip();

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
