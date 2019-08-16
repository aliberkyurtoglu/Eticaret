<?php include 'header.php'; ?>

	<div class="container">
		
		<div class="clearfix"></div>
		<div class="lines"></div>

		<?php include 'slider.php' ?>

		
	</div>
	
<header>
  <title>Anasayfa | Sanal Sepetim</title>
</header>

	<div class="f-widget featpro">
		<div class="container">
			<div class="title-widget-bg">
				<div class="title-widget">Öne Çıkan Ürünler</div>
				<div class="carousel-nav">
					<a class="prev"></a>
					<a class="next"></a>
				</div>
			</div>

			<div id="product-carousel" class="owl-carousel owl-theme">

				<?php 
					$urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:urun_durum AND urun_onecikar=:urun_onecikar");
					$urunsor->execute(array(
    					'urun_durum' => 1,
    					'urun_onecikar' => 1
  					));
				?>

				<?php  
					while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {					
						$urun_id = $uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
						$urunfotosor->execute(array(
							'urun_id' => $urun_id
						));

						$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);	
				?>
				<div class="item">
					<div class="productwrap" >
						<div class="pr-img" style="height: 200px">
						<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
							<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"> <center><img style="height: 200px" src="<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" class="img-responsive"></center></a>
							<div class="pricetag blue"><div class="inner"><span style="font-size: 15px"><?php echo $uruncek['urun_fiyat']; ?>₺</span></div></div>

						<?php } elseif (!isset($urunfotocek['urunfoto_resimyol'])) { ?>	
							<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"> <center><img src="dimg/foto-yok.jpg" alt="" class="img-responsive"></center></a>
							<div class="pricetag blue"><div class="inner"><span style="font-size: 15px"><?php echo $uruncek['urun_fiyat']; ?>₺</span></div></div>
						<?php } ?>

						</div>
							<span class="smalltitle"><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><?php echo substr($uruncek['urun_ad'], 0, 16).'...'; ?></a></span>
							<span class="smalldesc">Ürün Kodu.: <?php echo $uruncek['urun_id'] ?></span>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				
				
				<div class="title-bg">
					<div class="title">Son Eklenen Ürünler</div>
				</div>
				<div class="row prdct"><!--Products-->
				

				<?php 
					$urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:urun_durum ORDER BY urun_zaman DESC limit 9");
					$urunsor->execute(array(
						'urun_durum' => 1,
  					));
				?>
				

				<?php  
					while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id = $uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
						$urunfotosor->execute(array(
							'urun_id' => $urun_id
						));

						$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);		
				?>
					<div class="col-md-4">
						<div class="productwrap">

							<div class="pr-img" style="height: 200px">
								<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>">
									<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
										<center><img style="height: 200px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></center>
									<?php } elseif(!isset($urunfotocek['urunfoto_resimyol'])) { ?>
										<center><img style="height: 200px" src="dimg/foto-yok.jpg" alt="" class="img-responsive"></center>
									<?php } ?>
								</a>
								<div class="pricetag blue">
									<div class="inner">
										<span style="font-size: 15px"><?php echo $uruncek['urun_fiyat']; ?>₺</span>
									</div>
								</div>
							</div>
							<span class="smalltitle">
								<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>">
									<?php echo substr($uruncek['urun_ad'], 0, 16).'...'; ?>										
								</a>
							</span>
							<span class="smalldesc">Ürün Kodu.: <?php echo $uruncek['urun_id'] ?></span>
						</div>
					</div>

				<?php } ?>
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->


			<!-- Sidebar buraya gelecek -->
			<?php include 'sidebar.php' ?>
		</div>
	</div>
	

<?php  
	include 'footer.php';
?>	