<?php 

  include 'header.php'; 
  $hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
  $hakkimizdasor->execute(array(
    'id' => 0
  ));

  $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>


<header>
  <title>Hakkımızda | Sanal Sepetim</title>
</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle col-md-12" style="margin-left: 350px; margin-top: 20px;">Hakkımızda</div>
						</div>
						
					</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12"><!--Main content-->
				<div class="title-bg">
					<div class="title">Tanıtım Videosu</div>
				</div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video'] ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

				<div class="title-bg">
					<div class="title"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></div>
				</div>
				<div class="page-content">
					<?php echo $hakkimizdacek['hakkimizda_icerik']; ?>
				</div>

				<div class="title-bg">
					<div class="title">Misyon</div>
				</div>
				<blockquote class="text-muted"><?php echo $hakkimizdacek['hakkimizda_misyon']; ?></blockquote>

				<div class="title-bg">
					<div class="title">Vizyon</div>
				</div>
				<blockquote class="text-muted"><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?></blockquote>

				

			</div>



			<!-- Sidebar buraya gelecek !!! -->
			


		</div>
		<div class="spacer"></div>
	</div>
	
<?php include 'footer.php'; ?>

   
