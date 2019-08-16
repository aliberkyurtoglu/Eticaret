<?php  
ob_start();
session_start();

include 'admin/netting/baglan.php';
include 'admin/production/fonksiyon.php';


//Belirli  veriyi seçme işlemi
  $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
    'id' => 0
  ));

  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



  $kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail");
  $kullanicisor->execute(array(
  	'mail' => $_SESSION['userkullanici_mail']
  ));

  $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<title><?php echo $ayarcek['ayar_title']; ?></title>-->
    <meta name="description" content="<?php echo $ayarcek['ayar_aciklama']; ?>">
  	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
  	<meta name="author" content="<?php echo $ayarcek['ayar_yazar']; ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" type="text/css" href="js\product\jquery.fancybox.css?v=2.1.5" media="screen">
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
	<div class="header"><!--Header -->
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4 main-logo">
					<a href="index"><img width="200px" style="margin-top: 10px" src="<?php echo $ayarcek['ayar_logo'] ?>" alt="Site logosu" class="logo img-responsive"></a>
				</div>

				<div class="col-md-8">
					<div class="pushright">
						<div class="top" style="margin-top: 10px;">

						<?php if (!isset($_SESSION['userkullanici_mail'])) { ?>
							<a href="#login" id="reg" class="btn btn-default btn-dark">Giriş Yap<span>-- ya da --</span>Kayıt Ol</a>
						<?php } else { ?>
							<a class="btn btn-default btn-dark">Hoşgeldin <?php echo $kullanicicek['kullanici_adsoyad']; ?></a>
						<?php } ?>


							<div class="regwrap">
								<div class="row">
									<div class="col-md-6 regform">
										<div class="title-widget-bg" id="login">
											<div class="title-widget">Giriş Yap</div>
										</div>
										<form action="admin/netting/islem.php" method="POST" role="form" >
											<div class="form-group">
												<input type="text" class="form-control" name="kullanici_mail" placeholder="Kullanıcı adı">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="kullanici_password" placeholder="Şifre">
											</div>
											<div class="form-group">
												<button type="submit" name="kullanicigiris" class="btn btn-default btn-success btn-sm">Giriş Yap</button>
											</div>
										</form>
									</div>
									<div class="col-md-6">
										<div class="title-widget-bg">
											<div class="title-widget">Kayıt Ol</div>
										</div>
										<p>
											Kolay ve güvenli bir şekilde alışveriş yapmak için kayıt olabilirsiniz
										</p>
										<a href="kaydol"><button class="btn btn-default btn-yellow">Şimdi Kaydol!</button></a>
									</div>
								</div>
							</div>
							<div class="srch-wrap">
								<a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
							</div>
							<div class="srchwrap">
								<div class="row">
									<div class="col-md-12">

										<form action="arama" method="POST" class="form-horizontal" role="form">
											<div class="form-group">
												<!-- <label for="search" class="col-sm-2 control-label">Ara</label> -->
												<button name="arama" class="btn btn-default" style="height: 30px">Ara</button>
												<div class="col-sm-10">
													<input type="text" minlength="3" name="aranan" class="form-control" id="search">
												</div>
											</div>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dashed"></div>
	</div><!--Header -->
	<div class="main-nav"><!--end main-nav -->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>


						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="index" class="active">Anasayfa</a><div class="curve"></div></li>



								<?php  
									$menusor=$db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 5");
									$menusor->execute(array(
										'durum'=> 1
									));
								?>

								<?php  
									while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { 
								?>
								
								<li><a href="
									<?php  
										if (!empty($menucek['menu_url'])) {
											echo $menucek['menu_url'];
										
										} else {
											echo "sayfa-".seo($menucek['menu_ad']);
										}
									?>
								"><?php echo $menucek['menu_ad'] ?></a></li>
								<?php } ?>

							</ul>
						</div>
					</div>
					<div class="col-md-2 machart">
						<?php if (!isset($_SESSION['userkullanici_mail'])) { ?>
						<?php } else { ?>
						<button id="popcart" class="btn btn-default btn-chart btn-sm " style="width: 125px"><span class="mychart">Sepetim</span></button>
						<?php } ?>
						<div class="popcart">
							<table class="table table-condensed popcart-inner">
								<tbody>
									
								<?php
									$kullanici_id=$kullanicicek['kullanici_id'];  
									$sepetsor=$db->prepare("SELECT * FROM sepet WHERE kullanici_id=:id");
									$sepetsor->execute(array(
    									'id' => $kullanici_id
  									));
								?>

								<?php 
									while ($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) { 
										$urun_id=$sepetcek['urun_id'];
										$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
										$urunsor->execute(array(
    										'urun_id' => $urun_id
  										));

										$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);	
										$toplamfiyat+=$uruncek['urun_fiyat'] * $sepetcek['urun_adet'];


										$urun_id = $uruncek['urun_id'];
										$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
										$urunfotosor->execute(array(
											'urun_id' => $urun_id
										));

										$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);	
								?>

									<tr>
									<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
										<td>
											<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><center><img style="height: 60px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></center></a>
										</td>
									<?php } elseif(!isset($urunfotocek['urunfoto_resimyol'])) { ?>
										<td>
											<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><center><img style="height: 60px" src="dimg/foto-yok.jpg" alt="" class="img-responsive"></center></a>
										</td>
									<?php } ?>
									
										<td><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><?php echo substr($uruncek['urun_ad'], 0, 75); ?></a></td>
										<td><?php echo $sepetcek['urun_adet']; ?>X</td>
										<td><?php echo $uruncek['urun_fiyat']; ?></td>
										<!--
										<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
										-->
									</tr>
								<?php } ?>
								</tbody>
							</table>

							<br>	
							<?php  
								$kullanici_id=$kullanicicek['kullanici_id']; 
				
								$sepetsor=$db->prepare("SELECT * FROM sepet WHERE kullanici_id=:id");
								$sepetsor->execute(array(
    								'id' => $kullanici_id
  								));
				
  								$sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC);
							?>

							<?php if (isset($sepetcek['sepet_id'])) { ?>
								<div class="btn-popcart" style="margin-top: -5px">
									<a href="sepet" class="btn btn-default btn-red" style="margin-top: 10px">Sepete Git</a>
								</div>
								<div class="popcart-tot" style="margin-top: -12px">
									<p>
										Toplam<br>
										<span><?php echo $toplamfiyat; ?>₺</span>
									</p>
								</div>
								
							<?php } elseif (!isset($sepetcek['sepet_id'])) { ?>
								
								<div class="col-md-5 col-md-offset-4">
									<div class="animated shake" style="animation-duration: 2s">
										<h4 style="color:black; margin-top: -30px">SEPET BOŞ</h4>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>

					<?php if (isset($_SESSION['userkullanici_mail'])) { ?>
						<ul class="small-menu">
							<li><a href="hesabim" class="myacc">Hesabım</a></li>
							<li><a href="siparislerim" class="myshop">Siparişlerim</a></li>
							<li><a href="cikis" class="mycheck">Güvenli Çıkış</a></li>
						</ul>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div><!--end main-nav -->