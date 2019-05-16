<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_
// proses menghapus data mahasiswa
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM matakuliah WHERE id_matkul=".$_POST['hapus']);
} else {
	// deklarasikan variabel
	$kd_k	= $_POST['id'];
	$nama_matkul=$_POST[nama_matkul];		 
	if($kd_k == 0) {
	mysql_query("insert into matakuliah(nama_matkul)
	values('$nama_matkul')") or die("gagal".mysql_error());
		// proses ubah data matakuliah
		} else {
			mysql_query("update matakuliah set
	 		nama_matkul='$nama_matkul'
			where id_matkul='$kd_k'");
		}
	}


?>
