<?php  
ob_start();
session_start();

include '../netting/baglan.php';
include 'fonksiyon.php';

//Belirli  veriyi seçme işlemi
  $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
    'id' => 0
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
  $kullanicisor->execute(array(
    'mail' => $_SESSION['kullanici_mail']
  ));
  $say=$kullanicisor->rowCount();
  $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


  //KULLANICI MAİL DOLU DEĞİLSE 1.yöntem 
  /*
  if (!isset($_SESSION['kullanici_mail'])) { 
      
  }
  */

  //2. ve garanti yöntem
  if ($say==0) {
    header("Location:login.php?durum=izinsiz");
    exit;
  }

  

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- DROPZONE.JS -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <script src=../vendors/dropzone/dist/min/dropzone.min.js></script>
    <!-- CK EDİTÖR -->
    <script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>

    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index" class="site_title"><i class="fa fa-paw"></i> <span>Admin Paneli</span></a>
              <a href="/Eticaret/" target="blank" style="margin-left: 20px; color:white"><span>Web Sitesine Dön</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="
                <?php if($_SESSION['kullanici_mail']=="aliberkyurtoglu@gmail.com") { 
                      echo "images/aliberkyurtoglu.jpg";
                      } elseif($_SESSION['kullanici_mail']=="sefactnds@gmail.com"){
                      echo "images/sefactnds.jpg";
                      }
                ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldin,</span>
                <h2><?php echo $kullanicicek['kullanici_adsoyad']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menüler</h3>
                <ul class="nav side-menu">
                  <li><a href="index"><i class="fa fa-home"></i> Anasayfa </a>

                  <li><a><i class="fa fa-cogs"></i>Site Ayarları<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="genel-ayar">Genel Ayarlar</a></li>
                      <li><a href="iletisim-ayarlar">İletişim Ayarları</a></li>
                      <li><a href="api-ayarlar">API Ayarları</a></li>
                      <li><a href="sosyal-ayarlar">Sosyal Ağ Ayarları</a></li>
                      <li><a href="smtp-ayarlar">SMTP Mail Ayarları</a></li>
                    </ul>
                  </li>
                  
                  <li><a href="hakkimizda"><i class="fa fa-info"></i> Hakkımızda </a>
                  <li><a href="kullanici"><i class="fa fa-user"></i> Kullanıcılar </a>
                  <li><a href="kategori"><i class="fa fa-th-list"></i>Ürün Kategorileri</a>
                  <li><a href="urun"><i class="fa fa-shopping-basket"></i> Ürünler </a>
                  <li><a href="menu"><i class="fa fa-list"></i> Menüler </a>               
                  <li><a href="slider"><i class="fa fa-image"></i> Slider </a>
                  <li><a href="havale"><i class="fa fa-bank"></i> Havale - EFT </a>
                  <li><a href="siparisler"><i class="fa fa-tag"></i>Siparişler</a></li>
                  <li><a href="yorum"><i class="fa fa-comments"></i> Yorum Onayı </a> 


                  

                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Ayarlar">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tam Ekran">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Kilitle">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Çıkış Yap">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/pp.jpg" alt=""><?php echo $kullanicicek['kullanici_adsoyad']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Profil Bilgilerim</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Güvenli Çıkış Yap </a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 dakika önce</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Tüm bildirimleri göster</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->