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
  <!-- main css -->
  <link rel="stylesheet" href="http://localhost/pro/assets/css/style.css">
  <link rel="stylesheet" href="http://localhost/pro/assets/css/responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style type="text/css">
  #poto_iklan{
    max-width: 263px;
    max-height: 280px;
  }
  </style>
</head>
<body>

  <!--================Header Menu Area =================-->
  <section style=" height: 170px; background: #e8f0f2">
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
                <li class="nav-item active"><a class="nav-link" href="<?php echo base_url('index.php/c_pusat'); ?>">Home</a></li>
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
  </section>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->


  <!--================Category Product Area =================-->
  <section class="cat_product_area p_120">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-9">
          <div class="product_top_bar">

            <div class="right_page ml-auto">
              <nav class="cat_page" aria-label="Page navigation example">
                <ul class="pagination">
                  <input type="text" class="form-control" id="key_cari" name="key_cari" placeholder="Cari">
                  <a class="genric-btn info-border radius" onclick="cari_iklan()"><span class="lnr lnr-magnifier"></span></a>
                </ul>

              </nav>
            </div>
          </div>
          <div class="latest_product_inner row">


          </div>
        </div>
        <div class="col-lg-3">
          <div class="left_sidebar_area">
            <aside class="left_widgets cat_widgets">
              <div class="l_w_title">
                <h3>Kategori</h3>
              </div>
              <div class="widgets_inner">
                <ul class="list">
                  <li><a href="javascript:void(0);" onclick="kategori_iklan('Elektronik')">Elektronik</a></li>
                  <li><a href="javascript:void(0);" onclick="kategori_iklan('Komputer')">Komputer</a></li>
                  <li><a href="javascript:void(0);" onclick="kategori_iklan('Otomotif')">Otomotif</a></li>
                  <li><a href="javascript:void(0);" onclick="kategori_iklan('Fashion')">Fashion</a></li>
                  <li><a href="javascript:void(0);" onclick="kategori_iklan('Olahraga')">Olahraga</a></li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Category Product Area =================-->

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
    <script src="http://localhost/pro/assets/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/pro/assets/js/popper.js"></script>
    <script src="http://localhost/pro/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/pro/assets/js/stellar.js"></script>
    <script src="http://localhost/pro/assets/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="http://localhost/pro/assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="http://localhost/pro/assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="http://localhost/pro/assets/vendors/isotope/isotope-min.js"></script>
    <script src="http://localhost/pro/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="http://localhost/pro/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="http://localhost/pro/assets/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://localhost/pro/assets/vendors/flipclock/timer.js"></script>
    <script src="http://localhost/pro/assets/vendors/counter-up/jquery.counterup.js"></script>
    <script src="http://localhost/pro/assets/js/mail-script.js"></script>
    <script src="http://localhost/pro/assets/js/theme.js"></script>
  </body>
  <script type='text/javascript'>
  var data_iklan;
  iklan();

  function iklan_html(){
    var html = '';
    for(i=0; i<data_iklan.length; i++){
      html += '<div class="col-lg-4 col-md-4 col-sm-6">'+
      '<div class="f_p_item">'+
      '<div class="f_p_img">'+
      '<img class="img-fluid" id="iklan_foto" src="http://localhost/pro/assets/uploads/'+data_iklan[i].FOTO_IKLAN+'" alt="">'+
      '</div>'+
      '<a name="iklan_judul" href="<?php echo base_url('index.php/c_pusat/detail_page/'); ?>'+data_iklan[i].ID_IKLAN+'"><h4>'+data_iklan[i].JUDUL_IKLAN+'</h4></a>'+
      '<h5 name="iklan_harga">'+data_iklan[i].HARGA+'</h5>'+
      '</div>'+
      '</div>';
    }
    $('.latest_product_inner').html(html);
  }

  function iklan(){
    $.ajax({
      url:'<?php echo base_url('index.php/c_pusat/iklan_page'); ?>',
      type: 'post',
      dataType: 'json',
      success: function(data){
        console.log(data_iklan);
        console.log(data);
        data_iklan = data;
        console.log(data_iklan);
        iklan_html();
      }
    });
  }

  function cari_iklan(){
    var key_cari = $('[name="key_cari"]').val();
    console.log(key_cari);
    $.ajax({
      url:"<?php echo base_url('index.php/c_pusat/iklan_page'); ?>",
      type: "post",
      data:  {key_cari:key_cari},
      dataType: "json",
      success: function(data){
        data_iklan = data;
        console.log(data_iklan);
        iklan_html();
      }
    });
  }

  function kategori_iklan(key_kat){
    console.log(key_kat);
    $.ajax({
      url:"<?php echo base_url('index.php/c_pusat/iklan_page'); ?>",
      type: "post",
      data:  {key_kat:key_kat},
      dataType: "json",
      success: function(data){
        data_iklan = data;
        console.log(data_iklan);
        iklan_html();
      }
    });
  }
  </script>
  </html>
