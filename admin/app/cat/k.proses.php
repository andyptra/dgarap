<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_
// proses menghapus data mahasiswa
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM cat_post WHERE id=".$_POST['hapus']);
} else {
	// deklarasikan variabel
	$kd_k	= $_POST['id'];
	$nama=$_POST[nama];		 
	if($kd_k == 0) {
	mysql_query("insert into cat_post(nama)
	values('$nama')") or die("gagal".mysql_error());
		// proses ubah data ujian
		} else {
			mysql_query("update cat_post set
	 		nama='$nama'
			where id='$kd_k'");
		}
	}


?>
