<?php  
	include 'header.php';

?>

<header>
  <title>Ödeme | Sanal Sepetim</title>
</header>

	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>

		<div class="title-bg">
			<div class="title">Ödeme Sayfası</div>
		</div>


		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>Resim</th>
						<th>Ürün Adı</th>
						<th>Ürün Kodu</th>
						<th>Adet</th>
						<th>Adet Fiyatı</th>
						<th>Toplam Fiyat</th>
					</tr>
				</thead>

			<form action="admin/netting/islem.php" method="POST">
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


					<input type="hidden" name="urun_id[]" value="<?php echo $uruncek['urun_id'] ?>">

					<tr>
						<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
							<td><center><img style="height: 110px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></center></td>
						<?php } elseif(!isset($urunfotocek['urunfoto_resimyol'])) { ?>
							<td><center><img style="height: 110px" src="dimg/foto-yok.jpg" alt="" class="img-responsive"></center></td>
						<?php } ?>
						<td><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><?php echo $uruncek['urun_ad']; ?></a></td>
						<td style="width: 85px"><?php echo $uruncek['urun_id']; ?></td>	
						<td style="width: 65px"><?php echo $sepetcek['urun_adet']; ?></td>
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

			<div class="col-md-3 col-md-offset-3">
			<div class="subtotal-wrap">	
			<!--
				<div class="subtotal">
					<p>Ara Toplam : $26.00</p>
					<p>KDV 18% : $54.00</p>
				</div>
			-->
				<div class="total">Toplam : <span class="bigprice"><?php echo $topfiyat; ?></span>₺</div>
				<div class="clearfix"></div>
			<!--	
				<a href="" class="btn btn-default btn-yellow">...</a> 
			-->
			</div>
			<div class="clearfix"></div>
			</div>
		</div>




		<div class="tab-review">
			<ul id="myTab" class="nav nav-tabs shop-tab">
				<li class="active"><a href="#banka" data-toggle="tab">Banka & Kredi Kartı</a></li>
				<li class=""><a href="#havale" data-toggle="tab">Havale-EFT</a></li>
			</ul>

			<div id="myTabContent" class="tab-content shop-tab-ct">
				<div class="tab-pane fade active in" id="banka">
					Daha sonra iyzico entegrasyonu yapılacak.
				</div>
				

			
				<div class="tab-pane fade" id="havale">
					
						<p>Ödeme yapacağınız bankayı seçerek işleme devam ediniz. Ödemeyi yaparken Açıklama kısmına sipariş no yazınız.</p>
						<?php  
							$bankaHsor=$db->prepare("SELECT * FROM banka ORDER BY bankaH_id ASC");
							$bankaHsor->execute();
						?>

						<?php while($bankaHcek=$bankaHsor->fetch(PDO::FETCH_ASSOC)) { ?>				
							<input type="radio" name="siparis_banka" value="<?php echo $bankaHcek['bankaH_ad']; ?>"><?php echo "  "; echo $bankaHcek['bankaH_ad']; ?>
							<p><?php echo $bankaHcek['bankaH_hesapadsoyad']; ?><br><?php echo $bankaHcek['bankaH_iban']; ?></p>
							 <hr>

						<?php } ?>
						


						<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
						<input type="hidden" name="siparis_toplam" value="<?php echo $topfiyat; ?>">
						<input type="hidden" name="gelen_url" value="<?php echo "http://localhost".$_SERVER['HTTP_POST']."".$_SERVER['REQUEST_URI']."";?>">

						<button type="submit" name="bankaHsiparisekle" class="btn btn-outline-danger">Sipariş Ver</button>
			</form>
				</div>
			</div>			
		</div>
	<hr>
		<!--<div class="total">Toplam : <span class="bigprice"><?php echo $topfiyat; ?></span>₺</div>-->




		<div class="spacer"></div>
	</div>
<?php include 'footer.php'; ?>