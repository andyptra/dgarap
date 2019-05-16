<?php
error_reporting(0);
	define('DB_Nama','elearning');// sesuaikan dengan nama database anda
	define('DB_User','root');//sesuaikan dengan nama user database anda
	define('DB_Pswd','root');//sesuaikan dengan password database anda
	define('DB_host','localhost');//sesuaikan dengan host anda
	
	//fungsi membuat koneksi ke mysql
	function koneksi_buka(){
		mysql_select_db(DB_Nama,mysql_connect(DB_host,DB_User,DB_Pswd));
	}
	//fungsi menutup koneksi ke mysql
	function koneksi_tutup(){
		mysql_close(mysql_connect(DB_host,DB_User,DB_Pswd));
	}


koneksi_buka();
$id='1';
$ndy=mysql_fetch_array(mysql_query("select * from profil where id='$id'"));


$founder=$ndy[1];
$course=$ndy[2];
$alamat=$ndy[3];
$no_telp=$ndy[4];
$email=$ndy[5];