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
  <title>Tables</title>

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
  !-- modal static verif -->
  <?php
  foreach($data_ as $u){
    ?>
    <div class="modal fade" id="staticModalVerif" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticModalLabel">Verifikasi Iklan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Apakah anda yakin verifikasi iklan ini?
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-warning" onclick="window.location.href='<?php echo base_url('index.php/c_admin/verif_iklan/'.$u->ID_IKLAN); ?>'">Confirm</button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<!-- end modal static -->
!-- modal static hapus iklan belum verif -->
<?php
foreach($data_ as $u){
  ?>
  <div class="modal fade" id="staticModalDel1" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
  data-backdrop="static">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticModalLabel">Hapus Iklan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Apakah anda yakin menghapus iklan ini?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url('index.php/c_admin/del_iklan/'.$u->ID_IKLAN); ?>'">Confirm</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- end modal static -->
!-- modal static hapus iklan verif -->
<?php
foreach($data_v as $u){
  ?>
  <div class="modal fade" id="staticModalDel2" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
  data-backdrop="static">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticModalLabel">Hapus Iklan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Apakah anda yakin menghapus iklan ini?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url('index.php/c_admin/del_iklan/'.$u->ID_IKLAN); ?>'">Confirm</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- end modal static -->
<div class="page-wrapper">
  <!-- HEADER MOBILE-->
  <header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
      <div class="container-fluid">
        <div class="header-mobile-inner">
          <a class="logo" href="index.html">
            <img src="http://localhost/pro/assets/admin/images/icon/logo.png" alt="CoolAdmin" />
          </a>
          <button class="hamburger hamburger--slider" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
    <nav class="navbar-mobile">
      <div class="container-fluid">
        <ul class="navbar-mobile__list list-unstyled">
          <li class="has-sub">
            <a class="js-arrow" href="#">
              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="index.html">Dashboard 1</a>
                </li>
                <li>
                  <a href="index2.html">Dashboard 2</a>
                </li>
                <li>
                  <a href="index3.html">Dashboard 3</a>
                </li>
                <li>
                  <a href="index4.html">Dashboard 4</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="chart.html">
                <i class="fas fa-chart-bar"></i>Charts</a>
              </li>
              <li>
                <a href="table.html">
                  <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                  <a href="form.html">
                    <i class="far fa-check-square"></i>Forms</a>
                  </li>
                  <li>
                    <a href="calendar.html">
                      <i class="fas fa-calendar-alt"></i>Calendar</a>
                    </li>
                    <li>
                      <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                      </li>
                      <li class="has-sub">
                        <a class="js-arrow" href="#">
                          <i class="fas fa-copy"></i>Pages</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                              <a href="login.html">Login</a>
                            </li>
                            <li>
                              <a href="register.html">Register</a>
                            </li>
                            <li>
                              <a href="forget-pass.html">Forget Password</a>
                            </li>
                          </ul>
                        </li>
                        <li class="has-sub">
                          <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                <a href="button.html">Button</a>
                              </li>
                              <li>
                                <a href="badge.html">Badges</a>
                              </li>
                              <li>
                                <a href="tab.html">Tabs</a>
                              </li>
                              <li>
                                <a href="card.html">Cards</a>
                              </li>
                              <li>
                                <a href="alert.html">Alerts</a>
                              </li>
                              <li>
                                <a href="progress-bar.html">Progress Bars</a>
                              </li>
                              <li>
                                <a href="modal.html">Modals</a>
                              </li>
                              <li>
                                <a href="switch.html">Switchs</a>
                              </li>
                              <li>
                                <a href="grid.html">Grids</a>
                              </li>
                              <li>
                                <a href="fontawesome.html">Fontawesome Icon</a>
                              </li>
                              <li>
                                <a href="typo.html">Typography</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </header>
                  <!-- END HEADER MOBILE-->

                  <!-- MENU SIDEBAR-->
                  <aside class="menu-sidebar d-none d-lg-block">
                    <div class="logo">
                      <a href="#">
                        <img src="http://localhost/pro/assets/admin/images/icon/logo.png" alt="Cool Admin" />
                      </a>
                    </div>
                    <div class="menu-sidebar__content js-scrollbar1">
                      <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">

                          <li class="active">
                            <a href="<?php echo base_url('index.php/c_admin/monitor_member'); ?>">
                              <i class="fas fa-user"></i>Monitor Member</a>
                            </li>
                            <li class="active">
                              <a href="<?php echo base_url('index.php/c_admin/monitor_iklan'); ?>">
                                <i class="fas fa-picture-o"></i>Monitor Iklan</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </aside>
                      <!-- END MENU SIDEBAR-->

                      <!-- PAGE CONTAINER-->
                      <div class="page-container">
                        <!-- HEADER DESKTOP-->
                        <header class="header-desktop">
                          <div class="section__content section__content--p30">
                            <div class="container-fluid">
                              <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                  <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                  <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                  </button>
                                </form>
                                <div class="header-button">
                                  <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                      <i class="zmdi zmdi-comment-more"></i>
                                      <span class="quantity">1</span>
                                      <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                          <p>You have 2 news message</p>
                                        </div>
                                        <div class="mess__item">
                                          <div class="image img-cir img-40">
                                            <img src="http://localhost/pro/assets/admin/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                          </div>
                                          <div class="content">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class="time">3 min ago</span>
                                          </div>
                                        </div>
                                        <div class="mess__item">
                                          <div class="image img-cir img-40">
                                            <img src="http://localhost/pro/assets/admin/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                          </div>
                                          <div class="content">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class="time">Yesterday</span>
                                          </div>
                                        </div>
                                        <div class="mess__footer">
                                          <a href="#">View all messages</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                      <i class="zmdi zmdi-email"></i>
                                      <span class="quantity">1</span>
                                      <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                          <p>You have 3 New Emails</p>
                                        </div>
                                        <div class="email__item">
                                          <div class="image img-cir img-40">
                                            <img src="http://localhost/pro/assets/admin/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                          </div>
                                          <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                          </div>
                                        </div>
                                        <div class="email__item">
                                          <div class="image img-cir img-40">
                                            <img src="http://localhost/pro/assets/admin/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                          </div>
                                          <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                          </div>
                                        </div>
                                        <div class="email__item">
                                          <div class="image img-cir img-40">
                                            <img src="http://localhost/pro/assets/admin/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                          </div>
                                          <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                          </div>
                                        </div>
                                        <div class="email__footer">
                                          <a href="#">See all emails</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                      <i class="zmdi zmdi-notifications"></i>
                                      <span class="quantity">3</span>
                                      <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                          <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                          <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                          </div>
                                          <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                          </div>
                                        </div>
                                        <div class="notifi__item">
                                          <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                          </div>
                                          <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                          </div>
                                        </div>
                                        <div class="notifi__item">
                                          <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                          </div>
                                          <div class="content">
                                            <p>You got a new file</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                          </div>
                                        </div>
                                        <div class="notifi__footer">
                                          <a href="#">All notifications</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <?php
                                  foreach($data_user as $u_data){
                                    ?>
                                    <div class="account-wrap">
                                      <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                          <img src="http://localhost/pro/assets/uploads/<?=$u_data->FOTO_USER?>" alt="" />
                                        </div>
                                        <div class="content">
                                          <a class="js-acc-btn" href="#"><?php echo $u_data->NAMA_USER; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                          <div class="info clearfix">
                                            <div class="image">
                                              <a href="#">
                                                <img src="http://localhost/pro/assets/uploads/<?=$u_data->FOTO_USER?>" alt="" />
                                              </a>
                                            </div>
                                            <div class="content">
                                              <h5 class="name">
                                                <a href="#"><?php echo $u_data->NAMA_USER; ?></a>
                                              </h5>
                                              <span class="email"><?php echo $u_data->EMAIL; ?></span>
                                            </div>
                                          </div>
                                          <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                              <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                              </div>
                                              <div class="account-dropdown__item">
                                                <a href="#">
                                                  <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                  <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                  </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                  <a href="<?php echo base_url('index.php/c_login/logout'); ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          <?php } ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </header>
                                <!-- END HEADER DESKTOP-->

                                <!-- MAIN CONTENT-->
                                <div class="main-content">
                                  <div class="section__content section__content--p30">
                                    <div class="container-fluid">
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <!-- DATA TABLE -->
                                          <h3 class="title-5 m-b-35">Iklan Pending</h3>
                                          <div class="table-responsive table-responsive-data2">
                                            <table class="table table-data2">
                                              <thead>
                                                <tr>
                                                  <th>foto</th>
                                                  <th>judul</th>
                                                  <th>deskripsi</th>
                                                  <th>kategori</th>
                                                  <th>harga</th>
                                                  <th>tanggal</th>
                                                  <th>pengiklan</th>
                                                  <th>action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php
                                                foreach($data_ as $u){
                                                  ?>
                                                  <tr class="tr-shadow">
                                                    <td>
                                                      <img src="http://localhost/pro/assets/uploads/<?=$u->FOTO_IKLAN?>" alt="">
                                                    </td>
                                                    <td><?php echo $u->JUDUL_IKLAN ?></td>
                                                    <td><?php echo $u->DESKRIPSI ?></td>
                                                    <td><?php echo $u->KATEGORI ?></td>
                                                    <td><?php echo 'Rp '.$u->HARGA ?></td>
                                                    <td><?php echo date('d-m-Y', strtotime($u->TANGGAL_IKLAN)); ?></td>
                                                    <td><?php echo $u->NAMA_USER ?></td>

                                                    <td>
                                                      <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Check">
                                                          <i class="zmdi zmdi-check" data-toggle="modal" data-target="#staticModalVerif"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                          <i class="zmdi zmdi-delete" data-toggle="modal" data-target="#staticModalDel1"></i>
                                                        </button>
                                                      </div>
                                                    </td>
                                                  </tr>
                                                  <tr class="spacer"></tr>
                                                <?php } ?>
                                              </tbody>
                                            </table>
                                          </div>
                                          <!-- END DATA TABLE -->
                                        </div>
                                      </div>
                                      <br>
                                      <br>
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <!-- DATA TABLE -->
                                          <h3 class="title-5 m-b-35">Iklan Terverifikasi</h3>
                                          <div class="table-responsive table-responsive-data2">
                                            <table class="table table-data2">
                                              <thead>
                                                <tr>
                                                  <th>foto</th>
                                                  <th>judul</th>
                                                  <th>deskripsi</th>
                                                  <th>kategori</th>
                                                  <th>harga</th>
                                                  <th>tanggal</th>
                                                  <th>pengiklan</th>
                                                  <th>action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php
                                                foreach($data_v as $u){
                                                  ?>
                                                  <tr class="tr-shadow">
                                                    <td>
                                                      <img src="http://localhost/pro/assets/uploads/<?=$u->FOTO_IKLAN?>" alt="">
                                                    </td>
                                                    <td><?php echo $u->JUDUL_IKLAN ?></td>
                                                    <td><?php echo $u->DESKRIPSI ?></td>
                                                    <td><?php echo $u->KATEGORI ?></td>
                                                    <td><?php echo 'Rp '.$u->HARGA ?></td>
                                                    <td><?php echo date('d-m-Y', strtotime($u->TANGGAL_IKLAN)); ?></td>
                                                    <td><?php echo $u->NAMA_USER ?></td>

                                                    <td>
                                                      <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                          <i class="zmdi zmdi-delete" data-toggle="modal" data-target="#staticModalDel2"></i>
                                                        </button>
                                                      </div>
                                                    </td>
                                                  </tr>
                                                  <tr class="spacer"></tr>
                                                <?php } ?>
                                              </tbody>
                                            </table>
                                          </div>
                                          <!-- END DATA TABLE -->
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                          </div>
                                        </div>
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
