<?php
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';


if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password,
		'yetki' => 5
		));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../production/index.php");
		exit;

	} else {

		header("Location:../production/login.php?durum=no");
		exit;
	}
}



if (isset($_POST['kullaniciduzenle'])) {
	
	$kullanici_id=$_POST['kullanici_id'];
	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_tc=:kullanici_tc,
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_durum=:kullanici_durum
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_tc' => $_POST['kullanici_tc'],
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_durum' => $_POST['kullanici_durum']
		));


	if ($update) {
		header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");
		exit;

	} else {
		header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");
		exit;
	}
}



if ($_GET['kullanicisil']=="ok") {
	$sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array(
		'id'=> $_GET['kullanici_id']
	));

	if ($kontrol) {
		header("Location: ../production/kullanici.php?sil=ok");
		exit;

	} else{
		header("Location: ../production/kullanici.php?sil=no");
		exit;
	}
}


if (isset($_POST['genelayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author']
		));


	if ($update) {
		header("Location:../production/genel-ayar.php?durum=ok");
		exit;

	} else {
		header("Location:../production/genel-ayar.php?durum=no");
		exit;
	}
}



if (isset($_POST['iletisimayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai']
		));


	if ($update) {

		header("Location:../production/iletisim-ayarlar.php?durum=ok");
		exit;

	} else {

		header("Location:../production/iletisim-ayarlar.php?durum=no");
		exit;
	}
}


if (isset($_POST['apiayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		
		ayar_analystic=:ayar_analystic,
		ayar_maps=:ayar_maps,
		ayar_zopim=:ayar_zopim
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'ayar_analystic' => $_POST['ayar_analystic'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_zopim' => $_POST['ayar_zopim']
		));


	if ($update) {
		header("Location:../production/api-ayarlar.php?durum=ok");
		exit;

	} else {
		header("Location:../production/api-ayarlar.php?durum=no");
		exit;
	}
}


if (isset($_POST['hakkimizdakaydet'])) {
	
	//Tablo güncelleme işlemi kodları...

	/*

	copy paste işlemlerinde tablo ve işaretli satır isminin değiştirildiğinden emin olun!!!

	*/
	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_video=:hakkimizda_video,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_misyon=:hakkimizda_misyon
		WHERE hakkimizda_id=0");

	$update=$ayarkaydet->execute(array(
		'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
		'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
		'hakkimizda_video' => $_POST['hakkimizda_video'],
		'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
		'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
		));


	if ($update) {
		header("Location:../production/hakkimizda.php?durum=ok");
		exit;

	} else {
		header("Location:../production/hakkimizda.php?durum=no");
		exit;
	}	
}





if (isset($_POST['mailayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:ayar_smtphost,
		ayar_smtpuser=:ayar_smtpuser,
		ayar_smtppassword=:ayar_smtppassword,
		ayar_smtpport=:ayar_smtpport
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_smtphost' => $_POST['ayar_smtphost'],
		'ayar_smtpuser' => $_POST['ayar_smtpuser'],
		'ayar_smtppassword' => $_POST['ayar_smtppassword'],
		'ayar_smtpport' => $_POST['ayar_smtpport']
		));


	if ($update) {
		header("Location:../production/smtp-ayarlar.php?durum=ok");
		exit;

	} else {
		header("Location:../production/smtp-ayarlar.php?durum=no");
		exit;
	}	
}



if (isset($_POST['sosyalayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_google=:ayar_google,
		ayar_youtube=:ayar_youtube
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_google' => $_POST['ayar_google'],
		'ayar_youtube' => $_POST['ayar_youtube']
		));


	if ($update) {
		header("Location:../production/sosyal-ayarlar.php?durum=ok");
		exit;

	} else {
		header("Location:../production/sosyal-ayarlar.php?durum=no");
		exit;
	}	
}








	/*MENÜ İŞLEMLERİ BAŞLANGIÇ*/
if (isset($_POST['menuekle'])) {
	
	//fonksiyon.php'yi dahil edip seo olayını hallettik.
	$menu_seourl=seo($_POST['menu_ad']);

	$ayarekle=$db->prepare("INSERT INTO menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		");

	$insert=$ayarekle->execute(array(
		'menu_ad' => $_POST['menu_ad'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_url' => $_POST['menu_url'],
		'menu_sira' => $_POST['menu_sira'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
		));


	if ($insert) {
		header("Location:../production/menu.php?durum=ok");
		exit;

	} else {
		header("Location:../production/menu.php?durum=no");
		exit;
	}	
}





if (isset($_POST['menuduzenle'])) {
	
	$menu_id=$_POST['menu_id'];
	//fonksiyon.php'yi dahil edip seo olayını hallettik.
	$menu_seourl=seo($_POST['menu_ad']);

	$ayarkaydet=$db->prepare("UPDATE menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		WHERE menu_id={$_POST['menu_id']}");

	$update=$ayarkaydet->execute(array(
		'menu_ad' => $_POST['menu_ad'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_url' => $_POST['menu_url'],
		'menu_sira' => $_POST['menu_sira'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
		));


	if ($update) {
		header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");
		exit;

	} else {
		header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");
		exit;
	}	
}




if ($_GET['menusil']=="ok") {
	$sil=$db->prepare("DELETE from menu where menu_id=:id");
	$kontrol=$sil->execute(array(
		'id'=> $_GET['menu_id']
	));

	if ($kontrol) {
		header("Location: ../production/menu.php?sil=ok");
		exit;

	} else{
		header("Location: ../production/menu.php?sil=no");
		exit;
	}
}






if ($_GET['menu_durum']=="ok") {

	$duzenle=$db->prepare("UPDATE menu SET	
		menu_durum=:menu_durum
		WHERE menu_id={$_GET['menu_id']}");

	$guncelle=$duzenle->execute(array(
		'menu_durum' => $_GET['menu_dur']
	));

	if ($guncelle) {
		Header("Location:../production/menu.php?durum=guncellendi");
	} else {
		Header("Location:../production/menu.php?durum=no");
	}
}

	/*MENÜ İŞLEMLERİ BİTİŞ*/
















	/* LOGO EKLEME, DÜZENLEME İŞLEMİ BAŞLANGIÇ */
if (isset($_POST['logoduzenle'])) {

	$uploads_dir='../../dimg';

	@$tmp_name= $_FILES['ayar_logo']["tmp_name"];
	@$name= $_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		where ayar_id=0 ");
	$update=$duzenle->execute(array(
		'logo'=>$refimgyol
	));

	if ($update) {
		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");
		header("Location:../production/genel-ayar.php?durum=ok");
		exit;

	}else {
		header("Location:../production/genel-ayar.php?durum=no");
		exit;
	}
}
	/* LOGO EKLEME, DÜZENLEME İŞLEMİ BİTİŞ */










		/* SLİDER İŞLEMLERİ BAŞLANGIÇ */
			/* SLİDER EKLEME */
if (isset($_POST['sliderkaydet'])) {
	$uploads_dir='../../dimg/slider';
	@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	@$name=$_FILES['slider_resimyol']["name"];
	//Resmin isminin benzersiz olması için;
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:slider_ad,
		slider_aciklama=:slider_aciklama,
		slider_sira=:slider_sira,
		slider_link=:slider_link,
		slider_durum=:slider_durum,
		slider_resimyol=:slider_resimyol
		");
	$insert=$kaydet->execute(array(
		'slider_ad' => $_POST['slider_ad'],
		'slider_aciklama' => $_POST['slider_aciklama'],
		'slider_sira' => $_POST['slider_sira'],
		'slider_link' => $_POST['slider_link'],
		'slider_durum' => $_POST['slider_durum'],
		'slider_resimyol' => $refimgyol
	));

	if($insert)
	{
		Header("Location:../production/slider.php?durum=ok");

	} else{
		Header("Location:../production/slider.php?durum=no");

	}
}













			/* SLİDER DÜZENLEME */
if (isset($_POST['sliderduzenle'])) {

	if($_FILES['slider_resimyol']["size"] > 0)  { 
		$uploads_dir = '../../dimg/slider';
		@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
		@$name = $_FILES['slider_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol	
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum'],
			'resimyol' => $refimgyol,
			));
		

		$slider_id=$_POST['slider_id'];

		if ($update) {

			$resimsilunlink=$_POST['slider_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}


	} else {

		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum		
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum']
			));

		$slider_id=$_POST['slider_id'];

		if ($update) {

			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}
	}

}
		/* SLİDER DÜZENLEME BİTİŞ */












		/* SLİDER SİLME BAŞLANGIÇ */

if ($_GET['slidersil']=="ok") {
	$sil=$db->prepare("DELETE from slider where slider_id=:id");
	$kontrol=$sil->execute(array(
		'id'=> $_GET['slider_id']
	));

	if ($kontrol) {
		$resimsilunlink=$_GET['slider_resimyol'];
		unlink("../../$resimsilunlink");
		header("Location: ../production/slider.php?sil=ok");
		exit;

	} else{
		header("Location: ../production/slider.php?sil=no");
		exit;
	}
}
		/* SLİDER SİLME BİTİŞ */











if ($_GET['slider_durum']=="ok") {

	$duzenle=$db->prepare("UPDATE slider SET	
		slider_durum=:slider_durum
		WHERE slider_id={$_GET['slider_id']}");

	$guncelle=$duzenle->execute(array(
		'slider_durum' => $_GET['slider_dur']
	));

	if ($guncelle) {
		Header("Location:../production/slider.php?durum=guncellendi");
	} else {
		Header("Location:../production/slider.php?durum=no");
	}
}
		/* SLİDER İŞLEMLERİ BİTİŞ */











				/*         					KULLANICI İŞLEMLERİ BAŞLANGIÇ								*/

		/* KULLANICI KAYIT İŞLEMLİ BAŞLANGIÇ */

if (isset($_POST['kullanicikaydet'])) {

	$kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']); //htmlspecialchars zararlı script girilmesini önler.
	$kullanici_mail=htmlspecialchars($_POST['kullanici_mail']);
	$kullanici_passwordone=htmlspecialchars($_POST['kullanici_passwordone']);
	$kullanici_passwordtwo=htmlspecialchars($_POST['kullanici_passwordtwo']);

	if ($kullanici_passwordone==$kullanici_passwordtwo) {
		if (strlen($kullanici_passwordone)>=6) {
			$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
			));

			//kullanicisor değişkeninde dönen satır sayısını say değişkenine attık.
			$say=$kullanicisor->rowCount();
			
			if ($say==0) {
				$password=md5($kullanici_passwordone);
				$kullanici_yetki=1;

				//Kayıt işlemi başlıyor.
				$kullanicikaydet=$db->prepare("INSERT INTO kullanici SET
					kullanici_adsoyad=:kullanici_adsoyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password,
					kullanici_yetki=:kullanici_yetki
				");
				$insert=$kullanicikaydet->execute(array(
					'kullanici_adsoyad' => $kullanici_adsoyad,
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password,
					'kullanici_yetki' => $kullanici_yetki
				));

				if ($insert) {
					header("Location:../../kaydol.php?durum=basarili");
				} else {
					header("Location:../../kaydol.php?durum=basarisiz");
				}

			} else {
				header("Location:../../kaydol.php?durum=kayitlikullanici");
			}

		} else{
			header("Location:../../kaydol.php?durum=eksiksifre");
		}

	} else {
		header("Location:../../kaydol.php?durum=farklisifre");
	}
}
		/* KULLANICI KAYIT İŞLEMLİ BİTİŞ */














		/* KULLANICI GİRİŞ İŞLEMİ BAŞLANGIÇ */
if (isset($_POST['kullanicigiris'])) {
	$kullanici_mail=htmlspecialchars($_POST['kullanici_mail']);
	$kullanici_password=htmlspecialchars(md5($_POST['kullanici_password']));

	$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail and kullanici_yetki=:yetki and kullanici_password=:password and kullanici_durum=:durum");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'yetki' => 1,
		'password' => $kullanici_password,
		'durum' => 1
	));

	$say=$kullanicisor->rowCount();

	if ($say==1) {
		$_SESSION['userkullanici_mail']=$kullanici_mail;
		header("Location:../../");
		exit;
		
	} else{
		header("Location:../../?durum=basarisizgiris");
	}
}
		/* KULLANICI GİRİŞ İŞLEMİ BİTİŞ */














		/* KULLANICI GİRİŞ BİLGİLERİ DÜZENLEME BAŞLANGIÇ */
	if (isset($_POST['kullanicisifreguncelle'])) {

	$kullanici_eskipassword=trim($_POST['kullanici_eskipassword']); 
	$kullanici_passwordone=trim($_POST['kullanici_passwordone']);
	$kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']);

	$kullanici_password=md5($kullanici_eskipassword);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_password=:password");
	$kullanicisor->execute(array(
		'password' => $kullanici_password
		));

			//dönen satır sayısını belirtir
	$say=$kullanicisor->rowCount();

	if ($say==0) {
		header("Location:../../giris-bilgilerim?durum=eskiksifrehata");
	} else {

	//eski şifre doğruysa başla
		if ($kullanici_passwordone==$kullanici_passwordtwo) {

			if (strlen($kullanici_passwordone)>=6) {
				$password=md5($kullanici_passwordone);
				$kullanici_yetki=1;

				$kullanicikaydet=$db->prepare("UPDATE kullanici SET
					kullanici_password=:kullanici_password
					WHERE kullanici_id={$_POST['kullanici_id']}");
				
				$insert=$kullanicikaydet->execute(array(
					'kullanici_password' => $password
					));

				if ($insert) {
					header("Location:../../giris-bilgilerim?durum=sifredegisti");
				} else {
					header("Location:../../giris-bilgilerim?durum=no");
				}
	//Bitiş
			} else {
				header("Location:../../giris-bilgilerim?durum=eksiksifre");
			}

		} else {
			header("Location:../../giris-bilgilerim?durum=sifreleruyusmuyor");
			exit;
		}
	}
	exit;

	if ($update) {
		header("Location:../../giris-bilgilerim?durum=ok");
	} else {
		header("Location:../../giris-bilgilerim?durum=no");
	}

}
		/* KULLANICI GİRİŞ BİLGİLERİ DÜZENLEME BİTİŞ */





if ($_GET['kullanici_durum']=="ok") {

	$duzenle=$db->prepare("UPDATE kullanici SET	
		kullanici_durum=:kullanici_durum
		WHERE kullanici_id={$_GET['kullanici_id']}");

	$guncelle=$duzenle->execute(array(
		'kullanici_durum' => $_GET['kullanici_dur']
	));

	if ($guncelle) {
		Header("Location:../production/kullanici.php?durum=guncellendi");
	} else {
		Header("Location:../production/kullanici.php?durum=no");
	}
}








if (isset($_POST['kullanicihesabimguncelle'])) {
	
	$kullanici_id=$_POST['kullanici_id'];
	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_tc=:kullanici_tc,
		kullanici_gsm=:kullanici_gsm,
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_adres=:kullanici_adres,
		kullanici_il=:kullanici_il,
		kullanici_ilce=:kullanici_ilce,
		kullanici_pk=:kullanici_pk
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_tc' => $_POST['kullanici_tc'],
		'kullanici_gsm' => $_POST['kullanici_gsm'],
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_adres' => $_POST['kullanici_adres'],
		'kullanici_il' => $_POST['kullanici_il'],
		'kullanici_ilce' => $_POST['kullanici_ilce'],
		'kullanici_pk' => $_POST['kullanici_pk']
		));


	if ($update) {
		header("Location:../../hesabim.php?durum=ok");
		exit;

	} else {
		header("Location:../../hesabim.php?durum=no");
		exit;
	}
}

		/*                                    KULLANICI İŞLEMLERİ BİTİŞ                     */















		/* KATEGORİ İŞLEMLERİ BAŞLANGIÇ */
if (isset($_POST['kategoriekle'])) {
	
	//fonksiyon.php'yi dahil edip seo olayını hallettik.
	$kategori_seourl=seo($_POST['kategori_ad']);

	$kaydet=$db->prepare("INSERT INTO kategori SET
		kategori_ad=:kategori_ad,
		kategori_sira=:kategori_sira,
		kategori_seourl=:seourl,
		kategori_durum=:kategori_durum
		");

	$insert=$kaydet->execute(array(
		'kategori_ad' => $_POST['kategori_ad'],
		'kategori_sira' => $_POST['kategori_sira'],
		'seourl' => $kategori_seourl,
		'kategori_durum' => $_POST['kategori_durum']
		));


	if ($insert) {
		header("Location:../production/kategori.php?durum=ok");
		exit;

	} else {
		header("Location:../production/kategori.php?durum=no");
		exit;
	}	
}










if (isset($_POST['kategoriduzenle'])) {
	$kategori_id=$_POST['kategori_id'];
	$kategori_seourl=seo($_POST['kategori_ad']);

	$kaydet=$db->prepare("UPDATE kategori SET
		kategori_ad=:ad,
		kategori_durum=:durum,
		kategori_seourl=:seourl,
		kategori_sira=:sira
		WHERE kategori_id={$_POST['kategori_id']}
	");

	$update=$kaydet->execute(array(
		'ad' => $_POST['kategori_ad'],
		'durum' => $_POST['kategori_durum'],
		'seourl' => $kategori_seourl,
		'sira' => $_POST['kategori_sira']
	));

	if ($update) {
		Header("Location:../production/kategori-duzenle?durum=ok&kategori_id=$kategori_id");
	} else {
		Header("Location:../production/kategori-duzenle?durum=no&kategori_id=$kategori_id");
	}
}






if ($_GET['kategorisil']=="ok") {
	$sil=$db->prepare("DELETE from kategori where kategori_id=:id");
	$kontrol=$sil->execute(array(
		'id'=> $_GET['kategori_id']
	));

	if ($kontrol) {
		header("Location: ../production/kategori?sil=ok");
		exit;

	} else{
		header("Location: ../production/kategori?sil=no");
		exit;
	}
}







if ($_GET['kategori_durum']=="ok") {

	$duzenle=$db->prepare("UPDATE kategori SET	
		kategori_durum=:kategori_durum
		WHERE kategori_id={$_GET['kategori_id']}");

	$guncelle=$duzenle->execute(array(
		'kategori_durum' => $_GET['kategori_dur']
	));

	if ($guncelle) {
		Header("Location:../production/kategori.php?durum=guncellendi");
	} else {
		Header("Location:../production/kategori.php?durum=no");
	}
}
		/* KATEGORİ İŞLEMLERİ BİTİŞ */




















		/* ÜRÜN İŞLEMLERİ BAŞLANGIÇ */
if (isset($_POST['urunekle'])) {
	
	//fonksiyon.php'yi dahil edip seo olayını hallettik.
	$urun_seourl=seo($_POST['urun_ad']);

	$kaydet=$db->prepare("INSERT INTO urun SET
		kategori_id=:kategori_id,
		urun_ad=:urun_ad,
		urun_keyword=:urun_keyword,
		urun_detay=:urun_detay,	
		urun_seourl=:urun_seourl,
		urun_fiyat=:urun_fiyat,
		urun_stok=:urun_stok,
		urun_durum=:urun_durum
		");

	$insert=$kaydet->execute(array(
		'kategori_id' => $_POST['kategori_id'],
		'urun_ad' => $_POST['urun_ad'],
		'urun_keyword' => $_POST['urun_keyword'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_seourl' => $urun_seourl,
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_stok' => $_POST['urun_stok'],
		'urun_durum' => $_POST['urun_durum']
		));


	if ($insert) {
		header("Location:../production/urun.php?durum=ok");
		exit;

	} else {
		header("Location:../production/urun.php?durum=no");
		exit;
	}	
}







if (isset($_POST['urunduzenle'])) {
	
	//fonksiyon.php'yi dahil edip seo olayını hallettik.
	$urun_id=$_POST['urun_id'];
	$urun_seourl=seo($_POST['urun_ad']);

	$kaydet=$db->prepare("UPDATE urun SET
		kategori_id=:kategori_id,
		urun_ad=:urun_ad,
		urun_keyword=:urun_keyword,
		urun_detay=:urun_detay,	
		urun_seourl=:urun_seourl,
		urun_fiyat=:urun_fiyat,
		urun_stok=:urun_stok,
		urun_durum=:urun_durum,
		urun_onecikar=:urun_onecikar
		WHERE urun_id={$_POST['urun_id']}
		");

	$update=$kaydet->execute(array(
		'kategori_id' => $_POST['kategori_id'],
		'urun_ad' => $_POST['urun_ad'],
		'urun_keyword' => $_POST['urun_keyword'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_seourl' => $urun_seourl,
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_stok' => $_POST['urun_stok'],
		'urun_durum' => $_POST['urun_durum'],
		'urun_onecikar' => $_POST['urun_onecikar']
		));


	if ($update) {
		Header("Location:../production/urun-duzenle?durum=ok&urun_id=$urun_id");
	} else {
		Header("Location:../production/urun-duzenle?durum=no&urun_id=$urun_id");
	}
}






if ($_GET['urunsil']=="ok") {
	$sil=$db->prepare("DELETE from urun where urun_id=:id");
	$kontrol=$sil->execute(array(
		'id'=> $_GET['urun_id']
	));

	if ($kontrol) {
		header("Location: ../production/urun?sil=ok");
		exit;

	} else{
		header("Location: ../production/urun?sil=no");
		exit;
	}
}








if ($_GET['urun_onecikar']=="ok") {

	$duzenle=$db->prepare("UPDATE urun SET	
		urun_onecikar=:urun_onecikar
		WHERE urun_id={$_GET['urun_id']}");

	$update=$duzenle->execute(array(
		'urun_onecikar' => $_GET['urun_one']
	));

	if ($update) {
		Header("Location:../production/urun.php?urun_onecikar=guncellendi");
	} else {
		Header("Location:../production/urun.php?urun_onecikar=no");
	}
}



if ($_GET['urun_durum']=="ok") {

	$duzenle=$db->prepare("UPDATE urun SET	
		urun_durum=:urun_durum
		WHERE urun_id={$_GET['urun_id']}");

	$guncelle=$duzenle->execute(array(
		'urun_durum' => $_GET['urun_dur']
	));

	if ($guncelle) {
		Header("Location:../production/urun.php?durum=guncellendi");
	} else {
		Header("Location:../production/urun.php?durum=no");
	}
}
		/* ÜRÜN İŞLEMLERİ BİTİŞ */












		/* YORUM İŞLEMLERİ BAŞLANGIÇ */
if (isset($_POST['yorumgonder'])) {

	$gelen_url=$_POST['gelen_url'];

	$ayarekle=$db->prepare("INSERT INTO yorumlar SET
		yorum_detay=:yorum_detay,
		kullanici_id=:kullanici_id,
		urun_id=:urun_id
		");

	$insert=$ayarekle->execute(array(
		'yorum_detay' => $_POST['yorum_detay'],
		'kullanici_id' => $_POST['kullanici_id'],
		'urun_id' => $_POST['urun_id']
		));


	if ($insert) {
		header("Location:$gelen_url?durum=ok");

	} else {
		header("Location:$gelen_url?durum=no");
	}	
}







if ($_GET['yorum_onay']=="ok") {

	
	$duzenle=$db->prepare("UPDATE yorumlar SET
		yorum_onay=:yorum_onay
		WHERE yorum_id={$_GET['yorum_id']}");
	
	$update=$duzenle->execute(array(
		'yorum_onay' => $_GET['yorum_one']
		));

	if ($update) {
		Header("Location:../production/yorum.php?durum=ok");
	} else {
		Header("Location:../production/yorum.php?durum=no");
	}

}







if ($_GET['yorumsil']=="ok") {
	
	$sil=$db->prepare("DELETE from yorumlar where yorum_id=:yorum_id");
	$kontrol=$sil->execute(array(
		'yorum_id' => $_GET['yorum_id']
		));

	if ($kontrol) {

		
		Header("Location:../production/yorum.php?durum=ok");

	} else {

		Header("Location:../production/yorum.php?durum=no");
	}

}
		/* YORUM İŞLEMLERİ BİTİŞ */
















		/* SEPET İŞLEMLERİ BAŞLANGIÇ */
if (isset($_POST['sepeteekle'])) {

	$gelen_url=$_POST['gelen_url'];

	$ayarekle=$db->prepare("INSERT INTO sepet SET
		urun_adet=:urun_adet,
		kullanici_id=:kullanici_id,
		urun_id=:urun_id
		");

	$insert=$ayarekle->execute(array(
		'urun_adet' => $_POST['urun_adet'],
		'kullanici_id' => $_POST['kullanici_id'],
		'urun_id' => $_POST['urun_id']
		));


	if ($insert) {
		header("Location:$gelen_url?sepet=ok");
		exit;
	} else {
		header("Location:$gelen_url?sepet=no");
		exit;
	}	
}












if (isset($_POST['sepetguncelle'])) {
	
	$sepet_id=$_POST['sepet_id'];
	$urun_id=$_POST['urun_id'];

	$gelen_url=$_POST['gelen_url'];

	$kaydet=$db->prepare("UPDATE sepet SET
		urun_adet=:urun_adet
		WHERE sepet_id={$_POST['sepet_id']} AND urun_id={$_POST['urun_id']}
		");

	$update=$kaydet->execute(array(
		'urun_adet' => $_POST['urun_adet']
		));


	if ($update) {
		Header("Location:$gelen_url");
	} else {
		Header("Location:$gelen_url");
	}
}

		/* SEPET İŞLEMLERİ BİTİŞ */ 












		/* HAVALE - EFT İŞLEMLERİ BAŞLANGIÇ */
if (isset($_POST['bankaHekle'])) {

	$kaydet=$db->prepare("INSERT INTO bankaH SET
		bankaH_ad=:bankaH_ad,
		bankaH_iban=:bankaH_iban,
		bankaH_hesapadsoyad=:bankaH_hesapadsoyad,
		bankaH_durum=:bankaH_durum
		");

	$insert=$kaydet->execute(array(
		'bankaH_ad' => $_POST['bankaH_ad'],
		'bankaH_iban' => $_POST['bankaH_iban'],
		'bankaH_hesapadsoyad' => $_POST['bankaH_hesapadsoyad'],
		'bankaH_durum' => $_POST['bankaH_durum']
		));


	if ($insert) {
		header("Location:../production/havale.php?durum=ok");
		exit;

	} else {
		header("Location:../production/havale.php?durum=no");
		exit;
	}	
}








if (isset($_POST['bankaHduzenle'])) {
	$bankaH_id=$_POST['bankaH_id'];

	$kaydet=$db->prepare("UPDATE bankaH SET
		bankaH_ad=:bankaH_ad,
		bankaH_iban=:bankaH_iban,
		bankaH_hesapadsoyad=:bankaH_hesapadsoyad,
		bankaH_durum=:bankaH_durum
		WHERE bankaH_id={$_POST['bankaH_id']}
	");

	$update=$kaydet->execute(array(
		'bankaH_ad' => $_POST['bankaH_ad'],
		'bankaH_iban' => $_POST['bankaH_iban'],
		'bankaH_hesapadsoyad' => $_POST['bankaH_hesapadsoyad'],
		'bankaH_durum' => $_POST['bankaH_durum']
	));

	if ($update) {
		Header("Location:../production/havale-duzenle?durum=ok&bankaH_id=$bankaH_id");
	} else {
		Header("Location:../production/havale-duzenle?durum=no&bankaH_id=$bankaH_id");
	}
}








if ($_GET['bankaHsil']=="ok") {
	
	$sil=$db->prepare("DELETE from bankaH where bankaH_id=:bankaH_id");
	$kontrol=$sil->execute(array(
		'bankaH_id' => $_GET['bankaH_id']
		));

	if ($kontrol) {

		
		Header("Location:../production/havale.php");

	} else {

		Header("Location:../production/havale.php?durum=no");
	}

}








if ($_GET['bankaH_durum']=="ok") {

	
	$duzenle=$db->prepare("UPDATE bankaH SET
		bankaH_durum=:bankaH_durum
		WHERE bankaH_id={$_GET['bankaH_id']}");
	
	$update=$duzenle->execute(array(
		'bankaH_durum' => $_GET['bankaH_dur']
		));

	if ($update) {
		Header("Location:../production/havale.php");
	} else {
		Header("Location:../production/havale.php?durum=no");
	}

}

		/* HAVALE - EFT İŞLEMLERİ BİTİŞ */






















		/* SİPARİŞ İŞLEMLERİ BAŞLANGIÇ */
if (isset($_POST['bankaHsiparisekle'])) {
	
	$gelen_url=$_POST['gelen_url'];
	$siparis_tip="Havale / EFT";

	$kaydet=$db->prepare("INSERT INTO siparis SET
		kullanici_id=:kullanici_id,
		siparis_tip=:siparis_tip,
		siparis_banka=:siparis_banka,
		siparis_toplam=:siparis_toplam
	");	
	$insert=$kaydet->execute(array(
		'kullanici_id'=> $_POST['kullanici_id'],
		'siparis_tip' => $siparis_tip,
		'siparis_banka' => $_POST['siparis_banka'],
		'siparis_toplam' => $_POST['siparis_toplam']
	));

	if ($insert) {

		//Sipariş başarılı bir şekilde kaydedildiyse BAŞLANGIÇ
		$siparis_id = $db->lastInsertID(); //Anında son kaydedilen verinin id'sini alıyoruz.

			$kullanici_id=$_POST['kullanici_id'];  
			$sepetsor=$db->prepare("SELECT * FROM sepet WHERE kullanici_id=:id");
			$sepetsor->execute(array(
    			'id' => $kullanici_id
  			));

			while ($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

				$urun_id = $sepetcek['urun_id'];
				$urun_adet = $sepetcek['urun_adet'];

				$urunsor=$db->prepare("SELECT * FROM urun WHERE urun_id=:id");
				$urunsor->execute(array(
    				'id' => $urun_id
  				));
				$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
				$urun_fiyat = $uruncek['urun_fiyat'];

				$topfiyat = $urun_fiyat * $urun_adet;

				$kaydet=$db->prepare("INSERT INTO siparisdetay SET
					siparis_id=:siparis_id,
					urun_id=:urun_id,
					urun_fiyat=:urun_fiyat,
					urun_adet=:urun_adet,
					urun_topfiyat=:urun_topfiyat
				");	
				$insert=$kaydet->execute(array(
					'siparis_id'=> $siparis_id,
					'urun_id' => $urun_id,
					'urun_fiyat' => $urun_fiyat,
					'urun_adet' => $urun_adet,
					'urun_topfiyat' => $topfiyat
				));
		//Sipariş başarılı bir şekilde kaydedildiyse BİTİŞ
			}
		
		//Sipariş detay kayıtta başarılıysa sepeti boşaltma işlemi BAŞLANGIÇ
		if ($insert) {
			$sil = $db -> prepare("DELETE FROM sepet WHERE kullanici_id=:kullanici_id");
			$konroll = $sil -> execute(array(
				'kullanici_id' => $kullanici_id 
			));

			Header("Location:../../siparislerim?hsiparis=ok");
		}


		//Header("Location:$gelen_url?siparis=ok");
	} else {
		Header("Location:$gelen_url?hsiparis=hata");
	}
}













if ($_GET['siparis_odeme']=="ok") {

	
	$duzenle=$db->prepare("UPDATE siparis SET
		siparis_odeme=:siparis_odeme
		WHERE siparis_id={$_GET['siparis_id']}");
	
	$update=$duzenle->execute(array(
		'siparis_odeme' => $_GET['siparis_one']
		));

	if ($update) {
		Header("Location:../production/siparisler?durum=ok");
	} else {
		Header("Location:../production/siparisler?durum=no");
	}

}

		/* SİPARİŞ İŞLEMLERİ BİTİŞ */























		/* ÜRÜN FOTOĞRAF İŞLEMLERİ BAŞLANGIÇ */
if (isset($_POST['urunfotosil'])) {
	$urun_id=$_POST['urun_id'];

	echo $checklist = $_POST['urunfotosec'];

	foreach ($checklist as $list) {
		$sil = $db -> prepare("DELETE FROM urunfoto WHERE urunfoto_id=:urunfoto_id");
		$kontrol = $sil -> execute(array(
			'urunfoto_id' => $list
		));
	}

	if ($kontrol) {
		Header("Location:../production/urun-galeri?urun_id=$urun_id&durum=ok");
	} else {
		Header("Location:../production/urun-galeri?urun_id=$urun_id&durum=no");
	}
}
		/* ÜRÜN FOTOĞRAF İŞLEMLERİ BİTİŞ */


















?>




