<?php  
	include 'header.php';
?>
	
	
<header>
  <title>Siparişlerim | Sanal Sepetim</title>
</header>


	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if ($_GET['hsiparis']=="ok") { ?>
					<div class="alert alert-success">
						<strong>Başarılı!</strong> Şipariş işlemi gerçekleştirilmiştir. Havale/EFT işleminiz bekleniyor.
					</div>					
				<?php } elseif ($_GET['hsiparis']=="hata") { ?>
					<div class="alert alert-danger">
						<strong>Hata!</strong> Şipariş işlemi esnasında bir hata meydana geldi. Lütfen yönetim ile <a href="iletisim">irtibata geçiniz.</a>
					</div>
				<?php } ?>	
			</div>
		</div>
		<div id="title-bg">
			<div class="title">Siparişlerim</div>
		</div>
		
		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>Sipariş No</th>
						<th>Tarih</th>
						<th>Tutar</th>
						<th>Ödeme Durumu</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
				
				<?php  


					$sayfaBasi = 4;
					$sayfa = 1;

					if (isset($_GET['sayfa']) && $_GET['sayfa'] > 0) {
						$sayfa = $_GET['sayfa'];
					}

					$sorgu=$db->prepare("SELECT * FROM siparis");
                	$sorgu->execute();
                	$toplam_siparis=$sorgu->rowCount();

                	$toplamSayfa = ceil($toplam_siparis / $sayfaBasi);

                	if ($sayfa > $toplamSayfa) {
                		echo $sayfa = $toplamSayfa; 
                	}

					$limit = ($sayfa - 1) * $sayfaBasi;
				
				?>


				<?php
					$kullanici_id=$kullanicicek['kullanici_id'];  
					$siparissor=$db->prepare("SELECT * FROM siparis WHERE kullanici_id=:id limit $limit, $sayfaBasi");
					$siparissor->execute(array(
    					'id' => $kullanici_id
  					));
				?>

				<?php while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) { ?>
					<tr>
						<td><?php echo $sipariscek['siparis_id']; ?></td>
						<td><?php echo $sipariscek['siparis_zaman']; ?></td>
						<td><?php echo $sipariscek['siparis_toplam']; ?></td>
						<td>
							<?php 
								if ($sipariscek['siparis_odeme']==0) {
									echo "Ödeme Bekleniyor";
								} elseif ($sipariscek['siparis_odeme']==1) {
									echo "Ödeme Tamamlandı";
								}
							?>	
						</td>
						<td><a href="siparis-detay">Detay</a></td>
					</tr>
				<?php } ?>

				</tbody>
			</table>

			<ul class="pagination shop-pag">
				<li><a href="?sayfa=<?php echo $sayfa-1 ?>"><i class="fa fa-caret-left"></i></a></li>
					<?php for ($i=1; $i <= $toplamSayfa ; $i++) { ?>
						<li><a href="?sayfa=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
				<li><a href="?sayfa=<?php echo $sayfa+1 ?>"><i class="fa fa-caret-right"></i></a></li>
			</ul>
		</div>
		<div class="spacer"></div>
	</div>

<?php  
	include 'footer.php';
?>