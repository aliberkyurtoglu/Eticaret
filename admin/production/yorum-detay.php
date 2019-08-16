<?php 

include 'header.php'; 

$yorumsor=$db->prepare("SELECT * FROM yorumlar WHERE yorum_id=:yorum_id");
$yorumsor->execute(array(
  'yorum_id'=> $_GET['yorum_id']
));

$yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC);


$kullanici_id=$yorumcek['kullanici_id'];

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
  'id' => $kullanici_id
));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);




$urun_id=$yorumcek['urun_id'];

$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(
  'id' =>  $urun_id
));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
?>

<header>
  <title>Yorum Detayları - <?php echo $_GET['yorum_id']; ?> | SS Admin Paneli</title>
</header>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Yorum Detay Paneli<small>

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
            <form action="yorum" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <?php 

              $zaman=explode(" ",$yorumcek['yorum_zaman']);

              ?>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yorum Tarihi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="" id="first-name" name="kullanici_zaman" disabled="" value="<?php echo $zaman[0]; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yorum Saati</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="time" id="first-name" name="kullanici_zaman" disabled="" value="<?php echo $zaman[1]; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_tc" disabled="" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_adsoyad" disabled="" value="<?php echo $uruncek['urun_ad']  ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yorum</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea name="yorum_detay" class="ckeditor" id="editor1" disabled="" style="resize: none;"><?php echo $yorumcek['yorum_detay'] ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 

              



              <input type="hidden" name="yorum_id" value="<?php echo $yorumcek['yorum_id'] ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right">
                  <a href="/yorum"><button type="submit" class="btn btn-danger">Geri</button></a>     
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
