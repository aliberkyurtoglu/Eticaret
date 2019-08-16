<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$menusor=$db->prepare("SELECT * FROM menu ORDER BY menu_sira ASC");
$menusor->execute();


?>

<header>
  <title>Menüler | SS Admin Paneli</title>
</header>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menü Listeleme <small>
              <p style="margin-top: 20px; font-size:16px;">Sabit menü olan 'Anasayfa' dışında -sayfa düzeni açısından- menü limiti 5'tir. Menü sırasını düzenli girmeniz karışıklığa yol açmaması için önemlidir.</p>

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
              <a href="menu-ekle.php"><button class="btn btn-success btn-sm">Menü Ekle</button></a>
            </div>

          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Menü Adı</th>
                  <th>Menü URL</th>
                  <th>Menü Sıra</th>
                  <th>Menü Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;
                while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                  <td><?php echo $say ?></td>
                  <td><?php echo $menucek['menu_ad'] ?></td>
                  <td><?php echo $menucek['menu_url'] ?></td>
                  <td><?php echo $menucek['menu_sira'] ?></td>
                  
                <!-- Hızlı Durum İşlemleri Başlangıç -->
                  <td><center>
                    <?php 
                      if ($menucek['menu_durum']==0) {?>
                        <a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id'] ?>&menu_dur=1&menu_durum=ok">
                          <button class="btn btn-danger btn-xs">Pasif</button>
                        </a>
                    <?php } elseif ($menucek['menu_durum']==1) { ?>
                          <a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id'] ?>&menu_dur=0&menu_durum=ok">
                            <button class="btn btn-success btn-xs">Aktif</button>
                          </a>
                    <?php } ?>                    
                  </center></td>
                <!-- Hızlı Durum İşlemleri Bitiş -->




                  <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>

                  <td><center><a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id']?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
