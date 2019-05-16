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
	if(isset($_POST['simpan'])){
		if(!empty($lokasi_file)){
			move_uploaded_file($lokasi_file,"../../../uploads/$nama_file");
			$q=mysql_query("INSERT INTO post(id_kategori,
										penulis,
										judul,
										isi,
										jam,
										tanggal,
										feature_image) 
								VALUES('$kategori_berita',
										'$_SESSION[namauser]',
										'$judul',
										'$isi',
										'$jam_sekarang',
										'$tgl_sekarang',
										'$nama_file')")or die(mysql_error());
		}
		else{
			$q=mysql_query("INSERT INTO post(id_kategori,
										penulis,
										judul,
										isi,
										jam,
										tanggal) 
								VALUES('$kategori_berita',
										'$_SESSION[namauser]',
										'$judul',
										'$isi',
										'$jam_sekarang',
										'$tgl_sekarang')")or die(mysql_error());
		}
	}
		 
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);