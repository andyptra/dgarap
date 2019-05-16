<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_

if(isset($_POST['update'])) {
	mysql_query("Update testimoni set status='Y' WHERE id=".$_POST['update']);
} 


?>
