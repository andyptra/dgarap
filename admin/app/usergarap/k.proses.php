<?php
include"../../../inc/konek.php";
koneksi_buka();
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM usergarap WHERE id=".$_POST['hapus'])or die("gagaal".mysql_error());
}