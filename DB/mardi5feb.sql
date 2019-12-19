-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2012 at 05:53 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mardi`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL DEFAULT '0',
  `tanggal` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `acara` text,
  `tempat` varchar(255) DEFAULT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `waktu`, `acara`, `tempat`, `kontak`, `unit`, `status`) VALUES
(20321929, '10 Oktober 2011', '14:05:20 WIB', '<p>Artikel kali ini akan saya coba bahas mengenai bagaimana ide membuat generator kode unik incremental secara otomatis.</p><p>Wah apa tuh maksudnya? OK saya gambarkan hal tersebut melalui contoh berikut ini. Misalkan terdapat suatu sistem yang digunakan untuk pendaftaran anggota. Setiap anggota yang mendaftar nantinya akan diberikan kode unik, misalnya berbentuk A00001. Dalam keanggotaan tersebut terdapat 3 jenis anggota, yaitu Platinum, Gold dan Silver. Wah? kok kayak keanggotaan apa gitu ya? It?s OK, itu hanya contoh. Untuk Platinum, kode anggotanya berawalan A dan dilanjutkan dengan nomor urutnya. Keanggotaan Gold kodenya berawalan B dan Silver C. Sehingga misalkan terdapat seseorang pendaftar pertama, dan kebetulan ia ikut yang Platinum, maka harusnya kode dia adalah A00001. Selanjutnya bila terdapat pendaftar kedua dan ia juga ikut Platinum, maka kode berikutnya adalah A00002. Bagaimana bila terdapat pendaftar yang ketiga namun ia ingin ikut yang Gold? Ya.. karena sebelumnya belum ada anggota yang Gold, maka pendaftar ketiga ini mendapat kode B00001. Begitu seterusnya?</p><p>Nah.. paham kan gambaran di atas? Selanjutnya pertanyaannya adalah bagaimana membuat kode unik incremental seperti di atas secara otomatis setiap kali ada pendaftar yang baru? Hal inilah yang akan dibahas pada artikel kali ini.</p><p>Memang sih? untuk kode unik ini kita bisa menggunakan fasilitas auto increment dalam database, namun auto increment yang hanya berupa bilangan bulat positif 1, 2, 3, .. dst ini menjadi tidak bermakna.</p><p>Contoh kasus lain yang menggunakan konsep kode unik incremental ini adalah kode transaksi yang ada di supermarket. Setiap kali kita membayar di kasir, pasti kita mendapatkan struk yang terdapat kode transaksi. Kode transaksi ini unik. Contoh kode transaksi ini misalkan TR2801200900001, dimana TR menunjukkan transaksi pembelian, 28012009 menunjukkan tanggal transaksi yaitu pada tanggal 28/1/2009 dan 00001 menunjukkan transaksi pembelian pertama pada tanggal tersebut. Bila nanti terdapat transaksi kedua pada tanggal yang sama, maka kodenya menjadi TR2801200900002, dst.</p><p>Adapun contoh yang lain yang menggunakan konsep di atas adalah ketika membuat KTP, dimana setiap orang akan diberikan nomor KTP unik. Selain itu juga dalam kasus membuat nomor SIM.</p><p>OK.. akan saya paparkan bagaimana ide membuat kode unik incremental tersebut. Dalam hal ini akan saya ambil kasus mengenai pendaftaran anggota seperti halnya contoh pertama di atas.</p><p>Nah.. bagaimana ide untuk membuat kode unik tersebut? Misalkan terdapat anggota baru yang mendaftar dengan jenis keanggotaan Platinum. Maka proses pertamanya adalah mencari kode anggota terbesar yang berawalan A**** dalam database. Dalam hal ini kita bisa menggunakan query SQL</p>', 'Alun-alun Kota Malang', '08572363233', 'RS Mardiwaluya Rampal', '1'),
(20331480, '10 Maret 2011', '20:00 WIB', '<p>Salah satu fasilitas pada website adalah gallery image, dimana para pengunjung dapat melihat kumpulan koleksi gambar dari pemilik web. Biasanya gallery juga digunakan untuk dokumentasi suatu acara.</p><p>Pada pemasangan gallery di web ada satu persoalan yang cukup mengganggu, yaitu masalah ukuran file pada tiap gambar . Oleh karena itu gambar dengan ukuran besar sebaiknya tidak boleh langsung ditampilkan di halaman depan gallery anda, lebih baik buat dulu ukuran kecilnya .</p><p>Nah, masalah membuat ukuran kecil ini yang cukup merepotkan apabila kita tidak tahu tekniknya, ternyata PHP memberi kemudahan untuk kita dalam me-resize image itu dalam ukuran kecil untuk ditampilkan , bukan sekedar me-resize lebar dan tinggi gambar namun juga me-resize ukuran byte file, teknik ini dinamakan Thumbnail Image .</p><p>Dengan membuat thumbnail terlebih dahulu tentunya pengunjung anda bisa melihat preview gambar anda sebelum melihat ukuran sebenarnya, dan manfaat lain adalah menghemat bandwidth hosting web anda .</p><p>Untuk membuat thumbnail pada PHP, anda harus pastikan PHP GD ter-install pada paket PHP anda. PHP GD adalah kumpulan fungsi-fungsi pada PHP untuk memanipulasi image . Untuk mengecek apakah PHP GD sudah ter-install pada paket anda lihat saja di PHPINFO() dan temukan info seperti di gambar di bawah ini.</p>', 'Lapangan Kanjuruhan', '0341-5557782', 'RS Mardiwaluya Kauman', '1');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `idartikel` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `kategori` text NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '',
  `counter` int(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `imgespostition` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idartikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idartikel`, `tanggal`, `kategori`, `judul`, `isi`, `status`, `counter`, `images`, `imgespostition`) VALUES
(7, '2011-03-20 04:25:07', 'Makanan', 'gizi', 'dsgdkgjakldgl;g;ag;l ;g;la g;l a \r\n hkaghkap[k]g ]ea \r\na ae]go a]gol ][aogt a] a][lt a][ ltga kagka][g a]g a]g a]sg as]g as]g a]g ]a a\r\ng]ag \r\n]a g]asgpas]g a] ga]\r\ng ag apg ][asg] ', '1', 10, NULL, NULL),
(8, '2011-03-20 05:38:19', 'Balita', '12345', 'Mahfud Efendi adalah orang programer', '0', 0, NULL, NULL),
(9, '2011-03-25 05:27:13', 'Kesehatan', 'Gizi Buruk', '<p>di indonesia sekian hari semakin banyak balita yang mengalami gizi buruk, apa penyebabnya dan kenapa bisa seperti itu?\r\nuntuk menjawabnya kita tunjukkan fakta-faktanya seperti berikut!</p><p>Halloooooooooooooooooooooooooooooooooooo!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>', '1', 17, NULL, NULL),
(10, '2011-03-20 17:05:52', 'Kesehatan', '111111', 'bngnnfnfdnfd', '1', 7, NULL, NULL),
(11, '2011-03-24 07:27:09', 'Kesehatan', 'Manfaat Buah', '<p>Manfaat Buah Untuk Kesehatan Tubuh ? Seiring dengan perkembangan zaman yang semakin maju semua serba baru, tentu membuat banyak orang yang seringkali lupa untuk memperhatikan pola makannya. Kita selalu dimanjakan oleh makanan yang mengandung berbagai macam zat pengawet, dan resep makanan lain yang justru banyak merugikan kesehatan kita dimasa mendatang. Walaupun kerugian yang akan dialami berdampak 10 sampai 15 tahun kemudian, namun alangkah baiknya kalau kita mulai tergerak dari sekarang untuk lebih memperhatikan pola makan kita.</p><p>Berikut ada beberapa macam buah yang banyak sekali manfaatnya dan tentunya sangat bermanfaat sekali untuk perkembangan tubuh kita.\r\n1. Buah Apel Bagus Untuk Kesehatan\r\nBuah Apel banyak mengandung Vitamin B dan C, Kalsium, Fosfor, Zat besi dan Klorin.\r\nBerikut beberapa manfaat buah apel untuk kesehatan :\r\n- Mengurangi Konstipasi atau sembelit dan memperbaiki pencernaan\r\n- Mengurangi batu empedu dan artitis (radang sendi)\r\n- Mengurangi kolesterol\r\n- Sangat baik untuk kesehatan gigi dan gusi</p><p>2. Buah Alpukat Bagus Untuk Kesehatan\r\nAlpukat kaya akan Vitamin B dan C, juga mineral, kalsium, fosfor, dan zat besi seperti halnya buah Apel. Namun buah Alpukat mempunyai kelebihan yaitu kaya akan lemak positip yang bermanfaat untuk sistem Kardiovaskuler.\r\nBerikut beberapa manfaat dari buah Alpukat :\r\n- Mengandung banyak lemak, Vitamin dan Mineral\r\n- Bermanfaat untuk mengurangi radang dinding atau lemak perut.\r\n- Mengurangi radang sistem pencernaan</p><p>3. Buah Pisang Bagus Untuk Kesehatan\r\nBuah Pisang kaya akan Vitamin B dan C, juga mengandung banyak mineral seperti Kalsium, sodium, magnesium, dan potasium.\r\nBerikut beberapa manfaat dari buah pisang :\r\n- Sangat baik untuk anak dan dewasa yang mempunyai masalah dengan nafsu makan anak dan pencernaan.\r\n- Buah pisang yang telah matang dapat mengurangi terkena sakit diare\r\n- Sangat baik untuk mengurangi radang usus dan lambung\r\n- Buah pisang termasuk dari buah yang mengandung energi tinggi, hal ini dikarenakan sangat tingginya zat gula yang terkandung dalam buah pisang.</p><p>4. Buah Jambu Biji Bagus Untuk Kesehatan\r\nJambu biji kaya akan vitamin C. Buah, daun dan kulit batang pohon jambu biji mengandung tanin. Sedang pada pada bunganya kurang begitu banyak zat taninnya.\r\nDaun jambu biji juga banyak mengandung zat seperti minyak atsiri, asam ursolat, asam psidiolat, asam kratogolat, asam oleanolat, asam guajaverin dan vitamin.\r\nBerikut beberapa manfaat jambu biji untuk kesehatan :\r\n- Jambu biji sangat baik untuk mengobati Diabetes mellitus (kencing manis), sakit Maag, diare, masuk angin, sering keluar kencing, prolapsisani, sakit sariawan, sakit kulit, terkena luka, dan masih banyak lagi Manfaat Buah Untuk Kesehatan Tubuh.</p>', '1', 24, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `pict` text,
  `deskripsi` text,
  `Unit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`Id`, `pict`, `deskripsi`, `Unit`) VALUES
(5, 'galeri/12012.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(6, 'galeri/14009.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(7, 'galeri/14011.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(8, 'galeri/53005.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(9, 'galeri/12012.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(10, 'galeri/14009.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(11, 'galeri/5300.jpg', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(17, 'galeri/14011.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(18, 'galeri/11003.JPG', 'dskripsi gambar', 'RS Mardiwaluya Kauman'),
(20, 'galeri/14011.JPG', 'Harimau', 'RS Mardiwaluya Kauman'),
(21, 'galeri/52005.JPG', 'Gambar baru dibuat', 'RS Mardiwaluya Kauman'),
(22, 'galeri/11016.JPG', 'untuk rampal', 'RS Mardiwaluya Rampal'),
(23, 'galeri/11016.JPG', 'kucing garong', 'RS Mardiwaluya Rampal'),
(24, 'galeri/11003.JPG', 'siapa saja', 'RS Mardiwaluya Rampal'),
(25, 'galeri/12009.JPG', 'mamaaaa', 'RS Mardiwaluya Kauman');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`Id`, `kategori`) VALUES
(1, 'Kesehatan'),
(2, 'Minuman'),
(3, 'Makanan'),
(4, 'Gizi'),
(5, 'Balita');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL DEFAULT '',
  `jeniskelamin` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `alamat` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`Id`, `nama`, `jeniskelamin`, `email`, `alamat`, `umur`, `telepon`, `pesan`) VALUES
(15, 'Mahfud Efendi', 'Laki-laki', 'azzahra17@gmail.com', 'coba', '12', '085736056523', 'ggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `m_abs`
--

CREATE TABLE IF NOT EXISTS `m_abs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` text NOT NULL,
  `user` text NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_abs`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_absen`
--

CREATE TABLE IF NOT EXISTS `m_absen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id2` int(11) NOT NULL,
  `idpas` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `jmlinap` int(11) NOT NULL,
  `tglinap` int(11) NOT NULL,
  `blninap` int(11) NOT NULL,
  `thninap` int(11) NOT NULL,
  `jminap` text NOT NULL,
  `tglklr` text NOT NULL,
  `jmklr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `m_absen`
--

INSERT INTO `m_absen` (`id`, `id2`, `idpas`, `status`, `jmlinap`, `tglinap`, `blninap`, `thninap`, `jminap`, `tglklr`, `jmklr`) VALUES
(19, 1, '1052011', 'Inpartu Normal', 0, 1, 0, 0, '', 'qe', ''),
(18, 1, '1112011', '', 0, 1, 11, 2011, '02:54', '--', ''),
(17, 1, '122011', 'Non Inpartu Operasi', 0, 12, 0, 0, '', '--', ''),
(16, 3, '3032011', 'Non Inpartu Normal', 0, 12, 0, 0, '', '--', ''),
(15, 2, '2032011', 'Inpartu Operasi', 0, 12, 0, 0, '', '3-2-2011', '32'),
(14, 1, '1032011', 'Inpartu Operasi', 0, 12, 12, 2011, '', '03-02-2012', '32'),
(20, 1, '104201101', 'Anak', 0, 28, 4, 2011, '09:07', '--', ''),
(21, 2, '204201101', 'Anak', 0, 28, 4, 2011, '09:08', '28-04-2011', ''),
(22, 3, '3042011', '', 0, 29, 4, 2011, '01:42', '--', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_absen2`
--

CREATE TABLE IF NOT EXISTS `m_absen2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tglinap` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `m_absen2`
--

INSERT INTO `m_absen2` (`id`, `idpas`, `tglinap`) VALUES
(6, '3032011', '12-3-'),
(5, '2032011', '12-0-'),
(4, '1032011', '12-0-'),
(7, '122011', '12-2-'),
(8, '1112011', '1-11-2011'),
(9, '1052011', '1-0-'),
(11, '1052011', '26-03-2011'),
(12, '1042011', '28-04-2011'),
(13, '204201101', '28-04-2011'),
(14, '3042011', '29-04-2011');

-- --------------------------------------------------------

--
-- Table structure for table `m_admin`
--

CREATE TABLE IF NOT EXISTS `m_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `pass1` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_admin`
--

INSERT INTO `m_admin` (`id`, `nama`, `username`, `pass`, `pass1`) VALUES
(1, 'Administrator', 'admin', '3g2y2n1c2l1m4f780d351f986ccbd357ec81d8a79b8a9422ae2o', 'pallentt');

-- --------------------------------------------------------

--
-- Table structure for table `m_alkesmt`
--

CREATE TABLE IF NOT EXISTS `m_alkesmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit` text NOT NULL,
  `no` text NOT NULL,
  `tgl` text NOT NULL,
  `beri` text NOT NULL,
  `beritgl` text NOT NULL,
  `trm` text NOT NULL,
  `trmtgl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_alkesmt`
--

INSERT INTO `m_alkesmt` (`id`, `unit`, `no`, `tgl`, `beri`, `beritgl`, `trm`, `trmtgl`) VALUES
(1, 'ac', 'ac', '26-03-2011c', 'ac', 'ac', 'ac', 'ac'),
(3, 'Kamar Bersalin', '1', '28-04-2011', 'Joko', '29-4-2011', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_alkesmt2`
--

CREATE TABLE IF NOT EXISTS `m_alkesmt2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtr` int(11) NOT NULL,
  `idobt` text NOT NULL,
  `jmlmt` double NOT NULL,
  `jmlreal` double NOT NULL,
  `hgst` double NOT NULL,
  `hgjml` double NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `m_alkesmt2`
--

INSERT INTO `m_alkesmt2` (`id`, `idtr`, `idobt`, `jmlmt`, `jmlreal`, `hgst`, `hgjml`, `ket`, `status`) VALUES
(3, 1, 'amoxilineb', 21, 2, 10001, 20001, 'sudagh1', ''),
(5, 3, '2', 13, 0, 100, 1300, 'asdda', 'Sudah');

-- --------------------------------------------------------

--
-- Table structure for table `m_alkespk`
--

CREATE TABLE IF NOT EXISTS `m_alkespk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `dok` text NOT NULL,
  `jns` text NOT NULL,
  `jml` text NOT NULL,
  `rp` text NOT NULL,
  `kasie` text NOT NULL,
  `rg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `m_alkespk`
--

INSERT INTO `m_alkespk` (`id`, `idpas`, `tgl`, `dok`, `jns`, `jml`, `rp`, `kasie`, `rg`) VALUES
(2, '1032011', '0000-00-00', 'a', 'b', '2', '2', 'b', 'Kamar Bersalin'),
(3, '1032011', '0000-00-00', 'c', 'c', '1', '1', '1', 'Kamar Operasi'),
(4, '1032011', '0000-00-00', '', '2', '12', '0', 'asdsa', 'Kamar Bersalin'),
(5, '1032011', '0000-00-00', '', '3', '2', '0', 'asd', 'Kamar Bersalin'),
(6, '1032011', '0000-00-00', '', '1', '19', '0', 'qwe', 'Kamar Bersalin'),
(7, '1032011', '0000-00-00', '', '3', '11', '12100', 'asd', 'Kamar Bersalin'),
(8, '3032011', '0000-00-00', '', '2', '14', '1400', 'asd', 'Kamar Operasi'),
(9, '1032011', '0000-00-00', '', '3', '20', '22000', '', 'Kamar Bersalin'),
(10, '1052011', '2012-01-30', '', ' ACRAN INJEKSI', '1', '1300', '', 'Kamar Bersalin');

-- --------------------------------------------------------

--
-- Table structure for table `m_analkespk`
--

CREATE TABLE IF NOT EXISTS `m_analkespk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jns` text NOT NULL,
  `jml` text NOT NULL,
  `rp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_analkespk`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_apokar`
--

CREATE TABLE IF NOT EXISTS `m_apokar` (
  `idapotikrsp` int(11) NOT NULL AUTO_INCREMENT,
  `notrans` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl` text NOT NULL,
  `pasien` varchar(255) NOT NULL,
  `idkar` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idapotikrsp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_apokar`
--

INSERT INTO `m_apokar` (`idapotikrsp`, `notrans`, `id`, `tgl`, `pasien`, `idkar`, `status`) VALUES
(1, '2011-06-22-1', 1, '2011-06-22', 'asd', 1, 0),
(2, '2011-09-12-1', 1, '2011-09-12', 'qiqi', 12121, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_apokar2`
--

CREATE TABLE IF NOT EXISTS `m_apokar2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idapotikrsp` int(11) NOT NULL,
  `obat` varchar(255) NOT NULL,
  `jml` double NOT NULL,
  `hg` double NOT NULL,
  `hgt` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_apokar2`
--

INSERT INTO `m_apokar2` (`id`, `idapotikrsp`, `obat`, `jml`, `hg`, `hgt`) VALUES
(1, 0, 'amoniline', 4, 0, 0),
(2, 0, ' 20% MAGNESIUM SULFAT', 2, 0, 0),
(3, 2, ' 20% MAGNESIUM SULFAT', 2, 0, 0),
(4, 2, ' 20% MAGNESIUM SULFAT', 3, 3000, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `m_aporsp`
--

CREATE TABLE IF NOT EXISTS `m_aporsp` (
  `idapotikrsp` int(11) NOT NULL AUTO_INCREMENT,
  `notrans` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl` text NOT NULL,
  `pasien` varchar(255) NOT NULL,
  `dokter` varchar(255) NOT NULL,
  `alm` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idapotikrsp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `m_aporsp`
--

INSERT INTO `m_aporsp` (`idapotikrsp`, `notrans`, `id`, `tgl`, `pasien`, `dokter`, `alm`, `umur`, `telp`, `status`) VALUES
(1, '2011-08-17-1', 1, '2011-08-17', 'aa', 'aa', 'aa', 1231, '1231', 0),
(2, '2011-08-17-2', 2, '2011-08-17', 'ww', 'ww', 'ww', 0, 'ww', 0),
(3, '2011-08-17-3', 3, '2011-08-17', 'qq', 'qq', 'qq', 0, 'qq', 0),
(4, '2011-08-17-4', 4, '2011-08-17', 'dsa', 'ads', 'ads', 0, 'asd', 0),
(5, '2011-08-17-5', 5, '2011-08-17', 'ff', 'ff', 'ff', 0, 'ff', 0),
(6, '2011-08-17-6', 6, '2011-08-17', 'ff', 'gg', 'gg', 0, 'gg', 0),
(7, '2011-09-11-1', 1, '2011-09-11', 'pp', 'pp', 'pp', 0, 'pp', 0),
(8, '2011-09-11-2', 2, '2011-09-11', 'tt', 'tt', 'tt', 0, 'tt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_aporsp2`
--

CREATE TABLE IF NOT EXISTS `m_aporsp2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idapotikrsp` int(11) NOT NULL,
  `obat` varchar(255) NOT NULL,
  `jml` double NOT NULL,
  `hg` double NOT NULL,
  `hgt` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `m_aporsp2`
--

INSERT INTO `m_aporsp2` (`id`, `idapotikrsp`, `obat`, `jml`, `hg`, `hgt`) VALUES
(16, 8, ' ACRAN INJEKSI', 4, 0, 0),
(18, 8, ' ACRAN INJEKSI', 6, 0, 0),
(19, 8, ' ACYCLOVIR 400 MG TAB', 2, 0, 0),
(21, 8, ' ACRAN INJEKSI', 5, 1300, 6500);

-- --------------------------------------------------------

--
-- Table structure for table `m_apoum`
--

CREATE TABLE IF NOT EXISTS `m_apoum` (
  `idapotikrsp` int(11) NOT NULL AUTO_INCREMENT,
  `notrans` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl` text NOT NULL,
  `pasien` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idapotikrsp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_apoum`
--

INSERT INTO `m_apoum` (`idapotikrsp`, `notrans`, `id`, `tgl`, `pasien`, `status`) VALUES
(1, '2011-06-22-1', 1, '2011-06-22', 'klklk', 0),
(2, '2011-09-12-1', 1, '2011-09-12', 'ari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_apoum2`
--

CREATE TABLE IF NOT EXISTS `m_apoum2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idapotikrsp` int(11) NOT NULL,
  `obat` varchar(255) NOT NULL,
  `jml` double NOT NULL,
  `hg` double NOT NULL,
  `hgt` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_apoum2`
--

INSERT INTO `m_apoum2` (`id`, `idapotikrsp`, `obat`, `jml`, `hg`, `hgt`) VALUES
(1, 0, 'amoniline', 2, 0, 0),
(2, 2, ' ACRAN INJEKSI', 5, 1300, 6500),
(3, 2, ' ACT HIB ', 4, 1300, 5200);

-- --------------------------------------------------------

--
-- Table structure for table `m_byalkes`
--

CREATE TABLE IF NOT EXISTS `m_byalkes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `idobat` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `m_byalkes`
--

INSERT INTO `m_byalkes` (`id`, `idpas`, `idobat`, `jml`, `harga`, `tgl`) VALUES
(3, '1032011102', '3', 3, 3900, '05-02-2012'),
(4, '1032011102', '1', 5, 6500, '05-02-2012'),
(5, '1032011102', '377', 2, 0, '05-02-2012');

-- --------------------------------------------------------

--
-- Table structure for table `m_byb1`
--

CREATE TABLE IF NOT EXISTS `m_byb1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `dra` text NOT NULL,
  `drb` text NOT NULL,
  `drc` text NOT NULL,
  `drd` text NOT NULL,
  `dre` text NOT NULL,
  `bdra` text NOT NULL,
  `bdrb` text NOT NULL,
  `bdrc` text NOT NULL,
  `bdrd` text NOT NULL,
  `bdre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_byb1`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_byb2`
--

CREATE TABLE IF NOT EXISTS `m_byb2` (
  `idpas` varchar(255) NOT NULL,
  `hprw` text NOT NULL,
  `hgprw` int(11) NOT NULL,
  `jmprw` int(11) NOT NULL,
  `hprw1` text NOT NULL,
  `hgprw1` int(11) NOT NULL,
  `jmprw1` int(11) NOT NULL,
  `prwk` text NOT NULL,
  `jmprwk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_byb2`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_byb3`
--

CREATE TABLE IF NOT EXISTS `m_byb3` (
  `idpas` varchar(255) NOT NULL,
  `alat` text NOT NULL,
  `balat` int(11) NOT NULL,
  `suntik` text NOT NULL,
  `bsuntik` int(11) NOT NULL,
  `obat` text NOT NULL,
  `bobat` int(11) NOT NULL,
  `labor` text NOT NULL,
  `blabor` int(11) NOT NULL,
  `kapas` text NOT NULL,
  `bkapas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_byb3`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_byb4`
--

CREATE TABLE IF NOT EXISTS `m_byb4` (
  `idpas` varchar(255) NOT NULL,
  `cuci` text NOT NULL,
  `bcuci` int(11) NOT NULL,
  `admin` text NOT NULL,
  `badmin` int(11) NOT NULL,
  `rehab` text NOT NULL,
  `brehab` int(11) NOT NULL,
  `telp` text NOT NULL,
  `btelp` int(11) NOT NULL,
  `amb` text NOT NULL,
  `bamb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_byb4`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_byb5`
--

CREATE TABLE IF NOT EXISTS `m_byb5` (
  `idpas` varchar(255) NOT NULL,
  `lain1` text NOT NULL,
  `lain2` text NOT NULL,
  `lain3` text NOT NULL,
  `lain4` text NOT NULL,
  `blain1` int(11) NOT NULL,
  `blain2` int(11) NOT NULL,
  `blain3` int(11) NOT NULL,
  `blain4` int(11) NOT NULL,
  `kwt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_byb5`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_bybr2`
--

CREATE TABLE IF NOT EXISTS `m_bybr2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `rg` text NOT NULL,
  `no` text NOT NULL,
  `penolong` text NOT NULL,
  `g` text NOT NULL,
  `p` text NOT NULL,
  `a` text NOT NULL,
  `hml` text NOT NULL,
  `tgllhr` text NOT NULL,
  `jk` text NOT NULL,
  `lain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_bybr2`
--

INSERT INTO `m_bybr2` (`id`, `idpas`, `rg`, `no`, `penolong`, `g`, `p`, `a`, `hml`, `tgllhr`, `jk`, `lain`) VALUES
(3, '1032011', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', '23-03-2011 : 10.28', 'laki-laki', 'aq');

-- --------------------------------------------------------

--
-- Table structure for table `m_bybr3`
--

CREATE TABLE IF NOT EXISTS `m_bybr3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `salin` text NOT NULL,
  `spontan` text NOT NULL,
  `pres` text NOT NULL,
  `lm1` text NOT NULL,
  `lm2` text NOT NULL,
  `golibu` text NOT NULL,
  `rh` text NOT NULL,
  `ktbtgl` text NOT NULL,
  `warna` text NOT NULL,
  `warna2` text NOT NULL,
  `warna3` text NOT NULL,
  `rwyskt` text NOT NULL,
  `rwyhml` text NOT NULL,
  `skt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_bybr3`
--

INSERT INTO `m_bybr3` (`id`, `idpas`, `salin`, `spontan`, `pres`, `lm1`, `lm2`, `golibu`, `rh`, `ktbtgl`, `warna`, `warna2`, `warna3`, `rwyskt`, `rwyhml`, `skt`) VALUES
(3, '1032011', 'tunggal', 'spontan', 'aq', 'aq', 'aq', 'aq', 'aq', '23-03-2011 : 10.28', 'spontan', 'jernih', 'putih', '		a\r\n	\r\n	', '		aq\r\n	\r\n	', 'aq');

-- --------------------------------------------------------

--
-- Table structure for table `m_bybr4`
--

CREATE TABLE IF NOT EXISTS `m_bybr4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `lendir` text NOT NULL,
  `res` text NOT NULL,
  `jls` text NOT NULL,
  `bb` text NOT NULL,
  `pb` text NOT NULL,
  `lk` text NOT NULL,
  `ld` text NOT NULL,
  `lp` text NOT NULL,
  `shjm` text NOT NULL,
  `sh` text NOT NULL,
  `shjm2` text NOT NULL,
  `sh2` text NOT NULL,
  `nfjm` text NOT NULL,
  `nf` text NOT NULL,
  `nfjm2` text NOT NULL,
  `nf2` text NOT NULL,
  `jtg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_bybr4`
--

INSERT INTO `m_bybr4` (`id`, `idpas`, `lendir`, `res`, `jls`, `bb`, `pb`, `lk`, `ld`, `lp`, `shjm`, `sh`, `shjm2`, `sh2`, `nfjm`, `nf`, `nfjm2`, `nf2`, `jtg`) VALUES
(3, '1032011', 'ya', 'pengisapan lendir', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq');

-- --------------------------------------------------------

--
-- Table structure for table `m_bybr5`
--

CREATE TABLE IF NOT EXISTS `m_bybr5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `jt1` text NOT NULL,
  `jt5` text NOT NULL,
  `jt10` text NOT NULL,
  `nf1` text NOT NULL,
  `nf5` text NOT NULL,
  `nf10` text NOT NULL,
  `ot1` text NOT NULL,
  `ot5` text NOT NULL,
  `ot10` text NOT NULL,
  `ref1` text NOT NULL,
  `ref5` text NOT NULL,
  `ref10` text NOT NULL,
  `wrn1` text NOT NULL,
  `wrn5` text NOT NULL,
  `wrn10` text NOT NULL,
  `nilai` text NOT NULL,
  `total1` text NOT NULL,
  `total5` text NOT NULL,
  `total10` text NOT NULL,
  `jns` text NOT NULL,
  `sebab` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_bybr5`
--

INSERT INTO `m_bybr5` (`id`, `idpas`, `jt1`, `jt5`, `jt10`, `nf1`, `nf5`, `nf10`, `ot1`, `ot5`, `ot10`, `ref1`, `ref5`, `ref10`, `wrn1`, `wrn5`, `wrn10`, `nilai`, `total1`, `total5`, `total10`, `jns`, `sebab`) VALUES
(3, '1032011', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'Lahir hidup', 'aq');

-- --------------------------------------------------------

--
-- Table structure for table `m_bybr6`
--

CREATE TABLE IF NOT EXISTS `m_bybr6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `obt` text NOT NULL,
  `gelang` text NOT NULL,
  `periksa` text NOT NULL,
  `tglplg` text NOT NULL,
  `ttdprw` text NOT NULL,
  `ttdibu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_bybr6`
--

INSERT INTO `m_bybr6` (`id`, `idpas`, `obt`, `gelang`, `periksa`, `tglplg`, `ttdprw`, `ttdibu`) VALUES
(3, '1032011', '		aq\r\n	\r\n	', 'aq', 'aq', 'aq', 'aq', 'aq');

-- --------------------------------------------------------

--
-- Table structure for table `m_bysusu`
--

CREATE TABLE IF NOT EXISTS `m_bysusu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl` text NOT NULL,
  `susu` varchar(255) NOT NULL,
  `rp` int(11) NOT NULL,
  `lapor` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_bysusu`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_diag`
--

CREATE TABLE IF NOT EXISTS `m_diag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icd` varchar(255) NOT NULL,
  `sebab` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_diag`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_diagnosani`
--

CREATE TABLE IF NOT EXISTS `m_diagnosani` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl` text NOT NULL,
  `tp` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `f` text NOT NULL,
  `tumpah` text NOT NULL,
  `ket` text NOT NULL,
  `amnese` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_diagnosani`
--

INSERT INTO `m_diagnosani` (`id`, `idpas`, `tgl`, `tp`, `a`, `b`, `c`, `d`, `e`, `f`, `tumpah`, `ket`, `amnese`) VALUES
(1, 'idpas', '21-03-2011', 'a', 'a', 'a', '', '', '', '', 'a', 'a', 'a'),
(3, '3032011', '21-03-20111', 'b1', 'ab', 'b1', 'b1', 'b1', 'b1', 'b1', 'b1', 'b1', 'b1'),
(4, '3032011', '21-03-2011', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `m_disbiaya`
--

CREATE TABLE IF NOT EXISTS `m_disbiaya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `persen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_disbiaya`
--

INSERT INTO `m_disbiaya` (`id`, `nama`, `persen`) VALUES
(1, 'Sendiri', '0'),
(3, 'Askes 1', '2'),
(4, 'Asuransi ABC', '1');

-- --------------------------------------------------------

--
-- Table structure for table `m_instruksi`
--

CREATE TABLE IF NOT EXISTS `m_instruksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl1` text NOT NULL,
  `jm1` text NOT NULL,
  `tgl2` text NOT NULL,
  `jm2` text NOT NULL,
  `dok` text NOT NULL,
  `perawat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `m_instruksi`
--

INSERT INTO `m_instruksi` (`id`, `idpas`, `tgl1`, `jm1`, `tgl2`, `jm2`, `dok`, `perawat`) VALUES
(2, '1052011', 'a', 'a', 'a', 'a', 'a', 'a'),
(3, '1052011', 'c', 'bc', 'bc', 'b', 'bc', 'bc'),
(5, '1052011', 'c', 'c', 'c', 'c', 'cc', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `m_instruksipb`
--

CREATE TABLE IF NOT EXISTS `m_instruksipb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `stfsk` text NOT NULL,
  `tgl` text NOT NULL,
  `nodm` text NOT NULL,
  `dokb` text NOT NULL,
  `asisb` text NOT NULL,
  `diagb` text NOT NULL,
  `anesb` text NOT NULL,
  `dokbi` text NOT NULL,
  `asisbi` text NOT NULL,
  `jns` text NOT NULL,
  `jns2` text NOT NULL,
  `pos` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_instruksipb`
--

INSERT INTO `m_instruksipb` (`id`, `idpas`, `stfsk`, `tgl`, `nodm`, `dokb`, `asisb`, `diagb`, `anesb`, `dokbi`, `asisbi`, `jns`, `jns2`, `pos`) VALUES
(2, '2032011', '1', '19-03-2011v', 'av', 'av', 'av', 'av', 'av', 'av', 'av', 'av', 'av', 'av');

-- --------------------------------------------------------

--
-- Table structure for table `m_instruksipb2`
--

CREATE TABLE IF NOT EXISTS `m_instruksipb2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `pre` text NOT NULL,
  `beri` text NOT NULL,
  `jm` text NOT NULL,
  `efek` text NOT NULL,
  `medik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_instruksipb2`
--

INSERT INTO `m_instruksipb2` (`id`, `idpas`, `pre`, `beri`, `jm`, `efek`, `medik`) VALUES
(2, '2032011', '			a\r\n	v\r\n	', 'P.Oral', 'av', 'av', '			a\r\n	v\r\n	');

-- --------------------------------------------------------

--
-- Table structure for table `m_instruksipb3`
--

CREATE TABLE IF NOT EXISTS `m_instruksipb3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `anes` text NOT NULL,
  `opr` text NOT NULL,
  `resp` text NOT NULL,
  `jmmedik` text NOT NULL,
  `jmcairan` text NOT NULL,
  `drh` text NOT NULL,
  `urine` text NOT NULL,
  `lmop` text NOT NULL,
  `lman` text NOT NULL,
  `kprb` text NOT NULL,
  `kpb` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_instruksipb3`
--

INSERT INTO `m_instruksipb3` (`id`, `idpas`, `anes`, `opr`, `resp`, `jmmedik`, `jmcairan`, `drh`, `urine`, `lmop`, `lman`, `kprb`, `kpb`) VALUES
(2, '2032011', 'av', 'av', 'av', '			av\r\n	\r\n	', '			a\r\n	v\r\n	', 'av', 'av', 'av', 'av', '			av\r\n	\r\n	', '			av\r\n	\r\n	');

-- --------------------------------------------------------

--
-- Table structure for table `m_instruksipb4`
--

CREATE TABLE IF NOT EXISTS `m_instruksipb4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `kontrol` text NOT NULL,
  `pos` text NOT NULL,
  `infus` text NOT NULL,
  `obt` text NOT NULL,
  `skt` text NOT NULL,
  `minum` text NOT NULL,
  `urin` text NOT NULL,
  `lain` text NOT NULL,
  `rg` text NOT NULL,
  `jm` text NOT NULL,
  `sadar` text NOT NULL,
  `tensi` text NOT NULL,
  `nadi` text NOT NULL,
  `nf` text NOT NULL,
  `suhu` text NOT NULL,
  `prwt1` text NOT NULL,
  `prwt2` text NOT NULL,
  `ahli` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_instruksipb4`
--

INSERT INTO `m_instruksipb4` (`id`, `idpas`, `kontrol`, `pos`, `infus`, `obt`, `skt`, `minum`, `urin`, `lain`, `rg`, `jm`, `sadar`, `tensi`, `nadi`, `nf`, `suhu`, `prwt1`, `prwt2`, `ahli`) VALUES
(3, '2032011', '		ac\r\n	', '		ac\r\n	', '		ac\r\n	', '		ac\r\n	', '		ac\r\n	', '		ac\r\n	', '		ac\r\n	c', '		ac\r\n	', 'ac', 'ac', 'ac', 'ac', 'ac', 'ac', 'ac', 'ac', 'ac', 'ac');

-- --------------------------------------------------------

--
-- Table structure for table `m_instruksipo`
--

CREATE TABLE IF NOT EXISTS `m_instruksipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl` text NOT NULL,
  `jm` text NOT NULL,
  `nadi` text NOT NULL,
  `tensi` text NOT NULL,
  `temp` text NOT NULL,
  `urine` text NOT NULL,
  `cairan` text NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_instruksipo`
--

INSERT INTO `m_instruksipo` (`id`, `idpas`, `tgl`, `jm`, `nadi`, `tensi`, `temp`, `urine`, `cairan`, `ket`) VALUES
(1, '2032011', '31-02-2011', '31:30', '3', '3', '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `m_karyawan`
--

CREATE TABLE IF NOT EXISTS `m_karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_karyawan`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_konfdok`
--

CREATE TABLE IF NOT EXISTS `m_konfdok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_konfdok`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_konfobt`
--

CREATE TABLE IF NOT EXISTS `m_konfobt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `per` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_konfobt`
--

INSERT INTO `m_konfobt` (`id`, `per`) VALUES
(1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `m_konfrg`
--

CREATE TABLE IF NOT EXISTS `m_konfrg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_rg` text NOT NULL,
  `kls_rg` text NOT NULL,
  `hrg_rg` int(11) NOT NULL,
  `utk` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_konfrg`
--

INSERT INTO `m_konfrg` (`id`, `nm_rg`, `kls_rg`, `hrg_rg`, `utk`, `status`) VALUES
(4, '1', 'Flamboyan', 100000, 'Pasien', 0),
(5, '1', 'Aloevera', 110000, 'Bayi', 0),
(6, '2', 'Flamboyan', 100000, 'Pasien', 0),
(8, '1', 'Melati', 50000, 'Bayi', 0),
(9, '2', 'Melati', 50000, 'Bayi', 1),
(10, '1', 'Mawar', 75000, 'Bayi', 1),
(11, '2', 'Mawar', 75000, 'Bayi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_lapopr`
--

CREATE TABLE IF NOT EXISTS `m_lapopr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `bag` text NOT NULL,
  `opr` text NOT NULL,
  `asis` text NOT NULL,
  `instr` text NOT NULL,
  `bius` text NOT NULL,
  `jnsbius` text NOT NULL,
  `diag1` text NOT NULL,
  `diag2` text NOT NULL,
  `jar` text NOT NULL,
  `opr2` text NOT NULL,
  `pa` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_lapopr`
--

INSERT INTO `m_lapopr` (`id`, `idpas`, `bag`, `opr`, `asis`, `instr`, `bius`, `jnsbius`, `diag1`, `diag2`, `jar`, `opr2`, `pa`) VALUES
(2, '2032011', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `m_lapopr2`
--

CREATE TABLE IF NOT EXISTS `m_lapopr2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tglopr` text NOT NULL,
  `mlopr` text NOT NULL,
  `slsopr` text NOT NULL,
  `lmopr` text NOT NULL,
  `mlbius` text NOT NULL,
  `slsbius` text NOT NULL,
  `lmbius` text NOT NULL,
  `lain` text NOT NULL,
  `lapor` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_lapopr2`
--

INSERT INTO `m_lapopr2` (`id`, `idpas`, `tglopr`, `mlopr`, `slsopr`, `lmopr`, `mlbius`, `slsbius`, `lmbius`, `lain`, `lapor`) VALUES
(2, '2032011', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `m_observasi`
--

CREATE TABLE IF NOT EXISTS `m_observasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `para` text NOT NULL,
  `lhrtgl` text NOT NULL,
  `lhrjm` text NOT NULL,
  `jk` text NOT NULL,
  `bb` text NOT NULL,
  `bb2` text NOT NULL,
  `bb3` text NOT NULL,
  `lk1` text NOT NULL,
  `lk2` text NOT NULL,
  `lk3` text NOT NULL,
  `jns` text NOT NULL,
  `tindakan` text NOT NULL,
  `penolong` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_observasi`
--

INSERT INTO `m_observasi` (`id`, `idpas`, `para`, `lhrtgl`, `lhrjm`, `jk`, `bb`, `bb2`, `bb3`, `lk1`, `lk2`, `lk3`, `jns`, `tindakan`, `penolong`) VALUES
(2, '1052011', 'ab', 'ab', 'ab', 'perempuan', 'aab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab'),
(3, '204201101', 'asd', 'sad', '32', 'laki-laki', '2', '2', '2', '2', '2', '2', 'sad', 'ds', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `m_obt`
--

CREATE TABLE IF NOT EXISTS `m_obt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `hgbeli` double NOT NULL,
  `hgjual` double NOT NULL,
  `hgjual1` double NOT NULL,
  `hgjual2` double NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2361 ;

--
-- Dumping data for table `m_obt`
--

INSERT INTO `m_obt` (`id`, `nama`, `hgbeli`, `hgjual`, `hgjual1`, `hgjual2`, `satuan`, `kategori`) VALUES
(3, ' ACT HIB ', 1000, 1300, 1300, 0, '', 'Obat'),
(2, ' ACRAN TABLET', 0, 0, 0, 0, '', 'Obat'),
(1, ' ACRAN INJEKSI', 1000, 1300, 1300, 1000, '0', 'Obat'),
(4, ' ACYCLOVIR 200 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(5, ' ACYCLOVIR 400 MG TAB', 7700, 10010, 10010, 0, '', 'Obat'),
(6, ' ACYCLOVIR 5% SALF', 0, 0, 0, 0, '', 'Obat'),
(7, ' ADALAT 5 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(8, ' ADALAT 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(9, ' ADALAT 30 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(10, ' ADONA 10 ML INJ', 0, 0, 0, 0, '', 'Obat'),
(11, ' ADONA (AC-17) 10 MG', 0, 0, 0, 0, '', 'Obat'),
(12, ' ADRENALIN INJ', 0, 0, 0, 0, '', 'Obat'),
(13, ' AERIUS TAB', 0, 0, 0, 0, '', 'Obat'),
(14, ' AGNOCASTON TAB', 0, 0, 0, 0, '', 'Obat'),
(15, ' AKRINOR TAB', 0, 0, 0, 0, '', 'Obat'),
(16, ' ALBOTHYL 10 ML', 0, 0, 0, 0, '', 'Obat'),
(17, ' ALBOTHYL 100 ML', 0, 0, 0, 0, '', 'Obat'),
(18, ' ALBOTHYL OVULA', 0, 0, 0, 0, '', 'Obat'),
(19, ' ALBUMIN 5 %', 0, 0, 0, 0, '', 'Obat'),
(20, ' ALERTEN - Q 25', 0, 0, 0, 0, '', 'Obat'),
(21, ' ALINAMIN F INJ', 0, 0, 0, 0, '', 'Obat'),
(22, ' ALINAMIN F TAB', 0, 0, 0, 0, '', 'Obat'),
(23, ' ALKOHOL 70%', 0, 0, 0, 0, '', 'Obat'),
(24, ' ALKOHOL 95%', 0, 0, 0, 0, '', 'Obat'),
(25, ' ALLETROL EYE DROP', 0, 0, 0, 0, '', 'Obat'),
(26, ' ALLUPURINOL TAB', 0, 0, 0, 0, '', 'Obat'),
(27, ' ALLYLESTRENOL TAB', 0, 0, 0, 0, '', 'Obat'),
(28, ' ALORA TAB', 0, 0, 0, 0, '', 'Obat'),
(29, ' AMBROXOL TAB', 0, 0, 0, 0, '', 'Obat'),
(30, ' AMINOPHYLLIN INJ', 0, 0, 0, 0, '', 'Obat'),
(31, ' AMINOPHYLLIN 200 MG', 0, 0, 0, 0, '', 'Obat'),
(32, ' AMOXAN FORTE SYR', 0, 0, 0, 0, '', 'Obat'),
(33, ' AMOXAN DRY SYR', 0, 0, 0, 0, '', 'Obat'),
(34, ' AMOXAN DISP TAB', 0, 0, 0, 0, '', 'Obat'),
(35, ' AMOXAN 250 MG CAP', 0, 0, 0, 0, '', 'Obat'),
(36, ' AMOXAN 500 MG CAP', 0, 0, 0, 0, '', 'Obat'),
(37, ' AMOXAN 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(38, ' AMOXYCILLIN 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(39, ' AMPICILLIN 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(40, ' ANALSIK TAB', 0, 0, 0, 0, '', 'Obat'),
(41, ' ANTALGIN TAB', 0, 0, 0, 0, '', 'Obat'),
(42, ' ANTASIDA DOEN TAB', 0, 0, 0, 0, '', 'Obat'),
(43, ' ANTIMO TAB', 0, 0, 0, 0, '', 'Obat'),
(44, ' ANTRAIN INJ', 0, 0, 0, 0, '', 'Obat'),
(45, ' ANVOMER B6 TAB', 0, 0, 0, 0, '', 'Obat'),
(46, ' APIALYS DROP', 0, 0, 0, 0, '', 'Obat'),
(47, ' APIALYS SYR', 0, 0, 0, 0, '', 'Obat'),
(48, ' APOLAR CREAM', 0, 0, 0, 0, '', 'Obat'),
(49, ' AQUABIDEST 25 ML', 0, 0, 0, 0, '', 'Obat'),
(50, ' AQUADEST 1 L', 0, 0, 0, 0, '', 'Obat'),
(51, ' ARDIUM TAB', 0, 0, 0, 0, '', 'Obat'),
(52, ' ARGESID 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(53, ' ASAM MEFENAMAT 500 MG', 0, 0, 0, 0, '', 'Obat'),
(54, ' ASEDAS SYRUP 60 ML', 0, 0, 0, 0, '', 'Obat'),
(55, ' ASERING', 0, 0, 0, 0, '', 'Obat'),
(56, ' ASPILLET TAB', 0, 0, 0, 0, '', 'Obat'),
(57, ' ASTIFEN TAB', 0, 0, 0, 0, '', 'Obat'),
(58, ' ATAROC SYRUP', 0, 0, 0, 0, '', 'Obat'),
(59, ' ATAROC TABLET', 0, 0, 0, 0, '', 'Obat'),
(60, ' AVIL INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(61, ' AVITIN INJ', 0, 0, 0, 0, '', 'Obat'),
(62, ' BACTROBAN 5 GR SALF', 0, 0, 0, 0, '', 'Obat'),
(63, ' BAQUINOR FORTE TAB', 0, 0, 0, 0, '', 'Obat'),
(64, ' BAYCLEAN', 0, 0, 0, 0, '', 'Obat'),
(65, ' BAYCUTEN N CREAM ', 0, 0, 0, 0, '', 'Obat'),
(66, ' BECOMBION DROP', 0, 0, 0, 0, '', 'Obat'),
(67, ' BECOMBION SYR', 0, 0, 0, 0, '', 'Obat'),
(68, ' BECOM-C TAB', 0, 0, 0, 0, '', 'Obat'),
(69, ' BECOM ZET TAB', 0, 0, 0, 0, '', 'Obat'),
(70, ' BEDAK TALK', 0, 0, 0, 0, '', 'Obat'),
(71, ' BETADIN SOLUTION', 0, 0, 0, 0, '', 'Obat'),
(72, ' BETASON N CREAM', 0, 0, 0, 0, '', 'Obat'),
(73, ' BICROLID TAB', 0, 0, 0, 0, '', 'Obat'),
(74, ' BIO ATP TAB', 0, 0, 0, 0, '', 'Obat'),
(75, ' BIOCEF 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(76, ' BIOCREAM 20 GR', 0, 0, 0, 0, '', 'Obat'),
(77, ' BIODIAR TAB', 0, 0, 0, 0, '', 'Obat'),
(78, ' BIOGESIC TAB', 0, 0, 0, 0, '', 'Obat'),
(79, ' BIOPLACENTON CREAM', 0, 0, 0, 0, '', 'Obat'),
(80, ' BIORALIT SAC', 0, 0, 0, 0, '', 'Obat'),
(81, ' BIOSANBE CAP', 0, 0, 0, 0, '', 'Obat'),
(82, ' BIOTHICOL 500 MG CAP', 0, 0, 0, 0, '', 'Obat'),
(83, ' BIOTHICOL SYR', 0, 0, 0, 0, '', 'Obat'),
(84, ' BISOLVON 4 MG INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(85, ' BISOLVON TAB', 0, 0, 0, 0, '', 'Obat'),
(86, ' BISOLVON SYR', 0, 0, 0, 0, '', 'Obat'),
(87, ' BLEDSTOP', 0, 0, 0, 0, '', 'Obat'),
(88, ' BLESIFEN TAB', 0, 0, 0, 0, '', 'Obat'),
(89, ' BOORWATER', 0, 0, 0, 0, '', 'Obat'),
(90, ' BORALGINOL N SUPP', 0, 0, 0, 0, '', 'Obat'),
(91, ' BORALGINOL S SUPP', 0, 0, 0, 0, '', 'Obat'),
(92, ' BORAX GLYCERIN', 0, 0, 0, 0, '', 'Obat'),
(93, ' BRAXIDIN TAB', 0, 0, 0, 0, '', 'Obat'),
(94, ' BRENTAN 5 GR OINT ', 0, 0, 0, 0, '', 'Obat'),
(95, ' BRICASMA INJ', 0, 0, 0, 0, '', 'Obat'),
(96, ' BUNASCAN SPINAL 0,5% HEAVY', 0, 0, 0, 0, '', 'Obat'),
(97, ' BUSCOPAN INJ', 0, 0, 0, 0, '', 'Obat'),
(98, ' BUSCOPAN TAB', 0, 0, 0, 0, '', 'Obat'),
(99, ' CALCII GLUCONAS INJ', 0, 0, 0, 0, '', 'Obat'),
(100, ' CALOMA CAP', 0, 0, 0, 0, '', 'Obat'),
(101, ' CAMIVITA SYRUP', 0, 0, 0, 0, '', 'Obat'),
(102, ' CAPSINAT 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(103, ' CAPTOPRYL 12,5 TAB', 0, 0, 0, 0, '', 'Obat'),
(104, ' CAPTOPRYL 25 TAB', 0, 0, 0, 0, '', 'Obat'),
(105, ' CATAFLAM 25 TAB', 0, 0, 0, 0, '', 'Obat'),
(106, ' CATAFLAM 50 TAB', 0, 0, 0, 0, '', 'Obat'),
(107, ' CATAPRES 150 MG', 0, 0, 0, 0, '', 'Obat'),
(108, ' CATAPRES INJ', 0, 0, 0, 0, '', 'Obat'),
(109, ' CAVIPLEX DROP', 0, 0, 0, 0, '', 'Obat'),
(110, ' CAVIT D3 TAB', 0, 0, 0, 0, '', 'Obat'),
(111, ' CEDANTRON 4 INJ', 0, 0, 0, 0, '', 'Obat'),
(112, ' CEDANTRON 8 INJ', 0, 0, 0, 0, '', 'Obat'),
(113, ' CEFADROXIL 500 MG CAP', 0, 0, 0, 0, '', 'Obat'),
(114, ' CEFAT 500 MG CAP', 0, 0, 0, 0, '', 'Obat'),
(115, ' CEFAT SYR', 0, 0, 0, 0, '', 'Obat'),
(116, ' CEFOTAXIM 0,5 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(117, ' CEFOTAXIM 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(118, ' CEFTRIAXONE 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(119, ' CELESTONE TAB', 0, 0, 0, 0, '', 'Obat'),
(120, ' CENDO MYCOS E D', 0, 0, 0, 0, '', 'Obat'),
(121, ' CENDO TOBROSON', 0, 0, 0, 0, '', 'Obat'),
(122, ' CENDO XITROL E D', 0, 0, 0, 0, '', 'Obat'),
(123, ' CETIRIZINE TABLET', 0, 0, 0, 0, '', 'Obat'),
(124, ' CERAZETTA', 0, 0, 0, 0, '', 'Obat'),
(125, ' CHLORAETYL Dr. HENING', 0, 0, 0, 0, '', 'Obat'),
(126, ' CHLORAMPHENICOL 250 MG', 0, 0, 0, 0, '', 'Obat'),
(127, ' CHROMALUX TABLET', 0, 0, 0, 0, '', 'Obat'),
(128, ' CIMETIDIN TAB', 0, 0, 0, 0, '', 'Obat'),
(129, ' CINOLON N CREAM', 0, 0, 0, 0, '', 'Obat'),
(130, ' CIPROFLOXACIN 500 MG', 0, 0, 0, 0, '', 'Obat'),
(131, ' CITROSOL TABLET', 0, 0, 0, 0, '', 'Obat'),
(132, ' CLACEF 0,5 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(133, ' CLACEF 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(134, ' CLAFORAN 0,5 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(135, ' CLAFORAN 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(136, ' CLANEKSI TAB', 0, 0, 0, 0, '', 'Obat'),
(137, ' CLAVAMOX 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(138, ' CLINDAMYCIN 150', 0, 0, 0, 0, '', 'Obat'),
(139, ' CLINDAMYCIN 300', 0, 0, 0, 0, '', 'Obat'),
(140, ' CLINIDAC 150', 0, 0, 0, 0, '', 'Obat'),
(141, ' CLONIDIN', 0, 0, 0, 0, '', 'Obat'),
(142, ' CO - AMOXYCLAV 625 TAB', 0, 0, 0, 0, '', 'Obat'),
(143, ' COBAZIM CAP', 0, 0, 0, 0, '', 'Obat'),
(144, ' COLISTIN 250,000IU TAB', 0, 0, 0, 0, '', 'Obat'),
(145, ' COLISTIN 1,500,000IU TAB', 0, 0, 0, 0, '', 'Obat'),
(146, ' COLSANCETINE 250MG CAP', 0, 0, 0, 0, '', 'Obat'),
(147, ' COLSANCETINE INJ', 0, 0, 0, 0, '', 'Obat'),
(148, ' COLSANCETINE SYR', 0, 0, 0, 0, '', 'Obat'),
(149, ' COMBANTRIN SYR', 0, 0, 0, 0, '', 'Obat'),
(150, ' COMBANTRIN TAB', 0, 0, 0, 0, '', 'Obat'),
(151, ' COMTHYCOL D S 125 MG', 0, 0, 0, 0, '', 'Obat'),
(152, ' COMTHYCOL D S 250 MG', 0, 0, 0, 0, '', 'Obat'),
(153, ' COTRIMOXAZOLE SYR', 0, 0, 0, 0, '', 'Obat'),
(154, ' COTRIMOXAZOLE TAB', 0, 0, 0, 0, '', 'Obat'),
(155, ' CPZ CHLORPROMAZINE', 0, 0, 0, 0, '', 'Obat'),
(156, ' CPZ TAB', 0, 0, 0, 0, '', 'Obat'),
(157, ' CTM 4 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(158, ' CURMONAS SYR', 0, 0, 0, 0, '', 'Obat'),
(159, ' CURVIT SYR', 0, 0, 0, 0, '', 'Obat'),
(160, ' CYCLOFEM INJ', 0, 0, 0, 0, '', 'Obat'),
(161, ' CYGEST CAP', 0, 0, 0, 0, '', 'Obat'),
(162, ' CYTOTEX TAB', 0, 0, 0, 0, '', 'Obat'),
(163, ' DAKTARIN DIAPERS', 0, 0, 0, 0, '', 'Obat'),
(164, ' DAKTARIN ORAL GEL', 0, 0, 0, 0, '', 'Obat'),
(165, ' DAMABEN DROP', 0, 0, 0, 0, '', 'Obat'),
(166, ' DAMABEN TAB', 0, 0, 0, 0, '', 'Obat'),
(167, ' DANSERA TAB', 0, 0, 0, 0, '', 'Obat'),
(168, ' DECOLGEN TAB', 0, 0, 0, 0, '', 'Obat'),
(169, ' DECOLSIN CAPS', 0, 0, 0, 0, '', 'Obat'),
(170, ' DEMACOLIN TAB', 0, 0, 0, 0, '', 'Obat'),
(171, ' DEPO - NEO INJ', 0, 0, 0, 0, '', 'Obat'),
(172, ' DEPO - PROGESTIN INJ', 0, 0, 0, 0, '', 'Obat'),
(173, ' DEPO - PROVERA INJ', 0, 0, 0, 0, '', 'Obat'),
(174, ' DEXAMETHASONE INJ AMP', 0, 0, 0, 0, '', 'Obat'),
(175, ' DEXAMETHASONE INJ VIAL', 0, 0, 0, 0, '', 'Obat'),
(176, ' DEXAMETHASONE 0,5 GR TAB', 0, 0, 0, 0, '', 'Obat'),
(177, ' DEXAMETHASONE 0,75 GR TAB', 0, 0, 0, 0, '', 'Obat'),
(178, ' DEXTAMIN TAB', 0, 0, 0, 0, '', 'Obat'),
(179, ' DEXTROMETHORPAN TAB', 0, 0, 0, 0, '', 'Obat'),
(180, ' DEXTROSE 40 %', 0, 0, 0, 0, '', 'Obat'),
(181, ' D5% 100 ML', 0, 0, 0, 0, '', 'Obat'),
(182, ' D5% 500 ML', 0, 0, 0, 0, '', 'Obat'),
(183, ' D10% ', 0, 0, 0, 0, '', 'Obat'),
(184, ' DEXTROSE 5%+0,9% NaCl', 0, 0, 0, 0, '', 'Obat'),
(185, ' DEXTROSE 5%+0,45% NaCl', 0, 0, 0, 0, '', 'Obat'),
(186, ' DEXTROSE 5%+0,225% NaCl', 0, 0, 0, 0, '', 'Obat'),
(187, ' DEXTROSE 10%+0,18% NaCl', 0, 0, 0, 0, '', 'Obat'),
(188, ' DEXTROSIN ANAK SYR', 0, 0, 0, 0, '', 'Obat'),
(189, ' DEXYMOX 500', 0, 0, 0, 0, '', 'Obat'),
(190, ' DHBP INJ', 0, 0, 0, 0, '', 'Obat'),
(191, ' DIAGIT', 0, 0, 0, 0, '', 'Obat'),
(192, ' DIALAC ', 0, 0, 0, 0, '', 'Obat'),
(193, ' DIANE TAB', 0, 0, 0, 0, '', 'Obat'),
(194, ' DIGOXIN 0,25', 0, 0, 0, 0, '', 'Obat'),
(195, ' DILANTIN INJ', 0, 0, 0, 0, '', 'Obat'),
(196, ' DILENA TAB', 0, 0, 0, 0, '', 'Obat'),
(197, ' DIOXYANTRACHINON TAB', 0, 0, 0, 0, '', 'Obat'),
(198, ' DIPRIVAN INJ', 0, 0, 0, 0, '', 'Obat'),
(199, ' DISFLATYL TAB', 0, 0, 0, 0, '', 'Obat'),
(200, ' DISUDRIN DROP', 0, 0, 0, 0, '', 'Obat'),
(201, ' DISUDRIN TABLET', 0, 0, 0, 0, '', 'Obat'),
(202, ' DOMPERIDON 10 MG TABLET', 0, 0, 0, 0, '', 'Obat'),
(203, ' DOPAMIN INJ', 0, 0, 0, 0, '', 'Obat'),
(204, ' DOXYCYCLINE 100', 0, 0, 0, 0, '', 'Obat'),
(205, ' DULCOLAX SUPP 5 MG', 0, 0, 0, 0, '', 'Obat'),
(206, ' DULCOLAX SUPP 10 MG', 0, 0, 0, 0, '', 'Obat'),
(207, ' DULCOLAX TAB', 0, 0, 0, 0, '', 'Obat'),
(208, ' DUMIN SUPP', 0, 0, 0, 0, '', 'Obat'),
(209, ' DUMIN TAB', 0, 0, 0, 0, '', 'Obat'),
(210, ' DUPHASTON TAB', 0, 0, 0, 0, '', 'Obat'),
(211, ' DUPLOPYRIN TAB', 0, 0, 0, 0, '', 'Obat'),
(212, ' DURADRYL INJ', 0, 0, 0, 0, '', 'Obat'),
(213, ' DUSPATALIN ', 0, 0, 0, 0, '', 'Obat'),
(214, ' DUVADILAN INJ', 0, 0, 0, 0, '', 'Obat'),
(215, ' DUVADILAN TAB', 0, 0, 0, 0, '', 'Obat'),
(216, ' ELKANA TAB', 0, 0, 0, 0, '', 'Obat'),
(217, ' ELKRIP', 0, 0, 0, 0, '', 'Obat'),
(218, ' ELOCON N CREAM 5 GR', 0, 0, 0, 0, '', 'Obat'),
(219, ' ELOX CREAM 5 MG', 0, 0, 0, 0, '', 'Obat'),
(220, ' ELSAZYM SAC', 0, 0, 0, 0, '', 'Obat'),
(221, ' EMETIN INJ', 0, 0, 0, 0, '', 'Obat'),
(222, ' EMULGADE CREAM', 0, 0, 0, 0, '', 'Obat'),
(223, ' ENCEPHABOL SYR', 0, 0, 0, 0, '', 'Obat'),
(224, ' ENDROLIN INJ', 0, 0, 0, 0, '', 'Obat'),
(225, ' ENGERIX B INJ', 0, 0, 0, 0, '', 'Obat'),
(226, ' EPEXOL TAB', 0, 0, 0, 0, '', 'Obat'),
(227, ' EPHEDRIN INJ', 0, 0, 0, 0, '', 'Obat'),
(228, ' EPHEDRIN TAB', 0, 0, 0, 0, '', 'Obat'),
(229, ' EPIDOSIN INJ', 0, 0, 0, 0, '', 'Obat'),
(230, ' EPHINEPRINE INJ', 0, 0, 0, 0, '', 'Obat'),
(231, ' EQUAL SACHET', 0, 0, 0, 0, '', 'Obat'),
(232, ' ERLAMYSETIN E D', 0, 0, 0, 0, '', 'Obat'),
(233, ' ERYSANBE 200 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(234, ' ERYSANBE 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(235, ' ERYTROCIN DULCET TAB', 0, 0, 0, 0, '', 'Obat'),
(236, ' ESPERSON 0,25%', 0, 0, 0, 0, '', 'Obat'),
(237, ' ESTHERO 0,625', 0, 0, 0, 0, '', 'Obat'),
(238, ' ESTREVA GEL', 0, 0, 0, 0, '', 'Obat'),
(239, ' ETHIBERNAL 25 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(240, ' ETHRANE', 0, 0, 0, 0, '', 'Obat'),
(241, ' ETUROL CAPSUL', 0, 0, 0, 0, '', 'Obat'),
(242, ' EUCARBON TAB', 0, 0, 0, 0, '', 'Obat'),
(243, ' EUVAX ADULT INJ', 0, 0, 0, 0, '', 'Obat'),
(244, ' EXLUTON 28 TAB', 0, 0, 0, 0, '', 'Obat'),
(245, ' FAKTU OINT 20 GR', 0, 0, 0, 0, '', 'Obat'),
(246, ' FAKTU SUPP', 0, 0, 0, 0, '', 'Obat'),
(247, ' FELDENE SUPP', 0, 0, 0, 0, '', 'Obat'),
(248, ' FENTANYL INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(249, ' FEROFORT TAB', 0, 0, 0, 0, '', 'Obat'),
(250, ' FETAVITA TABLET', 0, 0, 0, 0, '', 'Obat'),
(251, ' F G THROCHES', 0, 0, 0, 0, '', 'Obat'),
(252, ' FITO ASI', 0, 0, 0, 0, '', 'Obat'),
(253, ' FLADYSTIN OVULE', 0, 0, 0, 0, '', 'Obat'),
(254, ' FLAGYL FORTE TAB', 0, 0, 0, 0, '', 'Obat'),
(255, ' FLAGYL INFUS', 0, 0, 0, 0, '', 'Obat'),
(256, ' FLAGYL 0,5 GR SUPP', 0, 0, 0, 0, '', 'Obat'),
(257, ' FLAGYL 1 GR SUPP', 0, 0, 0, 0, '', 'Obat'),
(258, ' FLAGYSTATIN OVULE', 0, 0, 0, 0, '', 'Obat'),
(259, ' FLAMAR TAB', 0, 0, 0, 0, '', 'Obat'),
(260, ' FLUZEP TABLET', 0, 0, 0, 0, '', 'Obat'),
(261, ' FOLAMIL', 0, 0, 0, 0, '', 'Obat'),
(262, ' FOLAPLUS', 0, 0, 0, 0, '', 'Obat'),
(263, ' FOLAVIT 400', 0, 0, 0, 0, '', 'Obat'),
(264, ' FORMALIN 10%', 0, 0, 0, 0, '', 'Obat'),
(265, ' FORMALIN TAB', 0, 0, 0, 0, '', 'Obat'),
(266, ' FORMICO 200 MG', 0, 0, 0, 0, '', 'Obat'),
(267, ' FORMICO CREAM', 0, 0, 0, 0, '', 'Obat'),
(268, ' FUCIDIN CREAM', 0, 0, 0, 0, '', 'Obat'),
(269, ' FUNDAMIN E', 0, 0, 0, 0, '', 'Obat'),
(270, ' FUROSEMID', 0, 0, 0, 0, '', 'Obat'),
(271, ' GAMARAAS (imune globuline)', 0, 0, 0, 0, '', 'Obat'),
(272, ' GARAM INGGRIS', 0, 0, 0, 0, '', 'Obat'),
(273, ' GARAMYCIN CREAM', 0, 0, 0, 0, '', 'Obat'),
(274, ' GARDASIL', 0, 0, 0, 0, '', 'Obat'),
(275, ' GASTRIDIN INJ', 0, 0, 0, 0, '', 'Obat'),
(276, ' GASTRINAL SYRUP', 0, 0, 0, 0, '', 'Obat'),
(277, ' GASTRUL TAB', 0, 0, 0, 0, '', 'Obat'),
(278, ' GENTAMERK CREAM', 0, 0, 0, 0, '', 'Obat'),
(279, ' GENTAMERK INJ', 0, 0, 0, 0, '', 'Obat'),
(280, ' GENTAMYCIN 80 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(281, ' GENTAMYCIN SALF', 0, 0, 0, 0, '', 'Obat'),
(282, ' GENTIAN VIOLET', 0, 0, 0, 0, '', 'Obat'),
(283, ' G G', 0, 0, 0, 0, '', 'Obat'),
(284, ' GLIBENCLAMIDE TAB', 0, 0, 0, 0, '', 'Obat'),
(285, ' GLUCOSE ORAL', 0, 0, 0, 0, '', 'Obat'),
(286, ' GLYBOTIC 250 MG INJEKSI ', 0, 0, 0, 0, '', 'Obat'),
(287, ' GLYCERIN', 0, 0, 0, 0, '', 'Obat'),
(288, ' GRANTUSIF TABLET', 0, 0, 0, 0, '', 'Obat'),
(289, ' GRAFOLA DHA TABLET', 0, 0, 0, 0, '', 'Obat'),
(290, ' GYNOXA OVULE', 0, 0, 0, 0, '', 'Obat'),
(291, ' H2O2 3%', 0, 0, 0, 0, '', 'Obat'),
(292, ' H2O2 5%', 0, 0, 0, 0, '', 'Obat'),
(293, ' HAES STERIL 6%', 0, 0, 0, 0, '', 'Obat'),
(294, ' HAVRIX INJ', 0, 0, 0, 0, '', 'Obat'),
(295, ' HCL 0,1', 0, 0, 0, 0, '', 'Obat'),
(296, ' HCT 25 TABLET', 0, 0, 0, 0, '', 'Obat'),
(297, ' HEMOBION CAP', 0, 0, 0, 0, '', 'Obat'),
(298, ' HEPTASAN 4 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(299, ' HERBALACTA', 0, 0, 0, 0, '', 'Obat'),
(300, ' HIBERIX', 0, 0, 0, 0, '', 'Obat'),
(301, ' HIBISCRUB', 0, 0, 0, 0, '', 'Obat'),
(302, ' HI - BONE', 0, 0, 0, 0, '', 'Obat'),
(303, ' HIDROCORTISON 1%', 0, 0, 0, 0, '', 'Obat'),
(304, ' HIDROCORTISON 2,5%', 0, 0, 0, 0, '', 'Obat'),
(305, ' HYSTOLAN TAB', 0, 0, 0, 0, '', 'Obat'),
(306, ' IBERET FOLIC TAB', 0, 0, 0, 0, '', 'Obat'),
(307, ' IBUPROFEN 200 MG', 0, 0, 0, 0, '', 'Obat'),
(308, ' IBUPROFEN 400 MG', 0, 0, 0, 0, '', 'Obat'),
(309, ' ILLIADIN DROP', 0, 0, 0, 0, '', 'Obat'),
(310, ' IMBOOST SYR', 0, 0, 0, 0, '', 'Obat'),
(311, ' IMESCO TAB', 0, 0, 0, 0, '', 'Obat'),
(312, ' IMUNOVIT CAPS', 0, 0, 0, 0, '', 'Obat'),
(313, ' IMUNOVIT SYR', 0, 0, 0, 0, '', 'Obat'),
(314, ' INBION', 0, 0, 0, 0, '', 'Obat'),
(315, ' INCLARIN', 0, 0, 0, 0, '', 'Obat'),
(316, ' INDEXON', 0, 0, 0, 0, '', 'Obat'),
(317, ' INDUXIN INJ', 0, 0, 0, 0, '', 'Obat'),
(318, ' INFANRIX INJ', 0, 0, 0, 0, '', 'Obat'),
(319, ' INFANRIX - HIB INJ', 0, 0, 0, 0, '', 'Obat'),
(320, ' INFELON TAB', 0, 0, 0, 0, '', 'Obat'),
(321, ' INFUSAN D5% SANBE', 0, 0, 0, 0, '', 'Obat'),
(322, ' INFUSAN RD5% SANBE', 0, 0, 0, 0, '', 'Obat'),
(323, ' INFUSAN RL SANBE', 0, 0, 0, 0, '', 'Obat'),
(324, ' INH-CIBA 300 MG TABLET', 0, 0, 0, 0, '', 'Obat'),
(325, ' INTERCON 10 GR CREAM', 0, 0, 0, 0, '', 'Obat'),
(326, ' INVITEC TABLET ', 0, 0, 0, 0, '', 'Obat'),
(327, ' INTRICEF 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(328, ' INVOMIT INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(329, ' INVOMIT TABLET', 0, 0, 0, 0, '', 'Obat'),
(330, ' IODIUM TINCTUR', 0, 0, 0, 0, '', 'Obat'),
(331, ' ISODIN SOLUTION 60 ML', 0, 0, 0, 0, '', 'Obat'),
(332, ' KAEN - 3B', 0, 0, 0, 0, '', 'Obat'),
(333, ' KAEN - MG3', 0, 0, 0, 0, '', 'Obat'),
(334, ' KALK TAB', 0, 0, 0, 0, '', 'Obat'),
(335, ' KALMETHASONE INJ AMP', 0, 0, 0, 0, '', 'Obat'),
(336, ' KALMETHASONE INJ VIAL', 0, 0, 0, 0, '', 'Obat'),
(337, ' KALMETHASONE TAB', 0, 0, 0, 0, '', 'Obat'),
(338, ' KALNEX 250 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(339, ' KALNEX 500 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(340, ' KALNEX 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(341, ' KALTROFEN SUPP', 0, 0, 0, 0, '', 'Obat'),
(342, ' KANDISTATIN DROP', 0, 0, 0, 0, '', 'Obat'),
(343, ' KAPEDOXIN TAB', 0, 0, 0, 0, '', 'Obat'),
(344, ' KAPORIT', 0, 0, 0, 0, '', 'Obat'),
(345, ' KCL INJ', 0, 0, 0, 0, '', 'Obat'),
(346, ' KENALOG CREAM', 0, 0, 0, 0, '', 'Obat'),
(347, ' KETALAR 100', 0, 0, 0, 0, '', 'Obat'),
(348, ' KETAMIN INJ', 0, 0, 0, 0, '', 'Obat'),
(349, ' KETOKONAZOLE TAB', 0, 0, 0, 0, '', 'Obat'),
(350, ' KETOROLAC 10 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(351, ' KETOROLAC 30 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(352, ' LACBON TAB', 0, 0, 0, 0, '', 'Obat'),
(353, ' LACTACYD VAGINA GEL', 0, 0, 0, 0, '', 'Obat'),
(354, ' LACTACYD VAGINA', 0, 0, 0, 0, '', 'Obat'),
(355, ' LACTACYD ANTISEPTIK', 0, 0, 0, 0, '', 'Obat'),
(356, ' LACTO B', 0, 0, 0, 0, '', 'Obat'),
(357, ' LAKTAFIT', 0, 0, 0, 0, '', 'Obat'),
(358, ' LAPICEF 500 MG CAP', 0, 0, 0, 0, '', 'Obat'),
(359, ' LASIX INJ', 0, 0, 0, 0, '', 'Obat'),
(360, ' LASIX TAB', 0, 0, 0, 0, '', 'Obat'),
(361, ' LAXADINE', 0, 0, 0, 0, '', 'Obat'),
(362, ' LAXOBERON DROP', 0, 0, 0, 0, '', 'Obat'),
(363, ' L BIO SACHET', 0, 0, 0, 0, '', 'Obat'),
(364, ' LEVOFLOXACIN 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(365, ' LEXAHIST TABLET', 0, 0, 0, 0, '', 'Obat'),
(366, ' LIDOCAIN 2% INJ', 0, 0, 0, 0, '', 'Obat'),
(367, ' LIDODEX INJ', 0, 0, 0, 0, '', 'Obat'),
(368, ' LIVIALTAB', 0, 0, 0, 0, '', 'Obat'),
(369, ' LOCASALEN', 0, 0, 0, 0, '', 'Obat'),
(370, ' LODIA TAB', 0, 0, 0, 0, '', 'Obat'),
(371, ' LOPERAMIDE 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(372, ' LORATADIN 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(373, ' LOSEC 10 MG', 0, 0, 0, 0, '', 'Obat'),
(374, ' LUGOL', 0, 0, 0, 0, '', 'Obat'),
(375, ' LYNORAL', 0, 0, 0, 0, '', 'Obat'),
(376, ' LUTENYL TAB', 0, 0, 0, 0, '', 'Obat'),
(377, ' 20% MAGNESIUM SULFAT', 0, 0, 0, 3000, '', 'Obat'),
(378, ' 40% MAGNESIUM SULFAT', 0, 0, 0, 0, '', 'Obat'),
(379, ' MALTOFER', 0, 0, 0, 0, '', 'Obat'),
(380, ' MARCAIN SPINAL HEAVY INJ', 0, 0, 0, 0, '', 'Obat'),
(381, ' MARCAIN 0,5%', 0, 0, 0, 0, '', 'Obat'),
(382, ' MARVELON 28', 0, 0, 0, 0, '', 'Obat'),
(383, ' MAXIVIT TAB', 0, 0, 0, 0, '', 'Obat'),
(384, ' MD - CAL TAB', 0, 0, 0, 0, '', 'Obat'),
(385, ' MEDERMA CREAM', 0, 0, 0, 0, '', 'Obat'),
(386, ' MEDIAMER B 6 TAB', 0, 0, 0, 0, '', 'Obat'),
(387, ' MEFINAL 250 MG', 0, 0, 0, 0, '', 'Obat'),
(388, ' MEFINAL 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(389, ' MEFINTER 250', 0, 0, 0, 0, '', 'Obat'),
(390, ' MEFINTER 500', 0, 0, 0, 0, '', 'Obat'),
(391, ' MEFIX 250 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(392, ' MEFIX 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(393, ' MELOXICAM TABLET', 0, 0, 0, 0, '', 'Obat'),
(394, ' MEPTIN 0,25 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(395, ' MEPTIN 0,05 TAB', 0, 0, 0, 0, '', 'Obat'),
(396, ' MEPTIN SYR', 0, 0, 0, 0, '', 'Obat'),
(397, ' MERISLON', 0, 0, 0, 0, '', 'Obat'),
(398, ' MERONEM 0.5 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(399, ' MERONEM 1 GR INJ ', 0, 0, 0, 0, '', 'Obat'),
(400, ' METAGAN SYRUP', 0, 0, 0, 0, '', 'Obat'),
(401, ' METHANOL PA 1 L', 0, 0, 0, 0, '', 'Obat'),
(402, ' METHERGIN INJ', 0, 0, 0, 0, '', 'Obat'),
(403, ' METHERGIN TAB', 0, 0, 0, 0, '', 'Obat'),
(404, ' METHERINAL TAB', 0, 0, 0, 0, '', 'Obat'),
(405, ' METHYL ERGOMETRINE INJ', 0, 0, 0, 0, '', 'Obat'),
(406, ' METHYL ERGOMETRINE TAB', 0, 0, 0, 0, '', 'Obat'),
(407, ' METILAT', 0, 0, 0, 0, '', 'Obat'),
(408, ' METOCLOPRAMIDE 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(409, ' METRONIDAZOLE INFUS', 0, 0, 0, 0, '', 'Obat'),
(410, ' METRONIDAZOLE 500 TAB', 0, 0, 0, 0, '', 'Obat'),
(411, ' MEYLON', 0, 0, 0, 0, '', 'Obat'),
(412, ' MEZATRIM 250 MG', 0, 0, 0, 0, '', 'Obat'),
(413, ' MICROGINON', 0, 0, 0, 0, '', 'Obat'),
(414, ' MICROLAX 5 ML', 0, 0, 0, 0, '', 'Obat'),
(415, ' MIKASIN 250 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(416, ' MIKASIN 500 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(417, ' MILMOR TAB', 0, 0, 0, 0, '', 'Obat'),
(418, ' MILOZ INJ', 0, 0, 0, 0, '', 'Obat'),
(419, ' MINYAK KAYU PUTIH', 0, 0, 0, 0, '', 'Obat'),
(420, ' MINYAK K P KONICARE 30 ML', 0, 0, 0, 0, '', 'Obat'),
(421, ' MINYAK K P KONICARE 60 ML', 0, 0, 0, 0, '', 'Obat'),
(422, ' MINYAK TELON', 0, 0, 0, 0, '', 'Obat'),
(423, ' MINYAK T KONICARE 30 ML', 0, 0, 0, 0, '', 'Obat'),
(424, ' MINYAK T KONICARE 60 ML', 0, 0, 0, 0, '', 'Obat'),
(425, ' MMR INJ', 0, 0, 0, 0, '', 'Obat'),
(426, ' MOLOCO B12 TAB', 0, 0, 0, 0, '', 'Obat'),
(427, ' MORPHIN INJ', 0, 0, 0, 0, '', 'Obat'),
(428, ' MUCOHEXIN TAB', 0, 0, 0, 0, '', 'Obat'),
(429, ' MUSTELA', 0, 0, 0, 0, '', 'Obat'),
(430, ' MYCO Z CREAM ', 0, 0, 0, 0, '', 'Obat'),
(431, ' MYLANTA 150 ML SYR', 0, 0, 0, 0, '', 'Obat'),
(432, ' MYLANTA 360 ML SYR', 0, 0, 0, 0, '', 'Obat'),
(433, ' MYLANTA TAB', 0, 0, 0, 0, '', 'Obat'),
(434, ' MYONAL', 0, 0, 0, 0, '', 'Obat'),
(435, ' NAIRET TAB', 0, 0, 0, 0, '', 'Obat'),
(436, ' NALGESTAN TAB', 0, 0, 0, 0, '', 'Obat'),
(437, ' NARFOS 4MG INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(438, ' NARFOS 8 MG INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(439, ' NARFOS 4 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(440, ' NARFOS 8 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(441, ' NATRILIX SR', 0, 0, 0, 0, '', 'Obat'),
(442, ' NA. DICLOFENAC TAB 25 MG', 0, 0, 0, 0, '', 'Obat'),
(443, ' NA. DICLOFENAC TAB 50 MG', 0, 0, 0, 0, '', 'Obat'),
(444, ' NEO K INJ', 0, 0, 0, 0, '', 'Obat'),
(445, ' NEO KAOMINAL SYR', 0, 0, 0, 0, '', 'Obat'),
(446, ' NEOZEP FORTE TAB', 0, 0, 0, 0, '', 'Obat'),
(447, ' NERISOMA CREAM', 0, 0, 0, 0, '', 'Obat'),
(448, ' NERISOMA FETTY CREAM', 0, 0, 0, 0, '', 'Obat'),
(449, ' NEUROBION 5000 INJ', 0, 0, 0, 0, '', 'Obat'),
(450, ' NEUROBION 1000 TAB', 0, 0, 0, 0, '', 'Obat'),
(451, ' NEUROBORAN INJ', 0, 0, 0, 0, '', 'Obat'),
(452, ' NEUROSANBE TAB', 0, 0, 0, 0, '', 'Obat'),
(453, ' NEUROSANBE INJ', 0, 0, 0, 0, '', 'Obat'),
(454, ' NEW DIATAB TAB', 0, 0, 0, 0, '', 'Obat'),
(455, ' NIFEDIPIN 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(456, ' NIFURAL SYR', 0, 0, 0, 0, '', 'Obat'),
(457, ' NIZORAL 200 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(458, ' NONFLAMIN CAPS', 0, 0, 0, 0, '', 'Obat'),
(459, ' NORMASTIN 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(460, ' NORTIFEN TAB', 0, 0, 0, 0, '', 'Obat'),
(461, ' NOVAKAL SYRUP', 0, 0, 0, 0, '', 'Obat'),
(462, ' NOVALGIN DROP', 0, 0, 0, 0, '', 'Obat'),
(463, ' NOVALGIN INJ AMP', 0, 0, 0, 0, '', 'Obat'),
(464, ' NOVALGIN SYR', 0, 0, 0, 0, '', 'Obat'),
(465, ' NOVALGIN TAB', 0, 0, 0, 0, '', 'Obat'),
(466, ' NS / PZ 500 ML', 0, 0, 0, 0, '', 'Obat'),
(467, ' NULACTA DHA', 0, 0, 0, 0, '', 'Obat'),
(468, ' NULACTA PLUS DHA', 0, 0, 0, 0, '', 'Obat'),
(469, ' NUTRICHOLIN', 0, 0, 0, 0, '', 'Obat'),
(470, ' NUTRIFLAM', 0, 0, 0, 0, '', 'Obat'),
(471, ' NYSTATIN VAG TAB', 0, 0, 0, 0, '', 'Obat'),
(472, ' OBH INTRASAL', 0, 0, 0, 0, '', 'Obat'),
(473, ' OBP SYR', 0, 0, 0, 0, '', 'Obat'),
(474, ' OCUSON TAB', 0, 0, 0, 0, '', 'Obat'),
(475, ' OFLOXACIN 400', 0, 0, 0, 0, '', 'Obat'),
(476, ' OLIUM MINTHPIP', 0, 0, 0, 0, '', 'Obat'),
(477, ' OMEGAVIT CAPSUL', 0, 0, 0, 0, '', 'Obat'),
(478, ' OMEPRAZOLE TAB', 0, 0, 0, 0, '', 'Obat'),
(479, ' ONDAN 4 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(480, ' ONDAN SENTRON 8 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(481, ' OPICEF 500 MG CAPS', 0, 0, 0, 0, '', 'Obat'),
(482, ' OPILAX SYR', 0, 0, 0, 0, '', 'Obat'),
(483, ' OPTIXITROL DROP', 0, 0, 0, 0, '', 'Obat'),
(484, ' ORADEXON INJ', 0, 0, 0, 0, '', 'Obat'),
(485, ' ORALIT', 0, 0, 0, 0, '', 'Obat'),
(486, ' OTOPAIN TETES TLNG', 0, 0, 0, 0, '', 'Obat'),
(487, ' OTTOGENTA INJ', 0, 0, 0, 0, '', 'Obat'),
(488, ' OVESTIN CREAM', 0, 0, 0, 0, '', 'Obat'),
(489, ' OVESTIN TAB', 0, 0, 0, 0, '', 'Obat'),
(490, ' OXTERCID INJ', 0, 0, 0, 0, '', 'Obat'),
(491, ' OXYTOCIN INJ', 0, 0, 0, 0, '', 'Obat'),
(492, ' OZEN DROP', 0, 0, 0, 0, '', 'Obat'),
(493, ' PAMOL 125 MG SUPP', 0, 0, 0, 0, '', 'Obat'),
(494, ' PAMOL TAB', 0, 0, 0, 0, '', 'Obat'),
(495, ' PANADOL TAB', 0, 0, 0, 0, '', 'Obat'),
(496, ' PAN - AMIN G', 0, 0, 0, 0, '', 'Obat'),
(497, ' PAPATROPIN INJ', 0, 0, 0, 0, '', 'Obat'),
(498, ' PAPAVERIN HCL INJ AMP', 0, 0, 0, 0, '', 'Obat'),
(499, ' PAPAVERIN HCL INJ VIAL', 0, 0, 0, 0, '', 'Obat'),
(500, ' PAPAVERIN TAB', 0, 0, 0, 0, '', 'Obat'),
(501, ' PARACETAMOL SYR', 0, 0, 0, 0, '', 'Obat'),
(502, ' PARACETAMOL 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(503, ' PARAFFIN', 0, 0, 0, 0, '', 'Obat'),
(504, ' PARLODEL 2,5 TAB', 0, 0, 0, 0, '', 'Obat'),
(505, ' PEDIACEL', 0, 0, 0, 0, '', 'Obat'),
(506, ' PEDIALYT', 0, 0, 0, 0, '', 'Obat'),
(507, ' PEDIMIN DROP', 0, 0, 0, 0, '', 'Obat'),
(508, ' PEHACAIN INJ', 0, 0, 0, 0, '', 'Obat'),
(509, ' PEHACLOR TAB', 0, 0, 0, 0, '', 'Obat'),
(510, ' PETHIDIN INJ', 0, 0, 0, 0, '', 'Obat'),
(511, ' PEZETA CIBA TAB', 0, 0, 0, 0, '', 'Obat'),
(512, ' PHAROLIT SAC', 0, 0, 0, 0, '', 'Obat'),
(513, ' PHENOBARBITAL INJ', 0, 0, 0, 0, '', 'Obat'),
(514, ' PHENOBARBITAL 30 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(515, ' PHISOHEX', 0, 0, 0, 0, '', 'Obat'),
(516, ' PHYTOMENADIONE INJEKSI AMP', 0, 0, 0, 0, '', 'Obat'),
(517, ' PIPTAL PEDIATRIC', 0, 0, 0, 0, '', 'Obat'),
(518, ' PIRALEN INJ', 0, 0, 0, 0, '', 'Obat'),
(519, ' PIROFEL GEL', 0, 0, 0, 0, '', 'Obat'),
(520, ' PIROXICAM 20 MG CAP', 0, 0, 0, 0, '', 'Obat'),
(521, ' PITOGIN M INJ', 0, 0, 0, 0, '', 'Obat'),
(522, ' PLANTACID TAB', 0, 0, 0, 0, '', 'Obat'),
(523, ' PLANTACID FORTE TAB', 0, 0, 0, 0, '', 'Obat'),
(524, ' PLANTACID SYR', 0, 0, 0, 0, '', 'Obat'),
(525, ' PLANTACID FORTE SYR', 0, 0, 0, 0, '', 'Obat'),
(526, ' PLASBUMIN 5%', 0, 0, 0, 0, '', 'Obat'),
(527, ' PLASBUMIN 20%', 0, 0, 0, 0, '', 'Obat'),
(528, ' PLASMINEX TAB', 0, 0, 0, 0, '', 'Obat'),
(529, ' POLYCROL SYR 100 ML', 0, 0, 0, 0, '', 'Obat'),
(530, ' POLYCROL SYR 400', 0, 0, 0, 0, '', 'Obat'),
(531, ' POLYCROL TAB', 0, 0, 0, 0, '', 'Obat'),
(532, ' POLIDEMISIN E D', 0, 0, 0, 0, '', 'Obat'),
(533, ' PONSTAN 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(534, ' POSPARGIN INJ', 0, 0, 0, 0, '', 'Obat'),
(535, ' POSPARGIN TAB', 0, 0, 0, 0, '', 'Obat'),
(536, ' POVIDIN 10% ANTISEPTIK', 0, 0, 0, 0, '', 'Obat'),
(537, ' PRAXION DROP', 0, 0, 0, 0, '', 'Obat'),
(538, ' PRAXION SYRUP', 0, 0, 0, 0, '', 'Obat'),
(539, ' PREABOR', 0, 0, 0, 0, '', 'Obat'),
(540, ' PREDNISON 5 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(541, ' PREMASTON 5 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(542, ' PRENAMIA CAPS', 0, 0, 0, 0, '', 'Obat'),
(543, ' PRIMADEX SYRUP', 0, 0, 0, 0, '', 'Obat'),
(544, ' PRIMOLUT N 5 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(545, ' PRIMPERAN DROPS', 0, 0, 0, 0, '', 'Obat'),
(546, ' PRIMPERAN INJ', 0, 0, 0, 0, '', 'Obat'),
(547, ' PRIMPERAN TAB', 0, 0, 0, 0, '', 'Obat'),
(548, ' PROBION TAB', 0, 0, 0, 0, '', 'Obat'),
(549, ' PROCAINI HCL INJ', 0, 0, 0, 0, '', 'Obat'),
(550, ' PROFERTIL 50 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(551, ' PROFILAS SYR', 0, 0, 0, 0, '', 'Obat'),
(552, ' PROFILAS TAB', 0, 0, 0, 0, '', 'Obat'),
(553, ' PROLACTA BABY', 0, 0, 0, 0, '', 'Obat'),
(554, ' PROLIC 150 MG', 0, 0, 0, 0, '', 'Obat'),
(555, ' PROLIC 300 MG ', 0, 0, 0, 0, '', 'Obat'),
(556, ' PRONALGES INJ', 0, 0, 0, 0, '', 'Obat'),
(557, ' PRONALGES E 50', 0, 0, 0, 0, '', 'Obat'),
(558, ' PRORIS SUPP', 0, 0, 0, 0, '', 'Obat'),
(559, ' PRORIS SYR', 0, 0, 0, 0, '', 'Obat'),
(560, ' PROSTIN E TAB', 0, 0, 0, 0, '', 'Obat'),
(561, ' PROTEXIN TAB', 0, 0, 0, 0, '', 'Obat'),
(562, ' PROTEXIN INFANT', 0, 0, 0, 0, '', 'Obat'),
(563, ' PROVENID SUPP', 0, 0, 0, 0, '', 'Obat'),
(564, ' PULMICORT INJ', 0, 0, 0, 0, '', 'Obat'),
(565, ' PULMOLIN TAB', 0, 0, 0, 0, '', 'Obat'),
(566, ' PYCIN 750 MG INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(567, ' PYRICEF 500 CAPS', 0, 0, 0, 0, '', 'Obat'),
(568, ' PYRIDOXIN HCL INJ', 0, 0, 0, 0, '', 'Obat'),
(569, ' PYRIDOXIN 25 MG / VIT B6 TAB', 0, 0, 0, 0, '', 'Obat'),
(570, ' PYRIDRYL 60 ML SYR', 0, 0, 0, 0, '', 'Obat'),
(571, ' Q - TEN 30 MG CAPS', 0, 0, 0, 0, '', 'Obat'),
(572, ' Q - TEN 60 MG CAPS', 0, 0, 0, 0, '', 'Obat'),
(573, ' RANITIDIN 150 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(574, ' RANTIN INJ', 0, 0, 0, 0, '', 'Obat'),
(575, ' RANTIN TAB', 0, 0, 0, 0, '', 'Obat'),
(576, ' RAVITA TAB', 0, 0, 0, 0, '', 'Obat'),
(577, ' RD ( RINGER DEXTROSE )', 0, 0, 0, 0, '', 'Obat'),
(578, ' REGUMEN TAB', 0, 0, 0, 0, '', 'Obat'),
(579, ' RENALYT', 0, 0, 0, 0, '', 'Obat'),
(580, ' RENODIOL TAB', 0, 0, 0, 0, '', 'Obat'),
(581, ' RIAMYCIN 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(582, ' RIFAMTIBI 450 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(583, ' RIFAMTIBI 600 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(584, ' RIFANOL', 0, 0, 0, 0, '', 'Obat'),
(585, ' RL ( RINGER LACTATE )', 0, 0, 0, 0, '', 'Obat'),
(586, ' RYCEF 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(587, ' RYZEN ORAL DROP', 0, 0, 0, 0, '', 'Obat'),
(588, ' RYZEN SYR', 0, 0, 0, 0, '', 'Obat'),
(589, ' RYZEN TAB', 0, 0, 0, 0, '', 'Obat'),
(590, ' RYVEL DROP', 0, 0, 0, 0, '', 'Obat'),
(591, ' SACHARIN TAB', 0, 0, 0, 0, '', 'Obat'),
(592, ' SAGESTAM E D', 0, 0, 0, 0, '', 'Obat'),
(593, ' SAGESTAM INJ', 0, 0, 0, 0, '', 'Obat'),
(594, ' SAGESTAM SALF', 0, 0, 0, 0, '', 'Obat'),
(595, ' SALBUTAMOL 4 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(596, ' SALMONELLA P THYPI AO', 0, 0, 0, 0, '', 'Obat'),
(597, ' SALMONELLA P THYPI BO', 0, 0, 0, 0, '', 'Obat'),
(598, ' SALMONELLA P THYPI H', 0, 0, 0, 0, '', 'Obat'),
(599, ' SALMONELLA P THYPI O', 0, 0, 0, 0, '', 'Obat'),
(600, ' SALYCIL TALK', 0, 0, 0, 0, '', 'Obat'),
(601, ' SANMETIDIN TAB', 0, 0, 0, 0, '', 'Obat'),
(602, ' SANADRYL DMP SYR 60 ML', 0, 0, 0, 0, '', 'Obat'),
(603, ' SANAZET TAB', 0, 0, 0, 0, '', 'Obat'),
(604, ' SAN - B PLEX DROP', 0, 0, 0, 0, '', 'Obat'),
(605, ' SANEXON TAB', 0, 0, 0, 0, '', 'Obat'),
(606, ' SANGOBION CAPS', 0, 0, 0, 0, '', 'Obat'),
(607, ' SANLIN 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(608, ' SANMOL DROPS', 0, 0, 0, 0, '', 'Obat'),
(609, ' SANMOL SYR 60 ML', 0, 0, 0, 0, '', 'Obat'),
(610, ' SANMOL TAB', 0, 0, 0, 0, '', 'Obat'),
(611, ' SANPICILLIN 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(612, ' SANPRIMA SYR', 0, 0, 0, 0, '', 'Obat'),
(613, ' SANPRIMA FORTE TAB', 0, 0, 0, 0, '', 'Obat'),
(614, ' SANTA E 100 TAB', 0, 0, 0, 0, '', 'Obat'),
(615, ' SANTA E 400 TAB', 0, 0, 0, 0, '', 'Obat'),
(616, ' SANVITA B SYR', 0, 0, 0, 0, '', 'Obat'),
(617, ' SASA', 0, 0, 0, 0, '', 'Obat'),
(618, ' SAVLON ( HIBICET )', 0, 0, 0, 0, '', 'Obat'),
(619, ' SEDROFEN 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(620, ' SESDEN TAB', 0, 0, 0, 0, '', 'Obat'),
(621, ' SG / AG', 0, 0, 0, 0, '', 'Obat'),
(622, ' SIBELIUM 5', 0, 0, 0, 0, '', 'Obat'),
(623, ' SILEX SYRUP', 0, 0, 0, 0, '', 'Obat'),
(624, ' SILOPECT', 0, 0, 0, 0, '', 'Obat'),
(625, ' SILOPECT SYR', 0, 0, 0, 0, '', 'Obat'),
(626, ' SIMVASTATIN 10 TAB', 0, 0, 0, 0, '', 'Obat'),
(627, ' SMECTA', 0, 0, 0, 0, '', 'Obat'),
(628, ' SODIUM CHLORIDE / PZ 25 ML', 0, 0, 0, 0, '', 'Obat'),
(629, ' SPIRAMYCIN 500', 0, 0, 0, 0, '', 'Obat'),
(630, ' SPORETIK', 0, 0, 0, 0, '', 'Obat'),
(631, ' STESOLID RECTAL 5MG TUBE', 0, 0, 0, 0, '', 'Obat'),
(632, ' STESOLID TAB', 0, 0, 0, 0, '', 'Obat'),
(633, ' STREPTOMYCIN SULFAT', 0, 0, 0, 0, '', 'Obat'),
(634, ' STUGERON 25 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(635, ' SULFAS ATHROPIN INJ', 0, 0, 0, 0, '', 'Obat'),
(636, ' SULFAS FEROSUS', 0, 0, 0, 0, '', 'Obat'),
(637, ' SULFAS MAGNESIANS', 0, 0, 0, 0, '', 'Obat'),
(638, ' SUNCINYL ASTA (QUELICIN INJ)', 0, 0, 0, 0, '', 'Obat'),
(639, ' SUPRAMOX', 0, 0, 0, 0, '', 'Obat'),
(640, ' SYNTOCINON INJ', 0, 0, 0, 0, '', 'Obat'),
(641, ' SYR THYMI', 0, 0, 0, 0, '', 'Obat'),
(642, ' SYSTABON INJ', 0, 0, 0, 0, '', 'Obat'),
(643, ' SYSTABON TAB', 0, 0, 0, 0, '', 'Obat'),
(644, ' TALSUTIN V T', 0, 0, 0, 0, '', 'Obat'),
(645, ' TAPROS DEPOT', 0, 0, 0, 0, '', 'Obat'),
(646, ' TAXEGRAM 0,5 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(647, ' TAXEGRAM 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(648, ' TEAMIC 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(649, ' TEMPRA DROPS', 0, 0, 0, 0, '', 'Obat'),
(650, ' TEMPRA SYR 60 ML', 0, 0, 0, 0, '', 'Obat'),
(651, ' TEMPRA SYR 120 ML', 0, 0, 0, 0, '', 'Obat'),
(652, ' TERFACEF 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(653, ' TERRAMYCIN SALF', 0, 0, 0, 0, '', 'Obat'),
(654, ' TERPIFLU SYRUP', 0, 0, 0, 0, '', 'Obat'),
(655, ' TETRACT HIB', 0, 0, 0, 0, '', 'Obat'),
(656, ' TETRACYCLIN 250', 0, 0, 0, 0, '', 'Obat'),
(657, ' TETRACYCLIN 500', 0, 0, 0, 0, '', 'Obat'),
(658, ' THIAMEX 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(659, ' THIAMPHENICOL 500', 0, 0, 0, 0, '', 'Obat'),
(660, ' THROMBO ASPILLET', 0, 0, 0, 0, '', 'Obat'),
(661, ' THROMBOGEL', 0, 0, 0, 0, '', 'Obat'),
(662, ' THROMBOPHOB OINT', 0, 0, 0, 0, '', 'Obat'),
(663, ' THROMBOPHOB GEL', 0, 0, 0, 0, '', 'Obat'),
(664, ' THYPIM INJ', 0, 0, 0, 0, '', 'Obat'),
(665, ' TICT PODHOPILINTUR', 0, 0, 0, 0, '', 'Obat'),
(666, ' TIENAM INJ', 0, 0, 0, 0, '', 'Obat'),
(667, ' TIRIZ DROP', 0, 0, 0, 0, '', 'Obat'),
(668, ' TOMIT INJ', 0, 0, 0, 0, '', 'Obat'),
(669, ' TOMIT TAB', 0, 0, 0, 0, '', 'Obat'),
(670, ' TORADOL INJ', 0, 0, 0, 0, '', 'Obat'),
(671, ' TRACIUM INJ', 0, 0, 0, 0, '', 'Obat'),
(672, ' TRADOSIK CAPS', 0, 0, 0, 0, '', 'Obat'),
(673, ' TRAMADOL INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(674, ' TRAMADOL 50 MG', 0, 0, 0, 0, '', 'Obat'),
(675, ' TRAMAL 50 MG CAPS', 0, 0, 0, 0, '', 'Obat'),
(676, ' TRAMAL 50 INJ', 0, 0, 0, 0, '', 'Obat'),
(677, ' TRAMAL 100 INJ', 0, 0, 0, 0, '', 'Obat'),
(678, ' TRANSAMIN INJ', 0, 0, 0, 0, '', 'Obat'),
(679, ' TRANSAMIN 250 MG', 0, 0, 0, 0, '', 'Obat'),
(680, ' TRANSAMIN 500 MG', 0, 0, 0, 0, '', 'Obat'),
(681, ' TREMENZA TAB', 0, 0, 0, 0, '', 'Obat'),
(682, ' TRENTAL 400 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(683, ' TRICHODAZOL INF', 0, 0, 0, 0, '', 'Obat'),
(684, ' TRICHODAZOL 500', 0, 0, 0, 0, '', 'Obat'),
(685, ' TRICHOSTATIC VAG. OVULE', 0, 0, 0, 0, '', 'Obat'),
(686, ' TRICLOFEM INJEKSI', 0, 0, 0, 0, '', 'Obat'),
(687, ' TRIMOVAX INJ', 0, 0, 0, 0, '', 'Obat'),
(688, ' TRIPACEL 0,5 ML INJ', 0, 0, 0, 0, '', 'Obat'),
(689, ' TRIPANZIM', 0, 0, 0, 0, '', 'Obat'),
(690, ' TROGYL SYRUP', 0, 0, 0, 0, '', 'Obat'),
(691, ' TROLIT SAC', 0, 0, 0, 0, '', 'Obat'),
(692, ' TUZALOS TAB', 0, 0, 0, 0, '', 'Obat'),
(693, ' TWINRIX INJ', 0, 0, 0, 0, '', 'Obat'),
(694, ' 3 TC HBV', 0, 0, 0, 0, '', 'Obat'),
(695, ' ULSIKUR INJ', 0, 0, 0, 0, '', 'Obat'),
(696, ' ULSIKUR TAB', 0, 0, 0, 0, '', 'Obat'),
(697, ' ULTILAR 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(698, ' ULTRAPROCT SALF', 0, 0, 0, 0, '', 'Obat'),
(699, ' ULTRAPROCT SUPP', 0, 0, 0, 0, '', 'Obat'),
(700, ' ULTRASONIC GEL', 0, 0, 0, 0, '', 'Obat'),
(701, ' ULTRAVITA TAB', 0, 0, 0, 0, '', 'Obat'),
(702, ' URDAFALK CAP', 0, 0, 0, 0, '', 'Obat'),
(703, ' URISPAS', 0, 0, 0, 0, '', 'Obat'),
(704, ' UROGETIC TAB', 0, 0, 0, 0, '', 'Obat'),
(705, ' VACCINE PNEUMO  23/5ML', 0, 0, 0, 0, '', 'Obat'),
(706, ' VAGISTIN OVULA', 0, 0, 0, 0, '', 'Obat'),
(707, ' VALISANBE 2 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(708, ' VALISANBE 5 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(709, ' VALIUM INJ', 0, 0, 0, 0, '', 'Obat'),
(710, ' VALIUM 2 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(711, ' VALIUM 5MG TAB', 0, 0, 0, 0, '', 'Obat'),
(712, ' VARILRIX INJ', 0, 0, 0, 0, '', 'Obat'),
(713, ' VASDALAT 5 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(714, ' VASDALAT 10 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(715, ' VAXIGRIP', 0, 0, 0, 0, '', 'Obat'),
(716, ' VENARON', 0, 0, 0, 0, '', 'Obat'),
(717, ' VENTOLIN NEBULEZER', 0, 0, 0, 0, '', 'Obat'),
(718, ' VENTUSIF SYRUP', 0, 0, 0, 0, '', 'Obat'),
(719, ' VICILLIN 250 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(720, ' VICILLIN 500 MG CAPS', 0, 0, 0, 0, '', 'Obat'),
(721, ' VICILLIN 500 MG INJ', 0, 0, 0, 0, '', 'Obat'),
(722, ' VICILLIN 1 GR INJ', 0, 0, 0, 0, '', 'Obat'),
(723, ' VICILLIN-SX 1500 MG', 0, 0, 0, 0, '', 'Obat'),
(724, ' VIT B1 INJ', 0, 0, 0, 0, '', 'Obat'),
(725, ' VIT B1 TAB 100 MG', 0, 0, 0, 0, '', 'Obat'),
(726, ' VIT B12 TAB', 0, 0, 0, 0, '', 'Obat'),
(727, ' VIT B C INJ', 0, 0, 0, 0, '', 'Obat'),
(728, ' VIT B C TAB', 0, 0, 0, 0, '', 'Obat'),
(729, ' VIT C INJ', 0, 0, 0, 0, '', 'Obat'),
(730, ' VIT C 25 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(731, ' VIT C 50 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(732, ' VIT C 100 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(733, ' VIT K INJ', 0, 0, 0, 0, '', 'Obat'),
(734, ' VIT K TAB', 0, 0, 0, 0, '', 'Obat'),
(735, ' VITAMULTI TAB', 0, 0, 0, 0, '', 'Obat'),
(736, ' VITAPLEX SYR', 0, 0, 0, 0, '', 'Obat'),
(737, ' VOLDIAMER B6 TABLET', 0, 0, 0, 0, '', 'Obat'),
(738, ' VOLTAREN INJ', 0, 0, 0, 0, '', 'Obat'),
(739, ' VOLTAREN 50 MG SUPP', 0, 0, 0, 0, '', 'Obat'),
(740, ' VOLTAREN 100 MG SUPP', 0, 0, 0, 0, '', 'Obat'),
(741, ' VOLTAREN 25 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(742, ' VOLTAREN 50 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(743, ' VOLTAREN GEL 20 GR', 0, 0, 0, 0, '', 'Obat'),
(744, ' VOLTAREN SR TAB', 0, 0, 0, 0, '', 'Obat'),
(745, ' VOLUVEN 500 ML', 0, 0, 0, 0, '', 'Obat'),
(746, ' VOMETA DROPS', 0, 0, 0, 0, '', 'Obat'),
(747, ' VOMETA SYR', 0, 0, 0, 0, '', 'Obat'),
(748, ' VOMETA TAB', 0, 0, 0, 0, '', 'Obat'),
(749, ' VOSEDON SYR', 0, 0, 0, 0, '', 'Obat'),
(750, ' VOSEDON TAB', 0, 0, 0, 0, '', 'Obat'),
(751, ' WIDA HES', 0, 0, 0, 0, '', 'Obat'),
(752, ' XANDA SYR', 0, 0, 0, 0, '', 'Obat'),
(753, ' XEPAVIT TAB', 0, 0, 0, 0, '', 'Obat'),
(754, ' XYLLOCAIN 2% INJ', 0, 0, 0, 0, '', 'Obat'),
(755, ' XYLOMIDON INJ VIAL', 0, 0, 0, 0, '', 'Obat'),
(756, ' YASMIN TAB', 0, 0, 0, 0, '', 'Obat'),
(757, ' YUDIUM TINCTUR', 0, 0, 0, 0, '', 'Obat'),
(758, ' ZADITEN DROPS', 0, 0, 0, 0, '', 'Obat'),
(759, ' ZADITEN SYR', 0, 0, 0, 0, '', 'Obat'),
(760, ' ZADITEN TAB', 0, 0, 0, 0, '', 'Obat'),
(761, ' ZAMEL SYRUP', 0, 0, 0, 0, '', 'Obat'),
(762, ' ZANTAC INJ', 0, 0, 0, 0, '', 'Obat'),
(763, ' ZANTAC 150 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(764, ' ZEGAVIT TAB', 0, 0, 0, 0, '', 'Obat'),
(765, ' ZEMIC 150 TAB', 0, 0, 0, 0, '', 'Obat'),
(766, ' ZENIFLOX 500 MG TAB', 0, 0, 0, 0, '', 'Obat'),
(767, ' ZENRIZ TAB', 0, 0, 0, 0, '', 'Obat'),
(768, ' ZINKID', 0, 0, 0, 0, '', 'Obat'),
(1181, ' ABDOMINAL SPATULAS', 0, 0, 0, 0, '0', 'ALKES'),
(1182, ' ABOCATH NO. 16', 0, 0, 0, 0, '', 'ALKES'),
(1183, ' ABOCATH NO. 18', 0, 0, 0, 0, '', 'ALKES'),
(1184, ' ABOCATH NO. 26', 0, 0, 0, 0, '', 'ALKES'),
(1185, ' ABOCATH NO. 24', 0, 0, 0, 0, '', 'ALKES'),
(1186, ' AQUASONIC GEL', 0, 0, 0, 0, '', 'ALKES'),
(1187, ' ATRAMAT NO. 1 E P4', 0, 0, 0, 0, '', 'ALKES'),
(1188, ' PH ANALISA SPERMA', 0, 0, 0, 0, '', 'ALKES'),
(1189, ' BACTIGRAS', 0, 0, 0, 0, '', 'ALKES'),
(1190, ' BIOSYN NO. 0 CM 914', 0, 0, 0, 0, '', 'ALKES'),
(1191, ' BLOOD ZET', 0, 0, 0, 0, '', 'ALKES'),
(1192, ' BOTOL PIGEON ( K )', 0, 0, 0, 0, '', 'ALKES'),
(1193, ' BULBUV 8 WATT', 0, 0, 0, 0, '', 'ALKES'),
(1194, ' BULBUV 24v / 25 WATT', 0, 0, 0, 0, '', 'ALKES'),
(1195, ' CATGUT CHROMIC NO. 0', 0, 0, 0, 0, '', 'ALKES'),
(1196, ' CATGUT CHROMIC NO. 1', 0, 0, 0, 0, '', 'ALKES'),
(1197, ' CATGUT CHROMIC NO. 2', 0, 0, 0, 0, '', 'ALKES'),
(1198, ' CATGUT CHROMIC NO. 2/0', 0, 0, 0, 0, '', 'ALKES'),
(1199, ' CATGUT CHROMIC NO. 3/0', 0, 0, 0, 0, '', 'ALKES'),
(1200, ' CATGUT CHROMIC 3/0 SACH', 0, 0, 0, 0, '', 'ALKES'),
(1201, ' CATGUT PLAIN NO. 0', 0, 0, 0, 0, '', 'ALKES'),
(1202, ' CATGUT PLAIN NO. 1', 0, 0, 0, 0, '', 'ALKES'),
(1203, ' CATGUT PLAIN NO. 2', 0, 0, 0, 0, '', 'ALKES'),
(1204, ' CATGUT PLAIN NO. 2/0', 0, 0, 0, 0, '', 'ALKES'),
(1205, ' CATGUT PLAIN NO. 3/0', 0, 0, 0, 0, '', 'ALKES'),
(1206, ' CATGUT PLAIN 0 SACH', 0, 0, 0, 0, '', 'ALKES'),
(1207, ' CATGUT PLAIN 2/0 SACH', 0, 0, 0, 0, '', 'ALKES'),
(1208, ' CATGUT PLAIN 3/0 SACH', 0, 0, 0, 0, '', 'ALKES'),
(1209, ' CENTRIFUGE TABUNG', 0, 0, 0, 0, '', 'ALKES'),
(1210, ' CHAMIDEX DIRECT', 0, 0, 0, 0, '', 'ALKES'),
(1211, ' CHEK ACTIVE GLUCOSE', 0, 0, 0, 0, '', 'ALKES'),
(1212, ' CHROMIC HR 37 NO. 0', 0, 0, 0, 0, '', 'ALKES'),
(1213, ' CHROMIC HR 37S NO. 1', 0, 0, 0, 0, '', 'ALKES'),
(1214, ' CHROMIC NO. 2', 0, 0, 0, 0, '', 'ALKES'),
(1215, ' CHROMIC 1-0 C127', 0, 0, 0, 0, '', 'ALKES'),
(1216, ' CICA CARE', 0, 0, 0, 0, '', 'ALKES'),
(1217, ' CLOCK TENSI', 0, 0, 0, 0, '', 'ALKES'),
(1218, ' COCER LAWTON', 0, 0, 0, 0, '', 'ALKES'),
(1219, ' COMBISTIX', 0, 0, 0, 0, '', 'ALKES'),
(1220, ' COMBUR TEST', 0, 0, 0, 0, '', 'ALKES'),
(1221, ' COPER - T', 0, 0, 0, 0, '', 'ALKES'),
(1222, ' COVER GLAST', 0, 0, 0, 0, '', 'ALKES'),
(1223, ' CURASPON', 0, 0, 0, 0, '', 'ALKES'),
(1224, ' CURET MESS NO. 6', 0, 0, 0, 0, '', 'ALKES'),
(1225, ' DARMBUIS NO. 8', 0, 0, 0, 0, '', 'ALKES'),
(1226, ' DARMBUIS NO. 9', 0, 0, 0, 0, '', 'ALKES'),
(1227, ' DARMBUIS NO. 10', 0, 0, 0, 0, '', 'ALKES'),
(1228, ' DARMBUIS NO. 18', 0, 0, 0, 0, '', 'ALKES'),
(1229, ' DARMBUIS NO. 20', 0, 0, 0, 0, '', 'ALKES'),
(1230, ' DENGUE CHEK Igg-Igm-Tulip', 0, 0, 0, 0, '', 'ALKES'),
(1231, ' DERMAFIX', 0, 0, 0, 0, '', 'ALKES'),
(1232, ' DOEKLEM 11 CM', 0, 0, 0, 0, '', 'ALKES'),
(1233, ' DOPPLER AUDIO', 0, 0, 0, 0, '', 'ALKES'),
(1234, ' DOT PIGEON COKLAT ( S )', 0, 0, 0, 0, '', 'ALKES'),
(1235, ' ECG PAPER', 0, 0, 0, 0, '', 'ALKES'),
(1236, ' ELECTROSURGICAL ESPI', 0, 0, 0, 0, '', 'ALKES'),
(1237, ' EPIDURAL', 0, 0, 0, 0, '', 'ALKES'),
(1238, ' ETT CLEAR 112482 NO.6,5 RUSC', 0, 0, 0, 0, '', 'ALKES'),
(1239, ' ETT CLEAR 112482 NO.7 RUSC', 0, 0, 0, 0, '', 'ALKES'),
(1240, ' ETT CLEAR 112482 NO.7,5 RUSC', 0, 0, 0, 0, '', 'ALKES'),
(1241, ' FACES MASK AMBU NO. 5', 0, 0, 0, 0, '', 'ALKES'),
(1242, ' FEEDING TUBE NO. 3,5', 0, 0, 0, 0, '', 'ALKES'),
(1243, ' FEEDING TUBE NO. 5 ( 40 CM )', 0, 0, 0, 0, '', 'ALKES'),
(1244, ' FEEDING TUBE NO. 5 ( 100 CM )', 0, 0, 0, 0, '', 'ALKES'),
(1245, ' FEEDING TUBE NO. 5 PJG', 0, 0, 0, 0, '', 'ALKES'),
(1246, ' FEEDING TUBE NO. 8 ( 40 CM )', 0, 0, 0, 0, '', 'ALKES'),
(1247, ' FEEDING TUBE NO. 8 ( 100 CM )', 0, 0, 0, 0, '', 'ALKES'),
(1248, ' FEEDING TUBE NO. 8 PJG', 0, 0, 0, 0, '', 'ALKES'),
(1249, ' FEEDING TUBE NO. 10', 0, 0, 0, 0, '', 'ALKES'),
(1250, ' FIXOMULL TRANS 15 x 10', 0, 0, 0, 0, '', 'ALKES'),
(1251, ' FOLEY CATHETER NO. 6', 0, 0, 0, 0, '', 'ALKES'),
(1252, ' FOLEY CATHETER NO. 8', 0, 0, 0, 0, '', 'ALKES'),
(1253, ' FOLEY CATHETER NO. 10', 0, 0, 0, 0, '', 'ALKES'),
(1254, ' FOLEY CATHETER NO. 14', 0, 0, 0, 0, '', 'ALKES'),
(1255, ' FOLEY CATHETER NO. 16', 0, 0, 0, 0, '', 'ALKES'),
(1256, ' FOLEY CATHETER NO. 18', 0, 0, 0, 0, '', 'ALKES'),
(1257, ' FOLEY CATHETER NO. 24', 0, 0, 0, 0, '', 'ALKES'),
(1258, ' FUCIN STAIN', 0, 0, 0, 0, '', 'ALKES'),
(1259, ' GAGANG STETOSCOPE', 0, 0, 0, 0, '', 'ALKES'),
(1260, ' GELANG BAYI BIRU', 0, 0, 0, 0, '', 'ALKES'),
(1261, ' GELANG BAYI MERAH', 0, 0, 0, 0, '', 'ALKES'),
(1262, ' GELAS KUMUR', 0, 0, 0, 0, '', 'ALKES'),
(1263, ' GLYCERIN SPUIT', 0, 0, 0, 0, '', 'ALKES'),
(1264, ' GLUCOTREND', 0, 0, 0, 0, '', 'ALKES'),
(1265, ' GP-1 GAKIN PACK CHROMIC', 0, 0, 0, 0, '', 'ALKES'),
(1266, ' GUNTING MAYO BENGKOK LAW', 0, 0, 0, 0, '', 'ALKES'),
(1267, ' GUNTING MAYO LURUS', 0, 0, 0, 0, '', 'ALKES'),
(1268, ' GUNTING METZENBAUM', 0, 0, 0, 0, '', 'ALKES'),
(1269, ' GUNTING LAPARATOMI', 0, 0, 0, 0, '', 'ALKES'),
(1270, ' GUNTING OP LURUS ta-ta 14cm', 0, 0, 0, 0, '', 'ALKES'),
(1271, ' GUNTING TALI PUSAT 16 CM', 0, 0, 0, 0, '', 'ALKES'),
(1272, ' HAND SWEET FOR CAUTER ARON', 0, 0, 0, 0, '', 'ALKES'),
(1273, ' HANDSCHOEN TEBAL', 0, 0, 0, 0, '', 'ALKES'),
(1274, ' HANSAPLAST', 0, 0, 0, 0, '', 'ALKES'),
(1275, ' HCG ECCOUNT', 0, 0, 0, 0, '', 'ALKES'),
(1276, ' HCL 0,1 N', 0, 0, 0, 0, '', 'ALKES'),
(1277, ' HEMATEST', 0, 0, 0, 0, '', 'ALKES'),
(1278, ' HYPAFIX 15 x 5', 0, 0, 0, 0, '', 'ALKES'),
(1279, ' HYPAFIX 10 x 5', 0, 0, 0, 0, '', 'ALKES'),
(1280, ' INFUS SET BURET', 0, 0, 0, 0, '', 'ALKES'),
(1281, ' INFUS SET TK', 0, 0, 0, 0, '', 'ALKES'),
(1282, ' INFUS SET TS', 0, 0, 0, 0, '', 'ALKES'),
(1283, ' INJ PLUG', 0, 0, 0, 0, '', 'ALKES'),
(1284, ' JARUM NO. 21', 0, 0, 0, 0, '', 'ALKES'),
(1285, ' JARUM NO. 23', 0, 0, 0, 0, '', 'ALKES'),
(1286, ' JARUM NO. 25', 0, 0, 0, 0, '', 'ALKES'),
(1287, ' JARUM NO. 26', 0, 0, 0, 0, '', 'ALKES'),
(1288, ' JARUM MANY SE-ME 21', 0, 0, 0, 0, '', 'ALKES'),
(1289, ' JARUM MANY SE-MH 32', 0, 0, 0, 0, '', 'ALKES'),
(1290, ' JARUM MANY SE-MH 36', 0, 0, 0, 0, '', 'ALKES'),
(1291, ' JARUM MANY SE-MH 40', 0, 0, 0, 0, '', 'ALKES'),
(1292, ' JARUM MANY SE-MH 45', 0, 0, 0, 0, '', 'ALKES'),
(1293, ' JARUM MANY SE-MH 50', 0, 0, 0, 0, '', 'ALKES'),
(1294, ' JARUM MANY SE-MH 55', 0, 0, 0, 0, '', 'ALKES'),
(1295, ' JARUM MANY SE-TE 32', 0, 0, 0, 0, '', 'ALKES'),
(1296, ' JARUM MANY SE-TE 36', 0, 0, 0, 0, '', 'ALKES'),
(1297, ' JARUM MANY SE-TE 40', 0, 0, 0, 0, '', 'ALKES'),
(1298, ' JARUM MANY SE-TE 45', 0, 0, 0, 0, '', 'ALKES'),
(1299, ' JARUM MANY SE-TE 60', 0, 0, 0, 0, '', 'ALKES'),
(1300, ' JARUM MANY SE-TH 18', 0, 0, 0, 0, '', 'ALKES'),
(1301, ' JARUM MANY SE-TH 24', 0, 0, 0, 0, '', 'ALKES'),
(1302, ' JARUM MANY SE-TH 28', 0, 0, 0, 0, '', 'ALKES'),
(1303, ' JARUM MANY SE-TH 32', 0, 0, 0, 0, '', 'ALKES'),
(1304, ' JARUM MANY SE-TH 36F', 0, 0, 0, 0, '', 'ALKES'),
(1305, ' JARUM MANY SE-TH 40F', 0, 0, 0, 0, '', 'ALKES'),
(1306, ' JARUM MANY SE-TH 45', 0, 0, 0, 0, '', 'ALKES'),
(1307, ' JARUM MANY SE-TH 50', 0, 0, 0, 0, '', 'ALKES'),
(1308, ' JARUM MANY SE-TH 55', 0, 0, 0, 0, '', 'ALKES'),
(1309, ' JARUM MANY SE-TH 60', 0, 0, 0, 0, '', 'ALKES'),
(1310, ' KACA MATA OPERASI', 0, 0, 0, 0, '', 'ALKES'),
(1311, ' KANTONG PALSTIK 1/4 KG', 0, 0, 0, 0, '', 'ALKES'),
(1312, ' KANTONG PLASTIK 1/2 KG', 0, 0, 0, 0, '', 'ALKES'),
(1313, ' KAPAS 25 GR', 0, 0, 0, 0, '', 'ALKES'),
(1314, ' KAPAS 250 GR', 0, 0, 0, 0, '', 'ALKES'),
(1315, ' KAPAS 500 GR', 0, 0, 0, 0, '', 'ALKES'),
(1316, ' KAPAS 1 KG', 0, 0, 0, 0, '', 'ALKES'),
(1317, ' KAPAS BERLEMAK 1 KG', 0, 0, 0, 0, '', 'ALKES'),
(1318, ' KAPSUL KOSONG NO. 0', 0, 0, 0, 0, '', 'ALKES'),
(1319, ' KAPSUL KOSONG NO. 00', 0, 0, 0, 0, '', 'ALKES'),
(1320, ' KAPSUL KOSONG NO. 1 ', 0, 0, 0, 0, '', 'ALKES'),
(1321, ' KAPSUL KOSONG NO. 2', 0, 0, 0, 0, '', 'ALKES'),
(1322, ' KAPUR SEMUT', 0, 0, 0, 0, '', 'ALKES'),
(1323, ' KASA MORICO', 0, 0, 0, 0, '', 'ALKES'),
(1324, ' KASA STERIL HIDROFIL', 0, 0, 0, 0, '', 'ALKES'),
(1325, ' KEPALA STETOSCOPE', 0, 0, 0, 0, '', 'ALKES'),
(1326, ' KERTAS PUYER ( B )', 0, 0, 0, 0, '', 'ALKES'),
(1327, ' KERTAS PUYER ( K )', 0, 0, 0, 0, '', 'ALKES'),
(1328, ' KERTAS SARING', 0, 0, 0, 0, '', 'ALKES'),
(1329, ' KERTAS STERISEET 50 x 50', 0, 0, 0, 0, '', 'ALKES'),
(1330, ' KERTAS STERISEET 120 x 120', 0, 0, 0, 0, '', 'ALKES'),
(1331, ' KLEM KOCHER ', 0, 0, 0, 0, '', 'ALKES'),
(1332, ' KOCHER BENGKOK 14 CM', 0, 0, 0, 0, '', 'ALKES'),
(1333, ' KOCHER PJG 16 CM', 0, 0, 0, 0, '', 'ALKES'),
(1334, ' KORENTANG LURUS', 0, 0, 0, 0, '', 'ALKES'),
(1335, ' KRESEK PUTIH', 0, 0, 0, 0, '', 'ALKES'),
(1336, ' LAMPU PHOTOTERAPI', 0, 0, 0, 0, '', 'ALKES'),
(1337, ' LAMPU UV 36 W PHILLIPS', 0, 0, 0, 0, '', 'ALKES'),
(1338, ' LARUTAN GIEMSA', 0, 0, 0, 0, '', 'ALKES'),
(1339, ' LARUTAN HCL 0,1', 0, 0, 0, 0, '', 'ALKES'),
(1340, ' LARUTAN TURK', 0, 0, 0, 0, '', 'ALKES'),
(1341, ' LARYNGOSCOPE DWS. RIESTER', 0, 0, 0, 0, '', 'ALKES'),
(1342, ' LEUKOFIX', 0, 0, 0, 0, '', 'ALKES'),
(1343, ' LEUKOMED T PLUS 10 x 25', 0, 0, 0, 0, '', 'ALKES'),
(1344, ' LEUKOPLAST 2,5 x 1 m', 0, 0, 0, 0, '', 'ALKES'),
(1345, ' LEUKOPLAST 5 x 4,5 m', 0, 0, 0, 0, '', 'ALKES'),
(1346, ' LEUKOPLAST 7,5 x 4,5 m', 0, 0, 0, 0, '', 'ALKES'),
(1347, ' LEUKOPOR', 0, 0, 0, 0, '', 'ALKES'),
(1348, ' LYSOL', 0, 0, 0, 0, '', 'ALKES'),
(1349, ' MAMA PAD', 0, 0, 0, 0, '', 'ALKES'),
(1350, ' MANSET ANAK', 0, 0, 0, 0, '', 'ALKES'),
(1351, ' MANSET DEWASA', 0, 0, 0, 0, '', 'ALKES'),
(1352, ' MASKER DISPOSIBLE', 0, 0, 0, 0, '', 'ALKES'),
(1353, ' MAYO TUBE', 0, 0, 0, 0, '', 'ALKES'),
(1354, ' MEDISAFE B GTTIP', 0, 0, 0, 0, '', 'ALKES'),
(1355, ' MEDISAFE B GTNP', 0, 0, 0, 0, '', 'ALKES'),
(1356, ' MEDISAFE LANCET FFT', 0, 0, 0, 0, '', 'ALKES'),
(1357, ' MESS NO. 11', 0, 0, 0, 0, '', 'ALKES'),
(1358, ' MESS NO. 20', 0, 0, 0, 0, '', 'ALKES'),
(1359, ' MESS NO. 24', 0, 0, 0, 0, '', 'ALKES'),
(1360, ' MICROPORE', 0, 0, 0, 0, '', 'ALKES'),
(1361, ' MONOCRYL NO. 0', 0, 0, 0, 0, '', 'ALKES'),
(1362, ' MONOCRYL NO. 1 Y 359', 0, 0, 0, 0, '', 'ALKES'),
(1363, ' MONOSYN NO. 0 HR 40S', 0, 0, 0, 0, '', 'ALKES'),
(1364, ' MONOSYN NO. 1 HR 40S', 0, 0, 0, 0, '', 'ALKES'),
(1365, ' MONOSYN NO. 3/0 DS 24', 0, 0, 0, 0, '', 'ALKES'),
(1366, ' MONO NO. 1 M48', 0, 0, 0, 0, '', 'ALKES'),
(1367, ' MONO NO. 3/0 M51', 0, 0, 0, 0, '', 'ALKES'),
(1368, ' MORTIR', 0, 0, 0, 0, '', 'ALKES'),
(1369, ' MUCUS EXT ( JMS )', 0, 0, 0, 0, '', 'ALKES'),
(1370, ' MUCUS EXT ( ONE MED )', 0, 0, 0, 0, '', 'ALKES'),
(1371, ' NALD HEACTING', 0, 0, 0, 0, '', 'ALKES'),
(1372, ' NALD PUDER', 0, 0, 0, 0, '', 'ALKES'),
(1373, ' NASAL O2 BAYI', 0, 0, 0, 0, '', 'ALKES'),
(1374, ' NASAL O2 DEWASA', 0, 0, 0, 0, '', 'ALKES'),
(1375, ' N2O', 0, 0, 0, 0, '', 'ALKES'),
(1376, ' NEBULEZER M PEDIATRICIAN', 0, 0, 0, 0, '', 'ALKES'),
(1377, ' Neadle holder hegar 18 cm', 0, 0, 0, 0, '', 'ALKES'),
(1378, ' Neadle holder hegar 18,5 L', 0, 0, 0, 0, '', 'ALKES'),
(1379, ' Neadle holder mayo', 0, 0, 0, 0, '', 'ALKES'),
(1380, ' NELATHON CATH NO. 10', 0, 0, 0, 0, '', 'ALKES'),
(1381, ' NELATHON CATH NO. 14', 0, 0, 0, 0, '', 'ALKES'),
(1382, ' NELATHON CATH NO. 16', 0, 0, 0, 0, '', 'ALKES'),
(1383, ' NELATHON CATH NO. 18', 0, 0, 0, 0, '', 'ALKES'),
(1384, ' NEUFLON NO. 24', 0, 0, 0, 0, '', 'ALKES'),
(1385, ' NOVA - T', 0, 0, 0, 0, '', 'ALKES'),
(1386, ' NURSE CAP', 0, 0, 0, 0, '', 'ALKES'),
(1387, ' OPSITE 6,5 x 5', 0, 0, 0, 0, '', 'ALKES'),
(1388, ' OPSITE 20 x 10', 0, 0, 0, 0, '', 'ALKES'),
(1389, ' OPSITE 25 x 10', 0, 0, 0, 0, '', 'ALKES'),
(1390, ' O2 REGULATOR', 0, 0, 0, 0, '', 'ALKES'),
(1391, ' PEAN BENGKOK', 0, 0, 0, 0, '', 'ALKES'),
(1392, ' PERBAN 10 CM', 0, 0, 0, 0, '', 'ALKES'),
(1393, ' PERBAN DEPPERS WAS', 0, 0, 0, 0, '', 'ALKES'),
(1394, ' Peritoneal FCP Mikulic H14-0811', 0, 0, 0, 0, '', 'ALKES'),
(1395, ' PERITONIUM KLEM', 0, 0, 0, 0, '', 'ALKES'),
(1396, ' PINCET ANATOMIS 14', 0, 0, 0, 0, '', 'ALKES'),
(1397, ' PINCET ANATOMIS 20', 0, 0, 0, 0, '', 'ALKES'),
(1398, ' PINCET CHIRUGIS', 0, 0, 0, 0, '', 'ALKES'),
(1399, ' PIPET HB 20 CM', 0, 0, 0, 0, '', 'ALKES'),
(1400, ' PIPET MICRO assipette', 0, 0, 0, 0, '', 'ALKES'),
(1401, ' PISAU CUKUR', 0, 0, 0, 0, '', 'ALKES'),
(1402, ' PLAIN HR 26 2/0', 0, 0, 0, 0, '', 'ALKES'),
(1403, ' PLAIN HR 35 2/0', 0, 0, 0, 0, '', 'ALKES'),
(1404, ' PLASTIK KLIP ( B )', 0, 0, 0, 0, '', 'ALKES'),
(1405, ' PALSTIK KLIP ( K )', 0, 0, 0, 0, '', 'ALKES'),
(1406, ' POLYSORB NO. 0 CL-914', 0, 0, 0, 0, '', 'ALKES'),
(1407, ' POMPA TENSI', 0, 0, 0, 0, '', 'ALKES'),
(1408, ' PRECESSION G 28', 0, 0, 0, 0, '', 'ALKES'),
(1409, ' PRECUT CATGUT-PLAIN PP32', 0, 0, 0, 0, '', 'ALKES'),
(1410, ' PRECUT CATGUT-PLAIN PP33', 0, 0, 0, 0, '', 'ALKES'),
(1411, ' PRECUT CATGUT-PLAIN PP31', 0, 0, 0, 0, '', 'ALKES'),
(1412, ' PREGNANCY TEST STRIP', 0, 0, 0, 0, '', 'ALKES'),
(1413, ' PRESARIUM RING NO. 65', 0, 0, 0, 0, '', 'ALKES'),
(1414, ' PRESARIUM RING NO. 7', 0, 0, 0, 0, '', 'ALKES'),
(1415, ' PRESARIUM RING NO.7.5', 0, 0, 0, 0, '', 'ALKES'),
(1416, ' PRESARIUM RING NO. 8', 0, 0, 0, 0, '', 'ALKES'),
(1417, ' PRIMALITE Skin Extractor', 0, 0, 0, 0, '', 'ALKES'),
(1418, ' PROXIMADE Extractor', 0, 0, 0, 0, '', 'ALKES'),
(1419, ' REAGEN GOL. DRH A', 0, 0, 0, 0, '', 'ALKES'),
(1420, ' REAGEN GOL. DRH B', 0, 0, 0, 0, '', 'ALKES'),
(1421, ' RETRACTOR', 0, 0, 0, 0, '', 'ALKES'),
(1422, ' RETRACTOR KELLY', 0, 0, 0, 0, '', 'ALKES'),
(1423, ' RETRACTOR RICHARDSON', 0, 0, 0, 0, '', 'ALKES'),
(1424, ' REMOVER u/ Manipler', 0, 0, 0, 0, '', 'ALKES'),
(1425, ' SABUN CUCI TANGAN', 0, 0, 0, 0, '', 'ALKES');
INSERT INTO `m_obt` (`id`, `nama`, `hgbeli`, `hgjual`, `hgjual1`, `hgjual2`, `satuan`, `kategori`) VALUES
(1426, ' SABUN MANDI BAYI CAIR', 0, 0, 0, 0, '', 'ALKES'),
(1427, ' SAMONELL THYPHI', 0, 0, 0, 0, '', 'ALKES'),
(1428, ' SAMONELL PARA THYPHI', 0, 0, 0, 0, '', 'ALKES'),
(1429, ' SAMONELL THYPHI H', 0, 0, 0, 0, '', 'ALKES'),
(1430, ' SANYO', 0, 0, 0, 0, '', 'ALKES'),
(1431, ' SARUNG TGN NO. 6 1/2', 0, 0, 0, 0, '', 'ALKES'),
(1432, ' SARUNG TGN NO. 7', 0, 0, 0, 0, '', 'ALKES'),
(1433, ' SARUNG TGN NO. 7 1/2', 0, 0, 0, 0, '', 'ALKES'),
(1434, ' SARUNG NO. 7 1/2 MEDIGLOVE', 0, 0, 0, 0, '', 'ALKES'),
(1435, ' SARUNG TGN NO. 8', 0, 0, 0, 0, '', 'ALKES'),
(1436, ' SARUNG NO. 8 MEDIGLOVE', 0, 0, 0, 0, '', 'ALKES'),
(1437, ' SARUNG TGN TEBAL NO. 8 1/2', 0, 0, 0, 0, '', 'ALKES'),
(1438, ' SCAPEL HANDLE 3 L', 0, 0, 0, 0, '', 'ALKES'),
(1439, ' SCAPEL HANDLE 4 L', 0, 0, 0, 0, '', 'ALKES'),
(1440, ' SEIDE NO. 1 ', 0, 0, 0, 0, '', 'ALKES'),
(1441, ' SEIDE NO. 2', 0, 0, 0, 0, '', 'ALKES'),
(1442, ' SEIDE NO. 2/0', 0, 0, 0, 0, '', 'ALKES'),
(1443, ' SEIDE NO. 2/0', 0, 0, 0, 0, '', 'ALKES'),
(1444, ' SEIDE NO. 3/0', 0, 0, 0, 0, '', 'ALKES'),
(1445, ' SELANG O2', 0, 0, 0, 0, '', 'ALKES'),
(1446, ' SILET', 0, 0, 0, 0, '', 'ALKES'),
(1447, ' SIKAT PAPSMEAR', 0, 0, 0, 0, '', 'ALKES'),
(1448, ' SILK 2/0 SK 224 AILEE', 0, 0, 0, 0, '', 'ALKES'),
(1449, ' SLIDES', 0, 0, 0, 0, '', 'ALKES'),
(1450, ' SODALIME SOFNOLIME', 0, 0, 0, 0, '', 'ALKES'),
(1451, ' SOFNES BERSALIN ( B )', 0, 0, 0, 0, '', 'ALKES'),
(1452, ' SOFNES BERSALIN ( K )', 0, 0, 0, 0, '', 'ALKES'),
(1453, ' SOFNES MALAM HARI', 0, 0, 0, 0, '', 'ALKES'),
(1454, ' SPARE BULB 24 V 25 W', 0, 0, 0, 0, '', 'ALKES'),
(1455, ' SPARE BULB TENSI', 0, 0, 0, 0, '', 'ALKES'),
(1456, ' SPECULUM', 0, 0, 0, 0, '', 'ALKES'),
(1457, ' SPERMA COUNT', 0, 0, 0, 0, '', 'ALKES'),
(1458, ' SPINOCAN NO. 25', 0, 0, 0, 0, '', 'ALKES'),
(1459, ' SPINOCAN NO. 27', 0, 0, 0, 0, '', 'ALKES'),
(1460, ' SPIRAL TUBING', 0, 0, 0, 0, '', 'ALKES'),
(1461, ' SPUIT 1 CC INSULIN', 0, 0, 0, 0, '', 'ALKES'),
(1462, ' SPUIT 1 CC TUBERCULIN', 0, 0, 0, 0, '', 'ALKES'),
(1463, ' SPUIT 2,5 cc TERUMO', 0, 0, 0, 0, '', 'ALKES'),
(1464, ' SPUIT 3 CC MEDIJECT', 0, 0, 0, 0, '', 'ALKES'),
(1465, ' SPUIT 3 CC ONE MED', 0, 0, 0, 0, '', 'ALKES'),
(1466, ' SPUIT 3 cc STERA', 0, 0, 0, 0, '', 'ALKES'),
(1467, ' SPUIT 3 cc TERUMO', 0, 0, 0, 0, '', 'ALKES'),
(1468, ' SPUIT 5 cc MEDIJECT', 0, 0, 0, 0, '', 'ALKES'),
(1469, ' SPUIT 5 cc STERA', 0, 0, 0, 0, '', 'ALKES'),
(1470, ' SPUIT 5 cc TERUMO', 0, 0, 0, 0, '', 'ALKES'),
(1471, ' SPUIT 10 cc MEDIJECT', 0, 0, 0, 0, '', 'ALKES'),
(1472, ' SPUIT 10 cc STERA', 0, 0, 0, 0, '', 'ALKES'),
(1473, ' SPUIT 10 cc TERUMO', 0, 0, 0, 0, '', 'ALKES'),
(1474, ' SPUIT 20 cc TERUMO', 0, 0, 0, 0, '', 'ALKES'),
(1475, ' SPUIT 50 cc TERUMO', 0, 0, 0, 0, '', 'ALKES'),
(1476, ' STERILISATOR', 0, 0, 0, 0, '', 'ALKES'),
(1477, ' STERISHEET STANDAR', 0, 0, 0, 0, '', 'ALKES'),
(1478, ' STETHOSCOPE', 0, 0, 0, 0, '', 'ALKES'),
(1479, ' STETHOSCOPE Baby Tytan', 0, 0, 0, 0, '', 'ALKES'),
(1480, ' STETHOSCOPE Anak Tytan', 0, 0, 0, 0, '', 'ALKES'),
(1481, ' STIFPAN', 0, 0, 0, 0, '', 'ALKES'),
(1482, ' STOMACH TUBE NO. 16', 0, 0, 0, 0, '', 'ALKES'),
(1483, ' STOMACH TUBE NO. 18', 0, 0, 0, 0, '', 'ALKES'),
(1484, ' STREPLES OK', 0, 0, 0, 0, '', 'ALKES'),
(1485, ' SUCTION CATHETER NO. 8', 0, 0, 0, 0, '', 'ALKES'),
(1486, ' SUCTION CATHETER NO. 10', 0, 0, 0, 0, '', 'ALKES'),
(1487, ' SUCTION PUMP THOMAS', 0, 0, 0, 0, '', 'ALKES'),
(1488, ' SURFLO NO. 18 PENDEK', 0, 0, 0, 0, '', 'ALKES'),
(1489, ' SURFLO NO. 18', 0, 0, 0, 0, '', 'ALKES'),
(1490, ' SURFLO NO. 20 PENDEK', 0, 0, 0, 0, '', 'ALKES'),
(1491, ' SURFLO NO. 20', 0, 0, 0, 0, '', 'ALKES'),
(1492, ' SURFLO NO. 22', 0, 0, 0, 0, '', 'ALKES'),
(1493, ' SURFLO NO. 24', 0, 0, 0, 0, '', 'ALKES'),
(1494, ' SURFLO JELCO 20G', 0, 0, 0, 0, '', 'ALKES'),
(1495, ' SURFLO OPTICA 20G', 0, 0, 0, 0, '', 'ALKES'),
(1496, ' SURGEON CAP', 0, 0, 0, 0, '', 'ALKES'),
(1497, ' SURGICAL & DISETING', 0, 0, 0, 0, '', 'ALKES'),
(1498, ' SURGICRYL NO. 1', 0, 0, 0, 0, '', 'ALKES'),
(1499, ' SURGIFIT NO. 0 AV 1271', 0, 0, 0, 0, '', 'ALKES'),
(1500, ' SURGIFIT NO. 0 AV 124', 0, 0, 0, 0, '', 'ALKES'),
(1501, ' SURGIFIT NO. 1 AV 1271', 0, 0, 0, 0, '', 'ALKES'),
(1502, ' SURGIFIT NO. 1 AV 1281', 0, 0, 0, 0, '', 'ALKES'),
(1503, ' SURGIFIT NO. 1 AV1511', 0, 0, 0, 0, '', 'ALKES'),
(1504, ' SURGIFIT NO. 3/0 AV 324', 0, 0, 0, 0, '', 'ALKES'),
(1505, ' T CHROMIC NO. 3/0 C67', 0, 0, 0, 0, '', 'ALKES'),
(1506, ' T CHROMIC  NO. 0 90 C58', 0, 0, 0, 0, '', 'ALKES'),
(1507, ' TEGADERM', 0, 0, 0, 0, '', 'ALKES'),
(1508, ' TEMPAT KORENTANG', 0, 0, 0, 0, '', 'ALKES'),
(1509, ' TENSIMETER', 0, 0, 0, 0, '', 'ALKES'),
(1510, ' TENSOCREPE 7,5 CM', 0, 0, 0, 0, '', 'ALKES'),
(1511, ' TENSOCREPE 10 CM', 0, 0, 0, 0, '', 'ALKES'),
(1512, ' TEST KENCING STIK 3 PAR', 0, 0, 0, 0, '', 'ALKES'),
(1513, ' TEST PACK HCG / ACON', 0, 0, 0, 0, '', 'ALKES'),
(1514, ' THERMOMETER ( B )', 0, 0, 0, 0, '', 'ALKES'),
(1515, ' THERMOMETER ( K )', 0, 0, 0, 0, '', 'ALKES'),
(1516, ' THERMOMETER DIGITAL', 0, 0, 0, 0, '', 'ALKES'),
(1517, ' THERM & JAR FORCEP', 0, 0, 0, 0, '', 'ALKES'),
(1518, ' TIMBANGAN BADAN', 0, 0, 0, 0, '', 'ALKES'),
(1519, ' TIMBANGAN BAYI', 0, 0, 0, 0, '', 'ALKES'),
(1520, ' TISSUE FORCEP', 0, 0, 0, 0, '', 'ALKES'),
(1521, ' TISSUE GULUNG', 0, 0, 0, 0, '', 'ALKES'),
(1522, ' TONGUE SCAPEL METAL', 0, 0, 0, 0, '', 'ALKES'),
(1523, ' TORNIQUET', 0, 0, 0, 0, '', 'ALKES'),
(1524, ' TRI WAY CONECTION', 0, 0, 0, 0, '', 'ALKES'),
(1525, ' UMBILICAL CORD CLAMP PHASCO', 0, 0, 0, 0, '', 'ALKES'),
(1526, ' UMBILICAL ( JMS )', 0, 0, 0, 0, '', 'ALKES'),
(1527, ' UNDERPADS', 0, 0, 0, 0, '', 'ALKES'),
(1528, ' UNDERPADS SOFPADS', 0, 0, 0, 0, '', 'ALKES'),
(1529, ' URINE BAG', 0, 0, 0, 0, '', 'ALKES'),
(1530, ' URINE REAGENT 3P', 0, 0, 0, 0, '', 'ALKES'),
(1531, ' USG PAPER', 0, 0, 0, 0, '', 'ALKES'),
(1532, ' VACUM CUP MENOX M', 0, 0, 0, 0, '', 'ALKES'),
(1533, ' VASKULON NO. 24', 0, 0, 0, 0, '', 'ALKES'),
(1534, ' VENFLON NO. 18', 0, 0, 0, 0, '', 'ALKES'),
(1535, ' VENFLON NO. 20', 0, 0, 0, 0, '', 'ALKES'),
(1536, ' VENFLON NO. 22', 0, 0, 0, 0, '', 'ALKES'),
(1537, ' VICRYL NO. 0 W 9141', 0, 0, 0, 0, '', 'ALKES'),
(1538, ' VICRYL NO. 1 W 9431', 0, 0, 0, 0, '', 'ALKES'),
(1539, ' VICRYL NO. 1 W 9465', 0, 0, 0, 0, '', 'ALKES'),
(1540, ' VICRYL NO. 2/0 W 9121', 0, 0, 0, 0, '', 'ALKES'),
(1541, ' VICRYL NO. 2/0 W 9522', 0, 0, 0, 0, '', 'ALKES'),
(1542, ' VICRYL NO. 3/0 W 9571', 0, 0, 0, 0, '', 'ALKES'),
(1543, ' VICRYL NO. 3/0 W 9940', 0, 0, 0, 0, '', 'ALKES'),
(1544, ' VIO NO. 0 V11', 0, 0, 0, 0, '', 'ALKES'),
(1545, ' VIO NO. 1 V41', 0, 0, 0, 0, '', 'ALKES'),
(1546, ' WING NEADLE NO. 19', 0, 0, 0, 0, '', 'ALKES'),
(1547, ' WING NEADLE NO. 21', 0, 0, 0, 0, '', 'ALKES'),
(1548, ' WING NEADLE NO. 23', 0, 0, 0, 0, '', 'ALKES'),
(1549, ' WING NEADLE NO. 25', 0, 0, 0, 0, '', 'ALKES'),
(1550, ' WING NEADLE NO. 27', 0, 0, 0, 0, '', 'ALKES'),
(1551, ' WWZ', 0, 0, 0, 0, '', 'ALKES');

-- --------------------------------------------------------

--
-- Table structure for table `m_obtbl`
--

CREATE TABLE IF NOT EXISTS `m_obtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `obat` varchar(255) NOT NULL,
  `faktur` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `hgsatuan` int(11) NOT NULL,
  `hgtotal` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `ppn` int(11) NOT NULL,
  `tagihan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_obtbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_obthlg`
--

CREATE TABLE IF NOT EXISTS `m_obthlg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idobt` text NOT NULL,
  `jml` double NOT NULL,
  `tgl` text NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_obthlg`
--

INSERT INTO `m_obthlg` (`id`, `idobt`, `jml`, `tgl`, `ket`) VALUES
(1, '2', 230, '28-04-2011', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_obtklr`
--

CREATE TABLE IF NOT EXISTS `m_obtklr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaobat` varchar(255) NOT NULL,
  `jmlreal` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_obtklr`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_obtmutasi`
--

CREATE TABLE IF NOT EXISTS `m_obtmutasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obat` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `ke` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_obtmutasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_obtstok`
--

CREATE TABLE IF NOT EXISTS `m_obtstok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obat` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1140 ;

--
-- Dumping data for table `m_obtstok`
--

INSERT INTO `m_obtstok` (`id`, `obat`, `stok`, `unit`) VALUES
(1, ' ACRAN INJEKSI', 0, '-'),
(2, ' ACRAN TABLET', 0, ''),
(3, ' ACT HIB ', 0, ''),
(4, ' ACYCLOVIR 200 MG TAB', 0, ''),
(5, ' ACYCLOVIR 400 MG TAB', 0, ''),
(6, ' ACYCLOVIR 5% SALF', 0, ''),
(7, ' ADALAT 5 MG TAB', 0, ''),
(8, ' ADALAT 10 MG TAB', 0, ''),
(9, ' ADALAT 30 MG TAB', 0, ''),
(10, ' ADONA 10 ML INJ', 0, ''),
(11, ' ADONA (AC-17) 10 MG', 0, ''),
(12, ' ADRENALIN INJ', 0, ''),
(13, ' AERIUS TAB', 0, ''),
(14, ' AGNOCASTON TAB', 0, ''),
(15, ' AKRINOR TAB', 0, ''),
(16, ' ALBOTHYL 10 ML', 0, ''),
(17, ' ALBOTHYL 100 ML', 0, ''),
(18, ' ALBOTHYL OVULA', 0, ''),
(19, ' ALBUMIN 5 %', 0, ''),
(20, ' ALERTEN - Q 25', 0, ''),
(21, ' ALINAMIN F INJ', 0, ''),
(22, ' ALINAMIN F TAB', 0, ''),
(23, ' ALKOHOL 70%', 0, ''),
(24, ' ALKOHOL 95%', 0, ''),
(25, ' ALLETROL EYE DROP', 0, ''),
(26, ' ALLUPURINOL TAB', 0, ''),
(27, ' ALLYLESTRENOL TAB', 0, ''),
(28, ' ALORA TAB', 0, ''),
(29, ' AMBROXOL TAB', 0, ''),
(30, ' AMINOPHYLLIN INJ', 0, ''),
(31, ' AMINOPHYLLIN 200 MG', 0, ''),
(32, ' AMOXAN FORTE SYR', 0, ''),
(33, ' AMOXAN DRY SYR', 0, ''),
(34, ' AMOXAN DISP TAB', 0, ''),
(35, ' AMOXAN 250 MG CAP', 0, ''),
(36, ' AMOXAN 500 MG CAP', 0, ''),
(37, ' AMOXAN 1 GR INJ', 0, ''),
(38, ' AMOXYCILLIN 500 MG TAB', 0, ''),
(39, ' AMPICILLIN 1 GR INJ', 0, ''),
(40, ' ANALSIK TAB', 0, ''),
(41, ' ANTALGIN TAB', 0, ''),
(42, ' ANTASIDA DOEN TAB', 0, ''),
(43, ' ANTIMO TAB', 0, ''),
(44, ' ANTRAIN INJ', 0, ''),
(45, ' ANVOMER B6 TAB', 0, ''),
(46, ' APIALYS DROP', 0, ''),
(47, ' APIALYS SYR', 0, ''),
(48, ' APOLAR CREAM', 0, ''),
(49, ' AQUABIDEST 25 ML', 0, ''),
(50, ' AQUADEST 1 L', 0, ''),
(51, ' ARDIUM TAB', 0, ''),
(52, ' ARGESID 500 MG TAB', 0, ''),
(53, ' ASAM MEFENAMAT 500 MG', 0, ''),
(54, ' ASEDAS SYRUP 60 ML', 0, ''),
(55, ' ASERING', 0, ''),
(56, ' ASPILLET TAB', 0, ''),
(57, ' ASTIFEN TAB', 0, ''),
(58, ' ATAROC SYRUP', 0, ''),
(59, ' ATAROC TABLET', 0, ''),
(60, ' AVIL INJEKSI', 0, ''),
(61, ' AVITIN INJ', 0, ''),
(62, ' BACTROBAN 5 GR SALF', 0, ''),
(63, ' BAQUINOR FORTE TAB', 0, ''),
(64, ' BAYCLEAN', 0, ''),
(65, ' BAYCUTEN N CREAM ', 0, ''),
(66, ' BECOMBION DROP', 0, ''),
(67, ' BECOMBION SYR', 0, ''),
(68, ' BECOM-C TAB', 0, ''),
(69, ' BECOM ZET TAB', 0, ''),
(70, ' BEDAK TALK', 0, ''),
(71, ' BETADIN SOLUTION', 0, ''),
(72, ' BETASON N CREAM', 0, ''),
(73, ' BICROLID TAB', 0, ''),
(74, ' BIO ATP TAB', 0, ''),
(75, ' BIOCEF 1 GR INJ', 0, ''),
(76, ' BIOCREAM 20 GR', 0, ''),
(77, ' BIODIAR TAB', 0, ''),
(78, ' BIOGESIC TAB', 0, ''),
(79, ' BIOPLACENTON CREAM', 0, ''),
(80, ' BIORALIT SAC', 0, ''),
(81, ' BIOSANBE CAP', 0, ''),
(82, ' BIOTHICOL 500 MG CAP', 0, ''),
(83, ' BIOTHICOL SYR', 0, ''),
(84, ' BISOLVON 4 MG INJEKSI', 0, ''),
(85, ' BISOLVON TAB', 0, ''),
(86, ' BISOLVON SYR', 0, ''),
(87, ' BLEDSTOP', 0, ''),
(88, ' BLESIFEN TAB', 0, ''),
(89, ' BOORWATER', 0, ''),
(90, ' BORALGINOL N SUPP', 0, ''),
(91, ' BORALGINOL S SUPP', 0, ''),
(92, ' BORAX GLYCERIN', 0, ''),
(93, ' BRAXIDIN TAB', 0, ''),
(94, ' BRENTAN 5 GR OINT ', 0, ''),
(95, ' BRICASMA INJ', 0, ''),
(96, ' BUNASCAN SPINAL 0,5% HEAVY', 0, ''),
(97, ' BUSCOPAN INJ', 0, ''),
(98, ' BUSCOPAN TAB', 0, ''),
(99, ' CALCII GLUCONAS INJ', 0, ''),
(100, ' CALOMA CAP', 0, ''),
(101, ' CAMIVITA SYRUP', 0, ''),
(102, ' CAPSINAT 500 MG TAB', 0, ''),
(103, ' CAPTOPRYL 12,5 TAB', 0, ''),
(104, ' CAPTOPRYL 25 TAB', 0, ''),
(105, ' CATAFLAM 25 TAB', 0, ''),
(106, ' CATAFLAM 50 TAB', 0, ''),
(107, ' CATAPRES 150 MG', 0, ''),
(108, ' CATAPRES INJ', 0, ''),
(109, ' CAVIPLEX DROP', 0, ''),
(110, ' CAVIT D3 TAB', 0, ''),
(111, ' CEDANTRON 4 INJ', 0, ''),
(112, ' CEDANTRON 8 INJ', 0, ''),
(113, ' CEFADROXIL 500 MG CAP', 0, ''),
(114, ' CEFAT 500 MG CAP', 0, ''),
(115, ' CEFAT SYR', 0, ''),
(116, ' CEFOTAXIM 0,5 GR INJ', 0, ''),
(117, ' CEFOTAXIM 1 GR INJ', 0, ''),
(118, ' CEFTRIAXONE 1 GR INJ', 0, ''),
(119, ' CELESTONE TAB', 0, ''),
(120, ' CENDO MYCOS E D', 0, ''),
(121, ' CENDO TOBROSON', 0, ''),
(122, ' CENDO XITROL E D', 0, ''),
(123, ' CETIRIZINE TABLET', 0, ''),
(124, ' CERAZETTA', 0, ''),
(125, ' CHLORAETYL Dr. HENING', 0, ''),
(126, ' CHLORAMPHENICOL 250 MG', 0, ''),
(127, ' CHROMALUX TABLET', 0, ''),
(128, ' CIMETIDIN TAB', 0, ''),
(129, ' CINOLON N CREAM', 0, ''),
(130, ' CIPROFLOXACIN 500 MG', 0, ''),
(131, ' CITROSOL TABLET', 0, ''),
(132, ' CLACEF 0,5 GR INJ', 0, ''),
(133, ' CLACEF 1 GR INJ', 0, ''),
(134, ' CLAFORAN 0,5 GR INJ', 0, ''),
(135, ' CLAFORAN 1 GR INJ', 0, ''),
(136, ' CLANEKSI TAB', 0, ''),
(137, ' CLAVAMOX 500 MG TAB', 0, ''),
(138, ' CLINDAMYCIN 150', 0, ''),
(139, ' CLINDAMYCIN 300', 0, ''),
(140, ' CLINIDAC 150', 0, ''),
(141, ' CLONIDIN', 0, ''),
(142, ' CO - AMOXYCLAV 625 TAB', 0, ''),
(143, ' COBAZIM CAP', 0, ''),
(144, ' COLISTIN 250,000IU TAB', 0, ''),
(145, ' COLISTIN 1,500,000IU TAB', 0, ''),
(146, ' COLSANCETINE 250MG CAP', 0, ''),
(147, ' COLSANCETINE INJ', 0, ''),
(148, ' COLSANCETINE SYR', 0, ''),
(149, ' COMBANTRIN SYR', 0, ''),
(150, ' COMBANTRIN TAB', 0, ''),
(151, ' COMTHYCOL D S 125 MG', 0, ''),
(152, ' COMTHYCOL D S 250 MG', 0, ''),
(153, ' COTRIMOXAZOLE SYR', 0, ''),
(154, ' COTRIMOXAZOLE TAB', 0, ''),
(155, ' CPZ CHLORPROMAZINE', 0, ''),
(156, ' CPZ TAB', 0, ''),
(157, ' CTM 4 MG TAB', 0, ''),
(158, ' CURMONAS SYR', 0, ''),
(159, ' CURVIT SYR', 0, ''),
(160, ' CYCLOFEM INJ', 0, ''),
(161, ' CYGEST CAP', 0, ''),
(162, ' CYTOTEX TAB', 0, ''),
(163, ' DAKTARIN DIAPERS', 0, ''),
(164, ' DAKTARIN ORAL GEL', 0, ''),
(165, ' DAMABEN DROP', 0, ''),
(166, ' DAMABEN TAB', 0, ''),
(167, ' DANSERA TAB', 0, ''),
(168, ' DECOLGEN TAB', 0, ''),
(169, ' DECOLSIN CAPS', 0, ''),
(170, ' DEMACOLIN TAB', 0, ''),
(171, ' DEPO - NEO INJ', 0, ''),
(172, ' DEPO - PROGESTIN INJ', 0, ''),
(173, ' DEPO - PROVERA INJ', 0, ''),
(174, ' DEXAMETHASONE INJ AMP', 0, ''),
(175, ' DEXAMETHASONE INJ VIAL', 0, ''),
(176, ' DEXAMETHASONE 0,5 GR TAB', 0, ''),
(177, ' DEXAMETHASONE 0,75 GR TAB', 0, ''),
(178, ' DEXTAMIN TAB', 0, ''),
(179, ' DEXTROMETHORPAN TAB', 0, ''),
(180, ' DEXTROSE 40 %', 0, ''),
(181, ' D5% 100 ML', 0, ''),
(182, ' D5% 500 ML', 0, ''),
(183, ' D10% ', 0, ''),
(184, ' DEXTROSE 5%+0,9% NaCl', 0, ''),
(185, ' DEXTROSE 5%+0,45% NaCl', 0, ''),
(186, ' DEXTROSE 5%+0,225% NaCl', 0, ''),
(187, ' DEXTROSE 10%+0,18% NaCl', 0, ''),
(188, ' DEXTROSIN ANAK SYR', 0, ''),
(189, ' DEXYMOX 500', 0, ''),
(190, ' DHBP INJ', 0, ''),
(191, ' DIAGIT', 0, ''),
(192, ' DIALAC ', 0, ''),
(193, ' DIANE TAB', 0, ''),
(194, ' DIGOXIN 0,25', 0, ''),
(195, ' DILANTIN INJ', 0, ''),
(196, ' DILENA TAB', 0, ''),
(197, ' DIOXYANTRACHINON TAB', 0, ''),
(198, ' DIPRIVAN INJ', 0, ''),
(199, ' DISFLATYL TAB', 0, ''),
(200, ' DISUDRIN DROP', 0, ''),
(201, ' DISUDRIN TABLET', 0, ''),
(202, ' DOMPERIDON 10 MG TABLET', 0, ''),
(203, ' DOPAMIN INJ', 0, ''),
(204, ' DOXYCYCLINE 100', 0, ''),
(205, ' DULCOLAX SUPP 5 MG', 0, ''),
(206, ' DULCOLAX SUPP 10 MG', 0, ''),
(207, ' DULCOLAX TAB', 0, ''),
(208, ' DUMIN SUPP', 0, ''),
(209, ' DUMIN TAB', 0, ''),
(210, ' DUPHASTON TAB', 0, ''),
(211, ' DUPLOPYRIN TAB', 0, ''),
(212, ' DURADRYL INJ', 0, ''),
(213, ' DUSPATALIN ', 0, ''),
(214, ' DUVADILAN INJ', 0, ''),
(215, ' DUVADILAN TAB', 0, ''),
(216, ' ELKANA TAB', 0, ''),
(217, ' ELKRIP', 0, ''),
(218, ' ELOCON N CREAM 5 GR', 0, ''),
(219, ' ELOX CREAM 5 MG', 0, ''),
(220, ' ELSAZYM SAC', 0, ''),
(221, ' EMETIN INJ', 0, ''),
(222, ' EMULGADE CREAM', 0, ''),
(223, ' ENCEPHABOL SYR', 0, ''),
(224, ' ENDROLIN INJ', 0, ''),
(225, ' ENGERIX B INJ', 0, ''),
(226, ' EPEXOL TAB', 0, ''),
(227, ' EPHEDRIN INJ', 0, ''),
(228, ' EPHEDRIN TAB', 0, ''),
(229, ' EPIDOSIN INJ', 0, ''),
(230, ' EPHINEPRINE INJ', 0, ''),
(231, ' EQUAL SACHET', 0, ''),
(232, ' ERLAMYSETIN E D', 0, ''),
(233, ' ERYSANBE 200 MG TAB', 0, ''),
(234, ' ERYSANBE 500 MG TAB', 0, ''),
(235, ' ERYTROCIN DULCET TAB', 0, ''),
(236, ' ESPERSON 0,25%', 0, ''),
(237, ' ESTHERO 0,625', 0, ''),
(238, ' ESTREVA GEL', 0, ''),
(239, ' ETHIBERNAL 25 MG INJ', 0, ''),
(240, ' ETHRANE', 0, ''),
(241, ' ETUROL CAPSUL', 0, ''),
(242, ' EUCARBON TAB', 0, ''),
(243, ' EUVAX ADULT INJ', 0, ''),
(244, ' EXLUTON 28 TAB', 0, ''),
(245, ' FAKTU OINT 20 GR', 0, ''),
(246, ' FAKTU SUPP', 0, ''),
(247, ' FELDENE SUPP', 0, ''),
(248, ' FENTANYL INJEKSI', 0, ''),
(249, ' FEROFORT TAB', 0, ''),
(250, ' FETAVITA TABLET', 0, ''),
(251, ' F G THROCHES', 0, ''),
(252, ' FITO ASI', 0, ''),
(253, ' FLADYSTIN OVULE', 0, ''),
(254, ' FLAGYL FORTE TAB', 0, ''),
(255, ' FLAGYL INFUS', 0, ''),
(256, ' FLAGYL 0,5 GR SUPP', 0, ''),
(257, ' FLAGYL 1 GR SUPP', 0, ''),
(258, ' FLAGYSTATIN OVULE', 0, ''),
(259, ' FLAMAR TAB', 0, ''),
(260, ' FLUZEP TABLET', 0, ''),
(261, ' FOLAMIL', 0, ''),
(262, ' FOLAPLUS', 0, ''),
(263, ' FOLAVIT 400', 0, ''),
(264, ' FORMALIN 10%', 0, ''),
(265, ' FORMALIN TAB', 0, ''),
(266, ' FORMICO 200 MG', 0, ''),
(267, ' FORMICO CREAM', 0, ''),
(268, ' FUCIDIN CREAM', 0, ''),
(269, ' FUNDAMIN E', 0, ''),
(270, ' FUROSEMID', 0, ''),
(271, ' GAMARAAS (imune globuline)', 0, ''),
(272, ' GARAM INGGRIS', 0, ''),
(273, ' GARAMYCIN CREAM', 0, ''),
(274, ' GARDASIL', 0, ''),
(275, ' GASTRIDIN INJ', 0, ''),
(276, ' GASTRINAL SYRUP', 0, ''),
(277, ' GASTRUL TAB', 0, ''),
(278, ' GENTAMERK CREAM', 0, ''),
(279, ' GENTAMERK INJ', 0, ''),
(280, ' GENTAMYCIN 80 MG INJ', 0, ''),
(281, ' GENTAMYCIN SALF', 0, ''),
(282, ' GENTIAN VIOLET', 0, ''),
(283, ' G G', 0, ''),
(284, ' GLIBENCLAMIDE TAB', 0, ''),
(285, ' GLUCOSE ORAL', 0, ''),
(286, ' GLYBOTIC 250 MG INJEKSI ', 0, ''),
(287, ' GLYCERIN', 0, ''),
(288, ' GRANTUSIF TABLET', 0, ''),
(289, ' GRAFOLA DHA TABLET', 0, ''),
(290, ' GYNOXA OVULE', 0, ''),
(291, ' H2O2 3%', 0, ''),
(292, ' H2O2 5%', 0, ''),
(293, ' HAES STERIL 6%', 0, ''),
(294, ' HAVRIX INJ', 0, ''),
(295, ' HCL 0,1', 0, ''),
(296, ' HCT 25 TABLET', 0, ''),
(297, ' HEMOBION CAP', 0, ''),
(298, ' HEPTASAN 4 MG TAB', 0, ''),
(299, ' HERBALACTA', 0, ''),
(300, ' HIBERIX', 0, ''),
(301, ' HIBISCRUB', 0, ''),
(302, ' HI - BONE', 0, ''),
(303, ' HIDROCORTISON 1%', 0, ''),
(304, ' HIDROCORTISON 2,5%', 0, ''),
(305, ' HYSTOLAN TAB', 0, ''),
(306, ' IBERET FOLIC TAB', 0, ''),
(307, ' IBUPROFEN 200 MG', 0, ''),
(308, ' IBUPROFEN 400 MG', 0, ''),
(309, ' ILLIADIN DROP', 0, ''),
(310, ' IMBOOST SYR', 0, ''),
(311, ' IMESCO TAB', 0, ''),
(312, ' IMUNOVIT CAPS', 0, ''),
(313, ' IMUNOVIT SYR', 0, ''),
(314, ' INBION', 0, ''),
(315, ' INCLARIN', 0, ''),
(316, ' INDEXON', 0, ''),
(317, ' INDUXIN INJ', 0, ''),
(318, ' INFANRIX INJ', 0, ''),
(319, ' INFANRIX - HIB INJ', 0, ''),
(320, ' INFELON TAB', 0, ''),
(321, ' INFUSAN D5% SANBE', 0, ''),
(322, ' INFUSAN RD5% SANBE', 0, ''),
(323, ' INFUSAN RL SANBE', 0, ''),
(324, ' INH-CIBA 300 MG TABLET', 0, ''),
(325, ' INTERCON 10 GR CREAM', 0, ''),
(326, ' INVITEC TABLET ', 0, ''),
(327, ' INTRICEF 1 GR INJ', 0, ''),
(328, ' INVOMIT INJEKSI', 0, ''),
(329, ' INVOMIT TABLET', 0, ''),
(330, ' IODIUM TINCTUR', 0, ''),
(331, ' ISODIN SOLUTION 60 ML', 0, ''),
(332, ' KAEN - 3B', 0, ''),
(333, ' KAEN - MG3', 0, ''),
(334, ' KALK TAB', 0, ''),
(335, ' KALMETHASONE INJ AMP', 0, ''),
(336, ' KALMETHASONE INJ VIAL', 0, ''),
(337, ' KALMETHASONE TAB', 0, ''),
(338, ' KALNEX 250 MG INJ', 0, ''),
(339, ' KALNEX 500 MG INJ', 0, ''),
(340, ' KALNEX 500 MG TAB', 0, ''),
(341, ' KALTROFEN SUPP', 0, ''),
(342, ' KANDISTATIN DROP', 0, ''),
(343, ' KAPEDOXIN TAB', 0, ''),
(344, ' KAPORIT', 0, ''),
(345, ' KCL INJ', 0, ''),
(346, ' KENALOG CREAM', 0, ''),
(347, ' KETALAR 100', 0, ''),
(348, ' KETAMIN INJ', 0, ''),
(349, ' KETOKONAZOLE TAB', 0, ''),
(350, ' KETOROLAC 10 MG INJ', 0, ''),
(351, ' KETOROLAC 30 MG INJ', 0, ''),
(352, ' LACBON TAB', 0, ''),
(353, ' LACTACYD VAGINA GEL', 0, ''),
(354, ' LACTACYD VAGINA', 0, ''),
(355, ' LACTACYD ANTISEPTIK', 0, ''),
(356, ' LACTO B', 0, ''),
(357, ' LAKTAFIT', 0, ''),
(358, ' LAPICEF 500 MG CAP', 0, ''),
(359, ' LASIX INJ', 0, ''),
(360, ' LASIX TAB', 0, ''),
(361, ' LAXADINE', 0, ''),
(362, ' LAXOBERON DROP', 0, ''),
(363, ' L BIO SACHET', 0, ''),
(364, ' LEVOFLOXACIN 500 MG TAB', 0, ''),
(365, ' LEXAHIST TABLET', 0, ''),
(366, ' LIDOCAIN 2% INJ', 0, ''),
(367, ' LIDODEX INJ', 0, ''),
(368, ' LIVIALTAB', 0, ''),
(369, ' LOCASALEN', 0, ''),
(370, ' LODIA TAB', 0, ''),
(371, ' LOPERAMIDE 10 MG TAB', 0, ''),
(372, ' LORATADIN 10 MG TAB', 0, ''),
(373, ' LOSEC 10 MG', 0, ''),
(374, ' LUGOL', 0, ''),
(375, ' LYNORAL', 0, ''),
(376, ' LUTENYL TAB', 0, ''),
(377, ' 20% MAGNESIUM SULFAT', 0, ''),
(378, ' 40% MAGNESIUM SULFAT', 0, ''),
(379, ' MALTOFER', 0, ''),
(380, ' MARCAIN SPINAL HEAVY INJ', 0, ''),
(381, ' MARCAIN 0,5%', 0, ''),
(382, ' MARVELON 28', 0, ''),
(383, ' MAXIVIT TAB', 0, ''),
(384, ' MD - CAL TAB', 0, ''),
(385, ' MEDERMA CREAM', 0, ''),
(386, ' MEDIAMER B 6 TAB', 0, ''),
(387, ' MEFINAL 250 MG', 0, ''),
(388, ' MEFINAL 500 MG TAB', 0, ''),
(389, ' MEFINTER 250', 0, ''),
(390, ' MEFINTER 500', 0, ''),
(391, ' MEFIX 250 MG TAB', 0, ''),
(392, ' MEFIX 500 MG TAB', 0, ''),
(393, ' MELOXICAM TABLET', 0, ''),
(394, ' MEPTIN 0,25 MG TAB', 0, ''),
(395, ' MEPTIN 0,05 TAB', 0, ''),
(396, ' MEPTIN SYR', 0, ''),
(397, ' MERISLON', 0, ''),
(398, ' MERONEM 0.5 GR INJ', 0, ''),
(399, ' MERONEM 1 GR INJ ', 0, ''),
(400, ' METAGAN SYRUP', 0, ''),
(401, ' METHANOL PA 1 L', 0, ''),
(402, ' METHERGIN INJ', 0, ''),
(403, ' METHERGIN TAB', 0, ''),
(404, ' METHERINAL TAB', 0, ''),
(405, ' METHYL ERGOMETRINE INJ', 0, ''),
(406, ' METHYL ERGOMETRINE TAB', 0, ''),
(407, ' METILAT', 0, ''),
(408, ' METOCLOPRAMIDE 10 MG TAB', 0, ''),
(409, ' METRONIDAZOLE INFUS', 0, ''),
(410, ' METRONIDAZOLE 500 TAB', 0, ''),
(411, ' MEYLON', 0, ''),
(412, ' MEZATRIM 250 MG', 0, ''),
(413, ' MICROGINON', 0, ''),
(414, ' MICROLAX 5 ML', 0, ''),
(415, ' MIKASIN 250 MG INJ', 0, ''),
(416, ' MIKASIN 500 MG INJ', 0, ''),
(417, ' MILMOR TAB', 0, ''),
(418, ' MILOZ INJ', 0, ''),
(419, ' MINYAK KAYU PUTIH', 0, ''),
(420, ' MINYAK K P KONICARE 30 ML', 0, ''),
(421, ' MINYAK K P KONICARE 60 ML', 0, ''),
(422, ' MINYAK TELON', 0, ''),
(423, ' MINYAK T KONICARE 30 ML', 0, ''),
(424, ' MINYAK T KONICARE 60 ML', 0, ''),
(425, ' MMR INJ', 0, ''),
(426, ' MOLOCO B12 TAB', 0, ''),
(427, ' MORPHIN INJ', 0, ''),
(428, ' MUCOHEXIN TAB', 0, ''),
(429, ' MUSTELA', 0, ''),
(430, ' MYCO Z CREAM ', 0, ''),
(431, ' MYLANTA 150 ML SYR', 0, ''),
(432, ' MYLANTA 360 ML SYR', 0, ''),
(433, ' MYLANTA TAB', 0, ''),
(434, ' MYONAL', 0, ''),
(435, ' NAIRET TAB', 0, ''),
(436, ' NALGESTAN TAB', 0, ''),
(437, ' NARFOS 4MG INJEKSI', 0, ''),
(438, ' NARFOS 8 MG INJEKSI', 0, ''),
(439, ' NARFOS 4 MG TAB', 0, ''),
(440, ' NARFOS 8 MG TAB', 0, ''),
(441, ' NATRILIX SR', 0, ''),
(442, ' NA. DICLOFENAC TAB 25 MG', 0, ''),
(443, ' NA. DICLOFENAC TAB 50 MG', 0, ''),
(444, ' NEO K INJ', 0, ''),
(445, ' NEO KAOMINAL SYR', 0, ''),
(446, ' NEOZEP FORTE TAB', 0, ''),
(447, ' NERISOMA CREAM', 0, ''),
(448, ' NERISOMA FETTY CREAM', 0, ''),
(449, ' NEUROBION 5000 INJ', 0, ''),
(450, ' NEUROBION 1000 TAB', 0, ''),
(451, ' NEUROBORAN INJ', 0, ''),
(452, ' NEUROSANBE TAB', 0, ''),
(453, ' NEUROSANBE INJ', 0, ''),
(454, ' NEW DIATAB TAB', 0, ''),
(455, ' NIFEDIPIN 10 MG TAB', 0, ''),
(456, ' NIFURAL SYR', 0, ''),
(457, ' NIZORAL 200 MG TAB', 0, ''),
(458, ' NONFLAMIN CAPS', 0, ''),
(459, ' NORMASTIN 10 MG TAB', 0, ''),
(460, ' NORTIFEN TAB', 0, ''),
(461, ' NOVAKAL SYRUP', 0, ''),
(462, ' NOVALGIN DROP', 0, ''),
(463, ' NOVALGIN INJ AMP', 0, ''),
(464, ' NOVALGIN SYR', 0, ''),
(465, ' NOVALGIN TAB', 0, ''),
(466, ' NS / PZ 500 ML', 0, ''),
(467, ' NULACTA DHA', 0, ''),
(468, ' NULACTA PLUS DHA', 0, ''),
(469, ' NUTRICHOLIN', 0, ''),
(470, ' NUTRIFLAM', 0, ''),
(471, ' NYSTATIN VAG TAB', 0, ''),
(472, ' OBH INTRASAL', 0, ''),
(473, ' OBP SYR', 0, ''),
(474, ' OCUSON TAB', 0, ''),
(475, ' OFLOXACIN 400', 0, ''),
(476, ' OLIUM MINTHPIP', 0, ''),
(477, ' OMEGAVIT CAPSUL', 0, ''),
(478, ' OMEPRAZOLE TAB', 0, ''),
(479, ' ONDAN 4 MG INJ', 0, ''),
(480, ' ONDAN SENTRON 8 MG INJ', 0, ''),
(481, ' OPICEF 500 MG CAPS', 0, ''),
(482, ' OPILAX SYR', 0, ''),
(483, ' OPTIXITROL DROP', 0, ''),
(484, ' ORADEXON INJ', 0, ''),
(485, ' ORALIT', 0, ''),
(486, ' OTOPAIN TETES TLNG', 0, ''),
(487, ' OTTOGENTA INJ', 0, ''),
(488, ' OVESTIN CREAM', 0, ''),
(489, ' OVESTIN TAB', 0, ''),
(490, ' OXTERCID INJ', 0, ''),
(491, ' OXYTOCIN INJ', 0, ''),
(492, ' OZEN DROP', 0, ''),
(493, ' PAMOL 125 MG SUPP', 0, ''),
(494, ' PAMOL TAB', 0, ''),
(495, ' PANADOL TAB', 0, ''),
(496, ' PAN - AMIN G', 0, ''),
(497, ' PAPATROPIN INJ', 0, ''),
(498, ' PAPAVERIN HCL INJ AMP', 0, ''),
(499, ' PAPAVERIN HCL INJ VIAL', 0, ''),
(500, ' PAPAVERIN TAB', 0, ''),
(501, ' PARACETAMOL SYR', 0, ''),
(502, ' PARACETAMOL 500 MG TAB', 0, ''),
(503, ' PARAFFIN', 0, ''),
(504, ' PARLODEL 2,5 TAB', 0, ''),
(505, ' PEDIACEL', 0, ''),
(506, ' PEDIALYT', 0, ''),
(507, ' PEDIMIN DROP', 0, ''),
(508, ' PEHACAIN INJ', 0, ''),
(509, ' PEHACLOR TAB', 0, ''),
(510, ' PETHIDIN INJ', 0, ''),
(511, ' PEZETA CIBA TAB', 0, ''),
(512, ' PHAROLIT SAC', 0, ''),
(513, ' PHENOBARBITAL INJ', 0, ''),
(514, ' PHENOBARBITAL 30 MG TAB', 0, ''),
(515, ' PHISOHEX', 0, ''),
(516, ' PHYTOMENADIONE INJEKSI AMP', 0, ''),
(517, ' PIPTAL PEDIATRIC', 0, ''),
(518, ' PIRALEN INJ', 0, ''),
(519, ' PIROFEL GEL', 0, ''),
(520, ' PIROXICAM 20 MG CAP', 0, ''),
(521, ' PITOGIN M INJ', 0, ''),
(522, ' PLANTACID TAB', 0, ''),
(523, ' PLANTACID FORTE TAB', 0, ''),
(524, ' PLANTACID SYR', 0, ''),
(525, ' PLANTACID FORTE SYR', 0, ''),
(526, ' PLASBUMIN 5%', 0, ''),
(527, ' PLASBUMIN 20%', 0, ''),
(528, ' PLASMINEX TAB', 0, ''),
(529, ' POLYCROL SYR 100 ML', 0, ''),
(530, ' POLYCROL SYR 400', 0, ''),
(531, ' POLYCROL TAB', 0, ''),
(532, ' POLIDEMISIN E D', 0, ''),
(533, ' PONSTAN 500 MG TAB', 0, ''),
(534, ' POSPARGIN INJ', 0, ''),
(535, ' POSPARGIN TAB', 0, ''),
(536, ' POVIDIN 10% ANTISEPTIK', 0, ''),
(537, ' PRAXION DROP', 0, ''),
(538, ' PRAXION SYRUP', 0, ''),
(539, ' PREABOR', 0, ''),
(540, ' PREDNISON 5 MG TAB', 0, ''),
(541, ' PREMASTON 5 MG TAB', 0, ''),
(542, ' PRENAMIA CAPS', 0, ''),
(543, ' PRIMADEX SYRUP', 0, ''),
(544, ' PRIMOLUT N 5 MG TAB', 0, ''),
(545, ' PRIMPERAN DROPS', 0, ''),
(546, ' PRIMPERAN INJ', 0, ''),
(547, ' PRIMPERAN TAB', 0, ''),
(548, ' PROBION TAB', 0, ''),
(549, ' PROCAINI HCL INJ', 0, ''),
(550, ' PROFERTIL 50 MG TAB', 0, ''),
(551, ' PROFILAS SYR', 0, ''),
(552, ' PROFILAS TAB', 0, ''),
(553, ' PROLACTA BABY', 0, ''),
(554, ' PROLIC 150 MG', 0, ''),
(555, ' PROLIC 300 MG ', 0, ''),
(556, ' PRONALGES INJ', 0, ''),
(557, ' PRONALGES E 50', 0, ''),
(558, ' PRORIS SUPP', 0, ''),
(559, ' PRORIS SYR', 0, ''),
(560, ' PROSTIN E TAB', 0, ''),
(561, ' PROTEXIN TAB', 0, ''),
(562, ' PROTEXIN INFANT', 0, ''),
(563, ' PROVENID SUPP', 0, ''),
(564, ' PULMICORT INJ', 0, ''),
(565, ' PULMOLIN TAB', 0, ''),
(566, ' PYCIN 750 MG INJEKSI', 0, ''),
(567, ' PYRICEF 500 CAPS', 0, ''),
(568, ' PYRIDOXIN HCL INJ', 0, ''),
(569, ' PYRIDOXIN 25 MG / VIT B6 TAB', 0, ''),
(570, ' PYRIDRYL 60 ML SYR', 0, ''),
(571, ' Q - TEN 30 MG CAPS', 0, ''),
(572, ' Q - TEN 60 MG CAPS', 0, ''),
(573, ' RANITIDIN 150 MG TAB', 0, ''),
(574, ' RANTIN INJ', 0, ''),
(575, ' RANTIN TAB', 0, ''),
(576, ' RAVITA TAB', 0, ''),
(577, ' RD ( RINGER DEXTROSE )', 0, ''),
(578, ' REGUMEN TAB', 0, ''),
(579, ' RENALYT', 0, ''),
(580, ' RENODIOL TAB', 0, ''),
(581, ' RIAMYCIN 500 MG TAB', 0, ''),
(582, ' RIFAMTIBI 450 MG TAB', 0, ''),
(583, ' RIFAMTIBI 600 MG TAB', 0, ''),
(584, ' RIFANOL', 0, ''),
(585, ' RL ( RINGER LACTATE )', 0, ''),
(586, ' RYCEF 1 GR INJ', 0, ''),
(587, ' RYZEN ORAL DROP', 0, ''),
(588, ' RYZEN SYR', 0, ''),
(589, ' RYZEN TAB', 0, ''),
(590, ' RYVEL DROP', 0, ''),
(591, ' SACHARIN TAB', 0, ''),
(592, ' SAGESTAM E D', 0, ''),
(593, ' SAGESTAM INJ', 0, ''),
(594, ' SAGESTAM SALF', 0, ''),
(595, ' SALBUTAMOL 4 MG TAB', 0, ''),
(596, ' SALMONELLA P THYPI AO', 0, ''),
(597, ' SALMONELLA P THYPI BO', 0, ''),
(598, ' SALMONELLA P THYPI H', 0, ''),
(599, ' SALMONELLA P THYPI O', 0, ''),
(600, ' SALYCIL TALK', 0, ''),
(601, ' SANMETIDIN TAB', 0, ''),
(602, ' SANADRYL DMP SYR 60 ML', 0, ''),
(603, ' SANAZET TAB', 0, ''),
(604, ' SAN - B PLEX DROP', 0, ''),
(605, ' SANEXON TAB', 0, ''),
(606, ' SANGOBION CAPS', 0, ''),
(607, ' SANLIN 500 MG TAB', 0, ''),
(608, ' SANMOL DROPS', 0, ''),
(609, ' SANMOL SYR 60 ML', 0, ''),
(610, ' SANMOL TAB', 0, ''),
(611, ' SANPICILLIN 1 GR INJ', 0, ''),
(612, ' SANPRIMA SYR', 0, ''),
(613, ' SANPRIMA FORTE TAB', 0, ''),
(614, ' SANTA E 100 TAB', 0, ''),
(615, ' SANTA E 400 TAB', 0, ''),
(616, ' SANVITA B SYR', 0, ''),
(617, ' SASA', 0, ''),
(618, ' SAVLON ( HIBICET )', 0, ''),
(619, ' SEDROFEN 500 MG TAB', 0, ''),
(620, ' SESDEN TAB', 0, ''),
(621, ' SG / AG', 0, ''),
(622, ' SIBELIUM 5', 0, ''),
(623, ' SILEX SYRUP', 0, ''),
(624, ' SILOPECT', 0, ''),
(625, ' SILOPECT SYR', 0, ''),
(626, ' SIMVASTATIN 10 TAB', 0, ''),
(627, ' SMECTA', 0, ''),
(628, ' SODIUM CHLORIDE / PZ 25 ML', 0, ''),
(629, ' SPIRAMYCIN 500', 0, ''),
(630, ' SPORETIK', 0, ''),
(631, ' STESOLID RECTAL 5MG TUBE', 0, ''),
(632, ' STESOLID TAB', 0, ''),
(633, ' STREPTOMYCIN SULFAT', 0, ''),
(634, ' STUGERON 25 MG TAB', 0, ''),
(635, ' SULFAS ATHROPIN INJ', 0, ''),
(636, ' SULFAS FEROSUS', 0, ''),
(637, ' SULFAS MAGNESIANS', 0, ''),
(638, ' SUNCINYL ASTA (QUELICIN INJ)', 0, ''),
(639, ' SUPRAMOX', 0, ''),
(640, ' SYNTOCINON INJ', 0, ''),
(641, ' SYR THYMI', 0, ''),
(642, ' SYSTABON INJ', 0, ''),
(643, ' SYSTABON TAB', 0, ''),
(644, ' TALSUTIN V T', 0, ''),
(645, ' TAPROS DEPOT', 0, ''),
(646, ' TAXEGRAM 0,5 GR INJ', 0, ''),
(647, ' TAXEGRAM 1 GR INJ', 0, ''),
(648, ' TEAMIC 500 MG TAB', 0, ''),
(649, ' TEMPRA DROPS', 0, ''),
(650, ' TEMPRA SYR 60 ML', 0, ''),
(651, ' TEMPRA SYR 120 ML', 0, ''),
(652, ' TERFACEF 1 GR INJ', 0, ''),
(653, ' TERRAMYCIN SALF', 0, ''),
(654, ' TERPIFLU SYRUP', 0, ''),
(655, ' TETRACT HIB', 0, ''),
(656, ' TETRACYCLIN 250', 0, ''),
(657, ' TETRACYCLIN 500', 0, ''),
(658, ' THIAMEX 500 MG TAB', 0, ''),
(659, ' THIAMPHENICOL 500', 0, ''),
(660, ' THROMBO ASPILLET', 0, ''),
(661, ' THROMBOGEL', 0, ''),
(662, ' THROMBOPHOB OINT', 0, ''),
(663, ' THROMBOPHOB GEL', 0, ''),
(664, ' THYPIM INJ', 0, ''),
(665, ' TICT PODHOPILINTUR', 0, ''),
(666, ' TIENAM INJ', 0, ''),
(667, ' TIRIZ DROP', 0, ''),
(668, ' TOMIT INJ', 0, ''),
(669, ' TOMIT TAB', 0, ''),
(670, ' TORADOL INJ', 0, ''),
(671, ' TRACIUM INJ', 0, ''),
(672, ' TRADOSIK CAPS', 0, ''),
(673, ' TRAMADOL INJEKSI', 0, ''),
(674, ' TRAMADOL 50 MG', 0, ''),
(675, ' TRAMAL 50 MG CAPS', 0, ''),
(676, ' TRAMAL 50 INJ', 0, ''),
(677, ' TRAMAL 100 INJ', 0, ''),
(678, ' TRANSAMIN INJ', 0, ''),
(679, ' TRANSAMIN 250 MG', 0, ''),
(680, ' TRANSAMIN 500 MG', 0, ''),
(681, ' TREMENZA TAB', 0, ''),
(682, ' TRENTAL 400 MG TAB', 0, ''),
(683, ' TRICHODAZOL INF', 0, ''),
(684, ' TRICHODAZOL 500', 0, ''),
(685, ' TRICHOSTATIC VAG. OVULE', 0, ''),
(686, ' TRICLOFEM INJEKSI', 0, ''),
(687, ' TRIMOVAX INJ', 0, ''),
(688, ' TRIPACEL 0,5 ML INJ', 0, ''),
(689, ' TRIPANZIM', 0, ''),
(690, ' TROGYL SYRUP', 0, ''),
(691, ' TROLIT SAC', 0, ''),
(692, ' TUZALOS TAB', 0, ''),
(693, ' TWINRIX INJ', 0, ''),
(694, ' 3 TC HBV', 0, ''),
(695, ' ULSIKUR INJ', 0, ''),
(696, ' ULSIKUR TAB', 0, ''),
(697, ' ULTILAR 10 MG TAB', 0, ''),
(698, ' ULTRAPROCT SALF', 0, ''),
(699, ' ULTRAPROCT SUPP', 0, ''),
(700, ' ULTRASONIC GEL', 0, ''),
(701, ' ULTRAVITA TAB', 0, ''),
(702, ' URDAFALK CAP', 0, ''),
(703, ' URISPAS', 0, ''),
(704, ' UROGETIC TAB', 0, ''),
(705, ' VACCINE PNEUMO  23/5ML', 0, ''),
(706, ' VAGISTIN OVULA', 0, ''),
(707, ' VALISANBE 2 MG TAB', 0, ''),
(708, ' VALISANBE 5 MG TAB', 0, ''),
(709, ' VALIUM INJ', 0, ''),
(710, ' VALIUM 2 MG TAB', 0, ''),
(711, ' VALIUM 5MG TAB', 0, ''),
(712, ' VARILRIX INJ', 0, ''),
(713, ' VASDALAT 5 MG TAB', 0, ''),
(714, ' VASDALAT 10 MG TAB', 0, ''),
(715, ' VAXIGRIP', 0, ''),
(716, ' VENARON', 0, ''),
(717, ' VENTOLIN NEBULEZER', 0, ''),
(718, ' VENTUSIF SYRUP', 0, ''),
(719, ' VICILLIN 250 MG INJ', 0, ''),
(720, ' VICILLIN 500 MG CAPS', 0, ''),
(721, ' VICILLIN 500 MG INJ', 0, ''),
(722, ' VICILLIN 1 GR INJ', 0, ''),
(723, ' VICILLIN-SX 1500 MG', 0, ''),
(724, ' VIT B1 INJ', 0, ''),
(725, ' VIT B1 TAB 100 MG', 0, ''),
(726, ' VIT B12 TAB', 0, ''),
(727, ' VIT B C INJ', 0, ''),
(728, ' VIT B C TAB', 0, ''),
(729, ' VIT C INJ', 0, ''),
(730, ' VIT C 25 MG TAB', 0, ''),
(731, ' VIT C 50 MG TAB', 0, ''),
(732, ' VIT C 100 MG TAB', 0, ''),
(733, ' VIT K INJ', 0, ''),
(734, ' VIT K TAB', 0, ''),
(735, ' VITAMULTI TAB', 0, ''),
(736, ' VITAPLEX SYR', 0, ''),
(737, ' VOLDIAMER B6 TABLET', 0, ''),
(738, ' VOLTAREN INJ', 0, ''),
(739, ' VOLTAREN 50 MG SUPP', 0, ''),
(740, ' VOLTAREN 100 MG SUPP', 0, ''),
(741, ' VOLTAREN 25 MG TAB', 0, ''),
(742, ' VOLTAREN 50 MG TAB', 0, ''),
(743, ' VOLTAREN GEL 20 GR', 0, ''),
(744, ' VOLTAREN SR TAB', 0, ''),
(745, ' VOLUVEN 500 ML', 0, ''),
(746, ' VOMETA DROPS', 0, ''),
(747, ' VOMETA SYR', 0, ''),
(748, ' VOMETA TAB', 0, ''),
(749, ' VOSEDON SYR', 0, ''),
(750, ' VOSEDON TAB', 0, ''),
(751, ' WIDA HES', 0, ''),
(752, ' XANDA SYR', 0, ''),
(753, ' XEPAVIT TAB', 0, ''),
(754, ' XYLLOCAIN 2% INJ', 0, ''),
(755, ' XYLOMIDON INJ VIAL', 0, ''),
(756, ' YASMIN TAB', 0, ''),
(757, ' YUDIUM TINCTUR', 0, ''),
(758, ' ZADITEN DROPS', 0, ''),
(759, ' ZADITEN SYR', 0, ''),
(760, ' ZADITEN TAB', 0, ''),
(761, ' ZAMEL SYRUP', 0, ''),
(762, ' ZANTAC INJ', 0, ''),
(763, ' ZANTAC 150 MG TAB', 0, ''),
(764, ' ZEGAVIT TAB', 0, ''),
(765, ' ZEMIC 150 TAB', 0, ''),
(766, ' ZENIFLOX 500 MG TAB', 0, ''),
(767, ' ZENRIZ TAB', 0, ''),
(768, ' ZINKID', 0, ''),
(769, ' ABDOMINAL SPATULAS', 0, ''),
(770, ' ABOCATH NO. 16', 0, ''),
(771, ' ABOCATH NO. 18', 0, ''),
(772, ' ABOCATH NO. 26', 0, ''),
(773, ' ABOCATH NO. 24', 0, ''),
(774, ' AQUASONIC GEL', 0, ''),
(775, ' ATRAMAT NO. 1 E P4', 0, ''),
(776, ' PH ANALISA SPERMA', 0, ''),
(777, ' BACTIGRAS', 0, ''),
(778, ' BIOSYN NO. 0 CM 914', 0, ''),
(779, ' BLOOD ZET', 0, ''),
(780, ' BOTOL PIGEON ( K )', 0, ''),
(781, ' BULBUV 8 WATT', 0, ''),
(782, ' BULBUV 24v / 25 WATT', 0, ''),
(783, ' CATGUT CHROMIC NO. 0', 0, ''),
(784, ' CATGUT CHROMIC NO. 1', 0, ''),
(785, ' CATGUT CHROMIC NO. 2', 0, ''),
(786, ' CATGUT CHROMIC NO. 2/0', 0, ''),
(787, ' CATGUT CHROMIC NO. 3/0', 0, ''),
(788, ' CATGUT CHROMIC 3/0 SACH', 0, ''),
(789, ' CATGUT PLAIN NO. 0', 0, ''),
(790, ' CATGUT PLAIN NO. 1', 0, ''),
(791, ' CATGUT PLAIN NO. 2', 0, ''),
(792, ' CATGUT PLAIN NO. 2/0', 0, ''),
(793, ' CATGUT PLAIN NO. 3/0', 0, ''),
(794, ' CATGUT PLAIN 0 SACH', 0, ''),
(795, ' CATGUT PLAIN 2/0 SACH', 0, ''),
(796, ' CATGUT PLAIN 3/0 SACH', 0, ''),
(797, ' CENTRIFUGE TABUNG', 0, ''),
(798, ' CHAMIDEX DIRECT', 0, ''),
(799, ' CHEK ACTIVE GLUCOSE', 0, ''),
(800, ' CHROMIC HR 37 NO. 0', 0, ''),
(801, ' CHROMIC HR 37S NO. 1', 0, ''),
(802, ' CHROMIC NO. 2', 0, ''),
(803, ' CHROMIC 1-0 C127', 0, ''),
(804, ' CICA CARE', 0, ''),
(805, ' CLOCK TENSI', 0, ''),
(806, ' COCER LAWTON', 0, ''),
(807, ' COMBISTIX', 0, ''),
(808, ' COMBUR TEST', 0, ''),
(809, ' COPER - T', 0, ''),
(810, ' COVER GLAST', 0, ''),
(811, ' CURASPON', 0, ''),
(812, ' CURET MESS NO. 6', 0, ''),
(813, ' DARMBUIS NO. 8', 0, ''),
(814, ' DARMBUIS NO. 9', 0, ''),
(815, ' DARMBUIS NO. 10', 0, ''),
(816, ' DARMBUIS NO. 18', 0, ''),
(817, ' DARMBUIS NO. 20', 0, ''),
(818, ' DENGUE CHEK Igg-Igm-Tulip', 0, ''),
(819, ' DERMAFIX', 0, ''),
(820, ' DOEKLEM 11 CM', 0, ''),
(821, ' DOPPLER AUDIO', 0, ''),
(822, ' DOT PIGEON COKLAT ( S )', 0, ''),
(823, ' ECG PAPER', 0, ''),
(824, ' ELECTROSURGICAL ESPI', 0, ''),
(825, ' EPIDURAL', 0, ''),
(826, ' ETT CLEAR 112482 NO.6,5 RUSC', 0, ''),
(827, ' ETT CLEAR 112482 NO.7 RUSC', 0, ''),
(828, ' ETT CLEAR 112482 NO.7,5 RUSC', 0, ''),
(829, ' FACES MASK AMBU NO. 5', 0, ''),
(830, ' FEEDING TUBE NO. 3,5', 0, ''),
(831, ' FEEDING TUBE NO. 5 ( 40 CM )', 0, ''),
(832, ' FEEDING TUBE NO. 5 ( 100 CM )', 0, ''),
(833, ' FEEDING TUBE NO. 5 PJG', 0, ''),
(834, ' FEEDING TUBE NO. 8 ( 40 CM )', 0, ''),
(835, ' FEEDING TUBE NO. 8 ( 100 CM )', 0, ''),
(836, ' FEEDING TUBE NO. 8 PJG', 0, ''),
(837, ' FEEDING TUBE NO. 10', 0, ''),
(838, ' FIXOMULL TRANS 15 x 10', 0, ''),
(839, ' FOLEY CATHETER NO. 6', 0, ''),
(840, ' FOLEY CATHETER NO. 8', 0, ''),
(841, ' FOLEY CATHETER NO. 10', 0, ''),
(842, ' FOLEY CATHETER NO. 14', 0, ''),
(843, ' FOLEY CATHETER NO. 16', 0, ''),
(844, ' FOLEY CATHETER NO. 18', 0, ''),
(845, ' FOLEY CATHETER NO. 24', 0, ''),
(846, ' FUCIN STAIN', 0, ''),
(847, ' GAGANG STETOSCOPE', 0, ''),
(848, ' GELANG BAYI BIRU', 0, ''),
(849, ' GELANG BAYI MERAH', 0, ''),
(850, ' GELAS KUMUR', 0, ''),
(851, ' GLYCERIN SPUIT', 0, ''),
(852, ' GLUCOTREND', 0, ''),
(853, ' GP-1 GAKIN PACK CHROMIC', 0, ''),
(854, ' GUNTING MAYO BENGKOK LAW', 0, ''),
(855, ' GUNTING MAYO LURUS', 0, ''),
(856, ' GUNTING METZENBAUM', 0, ''),
(857, ' GUNTING LAPARATOMI', 0, ''),
(858, ' GUNTING OP LURUS ta-ta 14cm', 0, ''),
(859, ' GUNTING TALI PUSAT 16 CM', 0, ''),
(860, ' HAND SWEET FOR CAUTER ARON', 0, ''),
(861, ' HANDSCHOEN TEBAL', 0, ''),
(862, ' HANSAPLAST', 0, ''),
(863, ' HCG ECCOUNT', 0, ''),
(864, ' HCL 0,1 N', 0, ''),
(865, ' HEMATEST', 0, ''),
(866, ' HYPAFIX 15 x 5', 0, ''),
(867, ' HYPAFIX 10 x 5', 0, ''),
(868, ' INFUS SET BURET', 0, ''),
(869, ' INFUS SET TK', 0, ''),
(870, ' INFUS SET TS', 0, ''),
(871, ' INJ PLUG', 0, ''),
(872, ' JARUM NO. 21', 0, ''),
(873, ' JARUM NO. 23', 0, ''),
(874, ' JARUM NO. 25', 0, ''),
(875, ' JARUM NO. 26', 0, ''),
(876, ' JARUM MANY SE-ME 21', 0, ''),
(877, ' JARUM MANY SE-MH 32', 0, ''),
(878, ' JARUM MANY SE-MH 36', 0, ''),
(879, ' JARUM MANY SE-MH 40', 0, ''),
(880, ' JARUM MANY SE-MH 45', 0, ''),
(881, ' JARUM MANY SE-MH 50', 0, ''),
(882, ' JARUM MANY SE-MH 55', 0, ''),
(883, ' JARUM MANY SE-TE 32', 0, ''),
(884, ' JARUM MANY SE-TE 36', 0, ''),
(885, ' JARUM MANY SE-TE 40', 0, ''),
(886, ' JARUM MANY SE-TE 45', 0, ''),
(887, ' JARUM MANY SE-TE 60', 0, ''),
(888, ' JARUM MANY SE-TH 18', 0, ''),
(889, ' JARUM MANY SE-TH 24', 0, ''),
(890, ' JARUM MANY SE-TH 28', 0, ''),
(891, ' JARUM MANY SE-TH 32', 0, ''),
(892, ' JARUM MANY SE-TH 36F', 0, ''),
(893, ' JARUM MANY SE-TH 40F', 0, ''),
(894, ' JARUM MANY SE-TH 45', 0, ''),
(895, ' JARUM MANY SE-TH 50', 0, ''),
(896, ' JARUM MANY SE-TH 55', 0, ''),
(897, ' JARUM MANY SE-TH 60', 0, ''),
(898, ' KACA MATA OPERASI', 0, ''),
(899, ' KANTONG PALSTIK 1/4 KG', 0, ''),
(900, ' KANTONG PLASTIK 1/2 KG', 0, ''),
(901, ' KAPAS 25 GR', 0, ''),
(902, ' KAPAS 250 GR', 0, ''),
(903, ' KAPAS 500 GR', 0, ''),
(904, ' KAPAS 1 KG', 0, ''),
(905, ' KAPAS BERLEMAK 1 KG', 0, ''),
(906, ' KAPSUL KOSONG NO. 0', 0, ''),
(907, ' KAPSUL KOSONG NO. 00', 0, ''),
(908, ' KAPSUL KOSONG NO. 1 ', 0, ''),
(909, ' KAPSUL KOSONG NO. 2', 0, ''),
(910, ' KAPUR SEMUT', 0, ''),
(911, ' KASA MORICO', 0, ''),
(912, ' KASA STERIL HIDROFIL', 0, ''),
(913, ' KEPALA STETOSCOPE', 0, ''),
(914, ' KERTAS PUYER ( B )', 0, ''),
(915, ' KERTAS PUYER ( K )', 0, ''),
(916, ' KERTAS SARING', 0, ''),
(917, ' KERTAS STERISEET 50 x 50', 0, ''),
(918, ' KERTAS STERISEET 120 x 120', 0, ''),
(919, ' KLEM KOCHER ', 0, ''),
(920, ' KOCHER BENGKOK 14 CM', 0, ''),
(921, ' KOCHER PJG 16 CM', 0, ''),
(922, ' KORENTANG LURUS', 0, ''),
(923, ' KRESEK PUTIH', 0, ''),
(924, ' LAMPU PHOTOTERAPI', 0, ''),
(925, ' LAMPU UV 36 W PHILLIPS', 0, ''),
(926, ' LARUTAN GIEMSA', 0, ''),
(927, ' LARUTAN HCL 0,1', 0, ''),
(928, ' LARUTAN TURK', 0, ''),
(929, ' LARYNGOSCOPE DWS. RIESTER', 0, ''),
(930, ' LEUKOFIX', 0, ''),
(931, ' LEUKOMED T PLUS 10 x 25', 0, ''),
(932, ' LEUKOPLAST 2,5 x 1 m', 0, ''),
(933, ' LEUKOPLAST 5 x 4,5 m', 0, ''),
(934, ' LEUKOPLAST 7,5 x 4,5 m', 0, ''),
(935, ' LEUKOPOR', 0, ''),
(936, ' LYSOL', 0, ''),
(937, ' MAMA PAD', 0, ''),
(938, ' MANSET ANAK', 0, ''),
(939, ' MANSET DEWASA', 0, ''),
(940, ' MASKER DISPOSIBLE', 0, ''),
(941, ' MAYO TUBE', 0, ''),
(942, ' MEDISAFE B GTTIP', 0, ''),
(943, ' MEDISAFE B GTNP', 0, ''),
(944, ' MEDISAFE LANCET FFT', 0, ''),
(945, ' MESS NO. 11', 0, ''),
(946, ' MESS NO. 20', 0, ''),
(947, ' MESS NO. 24', 0, ''),
(948, ' MICROPORE', 0, ''),
(949, ' MONOCRYL NO. 0', 0, ''),
(950, ' MONOCRYL NO. 1 Y 359', 0, ''),
(951, ' MONOSYN NO. 0 HR 40S', 0, ''),
(952, ' MONOSYN NO. 1 HR 40S', 0, ''),
(953, ' MONOSYN NO. 3/0 DS 24', 0, ''),
(954, ' MONO NO. 1 M48', 0, ''),
(955, ' MONO NO. 3/0 M51', 0, ''),
(956, ' MORTIR', 0, ''),
(957, ' MUCUS EXT ( JMS )', 0, ''),
(958, ' MUCUS EXT ( ONE MED )', 0, ''),
(959, ' NALD HEACTING', 0, ''),
(960, ' NALD PUDER', 0, ''),
(961, ' NASAL O2 BAYI', 0, ''),
(962, ' NASAL O2 DEWASA', 0, ''),
(963, ' N2O', 0, ''),
(964, ' NEBULEZER M PEDIATRICIAN', 0, ''),
(965, ' Neadle holder hegar 18 cm', 0, ''),
(966, ' Neadle holder hegar 18,5 L', 0, ''),
(967, ' Neadle holder mayo', 0, ''),
(968, ' NELATHON CATH NO. 10', 0, ''),
(969, ' NELATHON CATH NO. 14', 0, ''),
(970, ' NELATHON CATH NO. 16', 0, ''),
(971, ' NELATHON CATH NO. 18', 0, ''),
(972, ' NEUFLON NO. 24', 0, ''),
(973, ' NOVA - T', 0, ''),
(974, ' NURSE CAP', 0, ''),
(975, ' OPSITE 6,5 x 5', 0, ''),
(976, ' OPSITE 20 x 10', 0, ''),
(977, ' OPSITE 25 x 10', 0, ''),
(978, ' O2 REGULATOR', 0, ''),
(979, ' PEAN BENGKOK', 0, ''),
(980, ' PERBAN 10 CM', 0, ''),
(981, ' PERBAN DEPPERS WAS', 0, ''),
(982, ' Peritoneal FCP Mikulic H14-0811', 0, ''),
(983, ' PERITONIUM KLEM', 0, ''),
(984, ' PINCET ANATOMIS 14', 0, ''),
(985, ' PINCET ANATOMIS 20', 0, ''),
(986, ' PINCET CHIRUGIS', 0, ''),
(987, ' PIPET HB 20 CM', 0, ''),
(988, ' PIPET MICRO assipette', 0, ''),
(989, ' PISAU CUKUR', 0, ''),
(990, ' PLAIN HR 26 2/0', 0, ''),
(991, ' PLAIN HR 35 2/0', 0, ''),
(992, ' PLASTIK KLIP ( B )', 0, ''),
(993, ' PALSTIK KLIP ( K )', 0, ''),
(994, ' POLYSORB NO. 0 CL-914', 0, ''),
(995, ' POMPA TENSI', 0, ''),
(996, ' PRECESSION G 28', 0, ''),
(997, ' PRECUT CATGUT-PLAIN PP32', 0, ''),
(998, ' PRECUT CATGUT-PLAIN PP33', 0, ''),
(999, ' PRECUT CATGUT-PLAIN PP31', 0, ''),
(1000, ' PREGNANCY TEST STRIP', 0, ''),
(1001, ' PRESARIUM RING NO. 65', 0, ''),
(1002, ' PRESARIUM RING NO. 7', 0, ''),
(1003, ' PRESARIUM RING NO.7.5', 0, ''),
(1004, ' PRESARIUM RING NO. 8', 0, ''),
(1005, ' PRIMALITE Skin Extractor', 0, ''),
(1006, ' PROXIMADE Extractor', 0, ''),
(1007, ' REAGEN GOL. DRH A', 0, ''),
(1008, ' REAGEN GOL. DRH B', 0, ''),
(1009, ' RETRACTOR', 0, ''),
(1010, ' RETRACTOR KELLY', 0, ''),
(1011, ' RETRACTOR RICHARDSON', 0, ''),
(1012, ' REMOVER u/ Manipler', 0, ''),
(1013, ' SABUN CUCI TANGAN', 0, ''),
(1014, ' SABUN MANDI BAYI CAIR', 0, ''),
(1015, ' SAMONELL THYPHI', 0, ''),
(1016, ' SAMONELL PARA THYPHI', 0, ''),
(1017, ' SAMONELL THYPHI H', 0, ''),
(1018, ' SANYO', 0, ''),
(1019, ' SARUNG TGN NO. 6 1/2', 0, ''),
(1020, ' SARUNG TGN NO. 7', 0, ''),
(1021, ' SARUNG TGN NO. 7 1/2', 0, ''),
(1022, ' SARUNG NO. 7 1/2 MEDIGLOVE', 0, ''),
(1023, ' SARUNG TGN NO. 8', 0, ''),
(1024, ' SARUNG NO. 8 MEDIGLOVE', 0, ''),
(1025, ' SARUNG TGN TEBAL NO. 8 1/2', 0, ''),
(1026, ' SCAPEL HANDLE 3 L', 0, ''),
(1027, ' SCAPEL HANDLE 4 L', 0, ''),
(1028, ' SEIDE NO. 1 ', 0, ''),
(1029, ' SEIDE NO. 2', 0, ''),
(1030, ' SEIDE NO. 2/0', 0, ''),
(1031, ' SEIDE NO. 2/0', 0, ''),
(1032, ' SEIDE NO. 3/0', 0, ''),
(1033, ' SELANG O2', 0, ''),
(1034, ' SILET', 0, ''),
(1035, ' SIKAT PAPSMEAR', 0, ''),
(1036, ' SILK 2/0 SK 224 AILEE', 0, ''),
(1037, ' SLIDES', 0, ''),
(1038, ' SODALIME SOFNOLIME', 0, ''),
(1039, ' SOFNES BERSALIN ( B )', 0, ''),
(1040, ' SOFNES BERSALIN ( K )', 0, ''),
(1041, ' SOFNES MALAM HARI', 0, ''),
(1042, ' SPARE BULB 24 V 25 W', 0, ''),
(1043, ' SPARE BULB TENSI', 0, ''),
(1044, ' SPECULUM', 0, ''),
(1045, ' SPERMA COUNT', 0, ''),
(1046, ' SPINOCAN NO. 25', 0, ''),
(1047, ' SPINOCAN NO. 27', 0, ''),
(1048, ' SPIRAL TUBING', 0, ''),
(1049, ' SPUIT 1 CC INSULIN', 0, ''),
(1050, ' SPUIT 1 CC TUBERCULIN', 0, ''),
(1051, ' SPUIT 2,5 cc TERUMO', 0, ''),
(1052, ' SPUIT 3 CC MEDIJECT', 0, ''),
(1053, ' SPUIT 3 CC ONE MED', 0, ''),
(1054, ' SPUIT 3 cc STERA', 0, ''),
(1055, ' SPUIT 3 cc TERUMO', 0, ''),
(1056, ' SPUIT 5 cc MEDIJECT', 0, ''),
(1057, ' SPUIT 5 cc STERA', 0, ''),
(1058, ' SPUIT 5 cc TERUMO', 0, ''),
(1059, ' SPUIT 10 cc MEDIJECT', 0, ''),
(1060, ' SPUIT 10 cc STERA', 0, ''),
(1061, ' SPUIT 10 cc TERUMO', 0, ''),
(1062, ' SPUIT 20 cc TERUMO', 0, ''),
(1063, ' SPUIT 50 cc TERUMO', 0, ''),
(1064, ' STERILISATOR', 0, ''),
(1065, ' STERISHEET STANDAR', 0, ''),
(1066, ' STETHOSCOPE', 0, ''),
(1067, ' STETHOSCOPE Baby Tytan', 0, ''),
(1068, ' STETHOSCOPE Anak Tytan', 0, ''),
(1069, ' STIFPAN', 0, ''),
(1070, ' STOMACH TUBE NO. 16', 0, ''),
(1071, ' STOMACH TUBE NO. 18', 0, ''),
(1072, ' STREPLES OK', 0, ''),
(1073, ' SUCTION CATHETER NO. 8', 0, ''),
(1074, ' SUCTION CATHETER NO. 10', 0, ''),
(1075, ' SUCTION PUMP THOMAS', 0, ''),
(1076, ' SURFLO NO. 18 PENDEK', 0, ''),
(1077, ' SURFLO NO. 18', 0, ''),
(1078, ' SURFLO NO. 20 PENDEK', 0, ''),
(1079, ' SURFLO NO. 20', 0, ''),
(1080, ' SURFLO NO. 22', 0, ''),
(1081, ' SURFLO NO. 24', 0, ''),
(1082, ' SURFLO JELCO 20G', 0, ''),
(1083, ' SURFLO OPTICA 20G', 0, ''),
(1084, ' SURGEON CAP', 0, ''),
(1085, ' SURGICAL & DISETING', 0, ''),
(1086, ' SURGICRYL NO. 1', 0, ''),
(1087, ' SURGIFIT NO. 0 AV 1271', 0, ''),
(1088, ' SURGIFIT NO. 0 AV 124', 0, ''),
(1089, ' SURGIFIT NO. 1 AV 1271', 0, ''),
(1090, ' SURGIFIT NO. 1 AV 1281', 0, ''),
(1091, ' SURGIFIT NO. 1 AV1511', 0, ''),
(1092, ' SURGIFIT NO. 3/0 AV 324', 0, ''),
(1093, ' T CHROMIC NO. 3/0 C67', 0, ''),
(1094, ' T CHROMIC  NO. 0 90 C58', 0, ''),
(1095, ' TEGADERM', 0, ''),
(1096, ' TEMPAT KORENTANG', 0, ''),
(1097, ' TENSIMETER', 0, ''),
(1098, ' TENSOCREPE 7,5 CM', 0, ''),
(1099, ' TENSOCREPE 10 CM', 0, ''),
(1100, ' TEST KENCING STIK 3 PAR', 0, ''),
(1101, ' TEST PACK HCG / ACON', 0, ''),
(1102, ' THERMOMETER ( B )', 0, ''),
(1103, ' THERMOMETER ( K )', 0, ''),
(1104, ' THERMOMETER DIGITAL', 0, ''),
(1105, ' THERM & JAR FORCEP', 0, ''),
(1106, ' TIMBANGAN BADAN', 0, ''),
(1107, ' TIMBANGAN BAYI', 0, ''),
(1108, ' TISSUE FORCEP', 0, ''),
(1109, ' TISSUE GULUNG', 0, ''),
(1110, ' TONGUE SCAPEL METAL', 0, ''),
(1111, ' TORNIQUET', 0, ''),
(1112, ' TRI WAY CONECTION', 0, ''),
(1113, ' UMBILICAL CORD CLAMP PHASCO', 0, ''),
(1114, ' UMBILICAL ( JMS )', 0, ''),
(1115, ' UNDERPADS', 0, ''),
(1116, ' UNDERPADS SOFPADS', 0, ''),
(1117, ' URINE BAG', 0, ''),
(1118, ' URINE REAGENT 3P', 0, ''),
(1119, ' USG PAPER', 0, ''),
(1120, ' VACUM CUP MENOX M', 0, ''),
(1121, ' VASKULON NO. 24', 0, ''),
(1122, ' VENFLON NO. 18', 0, ''),
(1123, ' VENFLON NO. 20', 0, ''),
(1124, ' VENFLON NO. 22', 0, ''),
(1125, ' VICRYL NO. 0 W 9141', 0, ''),
(1126, ' VICRYL NO. 1 W 9431', 0, ''),
(1127, ' VICRYL NO. 1 W 9465', 0, ''),
(1128, ' VICRYL NO. 2/0 W 9121', 0, ''),
(1129, ' VICRYL NO. 2/0 W 9522', 0, ''),
(1130, ' VICRYL NO. 3/0 W 9571', 0, ''),
(1131, ' VICRYL NO. 3/0 W 9940', 0, ''),
(1132, ' VIO NO. 0 V11', 0, ''),
(1133, ' VIO NO. 1 V41', 0, ''),
(1134, ' WING NEADLE NO. 19', 0, ''),
(1135, ' WING NEADLE NO. 21', 0, ''),
(1136, ' WING NEADLE NO. 23', 0, ''),
(1137, ' WING NEADLE NO. 25', 0, ''),
(1138, ' WING NEADLE NO. 27', 0, ''),
(1139, ' WWZ', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `m_obtsup`
--

CREATE TABLE IF NOT EXISTS `m_obtsup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_obtsup`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_opr`
--

CREATE TABLE IF NOT EXISTS `m_opr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `oprl` text NOT NULL,
  `sktl` text NOT NULL,
  `tglob` text NOT NULL,
  `jmob` text NOT NULL,
  `dok` text NOT NULL,
  `lapor` text NOT NULL,
  `tgllapor` text NOT NULL,
  `jmlapor` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_opr`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_pasien`
--

CREATE TABLE IF NOT EXISTS `m_pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrg` int(11) NOT NULL,
  `idpas` varchar(255) NOT NULL,
  `id_asuransi` int(11) NOT NULL,
  `nama` text NOT NULL,
  `umur` text NOT NULL,
  `norm` text NOT NULL,
  `ktp` text NOT NULL,
  `ker` text NOT NULL,
  `namaker` text NOT NULL,
  `sex` text NOT NULL,
  `tgllhr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_pasien`
--

INSERT INTO `m_pasien` (`id`, `idrg`, `idpas`, `id_asuransi`, `nama`, `umur`, `norm`, `ktp`, `ker`, `namaker`, `sex`, `tgllhr`) VALUES
(3, 5, '1032011', 3, 'Risa', '23', '5', '232', 'Bentoel', 'sasdsa', 'Perempuan', '1-1-23'),
(4, 5, '2032011', 3, 'Mardiah', '23', '5', '232', 'BNI', 'sasdsa', 'Perempuan', '1-1-23'),
(5, 4, '3032011', 3, 'Mardiah P', '24', '4', '12345', 'guru', 'jl surabaya', 'Laki-laki', '1-1-'),
(6, 4, '122011', 3, 'Septi', '', '4', '', 'Indomarco', '', 'Laki-laki', '1-1-'),
(7, 4, '1112011', 0, 'Lina', '', '4', '', 'SPG', '', 'Laki-laki', '1-1-'),
(8, 6, '1052011', 3, 'Rita', '23', '4', '', 'Swasta', '', 'Perempuan', '1-1-'),
(9, 4, '1042011', 0, 'Amanda', '', '', '', '', '', 'Laki-laki', '1-1-'),
(10, 4, '204201101', 0, 'Ananda', '', '', '', '', '', 'Laki-laki', '1-1-'),
(11, 4, '3042011', 0, 'aku', '', '', '', '', '', 'Laki-laki', '1-1-');

-- --------------------------------------------------------

--
-- Table structure for table `m_pasienalm`
--

CREATE TABLE IF NOT EXISTS `m_pasienalm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `alm` text NOT NULL,
  `rt` text NOT NULL,
  `rw` text NOT NULL,
  `lurah` text NOT NULL,
  `kec` text NOT NULL,
  `kota` text NOT NULL,
  `telp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_pasienalm`
--

INSERT INTO `m_pasienalm` (`id`, `idpas`, `alm`, `rt`, `rw`, `lurah`, `kec`, `kota`, `telp`) VALUES
(3, '1032011', 's', '2', '2', 'awa', 'as', 'as', 'as'),
(4, '2032011', 's', '2', '2', 'awa', 'as', 'as', 'as'),
(5, '3032011', 'dasda', '1', '1', 'klojen', 'klo', 'malang', '161611'),
(6, '122011', 'dsad', '', '', '', '', '', ''),
(7, '1112011', 'dasda', '', '', '', '', '', ''),
(8, '1052011', 'dasdsa', '1', '1', 'klojen', 'klojen', 'malang', '54667'),
(9, '1042011', 'malang', '', '', '', '', '', ''),
(10, '204201101', 'Junrejo', '', '', '', '', '', ''),
(11, '3042011', 'asdasd', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_pasienby`
--

CREATE TABLE IF NOT EXISTS `m_pasienby` (
  `idby` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `id_by` varchar(255) NOT NULL,
  `idrg` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `ket1` varchar(255) NOT NULL,
  `ket2` varchar(255) NOT NULL,
  PRIMARY KEY (`idby`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_pasienby`
--

INSERT INTO `m_pasienby` (`idby`, `idpas`, `id_by`, `idrg`, `nama`, `tgl`, `jk`, `ket1`, `ket2`) VALUES
(1, '1032011', '1032011102', 10, 'An. Meilana R', '04-02-2012', 'Perempuan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_pasiendet`
--

CREATE TABLE IF NOT EXISTS `m_pasiendet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `pend` text NOT NULL,
  `agama` text NOT NULL,
  `kawin` text NOT NULL,
  `wn` text NOT NULL,
  `kasus` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_pasiendet`
--

INSERT INTO `m_pasiendet` (`id`, `idpas`, `pend`, `agama`, `kawin`, `wn`, `kasus`) VALUES
(3, '1032011', 'Akademik', 'asda', 'Kawin', 'WNI', 'tidak'),
(4, '2032011', 'Akademik', 'asda', 'Kawin', 'WNI', 'tidak'),
(5, '3032011', 'SD', '', 'Kawin', 'WNI', 'ya'),
(6, '122011', 'SD', '', 'Kawin', 'WNI', 'ya'),
(7, '1112011', 'SD', '', 'Kawin', 'WNI', 'ya'),
(8, '1052011', 'SD', 'islam', 'Kawin', 'WNI', 'ya'),
(9, '1042011', 'SD', '', 'Kawin', 'WNI', 'ya'),
(10, '204201101', 'SD', '', 'Kawin', 'WNI', 'ya'),
(11, '3042011', 'SD', '', 'Kawin', 'WNI', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `m_pasiendiag`
--

CREATE TABLE IF NOT EXISTS `m_pasiendiag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `diagawal` text NOT NULL,
  `diagakh` text NOT NULL,
  `diagsec` text NOT NULL,
  `kpl` text NOT NULL,
  `oprtgl` text NOT NULL,
  `icd` text NOT NULL,
  `hsl` text NOT NULL,
  `crklr` text NOT NULL,
  `nm_rs` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_pasiendiag`
--

INSERT INTO `m_pasiendiag` (`id`, `idpas`, `diagawal`, `diagakh`, `diagsec`, `kpl`, `oprtgl`, `icd`, `hsl`, `crklr`, `nm_rs`) VALUES
(3, '1032011', 'asas', 'das', 'asd', '2', '', '2', 'Sembuh', 'Dirujuk ke RS', 'was'),
(4, '2032011', 'asas', 'das', 'asd', '2', '23423234', '2', 'Sembuh', 'Dirujuk ke RS', 'was'),
(5, '3032011', '', '', '', '', '', '', 'Sembuh', '', ''),
(6, '122011', '', '', '', '', '', '', 'Sembuh', '', ''),
(7, '1112011', '', '', '', '', '', '', 'Sembuh', '', ''),
(8, '1052011', '', '', '', '', '', '', 'Sembuh', '', ''),
(9, '1042011', '', '', '', '', '', '', '', '', ''),
(10, '204201101', '', '', '', '', '', '', '', '', ''),
(11, '3042011', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_pasienket`
--

CREATE TABLE IF NOT EXISTS `m_pasienket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `rujuk` text NOT NULL,
  `rawat` text NOT NULL,
  `petugas` text NOT NULL,
  `perawat` text NOT NULL,
  `dokter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_pasienket`
--

INSERT INTO `m_pasienket` (`id`, `idpas`, `rujuk`, `rawat`, `petugas`, `perawat`, `dokter`) VALUES
(3, '1032011', 'ass', 'asa', 'asas', 'asas', 'dasasd'),
(4, '2032011', 'jina', 'asa', 'asas', 'asas', 'Dr Rita'),
(5, '3032011', '', '', '', '', ''),
(6, '122011', '', '', '', '', ''),
(7, '1112011', '', '', '', '', ''),
(8, '1052011', '', '', '', '', ''),
(9, '1042011', '', '', '', '', ''),
(10, '204201101', '', '', '', '', ''),
(11, '3042011', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_pasienplg`
--

CREATE TABLE IF NOT EXISTS `m_pasienplg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `ortu` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alm` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `ortuttd` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_pasienplg`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_pasiensw`
--

CREATE TABLE IF NOT EXISTS `m_pasiensw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `nmsw` text NOT NULL,
  `umursw` text NOT NULL,
  `almsw` text NOT NULL,
  `kersw` text NOT NULL,
  `penddsw` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_pasiensw`
--

INSERT INTO `m_pasiensw` (`id`, `idpas`, `nmsw`, `umursw`, `almsw`, `kersw`, `penddsw`) VALUES
(3, '1032011', 'assa', '2', 'asa', 'asas', 'Universitas'),
(4, '2032011', 'Joko', '2', 'asa', 'asas', 'Universitas'),
(5, '3032011', '', '', '', '', 'SD'),
(6, '122011', '', '', '', '', 'SD'),
(7, '1112011', '', '', '', '', 'SD'),
(8, '1052011', '', '', '', '', 'SD'),
(9, '1042011', '', '', '', '', 'SD'),
(10, '204201101', '', '', '', '', 'SD'),
(11, '3042011', '', '', '', '', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `m_pasientgg`
--

CREATE TABLE IF NOT EXISTS `m_pasientgg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `alm` text NOT NULL,
  `rt` text NOT NULL,
  `rw` text NOT NULL,
  `lurah` text NOT NULL,
  `kec` text NOT NULL,
  `kota` text NOT NULL,
  `telp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `m_pasientgg`
--

INSERT INTO `m_pasientgg` (`id`, `idpas`, `nama`, `alm`, `rt`, `rw`, `lurah`, `kec`, `kota`, `telp`) VALUES
(3, '1032011', 'as', 'asa', '2', '2', 'as', 's', 'as', 's'),
(4, '2032011', 'as', 'asa', '2', '2', 'as', 's', 'as', 's'),
(5, '3032011', '', '', '', '', '', '', '', ''),
(6, '122011', '', '', '', '', '', '', '', ''),
(7, '1112011', '', '', '', '', '', '', '', ''),
(8, '1052011', 'qq', 'qq', 'q', '', 'q', 'q', 'q', 'q'),
(9, '1042011', '', '', '', '', '', '', '', ''),
(10, '204201101', '', '', '', '', '', '', '', ''),
(11, '3042011', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_poliabs`
--

CREATE TABLE IF NOT EXISTS `m_poliabs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id2` varchar(255) NOT NULL,
  `idpas` varchar(255) NOT NULL,
  `tglmsk` varchar(255) NOT NULL,
  `blnmsk` varchar(255) NOT NULL,
  `thnmsk` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `m_poliabs`
--

INSERT INTO `m_poliabs` (`id`, `id2`, `idpas`, `tglmsk`, `blnmsk`, `thnmsk`) VALUES
(1, '1', '107201105', '20', '07', '2011'),
(2, '2', '207201105', '20', '07', '2011'),
(3, '3', '307201105', '27', '07', '2011'),
(4, '4', '407201105', '27', '07', '2011'),
(5, '5', '507201105', '28', '07', '2011'),
(6, '1', '112201105', '02', '12', '2011'),
(7, '2', '212201105', '02', '12', '2011'),
(8, '3', '312201105', '02', '12', '2011'),
(9, '4', '412201105', '02', '12', '2011'),
(10, '5', '512201105', '02', '12', '2011'),
(11, '6', '612201105', '02', '12', '2011'),
(12, '7', '712201105', '02', '12', '2011'),
(13, '8', '812201105', '02', '12', '2011'),
(14, '9', '912201105', '02', '12', '2011'),
(15, '10', '1012201105', '02', '12', '2011'),
(16, '10', '1012201105', '02', '12', '2011'),
(17, '10', '1012201105', '02', '12', '2011'),
(18, '10', '1012201105', '02', '12', '2011'),
(19, '10', '1012201105', '02', '12', '2011'),
(20, '10', '1012201105', '02', '12', '2011'),
(21, '10', '1012201105', '02', '12', '2011'),
(22, '10', '1012201105', '02', '12', '2011'),
(23, '10', '1012201105', '02', '12', '2011'),
(24, '10', '1012201105', '02', '12', '2011'),
(25, '10', '1012201105', '02', '12', '2011'),
(26, '10', '1012201105', '02', '12', '2011'),
(27, '10', '1012201105', '10', '12', '2011');

-- --------------------------------------------------------

--
-- Table structure for table `m_poliantri`
--

CREATE TABLE IF NOT EXISTS `m_poliantri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(255) NOT NULL,
  `idpas` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  `thn` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `m_poliantri`
--

INSERT INTO `m_poliantri` (`id`, `no`, `idpas`, `date`, `tgl`, `bln`, `thn`, `status`) VALUES
(1, '1', '107201105', '2011-07-20', '20', '07', '11', 'Belum'),
(2, '1', '307201105', '2011-07-27', '27', '07', '11', 'Belum'),
(3, '1', '407201105', '2011-07-27', '27', '07', '11', 'Belum'),
(4, '1', '507201105', '2011-07-28', '28', '07', '11', 'Sudah'),
(5, '2', '107201105', '2011-07-28', '28', '07', '11', 'Belum'),
(6, '1', '407201105', '2011-08-02', '02', '08', '11', 'Sudah'),
(7, '1', '1012201105', '2011-12-02', '02', '12', '11', 'Belum'),
(8, '1', '1012201105', '2011-12-10', '10', '12', '11', 'Belum'),
(9, '2', '107201105', '2011-12-10', '10', '12', '11', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `m_polidiagnosa`
--

CREATE TABLE IF NOT EXISTS `m_polidiagnosa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `resep` varchar(255) NOT NULL,
  `sresep` int(11) NOT NULL,
  `icd` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_polidiagnosa`
--

INSERT INTO `m_polidiagnosa` (`id`, `idpas`, `diagnosa`, `resep`, `sresep`, `icd`, `tgl`) VALUES
(3, '507201105', 'asdasd', 'asdasd<br>assdads<br>adsdas<br>sasdd', 1, 0, '28-07-2011'),
(4, '407201105', 'dsad', 'sda', 1, 0, '02-08-2011');

-- --------------------------------------------------------

--
-- Table structure for table `m_polidok`
--

CREATE TABLE IF NOT EXISTS `m_polidok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_polidok`
--

INSERT INTO `m_polidok` (`id`, `harga`) VALUES
(1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `m_poliobt`
--

CREATE TABLE IF NOT EXISTS `m_poliobt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idresep` varchar(255) NOT NULL,
  `obat` varchar(255) NOT NULL,
  `jml` float NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `m_poliobt`
--

INSERT INTO `m_poliobt` (`id`, `idresep`, `obat`, `jml`, `harga`, `status`) VALUES
(5, '3', ' ACRAN INJEKSI', 5, 6500, 0),
(6, '4', ' ACYCLOVIR 400 MG TAB', 2, 20020, 0),
(7, '4', ' ACRAN INJEKSI', 5, 6500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_poliobts`
--

CREATE TABLE IF NOT EXISTS `m_poliobts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idresep` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `m_poliobts`
--

INSERT INTO `m_poliobts` (`id`, `idresep`, `status`) VALUES
(4, 3, 1),
(5, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_polipas`
--

CREATE TABLE IF NOT EXISTS `m_polipas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `norm` varchar(255) NOT NULL,
  `tgllhr` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `swm` varchar(255) NOT NULL,
  `umurswm` varchar(255) NOT NULL,
  `kerswm` varchar(255) NOT NULL,
  `alm` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `kary` int(11) NOT NULL,
  `hub` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `m_polipas`
--

INSERT INTO `m_polipas` (`id`, `idpas`, `nama`, `norm`, `tgllhr`, `umur`, `jk`, `agama`, `swm`, `umurswm`, `kerswm`, `alm`, `rt`, `kec`, `kota`, `telp`, `kary`, `hub`) VALUES
(1, '107201105', 'as', 'sda', '1-1-asd', '2011', 'Laki-laki', '', 'asd', 'sad', 'dsa', 'sa', 'asd-sa', 'sad', 'sad', 'sad', 0, ''),
(2, '207201105', 'ss', 'ss', '1-1-sss', '2011', 'Laki-laki', '', 'sddsds', 'sd', 'ds', 'ds', 'ds-sd', 'ds', 'sd', 'ds', 0, ''),
(3, '307201105', 's', 's', '1-1-s', '2011', 'Laki-laki', '', 's', 's', 's', 's', 's-s', 's', 's', 's', 0, ''),
(4, '407201105', 'a', 'a', '1-1-a', '2011', 'Laki-laki', '', 'a', 'a', 'a', 'a', 'a-a', 'a', 'a', 'a', 0, ''),
(5, '507201105', 'reer', '111', '1-1-a', '2011', 'Laki-laki', '', 're', 're', 're', 're', 're-re', 're', 're', 're', 0, ''),
(6, '1012201105', 'asdsa', '2ee2', '1-1-212342', '-210331', 'Laki-laki', '', 'dsa', 'dsa', 'ads', 'ads', '12-1', 'dsa', 'ads', '2113', 0, ''),
(7, '1012201105', 'asdsa', '2ee2', '1-1-212342', '-210331', 'Laki-laki', '', 'dsa', 'dsa', 'ads', 'ads', '12-1', 'dsa', 'ads', '2113', 0, ''),
(8, '1012201105', 'das', '2131', '1-1-532', '1479', 'Laki-laki', '', 'das', 'das', 'das', 'das', '1-1', 'das', 'dsa', '12321', 0, ''),
(9, '1012201105', 'sadas', '43243', '1-1-45234', '-43223', 'Laki-laki', '', 'das', 'das', 'dsa', 'dsa', '12-1', 'da', 'ads', '211', 1, 'Keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `m_poliresep`
--

CREATE TABLE IF NOT EXISTS `m_poliresep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idresep` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_poliresep`
--

INSERT INTO `m_poliresep` (`id`, `idresep`, `total`) VALUES
(1, 0, ''),
(2, 0, ''),
(3, 1, '100000');

-- --------------------------------------------------------

--
-- Table structure for table `m_polistruk`
--

CREATE TABLE IF NOT EXISTS `m_polistruk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idresep` int(11) NOT NULL,
  `tiket` int(11) NOT NULL,
  `dokter` int(11) NOT NULL,
  `obat` int(11) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_polistruk`
--

INSERT INTO `m_polistruk` (`id`, `idresep`, `tiket`, `dokter`, `obat`, `total`) VALUES
(1, 4, 1000, 1000, 26520, 28520),
(2, 4, 1000, 1000, 26520, 28520),
(3, 4, 1000, 1000, 26520, 28520),
(4, 4, 1000, 1000, 26520, 28520);

-- --------------------------------------------------------

--
-- Table structure for table `m_politensi`
--

CREATE TABLE IF NOT EXISTS `m_politensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `bb` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `tensi` varchar(255) NOT NULL,
  `keluhan` text NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_politensi`
--

INSERT INTO `m_politensi` (`id`, `idpas`, `tgl`, `bb`, `suhu`, `tensi`, `keluhan`, `ket`) VALUES
(1, '507201105', '28-07-2011', 're', '', 're', 're', 're'),
(2, '107201105', '28-07-2011', '2', '', '22', 'ads', 'ads'),
(3, '407201105', '02-08-2011', 'a', '', 'a', 'asd', 'dsas');

-- --------------------------------------------------------

--
-- Table structure for table `m_politiket`
--

CREATE TABLE IF NOT EXISTS `m_politiket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_politiket`
--

INSERT INTO `m_politiket` (`id`, `harga`) VALUES
(1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `m_rek`
--

CREATE TABLE IF NOT EXISTS `m_rek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `m_rek`
--

INSERT INTO `m_rek` (`id`, `no`, `sub`, `status`) VALUES
(1, 'IA', 'Perawatan Dewasa', 'Pendapatan'),
(2, 'IB', 'Perawatan Bayi Sehat', 'Pendapatan'),
(3, 'IC', 'Perawatan Anak/Bayi Sakit', 'Pendapatan'),
(4, 'ID', 'Perawatan Khusus', 'Pendapatan'),
(5, 'II', 'Rawat Jalan', 'Pendapatan'),
(6, 'IIIA', 'Honor Asisten', 'Pendapatan'),
(7, 'IIIB', 'Honor Dokter', 'Pendapatan'),
(8, 'IVA', 'Obat/Alkes Dewasa', 'Pendapatan'),
(9, 'IVB', 'Obat/Alkes Anak', 'Pendapatan'),
(10, 'IVC', 'Kamar Operasi', 'Pendapatan'),
(11, 'IVD', 'Poliklinik', 'Pendapatan'),
(12, 'V', 'Laboratorium', 'Pendapatan'),
(13, 'VI', 'KM. Tindakan', 'Pendapatan'),
(14, 'VII', 'Gaji', 'Pendapatan'),
(15, 'VIII', 'Adm/Rehabilitasi', 'Pendapatan'),
(16, 'IX', 'Lain-lain', 'Pendapatan');

-- --------------------------------------------------------

--
-- Table structure for table `m_rekdpt`
--

CREATE TABLE IF NOT EXISTS `m_rekdpt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsub` varchar(30) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_rekdpt`
--

INSERT INTO `m_rekdpt` (`id`, `idsub`, `norek`, `satuan`, `total`, `ket`, `tanggal`, `bln`, `status`) VALUES
(1, 'IA', '100', 'pack', 2000000, 'perban', '2011-11-30', '11-2011', 'Published'),
(2, 'IB', '108', 'pack', 20000, 'jarum suntik A', '2011-11-31', '11-2011', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `m_rekdpttemp`
--

CREATE TABLE IF NOT EXISTS `m_rekdpttemp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `norek` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_rekdpttemp`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_rekklr`
--

CREATE TABLE IF NOT EXISTS `m_rekklr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsub` varchar(30) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_rekklr`
--

INSERT INTO `m_rekklr` (`id`, `idsub`, `norek`, `satuan`, `total`, `ket`, `tanggal`, `bln`, `status`) VALUES
(2, 'KI', '1000', '100 kilo', 550000, '100 kilo berasa', '2011-11-02', '11-2011', 'Published'),
(3, 'KIID', '2010', '10 liter', 500000, 'premium', '2011-11-02', '11-2011', 'Published'),
(4, 'KIIB', '2002', '2pack', 100000, 'bolpen', '2011-11-03', '11-2011', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `m_rekklrtmp`
--

CREATE TABLE IF NOT EXISTS `m_rekklrtmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `norek` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_rekklrtmp`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_reksub`
--

CREATE TABLE IF NOT EXISTS `m_reksub` (
  `idrek` int(11) NOT NULL AUTO_INCREMENT,
  `idsub` varchar(255) NOT NULL,
  `namasub` varchar(100) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`idrek`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `m_reksub`
--

INSERT INTO `m_reksub` (`idrek`, `idsub`, `namasub`, `norek`, `nama`, `status`) VALUES
(2, 'IA', 'A. Dewasa', '100', 'Perwt. Klas IA', 'Pendapatan'),
(3, 'IA', 'A. Dewasa', '101', 'Perwt. Klas IB', 'Pendapatan'),
(4, 'IA', 'A. Dewasa', '102', 'Perwt. Klas II', 'Pendapatan'),
(5, 'IA', 'A. Dewasa', '103', 'Perwt. Klas IIIA', 'Pendapatan'),
(6, 'IA', 'A. Dewasa', '104', 'Perwt. Klas IIIB', 'Pendapatan'),
(7, 'IB', 'B. Bayi Sehat', '105', 'Perwt. Klas IA', 'Pendapatan'),
(8, 'IB', 'B. Bayi Sehat', '106', 'Perwt. Klas IB', 'Pendapatan'),
(9, 'IB', 'B. Bayi Sehat', '107', 'Perwt. Klas II', 'Pendapatan'),
(10, 'IB', 'B. Bayi Sehat', '108', 'Perwt. Klas IIIA', 'Pendapatan'),
(11, 'IB', 'B. Bayi Sehat', '109', 'Perwt. Klas IIIB', 'Pendapatan'),
(12, 'IC', 'C. Anak/Bayi Sakit', '110', 'Perwt. Klas IA', 'Pendapatan'),
(13, 'IC', 'C. Anak/Bayi Sakit', '111', 'Perwt. Klas IB', 'Pendapatan'),
(14, 'IC', 'C. Anak/Bayi Sakit', '112', 'Perwt. Klas II', 'Pendapatan'),
(15, 'IC', 'C. Anak/Bayi Sakit', '113', 'Perwt. Klas IIIA', 'Pendapatan'),
(16, 'IC', 'C. Anak/Bayi Sakit', '114', 'Perwt. Klas IIIB', 'Pendapatan'),
(17, 'ID', 'D. Khusus', '115', 'Perwt. Khusus', 'Pendapatan'),
(18, 'II', 'II Rawat Jalan', '200', 'Karcis', 'Pendapatan'),
(19, 'IIIA', 'A. Honor Asisten', '300', 'Asisten Operasi', 'Pendapatan'),
(20, 'IIIB', 'B. Honor Dokter', '302', 'Dokter Sp. OG', 'Pendapatan'),
(21, 'IIIC', 'C. Lainnya', '307', 'Sumbangan 10%', 'Pendapatan'),
(22, 'IVA', 'A. Dewasa', '400', 'Obat', 'Pendapatan'),
(23, 'IVB', 'B. Anak', '402', 'Obat', 'Pendapatan'),
(24, 'IVC', 'C. Kamar Operasi', '404', 'Obat', 'Pendapatan'),
(25, 'IVD', 'D. Poliklinik', '406', 'Obat', 'Pendapatan'),
(26, 'V', 'V Laboratorium', '500', 'Pemeriksaan Lab', 'Pendapatan'),
(27, 'VI', 'VI KM. Tindakan', '600', 'Kaber', 'Pendapatan'),
(28, 'VII', 'VII Gaji', '700', 'Astek', 'Pendapatan'),
(29, 'VIII', 'VIII Adm/Rehabilitasi', '800', 'Administrasi', 'Pendapatan'),
(30, 'IX', 'IX Lainnya', '902', 'Asrama', 'Pendapatan'),
(31, 'KI', 'Instalasi Gizi', '1000', 'Beras', 'Pengeluaran'),
(32, 'KIIA', 'IIA Inventaris', '2000', 'Medis', 'Pengeluaran'),
(33, 'KIIB', 'IIB Habis Pakai', '2002', 'ATK', 'Pengeluaran'),
(34, 'KIIC', 'IIC Perawatan', '2007', 'Inventaris', 'Pengeluaran'),
(35, 'KIID', 'IID Kendaraan', '2010', 'Premium/Olie', 'Pengeluaran'),
(36, 'KIIIA', 'IIIA Honor Asisten', '3000', 'Asisten Operasi', 'Pengeluaran'),
(37, 'KIIIB', 'IIIB Honor Dokter', '3002', 'Dokter Sp. OG', 'Pengeluaran'),
(38, 'KIIIC', 'IIIC Lainnya', '3006', 'PPh. Dokter 6%', 'Pengeluaran'),
(39, 'KIV', 'IV Obat/Alkes', '4000.a', 'Obat. A', 'Pengeluaran'),
(40, 'KV', 'V Laboratorium', '5000', 'Obat/Bahan/Alat', 'Pengeluaran'),
(41, 'KVI', 'VI KM. Tindakan', '6000', 'Alkes. Kaber', 'Pengeluaran'),
(42, 'KVII', 'VII Gaji', '7000', 'Astek', 'Pengeluaran'),
(43, 'KVIII', 'VIII Kegiatan', '8001', 'Pastoral', 'Pengeluaran'),
(44, 'KIX', 'IX Lainnya', '9004', 'PLN', 'Pengeluaran');

-- --------------------------------------------------------

--
-- Table structure for table `m_resume`
--

CREATE TABLE IF NOT EXISTS `m_resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` text NOT NULL,
  `dok` text NOT NULL,
  `diag1` text NOT NULL,
  `diag2` text NOT NULL,
  `opr` text NOT NULL,
  `rwy` text NOT NULL,
  `fsk` text NOT NULL,
  `lab` text NOT NULL,
  `perkemb` text NOT NULL,
  `kead` text NOT NULL,
  `lain` text NOT NULL,
  `tgl` text NOT NULL,
  `dok2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_resume`
--

INSERT INTO `m_resume` (`id`, `idpas`, `dok`, `diag1`, `diag2`, `opr`, `rwy`, `fsk`, `lab`, `perkemb`, `kead`, `lain`, `tgl`, `dok2`) VALUES
(1, '1052011', 'qe', 'qe', 'qe', 'qe', 'qe', 'qe', '		q\r\n	e', '		q\r\n	e', '		q\r\n	e', '		q\r\n	e', '', 'qe');

-- --------------------------------------------------------

--
-- Table structure for table `m_returobt`
--

CREATE TABLE IF NOT EXISTS `m_returobt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idobt` text NOT NULL,
  `retur` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `tglretur` varchar(255) NOT NULL,
  `tglkembali` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_returobt`
--

INSERT INTO `m_returobt` (`id`, `idobt`, `retur`, `kembali`, `tglretur`, `tglkembali`, `satuan`, `ket`) VALUES
(1, '2', 12, 10, '28-04-2011', '29-04-2011', 'biji', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_rjk`
--

CREATE TABLE IF NOT EXISTS `m_rjk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `kpd` varchar(255) NOT NULL,
  `di` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `diag` varchar(255) NOT NULL,
  `ana` varchar(255) NOT NULL,
  `prk` varchar(255) NOT NULL,
  `trp` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_rjk`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_rwyhml`
--

CREATE TABLE IF NOT EXISTS `m_rwyhml` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgllhr` text NOT NULL,
  `akhir` text NOT NULL,
  `salin` text NOT NULL,
  `sulit` text NOT NULL,
  `anak` text NOT NULL,
  `bb` varchar(255) NOT NULL,
  `lain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_rwyhml`
--

INSERT INTO `m_rwyhml` (`id`, `idpas`, `tgllhr`, `akhir`, `salin`, `sulit`, `anak`, `bb`, `lain`) VALUES
(1, '1052011', '1-1-2011', '1-1-2011', 'spontan', 'sulit', 'hidup', '', 'lainnya nihil'),
(2, '1052011', '1-1-2011w', '1-1-2011w', 'buatan', 'sulit w', 'mati', '', 'lainnya nihil woy');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin`
--

CREATE TABLE IF NOT EXISTS `m_salin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `krm` text NOT NULL,
  `keluhan` text NOT NULL,
  `idpas` varchar(255) NOT NULL,
  `tglhis` text NOT NULL,
  `jmhis` text NOT NULL,
  `drh` text NOT NULL,
  `drhtgl` text NOT NULL,
  `drhjm` text NOT NULL,
  `drhjml` text NOT NULL,
  `sadar` text NOT NULL,
  `kejang` text NOT NULL,
  `rejantgl` text NOT NULL,
  `rwht` text NOT NULL,
  `rujuk` text NOT NULL,
  `obt` text NOT NULL,
  `obt2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `m_salin`
--

INSERT INTO `m_salin` (`id`, `krm`, `keluhan`, `idpas`, `tglhis`, `jmhis`, `drh`, `drhtgl`, `drhjm`, `drhjml`, `sadar`, `kejang`, `rejantgl`, `rwht`, `rujuk`, `obt`, `obt2`) VALUES
(8, 'bidan', 'das', '1052011', 'asd', 'dsa', 'sda', 'da', 'dsa', 'sedikit', 'ada', 'ada', ' 12312321', 'perawat', 'dokter', 'ya', 'dsadsd'),
(7, 'bidan', 'das', '1052011', 'asd', 'dsa', 'sda', 'da', 'dsa', 'sedikit', 'ada', 'ada', ' 12312321', 'perawat', 'dokter', 'ya', 'dsadsd');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin2`
--

CREATE TABLE IF NOT EXISTS `m_salin2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `men` text NOT NULL,
  `siklus` text NOT NULL,
  `lm` text NOT NULL,
  `tglhaid` text NOT NULL,
  `tglsln` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `m_salin2`
--

INSERT INTO `m_salin2` (`id`, `idpas`, `men`, `siklus`, `lm`, `tglhaid`, `tglsln`) VALUES
(8, '1052011', '23', '2', '23', 'dsa', 'sad'),
(7, '1052011', '23', '2', '23', 'dsa', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin3`
--

CREATE TABLE IF NOT EXISTS `m_salin3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `kawin` text NOT NULL,
  `sejak` text NOT NULL,
  `umur` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `m_salin3`
--

INSERT INTO `m_salin3` (`id`, `idpas`, `kawin`, `sejak`, `umur`) VALUES
(8, '1052011', 'ads', 'sad', 'sad'),
(7, '1052011', 'ads', 'sad', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin4a`
--

CREATE TABLE IF NOT EXISTS `m_salin4a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `oprl` text NOT NULL,
  `sktl` text NOT NULL,
  `tglob` text NOT NULL,
  `jmob` text NOT NULL,
  `dok` text NOT NULL,
  `lapor` text NOT NULL,
  `tgllapor` text NOT NULL,
  `jmlapor` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salin4a`
--

INSERT INTO `m_salin4a` (`id`, `idpas`, `oprl`, `sktl`, `tglob`, `jmob`, `dok`, `lapor`, `tgllapor`, `jmlapor`) VALUES
(2, '1052011', 'qq', 'qq', 'q', 'q', 'q', 'tidak', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin4aa`
--

CREATE TABLE IF NOT EXISTS `m_salin4aa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tek1` text NOT NULL,
  `tek2` text NOT NULL,
  `suhu` text NOT NULL,
  `rektal` text NOT NULL,
  `hb` text NOT NULL,
  `bb` text NOT NULL,
  `oedema` text NOT NULL,
  `lain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salin4aa`
--

INSERT INTO `m_salin4aa` (`id`, `idpas`, `tek1`, `tek2`, `suhu`, `rektal`, `hb`, `bb`, `oedema`, `lain`) VALUES
(2, '1052011', 'qw', 'qw', 'qw', 'qw', 'qw', 'qw', 'qw', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin4b`
--

CREATE TABLE IF NOT EXISTS `m_salin4b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `uteri` text NOT NULL,
  `jns` text NOT NULL,
  `pres` text NOT NULL,
  `dpn` text NOT NULL,
  `pgg` text NOT NULL,
  `jtg` text NOT NULL,
  `panggul` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salin4b`
--

INSERT INTO `m_salin4b` (`id`, `idpas`, `uteri`, `jns`, `pres`, `dpn`, `pgg`, `jtg`, `panggul`) VALUES
(2, '1052011', 'qw', 'tunggal', 'qw', 'qw', 'qw', 'qw', 'qw');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin4c`
--

CREATE TABLE IF NOT EXISTS `m_salin4c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tgl_prkdlm` text NOT NULL,
  `jm_prkdlm` text NOT NULL,
  `klr` text NOT NULL,
  `vula` text NOT NULL,
  `portio` text NOT NULL,
  `portio2` text NOT NULL,
  `dpn2` text NOT NULL,
  `station` text NOT NULL,
  `orientasi` text NOT NULL,
  `orientasi2` text NOT NULL,
  `panggul2` text NOT NULL,
  `jlsdpn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salin4c`
--

INSERT INTO `m_salin4c` (`id`, `idpas`, `tgl_prkdlm`, `jm_prkdlm`, `klr`, `vula`, `portio`, `portio2`, `dpn2`, `station`, `orientasi`, `orientasi2`, `panggul2`, `jlsdpn`) VALUES
(2, '1052011', 'qw', 'qw', 'qw', 'qw', 'qw', 'qw', 'bokong', 'qw', 'u2b', 'qw', 'qw', 'qw');

-- --------------------------------------------------------

--
-- Table structure for table `m_salin4d`
--

CREATE TABLE IF NOT EXISTS `m_salin4d` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `gr` text NOT NULL,
  `para` text NOT NULL,
  `ab` text NOT NULL,
  `inpartu` text NOT NULL,
  `imartu` text NOT NULL,
  `kala` text NOT NULL,
  `fase` text NOT NULL,
  `kelainan` text NOT NULL,
  `rencana` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salin4d`
--

INSERT INTO `m_salin4d` (`id`, `idpas`, `gr`, `para`, `ab`, `inpartu`, `imartu`, `kala`, `fase`, `kelainan`, `rencana`) VALUES
(2, '1052011', 'qw', 'qw', 'qw', 'inpartu', 'prematur', 'qw', 'qw', 'qw', '			qw	\r\n	\r\n	\r\n	');

-- --------------------------------------------------------

--
-- Table structure for table `m_salinlap`
--

CREATE TABLE IF NOT EXISTS `m_salinlap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `bidan` text NOT NULL,
  `dok` text NOT NULL,
  `oleh` text NOT NULL,
  `tgl` text NOT NULL,
  `jm` text NOT NULL,
  `tgl2` text NOT NULL,
  `his` text NOT NULL,
  `bja` text NOT NULL,
  `tensi` text NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_salinlap`
--

INSERT INTO `m_salinlap` (`id`, `idpas`, `bidan`, `dok`, `oleh`, `tgl`, `jm`, `tgl2`, `his`, `bja`, `tensi`, `ket`) VALUES
(1, '1052011', 'cc', 'cc', 'cc', 'cc', '', 'cc', 'cc', 'cc', 'cc', 'cc'),
(3, '1052011', 'b', 'b', 'b', 'b', '', 'b', 'b', 'b', 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `m_salinlap2`
--

CREATE TABLE IF NOT EXISTS `m_salinlap2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `pch` text NOT NULL,
  `tglpch` text NOT NULL,
  `jampch` text NOT NULL,
  `pd` text NOT NULL,
  `pch2` text NOT NULL,
  `indik` text NOT NULL,
  `tgl2` text NOT NULL,
  `jm2` text NOT NULL,
  `pd2` text NOT NULL,
  `jns` text NOT NULL,
  `induk` text NOT NULL,
  `pres` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salinlap2`
--

INSERT INTO `m_salinlap2` (`id`, `idpas`, `pch`, `tglpch`, `jampch`, `pd`, `pch2`, `indik`, `tgl2`, `jm2`, `pd2`, `jns`, `induk`, `pres`) VALUES
(2, '1052011', 'ya', 'ab', 'ab', 'ab', 'amniotimi', 'ab', 'ab', 'ab', 'ab', 'spontan', 'Oxyt drip', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `m_salinlap3`
--

CREATE TABLE IF NOT EXISTS `m_salinlap3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `ruptura` text NOT NULL,
  `tk` text NOT NULL,
  `obt` text NOT NULL,
  `epis` text NOT NULL,
  `obt2` text NOT NULL,
  `lhr` text NOT NULL,
  `indik2` text NOT NULL,
  `indik3` text NOT NULL,
  `bius` text NOT NULL,
  `bius2` text NOT NULL,
  `bius3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salinlap3`
--

INSERT INTO `m_salinlap3` (`id`, `idpas`, `ruptura`, `tk`, `obt`, `epis`, `obt2`, `lhr`, `indik2`, `indik3`, `bius`, `bius2`, `bius3`) VALUES
(2, '1052011', 'tidak', 'II', 'ab', 'medio lateralki-ka', 'ab', 'buatan', 'ab', 'a', 'tidak', 'umum', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `m_salinlap4`
--

CREATE TABLE IF NOT EXISTS `m_salinlap4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `sulit` text NOT NULL,
  `lm` text NOT NULL,
  `drh` text NOT NULL,
  `infus` text NOT NULL,
  `ket` text NOT NULL,
  `obt3` text NOT NULL,
  `lain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salinlap4`
--

INSERT INTO `m_salinlap4` (`id`, `idpas`, `sulit`, `lm`, `drh`, `infus`, `ket`, `obt3`, `lain`) VALUES
(2, '1052011', 'sekunder (penyebab lain di luar persalinan)', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `m_salinlap5`
--

CREATE TABLE IF NOT EXISTS `m_salinlap5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `tglklr` text NOT NULL,
  `kead` text NOT NULL,
  `tensi` text NOT NULL,
  `hb` text NOT NULL,
  `pykr` text NOT NULL,
  `pykn` text NOT NULL,
  `uteri` text NOT NULL,
  `konst` text NOT NULL,
  `loch` text NOT NULL,
  `pari` text NOT NULL,
  `lain2` text NOT NULL,
  `diag` text NOT NULL,
  `obt4` text NOT NULL,
  `dok` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_salinlap5`
--

INSERT INTO `m_salinlap5` (`id`, `idpas`, `tglklr`, `kead`, `tensi`, `hb`, `pykr`, `pykn`, `uteri`, `konst`, `loch`, `pari`, `lain2`, `diag`, `obt4`, `dok`) VALUES
(2, '1052011', 'ab', 'a', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `m_sbbmt`
--

CREATE TABLE IF NOT EXISTS `m_sbbmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `skt` text NOT NULL,
  `sbb` text NOT NULL,
  `lm` text NOT NULL,
  `sktb` text NOT NULL,
  `sbbb` text NOT NULL,
  `lmb` text NOT NULL,
  `sbbc` text NOT NULL,
  `lmc` text NOT NULL,
  `sktd` text NOT NULL,
  `skte` text NOT NULL,
  `lmd` text NOT NULL,
  `lme` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_sbbmt`
--

INSERT INTO `m_sbbmt` (`id`, `idpas`, `skt`, `sbb`, `lm`, `sktb`, `sbbb`, `lmb`, `sbbc`, `lmc`, `sktd`, `skte`, `lmd`, `lme`) VALUES
(1, '1052011', 'reer', 'sbb', 'reer', 'reerer', '', 'reer', 'reer', 'reer', 're', 're', 'er', 'er');

-- --------------------------------------------------------

--
-- Table structure for table `m_sbbmt2`
--

CREATE TABLE IF NOT EXISTS `m_sbbmt2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `mcm` text NOT NULL,
  `kej` text NOT NULL,
  `sft` text NOT NULL,
  `mcm2` text NOT NULL,
  `sbb2` text NOT NULL,
  `mcm3` text NOT NULL,
  `mcm4` text NOT NULL,
  `opr` text NOT NULL,
  `oprjns` text NOT NULL,
  `tgl` text NOT NULL,
  `dok` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_sbbmt2`
--

INSERT INTO `m_sbbmt2` (`id`, `idpas`, `mcm`, `kej`, `sft`, `mcm2`, `sbb2`, `mcm3`, `mcm4`, `opr`, `oprjns`, `tgl`, `dok`) VALUES
(1, '1052011', 'Pembunuhan', 're', 're', 'tidak', 'rer', 'ya', 'tidak', 'ya', 'rere', '12-03-2011', 'Dr. Soewarno h');

-- --------------------------------------------------------

--
-- Table structure for table `m_setuju`
--

CREATE TABLE IF NOT EXISTS `m_setuju` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `kel` text NOT NULL,
  `kellain` text NOT NULL,
  `diag` text NOT NULL,
  `medik` text NOT NULL,
  `nama` text NOT NULL,
  `umur` text NOT NULL,
  `tgl` text NOT NULL,
  `dok` text NOT NULL,
  `pasien` text NOT NULL,
  `bidan` text NOT NULL,
  `kel2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_setuju`
--

INSERT INTO `m_setuju` (`id`, `idpas`, `kel`, `kellain`, `diag`, `medik`, `nama`, `umur`, `tgl`, `dok`, `pasien`, `bidan`, `kel2`) VALUES
(1, '1052011', 'KELUARGA TERDEKAT PASIEN', 'Ibu', 'ab', 'ab', 'ab', 'ab', '15-03-2011 , 06:40', 'ab', 'ab', 'ab', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `m_srtmt`
--

CREATE TABLE IF NOT EXISTS `m_srtmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `mayat` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `umur1` varchar(255) NOT NULL,
  `alm` varchar(255) NOT NULL,
  `jm` varchar(255) NOT NULL,
  `wkt` varchar(255) NOT NULL,
  `tgl2` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_srtmt`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_tolak`
--

CREATE TABLE IF NOT EXISTS `m_tolak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpas` varchar(255) NOT NULL,
  `kel` text NOT NULL,
  `kellain` text NOT NULL,
  `diag` text NOT NULL,
  `medik` text NOT NULL,
  `nama` text NOT NULL,
  `umur` text NOT NULL,
  `tgl` text NOT NULL,
  `dok` text NOT NULL,
  `pasien` text NOT NULL,
  `bidan` text NOT NULL,
  `kel2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_tolak`
--

INSERT INTO `m_tolak` (`id`, `idpas`, `kel`, `kellain`, `diag`, `medik`, `nama`, `umur`, `tgl`, `dok`, `pasien`, `bidan`, `kel2`) VALUES
(1, '1052011', 'PASIEN', 'Ayah', 'av', 'av', 'av', 'av', '16-03-2011 , 03:56', 'av', 'av', 'av', 'av');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE IF NOT EXISTS `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `pass1` text NOT NULL,
  `unit` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id`, `nama`, `user`, `pass`, `pass1`, `unit`) VALUES
(2, 'Kaber', 'keber', '48af6c7e5bd30eb91a4bc859a0f5a5062', 'keber', 'Kamar Bersalin'),
(1, 'Rihanna', 'hanna', '300bf52dd231262bc2b99237e727246d1', 'hanna', 'Direktur/ Wakil Direktur'),
(3, 'yayasan', 'yayasan', 'f6cec6089689fae8789cd2e64c4eeb6a3', 'yayasan', 'Yayasan Kesehatan (YK)'),
(4, 'Komar Sugeng W', 'komar', '9a362a91b4de4a313bed73647479200c4', 'komar', 'Kamar Obat'),
(5, 'Komar ', 'komar', '9a362a91b4de4a313bed73647479200c5', 'komar', 'Kamar Anak'),
(6, 'Kamara Gilda', 'kamara', 'f52740404fe2af8f8a210dd80ce58af56', 'kamara', 'Kamar Anak'),
(7, 'Rumbi A', 'rumbi', 'bb7e64c44a04c6aabd51543dd6cfdf167', 'rumbi', 'Kamar Bayi'),
(8, 'receppoli', 'receppoli', '3183ce9d97e5b425f4521cfa83c1f8da8', 'receppoli', 'Poli Receptionist'),
(9, 'drpoli', 'drpoli', '5e64ab1528c5e3338db447c0a46302e09', 'drpoli', 'Poli Dokter'),
(10, 'obpoli', 'obpoli', '409af86b6a9e41383543b5c2c60e48f510', 'obpoli', 'Poli Obat'),
(11, 'Sugiarto', 'sugiarto', '0bc775ccefb20078bb0e964ebac8848e11', 'sugiarto', 'Bag Keuangan'),
(12, 'martina', 'martina', 'a32afbe54e4fbab0c8c44c01f5b9079212', 'martina', 'Keuangan'),
(13, 'poli', 'poli', '0a89c133d3906c8bebbfe3cbf159847613', 'poli', 'Poli Ibu Anak'),
(14, 'Mrs Recept', 'recep', '746035f8741e922eb5fa31ea766d9ece14', 'recep', 'Receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `idprof` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `judul` text,
  `isi` text,
  `foto` char(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idprof`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`idprof`, `tanggal`, `judul`, `isi`, `foto`, `status`) VALUES
(11, '2011-03-28 01:39:02', 'coba lagi', '<p><p><p><p>ini adalah halaman input data profile\r\nsdsdsasasdasd\r\nsadasdas\r\nsadasd\r\nasdasd\r\nasdad</p></p></p></p>', 'pictures/13013.JPG', 0),
(12, '2011-03-27 17:57:08', '1', '<p><p><p>Artikel kali ini akan saya coba bahas mengenai bagaimana ide membuat generator kode unik incremental secara otomatis.</p><p>Wah apa tuh maksudnya? OK saya gambarkan hal tersebut melalui contoh berikut ini. Misalkan terdapat suatu sistem yang digunakan untuk pendaftaran anggota. Setiap anggota yang mendaftar nantinya akan diberikan kode unik, misalnya berbentuk A00001. Dalam keanggotaan tersebut terdapat 3 jenis anggota, yaitu Platinum, Gold dan Silver. Wah? kok kayak keanggotaan apa gitu ya? It?s OK, itu hanya contoh. Untuk Platinum, kode anggotanya berawalan A dan dilanjutkan dengan nomor urutnya. Keanggotaan Gold kodenya berawalan B dan Silver C. Sehingga misalkan terdapat seseorang pendaftar pertama, dan kebetulan ia ikut yang Platinum, maka harusnya kode dia adalah A00001. Selanjutnya bila terdapat pendaftar kedua dan ia juga ikut Platinum, maka kode berikutnya adalah A00002. Bagaimana bila terdapat pendaftar yang ketiga namun ia ingin ikut yang Gold? Ya.. karena sebelumnya belum ada anggota yang Gold, maka pendaftar ketiga ini mendapat kode B00001. Begitu seterusnya?</p><p>Nah.. paham kan gambaran di atas? Selanjutnya pertanyaannya adalah bagaimana membuat kode unik incremental seperti di atas secara otomatis setiap kali ada pendaftar yang baru? Hal inilah yang akan dibahas pada artikel kali ini.</p><p>Memang sih? untuk kode unik ini kita bisa menggunakan fasilitas auto increment dalam database, namun auto increment yang hanya berupa bilangan bulat positif 1, 2, 3, .. dst ini menjadi tidak bermakna.</p><p>Contoh kasus lain yang menggunakan konsep kode unik incremental ini adalah kode transaksi yang ada di supermarket. Setiap kali kita membayar di kasir, pasti kita mendapatkan struk yang terdapat kode transaksi. Kode transaksi ini unik. Contoh kode transaksi ini misalkan TR2801200900001, dimana TR menunjukkan transaksi pembelian, 28012009 menunjukkan tanggal transaksi yaitu pada tanggal 28/1/2009 dan 00001 menunjukkan transaksi pembelian pertama pada tanggal tersebut. Bila nanti terdapat transaksi kedua pada tanggal yang sama, maka kodenya menjadi TR2801200900002, dst.</p><p>Adapun contoh yang lain yang menggunakan konsep di atas adalah ketika membuat KTP, dimana setiap orang akan diberikan nomor KTP unik. Selain itu juga dalam kasus membuat nomor SIM.</p><p>OK.. akan saya paparkan bagaimana ide membuat kode unik incremental tersebut. Dalam hal ini akan saya ambil kasus mengenai pendaftaran anggota seperti halnya contoh pertama di atas.</p><p>Nah.. bagaimana ide untuk membuat kode unik tersebut? Misalkan terdapat anggota baru yang mendaftar dengan jenis keanggotaan Platinum. Maka proses pertamanya adalah mencari kode anggota terbesar yang berawalan A**** dalam database. Dalam hal ini kita bisa menggunakan query SQL</p></p></p>', 'pictures/12012.JPG', 0),
(13, '2011-03-25 21:38:54', '1', '<p>Artikel kali ini akan saya coba bahas mengenai bagaimana ide membuat generator kode unik incremental secara otomatis.</p><p>Wah apa tuh maksudnya? OK saya gambarkan hal tersebut melalui contoh berikut ini. Misalkan terdapat suatu sistem yang digunakan untuk pendaftaran anggota. Setiap anggota yang mendaftar nantinya akan diberikan kode unik, misalnya berbentuk A00001. Dalam keanggotaan tersebut terdapat 3 jenis anggota, yaitu Platinum, Gold dan Silver. Wah? kok kayak keanggotaan apa gitu ya? It?s OK, itu hanya contoh. Untuk Platinum, kode anggotanya berawalan A dan dilanjutkan dengan nomor urutnya. Keanggotaan Gold kodenya berawalan B dan Silver C. Sehingga misalkan terdapat seseorang pendaftar pertama, dan kebetulan ia ikut yang Platinum, maka harusnya kode dia adalah A00001. Selanjutnya bila terdapat pendaftar kedua dan ia juga ikut Platinum, maka kode berikutnya adalah A00002. Bagaimana bila terdapat pendaftar yang ketiga namun ia ingin ikut yang Gold? Ya.. karena sebelumnya belum ada anggota yang Gold, maka pendaftar ketiga ini mendapat kode B00001. Begitu seterusnya?</p><p>Nah.. paham kan gambaran di atas? Selanjutnya pertanyaannya adalah bagaimana membuat kode unik incremental seperti di atas secara otomatis setiap kali ada pendaftar yang baru? Hal inilah yang akan dibahas pada artikel kali ini.</p><p>Memang sih? untuk kode unik ini kita bisa menggunakan fasilitas auto increment dalam database, namun auto increment yang hanya berupa bilangan bulat positif 1, 2, 3, .. dst ini menjadi tidak bermakna.</p><p>Contoh kasus lain yang menggunakan konsep kode unik incremental ini adalah kode transaksi yang ada di supermarket. Setiap kali kita membayar di kasir, pasti kita mendapatkan struk yang terdapat kode transaksi. Kode transaksi ini unik. Contoh kode transaksi ini misalkan TR2801200900001, dimana TR menunjukkan transaksi pembelian, 28012009 menunjukkan tanggal transaksi yaitu pada tanggal 28/1/2009 dan 00001 menunjukkan transaksi pembelian pertama pada tanggal tersebut. Bila nanti terdapat transaksi kedua pada tanggal yang sama, maka kodenya menjadi TR2801200900002, dst.</p><p>Adapun contoh yang lain yang menggunakan konsep di atas adalah ketika membuat KTP, dimana setiap orang akan diberikan nomor KTP unik. Selain itu juga dalam kasus membuat nomor SIM.</p><p>OK.. akan saya paparkan bagaimana ide membuat kode unik incremental tersebut. Dalam hal ini akan saya ambil kasus mengenai pendaftaran anggota seperti halnya contoh pertama di atas.</p><p>Nah.. bagaimana ide untuk membuat kode unik tersebut? Misalkan terdapat anggota baru yang mendaftar dengan jenis keanggotaan Platinum. Maka proses pertamanya adalah mencari kode anggota terbesar yang berawalan A**** dalam database. Dalam hal ini kita bisa menggunakan query SQL</p>', 'pictures/12012.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rubrik`
--

CREATE TABLE IF NOT EXISTS `rubrik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(255) DEFAULT NULL,
  `pertanyaan` text,
  `tanggal` date DEFAULT NULL,
  `jawaban` text,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `rubrik`
--

INSERT INTO `rubrik` (`id`, `iduser`, `pertanyaan`, `tanggal`, `jawaban`, `status`) VALUES
(10, 'mexdesain@yahoo.co.id', 'saya mau tanya harga beras berapa?', '2011-03-30', 'iya harganya Rp. 20.000', 1),
(12, 'mexdesain@yahoo.co.id', 'saya mau tanya lagi berpa gula sekarang????', '2011-03-30', '1500 per Kg', 1),
(14, 'mexdesain@yahoo.co.id', 'Obat ambie apa ya?', '2011-03-29', 'buah pinag dibelah 2 terus dimakan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `unit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`Id`, `unit`) VALUES
(1, 'RS Mardiwaluya Kauman'),
(2, 'RS Mardiwaluya Rampal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `alamat` varchar(255) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Iduser`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Iduser`, `nama`, `password`, `email`, `alamat`, `tgllahir`, `foto`, `status`) VALUES
(1, 'Administrator', '230786', 'mexxiiimahfud@yahoo.com', 'Malang', '1989-02-15', NULL, 'admin'),
(12, 'Mahfud Efendi', 'e10adc3949ba59abbe56e057f20f883e', 'mexdesain@yahoo.co.id', 'Jl Mt Haryono', '1986-07-23', 'pictures/11004.JPG', NULL),
(13, 'dokter1', '10010', 'coba@yahoo.com', 'malang', NULL, NULL, 'dokter'),
(14, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '0000-00-00', 'pictures/', NULL);
