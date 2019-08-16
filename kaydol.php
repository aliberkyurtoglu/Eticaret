<?php include 'header.php'; ?>



<header>
  <title>Kaydol | Sanal Sepetim</title>
</header>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Kullanıcı Kaydı</div>
							<p style="color:blue">Hızlı bir kayıt işlemi için adres ve ödeme bilgileriniz bu sayfada istenmiyor. Fakat kayıt işleminden sonra 'Hesabım' bölümünden bu bilgileri güncellemelisiniz. </p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="admin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Kayıt Bilgileri</div>
				</div>

				<?php if ($_GET['durum']=="farklisifre") { ?>
				<div class="alert alert-danger">
					<strong>Hata!</strong> Girdiğiniz şifreler birbiriyle uyuşmuyor.
				</div>
					
				<?php } elseif ($_GET['durum']=="eksiksifre") { ?>
				<div class="alert alert-danger">
					<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
				</div>
					
				<?php } elseif ($_GET['durum']=="kayitlikullanici") { ?>
				<div class="alert alert-danger">
					<strong>Hata!</strong> Bu mail daha önce kullanılmıştır.
				</div>
					
				<?php } elseif ($_GET['durum']=="basarisiz") { ?>
				<div class="alert alert-danger">
					<strong>Hata!</strong> Kayıt yapılamadı. Sistem yöneticisine danışınız.
				</div>

				<?php } elseif ($_GET['durum']=="basarili") { ?>
				<div class="alert alert-success">
					<strong>Kayıt Başarılı!</strong> Giriş yapabilirsiniz.
				</div>
					
				<?php } ?>


				


				<div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="text" class="form-control"  required="" name="kullanici_adsoyad" placeholder="Ad ve Soyadınızı Giriniz.">
					</div>
					
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" class="form-control" required="" name="kullanici_mail"  placeholder="Mail Adresinizi Giriniz.">
						<p style="font-size: 12px; color:red; margin-bottom: -5px">Dikkat! Mail adresiniz kullanıcı adınız olacaktır.</p>
					</div>
				</div>
				<div class="form-group dob">
					<div class="col-sm-6">
						<input type="password" class="form-control" name="kullanici_passwordone"    placeholder="Şifrenizi Giriniz.">
						<p style="font-size: 12px; color:red;">Minimum 6 karakter.</p>
					</div>
					<div class="col-sm-6">
						<input type="password" class="form-control" name="kullanici_passwordtwo"   placeholder="Şifrenizi Tekrar Giriniz.">
					</div>
				</div>



				<button type="submit" name="kullanicikaydet" class="btn btn-default btn-success">Kayıt İşlemini Yap</button>
			</div>
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Şifrenizi mi Unuttunuz?</div>
				</div>
				<center><img width="400" src="http://www.emrahyuksel.com.tr/dimg/sifremi-unuttum.jpg"></center>
			</div>
			
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php' ?>