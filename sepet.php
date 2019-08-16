<?php  
	include 'header.php';

?>
<header>
  <title>Sepetim | Sanal Sepetim</title>
</header>	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="title-bg">
			<div class="title">Alışveriş Sepetim</div>
		</div>
		
		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>Sil</th>
						<th>Resim</th>
						<th>Ürün Adı</th>
						<th>Ürün Kodu</th>
						<th>Adet</th>
						<th>Adet Güncel</th>
						<th>Adet Fiyatı</th>
						<th>Toplam Fiyat</th>
					</tr>
				</thead>
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
						$topfiyat+=$uruncek['urun_fiyat'] * $sepetcek['urun_adet'];


						$urun_id = $uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
						$urunfotosor->execute(array(
							'urun_id' => $urun_id
						));

						$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);		
				?>



					<tr>
						<td>
							<form action="admin/netting/islem.php" method="POST">
								<center><button name="sepetsil" class="btn btn-danger btn-xs">Sil</button></center>

								<input type="hidden" name="sepet_id" value="<?php echo $sepetcek['sepet_id'];?>" >
								<input type="hidden" name="urun_id" value="<?php echo $sepetcek['urun_id'];?>">
								<input type="hidden" name="gelen_url" value="<?php echo "http://localhost".$_SERVER['HTTP_POST']."".$_SERVER['REQUEST_URI']."";?>">	
							</form>
						</td>

					<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
						<td><center><img style="height: 110px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt=""></center></td>
					<?php } elseif(!isset($urunfotocek['urunfoto_resimyol'])) { ?>
						<td><center><img style="height: 110px" src="dimg/foto-yok.jpg" alt=""></center></td>
					<?php } ?>

						<td><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><?php echo $uruncek['urun_ad']; ?></a></td>
						<td style="width: 85px"><?php echo $uruncek['urun_id']; ?></td>
						
						<form action="admin/netting/islem.php" method="POST">
							<td style="width: 65px"><input type="text" class="form-control quantity" name="urun_adet" value="<?php echo $sepetcek['urun_adet']; ?>"></td>
							<td>
								<button type="submit" name="sepetguncelle" class="btn btn-default btn-success btn-sm">Güncelle</button>

								<input type="hidden" name="sepet_id" value="<?php echo $sepetcek['sepet_id'];?>" >
								<input type="hidden" name="urun_id" value="<?php echo $sepetcek['urun_id'];?>">
								<input type="hidden" name="gelen_url" value="<?php echo "http://localhost".$_SERVER['HTTP_POST']."".$_SERVER['REQUEST_URI']."";?>">	
							</td>
						</form>

						<td><?php echo $uruncek['urun_fiyat']; ?>₺</td>
						<td><?php echo $uruncek['urun_fiyat'] * $sepetcek['urun_adet']; ?>₺</td>
					</tr>
				<?php } ?>

				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">
			</div>

			
			
			<?php  
				$kullanici_id=$kullanicicek['kullanici_id']; 
				 
				$sepetsor=$db->prepare("SELECT * FROM sepet WHERE kullanici_id=:id");
				$sepetsor->execute(array(
    				'id' => $kullanici_id
  				));

  				$sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC);
			?>

			<?php if (isset($sepetcek['sepet_id'])) { ?>
			<div class="subtotal-wrap col-md-3 col-md-offset-3">
				<div class="total">Toplam : <span class="bigprice"><?php echo $topfiyat; ?></span>₺</div>
				<div class="clearfix"></div>
				<a href="odeme" class="btn btn-default btn-yellow">Ödeme Sayfası</a>
			</div>

			<?php } elseif (!isset($sepetcek['sepet_id'])) { ?>
			<div class="col-md-5 col-md-offset-5">
				<div class="animated infinite flash" style="animation-duration: 3s">
					<h3>SEPET BOŞ</h3>
				</div>
			</div>
			<?php } ?>
				
			<div class="clearfix"></div>
			
		</div>
		<div class="spacer"></div>
	</div>
<?php include 'footer.php'; ?>