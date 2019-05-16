<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
$errors         = array();  	
$data 			= array(); 		

$pswd=md5($_POST['password_name']); 
$acv = "kuiol9skdsmdwrewrq99908765rftyu7";
$dacv= md5($acv . md5($pswd) . $acv );
$id=$_POST['id'];

	if ( ! empty($errors)) {

		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
		
	

	$a=mysql_query("update user set password='" . $dacv. "' where id='$id'") or die("gagal".mysql_error());
	}
		$data['success'] = true;
		$data['message'] = 'Success!';
	// return all our data to an AJAX call
	echo json_encode($data);