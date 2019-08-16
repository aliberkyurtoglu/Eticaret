<?php include 'header.php'; ?>

<header>
  <title>Sosyal Ağ Ayarları | SS Admin Paneli</title>
</header>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sosyal Ağ Ayarları <small>
                        <?php

                         if ($_GET['durum']=="ok") { ?>

                            <b style="color:green;">İşlem Başarılı!</b>
                            <a href="index.php"><button class="btn btn-danger btn-xs">Anasayfaya Dön</button></a>

                          <?php }elseif ($_GET['durum']=="no") { ?>
                            <b style="color:red;">İşlem Başarısız!</b>

                          <?php } ?>
                          
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







                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook Adresi <span></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter Adresi <span></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google+ Adresi <span></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="ayar_google" value="<?php echo $ayarcek['ayar_google'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube Adresi <span></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button name="sosyalayarkaydet" type="submit" class="btn btn-primary">Güncelle</button>
                        </div>
                      </div>

                    </form>












                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- /page content -->

<?php include 'footer.php'; ?>