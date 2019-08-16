<?php 

include 'header.php'; 

$slidersor=$db->prepare("SELECT * FROM slider where slider_id=:id");
$slidersor->execute(array(
    'id' => $_GET['slider_id']
  ));

$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

?>

<header>
  <title>Slider Düzenle - <?php echo $_GET['slider_id']; ?> | SS Admin Paneli</title>
</header>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Slider Düzenleme Paneli<small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>
              <a href="slider.php"><button class="btn btn-danger btn-xs">Geri Dön</button></a>

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
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img width="300" src="../../<?php echo $slidercek['slider_resimyol']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name" value="../../<?php echo $slidercek['slider_resimyol'] ?>" name="slider_resimyol" class="form-control col-md-7 col-xs-12">
                  </div>
              </div>  

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_ad" value="<?php echo $slidercek['slider_ad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Açıklama*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_aciklama" required="" value="<?php echo $slidercek['slider_aciklama'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

             
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider URL</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_link" placeholder="Kategoriye yönlendirilecekse kategori-x şeklinde yazınız." value="<?php echo $slidercek['slider_link'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_sira" required="" value="<?php echo $slidercek['slider_sira'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>




              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durumu*<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="slider_durum" required>
                  
                  <?php if ($slidercek['slider_durum']==0) {?>
                   <option value="0">Pasif</option>
                   <option value="1">Aktif</option>

                  <?php } else {?>
                   <option value="1">Aktif</option>
                   <option value="0">Pasif</option>
                  <?php  } ?>

                    



              



              <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id'] ?>">
              <input type="hidden" name="slider_resimyol" value="<?php echo $slidercek['slider_resimyol'] ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right">
                  <button type="submit" name="sliderduzenle" class="btn btn-success">Güncelle</button>               
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
