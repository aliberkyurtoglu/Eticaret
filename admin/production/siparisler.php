<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$siparissor=$db->prepare("SELECT * FROM siparis order by siparis_zaman DESC");
$siparissor->execute();


?>

<header>
  <title>Siparişler | SS Admin Paneli</title>
</header>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

  <div class="clearfix"></div>    
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Sipariş Listeleme <small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              
            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Sipariş No</th>
                  <th>Zaman</th>
                  <th>Kullanıcı</th>
                  <th>Banka</th>
                  <th>Ödeme Tipi</th>
                  <th>Toplam Tutar</th>
                  <th>Ödeme Durum</th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $sipariscek['siparis_id']; ?></td>
                 <td><?php echo $sipariscek['siparis_zaman']; ?></td>
                 <td><?php 

                   $kullanici_id=$sipariscek['kullanici_id'];

                   $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
                   $kullanicisor->execute(array(
                    'id' => $kullanici_id
                    ));

                   $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

                   echo $kullanicicek['kullanici_adsoyad'];



                   ?></td>

                  <td><?php echo $sipariscek['siparis_banka']; ?></td>
                  <td><?php echo $sipariscek['siparis_tip']; ?></td>
                  <td><?php echo $sipariscek['siparis_toplam']; ?></td>


                <!-- Hızlı Durum İşlemleri Başlangıç -->
                  <td><center>
                    <?php 
                      if ($sipariscek['siparis_odeme']==0) {?>
                        <a href="../netting/islem.php?siparis_id=<?php echo $sipariscek['siparis_id'] ?>&siparis_one=1&siparis_odeme=ok"">
                          <button class="btn btn-danger btn-xs">Pasif</button>
                        </a>
                    <?php } elseif ($sipariscek['siparis_odeme']==1) { ?>
                          <a href="../netting/islem.php?siparis_id=<?php echo $sipariscek['siparis_id'] ?>&siparis_one=0&siparis_odeme=ok">
                            <button class="btn btn-success btn-xs">Aktif</button>
                          </a>
                    <?php } ?>                    
                  </center></td>
                <!-- Hızlı Durum İşlemleri Bitiş -->


                     


           
            <td><center><a href="../netting/islem.php?siparis_id=<?php echo $sipariscek['siparis_id']; ?>&siparissil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
