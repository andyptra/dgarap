<?php
include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data
$soal=$_POST['txtEditorContent6'];
$jwba=$_POST['txtEditorContent5'];
$jwbb=$_POST['txtEditorContent4'];
$jwbc=$_POST['txtEditorContent3'];
$jwbd=$_POST['txtEditorContent2'];
$jwbe=$_POST['txtEditorContent1'];
$id_soal=$_POST['id_soal'];
$jawab=$_POST['jawab'];
// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($soal))
		$errors['txtEditorContent6'] = 'Soal wajib di isi';
		
    if (empty($jwba))
		$errors['txtEditorContent5'] = 'Jawaban A wajib di isi';

	if (empty($jwbb))
		$errors['txtEditorContent4'] = 'Jawaban B wajib di isi';
	if (empty($jwbc))
		$errors['txtEditorContent3'] = 'Jawaban C wajib di isi';
	if (empty($jwbd))
		$errors['txtEditorContent2'] = 'Jawaban D wajib di isi';
	if (empty($jwbe))
		$errors['txtEditorContent1'] = 'Jawaban E wajib di isi';
		
	if (empty($jawab))
		$errors['jawab'] = 'Kunci Jawaban  wajib di isi';
    
	
// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
	$a=mysql_query("update soal set soal='$soal',a='$jwba',b='$jwbb',c='$jwbc',d='$jwbd',e='$jwbe',jawab='$jawab' where id_soal='$id_soal'") or die("gagal".mysql_error());
	}
		$data['success'] = true;
		$data['message'] = 'Success!';
	// return all our data to an AJAX call
	echo json_encode($data);