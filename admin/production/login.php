<?php  
include '../netting/baglan.php';

?>



<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
  	<title>Giriş Yap | SS Admin Paneli</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<div class="login">
    <?php 
      if ($_GET['durum']=="no") { ?>
             
      <p style="color: red;" align="center"><b>Yetkili Bulunamadı!</b></p>

      <?php  
      } elseif ($_GET['durum']=="izinsiz") { ?>
        <h1 style="color: red;" align="center"><b>İzinsiz Giriş !!</b></h1>
      <?php } ?>

     

      
		<h1>SS Yönetim Paneli</h1>
		<p>Hızlı giriş yapmak için şuanlık mail ve şifreyi inputların valuesinde hazır tuttuk.</p>

		<form action="../netting/islem.php" method="POST">
			<input type="text" name="kullanici_mail" placeholder="Kullanıcı Adı(Mail)" required="required" value="aliberkyurtoglu@gmail.com" />
			<input type="password" name="kullanici_password" placeholder="Şifre" required="required" value="123456" />
			<button type="submit" name="admingiris" class="btn btn-primary btn-block btn-large">Giriş Yap</button>
		</form>

    	

    	

             
               
   

	</div>
	
	



	<script  src="js/index.js"></script>




</body>

</html>
