<div class="col-md-3">
    <!--sidebar-->
    <div class="title-bg">
        <div class="title">Kategoriler</div>
    </div>
    <?php  
        $kategorisor=$db->prepare("SELECT * FROM kategori WHERE kategori_durum=:kategori_durum ORDER BY kategori_sira ASC");
        $kategorisor->execute(array(
            'kategori_durum' => 1
        ));
    ?>


    <div class="categorybox">
        <ul>
            <?php while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { ?>
                <li><a href="kategori-<?=seo($kategoricek['kategori_ad']) ?>"><?php echo $kategoricek['kategori_ad']; ?></a></li>   
            <?php } ?>      
        </ul>
    </div>

    <div class="title-bg">
        <div class="title">En Çok Stok</div>
    </div>
    <div class="best-seller">
        <ul>
        

        <?php 
            $urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:urun_durum ORDER BY urun_stok DESC limit 5");
            $urunsor->execute(array(
                'urun_durum' => 1,
            ));
        ?>
        
        <?php  
            while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
                $urun_id = $uruncek['urun_id'];
                $urunfotosor=$db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC limit 1");
                $urunfotosor->execute(array(
                    'urun_id' => $urun_id
                ));

                $urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC); 
        ?>

            <li class="clearfix">
            <?php if (isset($urunfotocek['urunfoto_resimyol'])) { ?>
                <center><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive mini"></center></a>
            <?php } elseif(!isset($urunfotocek['urunfoto_resimyol'])) { ?>
                <center><a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><img src="dimg/foto-yok.jpg" alt="" class="img-responsive mini"></center></a>
            <?php } ?>
                <div class="mini-meta">
                    <a class="smalltitle2" href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>">
                        <?php echo substr($uruncek['urun_ad'], 0, 16).'...'; ?>                                     
                    </a>
                    <p class="smallprice2">Fiyat : <?php echo $uruncek['urun_fiyat']; ?>₺</p>
                    <p class="smallprice2">Stok : <?php echo $uruncek['urun_stok']; ?> adet</p>
                </div>
            </li>

        <?php } ?>
            
        </ul>
    </div>

</div>
<!--sidebar-->