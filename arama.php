<?php 
	include 'header.php'; 


if (isset($_POST['arama'])) {

	$aranan=$_POST['aranan'];
	$urunsor=$db->prepare("SELECT * FROM urun WHERE urun_ad LIKE ?");
	$urunsor->execute(array("%$aranan%"));

} else {
	header("Location:index?durum=bos");
	exit;
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
					while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id = $uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
						$urunfotosor->execute(array(
							'urun_id' => $urun_id
						));

						$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);		
				?>
					<div class="col-md-4">
						<div class="productwrap col-md-6" style="height: 325px; width: 235px">
							<div class="pr-img" style="height: 235px">
							<?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
								<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><center><img style="height: 235px" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></center></a>
							<?php } elseif (!isset($urunfotocek['urunfoto_resimyol'])) { ?>
								<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><center><img style="height: 235px" src="dimg/foto-yok.jpg" alt="" class="img-responsive"></center></a>
							<?php } ?>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale" style="font-size: 15px"><?php echo $uruncek['urun_fiyat']; ?>₺</span></div></div>
							</div>
							<span class="smalltitle col-md-6"><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><?php echo substr($uruncek['urun_ad'], 0, 30); ?></a></span>
							<span class="smalldesc col-md-12">Ürün Kodu.: <?php echo $uruncek['urun_id'] ?> </span>
						</div>
					</div>
				<?php } ?>
				</div><!--Products-->

			<!--
				<ul class="pagination shop-pag">
					<li><a href="#"><i class="fa fa-caret-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
				</ul>
			-->

			</div>
			<?php include 'sidebar.php'; ?>
		</div>
		<div class="spacer"></div>
	</div>
	
<?php include 'footer.php'; ?>