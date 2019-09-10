<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$bankaHsor=$db->prepare("SELECT * FROM banka ORDER BY bankaH_id ASC");
$bankaHsor->execute();


?>

<header>
  <title>Havale Bilgileri Listeleme | SS Admin Paneli</title>
</header>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Havale-EFT Bilgileri Listeleme <small>

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
              <a href="havale-ekle.php"><button class="btn btn-success btn-sm">Havale-EFT Bilgisi Ekle</button></a>
            </div>

          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Banka Adı</th>
                  <th>Banka IBAN</th>
                  <th>Hesap Ad Soyad</th>
                  <th>Banka Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;
                while($bankaHcek=$bankaHsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                  <td><?php echo $say ?></td>
                  <td><?php echo $bankaHcek['bankaH_ad'] ?></td>
                  <td><?php echo $bankaHcek['bankaH_iban'] ?></td>
                  <td><?php echo $bankaHcek['bankaH_hesapadsoyad'] ?></td>
                  
                <!-- Hızlı Durum İşlemleri Başlangıç -->
                  <td><center>
                    <?php 
                      if ($bankaHcek['bankaH_durum']==0) {?>
                        <a href="../netting/islem.php?bankaH_id=<?php echo $bankaHcek['bankaH_id'] ?>&bankaH_dur=1&bankaH_durum=ok">
                          <button class="btn btn-danger btn-xs">Pasif</button>
                        </a>
                    <?php } elseif ($bankaHcek['bankaH_durum']==1) { ?>
                          <a href="../netting/islem.php?bankaH_id=<?php echo $bankaHcek['bankaH_id'] ?>&bankaH_dur=0&bankaH_durum=ok">
                            <button class="btn btn-success btn-xs">Aktif</button>
                          </a>
                    <?php } ?>                    
                  </center></td>
                <!-- Hızlı Durum İşlemleri Bitiş -->



                  <td><center><a href="havale-duzenle.php?bankaH_id=<?php echo $bankaHcek['bankaH_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>

                  <td><center><a href="../netting/islem.php?bankaH_id=<?php echo $bankaHcek['bankaH_id']?>&bankaHsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
