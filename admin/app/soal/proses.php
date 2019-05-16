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
$id_ujian=$_POST['id_ujian'];

$jawab=$_POST['jawab'];
//genereate kode soal

$js = "A";
$query = "SELECT max(id_soal) as maxID FROM soal WHERE id_soal LIKE '$js%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$idMax = $data['maxID'];
$noUrut = (int) substr($idMax, 1, 10);
$noUrut++;
$newID = $js . sprintf("%09s", $noUrut);

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
	/*$bz=mysql_fetch_array(mysql_query("SELECT jsoal FROM ujianku WHERE id='$id_ujian'"));
	$qz=mysql_fetch_array(mysql_query("select count(soal.id_ujian) as jum from soal WHERE soal.id_ujian='$id_ujian' "));
	
	if($qz[jum]>=$bz[jsoal]){
		echo"data sudah penuh";
	}
	else{ */
	$a=mysql_query("insert into soal(id,id_soal,id_ujian,soal,a,b,c,d,e,jawab)
	        values('','$newID','$id_ujian','$soal','$jwba','$jwbb','$jwbc','$jwbd','$jwbe','$jawab')") or die("gagal".mysql_error());
		$data['success'] = true;
		$data['message'] = 'Success!';
	
	}

	// return all our data to an AJAX call
	echo json_encode($data);