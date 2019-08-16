<?php 

include 'header.php'; 



?>
<header>
  <title>Slider Ekle | SS Admin Paneli</title>
</header>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Slider Ekleme Paneli<small>


            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />



            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="slider_resimyol"  class="form-control col-md-7 col-xs-12">
                  </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı <span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_ad" class="form-control col-md-7 col-xs-12" placeholder="Slider Adını Giriniz" required="required">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Açıklaması <span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_aciklama" class="form-control col-md-7 col-xs-12" placeholder="Slider Açıklaması Giriniz" required="required">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider URL</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_link" placeholder="Kategoriye yönlendirilecekse kategori-x şeklinde yazınız." class="form-control col-md-7 col-xs-12" placeholder="Slider URL'si Giriniz" >
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sırası <span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_sira" class="form-control col-md-7 col-xs-12" placeholder="Slider Sırası Giriniz" required="required">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durumu<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" name="slider_durum" required>
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>
                  </select> 

              <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id'] ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" >
                  <button type="submit" name="sliderkaydet" class="btn btn-success">Ekle</button>               
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
