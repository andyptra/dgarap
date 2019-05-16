<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
$errors         = array();  	
$data 			= array(); 		
$firstn=$_POST['firstn'];
$lastn=$_POST['lastn'];
$email=$_POST['email'];
$nomerhp=$_POST['nomerhp'];
$id=$_POST['id'];

	if ( ! empty($errors)) {

		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
	$a=mysql_query("update user set 
									firstn='$firstn',
									lastn='$lastn',
									email='$email',
									nomerhp='$nomerhp'
									where id='$id'") or die("gagal".mysql_error());
	}
		$data['success'] = true;
		$data['message'] = 'Success!';
	// return all our data to an AJAX call
	echo json_encode($data);