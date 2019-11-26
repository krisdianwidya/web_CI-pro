<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="http://localhost/pro/assets/img/favicon.png" type="image/png">
  <title>ListAshop</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="http://localhost/pro/assets/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/vendors/linericon/style.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/vendors/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/CustomFileInputs/css/component.css">
  <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://localhost/pro/assets/CustomFileInputs/js/custom-file-input.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
  <script src="http://localhost/pro/assets/croppie/croppie.js"></script>
  <!-- main css -->
  <link rel="stylesheet" href="http://localhost/pro/assets/css/style.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/css/responsive.css">

  <link rel="stylesheet" href="http://http://localhost/pro/assets/croppie//croppie.css">
  <style>
  .img{
    position: relative;
  }
  .img i {
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
  }
  .img i a:hover{
    background-color: yellow:
  }
  </style>
</head>
<body>

  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu row m0">
      <div class="container">
        <div class="float-left">
          <a href="mailto:support@colorlib.com">support@colorlib.com</a>
          <a href="#">Welcome to Catalouge</a>
        </div>
        <div class="float-right">
          <ul class="header_social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light main_box">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="<?php echo base_url('index.php/c_pusat'); ?>"><img src="http://localhost/pro/assets/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/c_pusat'); ?>">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/c_pusat/load_contact'); ?>">Contact</a></li>
              <?php if($this->session->userdata('status') != "login" OR $this->session->userdata('tipe') != "Member"){ ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/c_login/view_login'); ?>">Login</a></li>
              <?php }else{ ?>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata("username"); ?></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/c_profil'); ?>">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/c_profil/iklan_saya_page'); ?>">Iklan Saya</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/c_login/logout'); ?>">Logout</a></li>
                  </ul>
                </li>
              <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a href="#" class="cart"><i class="lnr lnr lnr-cart"></i></a></li>
              <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>Pasang Iklan</h2>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <section class="checkout_area p_120">
    <div class="container">
      <div class="billing_details ">

        <div class="col-lg-8 offset-lg-2">

          <div class="text-center mb-3">
            <form class="row contact_form" novalidate="novalidate" id="form_edit_profil" action="<?php echo site_url() ?>/c_iklan/tambah_iklan" method="post" enctype="multipart/form-data">

              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="nama" name="judul" placeholder="Judul">
              </div>

              <div class="col-md-12 form-group p_star">
                <select class="country_select form-control" id="select_jns_k" name="kategori">
                  <option value="">Kategori</option>
                  <option value="Elektronik">Elektronik</option>
                  <option value="Komputer">Komputer</option>
                  <option value="Otomotif">Otomotif</option>
                  <option value="Fashion">Fashion</option>
                  <option value="Olahraga">Olahraga</option>
                </select>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
              </div>
              <div class="col-md-12 form-group">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="1" placeholder="Deskripsi"></textarea>
              </div>
              <div class="col-md-12 form-group">
                <label class="sr-only" for="email">Foto</label>
                <input type="file" placeholder="Foto" class="form-control" id="foto" name="filefoto">
              </div>
              <div class="col-md-12 form-group">
                <button type="submit" class="main_btn" id="btn_pasang_iklan">Simpan</button>
              </div>
              <p id="demo"></p>

            </form>

          </div>


        </div>
      </div>
    </section>

    <!--================ start footer Area  =================-->
    <footer class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6 class="footer_title">About Us</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6 class="footer_title">Newsletter</h6>
              <p>Stay updated with our latest trends</p>
              <div id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                  <div class="input-group d-flex flex-row">
                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                  </div>
                  <div class="mt-10 info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget instafeed">
              <h6 class="footer_title">Instagram Feed</h6>
              <ul class="list instafeed d-flex flex-wrap">
                <li><img src="http://localhost/pro/assets/img/instagram/Image-01.jpg" alt=""></li>
                <li><img src="http://localhost/pro/assets/img/instagram/Image-02.jpg" alt=""></li>
                <li><img src="http://localhost/pro/assets/img/instagram/Image-03.jpg" alt=""></li>
                <li><img src="http://localhost/pro/assets/img/instagram/Image-04.jpg" alt=""></li>
                <li><img src="http://localhost/pro/assets/img/instagram/Image-05.jpg" alt=""></li>
                <li><img src="http://localhost/pro/assets/img/instagram/Image-06.jpg" alt=""></li>
                <li><img src="http://localhost/pro/assets/img/instagram/Image-07.jpg" alt=""></li>
                <li><img src="http://localhost/pro/assets/img/instagram/Image-08.jpg" alt=""></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget f_social_wd">
              <h6 class="footer_title">Follow Us</h6>
              <p>Let us be social</p>
              <div class="f_social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
          <p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </footer>

      <!--================ End footer Area  =================-->




      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="http://localhost/pro/assets/js/jquery-3.2.1.min.js"></script>
      <script src="http://localhost/pro/assets/js/popper.js"></script>
      <script src="http://localhost/pro/assets/js/bootstrap.min.js"></script>
      <script src="http://localhost/pro/assets/js/stellar.js"></script>
      <script src="http://localhost/pro/assets/vendors/lightbox/simpleLightbox.min.js"></script>
      <!-- <script src="http://localhost/pro/assets/vendors/nice-select/js/jquery.nice-select.min.js"></script> -->
      <script src="http://localhost/pro/assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
      <script src="http://localhost/pro/assets/vendors/isotope/isotope-min.js"></script>
      <script src="http://localhost/pro/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
      <script src="http://localhost/pro/assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="http://localhost/pro/assets/js/mail-script.js"></script>
      <script src="http://localhost/pro/assets/vendors/jquery-ui/jquery-ui.js"></script>
      <script src="http://localhost/pro/assets/vendors/counter-up/jquery.waypoints.min.js"></script>
      <script src="http://localhost/pro/assets/vendors/counter-up/jquery.counterup.js"></script>
      <script src="http://localhost/pro/assets/js/theme.js"></script>
    </body>
    </html>
