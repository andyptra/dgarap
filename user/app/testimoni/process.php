<?php
include"../../../inc/konek.php";
koneksi_buka();
session_start();

include"waktu.php"; 

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

$isi=mysql_escape_string($_POST['isi']);
$id_userk=$_POST['id_userk'];

//genereate kode soal


	
		
    if (empty($isi))
		$errors['isi'] = 'Isi testimoni wajib di isi';

		
	
	
// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

	 $q=mysql_query("INSERT INTO testimoni(
									id_userk,
									
                                    isi) 
                            VALUES('$id_userk',
									
									'$isi')")or die("gagaal".mysql_error());

		 
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);