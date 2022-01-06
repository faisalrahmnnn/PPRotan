/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.13-MariaDB : Database - db_rotan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rotan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_rotan`;

/*Table structure for table `bl_admin` */

DROP TABLE IF EXISTS `bl_admin`;

CREATE TABLE `bl_admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bl_admin` */

insert  into `bl_admin`(`id_admin`,`username`,`password`,`updated`) values 
(84,'admin','21232f297a57a5a743894a0e4a801fc3','2021-12-08 03:17:50');

/*Table structure for table `bl_album` */

DROP TABLE IF EXISTS `bl_album`;

CREATE TABLE `bl_album` (
  `id_album` int(5) NOT NULL AUTO_INCREMENT,
  `gambar` text DEFAULT NULL,
  `nama_album` varchar(100) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bl_album` */

insert  into `bl_album`(`id_album`,`gambar`,`nama_album`,`updated`) values 
(56,'Furniture.jpg','Furniture','2021-06-16 21:07:10'),
(57,'Cover Keranjang.jpg','Keranjang','2021-06-16 21:07:21'),
(58,'Cover.jpg','Tas & Dompet','2021-06-16 21:11:04');

/*Table structure for table `bl_aneka` */

DROP TABLE IF EXISTS `bl_aneka`;

CREATE TABLE `bl_aneka` (
  `id_aneka` int(5) NOT NULL AUTO_INCREMENT,
  `gambar` text DEFAULT NULL,
  `nama_aneka` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_aneka`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bl_aneka` */

insert  into `bl_aneka`(`id_aneka`,`gambar`,`nama_aneka`,`deskripsi`,`updated`) values 
(44,'Kursi Rotan Minimalis.PNG','Kursi Rotan Minimalis','','2021-06-16 21:15:00'),
(45,'Meja Koran Rotan.PNG','Meja Koran','','2021-06-16 21:14:46'),
(46,'Nampan Mini.jpg','Nampan Mini','','2021-06-16 21:37:53'),
(47,'Keranjang Rotan Kotak Besar.jpg','Keranjang Rotan Kotak Besar','<p>Keranjang Rotan merupakan salah satu kerajinan yang sering dibuat oleh pengrajin, kerena bentuknya yang simple dan pembuataannya bisa dibilang mudah. Keranjang ini menggunakan bahan rotan 100% dalam pembuatannya yang diperkirakan 2-5&nbsp;Hari. Harga keranjang&nbsp;ini berkisaran harga berikut.&nbsp;</p>\r\n\r\n<p>Harga : Rp. 55.000 - Rp. 170.000&nbsp;</p>\r\n','2021-06-16 22:26:11'),
(48,'DompetRotan.jpg','Tas Selempang','<p>Tas Selempang ini merupakan tas yang banyak di gemari oleh kalangan remaja khususnya perempuan karena bentuknya yang simple dan mudah di bawa. Tas ini biasanya dibuat oleh kalangan ibu-ibu kota palangka raya, dalam pembuatannya tas memiliki bahan utama rotan dan sedikit aksesoris lainnya sebagai pelangkap. Kisaran harga tas ini adalah sebagai berikut.</p>\r\n\r\n<p>Harga : Rp. 98.000 - Rp. 150.000</p>\r\n','2021-06-16 22:28:35'),
(49,'Tas Tenteng Rotan.jpg','Tas Tenteng Rotan','<p style=\"text-align:justify\">Tas Tenteng Rotan ini memang terkesan simpel, namun sangat unik hingga sangat digemari&nbsp;fashion. Tas rotan dengan model ini sangat kental dengan nuansa natural buatan tangan (handmade) karena teknik anyaman yang ada pada tas ini. Tas ini&nbsp;cocok dikenakan dalam segala acara dan dipadukan dengan&nbsp;outfit&nbsp;apa saja, karena kesannya yang&nbsp;sederhana tapi tetap unik. Karena banyaknya peminat, harga tas ini menjadi cukup tinggi dengan kisaran harga berikut.</p>\r\n\r\n<p style=\"text-align:justify\">Harga : Rp. 150.0000 - Rp. 250.000</p>\r\n','2021-10-05 23:03:48');

/*Table structure for table `bl_artikel` */

DROP TABLE IF EXISTS `bl_artikel`;

CREATE TABLE `bl_artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `gambar` text DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bl_artikel` */

insert  into `bl_artikel`(`id_artikel`,`gambar`,`judul`,`deskripsi`,`updated`) values 
(18,'MengenalKerajinanRotan.jpg','Mengenal Kerajinan Tangan Rotan','<p style=\"text-align:justify\">Selain kayu, ada material alami lain yang sering digunakan untuk memperindah penampilan rumah hunian yakni rotan Material dari pohon ini sangat mudah ditemukan di wilayah Asia, khususnya di Indonesia. Selain memiliki warna yang begitu indah, rotan memiliki sifat lentur dan mudah dibuat dalam berbagai bentuk furniture.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Kelebihan Bahan Rotan</strong></p>\r\n\r\n<p style=\"text-align:justify\">Kelebihan rotan tidak hanya terletak pada kelenturan dan kemudahan dalam pembentukannya saja. Material alami ini sangat mudah ditemukan di Indonesia dengan harga terjangkau. Selain itu, nilai keindahannya terlihat sangat sempurna. Bukan itu saja, rotan juga dapat digunakan untuk memenuhi kebutuhan interior maupun eksterior.</p>\r\n\r\n<p style=\"text-align:justify\">Alasan berikutnya dari penggunaan rotan adalah tanaman rotan dapat dibudidayakan, sehingga tidak mempunyai sifat merusak alam. Meski masa panennya perlu waktu cukup lama, akan tetapi tetap lebih singkat dibanding kayu jati atau ulin.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Penggunaan Bahan Rotan Untuk Furniture</strong></p>\r\n\r\n<p style=\"text-align:justify\">Di Indonesia, tidak hanya kayu saja yang dimanfaatkan sebagai bahan pembuatan mebel atau furniture namun juga rotan. Bahkan tidak sedikit yang mengkombinasikan kedua jenis bahan tersebut untuk menghasilkan kesan lebih indah dan alami.</p>\r\n\r\n<p style=\"text-align:justify\">Beberapa jenis furniture yang sering menggunakan bahan rotan sebagai material utama antara lain adalah kursi, sofa, meja, tempat tidur, partisi hingga penyekat ruang dan masih banyak lagi. Alasan yang paling sering dikemukaan mengapa lebih tertarik memilih material ini adalah karena tampilannya yang sangat artistik.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Penggunaan Bahan Rotan Untuk Karya Seni dan Kerajinan Tangan</strong></p>\r\n\r\n<p style=\"text-align:justify\">Selain mebel atau furniture, rotan merupakan salah satu bahan terbaik untuk membuat karya seni dan kerajinan tangan. Melalui fleksibilitas, durabilitas beserta kekuatannya, banyak sekali seniman atau pembuat kerajinan tangan yang memilih rotan sebagai bahan utama dalam berkarya. Bahkan tidak sedikit seniman dunia yang ikut menggunakannya untuk mewujudkan gagasannya.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Gaya Etnik dan Modern Hingga Minimalis</strong></p>\r\n\r\n<p style=\"text-align:justify\">Bisa dipastikan, semua masyarakat Indonesia pasti pernah mempunyai atau paling tidak permah melihat perabot dan pernak-pernik hiasan interior dari bahan rotan. Misalnya lampu meja, bingkai lukisan, penyekat dinding, rak, vas bunga, pot bunga, dan masih banyak lagi. Penampilannya selalu indah dan cantik, sangat sedap dipandang oleh mata.</p>\r\n\r\n<p style=\"text-align:justify\">Rotan memang selalu jadi bahan pilihan utama, khususnya untuk membuat dekorasi ruang bergaya etnik. Namun dibalik itu, rotan juga bisa diaplikasikan pada interior dan eksterior bergaya modern bahkan minimalis. Khususnya modern atau minimalis bernuansa tropis, sangat tepat menggunakan material tersebut untuk memenuhi berbagai macam kebutuhan interior dan eksterior.</p>\r\n','2021-06-14 01:16:14'),
(19,'KerajinanRotanKalimantan.jpg','Kerajinan Rotan Khas Palangka Raya Bisa Jadi Produk Unggulan','<p style=\"text-align:justify\">MEDIA CENTER, Palangka Raya &ndash; Dari beragam macam produk kerajinan bernilai kearifan lokal di Kota Palangka Raya, maka kerajinan berbahan dasar rotan dinilai memiliki potensi&nbsp; menjadi produk kerajinan unggulan.</p>\r\n\r\n<p style=\"text-align:justify\">Seperti pada event Palangka Raya Fair 2018, tampak sejumlah stand-stand UMKM&nbsp; memajang hasil produk kerajinan rotan berupa tas, topi, sandal, keranjang dan lain-lain. Bentuk olahannya pun sangat unik, cantik dan menarik, sehingga banyak para pengunjung singgah sekedar melihat dan tidak sedikit yang tertarik membeli.</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Kerajinan tangan berbahan rotan, bila dikembangkan dapat menjadi produk unggulan bagi Kota Palangka Raya,&rdquo;ungkap Timoteus Nusan yang merupakan pemerhati sosial, seni- budaya Kalteng, saat ditemui disela berkunjung ke arena pameran Palangka Raya Fair, Minggu malam (26/8/2018)&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Selama ini kata dia, masih banyak kelompok pengrajin bahkan UMKM yang menghasilkan produk kerajinan berbahan rotan untuk dipasarkan. Hanya saja disayangkan, para penggelut usaha kerajinan ini tidak memiliki &ldquo;bapak angkat&rdquo; alias minim dukungan dalam hal pengembangan termasuk permodalan.</p>\r\n\r\n<p style=\"text-align:justify\">Padahal, upaya inovasi kerajinan rotan yang dilakukan para penggelutnya, terus berkembang guna mengikuti selera jaman. Itu dapat dilihat dari motif, maupun seni olahnya agar bisa memikat pasar.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Terlepas dari itu semua, maka&nbsp; yang diperlukan para pengiat usaha kerajinan ini adalah selain pemerintah harus kuat dalam melakukan pemberdayaan, disisi lain peran pelaku dunia usaha, seperti mall ataupun mini market dan swalayan harus&nbsp; bisa memberi tempat serta membantu pengembangannya.</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Jadi tidak hanya sebatas ada kegiatan pameran kerajinan ini baru terlihat. Namun selepas itu, perlu ada terobosan dan bantuan dari banyak pihak dalam tindak lanjut lain,&rdquo;cetus Timoteus yang juga merupakan staf pengajar di Universitas Palangka Raya ini.</p>\r\n','2021-06-14 19:12:15'),
(20,'KerajinanRotan.jpeg','Pengrajin Rotan Palangkaraya Keluhkan Pemasaran & Modal','<p style=\"text-align:justify\"><strong>Jakarta, CNBC Indonesia</strong>&nbsp;- Para pengrajin rotan yang berkumpul di rumah pengrajin rotan Elsi di Jalan S. Badarudin, Palangkaraya, Kalimantan Tengah, Senin (4/2/2019), meminta Sandiaga Salahuddin Uno untuk memberikan perhatian lebih kepada pengusaha kecil dan menengah.<br />\r\n<br />\r\nPara pengusaha rotan yang menghasilkan turunan seperti tas, sepatu, hingga pernak-pernik khas Kalimantan Tengah itu, mengeluhkan soal pemasaran dan modal. Menurut Elsi, sekarang ini produksi rotan mengalami penurunan.<br />\r\n<br />\r\n&quot;Kita berharap ada peningkatan pak. Karena industri ini bisa menyerap tenaga kerja rumahan. Kalau bisa diperhatikan jika bapak Prabowo dan Sandi jadi presiden dan wakil presiden 2019,&quot; harap perempuan setengah baya ini.</p>\r\n\r\n<p style=\"text-align:justify\">Keluhan serupa juga disampaikan oleh&nbsp;Deny salah satu pemilik toko di&nbsp;pusat kerajinan Palangkaraya Kalimantan Tengah di Jalan Batam, Pahandut, Kota Palangkaraya.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nDalam kesempatan tersebut Sandi membeli kerajinan gelang khas dayak sekaligus untuk mempromosikan kerajinan yang diproduksi para pelaku UMKM.<br />\r\n<br />\r\nDeny salah satu pemilik toko mengaku membutuhkan promosi untuk produknya demi menggenjot penjualan. Karena belum banyak orang lokal atau wisatawan dalam negeri yang yang menggunakan tas atau asesoris lainnya yang mereka produksi.<br />\r\n<br />\r\n&quot;Banyak wisatawan lokal yang masih belum percaya atau belum yakin menggunakan berbagai asesoris yang kami buat pak. Ini butuh promosi. Padahal produksi kami cukup bagus. Malah banyak orang Korea Selatan yang menggunakan produk kami,&quot; curhat Deni.<br />\r\n<br />\r\nSandiaga&nbsp;menyatakan hasil kerajinan para pelaku UMKM ini bisa menggerakkan ekonomi dan menyerap tenaga kerja. Tapi juga harus didukung oleh masyarakatnya sendiri.<br />\r\n<br />\r\n&quot;Sekarang saya tanya sama emak-emak yang hadir di sini, ada nggak yang pake tas hasil produksi pengerajin di sini?&quot;, tanya Sandi. Tidak ada satupun yang maju.<br />\r\n<br />\r\n&quot;Nah lihat sendiri di antara puluhan emak-emak di sini tidak ada yang pakai produksi sendiri. Malah pake tas-tas impor,&quot; sindir Sandi.<br />\r\n<br />\r\nEks Wakil Gubermur DKI Jakarta ini juga berjanji, jika dia terpilih menjadi wapres mendampingi Presiden Prabowo Subianto sebagai Presiden di tahun 2019, akan memastikan fokus pada ekonomi, khususnya pengusaha kecil dan menangah. Termasuk pendampingan, pemasaran dan permodalan.<br />\r\n<br />\r\nTermasuk juga mempelajari trend apa yang tengah menjadi model, sehingga para pembeli bangga menggunakan produk sendiri.</p>\r\n','2021-06-13 22:02:37'),
(21,'Rotan.jpg','Rotan Diproyeksikan Jadi Produk Unggulan Palangka Raya','<p style=\"text-align:justify\">KBRN, Palangka Raya : Dinas Koperasi dan UKM Kota Palangkara Raya memproyeksikan kerajinan dan pengolahan rotan menjadi produk unggulan Kota Cantik di masa depan. Setidaknya ada berbagai alasan mengapa rotan yang dipilih karena sudah banyak permintaan yang datang baik dari skala nasional hingga internasional.</p>\r\n\r\n<p style=\"text-align:justify\">Hal ini disampaikan Kepala Dinas Koperasi dan UKM Kota Palangka Raya Afendie dalam dialog interaktif RRI Palangka Raya, Senin (26/08/2019). Dijelaskan Afendie, rotan memiliki keunggulan dibandingkan sumber daya lain di wilayah di luar Palangka Raya dan Kalimantan Tengah. Selain ketersediaanya yang sangat mencukupi di Kalteng juga sudah banyak penggiat dan pelakon seni kerajinan rotan dan juga pengolahan bahan bakunya. Selain&nbsp; itu rotan di Kalimantan Tengah lebih menonjol disamping dari daerah lainnya yang terkadang kesulitan mencari bahan bakunya. Walau demikian jika berbicara hulu ke hilir, bahan baku pengolahan industri pemasaran dan menajamen menjadi pekerjaan rumah dari Pemerintah Kota sendiri. Terlebih harus ada industri pengolahan bahan bakunya hingga industry anyaman rotan.</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Selama ini proses pemasaran kerajinan rotan di Palangka Raya masih berpatokan pada promosi mulut ke mulut sehingga masih perlu proses panjang menjadikan rotan sebagai poduk unggulan&rdquo;, jelasnya.</p>\r\n\r\n<p style=\"text-align:justify\">Lebih jauh , dijelaskan pula bahwasanya memproyeksikan sumber daya yang jadi produk unggulan di Kota Cantik memerlukan proses yang tidak mudah dan cukup berat. Walaupun jika direalisasikan tentu akan membawa keuntungan tersendiri yakni lebih banyak atensi dan sumber daya yang akan dikucurkan ke arah produk unggulan tersebut. Namun semuanya perlu ketersediaan bahan baku hingga menjadi produk siap jual. (NATA).</p>\r\n','2021-06-13 22:03:49'),
(22,'Rotan1.jpg','Puluhan Warga Palangkaraya Dilatih Kerajinan Berbahan Rotan, Ini Tujuannya','<p style=\"text-align:justify\"><strong>BANJARMASINPOST.CO.ID, PALANGKARAYA</strong>&nbsp;- Sebanyak 30 orang warga Kecamatan Bukit Batu dan Kecamatan Rakumpit Kota Palangkaraya, Kalimantan Tengah, Selasa (25/8/2020) diberikan pelatihan proses produksi kerajinan berbahan anyaman rotan untuk menciptakan wirausaha baru.</p>\r\n\r\n<p style=\"text-align:justify\">Pelaksanaan pelatihan tersebut di gelar oleh Dinas Perindustrian Perdagangan dan Usaha Mikro Kecil Menengah (UMKM) Pemerintah Kota Palangkaraya sebagai upaya meningkatkan perekonomian masyarakat melalui pelatihan anyaman kerajinan tangan berbahan rotan.</p>\r\n\r\n<p style=\"text-align:justify\">Kepala Dinas Perindustrian, Perdagangan dan UMKM, Rawang, mengatakan, pelatihan proses produksi berbahan dasar rotan tersebut dilaksanakan selama 5 (lima) hari mulai tanggal 24 hingga 28 Agustus 2020 yang dilaksanakan di Aula Kecamatan Bukit Batu.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Jumlah peserta yang mengikuti pelatihan sebanyak 30 orang, berasal dari Kecamatan Bukit Batu dan Kecamatan Rakumpit Kota Palangkaraya, untuk menumbuhkan wira usaha baru di kawasan tersebut agar bisa terampil dalam membuat hasil kerajinan tangan dari rotan,&quot; ujarnya.</p>\r\n\r\n<p style=\"text-align:justify\">Pelatihan proses produksi berbahan dasar rotan ini diberikan agar peserta pelatihan memiliki pengetahuan yang memadai untuk menjadi wirausaha baru dan mendorong pertumbuhan industri kecil menengah yang baru, apalagi dalam kondisi pandemi Covid-19 saat ini.</p>\r\n\r\n<p style=\"text-align:justify\">Pelatihan ini diberikan kepada pelaku usaha ekonomi mikro khususnya di bidang kerajinan anyaman rotan, yang ada di Kota Palangkaraya. &quot;Saya berharap usai pelatihan ini akan muncul wirausaha wirausaha baru yang mampu bangkit dari keterpurukan ekonomi akibat pandemi Covid -19.Kami ingin adanya recovery ekonomi yang juga selaras dengan salah satu visi misi Walikota Palangkaraya yaitu Smart Economy arau ekonomi cerdas,&quot; ujarnya.&nbsp;<strong>(banjarmasinpost.co.id / faturahman)</strong></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n','2021-10-22 21:06:21');

/*Table structure for table `bl_galeri` */

DROP TABLE IF EXISTS `bl_galeri`;

CREATE TABLE `bl_galeri` (
  `id_galeri` int(5) NOT NULL AUTO_INCREMENT,
  `id_album` int(5) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `nama_galeri` varchar(100) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_galeri`),
  KEY `id_album` (`id_album`),
  CONSTRAINT `bl_galeri_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `bl_album` (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bl_galeri` */

insert  into `bl_galeri`(`id_galeri`,`id_album`,`gambar`,`nama_galeri`,`updated`) values 
(73,56,'Kursi Rotan Minimalis.PNG','Kursi Rotan Minimalis','2021-06-15 13:44:04'),
(74,56,'Meja Koran Rotan.PNG','Meja Koran','2021-06-15 13:47:09'),
(75,56,'Meja Minimalis Rotan.PNG','Meja Rotan Minimalis','2021-06-15 13:46:51'),
(76,56,'Sofa Rotan Minimalis.PNG','Sofa Rotan Minimalis','2021-06-15 13:44:52'),
(77,57,'Keranjang Sayur.jpg','Keranjang Sayur','2021-06-16 21:15:44'),
(78,57,'Keranjang Kotak Kuping Besar.jpg','Kerajang Kotak Kuping Besar','2021-06-16 21:15:59'),
(79,58,'DompetRotan.jpg','Dompet','2021-06-16 21:16:16'),
(80,58,'Tas Selempang Rotan.jpg','Tas Selempang Rotan','2021-06-16 21:16:47'),
(81,58,'Tas Tenteng Rotan.jpg','Tas Tenteng Rotan','2021-06-16 21:16:59'),
(83,58,'Tas Gendong Rotan.jpg','Tas Gendong Rotan','2021-06-16 21:20:01'),
(84,57,'Keranjang Rotan Kotak Besar.jpg','Keranjang Rotan Kotak Besar','2021-06-16 21:23:03'),
(85,57,'Nampan Mini.jpg','Nampan Mini','2021-06-18 13:47:58');

/*Table structure for table `bl_pesan` */

DROP TABLE IF EXISTS `bl_pesan`;

CREATE TABLE `bl_pesan` (
  `id_pesan` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bl_pesan` */

insert  into `bl_pesan`(`id_pesan`,`nama`,`email`,`pesan`,`updated`) values 
(2,'Faisal Rahman','faisalrahmnnn@gmail.com','Bismilah Lulus PP','2021-04-14 13:43:27');

/*Table structure for table `bl_tentang` */

DROP TABLE IF EXISTS `bl_tentang`;

CREATE TABLE `bl_tentang` (
  `id_tentang` int(5) NOT NULL AUTO_INCREMENT,
  `deskripsi` text DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_tentang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bl_tentang` */

insert  into `bl_tentang`(`id_tentang`,`deskripsi`,`updated`) values 
(1,'<h4 style=\"text-align:justify\">VISI</h4>\r\n\r\n<p style=\"text-align:justify\">Menyediakan website yang menarik dan update tentang aneka kerajinan rotan Kota Palangka Raya dan memberikan layanan terabik dalam websitenya</p>\r\n\r\n<h4 style=\"text-align:justify\">MISI</h4>\r\n\r\n<p style=\"text-align:justify\">Menjadi sebuah wesbite yang diperlukan untuk banyak orang&nbsp;baik masyarakat kota Palanga Raya maupun di luar Kota Palangka Raya dalam mengenal aneka kerajinan rotan.</p>\r\n\r\n<h4 style=\"text-align:justify\">MOTO</h4>\r\n\r\n<p style=\"text-align:justify\">Peduli Kerajinan Indonesia</p>\r\n','2021-09-27 13:49:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
