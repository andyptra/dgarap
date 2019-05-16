<?php
include"../../../inc/konek.php";
koneksi_buka();
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM testimoni WHERE id=".$_POST['hapus']);
} 