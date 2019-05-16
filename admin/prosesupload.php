<?php
// panggil file koneksi.php

include"../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
$id=$_POST['id'];
$lokasii=$_FILES['fgambar']['tmp_name'];
$typee=$_FILES['fgambar']['type'];
$edit_foto=$_FILES['fgambar']['name'];
$cb=mysql_fetch_array(mysql_query("select * from user where id='$id'"))or die("gagal".mysql_error());

if(!empty($lokasii)){
	move_uploaded_file($lokasii,"foto/$edit_foto");
	unlink("foto/$cb[dp]");
	$zzz=mysql_escape_string($edit_foto);
	mysql_query("Update user set dp='$zzz'
								 where id='$id'")or die("gagal".mysql_error());
	header('location:bc81a83ad6096ac7f777ece30fd16dcb');
	}
	else{
	mysql_query("Update user set dp='$cb[dp]'
								 where id='$id'")or die("gagal".mysql_error());
	header('location:bc81a83ad6096ac7f777ece30fd16dcb');	
	}