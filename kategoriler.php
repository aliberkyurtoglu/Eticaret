<?php 
	include 'header.php'; 




if (isset($_GET['sef'])) {
	$kategorisor=$db->prepare("SELECT * FROM kategori where kategori_seourl=:seourl");
	$kategorisor->execute(array(
   		'seourl' => $_GET['sef']
  	));
	$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
	$kategori_id=$kategoricek['kategori_id'];
}
	
?>
		

<header>
	<?php if (isset($kategoricek['kategori_ad'])) { ?>
		<title><?php echo $kategoricek['kategori_ad']; ?> | Sanal Sepetim</title>
	<?php } else { ?>
		<title>Kategoriler | Sanal Sepetim</title>
  	<?php } ?>
</header>
	
	<div class="container">		
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Ürünler</div>
					<div class="title-nav">
						<a href="javascript:void(0);"><i class="fa fa-th-large"></i>grid</a>
						<a href="javascript:void(0);"><i class="fa fa-bars"></i>List</a>
					</div>
				</div>

				<div class="row prdct"><!--Products-->
				

				<?php 

					$sayfaBasi = 6;
					$sayfa = 1;

					if (isset($_GET['sayfa']) && $_GET['sayfa'] > 0) {
						$sayfa = $_GET['sayfa'];
					}

					$sorgu=$db->prepare("SELECT * FROM urun");
                	$sorgu->execute();
                	$toplam_urun=$sorgu->rowCount();

                	$toplamSayfa = ceil($toplam_urun / $sayfaBasi);

                	if ($sayfa > $toplamSayfa) {
                		$sayfa = $toplamSayfa; 
                	}

                	if($sayfa < 1) echo $sayfa = 1; 

					$limit = ($sayfa - 1) * $sayfaBasi;
				?>




				<?php 

					if (isset($_GET['sef'])) {
						$kategorisor=$db->prepare("SELECT * FROM kategori where kategori_seourl=:seourl");
						$kategorisor->execute(array(
    						'seourl' => $_GET['sef']
  						));
						$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
						$kategori_id=$kategoricek['kategori_id'];


						$urunsor=$db->prepare("SELECT * FROM urun WHERE kategori_id=:kategori_id ORDER BY urun_id DESC LIMIT $limit, $sayfaBasi");
						$urunsor->execute(array(
							'kategori_id' => $kategori_id
						));

					} else {
						$urunsor=$db->prepare("SELECT * FROM urun ORDER BY urun_id DESC LIMIT $limit , $sayfaBasi");
						$urunsor->execute();
					}
				?>




				<?php  
					while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id = $uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
						$urunfotosor->execute(array(
							'urun_id' => $urun_id
						));

						$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);		
				?>
					<div class="col-md-4">
						<div class="productwrap col-md-6" style="height: 315px; width: 235px">
							<div class="pr-img" style="height: 225px">
							<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
								<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><center><img style="height: 225px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></center></a>
							<?php } elseif (!isset($urunfotocek['urunfoto_resimyol'])) { ?>
								<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><center><img style="height: 225px" src="dimg/foto-yok.jpg" alt="" class="img-responsive"></center></a>
							<?php } ?>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale" style="font-size: 15px"><?php echo $uruncek['urun_fiyat']; ?>₺</span></div></div>
							</div>
							<span class="smalltitle col-md-6"><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><?php echo substr($uruncek['urun_ad'], 0, 30); ?></a></span>
							<span class="smalldesc col-md-12">Ürün Kodu.: <?php echo $uruncek['urun_id'] ?> </span>
						</div>
					</div>
				<?php } ?>

				</div><!--Products-->

			
				<ul class="pagination shop-pag">
					<li><a href="?sayfa=<?php echo $sayfa-1 ?>"><i class="fa fa-caret-left"></i></a></li>
						<?php for ($i=1; $i <= $toplamSayfa ; $i++) { ?>
							<li><a href="?sayfa=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php } ?>
					<li><a href="?sayfa=<?php echo $sayfa+1 ?>"><i class="fa fa-caret-right"></i></a></li>
				</ul>
			

			</div>
			<?php include 'sidebar.php'; ?>
		</div>
		<div class="spacer"></div>
	</div>
	
<?php include 'footer.php'; ?>