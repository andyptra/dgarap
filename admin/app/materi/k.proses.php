<?php
// memanggil file koneksi
include"../../../inc/konek.php";

//membuka koneksi
koneksi_buka();
// proses menghapus data materi
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM materi WHERE id=".$_POST['hapus']);
} else {
	// deklarasikan variabel
	$kd_k	= $_POST['id'];
	$nama_materi=$_POST[nama_materi];	
	$lokasi_file	= $_FILES['fupload']['tmp_name'];
	$tipe_file		= $_FILES['fupload']['type'];
	$nama_file		= $_FILES['fupload']['name'];
	// proses tambah data materi	 
	if($kd_k == 0) {
		//jika tidak ada gambar ini yang di proses
		if(empty($nama_file)){
			mysql_query("insert into materi(nama_materi)
			values('$nama_materi')") or die("gagal".mysql_error());
	
		}
		// jika ada gambar ini yang di proses
		else{
			move_uploaded_file($lokasi_file,"data/$nama_file");
			mysql_query("insert into materi(nama_materi,isi_materi)
			values('$nama_materi','$nama_file')") or die("gagal".mysql_error());
		}
		// proses ubah data materi
		} else {
			mysql_query("update materi set
	 		nama_materi='$nama_materi'
			where id='$kd_k'");
		}
	}


?>
