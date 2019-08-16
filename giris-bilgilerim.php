<?php include 'header.php'; ?>

<?php  
	$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail");
  		$kullanicisor->execute(array(
  			'mail' => $_SESSION['userkullanici_mail']
  		));
  	$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>

<header>
  <title>Giriş Bilgilerim | Sanal Sepetim</title>
</header>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-5">
							<div class="bread"><a href="index">Anasayfa</a> &rsaquo; <a href="hesabim">Hesabım</a> &rsaquo; Giriş Bilgilerim</div>
							<div class="bigtitle">Giriş Bilgilerim</div>
							<p>Giriş bilgilerinizi buradan düzenleyebilirsiniz.</p>
						</div>
						
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">			
			<div class="col-md-3" style="margin-right: 20px"><!--sidebar-->
				<div class="title-bg">
					<div class="title">Bilgilerim</div>
				</div>


				
	
				<div class="categorybox">
					<ul>
						<li><a href="hesabim">Hesabım</a></li>
						<li><strong>Giriş Bilgilerim</strong></li>
					</ul>
				</div>
			</div><!--sidebar-->

			<form action="admin/netting/islem.php" method="POST" role="form" style="margin-top:40px">
				<div class="col-md-5">

				<?php if ($_GET['durum']=="farklisifre") { ?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
				</div>

				<?php } elseif ($_GET['durum']=="eksiksifre") { ?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
				</div>

				<?php } elseif ($_GET['durum']=="sifreleruyusmuyor") { ?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Şifreler uyuşmuyor.
				</div>

				<?php } elseif ($_GET['durum']=="sifredegisti") { ?>

				<div class="alert alert-success">
					<strong>Başarılı!</strong> Şifreniz başarıyla değişti
				</div>

				<?php } ?>

					<div class="form-group">
						<div class="col-sm-12" style="padding-bottom: 3px">
							E-posta adresiniz<input type="email" class="form-control" readonly="" required="" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>">
						</div>
					</div>

					<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

					<div class="form-group dob">
						<div class="col-sm-12">
							Şuan ki şifreniz<input type="password" required="" class="form-control" name="kullanici_eskipassword" placeholder="Eski Şifrenizi Giriniz" ">
						</div>
					</div>

					<div class="form-group dob">
						<div class="col-sm-6" style="margin-top: 10px">
						Yeni Şifreniz<input type="password" class="form-control" name="kullanici_passwordone"    placeholder="Yeni Şifrenizi Giriniz">
						</div>
						<div class="col-sm-6" style="margin-top: 10px">
						Yeni Şifreniz Tekrar<input type="password" class="form-control" name="kullanici_passwordtwo"   placeholder="Yeni Şifrenizi Tekrar Giriniz">
						</div>
					</div>
					
					<button style="margin-top: 10px; margin-left: 278px" type="submit" name="kullanicisifreguncelle" class="btn btn-default btn-success">Güncelle</button>
				</div>
			</form> 
		</div>
		

		

		
			

				
				<div class="ads">
					<a href="product.htm"><img src="images\ads.png" class="img-responsive" alt=""></a>
				</div>	
			
		<div class="spacer"></div>
	</div>

<?php include 'footer.php'; ?>