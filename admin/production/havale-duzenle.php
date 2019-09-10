<?php 

include 'header.php'; 

$bankaHsor=$db->prepare("SELECT * FROM banka where bankaH_id=:id");
$bankaHsor->execute(array(
    'id' => $_GET['bankaH_id']
  ));

$bankaHcek=$bankaHsor->fetch(PDO::FETCH_ASSOC);

?>


<header>
  <title>Havale Düzenle - <?php echo $_GET['bankaH_id']; ?> | SS Admin Paneli</title>
</header>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Banka Düzenleme Paneli<small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>
              <a href="havale.php"><button class="btn btn-danger btn-xs">Geri Dön</button></a>

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

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Adı</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="bankaH_ad" value="<?php echo $bankaHcek['bankaH_ad']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka IBAN</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="bankaH_iban" value="<?php echo $bankaHcek['bankaH_iban']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hesap Ad Soyadı</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="bankaH_hesapadsoyad" value="<?php echo $bankaHcek['bankaH_hesapadsoyad']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Durumu<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="bankaH_durum" required>
                  
                  <?php 
                   if ($bankaHcek['bankaH_durum']==0) {?>
                   <option value="0">Pasif</option>
                   <option value="1">Aktif</option>

                   <?php } else {?>
                   <option value="1">Aktif</option>
                   <option value="0">Pasif</option>

                   <?php  } ?>

              <input type="hidden" name="bankaH_id" value="<?php echo $bankaHcek['bankaH_id'] ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right">
                  <button type="submit" name="bankaHduzenle" class="btn btn-success">Güncelle</button>               
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
