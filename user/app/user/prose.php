<?php
include"../../../inc/konek.php";
koneksi_buka();
$errors         = array();  	
$data 			= array(); 		
$firstn=$_POST['firstn'];
$lastn=$_POST['lastn'];
$email=$_POST['email'];
$id=$_POST['id'];

	if ( ! empty($errors)) {

		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
	$a=mysql_query("update usergarap set 
									firstn='$firstn',
									lastn='$lastn',
									email='$email'
									where id='$id'") or die("gagal".mysql_error());
	}
		$data['success'] = true;
		$data['message'] = 'Success!';
	// return all our data to an AJAX call
	echo json_encode($data);