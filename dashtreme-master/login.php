<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Antique Aces</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets\images\favicon_io\Antnew2.jpg" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- end loader -->

  <!-- Start wrapper-->
  <div id="wrapper">

    <div class="loader-wrapper">
      <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="card card-authentication1 mx-auto my-5">
      <div class="card-body">
        <div class="card-content p-2">
          <div class="text-center">
            <img src="assets/images/Antnew2.ico" alt="logo icon">
          </div>
          <div class="card-title text-uppercase text-center py-3">Sign In</div>
          <form>
            <div class="form-group">
              <label for="exampleInputUsername" class="sr-only">Username</label>
              <div class="position-relative has-icon-right">
                <input type="text" id="exampleInputUsername" class="form-control input-shadow"
                  placeholder="Enter Username" name="admin_name">
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword" class="sr-only">Password</label>
              <div class="position-relative has-icon-right">
                <input type="password" id="exampleInputPassword" class="form-control input-shadow"
                  placeholder="Enter Password" name="admin_password">
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
              </div>
            </div>
            <!-- error error-message -->
            <div id="error-message" style="color: red; display: none; text-align: center; margin-bottom: 10px;">
              Incorrect username or password.
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <div class="icheck-material-white">
                  <input type="checkbox" id="user-checkbox" checked="" />
                  <label for="user-checkbox">Remember me</label>
                </div>
              </div>
              <div class="form-group col-6 text-right">
                <a href="reset-password.php">Reset Password</a>
              </div>
            </div>
            <button type="button" class="btn btn-light btn-block" onclick="validateLogin()" name="login">Login</button>
            <!-- <a class="btn btn-light btn-block" onclick="validateLogin();" href="Admin.php" role="button">Login</a> -->
            <div class="text-center mt-3">Sign In With</div>

            <div class="form-row mt-4">
              <div class="form-group mb-0 col-6">
                <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i>
                  Facebook</button>
              </div>
              <div class="form-group mb-0 col-6 text-right">
                <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i>
                  Twitter</button>
              </div>
            </div>

          </form>
        </div>
      </div>
      <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Do not have an account? <a href="register.php"> Sign Up here</a></p>
      </div>
    </div>

    <script>
      function validateLogin() {
        const username = document.getElementById("exampleInputUsername").value;
        const password = document.getElementById("exampleInputPassword").value;
        const errorMessage = document.getElementById("error-message");
        errorMessage.style.display = "none";  // Reset the error message visibility


        if (username === "krutarth" && password === "krutarth007") {
          window.location.href = "Admin.php";
        } else if (username === "het" && password === "het3954") {
          window.location.href = "Admin.php";
        } else {
          window.location.href = "./403 page/403.html";
        }
      }
    </script>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">

        <p class="mb-0">Gaussion Texture</p>
        <hr>

        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>

      </div>
    </div>
    <!--end color switcher-->

  </div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

</body>

</html>