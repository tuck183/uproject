<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>Welcome | Sentiment Analysis</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body class="az-body">
    <div class="az-home-slider">
      <div class="chart-wrapper">
        <div id="flotChart" class="flot-chart"></div>
      </div><!-- chart-wrapper -->



      <div class="az-home-content">
        <div class="az-logo">Logo</div>
        <h5></h5>

        <div class="row row-sm">
          <div class="col-md-4">
            <h1 class="pd-t-100">Online Sentiment Analysis App</h1>
            <p class="mg-b-35">Get analysis for different phrases, hashtags or twitter handles</p>
            <p class="col-md-8 pd-0">
              <a href="#" data-toggle="modal" data-target="#modaldemo2" class="btn btn-light flex-1 mg-r-10">Login</a>
              <a href="#" data-toggle="modal" data-target="#modaldemo1" class="btn btn-light flex-1 mg-r-10 hidden-sign-up show-sign-up">Sign Up</a>
            </p>
            </div><!-- col -->

            <!-- spacer -->
          <div class="col-md-2"></div>

         <div class="col-md-4 visible-md hide-sign-up">
              <div class="az-column-signup">
        <div class="az-signup-header">
          <h2>Get Started</h2>
          <h4>It's free to signup and only takes a minute.</h4>

          <form action="dashboard.php">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control" placeholder="Enter your fullname">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Organization Name</label>
              <input type="text" class="form-control" placeholder="Enter the name of your organization">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block">Create Account</button>

          </form>
        </div><!-- az-signup-header -->
      </div><!-- az-column-signup -->
       </div> <!-- col -->
      </div> <!-- row -->
      </div><!-- az-home-content -->
    </div><!-- az-home-slider -->


    <div class="az-footer bg-gray-900 bd-t-0 ht-40">
      <div class="container pd-t-0-f ht-100p">
        <div>&copy; 2018 </div>
        <nav class="nav">
          <a href="#" class="nav-link">Privacy Policy</a>
        </nav>
      </div><!-- container -->
    </div><!-- az-footer -->


    <!-- start modal -->
    <div id="modaldemo2" class="modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          
    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>

          <form action="dashboard.php">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email" value="hello@world.com">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" value="thisisademo">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p><a href="#">Forgot password?</a></p>
          <p>Don't have an account? <a href="signup.php">Create an Account</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- start modal -->
    <div id="modaldemo1" class="modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          
          <div class="az-column-signup">
        <div class="az-signup-header">
          <h2>Get Started</h2>
          <h4>It's free to signup and only takes a minute.</h4>

          <form action="dashboard.php">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control" placeholder="Enter your fullname">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Organization Name</label>
              <input type="text" class="form-control" placeholder="Enter the name of your organization">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block">Create Account</button>

          </form>
        </div><!-- az-signup-header -->
      </div><!-- az-column-signup -->

          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>

    <script src="js/azia.js"></script>
    <script src="js/dashboard.sampledata.js"></script>
    <script>
      $(function(){
        'use strict'

        $.plot('#flotChart', [{
          data: dashData1,
          color: '#3d0894',
          bars: {
            show: true,
            lineWidth: 0,
            barWidth: .5,
            fill: 1
          }
        },{
          data: dashData4,
          color: '#2d066d',
          bars: {
            show: true,
            lineWidth: 0,
            barWidth: .5,
            fill: 1
          }
        }], {
          series: {
            shadowSize: 0
          },
          grid: {
            borderWidth: 0,
            labelMargin: 10
          },
          yaxis: {
            show: true,
            min: 0,
            max: 45,
            ticks: 4,
            tickColor: 'rgba(255,255,255,.08)',
            font: { color: 'rgba(255,255,255,0)' }
          },
          xaxis: {
            show: true,
            position: 'top',
            tickColor: 'rgba(255,255,255,.08)',
            font: {
              color: 'rgba(255,255,255,.2)',
              size: 11
            }
          }
        });


        // animated smooth scroll on target from top menu
        $('#azDemoBtn').on('click', function(e){

          var target = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(''+target).offset().top
          }, 500);

          e.preventDefault();
        });
      })
    </script>
  </body>

<!-- Mirrored from themepixels.me/demo/azia/v1.1/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2019 22:33:06 GMT -->
</html>
