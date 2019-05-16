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
					<?php
						$batas = 2;
						$pg = isset( $_GET['page'] ) ? $_GET['page'] : "";
 
						if ( empty( $pg ) ) {
						$posisi = 0;
						$pg = 1;
						} else {
						$posisi = ( $pg - 1 ) * $batas;
						}
						$tampil=mysql_query("SELECT post.*,cat_post.nama,user.dp FROM post,cat_post,user WHERE post.id_kategori=cat_post.id AND post.penulis=user.username order by post.id DESC LIMIT $posisi, $batas");
						while($r=mysql_fetch_array($tampil)){
						$judul = preg_replace("/\s/","-",$r['judul']);
						
   
						$url_link = "berita".$r['id']."-".$judul.".html";
						$cate = preg_replace("/\s/","-",$r['nama']);
						$url_cat="kategori".$r['id_kategori']."-".$cate.".html";
						?>
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="<?php echo $url_link ;?>"><?php echo $r[judul];?></a></h2>
										
									</div>
									<div class="meta">
										<time class="published" ><?php echo(DateToIndo("$r[tanggal]"));?></time>
										<a href="#" class="author"><span class="name"><?php echo $r[penulis];?></span><img src="../admin/foto/<?php echo $r[dp];?>" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="../uploads/<?php echo"$r[feature_image]";?>" alt="" /></a>
								<p>
								 <?php
								$isi_berita=htmlentities(strip_tags($r['isi']));
								$isi=substr($isi_berita,0,500);
								$isi=substr($isi_berita,0,strrpos($isi," "));	
								echo $isi;
								?>
								</p>
								<footer>
									<ul class="actions">
										<li><?php echo "<a target='_blank' class='button big' href=\"".$url_link."\">continue reading</a>";?></li>
									</ul>
									<ul class="stats">
										<li><a href="<?php echo $url_cat ;?>"><?php echo"$r[nama]";?></a></li>
										
									</ul>
								</footer>
							</article>
						<?php
						}?>
						
							<?php
							$jml_data = mysql_num_rows(mysql_query("SELECT * FROM post"));
							$JmlHalaman = ceil($jml_data/$batas); 
							?>
						<!-- Pagination -->
							<ul class="actions pagination">
							<?php if ( $pg > 1 ) {
							$link = $pg-1;
							$prev = "<li><a href='?page=$link' class='button big previous'>Sebelumnya</a></li>";
							}else{
								$prev = "<li><a href='#' class='disabled button big previous'>Sebelumnya</a></li>";
							}
							
							if ( $pg < $JmlHalaman ) {
							$link = $pg + 1;
							$next = "<li><a href='?page=$link' class='button big next'>Selanjutnya</a></li>";
							} else{
								$next = " <li><a href='#' class='disabled button big next'>Selanjutnya</a></li>";
							}
							echo $prev . $next;							
							?>
								
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
								<header>
									<h2><a href="index.html"><?php echo $course ;?></a></h2>
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
						<!-- Posts List -->
							<section>
								<ul class="posts">
								<h3>Recent Post</h3>
								<?php
					
						$qq=mysql_query("SELECT post.*,cat_post.nama,user.dp FROM post,cat_post,user WHERE post.id_kategori=cat_post.id AND post.penulis=user.username order by post.id DESC limit 4");
						while($rz=mysql_fetch_array($qq)){
							$jd = preg_replace("/\s/","-",$rz['judul']);

   
						$url_ku = "berita".$rz['id']."-".$jd.".html";
							?>
									<li>
										<article>
											<header>
												<h3><a target='_blank' href=" <?php echo $url_ku;?>"><?php echo"$rz[judul]";?></a></h3>
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