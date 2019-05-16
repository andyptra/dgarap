<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_

if(isset($_POST['batal'])) {
	mysql_query("Update testimoni set status='N' WHERE id=".$_POST['batal']);
} 


?>
