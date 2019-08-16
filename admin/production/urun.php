<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$urunsor=$db->prepare("SELECT * FROM urun ORDER BY urun_id DESC");
$urunsor->execute();


?>

<header>
  <title>Ürünler | SS Admin Paneli</title>
</header>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürün Listeleme <small>

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
              <a href="urun-ekle.php"><button class="btn btn-success btn-sm">Ürün Ekle</button></a>
            </div>

          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Fotoğraf İşlemleri</th>
                  <th>Ürün Kodu</th>
                  <th>Ürün Adı</th>
                  <th>Stok</th>
                  <th>Fiyat</th>
                  <th>Ürün Durum</th>
                  <th>Ürün Öne Çıkar</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;
                while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                  <td><?php echo $say ?></td>
                  <td><center><a href="urun-galeri?urun_id=<?php echo $uruncek['urun_id'] ?>"><button class="btn btn-success btn-xs">Ekle</button></a></center></td>
                  <td><?php echo $uruncek['urun_id']; ?></td>
                  <td><?php echo substr($uruncek['urun_ad'], 0, 80) ?></td>
                  <td><?php echo $uruncek['urun_stok'] ?></td>
                  <td><?php echo $uruncek['urun_fiyat'] ?></td>
                  
                <!-- Hızlı Durum İşlemleri Başlangıç -->
                  <td><center>
                    <?php 
                      if ($uruncek['urun_durum']==0) {?>
                        <a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_dur=1&urun_durum=ok">
                          <button class="btn btn-danger btn-xs">Pasif</button>
                        </a>
                    <?php } elseif ($uruncek['urun_durum']==1) { ?>
                          <a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_dur=0&urun_durum=ok">
                            <button class="btn btn-success btn-xs">Aktif</button>
                          </a>
                    <?php } ?>                    
                  </center></td>
                <!-- Hızlı Durum İşlemleri Bitiş -->



                <!-- Hızlı Öne Çıkar İşlemleri Başlangıç -->
                  <td><center>
                    <?php 
                      if ($uruncek['urun_onecikar']==0) {?>
                        <a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_one=1&urun_onecikar=ok">
                          <button class="btn btn-danger btn-xs">Pasif</button>
                        </a>
                    <?php } elseif ($uruncek['urun_onecikar']==1) { ?>
                          <a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_one=0&urun_onecikar=ok">
                            <button class="btn btn-success btn-xs">Aktif</button>
                          </a>
                    <?php } ?>                    
                  </center></td>
                <!-- Hızlı Öne Çıkar İşlemleri Bitiş -->




                  <td><center><a href="urun-duzenle.php?urun_id=<?php echo $uruncek['urun_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>

                  <td><center><a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id']?>&urunsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
