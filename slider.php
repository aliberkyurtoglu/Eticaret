<div class="main-slide">
			<div id="sync1" class="owl-carousel">
				


				<?php 
					$slidersor=$db->prepare("SELECT * FROM slider WHERE slider_durum=:slider_durum order by slider_sira ASC limit 5");
					$slidersor->execute(array(
						'slider_durum' => 1
					));

					while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {
				?>

				<div class="item" style="width: 940px; height: 378px">
					<div class="slide-desc">
						<div class="inner">
							<h1><?php echo $slidercek['slider_ad']; ?></h1>
							<p>
								<?php echo $slidercek['slider_aciklama']; ?>
							</p>
						</div>
						
					</div>
					<div class="slide-type-1">
						<a href="<?php echo $slidercek['slider_link'] ?>"><img src="<?php echo $slidercek['slider_resimyol'] ?>" alt="" class="img-responsive"></a>
					</div>
				</div>
				
				<?php } ?>
				
			</div>
		</div>



<!-- ALT BAR


<div class="bar"></div>
		<div id="sync2" class="owl-carousel">
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Lorem ipsum dolor.</h3>
					<p>	Lorem ipsum dolor sit.</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Lorem ipsum dolor.</h3>
					<p>	Lorem ipsum dolor sit.</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Lorem ipsum dolor.</h3>
					<p>	Lorem ipsum dolor sit.</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Lorem ipsum dolor.</h3>
					<p>	Lorem ipsum dolor sit.</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Lorem ipsum dolor.</h3>
					<p>	Lorem ipsum dolor sit.</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Lorem ipsum dolor.</h3>
					<p>	Lorem ipsum dolor sit.</p>
				</div>
			</div>
		</div>


-->