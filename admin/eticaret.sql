-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 10 Eyl 2019, 19:25:26
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'dimg/25864logo2.png', 'aliberkyurtoglu.com', 'Sanal Sepetim', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lobortis ultricies erat et tempus. Nullam.', 'eticaret, shopping,', 'Ali Berk YURTOĞLU', '5331673051', '5331673051', '2321544565', 'aliberkyurtoglu@gmail.com', 'Keçiören', 'Ankara', 'Etlik mahallesi Adnan Yüksel Caddesi', '7 x 24', 'ayar_maps_api', 'ayar_analystic', 'ayar_zopima', 'www.facebook.com/aliberkyurtoglu', 'www.twitter.com/BerkYurtoglu', 'www.google.com', 'www.youtube.com', 'mail.aliberkyurtoglu.com.tr', 'info@aliberkyurtoglu.com.tr', '123456', '25', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banka`
--

CREATE TABLE `banka` (
  `bankaH_id` int(11) NOT NULL,
  `bankaH_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bankaH_iban` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bankaH_hesapadsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bankaH_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banka`
--

INSERT INTO `banka` (`bankaH_id`, `bankaH_ad`, `bankaH_iban`, `bankaH_hesapadsoyad`, `bankaH_durum`) VALUES
(6, 'Ziraat Bankası', 'TR 4241 0800 5454 2123 8794', 'Ali Berk YURTOĞLU', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Sanal Sepetim', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Phasellus viverra viverra eros, <img alt=\"\" src=\"http://eticaret.neyazilim.com/dimg/28481Udemy_logo.png\" style=\"float:right; height:60px; width:200px\" />eu laoreet leo iaculis vehicula. Nunc pretium volutpat neque, finibus fermentum neque pretium vel. In hac habitasse platea dictumst. Phasellus ipsum lacus, vehicula et fringilla a, dapibus ac mi. Nulla orci tortor, fringilla eget magna in, dictum consequat lectus. Sed tincidunt purus nec erat scelerisque pretium. Aliquam vehicula lacus vel lacus varius egestas.</p>\r\n\r\n<p>Vivamus eget euismod mi. Pellentesque et bibendum libero. Aliquam ullamcorper felis id nisl fermentum fringilla. Curabitur egestas condimentum lacus ut ornare. Donec vitae libero sagittis, pharetra massa ut, aliquam tellus. Proin luctus ex orci, nec pretium purus ultrices id. Nulla facilisi. Donec convallis pellentesque mauris. Suspendisse potenti. Ut viverra ex ante, vel tincidunt massa pellentesque et. Aenean rutrum ut ex facilisis vestibulum. Mauris est nibh, auctor quis efficitur et, pellentesque eu metus.</p>\r\n\r\n<p>Sed auctor maximus nunc ut cursus. Sed ultrices lectus eu turpis tincidunt, id dignissim nisl mattis. Sed in risus justo. Fusce et eleifend elit. Donec sit amet sapien accumsan, ornare diam ut, pellentesque dui. Maecenas ut molestie mauris. Curabitur imperdiet enim ut feugiat vulputate. Quisque dictum dolor a risus facilisis, eu bibendum dolor aliquam. Mauris vestibulum leo mauris, sit amet blandit erat suscipit nec.</p>\r\n\r\n<p>Nam facilisis sem vitae sem cursus, non ultrices dolor ullamcorper. Donec tortor massa, convallis eu tortor ornare, ornare sollicitudin tellus. Pellentesque quis interdum neque. Praesent elementum mauris sit amet nibh scelerisque bibendum. Maecenas aliquet metus lacinia elit bibendum volutpat. Vivamus eget augue eu quam consectetur venenatis. Proin rhoncus, tellus vitae tempor efficitur, eros orci maximus odio, eu rutrum sapien arcu non nisl. Donec egestas mauris eu nisl faucibus, ullamcorper dictum urna efficitur. Aliquam eu velit nisi. Etiam vitae nisi massa. Etiam a auctor felis.</p>\r\n\r\n<p>Vestibulum sem erat, venenatis at blandit in, mollis ut mauris. Donec vitae neque venenatis ante fermentum auctor vel at quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ut auctor lectus, at egestas odio. Donec vestibulum nunc vitae porttitor scelerisque. Aenean non erat facilisis, finibus ex eu, commodo nulla. Pellentesque ornare, sem sit amet laoreet efficitur, sapien enim facilisis nibh, vel imperdiet nunc eros id libero. Suspendisse potenti. Nullam nec fringilla nibh. Duis sed ex a eros interdum faucibus. Duis viverra quis sem ut accumsan.</p>\r\n', 'gGXSHaER4h8', 'Sanal Sepetim ile ilgili hakkımızda vizyon içeriği burada yer alacağından buraya vizyon verisi girilecekitir.', 'Sanal Sepetim ile ilgili hakkımızda vizyon içeriği burada yer alacağından buraya vizyon verisi girilecekitir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`, `kategori_durum`) VALUES
(11, 'Dizüstü Bilgisayar', 0, 'dizustu-bilgisayar', 1, '1'),
(12, 'Tablet', 0, 'tablet', 2, '1'),
(13, 'Cep Telefonu', 0, 'cep-telefonu', 3, '1'),
(14, 'Moda', 0, 'moda', 0, '1'),
(15, 'Ev & Mobilya', 0, 'ev-mobilya', 0, '1'),
(16, 'Fotoğraf Makinesi', 0, 'fotograf-makinesi', 0, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(156, '2019-09-10 20:21:26', '', '14234567891', 'demo-admin', 'demo-admin@gmail.com', '5331673051', 'e10adc3949ba59abbe56e057f20f883e', 'Demo Admin', 'Etlik', 'Ankara', 'Keçiören', '', '5', 1),
(157, '2019-09-10 21:08:57', '', '', '', 'demo-musteri@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'Demo Müşteri', '', '', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(1, '0', 'Hakkımızda', '', 'hakkimizda', 1, '1', 'hakkimizda'),
(2, '0', 'İletişim', '', '', 25, '1', 'iletisim'),
(4, '0', 'Kategoriler', '', 'kategoriler', 3, '1', 'kategoriler'),
(6, '', 'Gizlilik Koşullarımız', '<p>L&uuml;tfen bu İnternet Sitesini kullanmadan &ouml;nce aşağıdaki Kullanım Şartlarını ve Yasal Uyarıları Dikkatle Okuyun</p>\r\n\r\n<p>PepsiCo, Inc. (&ldquo;PepsiCo&rdquo;) İnternet sitesine hoş geldiniz. Aşağıda bu internet sitesi &uuml;zerinden bize sağlayabileceğiniz kişisel bilgilerle ilgili Gizlilik Koşullarımızı bulacaksınız. Amacımız mahremiyetinizi ve İnternet &uuml;zerinden bize sunduğunuz bilgileri korumaktır.</p>\r\n\r\n<p>PepsiCo bu internet sitesini Amerika Birleşik Devletleri&rsquo;nin New York Eyaleti&rsquo;nin Purchase şehrindeki ofisinden işletmektedir. Bu internet sitesiyle ilgili b&uuml;t&uuml;n konular Amerika Birleşik Devletleri&rsquo;nin New York Eyaleti&rsquo;nin kanunlarına tabidir ve onlar kapsamında yorumlanır.</p>\r\n\r\n<p>Bu internet sitesine erişerek bu Gizlilik Koşulları&rsquo;nı ve bu siteye yazılmış Kullanım Şartları&rsquo;nı kabul ettiğinizi belirtirsiniz.</p>\r\n\r\n<p>Bu internet sitesi 13 yaşın altındaki &ccedil;ocuklara y&ouml;nelik değildir ve sitede 13 yaşın altındaki &ccedil;ocuklardan bilerek kişisel bilgi toplamayız. Eğer sitede kasıtsız olarak 13 yaşın altındaki bir ziyaret&ccedil;inin kişisel bilgilerini aldığımızın farkına varırsak, bu bilgileri kayıtlarımızdan sileriz.</p>\r\n\r\n<p>Diğer Sitelere Bağlantı Verme</p>\r\n\r\n<p>Bu politika www.PepsiCo.com&rsquo;u (PepsiCo&rsquo;nun kurumsal internet sitesini) kapsar. İştiraklerimizden ve/veya programlarımızdan bazıları kendi, muhtemelen farklı politikalarını kendi internet sitelerine yazabilirler. Sizi o internet sitelerine bağlantı verirken o politikaları g&ouml;zden ge&ccedil;irmeye teşvik ediyoruz.</p>\r\n\r\n<p>Topladığımız bilgiler ve onları kullanım şeklimiz</p>\r\n\r\n<p>Kişisel Bilgiler &ndash; Bu internet sitesinde kişisel bilgiler (isminiz, adresiniz, telefon numaranız ve e-posta adresiniz gibi) verebilirsiniz. Bilgileri vermek i&ccedil;in kullanabileceğiniz bazı y&ouml;ntemler ve verebileceğiniz bilgi tipleri aşağıdadır. Size bilgiyi nasıl kullanabileceğimizi de a&ccedil;ıklayacağız.</p>\r\n\r\n<p>Bizimle İrtibat Kurun-&nbsp;Sitedeki &ldquo;Bizimle İrtibat Kurun&rdquo; bağlantısından bize e-posta g&ouml;nderirseniz sorularınıza ve yorumlarınıza cevap verebilmek i&ccedil;in sizden isminiz ve e-posta adresiniz gibi bilgiler isteriz. İlave bilgiler de verebilirsiniz.</p>\r\n\r\n<p>İ&ccedil;eriği Bir Arkadaşa Yolla &ndash;&nbsp;Bazı i&ccedil;erikleri arkadaşlarınıza yollayabilirsiniz. Bunu yapmak i&ccedil;in sizden isminizi ve arkadaşınızın e-posta adresini vermenizi isteriz. Bu bilgiyi i&ccedil;eriği arkadaşınıza yollamak i&ccedil;in kullanırız.</p>\r\n\r\n<p>Internet Protokol&uuml; Adresi</p>\r\n\r\n<p>Sitemizin b&uuml;t&uuml;n ziyaret&ccedil;ilerinin İnternet Protokol&uuml; adreslerini toplarız. IP adresinizi sitemizi y&ouml;netmemize yardımcı olmak i&ccedil;in kullanırız. IP adresiniz sitemizi ne zaman ziyaret ettiğinizi belirlemek i&ccedil;in de kullanılır.</p>\r\n\r\n<p>Sitenin &ldquo;Kariyerler&rdquo; Kısmı i&ccedil;in İlave Politikalar</p>\r\n\r\n<p>Eğer bu sitenin &ldquo;Kariyerler&rdquo; veya &ldquo;İş Fırsatları&rdquo; kısımlarında kişisel bilgi verirseniz, bu bilginin kullanımı ve korunması kariyer.net internet sitesinde yazılı Kariyer.net Gizlilik Koşulları&rsquo;na tabidir. Daha fazla bilgi i&ccedil;in www.kariyer.net adresini ziyaret edin.</p>\r\n\r\n<p>Paylaştığımız Bilgiler</p>\r\n\r\n<p>İnternet sitemizin ziyaret&ccedil;ileri hakkındaki kişisel bilgileri burada a&ccedil;ıklanan haller haricinde satmayız ya da başka bir suretle a&ccedil;ıklamayız. Bu sitenin ziyaret&ccedil;ilerinin sağladığı bilgileri adımıza hizmetler y&uuml;r&uuml;tmek i&ccedil;in tuttuğumuz hizmet sağlayıcılarla paylaşabiliriz. Bu hizmet sağlayıcıların adımıza hizmetler y&uuml;r&uuml;tmek ya da yasal gereksinimlere uymak i&ccedil;in gerekli olan haller dışında bu bilgileri kullanmaları ya da a&ccedil;ıklamaları yasaktır. Ek olarak, (i) kanunen ya da yasal bir s&uuml;re&ccedil; nedeniyle a&ccedil;ıklamamız gerekiyorsa, (ii) emniyet g&ouml;revlilerine ya da diğer devlet yetkililerine (iii) a&ccedil;ıklamanın fiziksel hasarı veya mali kaybı &ouml;nlemek veya ş&uuml;pheli veya ger&ccedil;ek yasadışı faaliyete ilişkin bir soruşturmayla ilişkili olarak gerekli veya uygun olduğunu d&uuml;ş&uuml;nd&uuml;ğ&uuml;m&uuml;z zaman hakkınızdaki bilgileri a&ccedil;ıklayabiliriz.</p>\r\n\r\n<p>Şirketimizin ya da varlıklarımızın tamamını ya da bir kısmını satmamız ya da devretmemiz halinde hakkınızdaki bilgileri devretme hakkını saklı tutarız. B&ouml;yle bir satış ya da devir meydana gelirse, devralanı bu internet sitesinden verdiğiniz kişisel bilgileri bu Gizlilik Koşulları&rsquo;na uygun bir şekilde kullanmaya teşvik etmek i&ccedil;in makul &ccedil;aba g&ouml;stereceğiz.</p>\r\n\r\n<p>Aktardığımız Bilgiler</p>\r\n\r\n<p>Bu sitede topladığımız kişisel bilgileri iş yaptığımız diğer &uuml;lkelere aktarabiliriz, ama bunu sadece yukarıda a&ccedil;ıklanmış ama&ccedil;larla yapacağız. Bilgilerinizi diğer &uuml;lkelere aktardığımız zaman uygulanabilen kanunlar aksini gerektirmediği s&uuml;rece o bilgiyi burada a&ccedil;ıklandığı gibi koruyacağız.</p>\r\n\r\n<p>Kişisel Bilgiyi Nasıl Koruruz?</p>\r\n\r\n<p>Bu internet sitesinden verdiğiniz kişisel bilgileri yetkisiz a&ccedil;ıklanmaya, kullanıma, değiştirmeye ya da tahribata karşı korumak i&ccedil;in idari, teknik ve fiziksel tedbirler uyguluyoruz. Bu sitede verdiğiniz kişisel bilgilerin g&uuml;venli kalması i&ccedil;in G&uuml;venli Şifreleme Protokol&uuml; (SSL) teknolojisini kullanıyoruz.</p>\r\n\r\n<p>Gizlilik Beyanımızın G&uuml;ncellemeleri</p>\r\n\r\n<p>Bu Gizlilik Beyanı &ccedil;evrimi&ccedil;i bilgi uygulamalarımızdaki değişiklikleri yansıtması i&ccedil;in periyodik olarak ve &ouml;nceden size haber verilmeden g&uuml;ncellenebilir. Gizlilik Beyanımızdaki &ouml;nemli değişiklikleri size bildirmek i&ccedil;in bu internet sitesine bir bildirim yazacak ve en son ne zaman g&uuml;ncellendiğini belirteceğiz.</p>\r\n\r\n<p>Bizimle İrtibat Kurma</p>\r\n\r\n<p>Eğer bu Gizlilik Beyanı hakkında sorularınız veya yorumlarınız varsa veya siz ya da tercihleriniz hakkındaki bilgileri g&uuml;ncellememizi istiyorsanız l&uuml;tfen aşağıda listelenen adreslerden ya da telefon numaralarından biri vasıtasıyla bizimle irtibat kurun.</p>\r\n\r\n<p>PepsiCo T&uuml;rkiye</p>\r\n\r\n<p>Didem Şinik<br />\r\nAlemdağ Caddesi, Inkılap Mahallesi, Siteyolu Sokak<br />\r\nNo:2, 34768, Umraniye &ndash; Istanbul<br />\r\ne-posta:&nbsp;didem.sinik@pepsico.com<br />\r\nTel: +90 216 635 40 00<br />\r\nFax: +90 216 634 50 09</p>\r\n\r\n<p>PepsiCo Beverages</p>\r\n\r\n<p>Eda G&ouml;kmen &Uuml;&ccedil;erler<br />\r\nTekfen Tower B&uuml;y&uuml;kdere Cad. No:209, 34394 , 4. Levent &ndash; Istanbul &ndash; T&uuml;rkiye<br />\r\nTel: 90(212) 319 30 00<br />\r\nFax: 90 (212) 357 01 80<br />\r\ne-posta:&nbsp;eda.gokmenucerler@pepsico.com</p>\r\n\r\n<p>Frito Lay</p>\r\n\r\n<p>M&uuml;ge T&uuml;mer<br />\r\nAlemdağ Caddesi, Inkılap Mahallesi, Siteyolu Sokak,<br />\r\nNo:2, 34768, &Uuml;mraniye &ndash; Istanbul<br />\r\nTel: +90 216 635 40 00<br />\r\nFax: +90 216 634 50 09<br />\r\ne-posta:&nbsp;muge.tumer@pepsico.com</p>\r\n', '', 10, '1', 'gizlilik-kosullarimiz'),
(11, '', 'Mesafeli satış sözleşmesi', '<p>MESAFELİ S&Ouml;ZLEŞMELER Y&Ouml;NETMELİĞİ</p>\r\n\r\n<p>BİRİNCİ B&Ouml;L&Uuml;M</p>\r\n\r\n<p>Ama&ccedil;, Kapsam, Dayanak ve Tanımlar</p>\r\n\r\n<p><strong>Ama&ccedil;</strong></p>\r\n\r\n<p><strong>MADDE 1 &ndash;</strong>&nbsp;(1) Bu Y&ouml;netmeliğin amacı, mesafeli s&ouml;zleşmelere ilişkin uygulama usul ve esaslarını d&uuml;zenlemektir.</p>\r\n\r\n<p><strong>Kapsam</strong></p>\r\n\r\n<p><strong>MADDE 2 &ndash;</strong>&nbsp;(1) Bu Y&ouml;netmelik, mesafeli s&ouml;zleşmelere uygulanır.</p>\r\n\r\n<p>(2) Bu Y&ouml;netmelik h&uuml;k&uuml;mleri;</p>\r\n\r\n<p>a) Finansal hizmetler,</p>\r\n\r\n<p>b) Otomatik makineler aracılığıyla yapılan satışlar,</p>\r\n\r\n<p>c) Halka a&ccedil;ık telefon vasıtasıyla telekom&uuml;nikasyon operat&ouml;rleriyle bu telefonun kullanımı,</p>\r\n\r\n<p>&ccedil;) Bahis, &ccedil;ekiliş, piyango ve benzeri şans oyunlarına ilişkin hizmetler,</p>\r\n\r\n<p>d) Taşınmaz malların veya bu mallara ilişkin hakların oluşumu, devri veya kazanımı,</p>\r\n\r\n<p>e) Konut kiralama,</p>\r\n\r\n<p>f) Paket turlar,</p>\r\n\r\n<p>g) Devre m&uuml;lk, devre tatil, uzun s&uuml;reli tatil hizmeti ve bunların yeniden satımı veya değişimi,</p>\r\n\r\n<p>ğ) Yiyecek ve i&ccedil;ecekler gibi g&uuml;nl&uuml;k t&uuml;ketim maddelerinin, satıcının d&uuml;zenli teslimatları &ccedil;er&ccedil;evesinde t&uuml;keticinin meskenine veya işyerine g&ouml;t&uuml;r&uuml;lmesi,</p>\r\n\r\n<p>h) 5 inci maddenin birinci fıkrasının (a), (b) ve (d) bentlerindeki bilgi verme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; ile 18 inci ve 19 uncu maddelerde yer alan y&uuml;k&uuml;ml&uuml;l&uuml;kler saklı kalmak koşuluyla yolcu taşıma hizmetleri,</p>\r\n\r\n<p>ı) Malların montaj, bakım ve onarımı,</p>\r\n\r\n<p>i) Bakımevi hizmetleri, &ccedil;ocuk, yaşlı ya da hasta bakımı gibi ailelerin ve kişilerin desteklenmesine y&ouml;nelik sosyal hizmetler</p>\r\n\r\n<p>ile&nbsp;ilgili s&ouml;zleşmelere uygulanmaz.</p>\r\n\r\n<p><strong>Dayanak</strong></p>\r\n\r\n<p><strong>MADDE 3 &ndash;</strong>&nbsp;(1) Bu Y&ouml;netmelik,&nbsp;7/11/2013&nbsp;tarihli ve 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanunun 48 inci ve 84 &uuml;nc&uuml; maddelerine dayanılarak hazırlanmıştır.</p>\r\n\r\n<p><strong>Tanımlar</strong></p>\r\n\r\n<p><strong>MADDE 4 &ndash;</strong>&nbsp;(1) Bu Y&ouml;netmeliğin uygulanmasında;</p>\r\n\r\n<p>a) Dijital i&ccedil;erik: Bilgisayar programı, uygulama, oyun, m&uuml;zik, video ve metin gibi dijital şekilde sunulan her t&uuml;rl&uuml; veriyi,</p>\r\n\r\n<p>b) Hizmet: Bir &uuml;cret veya menfaat karşılığında yapılan ya da yapılması taahh&uuml;t edilen mal sağlama dışındaki her t&uuml;rl&uuml; t&uuml;ketici işleminin konusunu,</p>\r\n\r\n<p>c) Kalıcı veri saklayıcısı: T&uuml;keticinin g&ouml;nderdiği veya kendisine g&ouml;nderilen bilgiyi, bu bilginin amacına uygun olarak makul bir s&uuml;re incelemesine elverecek şekilde kaydedilmesini ve değiştirilmeden kopyalanmasını sağlayan ve bu bilgiye aynen ulaşılmasına&nbsp;imkan&nbsp;veren kısa mesaj, elektronik posta, internet, disk, CD, DVD, hafıza kartı ve benzeri her t&uuml;rl&uuml; ara&ccedil; veya ortamı,</p>\r\n\r\n<p>&ccedil;) Kanun: 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanunu,</p>\r\n\r\n<p>d) Mal: Alışverişe konu olan; taşınır eşya, konut veya tatil ama&ccedil;lı taşınmaz mallar ile elektronik ortamda kullanılmak &uuml;zere hazırlanan yazılım, ses, g&ouml;r&uuml;nt&uuml; ve benzeri her t&uuml;rl&uuml; gayri maddi malları,</p>\r\n\r\n<p>e) Mesafeli s&ouml;zleşme: Satıcı veya sağlayıcı ile t&uuml;keticinin eş zamanlı fiziksel varlığı olmaksızın, mal veya hizmetlerin uzaktan pazarlanmasına y&ouml;nelik olarak oluşturulmuş bir sistem &ccedil;er&ccedil;evesinde, taraflar arasında s&ouml;zleşmenin kurulduğu ana kadar ve kurulduğu an da&nbsp;dahil&nbsp;olmak &uuml;zere uzaktan iletişim ara&ccedil;larının kullanılması suretiyle kurulan s&ouml;zleşmeleri,</p>\r\n\r\n<p>f) Sağlayıcı: Kamu t&uuml;zel kişileri de&nbsp;dahil&nbsp;olmak &uuml;zere ticari veya mesleki ama&ccedil;larla t&uuml;keticiye hizmet sunan ya da hizmet sunanın adına ya da hesabına hareket eden ger&ccedil;ek veya t&uuml;zel kişiyi,</p>\r\n\r\n<p>g) Satıcı: Kamu t&uuml;zel kişileri de&nbsp;dahil&nbsp;olmak &uuml;zere ticari veya mesleki ama&ccedil;larla t&uuml;keticiye mal sunan ya da mal sunanın adına ya da hesabına hareket eden ger&ccedil;ek veya t&uuml;zel kişiyi,</p>\r\n\r\n<p>ğ) T&uuml;ketici: Ticari veya mesleki olmayan ama&ccedil;larla hareket eden ger&ccedil;ek veya t&uuml;zel kişiyi,</p>\r\n\r\n<p>h) Uzaktan iletişim aracı: Mektup, katalog, telefon, faks, radyo, televizyon, elektronik posta mesajı, kısa mesaj, internet gibi fiziksel olarak karşı karşıya gelinmeksizin s&ouml;zleşme kurulmasına&nbsp;imkan&nbsp;veren her t&uuml;rl&uuml; ara&ccedil; veya ortamı,</p>\r\n\r\n<p>ı) Yan s&ouml;zleşme: Bir mesafeli s&ouml;zleşme ile ilişkili olarak satıcı, sağlayıcı ya da &uuml;&ccedil;&uuml;nc&uuml; bir kişi tarafından s&ouml;zleşme konusu mal ya da hizmete ilave olarak t&uuml;keticiye sağlanan mal veya hizmete ilişkin s&ouml;zleşmeyi</p>\r\n\r\n<p>ifade&nbsp;eder.</p>\r\n\r\n<p>İKİNCİ B&Ouml;L&Uuml;M</p>\r\n\r\n<p>&Ouml;n Bilgilendirme Y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;</p>\r\n\r\n<p><strong>&Ouml;n bilgilendirme</strong></p>\r\n\r\n<p><strong>MADDE 5 &ndash;</strong>&nbsp;(1) T&uuml;ketici, mesafeli s&ouml;zleşmenin kurulmasından ya da buna karşılık gelen herhangi bir teklifi kabul etmeden &ouml;nce, aşağıdaki hususların tamamını i&ccedil;erecek şekilde satıcı veya sağlayıcı tarafından bilgilendirilmek zorundadır.</p>\r\n\r\n<p>a) S&ouml;zleşme konusu mal veya hizmetin temel nitelikleri,</p>\r\n\r\n<p>b) Satıcı veya sağlayıcının adı veya unvanı, varsa MERSİS numarası,</p>\r\n\r\n<p>c) T&uuml;keticinin satıcı veya sağlayıcı ile hızlı bir şekilde irtibat kurmasına&nbsp;imkan&nbsp;veren, satıcı veya sağlayıcının a&ccedil;ık adresi, telefon numarası ve benzeri iletişim bilgileri ile varsa satıcı veya sağlayıcının adına ya da hesabına hareket edenin kimliği ve adresi,</p>\r\n\r\n<p>&ccedil;) Satıcı veya sağlayıcının t&uuml;keticinin&nbsp;şikayetlerini&nbsp;iletmesi i&ccedil;in (c) bendinde belirtilenden farklı iletişim bilgileri var ise, bunlara ilişkin bilgi,</p>\r\n\r\n<p>d) Mal veya hizmetin t&uuml;m vergiler&nbsp;dahil&nbsp;toplam fiyatı, niteliği itibariyle &ouml;nceden hesaplanamıyorsa fiyatın hesaplanma usul&uuml;, varsa t&uuml;m nakliye, teslim ve benzeri ek masraflar ile bunların &ouml;nceden hesaplanamaması halinde ek masrafların &ouml;denebileceği bilgisi,</p>\r\n\r\n<p>e) S&ouml;zleşmenin kurulması aşamasında uzaktan iletişim aracının kullanım bedelinin olağan &uuml;cret tarifesi &uuml;zerinden hesaplanamadığı durumlarda, t&uuml;keticilere y&uuml;klenen ilave maliyet,</p>\r\n\r\n<p>f) &Ouml;deme, teslimat, ifaya ilişkin bilgiler ile varsa bunlara ilişkin taahh&uuml;tler ve satıcı veya sağlayıcının&nbsp;şikayetlere&nbsp;ilişkin &ccedil;&ouml;z&uuml;m y&ouml;ntemleri,</p>\r\n\r\n<p>g) Cayma hakkının olduğu durumlarda, bu hakkın kullanılma şartları, s&uuml;resi, usul&uuml; ve satıcının iade i&ccedil;in &ouml;ng&ouml;rd&uuml;ğ&uuml; taşıyıcıya ilişkin bilgiler,</p>\r\n\r\n<p>ğ) Cayma bildiriminin yapılacağı a&ccedil;ık adres, faks numarası veya elektronik posta bilgileri,</p>\r\n\r\n<p>h) 15 inci madde uyarınca cayma hakkının kullanılamadığı durumlarda, t&uuml;keticinin cayma hakkından faydalanamayacağına ya da hangi koşullarda cayma hakkını kaybedeceğine ilişkin bilgi,</p>\r\n\r\n<p>ı) Satıcı veya sağlayıcının talebi &uuml;zerine, varsa t&uuml;ketici tarafından &ouml;denmesi veya sağlanması gereken depozitolar ya da diğer mali teminatlar ve bunlara ilişkin şartlar,</p>\r\n\r\n<p>i) Varsa dijital i&ccedil;eriklerin işlevselliğini etkileyebilecek teknik koruma &ouml;nlemleri,</p>\r\n\r\n<p>j) Satıcı veya sağlayıcının bildiği ya da makul olarak bilmesinin beklendiği, dijital i&ccedil;eriğin hangi donanım ya da yazılımla birlikte &ccedil;alışabileceğine ilişkin bilgi,</p>\r\n\r\n<p>k) T&uuml;keticilerin uyuşmazlık konusundaki başvurularını T&uuml;ketici Mahkemesine veya T&uuml;ketici Hakem Heyetine yapabileceklerine dair bilgi.</p>\r\n\r\n<p>(2) Birinci fıkrada belirtilen bilgiler, mesafeli s&ouml;zleşmenin ayrılmaz bir par&ccedil;asıdır ve taraflar aksini a&ccedil;ık&ccedil;a kararlaştırmadık&ccedil;a bu bilgiler değiştirilemez.</p>\r\n\r\n<p>(3) Satıcı veya sağlayıcı, birinci fıkranın (d) bendinde yer alan ek masraflara ilişkin bilgilendirme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml; yerine getirmezse, t&uuml;ketici bunları karşılamakla y&uuml;k&uuml;ml&uuml; değildir.</p>\r\n\r\n<p>(4) Birinci fıkranın (d) bendinde yer alan toplam fiyatın, belirsiz s&uuml;reli s&ouml;zleşmelerde veya belirli s&uuml;reli abonelik s&ouml;zleşmelerinde, her faturalama d&ouml;nemi bazında toplam masrafları i&ccedil;ermesi zorunludur.</p>\r\n\r\n<p>(5) A&ccedil;ık artırma veya eksiltme yoluyla kurulan s&ouml;zleşmelerde, birinci fıkranın (b), (c) ve (&ccedil;) bentlerinde yer alan bilgilerin yerine a&ccedil;ık artırmayı yapan ile ilgili bilgilere yer verilebilir.</p>\r\n\r\n<p>(6) &Ouml;n bilgilendirme yapıldığına ilişkin ispat y&uuml;k&uuml; satıcı veya sağlayıcıya aittir.</p>\r\n\r\n<p><strong>&Ouml;n bilgilendirme y&ouml;ntemi</strong></p>\r\n\r\n<p><strong>MADDE 6 &ndash;</strong>&nbsp;(1) T&uuml;ketici, 5 inci maddenin birinci fıkrasında belirtilen t&uuml;m hususlarda, kullanılan uzaktan iletişim aracına uygun olarak en az on iki punto b&uuml;y&uuml;kl&uuml;ğ&uuml;nde, anlaşılabilir bir dilde, a&ccedil;ık, sade ve okunabilir bir şekilde satıcı veya sağlayıcı tarafından yazılı olarak veya kalıcı veri saklayıcısı ile bilgilendirilmek zorundadır.</p>\r\n\r\n<p>(2) Mesafeli s&ouml;zleşmenin internet yoluyla kurulması halinde, satıcı veya sağlayıcı;</p>\r\n\r\n<p>a) 5 inci maddenin birinci fıkrasında yer alan bilgilendirme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; saklı kalmak kaydıyla, aynı fıkranın (a), (d), (g) ve (h) bentlerinde yer alan bilgileri bir b&uuml;t&uuml;n olarak, t&uuml;keticinin &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; altına girmesinden hemen &ouml;nce a&ccedil;ık bir şekilde ayrıca g&ouml;stermek,</p>\r\n\r\n<p>b) Herhangi bir g&ouml;nderim kısıtlamasının uygulanıp uygulanmadığını ve hangi &ouml;deme ara&ccedil;larının kabul edildiğini, en ge&ccedil; t&uuml;ketici siparişini vermeden &ouml;nce, a&ccedil;ık ve anlaşılabilir bir şekilde belirtmek</p>\r\n\r\n<p>zorundadır.</p>\r\n\r\n<p>(3) Mesafeli s&ouml;zleşmenin sesli iletişim yoluyla kurulması halinde, satıcı veya sağlayıcı 5 inci maddenin birinci fıkrasının (a), (d), (g) ve (h) bentlerinde yer alan hususlarda, t&uuml;keticiyi sipariş vermeden hemen &ouml;nce a&ccedil;ık ve anlaşılır bir şekilde s&ouml;z konusu ortamda bilgilendirmek ve 5 inci maddenin birinci fıkrasında yer alan bilgilerin tamamını en ge&ccedil; mal teslimine veya hizmet ifasına kadar yazılı olarak g&ouml;ndermek zorundadır.</p>\r\n\r\n<p>(4) Siparişe ilişkin bilgilerin sınırlı alanda ya da zamanda sunulduğu bir ortam yoluyla mesafeli s&ouml;zleşmenin kurulması halinde, satıcı veya sağlayıcı 5 inci maddenin birinci fıkrasının (a), (b), (d), (g) ve (h) bentlerinde yer alan hususlarda, t&uuml;keticiyi sipariş vermeden hemen &ouml;nce a&ccedil;ık ve anlaşılabilir bir şekilde s&ouml;z konusu ortamda bilgilendirmek ve 5 inci maddenin birinci fıkrasında yer alan bilgilerin tamamını en ge&ccedil; mal teslimine veya hizmet ifasına kadar yazılı olarak g&ouml;ndermek zorundadır.</p>\r\n\r\n<p>(5) &Uuml;&ccedil;&uuml;nc&uuml; ve d&ouml;rd&uuml;nc&uuml; fıkralarda belirtilen y&ouml;ntemlerle kurulan ve anında ifa edilen hizmet satışlarına ilişkin s&ouml;zleşmelerde t&uuml;keticinin, sipariş vermeden hemen &ouml;nce s&ouml;z konusu ortamda 5 inci maddenin birinci fıkrasının sadece (a), (b), (d) ve (h) bentlerinde yer alan hususlarda a&ccedil;ık ve anlaşılır bir şekilde bilgilendirilmesi yeterlidir.</p>\r\n\r\n<p><strong>&Ouml;n bilgilerin teyidi</strong></p>\r\n\r\n<p><strong>MADDE 7 &ndash;</strong>&nbsp;(1) Satıcı veya sağlayıcı, t&uuml;keticinin 6&nbsp;ncı&nbsp;maddede belirtilen y&ouml;ntemlerle &ouml;n bilgileri edindiğini kullanılan uzaktan iletişim aracına uygun olarak teyit etmesini sağlamak zorundadır. Aksi halde s&ouml;zleşme kurulmamış sayılır.</p>\r\n\r\n<p><strong>&Ouml;n bilgilendirmeye ilişkin diğer y&uuml;k&uuml;ml&uuml;l&uuml;kler</strong></p>\r\n\r\n<p><strong>MADDE 8 &ndash;</strong>&nbsp;(1) Satıcı veya sağlayıcı, t&uuml;ketici siparişi onaylamadan hemen &ouml;nce, verilen siparişin &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; anlamına geldiği hususunda t&uuml;keticiyi a&ccedil;ık ve anlaşılır bir şekilde bilgilendirmek zorundadır. Aksi halde t&uuml;ketici siparişi ile bağlı değildir.</p>\r\n\r\n<p>(2) T&uuml;keticinin mesafeli s&ouml;zleşme kurulması amacıyla satıcı veya sağlayıcı tarafından telefonla aranması durumunda, her g&ouml;r&uuml;şmenin başında satıcı veya sağlayıcı kimliğini, eğer bir başkası adına veya hesabına arıyorsa bu kişinin kimliğini ve g&ouml;r&uuml;şmenin ticari amacını a&ccedil;ıklamalıdır.</p>\r\n\r\n<p>&Uuml;&Ccedil;&Uuml;NC&Uuml; B&Ouml;L&Uuml;M</p>\r\n\r\n<p>Cayma Hakkının Kullanımı ve Tarafların Y&uuml;k&uuml;ml&uuml;l&uuml;kleri</p>\r\n\r\n<p><strong>Cayma hakkı</strong></p>\r\n\r\n<p><strong>MADDE 9 &ndash;</strong>&nbsp;(1) T&uuml;ketici, on d&ouml;rt g&uuml;n i&ccedil;inde herhangi bir gerek&ccedil;e g&ouml;stermeksizin ve cezai şart &ouml;demeksizin s&ouml;zleşmeden cayma hakkına sahiptir.</p>\r\n\r\n<p>(2) Cayma hakkı s&uuml;resi, hizmet ifasına ilişkin s&ouml;zleşmelerde s&ouml;zleşmenin kurulduğu g&uuml;n; mal teslimine ilişkin s&ouml;zleşmelerde ise t&uuml;keticinin veya t&uuml;ketici tarafından belirlenen &uuml;&ccedil;&uuml;nc&uuml; kişinin malı teslim aldığı g&uuml;n başlar. Ancak t&uuml;ketici, s&ouml;zleşmenin kurulmasından malın teslimine kadar olan s&uuml;re i&ccedil;inde de cayma hakkını kullanabilir.</p>\r\n\r\n<p>(3) Cayma hakkı s&uuml;resinin belirlenmesinde;</p>\r\n\r\n<p>a) Tek sipariş konusu olup ayrı&nbsp;ayrı&nbsp;teslim edilen mallarda, t&uuml;keticinin veya t&uuml;ketici tarafından belirlenen &uuml;&ccedil;&uuml;nc&uuml; kişinin son malı teslim aldığı g&uuml;n,</p>\r\n\r\n<p>b) Birden fazla par&ccedil;adan oluşan mallarda, t&uuml;keticinin veya t&uuml;ketici tarafından belirlenen &uuml;&ccedil;&uuml;nc&uuml; kişinin son par&ccedil;ayı teslim aldığı g&uuml;n,</p>\r\n\r\n<p>c) Belirli bir s&uuml;re boyunca malın d&uuml;zenli tesliminin yapıldığı s&ouml;zleşmelerde, t&uuml;keticinin veya t&uuml;ketici tarafından belirlenen &uuml;&ccedil;&uuml;nc&uuml; kişinin ilk malı teslim aldığı g&uuml;n</p>\r\n\r\n<p>esas&nbsp;alınır.</p>\r\n\r\n<p>(4) Malın satıcı tarafından taşıyıcıya teslimi, t&uuml;keticiye yapılan teslim olarak kabul edilmez.</p>\r\n\r\n<p>(5) Mal teslimi ile hizmet ifasının birlikte yapıldığı s&ouml;zleşmelerde, mal teslimine ilişkin cayma hakkı h&uuml;k&uuml;mleri uygulanır.</p>\r\n\r\n<p><strong>Eksik bilgilendirme</strong></p>\r\n\r\n<p><strong>MADDE 10 &ndash;</strong>&nbsp;(1) Satıcı veya sağlayıcı, cayma hakkı konusunda t&uuml;keticinin bilgilendirildiğini ispat etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. T&uuml;ketici, cayma hakkı konusunda gerektiği şekilde bilgilendirilmezse, cayma hakkını kullanmak i&ccedil;in on d&ouml;rt g&uuml;nl&uuml;k s&uuml;reyle bağlı değildir. Bu s&uuml;re her hal&uuml;karda cayma s&uuml;resinin bittiği tarihten itibaren bir yıl sonra sona erer.</p>\r\n\r\n<p>(2) Cayma hakkı konusunda gerektiği şekilde bilgilendirmenin bir yıllık s&uuml;re i&ccedil;inde yapılması halinde, on d&ouml;rt g&uuml;nl&uuml;k cayma hakkı s&uuml;resi, bu bilgilendirmenin gereği gibi yapıldığı g&uuml;nden itibaren işlemeye başlar.</p>\r\n\r\n<p><strong>Cayma hakkının kullanımı</strong></p>\r\n\r\n<p><strong>MADDE 11 &ndash;</strong>&nbsp;(1) Cayma hakkının kullanıldığına dair bildirimin cayma hakkı s&uuml;resi dolmadan, yazılı olarak veya kalıcı veri saklayıcısı ile satıcı veya sağlayıcıya y&ouml;neltilmesi yeterlidir.</p>\r\n\r\n<p>(2) Cayma hakkının kullanılmasında t&uuml;ketici,&nbsp;EK&rsquo;te&nbsp;yer alan formu kullanabileceği gibi cayma kararını bildiren a&ccedil;ık bir beyanda da bulunabilir. Satıcı veya sağlayıcı, t&uuml;keticinin bu formu doldurabilmesi veya cayma beyanını g&ouml;nderebilmesi i&ccedil;in internet sitesi &uuml;zerinden se&ccedil;enek de sunabilir.&nbsp;&nbsp;İnternet sitesi &uuml;zerinden t&uuml;keticilere cayma hakkı sunulması durumunda satıcı veya sağlayıcı, t&uuml;keticilerin iletmiş olduğu cayma taleplerinin kendilerine ulaştığına ilişkin teyit bilgisini t&uuml;keticiye derhal iletmek zorundadır.</p>\r\n\r\n<p>(3) Sesli iletişim yoluyla yapılan satışlarda, satıcı veya sağlayıcı,&nbsp;EK&rsquo;te&nbsp;yer alan formu en ge&ccedil; mal teslimine veya hizmet ifasına kadar t&uuml;keticiye g&ouml;ndermek zorundadır. T&uuml;ketici bu t&uuml;r satışlarda da cayma hakkını kullanmak i&ccedil;in bu formu kullanabileceği gibi, ikinci fıkradaki y&ouml;ntemleri de kullanabilir.</p>\r\n\r\n<p>(4) Bu maddede ge&ccedil;en cayma hakkının kullanımına ilişkin ispat y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; t&uuml;keticiye aittir.</p>\r\n\r\n<p><strong>Satıcı veya sağlayıcının y&uuml;k&uuml;ml&uuml;l&uuml;kleri</strong></p>\r\n\r\n<p><strong>MADDE 12 &ndash;</strong>&nbsp;(1) Satıcı veya sağlayıcı, t&uuml;keticinin cayma hakkını kullandığına ilişkin bildirimin kendisine ulaştığı tarihten itibaren on d&ouml;rt g&uuml;n i&ccedil;inde, varsa malın t&uuml;keticiye teslim masrafları da&nbsp;dahil&nbsp;olmak &uuml;zere tahsil edilen t&uuml;m &ouml;demeleri iade etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p>(2) Satıcı veya sağlayıcı, birinci fıkrada belirtilen t&uuml;m geri &ouml;demeleri, t&uuml;keticinin satın alırken kullandığı &ouml;deme aracına uygun bir şekilde ve t&uuml;keticiye herhangi bir masraf veya y&uuml;k&uuml;ml&uuml;l&uuml;k getirmeden tek seferde yapmak zorundadır.</p>\r\n\r\n<p>(3) Cayma hakkının kullanımında, 5 inci maddenin birinci fıkrasının (g) bendi kapsamında, satıcının iade i&ccedil;in belirttiği taşıyıcı aracılığıyla malın geri g&ouml;nderilmesi halinde, t&uuml;ketici iadeye ilişkin masraflardan sorumlu tutulamaz. Satıcının &ouml;n bilgilendirmede iade i&ccedil;in herhangi bir taşıyıcıyı belirtmediği durumda ise, t&uuml;keticiden iade masrafına ilişkin herhangi bir bedel talep edilemez. İade i&ccedil;in &ouml;n bilgilendirmede belirtilen taşıyıcının, t&uuml;keticinin bulunduğu yerde şubesinin olmaması durumunda satıcı, ilave hi&ccedil;bir masraf talep etmeksizin iade edilmek istenen malın t&uuml;keticiden alınmasını sağlamakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p><strong>T&uuml;keticinin y&uuml;k&uuml;ml&uuml;l&uuml;kleri</strong></p>\r\n\r\n<p><strong>MADDE 13 &ndash;</strong>&nbsp;(1) Satıcı veya sağlayıcı malı kendisinin geri alacağına dair bir teklifte bulunmadık&ccedil;a, t&uuml;ketici cayma hakkını kullandığına ilişkin bildirimi y&ouml;nelttiği tarihten itibaren on g&uuml;n i&ccedil;inde malı satıcı veya sağlayıcıya ya da yetkilendirmiş olduğu kişiye geri g&ouml;ndermek zorundadır.</p>\r\n\r\n<p>(2) T&uuml;ketici, cayma s&uuml;resi i&ccedil;inde malı, işleyişine, teknik &ouml;zelliklerine ve kullanım talimatlarına uygun bir şekilde kullandığı takdirde meydana gelen değişiklik ve bozulmalardan sorumlu değildir.</p>\r\n\r\n<p><strong>Cayma hakkının kullanımının yan s&ouml;zleşmelere etkisi</strong></p>\r\n\r\n<p><strong>MADDE 14 &ndash;</strong>&nbsp;(1) Kanunun 30 uncu maddesi h&uuml;k&uuml;mleri saklı kalmak koşuluyla, t&uuml;keticinin cayma hakkını kullanması durumunda yan s&ouml;zleşmeler de kendiliğinden sona erer. Bu durumda t&uuml;ketici, 13 &uuml;nc&uuml; maddenin ikinci fıkrasında belirtilen haller dışında herhangi bir masraf, tazminat veya cezai şart &ouml;demekle y&uuml;k&uuml;ml&uuml; değildir.</p>\r\n\r\n<p>(2) Satıcı veya sağlayıcı, t&uuml;keticinin cayma hakkını kullandığını yan s&ouml;zleşmenin tarafı olan &uuml;&ccedil;&uuml;nc&uuml; kişiye derhal bildirmelidir.</p>\r\n\r\n<p><strong>Cayma hakkının istisnaları</strong></p>\r\n\r\n<p><strong>MADDE 15 &ndash;</strong>&nbsp;(1) Taraflarca aksi kararlaştırılmadık&ccedil;a, t&uuml;ketici aşağıdaki s&ouml;zleşmelerde cayma hakkını kullanamaz:</p>\r\n\r\n<p>a) Fiyatı finansal piyasalardaki dalgalanmalara bağlı olarak değişen ve satıcı veya sağlayıcının kontrol&uuml;nde olmayan mal veya hizmetlere ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>b) T&uuml;keticinin istekleri veya kişisel ihtiya&ccedil;ları doğrultusunda hazırlanan mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>c) &Ccedil;abuk bozulabilen veya son kullanma tarihi ge&ccedil;ebilecek malların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>&ccedil;) Tesliminden sonra ambalaj, bant, m&uuml;h&uuml;r, paket gibi koruyucu unsurları a&ccedil;ılmış olan mallardan; iadesi sağlık ve&nbsp;hijyen&nbsp;a&ccedil;ısından uygun olmayanların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>d) Tesliminden sonra başka &uuml;r&uuml;nlerle karışan ve doğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>e) Malın tesliminden sonra ambalaj, bant, m&uuml;h&uuml;r, paket gibi koruyucu unsurları a&ccedil;ılmış olması halinde maddi ortamda sunulan kitap, dijital i&ccedil;erik ve bilgisayar sarf malzemelerine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>f) Abonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>g) Belirli bir tarihte veya d&ouml;nemde yapılması gereken, konaklama, eşya taşıma, araba kiralama, yiyecek-i&ccedil;ecek tedariki ve eğlence veya dinlenme amacıyla yapılan boş zamanın değerlendirilmesine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>ğ) Elektronik ortamda anında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen&nbsp;gayrimaddi&nbsp;mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>h) Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>D&Ouml;RD&Uuml;NC&Uuml; B&Ouml;L&Uuml;M</p>\r\n\r\n<p>Diğer H&uuml;k&uuml;mler</p>\r\n\r\n<p><strong>S&ouml;zleşmenin ifası ve teslimat</strong></p>\r\n\r\n<p><strong>MADDE 16 &ndash;</strong>&nbsp;(1) Satıcı veya sağlayıcı, t&uuml;keticinin siparişinin kendisine ulaştığı tarihten itibaren taahh&uuml;t ettiği s&uuml;re i&ccedil;inde edimini yerine getirmek zorundadır. Mal satışlarında bu s&uuml;re her hal&uuml;karda otuz g&uuml;n&uuml; ge&ccedil;emez.</p>\r\n\r\n<p>(2) Satıcı veya sağlayıcının birinci fıkrada yer alan y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml; yerine getirmemesi durumunda, t&uuml;ketici s&ouml;zleşmeyi feshedebilir.</p>\r\n\r\n<p>(3) S&ouml;zleşmenin feshi durumunda, satıcı veya sağlayıcı, varsa teslimat masrafları da d&acirc;hil olmak &uuml;zere tahsil edilen t&uuml;m &ouml;demeleri fesih bildiriminin kendisine ulaştığı tarihten itibaren on d&ouml;rt g&uuml;n i&ccedil;inde t&uuml;keticiye&nbsp;4/12/1984tarihli ve 3095 sayılı Kanuni Faiz ve Temerr&uuml;t Faizine İlişkin Kanunun 1 inci maddesine g&ouml;re belirlenen kanuni faiziyle birlikte geri &ouml;demek ve varsa t&uuml;keticiyi bor&ccedil; altına sokan t&uuml;m kıymetli evrak ve benzeri belgeleri iade etmek zorundadır.</p>\r\n\r\n<p>(4) Sipariş konusu mal ya da hizmet ediminin yerine getirilmesinin&nbsp;imkansızlaştığı&nbsp;hallerde satıcı veya sağlayıcının bu durumu &ouml;ğrendiği tarihten itibaren &uuml;&ccedil; g&uuml;n i&ccedil;inde t&uuml;keticiye yazılı olarak veya kalıcı veri saklayıcısı ile bildirmesi ve varsa teslimat masrafları da d&acirc;hil olmak &uuml;zere tahsil edilen t&uuml;m &ouml;demeleri bildirim tarihinden itibaren en ge&ccedil; on d&ouml;rt g&uuml;n i&ccedil;inde iade etmesi zorunludur. Malın stokta bulunmaması durumu, mal ediminin yerine getirilmesinin imk&acirc;nsızlaşması olarak kabul edilmez.</p>\r\n\r\n<p><strong>Zarardan sorumluluk</strong></p>\r\n\r\n<p><strong>MADDE 17 &ndash;</strong>&nbsp;(1) Satıcı, malın t&uuml;ketici ya da t&uuml;keticinin taşıyıcı dışında belirleyeceği &uuml;&ccedil;&uuml;nc&uuml; bir kişiye teslimine kadar oluşan kayıp ve hasarlardan sorumludur.</p>\r\n\r\n<p>(2) T&uuml;keticinin, satıcının belirlediği taşıyıcı dışında başka bir taşıyıcı ile malın g&ouml;nderilmesini talep etmesi durumunda, malın ilgili taşıyıcıya tesliminden itibaren oluşabilecek kayıp ya da hasardan satıcı sorumlu değildir.</p>\r\n\r\n<p><strong>Telefon kullanım &uuml;creti</strong></p>\r\n\r\n<p><strong>MADDE 18 &ndash;</strong>&nbsp;(1) Kurulmuş olan s&ouml;zleşmeye ilişkin olarak t&uuml;keticilerin iletişime ge&ccedil;ebilmesi i&ccedil;in satıcı veya sağlayıcı tarafından bir telefon hattı tahsis edilmesi durumunda, bu hat ile ilgili olarak satıcı veya sağlayıcı olağan &uuml;cret tarifesinden daha y&uuml;ksek bir tarife se&ccedil;emez.</p>\r\n\r\n<p><strong>İlave &ouml;demeler</strong></p>\r\n\r\n<p><strong>MADDE 19 &ndash;</strong>&nbsp;(1) S&ouml;zleşme kurulmadan &ouml;nce, s&ouml;zleşme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;nden kaynaklanan ve &uuml;zerinde anlaşılmış esas bedel dışında herhangi bir ilave bedel talep edilebilmesi i&ccedil;in t&uuml;keticinin a&ccedil;ık onayının ayrıca alınması zorunludur.</p>\r\n\r\n<p>(2) T&uuml;keticinin a&ccedil;ık onayı alınmadan ilave &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; doğuran se&ccedil;eneklerin kendiliğinden se&ccedil;ili olarak sunulmuş olmasından dolayı t&uuml;ketici bir &ouml;demede bulunmuş ise, satıcı veya sağlayıcı bu &ouml;demelerin iadesini derhal yapmak zorundadır.</p>\r\n\r\n<p><strong>Bilgilerin saklanması ve ispat y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;</strong></p>\r\n\r\n<p><strong>MADDE 20 &minus;</strong>&nbsp;(1) Satıcı veya sağlayıcı, bu Y&ouml;netmelik kapsamında d&uuml;zenlenen cayma hakkı, bilgilendirme, teslimat ve diğer hususlardaki y&uuml;k&uuml;ml&uuml;l&uuml;klerine dair her bir işleme ilişkin bilgi ve belgeyi &uuml;&ccedil; yıl boyunca saklamak zorundadır.</p>\r\n\r\n<p>(2) Oluşturdukları sistem &ccedil;er&ccedil;evesinde, uzaktan iletişim ara&ccedil;larını kullanmak veya kullandırmak suretiyle satıcı veya sağlayıcı adına mesafeli s&ouml;zleşme kurulmasına aracılık edenler, bu Y&ouml;netmelikte yer alan hususlardan dolayı satıcı veya sağlayıcı ile yapılan işlemlere ilişkin kayıtları &uuml;&ccedil; yıl boyunca tutmak ve istenilmesi halinde bu bilgileri ilgili kurum, kuruluş ve t&uuml;keticilere vermekle y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p>(3) Satıcı veya sağlayıcı elektronik ortamda t&uuml;keticiye teslim edilen&nbsp;gayrimaddi&nbsp;malların veya ifa edilen hizmetlerin ayıpsız olduğunu ispatla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p>BEŞİNCİ B&Ouml;L&Uuml;M</p>\r\n\r\n<p>&Ccedil;eşitli ve Son H&uuml;k&uuml;mler</p>\r\n\r\n<p><strong>Y&uuml;r&uuml;rl&uuml;kten kaldırılan y&ouml;netmelik</strong></p>\r\n\r\n<p><strong>MADDE 21 &ndash;</strong>&nbsp;(1)&nbsp;6/3/2011&nbsp;tarihli ve 27866 sayılı Resm&icirc; Gazete&rsquo;de yayımlanan Mesafeli S&ouml;zleşmelere Dair Y&ouml;netmelik y&uuml;r&uuml;rl&uuml;kten kaldırılmıştır.</p>\r\n\r\n<p><strong>Y&uuml;r&uuml;rl&uuml;k</strong></p>\r\n\r\n<p><strong>MADDE 22 &ndash;</strong>&nbsp;(1) Bu Y&ouml;netmelik yayımı tarihinden itibaren &uuml;&ccedil; ay sonra y&uuml;r&uuml;rl&uuml;ğe girer.</p>\r\n\r\n<p><strong>Y&uuml;r&uuml;tme</strong></p>\r\n\r\n<p><strong>MADDE 23 &ndash;</strong>&nbsp;(1) Bu Y&ouml;netmelik h&uuml;k&uuml;mlerini G&uuml;mr&uuml;k ve Ticaret Bakanı y&uuml;r&uuml;t&uuml;r.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>EK</p>\r\n\r\n<p>&Ouml;RNEK CAYMA FORMU</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>(Bu form, sadece s&ouml;zleşmeden cayma hakkı kullanılmak istenildiğinde doldurup</p>\r\n\r\n<p>g&ouml;nderilecektir.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-Kime:</strong>&nbsp;(Satıcı veya sağlayıcı tarafından doldurulacak olan bu kısımda satıcı veya sağlayıcının ismi, unvanı, adresi varsa faks numarası ve e-posta adresi yer alacaktır.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-Bu formla aşağıdaki malların satışına veya hizmetlerin sunulmasına ilişkin s&ouml;zleşmeden cayma hakkımı kullandığımı beyan ederim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-Sipariş tarihi veya teslim tarihi:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-Cayma hakkına konu mal veya hizmet:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-Cayma hakkına konu mal veya hizmetin bedeli:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-T&uuml;keticinin adı ve soyadı:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-T&uuml;keticinin adresi:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-T&uuml;keticinin imzası:</strong>&nbsp;(Sadece&nbsp;kağıt&nbsp;&uuml;zerinde g&ouml;nderilmesi halinde)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>-Tarih:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 20, '1', 'mesafeli-satis-sozlesmesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `kullanici_id`, `urun_id`, `urun_adet`) VALUES
(9, 152, 17, 1),
(12, 157, 19, 1),
(13, 157, 18, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `siparis_no` int(11) DEFAULT NULL,
  `kullanici_id` int(11) NOT NULL,
  `siparis_toplam` float(9,2) NOT NULL,
  `siparis_tip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_banka` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_odeme` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_zaman`, `siparis_no`, `kullanici_id`, `siparis_toplam`, `siparis_tip`, `siparis_banka`, `siparis_odeme`) VALUES
(750015, '2019-09-10 18:33:13', NULL, 157, 149.00, 'Havale / EFT', 'Ziraat Bankası', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisdetay`
--

CREATE TABLE `siparisdetay` (
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` decimal(8,2) NOT NULL,
  `urun_adet` int(2) NOT NULL,
  `urun_topfiyat` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparisdetay`
--

INSERT INTO `siparisdetay` (`siparis_id`, `urun_id`, `urun_fiyat`, `urun_adet`, `urun_topfiyat`) VALUES
(750015, 19, '99.00', 1, '99.00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

CREATE TABLE `siparis_detay` (
  `siparisdetay_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_aciklama`, `slider_resimyol`, `slider_sira`, `slider_link`, `slider_durum`) VALUES
(7, 'Tek taş gümüş yüzük', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lobortis ultricies erat et tempus. Nullam.', 'dimg/slider/2840423138227342501820443316512296221574yuzuk.jpg', 1, '', '1'),
(8, 'Ceket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lobortis ultricies erat et tempus. Nullam.', 'dimg/slider/2872122979284332798022523260263189526377ceket.jpg', 2, '', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `urun_onecikar` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `kategori_id`, `urun_zaman`, `urun_ad`, `urun_seourl`, `urun_detay`, `urun_fiyat`, `urun_video`, `urun_keyword`, `urun_stok`, `urun_durum`, `urun_onecikar`) VALUES
(18, 12, '2017-10-11 07:32:00', 'Codegen CKL-097KL 9,7', 'codegen-ckl-097kl-9-7', '<p>Haraketli Sabitleme Mekanizması&nbsp;<br />\r\nCodegen 9.7&quot; Universal Klavyeli Tablet Kılıfında bulunan hareketli sabitleme mekanizması sayesinde kılıfınız tabletinize zarar vermeden sıkıca kavrar d&uuml;şmelere ve sarsıntılara karşı tabletinize en &uuml;st seviyede koruma sağlar.&nbsp;</p>\r\n\r\n<p><img src=\"http://images.hepsiburada.net/assets/Bilgisayar/ProductDesc/TamEkran.png\" style=\"height:350px; margin:0px; width:600px\" /></p>\r\n\r\n<p><br />\r\n<strong>Tam Ekran Kullanım</strong><br />\r\nCodegen 9.7&quot; Universal Klavyeli Tablet Kılıfının usb bağlantısını tabletiniz ile yaptığınızda android tabletlerdeki ekran klavyesi kaybolur bu sayede ekranın tamamını kullanabilirsiniz. İnce, sessiz klavyesi ve tam ekran kullanım kolaylığıyla tabletinizde yazı yazmak, arkadaşlarınızla yazışmak ve internette dolaşmak hi&ccedil; bu kadar keyifli olmamıştı.&nbsp;</p>\r\n', 50.00, '', 'codegen', 100, '1', '1'),
(19, 13, '2017-10-11 07:33:36', 'Samsung Galaxy Note 4', 'samsung-galaxy-note-4', '<p>Yenilenmiş Samsung Galaxy Note 4!</p>\r\n\r\n<p>12 Ay Garantili Yenilenmiş Akıllı Telefon!&nbsp;<br />\r\nYenilenmiş &Uuml;r&uuml;n Nedir?&nbsp;<br />\r\nKontrolleri yapılmış, gerekli t&uuml;m bakım ve onarım işlemlerinden ge&ccedil;irilmiş, t&uuml;m fonksiyonları %100 &ccedil;alışan, &uuml;zerinde hi&ccedil;bir darbe, &ccedil;izik, soyulma, aşınma izi bulunmayan, kozmetik olarak yeni (sıfır) cihazdan farksızdır. Yenilenmiş t&uuml;m seviyelerdeki cihazların i&ccedil; aksam, tuş ve fonksiyonları aynı kondisyonda olup %100 olarak &ccedil;alışır durumdadır. Kullanıcı hatası dışındaki sorunlar 12 ay s&uuml;re ile MPX iletişim firması tarafından garanti altındadır. Paket i&ccedil;erisinde aksesuar olarak sadece şarj aleti bulunmaktadır.&nbsp;</p>\r\n', 99.00, '', 'samsung', 100, '1', '1'),
(20, 14, '2019-09-10 17:57:54', 'Apple iPhone X 64GB Silver Akıllı Telefon', 'apple-iphone-x-64gb-silver-akilli-telefon', '<p>Apple iPhone X 64GB Silver Akıllı Telefon</p>\r\n\r\n<p>Apple iPhone X 64 GB Space Grey Akıllı Telefon</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Apple&rsquo;ın onuncu yılına &ouml;zel &uuml;retilen telefonu&nbsp;iPhone X&nbsp;d&uuml;nyanın birka&ccedil; &uuml;lkesinde 3 Kasım&rsquo;da satışa &ccedil;ıkmasına rağmen T&uuml;rkiye&rsquo;de 4 Kasım 2018 tarihinde satışa &ccedil;ıktı.&nbsp;iPhone X,&nbsp;yenilenmiş tasarımı ile alıcıların dikkatini &uuml;zerine &ccedil;ekti. Apple&rsquo;ın onuncu yılına &ouml;zel olarak tasarlanmış olan&nbsp;iPhone X,&nbsp;Apple severlerin merakla bekledikleri modellerin arasında yerini aldı. Alışılmış Apple modellerinde g&ouml;r&uuml;len geri tuşu olarak kullanılan yuvarlak tuş ise&nbsp;iPhone X&rsquo;te&nbsp;kaldırılmış. Ekranı yukarı &ccedil;ekmek, geri tuşu &ouml;zelliği g&ouml;revi g&ouml;r&uuml;yor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Apple, iPhone X&rsquo;te&nbsp;Touch ID teknolojisini geride bırakacak yeni bir teknolojiye imza atıyor. Face ID ile Apple y&uuml;z tanıma &ouml;zelliğini hayata getiriyor. Apple, İphone 8 Plus modelinde kullanılan Retina HD ekran yerine&nbsp;iPhone X&nbsp;modeli ile Super Retina HD ekrana yer veriyor. Ayrıca ekran boyutu olarak iPhone 8 Plus&rsquo;tan daha b&uuml;y&uuml;k olan&nbsp;iPhone X&nbsp;beklenilenin aksine iPhone 8 Plus&rsquo;tan daha hafif.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&Ouml;nceki modellerinde &ouml;n kamerasında FaceTime HD kamera teknolojisini kullanan Apple,&nbsp;iPhone X&rsquo;de&nbsp;TrueDepth teknolojisine adım atıyor. Ayrıca portre modu, animoji ve memoji gibi bazı &ouml;zellikler yine Apple&rsquo;ın, kullanıcılarının hayatlarına&nbsp;iPhone X&nbsp;modeli ile kattığı yeniliklerden.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Apple iPhone X 64 GB &ouml;zellikleri</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Uzay Grisi ve G&uuml;m&uuml;ş renk se&ccedil;eneklerinde piyasaya sunulan&nbsp;iPhone X, gelişmiş &ouml;zellikleri ile kullanıcılarına b&uuml;y&uuml;k rahatlık sağlıyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5,65 in&ccedil; y&uuml;ksekliği ile iPhone 8 Plus modelinden daha kısa olan&nbsp;iPhone&nbsp;X, 2,79 in&ccedil; genişliği ve 0,30 in&ccedil; derinliğiyle de b&uuml;y&uuml;k bir telefon olarak adlandırılabilir. 174 gram olan ağırlığı ile kullanıcılarına rahatlık sağlıyor. Bu boyutlara sahip diğer telefonlara kıyasla daha hafif olması&nbsp;iPhone X&rsquo;in&nbsp;avantajlarına bir yenisini ekliyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5,8 in&ccedil; OLED Multi-Touch tam ekrana sahip olmasının yanında, kullanılmış olan Super Retina HD ekran teknolojisi ve True Tone ekran kullanımı, alıcıları i&ccedil;in&nbsp;iPhone X&rsquo;i&nbsp;en iyi tercihlerden birisi haline getiriyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>G&uuml;n&uuml;m&uuml;zde telefon kullanıcılarının en &ccedil;ok dikkat ettiği &ouml;zelliklerden olan kamera konusunda, Apple yine şaşırtmıyor. 12 MP geniş a&ccedil;ılı kamerasının yanında kullandığı telefoto (&ccedil;ift kamera) teknolojisi ile&nbsp;iPhone X&nbsp;kullanıcılarına y&uuml;ksek kalitede fotoğraf &ccedil;ekim avantajı sunuyor. Ayrıca 1080P ve 4K kalitede video kaydetme l&uuml;ks&uuml;n&uuml; de alıcıları ile buluşturuyor.&nbsp;iPhone X&rsquo;in&nbsp;kamerası video kaydında otomatik netleme &ouml;zelliği ve v&uuml;cut-y&uuml;z algılayış hızı ile de &ouml;nceki Apple modellerinin yanında &ouml;ne &ccedil;ıkıyor.&nbsp;Yaşanılan &ccedil;ağın en b&uuml;y&uuml;k gereksinimlerinden birisi olan &ouml;n kamerada ise&nbsp;iPhone X&nbsp;TrueDepth kamera teknolojisini kullanıyor. Bu teknoloji kaliteli &ouml;n kamerayı beraberinde getirirken Face ID teknolojisinin geliştirilmesinde de b&uuml;y&uuml;k rol oynuyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7&rsquo;ye g&ouml;re iki kat artırılmış pil g&uuml;c&uuml; ile kullanıcılarının karşısına &ccedil;ıkan Apple, kendine yapılan eleştirilere kulak verdiğini de kullanıcılarına kanıtlamış oluyor. Kablosuz bağlantı &uuml;zerinden 21 saate kadar konuşma s&uuml;resi sağlayan&nbsp;iPhone X, hızlı şarj &ouml;zelliği ile 30 dakikada %50&rsquo;ye kadar şarj edilebilme &ouml;zelliğini de kullanıcılara sunuyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mevcut olan mikro simlerle uyumlu olmayan&nbsp;iPhone X, nano simleri algılayacak şekilde tasarlanmış.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kullanıcılarına pek &ccedil;ok konuda rahatlık sağlayan&nbsp;iPhone X&nbsp;ile Apple, farkını yine g&ouml;steriyor. Eski modellerdeki şikayetleri bu modelde yok eden Apple alışılmadık bir tasarım kullanarak da alıcılarının dikkatini&nbsp;iPhone X&rsquo;e&nbsp;&ccedil;ekiyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone X 64 GB fiyatları</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone X&nbsp;64&nbsp;GB,&nbsp;iPhone X&#39;in&nbsp;diğer modellerinin yanında en uygun fiyatlı olan model olarak kullanıcılarına sunuluyor. Depolama alanı arttık&ccedil;a fiyatta da artış g&ouml;steren piyasaya sunulan modelleri arasında en d&uuml;ş&uuml;k depolama alanlı olan&nbsp;iPhone X&nbsp;64 GB&#39;ın&nbsp;depolama alanı arttırılamıyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone X&nbsp;modelleri, iPhone XS modellerine g&ouml;re daha uygun fiyatlı olmaktayken iPhone XR modellerine g&ouml;re daha pahalı olarak piyasaya sunuluyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone X &uuml;st&uuml;n &ouml;zellikleri ile sizlerle buluşuyor</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>12 MP geniş a&ccedil;ılı ve 12 MP telefoto kamera olmak &uuml;zere toplam 2 arka kameraya sahip olan&nbsp;iPhone X,&nbsp;10 kata kadar dijital yakınlaştırma yapabiliyor ve g&ouml;r&uuml;nt&uuml; kalitesini bozmadan &ccedil;ekimleri ger&ccedil;ekleştiriyor. 6 bileşenli lensi ve &ccedil;ift optik g&ouml;r&uuml;nt&uuml; stabilizasyonu sayesinde &ccedil;ekim esnasında titreme yaşatmıyor. Apple&#39;ın yeni kullanmaya başladığı Focus Pixels,&nbsp;iPhone X&#39;te&nbsp;otomatik netleme ve dokunarak otomatik netleme &ouml;zellikleriyle kendisini g&ouml;steriyor. P&uuml;r&uuml;z azaltma ve iyileştirilmiş yerel ton eşleme &ouml;zelliklerine sahip&nbsp;iPhone X,&nbsp;kullanıcılarına daha g&uuml;zel ve daha canlı fotoğraflar sunuyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TrueDepth kamerası ile kullanıcılarının kendi animojilerini yaratmalarını sağlayan cihaz yine TrueDepth kamera ile y&uuml;z tanıyor ve kendi g&uuml;venliğini sağlıyor. Renk yelpazesini &ouml;nceki modellere g&ouml;re &ccedil;ok daha fazla genişleten&nbsp;iPhone X,&nbsp;bu sayede kullanıcılarına fotoğraflar ve Live Photos i&ccedil;in daha geniş bir renk yelpazesi sunuyor. Bu durum fotoğrafların daha canlı ve daha net g&ouml;r&uuml;nt&uuml;lenmesini sağlıyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>720p HD, 1080p HD ve 4K HD video kaydı yapabilen&nbsp;iPhone X&nbsp;fotoğraflarda olduğu gibi videolarda da optik g&ouml;r&uuml;nt&uuml; stabilizasyonu kullanıyor. 4 LED&#39;e sahip True Tone Flash sayesinde &ccedil;ekim i&ccedil;in gereken ışığı en doğru şekilde ayarlayabiliyor ve 4K video &ccedil;ekerken 8 MP &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;kte fotoğraflar kaydedebiliyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone X Teknosa farkıyla sizlere ulaşıyor</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone X, Teknosa&nbsp;mağazalarında&nbsp;ve&nbsp;Teknosa.com&rsquo;da&nbsp;kullanıcılarının beğenilerine sunuluyor.&nbsp;Teknosa.com&rsquo;dan&nbsp;yapılan alışverişlerde kapıda teslim ve mağazadan teslim se&ccedil;enekleri ile kullanıcılarına isterlerse istedikleri adrese &uuml;r&uuml;n kargolama isterlerse de en yakın&nbsp;Teknosa&nbsp;mağazalarından&nbsp;&uuml;r&uuml;nlerini alabilme şansı tanıyor. 2 yıl garantiye sahip&nbsp;iPhone X&rsquo;e&nbsp;bir şey olduğu takdirde kullanıcı en yakın&nbsp;Teknosa&nbsp;mağazasına&nbsp;gidip teknik destek alabiliyor.&nbsp;Teknosa&rsquo;nın&nbsp;zaman zaman uyguladığı kampanyalar ve indirimler de takip edilerek&nbsp;iPhone&nbsp;X&rsquo;e&nbsp;uygun fiyatlarla sahip olmak kolaylaşıyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone X<br />\r\n<br />\r\n&Ouml;n y&uuml;z&uuml;n&uuml;n tamamı ekrandan oluşan bir telefona imza atmak daha en başından beri vizyonumuz oldu. Bu iPhone &ouml;ylesine etkileyici bir deneyim sunmalıydı ki onu kullanmaya başladığınız an elinizde bir telefon tuttuğunuzu unutmalıydınız.<br />\r\nVe &ouml;yle akıllı olmalıydı ki dokunuşlarınıza, sesinize ve hatta bakışınıza bile tepki verebilmeliydi. iPhone X ile şimdi bu vizyon ger&ccedil;eğe d&ouml;n&uuml;şt&uuml;. Gelecekle tanışmaya hazır olun.<br />\r\n<br />\r\n<br />\r\nTasarım ve Ekran<br />\r\n<br />\r\nKasası ve ekranı kesintisiz bir b&uuml;t&uuml;n oluşturan, en ince ayrıntısına kadar akıllı bir aygıt nasıl tasarlanır? İlk iPhone&rsquo;u tasarlarken de bunun cevabını bulmayı hedefledik. Ve iPhone X ile bu hedefimize ulaştık.<br />\r\n<br />\r\nEn yalın haliyle iPhone.<br />\r\n<br />\r\nKesintisiz bir deneyim sunan kesintisiz bir y&uuml;zey i&ccedil;in, Ana Ekran d&uuml;ğmesini kaldırdık. Yerine, telefonunuzda gezinmeniz i&ccedil;in yepyeni<br />\r\nama aynı zamanda &ccedil;ok tanıdık yollar geliştirdik.<br />\r\n<br />\r\nTelefonunuzda kolayca gezinmeniz i&ccedil;in doğal ve tanıdık hareketler.<br />\r\n<br />\r\nAna Ekran<br />\r\nEkranın altından yukarı doğru tek bir kaydırma hareketiyle Ana Ekran&rsquo;a ulaşın.<br />\r\n<br />\r\nMultitasking<br />\r\nA&ccedil;ık olan uygulamalarınızın t&uuml;m&uuml;n&uuml; g&ouml;rmek i&ccedil;in ekranı yukarı kaydırıp kısa bir s&uuml;re beklemeniz yeterli.<br />\r\n<br />\r\nDenetim Merkezi<br />\r\nKişiselleştirilebilir Denetim Merkezi&rsquo;ni a&ccedil;mak i&ccedil;in ekranı aşağı kaydırın.<br />\r\n<br />\r\nSiri<br />\r\nSiri&rsquo;ye bir soru sormak i&ccedil;in yan d&uuml;ğmeyi basılı tutun.<br />\r\n<br />\r\nK&uuml;&ccedil;&uuml;k boyutlar, b&uuml;y&uuml;k teknolojiler.<br />\r\n<br />\r\nTrueDepth kamera sistemi muhteşem fotoğraflar &ccedil;ekmenizi sağlarken aynı zamanda Face ID teknolojisini sunuyor. Ekranın &uuml;st kısmındaki minik bir alanda yer alan bu minyat&uuml;r mod&uuml;l, şimdiye kadar geliştirdiğimiz en gelişmiş teknolojilere ev sahipliği yapıyor.<br />\r\n<br />\r\nKarşınızda Super Retina. Bir m&uuml;hendislik harikası.<br />\r\n<br />\r\nSuper Retina HD ekranda yer alan OLED panel, sıradan OLED panellerden &ccedil;ok farklı. 1.000.000:1 kontrast oranı, y&uuml;ksek &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;k ve parlaklık, geniş renk yelpazesi desteği ve akıllı telefon d&uuml;nyasında bug&uuml;ne kadar g&ouml;rd&uuml;ğ&uuml;n&uuml;z en ger&ccedil;ek renkler. B&ouml;ylesine &ouml;zelliklerle dolu bir HDR ekranı m&uuml;mk&uuml;n kılmak i&ccedil;in &ouml;zel olarak tasarlanan bu OLED panel, aynı zamanda olduk&ccedil;a y&uuml;ksek olan standartlarımızı da karşılayacak şekilde d&uuml;ş&uuml;n&uuml;ld&uuml;.<br />\r\n<br />\r\nHer k&ouml;şesi g&ouml;z alıcı.<br />\r\nYenilik&ccedil;i bir katlama sisteminden ve devre istifleme teknolojisinden yararlanan OLED panel, aygıtın kıvrımlarını takip ederek telefonun en u&ccedil; k&ouml;şelerine kadar ulaşıyor. Kenarlarda bozulmayı &ouml;nlemek ve g&ouml;r&uuml;nt&uuml; kalitesini korumak i&ccedil;in, alt piksellere kadar &ldquo;&ouml;rt&uuml;şme &ouml;nleme&rdquo; adı verilen bir tekniği kullanarak her bir piksele ince ayar &ccedil;ekiyor.<br />\r\n<br />\r\nAkıllı telefon d&uuml;nyasında bug&uuml;ne kadar g&ouml;rd&uuml;ğ&uuml;n&uuml;z en ger&ccedil;ek renkler.<br />\r\nSuper Retina HD ekrandaki gelişmiş renk y&ouml;netimi sistemi, akıllı telefon d&uuml;nyasındaki en iyi sistem. Yani i&ccedil;eriğinizin renk modu ister P3 ister sRGB olsun; iPhone X, kullandığınız renk profilini tanıyor ve i&ccedil;eriği otomatik olarak o formatta g&ouml;steriyor. Şimdi, en sevdiğiniz y&ouml;netmenin veya tasarımcının renklerini tam da onların hayal ettikleri tonlarda g&ouml;rebilirsiniz.<br />\r\n<br />\r\nTrue Tone. &Ccedil;ok daha rahat bir g&ouml;r&uuml;nt&uuml;leme deneyimi.<br />\r\n<br />\r\nTrue Tone teknolojisi, gelişmiş altı kanallı ortam ışığı sens&ouml;r&uuml;nden yararlanarak ekrandaki beyaz dengesini ortamdaki ışığın renk sıcaklığıyla eşleşecek şekilde ayarlıyor. B&ouml;ylece ekrandaki g&ouml;r&uuml;nt&uuml;ler kağıt &uuml;zerindeymiş&ccedil;esine doğal duruyor ve g&ouml;z&uuml; de daha az yoruyor.<br />\r\n<br />\r\nHDR videolar. Şimdi iPhone&rsquo;da ilk kez g&ouml;sterimde.<br />\r\n<br />\r\niPhone X, ger&ccedil;ek anlamıyla Y&uuml;ksek Dinamik Aralık (HDR) &ouml;zellikli bir ekrana sahip. Filmleri ve TV programlarını Dolby Vision ve HDR10 formatında izleyebilirsiniz. HDR fotoğraflarınızı daha muhteşem bir şekilde g&ouml;r&uuml;nt&uuml;leyebilirsiniz. &Uuml;stelik şimdi iTunes, Netflix ve diğer i&ccedil;erik sağlayıcıların sunduğu HDR i&ccedil;eriklerin de tadını &ccedil;ıkarabilirsiniz.<br />\r\n<br />\r\nBir akıllı telefonda şimdiye kadar kullanılan en dayanıklı cam.<br />\r\n<br />\r\n&Ouml;n ve arka y&uuml;zeyi tamamen kaplayan cam, y&uuml;zde 50 daha fazla derinliğe sahip olan g&uuml;&ccedil;lendirme katmanıyla şimdiye kadar tasarladığımız en g&uuml;&ccedil;l&uuml; cam olma &ouml;zelliğini taşıyor. Yedi katmanlı boyama işlemi hassas tonlara ve opak bir g&ouml;r&uuml;n&uuml;me olanak verirken, yansıtıcı optik katman ise renklerin &ccedil;ok daha iyi g&ouml;r&uuml;nmesini sağlıyor. Ve yağ tutmayan kaplama sayesinde parmak izleri ve lekeler kolayca silinebiliyor.<br />\r\n<br />\r\nKablosuz bir d&uuml;nya i&ccedil;in kablosuz şarj.<br />\r\nAmacımız daima, iPhone&rsquo;u şarj ve kulaklık kablolarından kurtarıp ger&ccedil;ek anlamda kablosuz bir aygıt haline getirmekti. Cam arka y&uuml;zeyi ve yerleşik kablosuz şarj sistemiyle iPhone X, kablosuz bir geleceğe bug&uuml;nden hazır.<br />\r\n<br />\r\nApple tasarımı &ccedil;ok &ouml;zel bir paslanmaz &ccedil;elik.<br />\r\niPhone X&rsquo;un &ccedil;evresini saran ve tasarımına g&uuml;&ccedil; katan paslanmaz &ccedil;elik şerit; Apple imzalı, son derece dayanıklı, daha saf, g&ouml;z alıcı parlaklıkta, &ccedil;ok &ouml;zel bir alaşım. Uzay grisi rengini elde etmek i&ccedil;in ise, paslanmaz &ccedil;elik şeridin rengini camın rengiyle tam olarak eşleştirmeye yarayan ve &ldquo;fiziksel buhar biriktirme&rdquo; adı verilen teknikten yararlanıyoruz.<br />\r\n<br />\r\nSuya, sı&ccedil;ramalara ve toza dayanıklı.<br />\r\niPhone X, mikroskobik d&uuml;zeyde hassas bir m&uuml;hendislikle suya, sı&ccedil;ramalara ve toza karşı dayanıklı olacak şekilde geliştirildi.<br />\r\n<br />\r\n<br />\r\nFace ID<br />\r\n<br />\r\nBir dokunuştan daha doğal ne olabilir? Bir bakış. Face ID&rsquo;nin arkasında bu d&uuml;ş&uuml;nce yatıyor. Touch ID&rsquo;den &ccedil;ok daha pratik olan Face ID, son derece g&uuml;&ccedil;l&uuml; ve g&uuml;venli bir kimlik doğrulama sistemi. iPhone X&rsquo;un kilidini a&ccedil;manın hızlı,<br />\r\nkolay ve doğal bir yolu.<br />\r\n<br />\r\nOlağan&uuml;st&uuml; bir sadelik, olağan&uuml;st&uuml; bir teknoloji.<br />\r\n<br />\r\nTrueDepth kamera sistemi, bir&ccedil;ok inovatif teknolojiden oluşuyor. Ger&ccedil;ek zamanlı olarak birlikte &ccedil;alışan bu teknolojiler, y&uuml;z&uuml;n&uuml;z&uuml;n<br />\r\nen ince detaylarıyla oluşturulmuş derinlik haritasını kullanarak sizi anında tanıyor.<br />\r\n<br />\r\nY&uuml;z&uuml;n&uuml;z, g&uuml;venli parolanız.<br />\r\n<br />\r\niPhone X, Face ID sayesinde siz sadece aygıtınıza baktığınızda a&ccedil;ılıyor. Y&uuml;z fotoğrafı veya maske kullanılarak girişilen kilit a&ccedil;ma denemelerini algılıyor ve diren&ccedil; g&ouml;steriyor. Y&uuml;z haritanız şifrelenerek Secure Enclave alanında korunuyor. Ve doğrulama işlemi bulutta değil, anında aygıtınızda ger&ccedil;ekleştiriliyor.<br />\r\n<br />\r\nOnun i&ccedil;in unutulmazsınız.<br />\r\n<br />\r\nA11 Bionic &ccedil;ip, yapay &ouml;ğrenme teknolojisi sayesinde g&ouml;r&uuml;n&uuml;m&uuml;n&uuml;zdeki değişiklikleri algılayabiliyor. G&ouml;zl&uuml;k takın. Şapka takın. Sakal bırakın. Belki arkadaşlarınız sizi tanımada zorluk &ccedil;ekebilir. Ama iPhone X sizi asla unutmaz.<br />\r\n<br />\r\nBir bakışınızdan anlayacak kadar zeki.<br />\r\n<br />\r\nFace ID, telefonunuza dikkatli bir şekilde bakıp bakmadığınıza dikkat ederek daha fazla g&uuml;venlik sağlıyor. Yani sadece g&ouml;zleriniz a&ccedil;ık bir şekilde aygıtınıza doğru baktığınızda iPhone X&rsquo;unuzun kilidini a&ccedil;ıyor. B&ouml;ylece bildirimleri ve mesajları size ne zaman g&ouml;stereceğini iyi biliyor, siz bir şeyler okurken ekran ışığını a&ccedil;ık tutuyor ya da alarm veya zil sesini kısıyor.<br />\r\n<br />\r\n<br />\r\nTrueDepth Kamera<br />\r\n<br />\r\nK&uuml;&ccedil;&uuml;c&uuml;k bir alana ne kadar yenilik sığabilir? &Ccedil;ok, pek &ccedil;ok.<br />\r\nTrueDepth kamera sistemi iPhone X&rsquo;a &ouml;zel yeni beceriler i&ccedil;in geliştirilmiş kameralara ve sens&ouml;rlere ev sahipliği yapıyor.<br />\r\n<br />\r\nMinicik bir alanda tonlarca yenilik.<br />\r\n<br />\r\nBirbirinden g&uuml;&ccedil;l&uuml; teknolojilerden oluşan sofistike bir sistem, A11 Bionic ile birlikte &ccedil;alışarak Face ID, Portre modu selfie&rsquo;ler ve Animoji gibi &ouml;zelliklere olanak tanıyor.<br />\r\n<br />\r\nFace ID. Y&uuml;z&uuml;n&uuml;z, g&uuml;venli parolanız.<br />\r\n<br />\r\niPhone X&rsquo;daki &ccedil;ığır a&ccedil;ıcı kimlik doğrulama sistemi, TrueDepth kameranın kaydettiği verilerle başlıyor. Sens&ouml;rler y&uuml;z&uuml;n&uuml;z&uuml;n benzersiz geometrisini okuyor ve A11 Bionic &ccedil;ipteki Secure Enclave alanında korunan verilerle karşılaştırıyor. iPhone&rsquo;unuzun kilidi ancak bu verilerin eşleşmesiyle a&ccedil;ılıyor.<br />\r\n<br />\r\nPortre modu. Ger&ccedil;ek alan derinliğine sahip selfie&rsquo;ler.<br />\r\n<br />\r\nKeskin bir odaklamayla y&uuml;z&uuml;n&uuml;z&uuml; &ouml;n plana &ccedil;ıkaran ve arka planı profesyonelce flulaştıran, alan derinliği efektli selfie&rsquo;ler &ccedil;ekin. Bunun i&ccedil;in tek bir dokunuşunuz yeterli. TrueDepth kamera, A11 Bionic &ccedil;ipin de yardımıyla fotoğrafı &ccedil;ekiyor ve bu efekti anında oluşturuyor.<br />\r\n<br />\r\nPortre Işığı. St&uuml;dyo efektlerine sahip selfie&rsquo;ler.<br />\r\n<br />\r\nPortre sanatı ve tekniği hakkındaki geniş &ccedil;aplı sanatsal ve bilimsel araştırmalardan ilham alan yepyeni Portre Işığı &ouml;zelliği, gelişmiş algoritmalardan yararlanarak y&uuml;z hatlarınızın ışıkla etkileşimini hesaplıyor. Ardından bu verileri kullanarak g&ouml;z alıcı ışık efektleri oluşturuyor.<br />\r\n<br />\r\nAnimoji. Yepyeni bir karaktere b&uuml;r&uuml;n&uuml;n.<br />\r\n<br />\r\nKabul edin. Hep bir panda olmak istediniz. TrueDepth kamera, A11 Bionic &ccedil;ipin yardımıyla 50&rsquo;nin &uuml;zerinde farklı kas hareketini analiz ederek y&uuml;z ifadelerinizi 12 farklı Animoji karakterine yansıtabiliyor.<br />\r\n<br />\r\nClips. Yepyeni d&uuml;nyalara yolculuk yapın.<br />\r\n<br />\r\nClips; metin, grafik, efekt ve &ccedil;ok daha fazlasını kullanarak birbirinden eğlenceli videoları kolayca hazırlamanıza ve paylaşmanıza olanak veren &uuml;cretsiz bir uygulama. Ve şimdi, iPhone X&rsquo;daki Selfie Ortamları sayesinde Clips &ccedil;ok daha eğlenceli. TrueDepth kamerayı kullanın ve kendinizi 360 derece animasyonlu mizansenlere ışınlayın.<br />\r\n<br />\r\n<br />\r\n12 MP &Ccedil;ift Kamera<br />\r\n<br />\r\nBir kamera, g&ouml;z&uuml;n g&ouml;rd&uuml;ğ&uuml;nden &ccedil;ok daha fazlasını &ccedil;ekebilir mi? Bunu &ouml;ğrenmek i&ccedil;in, optik g&ouml;r&uuml;nt&uuml; stabilizasyonu &ouml;zelliğine sahip daha hızlı kameraları ve A11 Bionic &ccedil;ipteki gelişmiş yapay &ouml;ğrenme &ouml;zelliğini bir araya getirdik. Sonu&ccedil;: Daha fazlasını g&ouml;ren, daha fazlasını anlayan ve daha fazlasını başaran bir kamera sistemi.<br />\r\n<br />\r\nGeniş A&ccedil;ılı Kamera<br />\r\n&fnof;/1.8 diyafram a&ccedil;ıklığına sahip altı bileşenli lens, optik g&ouml;r&uuml;nt&uuml; stabilizasyonu (OIS) ve daha b&uuml;y&uuml;k, daha hızlı 12 MP sens&ouml;r sayesinde d&uuml;nyanın en pop&uuml;ler kamerası şimdi &ccedil;ok daha iyi.<br />\r\n<br />\r\nTelefoto Kamera<br />\r\nOlağan&uuml;st&uuml; yedi mıknatıslı teknoloji sayesinde iPhone X, &ccedil;ok g&uuml;&ccedil;l&uuml; &fnof;/2.4 telefoto kamerasının i&ccedil;inde ikinci bir OIS sistemine sahip.<br />\r\nİki kamera birlikte &ccedil;alışarak optik yakınlaştırmaya olanak veriyor<br />\r\nve sizi s&uuml;jenize yakınlaştırıyor.<br />\r\nVe Portre modunda harika fotoğraflar &ccedil;ekmenizi sağlıyor.<br />\r\n<br />\r\nPortre modu. Daha da g&uuml;zel bir alan derinliği efekti.<br />\r\n<br />\r\nDaha keskin ayrıntılar, daha doğal flulukta arka planlar, loş ışık i&ccedil;in gelişmiş performans ve ihtiya&ccedil; duyduğunuz anda erişilebildiğiniz bir flaş. T&uuml;m bu &ouml;zelliklerle birlikte Portre modu şimdi her zamankinden daha iyi.<br />\r\n<br />\r\nPortre Işığı. Ger&ccedil;ek zamanlı st&uuml;dyo ışığı efektleri.<br />\r\n<br />\r\nFotoğraf&ccedil;ılıktaki ışık prensiplerini temel alarak geliştirilmiş olan Portre Işığı, derinliği algılayan kameralardan ve y&uuml;z haritalama teknolojisi gibi karmaşık donanım ve yazılımlardan yararlanarak ger&ccedil;ek&ccedil;i st&uuml;dyo ışığı efektleri sunuyor.<br />\r\n<br />\r\nGelişmiş yeni ISP. M&uuml;kemmel kareyi yakalayın.<br />\r\n<br />\r\nApple tasarımı akıllı g&ouml;r&uuml;nt&uuml; sinyali işlemcisi; kadrajınızdaki insan, hareket, ışık koşulları gibi &ouml;ğeleri algılayarak siz daha fotoğraf &ccedil;ekmeden g&ouml;r&uuml;nt&uuml;y&uuml; optimize ediyor. &Uuml;stelik, gelişmiş piksel işleme, geniş renk yelpazesiyle &ccedil;ekim, daha hızlı otomatik odaklama ve daha iyi HDR fotoğraflar sunuyor.<br />\r\n<br />\r\n&Ccedil;ift OIS. Loş ışıkta bile ışıldayan g&ouml;r&uuml;nt&uuml;ler.<br />\r\n<br />\r\nLoş ışıkta bile g&ouml;z alıcı fotoğraflar ve videolar &ccedil;ekebilmek, fotoğraf&ccedil;ılığın en zor yanlarından biri. Arkadaki her iki kamerada yer alan optik g&ouml;r&uuml;nt&uuml; stabilizasyonu &ouml;zelliği sayesinde ise bu sizin i&ccedil;in &ccedil;ocuk oyuncağı. Yani g&uuml;n bitiyor olabilir ama bilin ki yaratıcılık daha yeni başlıyor.<br />\r\n<br />\r\nYepyeni filtreler. Daha iyi bir flaş. Daha fazla eğlence.<br />\r\n<br />\r\nFotoğrafı &ccedil;ektiğiniz andan son d&uuml;zenlemelere kadar, iPhone X ile olağan&uuml;st&uuml; fotoğraflar elde etmek &ccedil;ok daha kolay. Ve yeni nesil HEIF dosya sıkıştırma teknolojisi sayesinde, &ccedil;ektiğiniz fotoğraflar yine aynı kalitede ama dosya boyutları eskisinin sadece yarısı b&uuml;y&uuml;kl&uuml;ğ&uuml;nde. Kısaca, &ccedil;ekin gitsin.<br />\r\n<br />\r\nLive Photo Efektleri ve Yeni Filtreler<br />\r\nLive Photo&rsquo;larınızı eğlenceli video d&ouml;ng&uuml;lerine d&ouml;n&uuml;şt&uuml;r&uuml;n, bir ileri<br />\r\nbir geri oynatın. G&ouml;z alıcı bir uzun pozlama efektiyle, havai fişekleri g&ouml;ky&uuml;z&uuml;ndeki parlak &ccedil;izgilere &ccedil;evirin. Cilt tonlarını daha doğal hale getirmek veya portrelerinize klasik bir g&ouml;r&uuml;n&uuml;m vermek i&ccedil;in yeni<br />\r\nfiltreler uygulayın.<br />\r\n<br />\r\nYavaş Senkron &Ouml;zelliğine Sahip D&ouml;rt LED&rsquo;li True Tone Flash<br />\r\nYavaş Senkron flaş, yavaş pozlama ile kısa flaş patlamasını<br />\r\nbir araya getiriyor. Loş ışıkta hem &ouml;n plandaki s&uuml;jenizin daha aydınlık g&ouml;r&uuml;nmesini sağlıyor hem de arka planı daha g&ouml;r&uuml;n&uuml;r kılıyor. Ve D&ouml;rt LED&rsquo;li True Tone Flash, iki kata kadar daha homojen bir aydınlatma sağlayarak ışık yansımalarını azaltıyor.<br />\r\n<br />\r\nBeyaz perdeye yaraşır videolar.<br />\r\n<br />\r\nİster &ccedil;ocuğunuzun ilk g&ouml;sterisini &ccedil;eken bir anne olun ister bir sinema &ouml;ğrencisi veya bir y&ouml;netmen; iPhone X ile inanılmaz filmlere imza atabilirsiniz. Apple tasarımı video kodlayıcısı, optimum kalite i&ccedil;in ger&ccedil;ek zamanlı g&ouml;r&uuml;nt&uuml; işleme &ouml;zelliğine sahip. Ve HEVC dosya sıkıştırma teknolojisi sayesinde, &ccedil;ektiğiniz videolar yine aynı kalitede ama dosya boyutları eskisinin sadece yarısı b&uuml;y&uuml;kl&uuml;ğ&uuml;nde.<br />\r\n<br />\r\nDaha stabil videolar.<br />\r\nGelişmiş video stabilizasyonu; daha b&uuml;y&uuml;k bir yeni sens&ouml;r ve &ccedil;ok g&uuml;&ccedil;l&uuml; bir ISP yardımıyla, &ccedil;ektiğiniz her şeyi stabil hale getiriyor. Ve optik g&ouml;r&uuml;nt&uuml; stabilizasyonu, loş ışıkta &ccedil;ektiğiniz videolarda hareket ve el titremesinden kaynaklanan bulanıklığı azaltıyor. B&ouml;ylece eliniz stabil olmasa bile videolarınız stabil g&ouml;r&uuml;n&uuml;yor.<br />\r\n<br />\r\niPhone X ile &ccedil;ekilmiş fotoğraflar.<br />\r\n<br />\r\nD&uuml;nyanın d&ouml;rt bir yanındaki amat&ouml;r ve profesyonel fotoğraf&ccedil;ılardan iPhone X ile fotoğraf &ccedil;ekmelerini ve onlara ilham veren şeyleri bizlerle paylaşmalarını istedik. Ortaya, iPhone X&rsquo;un kameralarının neler yapabileceğini g&ouml;steren muhteşem &ouml;rnekler &ccedil;ıktı.<br />\r\n<br />\r\n<br />\r\nA11 Bionic<br />\r\n<br />\r\nHem &ccedil;ok g&uuml;&ccedil;l&uuml; hem de &ccedil;ok zeki bir &ccedil;ip yapılabilir mi? A11 Bionic ile tanışın. Kendisi bir akıllı telefonda şimdiye kadar kullanılan en g&uuml;&ccedil;l&uuml; ve en akıllı &ccedil;ip.<br />\r\n<br />\r\nİnanılması g&uuml;&ccedil; bir g&uuml;&ccedil;.<br />\r\n<br />\r\nAltı &ccedil;ekirdekli ve 4,3 milyar transist&ouml;rl&uuml; A11 Bionic, A10 Fusion &ccedil;ipe g&ouml;re %70&rsquo;e kadar daha hızlı d&ouml;rt adet y&uuml;ksek verimli &ccedil;ekirdeğe ve %25&rsquo;e kadar daha hızlı iki adet y&uuml;ksek performanslı &ccedil;ekirdeğe sahip. &Uuml;stelik CPU, maksimum g&uuml;ce ihtiya&ccedil; duyduğunuzda altı &ccedil;ekirdeği de aynı anda kullanabiliyor.<br />\r\n<br />\r\nN&ouml;ral sistem nedir?<br />\r\n<br />\r\nN&ouml;ral sistem, bilgisayarların g&ouml;zlemleyerek &ouml;ğrenmesini sağlayan bir yapay zeka t&uuml;r&uuml; olan yapay &ouml;ğrenme i&ccedil;in tasarlanmış bir donanım. N&ouml;ral ağların ihtiya&ccedil; duyduğu karmaşık işlemleri inanılmaz derecede hızlı ve verimli bir şekilde ger&ccedil;ekleştirebiliyor.<br />\r\n<br />\r\nN&ouml;ral sistem ne işe yarar?<br />\r\n<br />\r\nA11 Bionic &ccedil;ipteki n&ouml;ral sistem, insanları, yerleri ve nesneleri tanıyan &ccedil;ift &ccedil;ekirdekli bir tasarım. Saniyede 600 milyar adede kadar işlem ger&ccedil;ekleştirerek yapay &ouml;ğrenme g&ouml;revlerini hızla yerine getiriyor ve Face ID, Animoji gibi inovatif &ouml;zelliklere olanak veriyor.<br />\r\n<br />\r\nVerimlilik i&ccedil;in &uuml;retildi.<br />\r\n<br />\r\nA11 Bionic, y&uuml;ksek performanslı &ccedil;ekirdekler ve y&uuml;ksek verimli &ccedil;ekirdekler arasında g&ouml;revleri paylaştırıyor. B&ouml;ylece, muhteşem g&uuml;c&uuml;n&uuml; akıllı bir şekilde y&ouml;netmiş oluyor. Kısaca, mesaj yazmak veya internette gezinmek gibi sık yaptığınız şeyler daha az g&uuml;&ccedil;le daha hızlı ger&ccedil;ekleşiyor. Ve &ouml;zel pil tasarımı da eklendiğinde, iPhone X&rsquo;un pil &ouml;mr&uuml; iPhone 7&rsquo;ye kıyasla iki saate kadar daha uzun oluyor.<br />\r\n<br />\r\nArtırılmış ger&ccedil;eklik. Ger&ccedil;ekten artırıldı.<br />\r\n<br />\r\nA11 Bionic &ccedil;ip sayesinde, artırılmış ger&ccedil;eklik (AR) platformunu kullanan oyunlar ve uygulamalar yepyeni bir akıcılık ve ger&ccedil;eklik seviyesine ulaşıyor.<br />\r\n<br />\r\nMetal 2 ve Core ML i&ccedil;in &uuml;retilmiş bir &ccedil;ip.<br />\r\n<br />\r\nMetal 2, geliştiricilerin konsol tarzı oyunlar geliştirmesine olanak veren Apple tasarımı bir grafik yazılımı. Ve Core ML sayesinde geliştiriciler, uygulamalarına yapay &ouml;ğrenme &ouml;zellikleri ekleyebiliyor. A11 Bionic &ccedil;ipte yer alan GPU, bu birbirinden etkileyici yeni 3D oyunlar ve AR deneyimleri i&ccedil;in optimize edildi.<br />\r\n<br />\r\n<br />\r\nKablosuz Şarj<br />\r\n<br />\r\niPhone&rsquo;u kablosuz bir d&uuml;nya i&ccedil;in nasıl tasarlarsınız? Kulaklıklarda ve gelişmiş ağ sistemlerinde kullanılan kablosuz teknolojiyi temel alıp kolay bir kablosuz şarj y&ouml;ntemi geliştirerek. Cam arka y&uuml;zeyi ve hem hızlı hem de kolay şarj sistemi sayesinde, iPhone X&rsquo;unuzu uyumlu herhangi bir şarj platformuna yerleştirmeniz yeterli.<br />\r\n<br />\r\nDilediğiniz yerde şarj edebilmeniz i&ccedil;in tasarlandı.<br />\r\n<br />\r\nİnsanların kablosuz şarjın pratikliğinden her yerde yararlanabilmelerini istedik. Bu nedenle iPhone X bir&ccedil;ok otel, kafe, havaalanı ve otomobilde bulunabilen Qi uyumlu kablosuz şarj aygıtlarında şarj edilebiliyor. Belkin ve Mophie markaları da iPhone X i&ccedil;in &ouml;zel iki yeni kablosuz şarj aygıtı geliştirdi.<br />\r\n<br />\r\nAirPower. &Ccedil;ok daha sade ve eşsiz bir kablosuz şarj deneyimi.<br />\r\n<br />\r\nŞık ve ultra ince yeni AirPower, aynı anda birden fazla aygıtı kablosuz şarj etmenize olanak veriyor. &Uuml;stelik, aygıtları spesifik noktalara yerleştirmeniz gerekmiyor. En yeni iPhone, Apple Watch ve AirPods gibi AirPower uyumlu &uuml;&ccedil; adede kadar aygıtı matın &uuml;zerinde herhangi bir yere koymanız yeterli. Ve şarj başlasın.<br />\r\n<br />\r\n<br />\r\niOS. D&uuml;nyanın en gelişmiş mobil işletim sistemi.<br />\r\n<br />\r\niOS; iPhone ve iPad&rsquo;e son derece kişisel ve g&uuml;&ccedil;l&uuml; yollarla hayat veriyor. Aray&uuml;z&uuml; harika bir tasarıma sahip ve kullanımı &ccedil;ok kolay. Akıllı &ouml;neriler ihtiya&ccedil; duyduğunuz anda ekranda beliriyor. Ve gelişmiş teknolojiler gizliliğinizi ve g&uuml;venliğinizi koruyor. iOS deneyimini bir kez yaşayınca, milyonlarca insanın iPhone ve iPad kullanmayı neden bu kadar &ccedil;ok sevdiğini anlayacaksınız.</p>\r\n', 7999.00, '', 'apple, iphonex, iphone', 10, '1', '1'),
(21, 13, '2019-09-10 18:17:58', 'Vestel Venus Z20 64GB İnci Siyahı Akıllı Telefon', 'vestel-venus-z20-64gb-inci-siyahi-akilli-telefon', '<p>Vestel Venus Z20 64GB İnci Siyahı Akıllı Telefon</p>\r\n\r\n<p>Vestel Venus Z20 İnci Siyahı</p>\r\n\r\n<p>Kusursuz tasarım ve etkileyici renklerle, teknoloji yepyeni bir g&ouml;r&uuml;n&uuml;me b&uuml;r&uuml;nd&uuml;. Zamanın ruhuna uygun 18:9 m&uuml;kemmel ekran oranı. Telefonu b&uuml;y&uuml;tmeden, daha fazla g&ouml;r&uuml;nt&uuml; ve geniş ekran alanı. Şık ve g&ouml;z alıcı.<br />\r\n<br />\r\nHİ&Ccedil;BİR ANI KA&Ccedil;IRMAYIN<br />\r\n<br />\r\n16+5 MP Arka ve 8 MP &Ouml;n Kamera, anı yakalamak i&ccedil;in tasarlandı. Portre &Ccedil;ekimi ile siz sadece g&ouml;rmek istediğinize odaklanın. Gerisini ona bırakın. Geniş kamera a&ccedil;ısı ile Z20 kadrajına &ccedil;ok daha fazlasını sığdırın. Gece &ccedil;ekimleri mi? Hi&ccedil; sorun değil. Z20, &Ouml;n Kamera Flaşı ile g&uuml;n&uuml;n her anında yanınızda.<br />\r\n<br />\r\nKUSURSUZ ORAN DAHA B&Uuml;Y&Uuml;K EKRAN<br />\r\n<br />\r\n5.65&rsquo;&rsquo; Full HD Plus Ekran, şimdiye kadar g&ouml;rd&uuml;ğ&uuml;n&uuml;zden &ccedil;ok daha fazlasını sunuyor. Akıllı telefonda video izleme ve oyun oynama deneyiminiz tamamen değişiyor. 18:9 kusursuz ekran oranı ile telefonu b&uuml;y&uuml;tmeden daha fazla g&ouml;r&uuml;ş alanı, bir ekranda daha fazla alan.<br />\r\n<br />\r\nBAŞTAN SONA G&Ouml;Z ALICI TASARIM M&Uuml;KEMMEL ŞIKLIK<br />\r\n<br />\r\nYenilik&ccedil;i tasarım ve dayanıklı g&ouml;vde Z20&rsquo;de bir araya geliyor. Metal ve camın birleşimi, kullanıcı deneyimini yeniden yorumluyor. Gorilla Glass cam, sadece ekrana değil arka y&uuml;zeye de hayat veriyor. Ayna etkisi yaratan parlak renkler şık bir g&ouml;r&uuml;n&uuml;m sağlıyor. Baştan sona g&ouml;z alıcı tasarımı ile Z20, elinize tam oturuyor.<br />\r\n<br />\r\nSOLUKSUZ BİR PERFORMANS<br />\r\n<br />\r\nZ20, hayatın hızına yetişmeniz i&ccedil;in en b&uuml;y&uuml;k yardımcınız. 2.2 GHz 8 &Ccedil;ekirdek Qualcomm Snapdragon 630 işlemci ve 4 GB bellek ile hız kesmeyen, soluksuz performansı deneyimleyin.<br />\r\n<br />\r\nNEREDE OLDUĞUNUZU O BİLİR<br />\r\n<br />\r\nKonumunuzu doğru tespit edememek ya da aradığınız yeri bulamamak, artık ge&ccedil;mişte kalmış birer deneyim. IZAT GPS teknolojisiyle donatılmış Z20 akıllı telefonunuz, nerede olursanız olun konumunuzu y&uuml;ksek doğrulukla belirler.<br />\r\nGideceğiniz yere kadar size eşlik eder. Yol arkadaşınıza g&uuml;venin, bırakın size yol g&ouml;stersin.<br />\r\n<br />\r\nHAYATI KOLAYLAŞTIRAN AYRINTILAR<br />\r\n<br />\r\nEkran keyfini bozmamak adına, parmak izi okuyucu ergonomik bir şekilde arka y&uuml;zeye yerleştirildi. Yeni akıllı telefonunuz hızlı bir şekilde parmak izinizi algılar. B&ouml;ylece şifre girmekle vakit kaybetmez, şifreyi hatırlamak zorunda kalmazsınız.</p>\r\n\r\n<p>Kusursuz tasarım ve etkileyici renklerle, teknoloji yepyeni bir g&ouml;r&uuml;n&uuml;me b&uuml;r&uuml;nd&uuml;. Zamanın ruhuna uygun 18:9 m&uuml;kemmel ekran oranı. Telefonu b&uuml;y&uuml;tmeden, daha fazla g&ouml;r&uuml;nt&uuml; ve geniş ekran alanı. Şık ve g&ouml;z alıcı.<br />\r\n<br />\r\nHİ&Ccedil;BİR ANI KA&Ccedil;IRMAYIN<br />\r\n<br />\r\n16+5 MP Arka ve 8 MP &Ouml;n Kamera, anı yakalamak i&ccedil;in tasarlandı. Portre &Ccedil;ekimi ile siz sadece g&ouml;rmek istediğinize odaklanın. Gerisini ona bırakın. Geniş kamera a&ccedil;ısı ile Z20 kadrajına &ccedil;ok daha fazlasını sığdırın. Gece &ccedil;ekimleri mi? Hi&ccedil; sorun değil. Z20, &Ouml;n Kamera Flaşı ile g&uuml;n&uuml;n her anında yanınızda.<br />\r\n<br />\r\nKUSURSUZ ORAN DAHA B&Uuml;Y&Uuml;K EKRAN<br />\r\n<br />\r\n5.65&rsquo;&rsquo; Full HD Plus Ekran, şimdiye kadar g&ouml;rd&uuml;ğ&uuml;n&uuml;zden &ccedil;ok daha fazlasını sunuyor. Akıllı telefonda video izleme ve oyun oynama deneyiminiz tamamen değişiyor. 18:9 kusursuz ekran oranı ile telefonu b&uuml;y&uuml;tmeden daha fazla g&ouml;r&uuml;ş alanı, bir ekranda daha fazla alan.<br />\r\n<br />\r\nBAŞTAN SONA G&Ouml;Z ALICI TASARIM M&Uuml;KEMMEL ŞIKLIK<br />\r\n<br />\r\nYenilik&ccedil;i tasarım ve dayanıklı g&ouml;vde Z20&rsquo;de bir araya geliyor. Metal ve camın birleşimi, kullanıcı deneyimini yeniden yorumluyor. Gorilla Glass cam, sadece ekrana değil arka y&uuml;zeye de hayat veriyor. Ayna etkisi yaratan parlak renkler şık bir g&ouml;r&uuml;n&uuml;m sağlıyor. Baştan sona g&ouml;z alıcı tasarımı ile Z20, elinize tam oturuyor.<br />\r\n<br />\r\nSOLUKSUZ BİR PERFORMANS<br />\r\n<br />\r\nZ20, hayatın hızına yetişmeniz i&ccedil;in en b&uuml;y&uuml;k yardımcınız. 2.2 GHz 8 &Ccedil;ekirdek Qualcomm Snapdragon 630 işlemci ve 4 GB bellek ile hız kesmeyen, soluksuz performansı deneyimleyin.<br />\r\n<br />\r\nNEREDE OLDUĞUNUZU O BİLİR<br />\r\n<br />\r\nKonumunuzu doğru tespit edememek ya da aradığınız yeri bulamamak, artık ge&ccedil;mişte kalmış birer deneyim. IZAT GPS teknolojisiyle donatılmış Z20 akıllı telefonunuz, nerede olursanız olun konumunuzu y&uuml;ksek doğrulukla belirler.<br />\r\nGideceğiniz yere kadar size eşlik eder. Yol arkadaşınıza g&uuml;venin, bırakın size yol g&ouml;stersin.<br />\r\n<br />\r\nHAYATI KOLAYLAŞTIRAN AYRINTILAR<br />\r\n<br />\r\nEkran keyfini bozmamak adına, parmak izi okuyucu ergonomik bir şekilde arka y&uuml;zeye yerleştirildi. Yeni akıllı telefonunuz hızlı bir şekilde parmak izinizi algılar. B&ouml;ylece şifre girmekle vakit kaybetmez, şifreyi hatırlamak zorunda kalmazsınız.<br />\r\n<br />\r\n- 18:9 Full HD Plus 5.65&rdquo; 2.5D Ekran<br />\r\n- 16+5 MP &Ccedil;ift Arka Kamera ile Portre &Ccedil;ekimi<br />\r\n- 4K Video &Ccedil;ekimi<br />\r\n- 8 MP Flaşlı &Ouml;n Kamera<br />\r\n- Android Oreo İşletim Sistemi<br />\r\n- 2.2 GHz 8 &Ccedil;ekirdek Qualcomm 630 işlemci<br />\r\n- 4 GB bellek, 64 GB Hafıza<br />\r\n- 2 TB&rsquo;a Kadar Harici Bellek Desteği<br />\r\n- Quick Charge 3.0 ile Hızlı Şarj</p>\r\n', 1697.00, '', '', 25, '1', '1'),
(22, 16, '2019-09-10 18:20:44', 'Canon Eos 650D 18-55MM Dc Iii Lensli Dslr Fotoğraf Makinesi', 'canon-eos-650d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi', '<h2><br />\r\nEOS 650D</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>EOS fotoğraf d&uuml;nyasına ideal bir giriş. EOS 650D&#39;nin 18.0 megapiksel&nbsp;</p>\r\n\r\n<p>sens&ouml;r&uuml; hem fotoğraf hem de Full HD filmler i&ccedil;in m&uuml;kemmeldir.&nbsp;</p>\r\n\r\n<p>Değişken a&ccedil;ılı Clear View LCD II Dokunmatik ekran &ccedil;ekim yapmayı kolaylaştırır.</p>\r\n\r\n<p><img alt=\"EOS 650D\" src=\"https://n11scdn1.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0122527768574311.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<h3>Avantajlar</h3>\r\n\r\n<ul>\r\n	<li>18,0 MP APS-C CMOS sens&ouml;r</li>\r\n	<li>Manuel kontroller ve kesintisiz AF ile Full-HD filmler</li>\r\n	<li>5 kare/sn s&uuml;rekli &ccedil;ekim</li>\r\n	<li>Değişken a&ccedil;ılı Clear View LCD II Dokunmatik ekran</li>\r\n	<li>ISO 100-12.800 hassasiyeti, ISO 25.600&#39;e genişletilebilir</li>\r\n	<li>9 noktalı geniş alanlı AF</li>\r\n	<li>Entegre Speedlite Verici</li>\r\n</ul>\r\n\r\n<h2>Detaylı &Ouml;zellikler</h2>\r\n\r\n<p>Canon EOS 650D &uuml;r&uuml;n&uuml;m&uuml;z&uuml; daha ayrıntılı inceleyin</p>\r\n\r\n<h3>Gelişmiş g&ouml;r&uuml;nt&uuml; kalitesi</h3>\r\n\r\n<p>18 megapiksellik &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;kle her bir ayrıntıyı yakalayın ve 14 bit DIGIC 5 g&ouml;r&uuml;nt&uuml; işlemenin p&uuml;r&uuml;zs&uuml;z tonlarının ve ger&ccedil;ek&ccedil;i renklerinin keyfini &ccedil;ıkarın. EOS 650D, kaliteden &ouml;d&uuml;n vermeden b&uuml;y&uuml;k boyutlarda yazdıracak kadar b&uuml;y&uuml;k dosyalar &uuml;retir veya alternatif komposizyonlar i&ccedil;in dosyaları kırpar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Full HD film projeleri &uuml;retme</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Size uygun otomatik veya manuel kontrol seviyesinin keyfini &ccedil;ıkararak 1080p &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;kte &uuml;st&uuml;n kalitede filmler &ccedil;ekin. Film &ccedil;ekerken otomatik odaklama kullanılabilir ve yerleşik mikrofon y&uuml;ksek kalitede stereo ses kaydına imkan tanır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Hızla ger&ccedil;ekleşen hareketleri yakalama</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dokuz &ccedil;apraz tip AF noktası i&ccedil;eren bir otomatik odaklama sistemi ile hareken eden nesneleri kare boyunca doğru şekilde izleyin. 22 kareye kadar olan seri &ccedil;ekimlerde 5 kare/sn&#39;de kesintisiz &ccedil;ekim, o belirleyici anı asla ka&ccedil;ırmamanız anlamına gelir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Yeni g&ouml;r&uuml;ş noktalarını keşfetme</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>EOS 650D, kamera g&ouml;vdesinden uzanan ve 270&ordm; d&ouml;nebilen değişken a&ccedil;ılı 7,7cm (3,0&quot;) 3:2 oranlı Clear View LCD II Dokunmatik ekrana sahiptir. Bu, kalabalıkların &uuml;zeri veya bel hizası gibi alternatif g&ouml;r&uuml;ş noktalarından video ve fotoğraf &ccedil;ekilmesini sağlar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Dokunmatik ekran kontrol&uuml;</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>EOS 650D&#39;nin kontrollerine Değişken a&ccedil;ılı Clear View LCD II Dokunmatik ekranı &uuml;zerinden alternatif erişim sağlama keyfini yaşayın. Tek bir dokunuşla &ccedil;ekin ve odaklanın ve fotoğraflara bakarken kıstırma ve kaydırma hareketlerini kullanın.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>D&uuml;ş&uuml;k ışık performansı</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>EOS 650D, d&uuml;ş&uuml;k ışıkta flaşsız elde &ccedil;ekimi etkinleştirerek ISO 100-12.800 (ISO 25.600&#39;e kadar genişletilebilir), hassasiyet aralığındaki fotoğrafları &ccedil;ekebilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Entegre Speedlite Verici</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Canon Speedlite flaşlarını kameranın dışına yerleştirerek ve onları EOS 650D&#39;nin Entegre Speedlite Vericisi ile kontrol ederek yaratıcı ışıklandırma se&ccedil;eneklerini keşfedin.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Sahne Akıllı Otomatik</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Canon&#39;un Sahne Akıllı Otomatik teknolojisi her bir sahneyi analiz eder ve en uygun kamera ayarı kombinasyonunu otomatik olarak ayarlar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Zor koşullarda m&uuml;kemmel sonu&ccedil;lar</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HDR Arka ışık kontrol&uuml; &uuml;&ccedil; farklı poz yakalar, g&ouml;lge ve aydınlık ayrıntısını koruyarak onları tek bir pozda birleştirir. EOS 650D&#39;nin elde gece manzara modu y&uuml;ksek deklanş&ouml;r hızlarında &ccedil;ok sayıda fotoğraf &ccedil;eker ve net bir sonu&ccedil; elde etmek i&ccedil;in onları harmanlar.</p>\r\n\r\n<h2>&Uuml;r&uuml;n&uuml;n Teknik &Ouml;zellikleri</h2>\r\n\r\n<p>Canon EOS 650D, &ouml;zellikleri ve yapabilecekleri hakkında daha fazla bilgi edinin.</p>\r\n\r\n<p><img alt=\"18 megapixel CMOS\" src=\"https://n11scdn4.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0747580402974189.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>18 megapiksel CMOS</p>\r\n\r\n<p><img alt=\"Great low light shots\" src=\"https://n11scdn2.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__1550929743897597.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>D&uuml;ş&uuml;k ışıkta harika &ccedil;ekimler</p>\r\n\r\n<p><img alt=\"High speed shooting\" src=\"https://n11scdn2.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0216329167391657.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Y&uuml;ksek hızda &ccedil;ekim</p>\r\n\r\n<p><img alt=\"Continuous AF in Movies\" src=\"https://n11scdn2.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__1092284821226017.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Filmlerde S&uuml;rekli AF</p>\r\n\r\n<p><img alt=\"Large bright touch screen for clear viewing\" src=\"https://n11scdn3.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0366212353467923.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Net g&ouml;r&uuml;nt&uuml;leme i&ccedil;in b&uuml;y&uuml;k ve parlak dokunmatik ekran</p>\r\n\r\n<p><img alt=\"Powerful DIGIC processing\" src=\"https://n11scdn2.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0986690053578357.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>G&uuml;&ccedil;l&uuml; DIGIC işleme</p>\r\n\r\n<p><img alt=\"Moveable screen for creative framing\" src=\"https://n11scdn2.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__1331346580449782.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Yaratıcı kadrajlama se&ccedil;enekleri i&ccedil;in hareket ettirilebilen ekran</p>\r\n\r\n<p><img alt=\"Stunning 1080p movies\" src=\"https://n11scdn3.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__1476387764274378.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Muhteşem 1080p filmler</p>\r\n\r\n<p><img src=\"https://n11scdn4.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0888532313799739.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Sahnenizi otomatik olarak analiz edip en iyi ayarları se&ccedil;in</p>\r\n\r\n<p><img alt=\"On camera guide to help you learn\" src=\"https://n11scdn1.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0663986694433771.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>&Ouml;ğrenmenize yardımcı olacak fotoğraf makinesi i&ccedil;inde kılavuz</p>\r\n\r\n<p><img alt=\"Apply creative effects to your iamges\" src=\"https://n11scdn.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0192868575493260.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>G&ouml;r&uuml;nt&uuml;lerinize yaratıcı efektler uygulayın</p>\r\n\r\n<p><img src=\"https://n11scdn2.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0897739064144692.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>T&uuml;m ışık koşullarında g&ouml;r&uuml;nt&uuml;lerin doğru şekilde pozlanmasını sağlayın</p>\r\n\r\n<p><img src=\"https://n11scdn3.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0840324356145023.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Temel alanda &ccedil;ekimlerinize kolayca g&ouml;z atın</p>\r\n\r\n<p><img src=\"https://n11scdn1.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__0333829576134871.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Yaratıcı kadrajlama se&ccedil;enekleri i&ccedil;in AF noktası se&ccedil;imi</p>\r\n\r\n<p><img alt=\"Control Speedlites from your camera remotely\" src=\"https://n11scdn2.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__1136752976544837.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>Speedlite&#39;larınızı fotoğraf makinenizden uzaktan kontrol edin</p>\r\n\r\n<p><img alt=\"Easily create engaging movies\" src=\"https://n11scdn.akamaized.net/a1/org/elektronik/dslr-fotograf-makinesi/canon-eos-600d-18-55mm-dc-iii-lensli-dslr-fotograf-makinesi__1467632623452630.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p>İlgi &ccedil;ekici filmleri kolayca oluşturun</p>\r\n', 2499.00, '', '', 45, '1', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunfoto`
--

CREATE TABLE `urunfoto` (
  `urunfoto_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urunfoto_resimyol` varchar(255) NOT NULL,
  `urunfoto_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunfoto`
--

INSERT INTO `urunfoto` (`urunfoto_id`, `urun_id`, `urunfoto_resimyol`, `urunfoto_sira`) VALUES
(83, 15, 'dimg/urun/289112297530878226779629721133106.jpg', 0),
(84, 15, 'dimg/urun/232212008820703258199629721034802.jpg', 0),
(85, 15, 'dimg/urun/315423005328082282499629721002034.jpg', 0),
(86, 16, 'dimg/urun/225693166327800234409619539591218.jpg', 0),
(87, 16, 'dimg/urun/294142320927556227689622405087282.jpg', 0),
(88, 16, 'dimg/urun/238822383221529220459622405054514.jpg', 0),
(89, 17, 'dimg/urun/250702413926834301859633037484082 (1)s.jpg', 0),
(90, 17, 'dimg/urun/263812358329879230049633037484082.jpg', 0),
(96, 19, 'dimg/urun/22482232032811231263231692833828999281114.jpg', 0),
(97, 18, 'dimg/urun/2940125065278003100320014306182514723389kot2.jpg', 0),
(98, 18, 'dimg/urun/31890240913037120970226342180826108228362.jpg', 0),
(99, 18, 'dimg/urun/2305526383245012843128889257392489524279kot1.jpg', 0),
(100, 18, 'dimg/urun/25073289062795030789269822635130137240711.jpg', 0),
(101, 18, 'dimg/urun/245122100326791237412940125065278003100320014306182514723389kot2.jpg', 0),
(102, 20, 'dimg/urun/26335306302312923571476791002_0.jpg', 0),
(103, 21, 'dimg/urun/236772149221620316148799282102322_1556812264252.png', 0),
(104, 21, 'dimg/urun/249933137523240267068799298420786_1556812264105.png', 0),
(105, 21, 'dimg/urun/317212597931434309808799298453554_1556812264167.png', 0),
(106, 22, 'dimg/urun/29335216302612926572kisspng-canon-eos-650d-canon-eos-1100d-canon-eos-1200d-can-eos-5b3d8b72c2b7c8.4134576415307600507976.png', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yorum_onay` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `banka`
--
ALTER TABLE `banka`
  ADD PRIMARY KEY (`bankaH_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparisdetay`
--
ALTER TABLE `siparisdetay`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD PRIMARY KEY (`siparisdetay_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `urunfoto`
--
ALTER TABLE `urunfoto`
  ADD PRIMARY KEY (`urunfoto_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banka`
--
ALTER TABLE `banka`
  MODIFY `bankaH_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750016;
--
-- Tablo için AUTO_INCREMENT değeri `siparisdetay`
--
ALTER TABLE `siparisdetay`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750016;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_detay`
--
ALTER TABLE `siparis_detay`
  MODIFY `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Tablo için AUTO_INCREMENT değeri `urunfoto`
--
ALTER TABLE `urunfoto`
  MODIFY `urunfoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
