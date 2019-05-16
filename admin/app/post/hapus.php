<?php
include"../../../inc/konek.php";
koneksi_buka();
if(isset($_POST['hapus'])) {
	$cb=mysql_fetch_array(mysql_query("select * from post where id=".$_POST['hapus']))or die("gagal".mysql_error());
	unlink("../../../uploads/$cb[feature_image]");
	mysql_query("DELETE FROM post WHERE id=".$_POST['hapus']);
	
} 