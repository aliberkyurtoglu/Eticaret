<?php 

include 'header.php'; 

$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(
    'id' => $_GET['urun_id']
  ));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

?>

<header>
  <title>Ürün Düzenle - <?php echo $_GET['urun_id']; ?> | SS Admin Paneli</title>
</header>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürün Düzenleme Paneli<small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>
              <a href="urun"><button class="btn btn-danger btn-xs">Geri Dön</button></a>

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
            <br/>


          

          











            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


          <!-- KATEGORİ SEÇME İŞLEMİ BAŞLANGIÇ -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Seç<span class="required">*</span></label>           
                  <div class="col-md-6 col-sm-6 col-xs-6">  

                    <?php  
                      $kat_id=$uruncek['kategori_id'];  
                      $kategorisor=$db->prepare("SELECT * FROM kategori WHERE kategori_ust=:kategori_ust ORDER BY kategori_sira");
                      $kategorisor->execute(array(
                        'kategori_ust' => 0
                      ));
                    ?>

                      <select class="select2_multiple form-control" required="" name="kategori_id" >
                        <?php 
                          while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                            $kategori_id=$kategoricek['kategori_id'];
                        ?>

                          <option 
                            <?php 
                              if ($kategori_id==$kat_id) 
                              { 
                                echo "selected='select'"; 
                              } 
                            ?> 
                              value="<?php echo $kategoricek['kategori_id']; ?>"> <?php echo $kategoricek['kategori_ad']; ?>                   
                          </option>

                          <?php } ?>

                      </select>
                  </div>
              </div>
          <!-- KATEGORİ SEÇME İŞLEMİ BİTİŞ -->


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Adı<span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="" name="urun_ad" value="<?php echo $uruncek['urun_ad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Anahtar Kelimeleri<span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_keyword" value="<?php echo $uruncek['urun_keyword'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
             
               <!-- Ck Editör Başlangıç -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Detay<span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea  class="ckeditor" required="" id="editor1" name="urun_detay"><?php echo $uruncek['urun_detay']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">
               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true
              } 
              );

            </script>
            <!-- Ck Editör Bitiş -->



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyat<span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Stok<span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_stok" value="<?php echo $uruncek['urun_stok'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>




              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Durumu<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" name="urun_durum" required="">
                  
                  <?php 
                   if ($uruncek['urun_durum']==0) {?>
                   <option value="0">Pasif</option>
                   <option value="1">Aktif</option>

                   <?php } else {?>
                   <option value="1">Aktif</option>
                   <option value="0">Pasif</option>

                   <?php  } ?>
                  </select>
                </div>
               </div>     


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Öne Çıkar<span class="required">*</span></label>               
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <select id="heard" class="form-control" name="urun_onecikar" required="">                
                    <?php 
                    if ($uruncek['urun_onecikar']==0) {?>
                      <option value="0">Hayır</option>
                      <option value="1">Evet</option>

                    <?php } else {?>
                      <option value="1">Evet</option>
                      <option value="0">Hayır</option>

                    <?php  } ?>
                  </select>
                </div>
              </div>



              



              <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12">
                <div align="right">
                  <button type="submit" name="urunduzenle" class="btn btn-success">Güncelle</button>               
                </div>
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
