<!DOCTYPE HTML>

<?php include"../inc/set.php";?>
<?php
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
		$BulanIndo = array("Januari", "Februari", "Maret",
						   "April", "Mei", "Juni",
						   "Juli", "Agustus", "September",
						   "Oktober", "November", "Desember");
	
		$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
		$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
		$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
		
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
}

$tampil=mysql_query("SELECT post.*,cat_post.nama,user.dp FROM post,cat_post,user WHERE post.id_kategori=cat_post.id AND post.penulis=user.username AND post.id='$_GET[id]'");
$r=mysql_fetch_array($tampil);
	?>
<html>
	<head>
		<title><?php echo $course ;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="../index.html"><?php echo $course ;?></a></h1>
						<nav class="links">
							
						</nav>
						
					</header>

				<!-- Menu -->
					

				<!-- Main -->
					<div id="main">
					
<article class="post">
								<header>
									<div class="title">
										<h2><a href="#"><?php echo"$r[judul]";?></a></h2>
										
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-18"><?php echo(DateToIndo("$r[tanggal]"));?></time>
										<a href="#" class="author"><span class="name"><?php echo"$r[penulis]";?></span><img src="../admin/foto/<?php echo $r[dp];?>" alt="" /></a>
									</div>
								</header>

								<section>
									
									<p><span class="image left"><img src="../uploads/<?php echo"$r[feature_image]";?>" alt="" /></span><?php echo $r[isi];?></p>
									
								</section>
							</article>


					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
								<header>
									<h2><a href="index.html"><?php echo $course ;?></h2>
									<p>Halaman Blog dari E-Learning <?php echo $course ;?> </p>
								</header>
							</section>
						<section>
								<div class="mini-posts">
							<h3>Category</h3>
									<!-- Mini Post -->
										<article class="mini-post">
										<?php
										$pp=mysql_query("

SELECT cat_post.nama,cat_post.id,post.id_kategori, COUNT(post.id_kategori) as jml FROM cat_post,post WHERE post.id_kategori=cat_post.id GROUP BY cat_post.nama") or die("gagal".mysql_error());
										while($rx=mysql_fetch_array($pp)){
											$catez = preg_replace("/\s/","-",$rx['nama']);
						$url_cate="kategori".$rx['id_kategori']."-".$catez.".html";
										?>
											<header>
												<h4><a href="<?php echo"$url_cate";?>"><?php echo"$rx[nama]";?><a href="#" class="apikbanget"><span><?php echo"$rx[jml]";?></span</a></a></h4>
												
												
												
											</header>
											
										<?php }?>
										</article>
										



								</div>
							</section>

						<section>
								<ul class="posts">
								<?php
					
						$qq=mysql_query("SELECT post.*,cat_post.nama,user.dp FROM post,cat_post,user WHERE post.id_kategori=cat_post.id AND post.penulis=user.username order by post.id DESC limit 4");
						while($rz=mysql_fetch_array($qq)){
							$jd = preg_replace("/\s/","-",$rz['judul']);

   
						$url_ku = "berita".$rz['id']."-".$jd.".html";
							?>
									<li>
										<article>
											<header>
												<h3><a href="<?php echo $url_ku;?>"><?php echo"$rz[judul]";?></a></h3>
												<time class="published" ><?php echo(DateToIndo("$rz[tanggal]"));?></time>
											</header>
											<a href="#" class="image"><img src="../uploads/<?php echo"$rz[feature_image]";?>" alt="" /></a>
										</article>
									</li>
						<?php }?>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Selamat datang di E-Learning <?php echo $course;?><br/>
<?php echo $course;?> merupakan sebuah aplikasi berbasis web yang di gunakan untuk ujian online Silahkan anda mendaftar terlebih dahulu agar dapat melakukan ujian online setelah anda selesai mendaftar silahkan login. di halaman user anda dapat mengedit biodata. dan dapat mengerjakan soal, dan anda langsung dapat melihat nilainya dan langsung bisa untuk di cetak</p>
								
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; <?php echo $course;?> Design: HTML5 UP.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>