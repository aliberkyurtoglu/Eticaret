<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$kullanicisor=$db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute();


?>

<header>
  <title>Kullanıcılar | SS Admin Paneli</title>
</header>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
          <h4>Yetki Düzeyleri</h4>
            <h5 style="color:red">Yönetici = 5</h5>
            <h5 style="color:blue">Standart Üye = 1</h5>          	
            <h2>Kullanıcı Listeleme <small>

              <?php 

              if ($_GET['durum']=="ok") {?>
              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>
              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Kayıt Tarih</th>
                  <th>Yetki Düzeyi</th>
                  <th>Ad Soyad</th>
                  <th>Mail Adresi</th>
                  <th>Telefon</th>
                  <th>Kullanıcı Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td>
                    <?php echo $kullanicicek['kullanici_zaman'] ?>
                  </td>

                  <td>                    
                    <?php if ($kullanicicek['kullanici_yetki']==5) { ?>                    		
                          <?php echo "Yönetici"; ?> 
                    <?php } elseif($kullanicicek['kullanici_yetki']<5) { ?>
                          <?php echo "Standart Üye"; ?>               
                    <?php } ?>
                  </td> 

                  <td>
                    <?php echo $kullanicicek['kullanici_adsoyad'] ?>  
                  </td>

                  <td>
                    <?php echo $kullanicicek['kullanici_mail'] ?>  
                  </td>

                  <td>
                    <?php echo $kullanicicek['kullanici_gsm'] ?>  
                  </td>

                <!-- Hızlı Durum İşlemleri Başlangıç -->
                  <td><center>
                    <?php 
                      if ($kullanicicek['kullanici_durum']==0) {?>
                        <a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>&kullanici_dur=1&kullanici_durum=ok">
                          <button class="btn btn-danger btn-xs">Pasif</button>
                        </a>
                    <?php } elseif ($kullanicicek['kullanici_durum']==1) { ?>
                          <a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>&kullanici_dur=0&kullanici_durum=ok">
                            <button class="btn btn-success btn-xs">Aktif</button>
                          </a>
                    <?php } ?>                    
                  </center></td>
                <!-- Hızlı Durum İşlemleri Bitiş -->



                  <td><center><a href="kullanici-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>

                  <td><center><a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>



                <?php } ?>


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
