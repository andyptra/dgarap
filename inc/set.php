<?php
include"konek.php";
koneksi_buka();
$id='1';
$ndy=mysql_fetch_array(mysql_query("select * from profil where id='$id'"));


$founder=$ndy[1];
$course=$ndy[2];
$alamat=$ndy[3];
$no_telp=$ndy[4];
$email=$ndy[5];