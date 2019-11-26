<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Login</title>

  <!-- Fontfaces CSS-->
  <link href="http://localhost/pro/assets/admin/css/font-face.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="http://localhost/pro/assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="http://localhost/pro/assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="http://localhost/pro/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="http://localhost/pro/assets/admin/css/theme.css" rel="stylesheet" media="all">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body class="animsition">
  <div class="page-wrapper">
    <div class="page-content--bge5">
      <div class="container">
        <div class="login-wrap">
          <div class="login-content">
            <div class="login-logo">
              <a href="#">
                <img src="http://localhost/pro/assets/admin/images/icon/logo.png" alt="CoolAdmin">
              </a>
            </div>
            <div class="login-form">
              <form action="<?php echo base_url('index.php/c_login/aksi_login_admin'); ?>" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input class="au-input au-input--full" type="text" id="name" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="au-input au-input--full" type="password" id="pass" name="password" placeholder="Password">
                </div>

                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Jquery JS-->
  <script src="http://localhost/pro/assets/admin/vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="http://localhost/pro/assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="http://localhost/pro/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="http://localhost/pro/assets/admin/vendor/slick/slick.min.js">
  </script>
  <script src="http://localhost/pro/assets/admin/vendor/wow/wow.min.js"></script>
  <script src="http://localhost/pro/assets/admin/vendor/animsition/animsition.min.js"></script>
  <script src="http://localhost/pro/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="http://localhost/pro/assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="http://localhost/pro/assets/admin/vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="http://localhost/pro/assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
  <script src="http://localhost/pro/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="http://localhost/pro/assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="http://localhost/pro/assets/admin/vendor/select2/select2.min.js">
  </script>

  <!-- Main JS-->
  <script src="http://localhost/pro/assets/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->
