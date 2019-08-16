<?php  
	include 'header.php';

?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>

		<div class="title-bg">
			<div class="title">Sipariş Detayı</div>
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

		
				<tbody>
				

				<?php
					$siparis_id=$sipariscek['siparis_id'];  
					$siparissor=$db->prepare("SELECT * FROM siparis_detay WHERE kullanici_id=:id");
					$siparissor->execute(array(
    					'id' => $kullanici_id
  					));
				?>

				<?php 
					while ($sepetcek=$siparissor->fetch(PDO::FETCH_ASSOC)) { 

						$urun_id=$sepetcek['urun_id'];
						$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
						$urunsor->execute(array(
    						'urun_id' => $urun_id
  						));

						$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);	
						$topfiyat+=$uruncek['urun_fiyat'] * $sepetcek['urun_adet'];
				?>
					<input type="hidden" name="urun_id[]" value="<?php echo $uruncek['urun_id'] ?>">

					<tr>
						<td><img src="images\demo-img.jpg" width="100" alt=""></td>
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
	<hr>
		<!--<div class="total">Toplam : <span class="bigprice"><?php echo $topfiyat; ?></span>₺</div>-->




		<div class="spacer"></div>
	</div>
<?php include 'footer.php'; ?>