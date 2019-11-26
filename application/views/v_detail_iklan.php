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
</head>
<body>
  <div class="modal fade" id="staticModalLaku" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"  data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticModalLabel">Ubah Status Iklan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            <input type="hidden" name="kode" id="kode_id" value="">
            Apakah anda yakin mengubah status iklan ini?
          </p>
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0);" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
          <a href="javascript:void(0);" class="btn btn-warning" onclick="upd_status()">Confirm</a>
        </div>
      </div>
    </div>
  </div>

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
          <h2>Single Product Page</h2>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="single-product.html">Product Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->

  <div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-6">
          <div class="s_product_img">
            <div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" id="foto_iklan">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3 name="judul_ikl"></h3>
            <h2 name="harga_ikl"></h2>
            <ul class="list">
              <li><a><span>Diposting</span> : <a name="judul_ikl"></a></a></li>
              <li><a><span>Kategori</span> : <a name="kategori_ikl"></a></a></li>
              <li><a><span>Status</span> : <a name="status_ikl"></a></a></li>
              <li><a><span>Penjual</span> : <a name="penjual_ikl"></a></a></li>
              <li><a><span>Telepon</span> : <a name="telp_ikl"></a></a></li>
              <div class="btn_laku"></div>
            </ul>
            <p name="deskripsi_ikl"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs">
        <h3>Comments</h3>
      </ul>
      <div class="tab-content">
        <div class="" id="contact">
          <div class="row">
            <div class="col-lg-6">
              <div class="comment_list">

              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>Post a comment</h4>
                <form class="row contact_form" id="contactForm" novalidate="novalidate">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="komen" id="komen" rows="1" placeholder="Isi komentar"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <a class="genric-btn danger" id="sb_comm" aria-disabled="true" onclick="post_komen()">Submit Now</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================End Product Description Area =================-->

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
    <script src="http://localhost/pro/assets/js/mail-script.js"></script>
    <script src="http://localhost/pro/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="http://localhost/pro/assets/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://localhost/pro/assets/vendors/counter-up/jquery.counterup.js"></script>
    <script src="http://localhost/pro/assets/js/theme.js"></script>
  </body>
  <script type="text/javascript">
  var y = document.getElementById("sb_comm");
  <?php if($this->session->userdata('status')!="login"){ ?>
    y.className = "genric-btn disable";
    document.getElementById("sb_comm").disabled = true;
    <?php } ?>

    var pathArray = window.location.pathname.split('/');
    var id_ikl = pathArray[5];

    load_iklan_detail();
    function load_iklan_detail(){
      $.ajax({
        url:'<?php echo base_url('index.php/c_pusat/detail/'); ?>'+id_ikl,
        type: 'post',
        dataType: 'json',
        success: function(data){
          console.log(data);
          console.log(data['data_']);
          console.log(data['data_komen']);

          var tombol_laku = '';

          document.getElementById("foto_iklan").src = 'http://localhost/pro/assets/uploads/'+data['data_'][0].FOTO_IKLAN;

          $('[name="judul_ikl"]').text(data['data_'][0].JUDUL_IKLAN);
          $('[name="harga_ikl"]').text(data['data_'][0].HARGA);
          $('[name="tgl_ikl"]').text(data['data_'][0].TANGGAL_IKLAN);
          $('[name="kategori_ikl"]').text(data['data_'][0].KATEGORI);
          if(data['data_'][0].LAKU == '0'){
            $('[name="status_ikl"]').text("Belum Laku");
            if(data['data_'][0].ID_USER == '<?php echo $this->session->userdata('id');?>'){
              tombol_laku += '<a class="genric-btn warning-border circle" onclick="show_modal_laku('+data['data_'][0].ID_IKLAN+')">Laku</a>';
              $('.btn_laku').html(tombol_laku);
            }
          }else{
            $('[name="status_ikl"]').text("Sudah Laku");
            tombol_laku += '';
            $('.btn_laku').html(tombol_laku);
          }
          $('[name="penjual_ikl"]').text(data['data_'][0].USERNAME);
          $('[name="telp_ikl"]').text(data['data_'][0].NO_HP);
          $('[name="deskripsi_ikl"]').text(data['data_'][0].DESKRIPSI);

          //komen
          var html = '';
          var html2 = '';
          var id_user = '';
          for(i=0; i<data['data_komen'].length; i++){
            id_user = data['data_komen'][i].ID_USER;
            html += '<div class="review_item">'+
            '<div class="media">'+

            '<img class="rounded-circle" id="ft_komen" src="http://localhost/pro/assets/uploads/'+data['data_komen'][i].FOTO_USER+'" style="width:15%">'+

            '<div class="col l-2 media-body">'+
            '<h4 name="uname_komen">'+data['data_komen'][i].USERNAME+'</h4>'+
            '<h5 class="" name="tgl_komen">'+data['data_komen'][i].TANGGAL_KOMENTAR+'</h5>'+
            '</div>'+
            '</div>'+
            '<p name="isi_komen">'+data['data_komen'][i].ISI_KOMENTAR+'</p>'+
            '</div>';
            $('.comment_list').html(html);
          }


        }
      });
    }
    function post_komen(){
      var id_iklan = id_ikl;
      var id_user = "<?php echo $this->session->userdata('id');?>";
      var komen = $('[name="komen"]').val();
      console.log(id_iklan);
      console.log(id_user);
      console.log(komen);
      $.ajax({
        url:"<?php echo base_url('index.php/c_komen/buat_komen'); ?>",
        type: "post",
        data:  {id_iklan:id_iklan, id_user:id_user, komen:komen},
        dataType: "json",
        success: function(data){
          console.log("data");
          document.getElementById("komen").value = "";
          load_iklan_detail();
        }
      });
      return false;
    }
    function show_modal_laku(kode_id){
      console.log(kode_id);
      $('#staticModalLaku').modal('show');
      $('[name="kode"]').val(kode_id);
    }
    function upd_status(){
      var iklan_id = $('[name="kode"]').val();
      console.log(iklan_id);
      $.ajax({
        url:"<?php echo base_url('index.php/c_iklan/iklan_laku')?>",
        type: "post",
        data: {iklan_id:iklan_id},
        dataType: "json",
        success: function(data){
          console.log(data);
          $('#staticModalLaku').modal('hide');
          load_iklan_detail();
        }
      });
    }
    </script>
    </html>
