<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_
// proses menghapus data mahasiswa
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM dujian WHERE id=".$_POST['hapus']);
} else {
	// deklarasikan variabel
	$kd_k	= $_POST['id'];
	$nama_ujian=$_POST[nama_ujian];		 
	if($kd_k == 0) {
	mysql_query("insert into dujian(nama_ujian)
	values('$nama_ujian')") or die("gagal".mysql_error());
		// proses ubah data ujian
		} else {
			mysql_query("update dujian set
	 		nama_ujian='$nama_ujian'
			where id='$kd_k'");
		}
	}


?>
