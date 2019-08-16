<?php 

include 'header.php'; 

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
    'id' => $_GET['kullanici_id']
  ));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>


<header>
  <title>Kullanıcı Düzenle - <?php echo $_GET['kullanici_id']; ?> | SS Admin Paneli</title>
</header>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kullanıcı Düzenleme Paneli<small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>
              <a href="kullanici.php"><button class="btn btn-danger btn-xs">Geri Dön</button></a>

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
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />



            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <?php 
                $zaman=explode(" ",$kullanicicek['kullanici_zaman']);
              ?>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kayıt Tarihi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="" id="first-name" name="kullanici_zaman" disabled="" value="<?php echo $zaman[0]; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kayıt Saati</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="time" id="first-name" name="kullanici_zaman" disabled="" value="<?php echo $zaman[1]; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yetki Düzeyi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" disabled="" id="first-name" name="kullanici_yetki" 
                  value="<?php if ($kullanicicek['kullanici_yetki']==5) { ?><?php echo "Yönetici"; ?> <?php } elseif($kullanicicek['kullanici_yetki']==4) { ?><?php echo "Mağaza Sahibi"; ?> <?php } else { ?><?php echo "Standart Üye"; ?> <?php } ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TC Kimlik No</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_tc" value="<?php echo $kullanicicek['kullanici_tc'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" disabled="" id="first-name" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_ad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail Adresi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" readonly="" id="first-name" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Durumu<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="kullanici_durum" required>
                  
                  <?php 
                   if ($kullanicicek['kullanici_durum']==0) {?>
                   <option value="0">Pasif</option>
                   <option value="1">Aktif</option>

                   <?php } else {?>
                   <option value="1">Aktif</option>
                   <option value="0">Pasif</option>

                   <?php  } ?>


              



              <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right">
                  <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>               
                </div>
              </div>

            </form>

            


          </div>
        </div>
      </div>
    </div>



    <hr>
    <hr>
    <hr>



  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
