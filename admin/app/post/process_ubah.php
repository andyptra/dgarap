<?php
include"../../../inc/konek.php";
koneksi_buka();
session_start();

include"waktu.php"; 

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data
$judul=mysql_escape_string($_POST['judul']);
$isi=mysql_escape_string($_POST['isi']);
$kategori_berita=$_POST['kategori_berita'];
$x=$_SESSION['pz'];

//genereate kode soal


	if (empty($judul))
		$errors['judul'] = 'Judul Wajib Isi';
		
    if (empty($isi))
		$errors['isi'] = 'Isi berita wajib di isi';

	if (empty($kategori_berita))
		$errors['kategori_berita'] = 'Kategori Berita Wajib Isi';
		
	
	
// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
		$lokasi_file 	= $_FILES['file']['tmp_name'];
		$tipe_file		= $_FILES['file']['type'];
		$nama_file		= $_FILES['file']['name'];
		$cb=mysql_fetch_array(mysql_query("select * from post where id='$x'"))or die("gagal".mysql_error());
	if(isset($_POST['simpan'])){
		if(!empty($lokasi_file)){
			move_uploaded_file($lokasi_file,"../../../uploads/$nama_file");
			unlink("../../../uploads/$cb[feature_image]");
	 $a=mysql_query("UPDATE post SET id_kategori = '$kategori_berita', judul = '$judul', isi = '$isi',jam='$jam_sekarang',tanggal='$tgl_sekarang' ,
	 feature_image='$nama_file' WHERE post.id ='$x'") or die("gagal".mysql_error());
	
		}else{
			$a=mysql_query("UPDATE post SET id_kategori = '$kategori_berita', judul = '$judul', isi = '$isi',jam='$jam_sekarang',tanggal='$tgl_sekarang' 
 WHERE post.id ='$x'") or die("gagal".mysql_error());
		}
	}

		 
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);