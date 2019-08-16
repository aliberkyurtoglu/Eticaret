<?php 
ob_start();
session_start();

	include 'header.php'; 

	$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
	$urunsor->execute(array(
    	'urun_id' => $_GET['urun_id']
  	));

	$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

	if ($urunsor->rowCount()==0) {
		header("Location:index?durum=zorlama");
	}
?>


<header>
  <title><?php echo $uruncek['urun_ad']; ?> | Sanal Sepetim</title>
</header>


<?php if ($_GET['durum']=="ok"): ?>
		<script type="text/javascript">
			alert("Yorumunuz onaya gönderildi. Onay sonrası burada gözükecektir.");
		</script>
<?php endif ?>


<?php if ($_GET['sepet']=="hata"): ?>
		<script type="text/javascript">
			alert("Ürün adedi 1'den az olamaz. Lütfen kontrol edin.");
		</script>
<?php endif ?>


<?php if ($_GET['sepet']=="ok"): ?>
		<script type="text/javascript">
			alert("Ürün sepete eklendi.");
		</script>
<?php endif ?>


<?php if ($_GET['sepet']=="uruneklenmis"): ?>
		<script type="text/javascript">
			alert("Ürün zaten sepette var. Lütfen sepetten güncelleyiniz.");
		</script>
<?php endif ?>


<?php if ($_GET['sepet']=="stokyok"): ?>
		<script type="text/javascript">
			alert("Ürün stokta yok. Yönetimle irtibata geçiniz.");
		</script>
<?php endif ?>




	<div class="container">
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	
	<div class="container">
		<div class="row">
			
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
					<div class="title-bg" style="margin-bottom: 50px">
						<div class="title"><?php echo $uruncek['urun_ad']; ?></div>
					</div>
					<hr>
				<div class="row">
					<div class="col-md-6">
					
					<?php 
						$urun_id = $uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
						$urunfotosor->execute(array(
							'urun_id' => $urun_id
						));

						$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);
					?>

					<?php if (!isset($urunfotocek['urunfoto_resimyol'])) { ?>
						<div class="dt-img">
							<div class="detpricetag on-sale"><div class="inner"><span><?php echo $uruncek['urun_fiyat']; ?>₺</span></div></div>
							<a class="fancybox" href="dimg/foto-yok.jpg" data-fancybox-group="gallery" title="<?php echo $uruncek['urun_ad'] ?>"><img style="max-width: 340px; max-height: 340px" src="dimg/foto-yok.jpg" alt="" class="img-responsive"></a>
						</div>

					<?php } elseif (isset($urunfotocek['urunfoto_resimyol'])) {?>
						<div class="dt-img">
							<div class="detpricetag on-sale animated flash" style="animation-duration: 1s"><div class="inner "><span><?php echo $uruncek['urun_fiyat']; ?>₺</span></div></div>
							<a class="fancybox" href="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" data-fancybox-group="gallery" title="<?php echo $uruncek['urun_ad'] ?>"><img style="max-width: 340px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></a>
						</div>


					<?php 
						$urun_id = $uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1,3");
						$urunfotosor->execute(array(
							'urun_id' => $urun_id
						));

						while($urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC)){
					?>

						<div class="thumb-img">
							<a class="fancybox" href="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" data-fancybox-group="gallery" title="<?php echo $uruncek['urun_ad'] ?>"><img style="max-width: 100px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></a>
						</div>
					<?php } ?>
					<?php } ?>
					</div>

					<div class="col-md-6 det-desc">
						<div class="productdata">
							<div class="infospan">Ürün Kodu <span><?php echo $uruncek['urun_id']; ?></span></div>						
													
							
								

						<form action="admin/netting/islem.php" method="POST">
							<div class="form-group form-horizontal ava" role="form"">
								<label style="margin-left: -6px" for="qty" class="col-sm-2 control-label">Adet</label>
								<div class="col-sm-3">
									<input type="number" name="urun_adet" class="form-control" value="1">	
								</div>
								<div class="col-md-6">
									
								</div>
								<div class="col-sm-4" style="margin-left: -15px">
									<?php if (!isset($_SESSION['userkullanici_mail']) || $uruncek['urun_stok']<=0) { ?>
										<button type="submit" disabled="" name="sepeteekle" class="btn btn-default btn-red btn-md"><span class="addchart">Giriş Yap</span></button>
									<?php } elseif(isset($_SESSION['userkullanici_mail']) && $uruncek['urun_stok']>=1)  { ?>
										<button type="submit" name="sepeteekle" class="btn btn-default btn-red btn-md"><span class="addchart">Sepete Ekle</span></button>
									<?php } ?>
								</div>				
								<div class="clearfix"></div>
							</div>
							
							<div class="sharing">					
								<div class="avatock">

									<span>
										<?php if ($uruncek['urun_stok']>=1) {
											echo "Stok: ".$uruncek['urun_stok']. " adet";
										} else{
											echo "Ürün stokta yok.";
										} ?>
									</span>

								</div>
							</div>

							<hr>
							
							<

							<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>" >
							<input type="hidden" name="urun_stok" value="<?php echo $uruncek['urun_stok'] ?>">
							<input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'];?>">
							<input type="hidden" name="gelen_url" value="<?php echo "http://localhost".$_SERVER['HTTP_POST']."".$_SERVER['REQUEST_URI']."";?>">		
						</form>

							
						</div>
					</div>
				</div>

				<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						<li 
							<?php if ($_GET['durum']!="ok") { ?>
									class="active"
							<?php } ?>
						><a href="#desc" data-toggle="tab">Açıklama</a></li>

						<li 
							<?php if ($_GET['durum']=="ok") { ?>
									class="active"
							<?php } ?>
						>
						
						<?php 

							$kullanici_id=$kullanicicek['kullanici_id'];
							$urun_id=$uruncek['urun_id'];

							$yorumsor=$db->prepare("SELECT * FROM yorumlar where kullanici_id=:id and urun_id=:urun_id and yorum_onay=:yorum_onay");
							$yorumsor->execute(array(
    							'id' => $kullanici_id,
    							'urun_id' => $urun_id,
    							'yorum_onay' => 1
  							));

							
							
						?>

						<a href="#rev" data-toggle="tab">Yorumlar (<?php echo $yorumsor->rowCount(); ?>)</a></li>
					</ul>


					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade 
							<?php if ($_GET['durum']!="ok") { ?>
									active in
							<?php } ?>
						" id="desc">
							<p>
								<?php echo $uruncek['urun_detay']; ?>
							</p>
						</div>

						<div class="tab-pane fade 
							<?php if ($_GET['durum']=="ok") { ?>
									active in
							<?php } ?>
						" id="rev">






						<?php while ($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {

							$ykullanici_id=$yorumcek['kullanici_id'];

							$ykullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_id=:kullanici_id");
							$ykullanicisor->execute(array(
								'kullanici_id' => $ykullanici_id
							));

							$ykullanicicek=$ykullanicisor->fetch(PDO::FETCH_ASSOC);

						?>
							<p class="dash">
							<span><?php echo $ykullanicicek['kullanici_adsoyad']; ?></span> (<?php echo $yorumcek['yorum_zaman']; ?>)<br><br>
								<?php echo $yorumcek['yorum_detay']; ?>
							</p>

						<?php } ?>
		


							<h4>Yorum Yazın</h4>
							<?php if (isset($_SESSION['userkullanici_mail'])) { ?>

										<form action="admin/netting/islem.php" method="POST" role="form">

											<div class="form-group">
												<textarea name="yorum_detay" class="form-control" id="text" style="resize: none" placeholder="Yorumunuzu burada belirtiniz."></textarea>
											</div>
												<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>" >
												<input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'];?>">
												<input type="hidden" name="gelen_url" value="<?php echo "http://localhost".$_SERVER['HTTP_POST']."".$_SERVER['REQUEST_URI']."";?>">						
												
												<button name="yorumgonder" type="submit" class="btn btn-default btn-red btn-sm">Gönder</button>
										</form>
							<?php } else{ ?>
										Yorumları görebilmek ve yorum yazabilmek için <a style="color: red" href="kaydol">kayıt</a> olmalı ya da <a style="color:blue" href="#login">giriş</a> yapmalısınız.
							<?php } ?>

							
						</div>
					</div>
				</div>
				
				<div id="title-bg">
					<div class="title">Benzer Ürünler</div>
				</div>
				<div class="row prdct"><!--Products-->

					<?php 
						$kategori_id=$uruncek['kategori_id'];

						$urunaltsor=$db->prepare("SELECT * FROM urun WHERE kategori_id=:kategori_id ORDER BY RAND() limit 3");
						$urunaltsor->execute(array(
							'kategori_id' => $kategori_id
						)); 
					?>

					<?php  
						while($urunaltcek=$urunaltsor->fetch(PDO::FETCH_ASSOC)) {

							$urun_id = $urunaltcek['urun_id'];
							$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
							$urunfotosor->execute(array(
								'urun_id' => $urun_id
							));

							$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);		

					?>


					<div class="col-md-4">
						<div class="productwrap col-md-6">

							<div class="pr-img" style="height: 175px">

							<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
								<a href="urun-<?=seo($urunaltcek['urun_ad']).'-'.$urunaltcek['urun_id'] ?>"><center><img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive" style="height: 175px"></center></a>
							<?php } elseif(!isset($urunfotocek['urunfoto_resimyol'])) { ?>
								<a href="urun-<?=seo($urunaltcek['urun_ad']).'-'.$urunaltcek['urun_id'] ?>"><center><img src="dimg/foto-yok.jpg" alt="" class="img-responsive" style="height: 175px"></a>
							<?php } ?>

								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><?php echo $urunaltcek['urun_fiyat']; ?>₺</span></div></div>
							</div>

							<span class="smalltitle col-md-6"><a href="urun-<?=seo($urunaltcek['urun_ad']).'-'.$urunaltcek['urun_id'] ?>"><?php echo substr($urunaltcek['urun_ad'], 0, 12).'...'; ?></a></span>
							<span class="smalldesc col-md-6">Ürün Kodu: <?php echo $urunaltcek['urun_id'] ?> </span>
						</div>
					</div>
					<?php } ?>
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->
			<?php include 'sidebar.php'; ?>
		</div>
	</div>
<?php include 'footer.php'; ?>