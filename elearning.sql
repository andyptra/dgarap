-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 03:35 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktif`
--

CREATE TABLE `aktif` (
  `id` int(5) NOT NULL,
  `aktif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktif`
--

INSERT INTO `aktif` (`id`, `aktif`) VALUES
(1, 'aktif'),
(2, 'tidak aktif');

-- --------------------------------------------------------

--
-- Table structure for table `cat_post`
--

CREATE TABLE `cat_post` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_post`
--

INSERT INTO `cat_post` (`id`, `nama`) VALUES
(2, 'news'),
(9, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `dujian`
--

CREATE TABLE `dujian` (
  `id` int(5) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dujian`
--

INSERT INTO `dujian` (`id`, `nama_ujian`) VALUES
(17, 'UTS');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_jwb`
--

CREATE TABLE `hasil_jwb` (
  `id` int(50) NOT NULL,
  `id_ujian` varchar(100) DEFAULT NULL,
  `id_user` varchar(100) DEFAULT NULL,
  `id_matkul` varchar(100) DEFAULT NULL,
  `benar` varchar(100) DEFAULT NULL,
  `salah` varchar(200) DEFAULT NULL,
  `kosong` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `nilai` varchar(10) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `nilai_hrf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_jwb`
--

INSERT INTO `hasil_jwb` (`id`, `id_ujian`, `id_user`, `id_matkul`, `benar`, `salah`, `kosong`, `status`, `nilai`, `keterangan`, `nilai_hrf`) VALUES
(62, '16', 'U000000004', '12', '0', '0', '10', '1', '0.0', 'tidak lulus', ''),
(63, '16', 'U000000007', '12', '0', '1', '9', '1', '0.0', 'tidak lulus', ''),
(64, '16', 'U000000008', '12', '10', '0', '0', '1', '100.0', 'lulus', 'A'),
(66, '17', 'U000000004', '13', '9', '1', '0', '1', '90.0', 'lulus', 'A'),
(68, '17', 'U000000008', '13', '0', '0', '10', '1', '0.0', 'tidak lulus', ''),
(69, '16', 'U000000009', '12', '0', '2', '8', '1', '0.0', 'tidak lulus', ''),
(70, '17', 'U000000009', '13', '0', '2', '8', '1', '0.0', 'tidak lulus', ''),
(71, '16', 'U000000010', '12', '5', '5', '0', '1', '50.0', 'tidak lulus', 'C'),
(72, '17', 'U000000010', '13', '3', '7', '0', '1', '30.0', 'tidak lulus', 'D'),
(73, '16', 'U000000011', '12', '5', '5', '0', '1', '50.0', 'tidak lulus', 'C'),
(74, '17', 'U000000011', '13', '2', '0', '8', '1', '20.0', 'tidak lulus', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matkul` int(5) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matkul`, `nama_matkul`) VALUES
(12, 'pemrograman'),
(13, 'Struktur Data'),
(14, 'komunikasi data');

-- --------------------------------------------------------

--
-- Table structure for table `mode`
--

CREATE TABLE `mode` (
  `id` int(10) NOT NULL,
  `acak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mode`
--

INSERT INTO `mode` (`id`, `acak`) VALUES
(1, 'acak'),
(2, 'tidak acak');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi` text,
  `jam` time DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `feature_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_kategori`, `judul`, `penulis`, `isi`, `jam`, `tanggal`, `feature_image`) VALUES
(38, 2, 'Pencari Beasiswa Harus Aktif Gali Informasi', 'andy', '<p style="text-align: justify;"><strong>YOGYAKARTA</strong> - Biaya pendidikan di Indonesia masih cukup tinggi. Tak heran, banyak yang berusaha mendapatkan beasiswa agar beban biaya pendidikan tidak memberatkan. Namun, tak mudah untuk mendapatkan beasiswa tersebut.</p>\r\n<p style="text-align: justify;">"Banyak sekali kesempatan mendapat beasiswa, tapi sering kali orangtua, siswa, dan mahasiswa tidak tahu," tutur Anies usai meninjau pelaksanaan Ujian Nasional tingkat SMP di Pondok Pesantren Modern Muhammadiyah Boarding School, Prambanan, Sleman, Kamis (12/5/2016).</p>\r\n<p style="text-align: justify;">Untuk itu, kata dia, pencari beasiswa harus menggali informasi tentang beasiswa tersebut. Banyak jalan yang bisa dilakukan supaya mendapatkan informasi yang lengkap tentang beasiswa.</p>\r\n<p style="text-align: justify;">"Jadi para siswa cari tau, mulai online, tanya ke dinas, sekolah, cari tau bagaimana memperoleh beasiswa," katanya.</p>\r\n<p style="text-align: justify;">Mantan Rektor Universitas Paramadina itu mengaku bahwa sumber pembiayaan seperti beasiswa ada banyak. Hanya, tidak diketahui masyarakat karena tidak dicari. Pencarian itu wajib bagi yang ingin mendapat beasiswa.</p>\r\n<p style="text-align: justify;">"Jadi kalau hanya menunggu saja tidak dapat, (beasiswa) tidak datang dengan sendiri. Caranya mendapatkan harus aktif mencari, jangan pasif menunggu," jelasnya.</p>\r\n<p style="text-align: justify;">Anies menjelaskan, pemerintah juga sudah memiliki program pemberian Kartu Indonesia Pintar (KIP) yang dicanangkan Presiden Joko Widodo untuk siswa. Program itu untuk meringankan beban biaya pendidikan di negeri ini.</p>\r\n<p style="text-align: justify;">"Tadi kita berikan KIP di SMP N 1 Prambanan, itu ada program Presiden Jokowi, kita laksanakan. Alhamdulillah, sejauh ini sudah 12 juta kartu dikirim," jelasnya.</p>\r\n<p style="text-align: justify;">Anies mengaku masih ada yang belum didistribusikan ke siswa KIP tersebut. Butuh waktu dalam pemberian KIP tersebut secara berkala dan berkelanjutan.</p>\r\n<p style="text-align: justify;">sumber:news.okezone.com</p>', '22:13:35', '2016-05-14', 'imagesss.jpg'),
(39, 2, 'Drone Pengintai & Pengebom Karya Anak Bangsa', 'andy', '<p style="text-align: justify;"><strong>SURABAYA</strong> - Satu lagi karya anak bangsa yang patut dibanggakan. Siswa Sekolah Tinggi Teknologi Angkatan Laut (STTAL) Surabaya berhasil membuat pesawat pengintai tanpa awak yang mempunyai kemampuan pengeboman. Rencananya, pesawat ini akan terus dikembangkan dan menjadi salah satu alat pertahanan negara atau alutsista milik TNI.</p>\r\n<p style="text-align: justify;">Meski tampilannya seperti pesawat aeromodelling biasa, pesawat ini memiliki keunggulan jarak jangkuan yang cukup jauh yaitu sekira 30 kilometer. Ia juga efektif untuk pengintaian karena dilengkapi dengan kamera satelit. Selain itu, pesawat pengintai tanpa awak (drone) ini juga mampu menjatuhkan bom pada target yang diinginkan secara akurat.</p>\r\n<p style="text-align: justify;">Kedua siswa pembuat pesawat, yaitu Sersan Satu Oscar Panji dan Sersan Kepala Abdul Manaf mengaku, pesawat karya mereka telah diuji coba beberapa kali untuk mengetahui hasil pengintaian serta keakuratan daya tembak target. Hasilnya cukup memuaskan.</p>\r\n<p style="text-align: justify;">"Dengan menggunakan mesin berkapasitas 50 cc, pesawat ini cukup lincah saat bermanuver di udara dengan kecepatan 100 kilometer per jam," ujar Oscar.</p>\r\n<p style="text-align: justify;">Pembuatan pesawat bomber tanpa awak yang diberi nama Ganesa XI ini membutuhkan waktu sekira tiga bulan. Prosesnya terdiri dari pemilihan bahan kayu dan fiber sebagai bahan utama sampai perakitan hingga pemasangan mesin dan alat teknologi canggih di dalamnya.</p>\r\n<p style="text-align: justify;">"Rencananya, pesawat bomber tanpa awak karya siswa STTAL yang dikendalikan dengan remote kontrol yang dimodifikasi dengan perangkat android ini akan terus dikembangkan menjadi alutsista baru karya dalam negeri dengan daya jelajah yang lebih jauh dan penambahan persenjataan seperti bom atau bahan peledak yang bisa dibawa," papar Komandan STTAL Laksamana Pertama TNI Siswo Hadi Sumantri.</p>\r\n<p style="text-align: justify;">Pesawat tanpa awak ini bermodel pesawat Cesna dengan lebar sayap 3,3 meter dan panjang body 2,6 meter. Sementara untuk kapasitas tangki bahan bakar 1,5 liter. Pesawat dengan bahan bakar utama pertamax ini memiliki kemampuan dan ketahanan terbang selama satu jam. (afr)</p>\r\n<p style="text-align: justify;">sumber:news.okezone.com</p>', '22:13:45', '2016-05-14', 'drone.jpg'),
(40, 2, 'Belajar Bukan Hanya Kejar Gelar', 'andy', '<p style="text-align: justify;"><strong>JAKARTA</strong> - Semakin tinggi jenjang pendidikan yang kita tempuh, semakin bergengsi juga gelar akademis yang kita kantongi. Namun, bukan berarti kita hanya menjadikan gelar akademis sebagai tujuan satu-satunya dalam belajar.</p>\r\n<p style="text-align: justify;">Rektor Universitas Negeri Yogyakarta (UNY), Rochmat Wahab mengingatkan, semua pelajar dan mahasiswa harus belajar dengan baik, bukan karena semata-mata mengejar gelar.</p>\r\n<p style="text-align: justify;">"Gelar itu memang jadi bahan pertimbangan dalam beberapa hal, tapi bukan berarti harus mengejar gelar saja," tegas Rochmat, ketika berbincang dengan Okezone, belum lama ini.</p>\r\n<p style="text-align: justify;">Selain itu, Rochmat menambahkan, para mahasiswa harus menyadari bila perguruan tinggi bukan satu-satunya tempat untuk mengasah kemampuan. Dia pun sangat menganjurkan para mahasiswa aktif dalam mencari pengalaman dan ilmu dari luar kampus.</p>\r\n<p style="text-align: justify;">"Misalnya dengan mengikuti kompetisi atau forum-forum di luar meja kuliah. Karena kampus tidak bisa mejawab semuanya, sehingga mahasiswa harus bisa bekerja keras," tukasnya.</p>\r\n<p style="text-align: justify;">Di sisi lain, Rochmat mendorong perguruan tinggi meningkatkan mutu. Misalnya dari sisi dosen, tidak boleh berhenti meningkatkan kualifikasi mereka.</p>\r\n<p style="text-align: justify;">"Dukungan juga diperlukan dari semua elemen masyarakat dan pemerintah," tandasnya.</p>\r\n<p style="text-align: justify;">sumber: news.okezone.com</p>', '22:12:42', '2016-05-14', 'belajar-bukan-hanya-kejar-gelar-CyYhUXjtfk.jpg'),
(41, 9, 'Siswa Indonesia Hanya Fokus Menghafal', 'andy', '<p style="text-align: justify;"><strong>JAKARTA</strong> - Konsep pendidikan yang diusung Ki Hajar Dewantara dalam memajukan pendidikan orang pribumi seharusnya bisa menjadi acuan sistem pendidikan nasional. Terlebih lagi, konsep pendidikan Bapak Pendidikan Nasional itu bersifat untuk memerdekakan manusia baik dari aspek hidup lahiriah maupun aspek batin.</p>\r\n<p style="text-align: justify;">Nyatanya, ungkap Pengamat Pendidikan Abduhzen, sistem pendidikan Tanah Air saat ini masih berfokus pada teori yang mengharuskan generasi muda kita menghafal data-data di sekolah.</p>\r\n<p style="text-align: justify;">"Belum maksimal dalam memberikan kemampuan berpikir, karena pembelajaran selama ini lebih banyak pada mengisi pikiran saja," ujarnya kepada Okezone, belum lama ini.</p>\r\n<p style="text-align: justify;">Abduhzen mengimbuhkan, pelajar Indonesia kini lebih banyak diharuskan menghafal lantaran kemampuan itulah yang akan dipakai saat ujian nasional. Para pendidik lupa mengajarkan pemahaman atas konsep yang dipelajari para siswa. Guru, ujarnya, kurang mengoptimalkan keterlibatan siswa dalam pembelajaran.</p>\r\n<p style="text-align: justify;">"Padahal siswa perlu terlibat. Itu sebabnya pembelajaran harus bersifat terbuka, sehingga siswa bisa mengekpresikan pikirannya. Mereka juga bisa berekspresi dengan tubuhnya dan perasaannya sehingga kemampuan berpikirnya berkembang. Karena tindakan manusia itu kan berdasarkan atas apa yang ada dipikirkannya," paparnya.</p>\r\n<p style="text-align: justify;">Kondisi berbeda akan terlihat pada siswa yang hanya dicekoki informasi dan diharuskan menghafalnya. Mereka, kata Abduhzen, tidak bisa berekspresi dengan baik tentang apa yang dirasakan dan dipikirkannya.</p>\r\n<p style="text-align: justify;">"Jadi mereka juga akan kurang pengalaman," tambahnya.</p>\r\n<p style="text-align: justify;">sumber:news.okezone.com</p>', '16:09:13', '2016-05-16', 'siswa-indonesia-hanya-fokus-menghafal-iDXLy5nyhA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(10) NOT NULL,
  `founder` varchar(100) DEFAULT NULL,
  `nama_course` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_tlp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `founder`, `nama_course`, `alamat`, `no_tlp`, `email`) VALUES
(1, 'Andy Saputra', 'D''Garap', 'Jalan Kemuning No 404 Boyolali', '081331294812', 'andygrap@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(5) NOT NULL,
  `id_soal` varchar(20) NOT NULL,
  `id_ujian` varchar(20) NOT NULL,
  `soal` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `jawab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `id_soal`, `id_ujian`, `soal`, `a`, `b`, `c`, `d`, `e`, `jawab`) VALUES
(36, 'A000000011', '16', '<p>HTML merupakan singkatan dari</p>', '<p>&nbsp;&nbsp;&nbsp; Home Tool&nbsp; Markup Language</p>', '<p>Hyperlinks and Text Markup Language</p>', '<p>Hyper Text Markup Language</p>', '<p>Hyper Tool Markup Language</p>', '<p>&nbsp; Hyper Tricks Markup Language</p>', 'C'),
(37, 'A000000012', '16', '<p>Siapa yang mengembangkan Sejarah Web pertama kali...</p>', '<p>Ruben&nbsp;</p>', '<p>Thomas Alpha Edison</p>', '<p>Tim Berners-Lee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '<p>Albert Einstein</p>', '<p>Steward</p>', 'C'),
(38, 'A000000013', '16', '<p>Profesi dalam pengembangan web, kecuali...</p>', '<p>Web Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '<p>Web Programer</p>', '<p>Web Designer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '<p>Web Administrator</p>', '<p>Web Browser</p>', 'E'),
(39, 'A000000014', '16', '<p>Pada tanggal brapa www dapat di gunakan gratis.....</p>', '<p>20 april 1993&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br /></p>', '<p>27 april 1993&nbsp;<br /><br /></p>', '<p>20 april 1993<br /><br /></p>', '<p>25 april 1995&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br /></p>', '<p>30 april 1993</p>', 'E'),
(40, 'A000000015', '16', '<p>Yang dimaksud dengan halaman Web adalah<br /><br /></p>', '<p>Halaman elektronik yang dibuka dengan email<br /><br /></p>', '<p>Halaman online bisa di download<br /><br /></p>', '<p>Halaman digital yang dibuka dengan web browser<br /><br /></p>', '<p>Halaman digital yang berisi berbagai jenis data dan gambar.<br /><br /></p>', '<p>Digital online yang terhubung dengan internet</p>', 'C'),
(41, 'A000000016', '16', '<p>Tahun berapa web di buat?<br /><br /></p>', '<p>1993<br /><br /></p>', '<p>1999<br /><br /></p>', '<p>1945<br /><br /></p>', '<p>1898<br /><br /></p>', '<p>1991</p>', 'E'),
(42, 'A000000017', '16', '<p>Kegiatan menulis html di sebut?</p>', '<p>Nulis<br /><br /></p>', '<p>Coding<br /><br /></p>', '<p>Ngetik<br /><br /></p>', '<p>Gambar<br /><br /></p>', '<p>Html</p>', 'B'),
(43, 'A000000018', '16', '<p>Browser bawaan dari windows adalah ?</p>', '<p>Opera mini.<br /><br /></p>', '<p>Mozila<br /><br /></p>', '<p>Safari<br /><br /></p>', '<p>Chrome<br /><br /></p>', '<p>Internet Explorer</p>', 'E'),
(44, 'A000000019', '16', '<p>Bahasa Pemrograman yg biasa digunakan untuk membuat halaman web adalah pengertian dari ?</p>', '<p>HTML<br /><br /></p>', '<p>Web<br /><br /></p>', '<p>Program<br /><br /></p>', '<p>INTERNET<br /><br /></p>', '<p>WWW</p>', 'A'),
(45, 'A000000020', '16', '<p>Apa kepanjangan WWW ?</p>', '<p>World Wide Web<br /><br /></p>', '<p>Wide World Web<br /><br /></p>', '<p>Web Wide World<br /><br /></p>', '<p>World Web Wide<br /><br /></p>', '<p>Web World Wide</p>', 'A'),
(46, 'A000000021', '16', '<p>Membuat tabel adalah fungsi dari ?</p>', '<p>&lt;TABLE&gt;<br /><br /></p>', '<p>&lt;HTML&gt;<br /><br /></p>', '<p>&lt;HEAD&gt;<br /><br /></p>', '<p>&lt;IL&gt;<br /><br /></p>', '<p>&lt;BR&gt;</p>', 'A'),
(47, 'A000000022', '16', '<p>Apa Fungsi atribut &ldquo;align&rdquo; dalam HTML ?</p>', '<p>Mengatur panjang&nbsp;&nbsp;<br /><br /></p>', '<p>Tebal garis tepi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br /></p>', '<p>Perataan tabel<br /><br /></p>', '<p>mengatur lebar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br /></p>', '<p>Warna latar belakang</p>', 'C'),
(48, 'A000000023', '16', '<p>Untuk menampilkan data pada setiap sel tabel data disebut ?</p>', '<p>Table Data<br /><br /></p>', '<p>Table Row<br /><br /></p>', '<p>Portable<br /><br /></p>', '<p>Tabel Kimia<br /><br /></p>', '<p>Tabel Biologi</p>', 'A'),
(49, 'A000000024', '16', '<p>Ukuran Border dalam &hellip;.?</p>', '<p>KM/H<br /><br /></p>', '<p>CM<br /><br /></p>', '<p>Liter<br /><br /></p>', '<p>Pixel<br /><br /></p>', '<p>Mph</p>', 'D'),
(50, 'A000000025', '16', '<p>apa fungsi dari &lt;center&gt; adalah.....</p>', '<p>menampilkan informasi&nbsp;&nbsp;&nbsp;<br /><br /></p>', '<p>tulisan strong&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br /></p>', '<p>mempertebal tulisan<br /><br /></p>', '<p>rata tengah&nbsp;&nbsp;&nbsp;<br /><br /></p>', '<p>mendefinisikan table</p>', 'D'),
(51, 'A000000026', '17', '<p>Type data&nbsp;dibawah &nbsp;ini, yang tidak termasuk dalam tipe data sederhana tunggal, adalah :</p>', '<p>Boolean<br /><br /></p>', '<p>Integer<br /><br /></p>', '<p>String<br /><br /></p>', '<p>float<br /><br /></p>', '<p>Char</p>', 'B'),
(52, 'A000000027', '17', '<p>&nbsp;==,&nbsp;&lt;=,&nbsp;&gt;=,&nbsp;!=,&nbsp;termasuk&nbsp;dalam&nbsp;operator&nbsp;&hellip;&nbsp;</p>', '<p>Aritmatika&nbsp;</p>', '<p>Relasi <br /><br /></p>', '<p>Unary</p>', '<p>Bitwise<br /><br /></p>', '<p>Binary</p>', 'B'),
(53, 'A000000028', '17', '<p>Type&nbsp;data&nbsp;yang&nbsp;menghasilkan&nbsp;bentuk&nbsp;keluaran&nbsp;nilai&nbsp;Truedan&nbsp;False(Benar&nbsp;dan&nbsp;Salah)&nbsp;,&nbsp;&nbsp;adalah&nbsp;:</p>', '<p>Boolean</p>', '<p>Integer<br /><br /></p>', '<p>String&nbsp;</p>', '<p>float<br /><br /></p>', '<p>Char</p>', 'A'),
(54, 'A000000029', '17', '<pre> void main()<br /> {<br /> ....(a).... x,y,z;<br /> clrscr();<br /> cout &lt;&lt;&ldquo;\n input nilai X=&ldquo;; cin &gt;&gt; x;<br /> cout &lt;&lt;&ldquo;\n input nilai Y=&ldquo;; cin &gt;&gt; y;<br /> z = x + y;<br /> cout &lt;&lt;&ldquo;\n hasil penjumlahan =&ldquo; &lt;&lt; z;<br /> getch(); <br /> } <br /> <br /> </pre>\n<p>Tipe data yang tepat untuk (a) adalah &hellip;.</p>', '<p>Bolean</p>', '<p>String</p>', '<p>Array</p>', '<p>Integer</p>', '<p>Char</p>', 'D'),
(55, 'A000000030', '17', '<pre>void main()<br /> {<br /> int r = 10; int s;<br /> clrscr();<br /> s = 10 + ++r;<br /> cout &lt;&lt;&ldquo;r = &ldquo;&lt;&lt; r &lt;&lt; &lsquo;\n&rsquo;;<br /> cout &lt;&lt;&ldquo;s = &ldquo;&lt;&lt; s &lt;&lt; &lsquo;\n&rsquo;; <br /> getch(); <br /> } <br /><br /></pre>\n<p>&nbsp;Hasil&nbsp;eksekusi&nbsp;dari&nbsp;program&nbsp;diatas&nbsp;adalah&nbsp;&hellip;</p>', '<p>r&nbsp;=&nbsp;12,&nbsp;s&nbsp;=&nbsp;21</p>', '<div class="p0">r&nbsp;=&nbsp;10,&nbsp;s&nbsp;=&nbsp;20</div>\n<div class="p0">&nbsp;</div>', '<div class="p0">r&nbsp;=&nbsp;11,&nbsp;s&nbsp;=&nbsp;20</div>', '<div class="p0">r&nbsp;=&nbsp;10,&nbsp;s&nbsp;=&nbsp;21</div>\n<div class="p0">&nbsp;</div>', '<div class="p0">r&nbsp;=&nbsp;11,&nbsp;s&nbsp;=&nbsp;21</div>\n<p>&nbsp;</p>', 'E'),
(56, 'A000000031', '17', '<p>Setiap elemen dari &nbsp;sebuah Array haruslah mempunyai type data yang sama, termasuk dalam karakteristik array yaitu :</p>', '<div class="p0">Statis</div>', '<div class="p0">Heterogen&nbsp;</div>\n<div class="p0">&nbsp;</div>', '<div class="p0">Dinamis</div>', '<div class="p0">Homogen&nbsp;</div>\n<div class="p0">&nbsp;</div>', '<p>Terurut&nbsp;</p>', 'D'),
(57, 'A000000032', '17', '<div class="p0">Array&nbsp;yang&nbsp;sering&nbsp;digunakan&nbsp;dalam&nbsp;menterjemahkan&nbsp;matriks&nbsp;pada&nbsp;pemrograman,&nbsp;adalah&nbsp;array&nbsp;berdimensi&nbsp;:</div>\n<div class="p0">&nbsp;</div>', '<div class="p0">Satu</div>', '<div class="p0">Satu&nbsp;dan&nbsp;Dua&nbsp;</div>\n<div class="p0">&nbsp;</div>', '<div class="p0">Dua&nbsp;</div>', '<div class="p0">Satu&nbsp;dan&nbsp;Tiga&nbsp;</div>\n<div class="p0">&nbsp;</div>', '<p>Tiga</p>', 'C'),
(58, 'A000000033', '17', '<p>Contoh aplikasi array dimensi dua adalah&hellip;..<br /><br /></p>', '<p>Input data suhu <br /><br /></p>', '<p>Input nama hari <br /><br /></p>', '<p>Input nilai ipk mahasiswa</p>\n<p>&nbsp;</p>', '<p>Input nama bulan</p>', '<p>Input nilai mahasiswa perkelas dan matakuliah</p>', 'E'),
(59, 'A000000034', '17', '<p>Terdapat Array : A [5][4] maka jumlah elemen Array tersebut adalah &hellip;&hellip;<br /><br /></p>', '<p>20<br /><br /></p>', '<p>35 <br /><br /></p>', '<p>9<br /><br /></p>', '<p>15 <br /><br /></p>', '<p>21</p>', 'A'),
(60, 'A000000035', '17', '<p>Diketahui c dan lokasi awal terletak di alamat 00F(H), maka lokasi A[3] adalah &hellip;..<br /><br /></p>', '<p>00FC(H) <br /><br /></p>', '<p>017(H) <br /><br /></p>', '<p>071(H)<br /><br /></p>', '<p>01B(H) <br /><br /></p>', '<p>111(H)</p>', 'B'),
(61, 'A000000036', '17', '<p>Array yang sangat banyak elemen nol-nya, dikenal sebagai :<br /><br /></p>', '<p>Upper tringular Array <br /><br /></p>', '<p>Lower tringular Array <br /><br /></p>', '<p>Sparse Array<br /><br /></p>', '<p>One Dimensional Array<br /><br /></p>', '<p>Multi Dimensional Array</p>', 'C'),
(62, 'A000000037', '17', '<p>Array yang seluruh elemen dibawah diagonal utamanya = 0, dikenal sebagai :<br /><br /></p>', '<p>Upper tringular Array <br /><br /></p>', '<p>Lower tringular Array <br /><br /></p>', '<p>Sparse Array<br /><br /></p>', '<p>One Dimensional Array<br /><br /></p>', '<p>Multi Dimensional Array</p>', 'A'),
(63, 'A000000038', '17', '<p>Terdapat Array : A [3][4][5] maka jumlah elemen Array tersebut adalah &hellip;&hellip;<br />&nbsp;</p>', '<p>25 <br /><br /></p>', '<p>35 <br /><br /></p>', '<p>12 <br /><br /></p>', '<p>15 <br /><br /></p>', '<p>60</p>', 'E'),
(64, 'A000000039', '17', '<p>Diketahui suatu array segitiga memiliki 4 baris dan kolom. Jumlah elemen yang bukan nol pada array segitiga tersebut adalah &hellip;.. <br /><br /></p>', '<p>20 <br /><br /></p>', '<p>10 <br /><br /></p>', '<p>8 <br /><br /></p>', '<p>4<br /><br /></p>', '<p>16</p>', 'B'),
(65, 'A000000040', '17', '<p>Perintah IsFull pada antrian digunakan untuk :<br /><br /></p>', '<p>Memeriksa apakah antrian sudah penuh<br /><br /></p>', '<p>Memeriksa apakah Antrian penuh atau kosong <br /><br /></p>', '<p>Menambahkan elemen ke dalam Antrian<br /><br /></p>', '<p>Menghapus elemen dari dalam Antrian<br /><br /></p>', '<p>Memeriksa apakah antrian sudah kosong</p>', 'A'),
(66, 'A000000041', '17', '<p><img src="../data/logo amikom terbaru.png" alt="" width="50" height="50" /></p>\n<p>ini gambar apa?</p>', '<p>logo amikom</p>', '<p>logo&nbsp;</p>', '<p>log baru</p>', '<p>logo lam</p>', '<p>logo baru amikom</p>\n<p><img src="../data//logo amikom terbaru.png" alt="" width="50" height="50" /></p>', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `status_ujian`
--

CREATE TABLE `status_ujian` (
  `id` int(5) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_ujian`
--

INSERT INTO `status_ujian` (`id`, `status`, `ket`) VALUES
(1, '1', 'sudah ujian'),
(2, '2', 'belum ujian');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(10) NOT NULL,
  `id_userk` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `isi` text,
  `status` varchar(4) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `id_userk`, `nama`, `isi`, `status`) VALUES
(3, 'U000000004', NULL, '<p>wah ujian onlinenya mudah digunakan tidak bikin bingung, desain yang elegan dan bagus. sukses ya kak ^_^</p>', 'Y'),
(4, 'U000000006', NULL, '<p>wah keren kak, aku suka sama sistemnya. jadi kita daftar terus login, ngerjain soal terus kita langsung bisa lihat nilai kita dan langsung print.&nbsp;</p>', 'Y'),
(5, 'U000000008', NULL, '<p>user friendly banget min web elearningnya. soalnya sama yang lain beda. aku sama temenku ngerjain bareng saling bersebelahan ternyata soalnya aku dan temenku beda min. jadi ga bisa nyontek heheeh</p>', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ujianku`
--

CREATE TABLE `ujianku` (
  `id` int(10) NOT NULL,
  `nama_ujian` varchar(200) DEFAULT NULL,
  `id_matkul` varchar(20) DEFAULT NULL,
  `jsoal` int(20) DEFAULT NULL,
  `penilaian` int(20) DEFAULT NULL,
  `kkm` int(20) DEFAULT NULL,
  `waktu` varchar(30) DEFAULT NULL,
  `aktif` varchar(20) DEFAULT NULL,
  `mode_soal` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujianku`
--

INSERT INTO `ujianku` (`id`, `nama_ujian`, `id_matkul`, `jsoal`, `penilaian`, `kkm`, `waktu`, `aktif`, `mode_soal`) VALUES
(16, '17', '12', 10, 100, 70, '5400', '1', '1'),
(17, '17', '13', 10, 100, 60, '3600', '1', '1'),
(18, '17', '14', 5, 100, 70, '1800', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `id_user` int(20) NOT NULL,
  `firstn` varchar(100) NOT NULL,
  `lastn` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nomerhp` varchar(30) NOT NULL,
  `dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user`, `firstn`, `lastn`, `username`, `password`, `email`, `nomerhp`, `dp`) VALUES
(2, 1, 'andy', 'saputra', 'andy', '3e6b357c63aad7b8400b187c46af57cf', 'andygrap@gmail.com', '081331294812', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usergarap`
--

CREATE TABLE `usergarap` (
  `id` int(5) NOT NULL,
  `id_userk` varchar(20) NOT NULL,
  `firstn` varchar(100) NOT NULL,
  `lastn` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergarap`
--

INSERT INTO `usergarap` (`id`, `id_userk`, `firstn`, `lastn`, `username`, `password`, `email`, `dp`) VALUES
(9, 'U000000004', 'pevitaa', 'cantiknya', 'pevita.pearce', '8aba54558e5934da857f88c56988b726', 'pevitapearce@gmail.com', 'pevita-pearce-121123b.jpg'),
(11, 'U000000006', 'muhammad', 'satrio', 'm.sae', '82cfbbdd5389dca9c0f11df9a17ff952', 'msae@gmail.com', '11825595_826463950801514_975515839751437886_n.jpg'),
(15, 'U000000007', 'andy', 'saputra', 'andyptra', '3e6b357c63aad7b8400b187c46af57cf', 'andygrap@gmail.com', '11.jpg'),
(16, 'U000000008', 'andy', 'saputra', 'andy.ptra', 'aa84720019a8e9662d929fd829077745', 'a@gmail.com', '11.jpg'),
(17, 'U000000009', 'wawa', 'wawa', 'waw.waw', 'cfb59de35ba285b8d2294161764fc60a', 'waw@gmail.com', 'pevita_pearce-20151206-005-akrom.jpg'),
(18, 'U000000010', 'F', 'K', 'Shy2xcat', '5df10720e7572864fde3a981c82b182e', 'Shy2xcat@yahoo.com', 'IMG_20160515_070944.jpg'),
(19, 'U000000011', 'muhammad', 'satrio', 'muhammad.satrio', 'b6411607eec60f150747123b5d8306f1', 'mhmmd.strio@gmail.com', '800x400-hearts-and-memories.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(10) NOT NULL,
  `detik` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `detik`, `waktu`) VALUES
(1, '1800', '30 menit'),
(2, '3600', '1 jam'),
(3, '5400', '1 setengah jam'),
(4, '7200', '2 jam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktif`
--
ALTER TABLE `aktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_post`
--
ALTER TABLE `cat_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dujian`
--
ALTER TABLE `dujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_jwb`
--
ALTER TABLE `hasil_jwb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `mode`
--
ALTER TABLE `mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_ujian`
--
ALTER TABLE `status_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujianku`
--
ALTER TABLE `ujianku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usergarap`
--
ALTER TABLE `usergarap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktif`
--
ALTER TABLE `aktif`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cat_post`
--
ALTER TABLE `cat_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dujian`
--
ALTER TABLE `dujian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `hasil_jwb`
--
ALTER TABLE `hasil_jwb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matkul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `mode`
--
ALTER TABLE `mode`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `status_ujian`
--
ALTER TABLE `status_ujian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ujianku`
--
ALTER TABLE `ujianku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usergarap`
--
ALTER TABLE `usergarap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
