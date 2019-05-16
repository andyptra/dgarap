<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_
// proses menghapus data mahasiswa
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM ujianku WHERE id=".$_POST['hapus']);
} else {
	// deklarasikan variabel
	$kd_k	= $_POST['id'];
	$nama_ujian=$_POST[nama_ujian];	
	$id_matkul=$_POST[id_matkul];
	$jsoal=$_POST[jsoal];
	$penilaian=$_POST[penilaian];
	$kkm=$_POST[kkm];
	$waktu=$_POST[waktu];
	$aktif=$_POST[aktif];
	$mode_soal=$_POST[mode_soal];
 
	if($kd_k == 0) {
	mysql_query("insert into ujianku(nama_ujian,id_matkul,jsoal, penilaian, kkm,waktu,aktif,mode_soal)
	values('$nama_ujian',
			'$id_matkul',
	 		'$jsoal',
	    	'$penilaian',
		 	'$kkm','$waktu','$aktif','$mode_soal')") or die("gagal".mysql_error());
		// proses ubah data ujian
		} else {
			mysql_query(" update ujianku set
	 		nama_ujian='$nama_ujian',
			id_matkul='$id_matkul',
	 		jsoal='$jsoal',
	    	penilaian='$penilaian',
		 	kkm='$kkm',
			waktu='$waktu',
			aktif='$aktif',
			mode_soal='$mode_soal'
			where id='$kd_k'");
		}
	}


?>
