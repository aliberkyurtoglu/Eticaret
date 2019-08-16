
<?php include 'header.php' ?>

<?php  
	$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail");
  		$kullanicisor->execute(array(
  			'mail' => $_SESSION['userkullanici_mail']
  		));
  	$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>

<header>
  <title>Hesabım | Sanal Sepetim</title>
</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-5">
							<div class="bread"><a href="index">Anasayfa</a> &rsaquo; Hesabım</div>
							<div class="bigtitle">Hesabım</div>
							<p>Kişisel bilgilerinizi buradan düzenleyebilirsiniz.</p>
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
						<li><strong>Hesabım</strong></a></li>
						<li><a href="giris-bilgilerim">Giriş Bilgilerim</a></li>
					</ul>
				</div>	
			</div><!--sidebar-->



			<form action="admin/netting/islem.php" method="POST" role="form" style="margin-top:40px">
				<div class="col-md-5">

				<?php if ($_GET['durum']=="ok") { ?>

				<div class="alert alert-success">
					<strong>Başarılı!</strong> Bilgileriniz güncellenmiştir.
				</div>

				<?php } elseif ($_GET['durum']=="no") { ?>
				<div class="alert alert-danger">
					<strong>Hata!</strong> Lütfen bilgilerinizi kontrol edin.
				</div>
				<?php  } ?>

					
					<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

					<div class="form-group dob">
						<div class="col-md-12 col-sm-12" style="padding-bottom: 3px">
							TC Kimlik No<input pattern="[0-9]{11}" title="11 haneli TC No giriniz" type="text" class="form-control" name="kullanici_tc" placeholder="(Opsiyonel)" value="<?php echo $kullanicicek['kullanici_tc'] ?>">
						</div>
					</div>

					<div class="form-group dob">
						<div class="col-md-12 col-sm-12" style="padding-bottom: 3px">
							Cep Telefon No<input pattern="[0-9 ]{13}" title="533 335 35 55 şeklinde giriniz" type="tel" class="form-control" name="kullanici_gsm" placeholder="(Opsiyonel)" value="<?php echo $kullanicicek['kullanici_gsm'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12" style="padding-bottom: 3px">
							Ad Soyad*<input type="text" class="form-control" required="" name="kullanici_adsoyad" placeholder="(Zorunlu)" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12" style="padding-bottom: 3px">
							Adres*<input type="text" class="form-control" required="" name="kullanici_adres" placeholder="(Zorunlu)" value="<?php echo $kullanicicek['kullanici_adres'] ?>">
						</div>
					</div>

					<div class="form-group dob">
						<div class="col-md-6 col-sm-6" style="padding-bottom: 3px">
							İl*<input type="text" required="" class="form-control" name="kullanici_il" placeholder="(Zorunlu)" value="<?php echo $kullanicicek['kullanici_il'] ?>">
						</div>
					</div>

					<div class="form-group dob">
						<div class="col-md-6 col-sm-6" style="padding-bottom: 3px">
							İlçe*<input type="text" required="" class="form-control" name="kullanici_ilce" placeholder="(Zorunlu)" value="<?php echo $kullanicicek['kullanici_ilce'] ?>">
						</div>
					</div>

					<div class="form-group dob">
						<div class="col-md-6 col-sm-6" style="padding-bottom: 3px">
							Posta Kodu*<input type="text" required="" class="form-control" name="kullanici_pk" placeholder="(Zorunlu)" value="<?php echo $kullanicicek['kullanici_pk'] ?>">
						</div>
					</div>
					
					<button style="margin-top: 10px; margin-left: 278px" type="submit" name="kullanicihesabimguncelle" class="btn btn-default btn-success">Güncelle</button>
				</div>
			</form> 
		</div>
		<div class="spacer"></div>
	</div>
	
<?php include 'footer.php' ?>
