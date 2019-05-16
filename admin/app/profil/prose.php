<?php
include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
$errors         = array();  	
$data 			= array(); 		
$course=mysql_real_escape_string($_POST['nama_course']);
$founder=$_POST['founder'];
$nohp=$_POST['no_tlp'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$id=$_POST['id'];

	if ( ! empty($errors)) {

		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
	$a=mysql_query("update profil set founder='$founder',
									nama_course='$course',
									alamat='$alamat',
									no_tlp='$nohp',
									email='$email'
									
									
									where id='$id'") or die("gagal".mysql_error());
	}
		$data['success'] = true;
		$data['message'] = 'Success!';
	// return all our data to an AJAX call
	echo json_encode($data);