<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$slidersor=$db->prepare("SELECT * FROM slider ORDER BY slider_sira ASC");
$slidersor->execute();


?>
<header>
  <title>Sliderlar | SS Admin Paneli</title>
</header>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Slider Listeleme <small>
              

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>
            </small></h2>


            
            <div class="clearfix"></div>
            <div align="right" >
              <a href="slider-ekle.php"><button class="btn btn-success btn-sm">Slider Ekle</button></a>
            </div>

          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Slider No</th>
                  <th>Resim</th>
                  <th>Slider Adı</th>
                  <th>Slider Açıklama</th>
                  <th>URL</th>
                  <th>Sıra</th>
                  <th>Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;
                while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                  <td><?php echo $say ?></td>
                  <td><img width="200" src="../../<?php echo $slidercek['slider_resimyol'] ?>"></td>
                  <td><?php echo $slidercek['slider_ad'] ?></td>
                  <td><?php echo $slidercek['slider_aciklama']; ?></td>
                  <td><?php echo $slidercek['slider_link'] ?></td>
                  <td><?php echo $slidercek['slider_sira'] ?></td>
                  
                <!-- Hızlı Durum İşlemleri Başlangıç -->
                  <td><center>
                    <?php 
                      if ($slidercek['slider_durum']==0) {?>
                        <a href="../netting/islem.php?slider_id=<?php echo $slidercek['slider_id'] ?>&slider_dur=1&slider_durum=ok">
                          <button class="btn btn-danger btn-xs">Pasif</button>
                        </a>
                    <?php } elseif ($slidercek['slider_durum']==1) { ?>
                          <a href="../netting/islem.php?slider_id=<?php echo $slidercek['slider_id'] ?>&slider_dur=0&slider_durum=ok">
                            <button class="btn btn-success btn-xs">Aktif</button>
                          </a>
                    <?php } ?>                    
                  </center></td>
                <!-- Hızlı Durum İşlemleri Bitiş -->



                  <td><center><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>

                  <td><center><a href="../netting/islem.php?slider_id=<?php echo $slidercek['slider_id']?>&slidersil=ok&slider_resimyol=<?php echo $slidercek['slider_resimyol'] ?>"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>



                <?php  }

                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
