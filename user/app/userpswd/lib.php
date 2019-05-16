<?php
include"../../../inc/konek.php";
koneksi_buka();

$ps=md5($_POST['passwordlama']); 
$acv = "kuiol9skdsmdwrewrq99908765rftyu7";
$dacv= md5($acv . md5($ps) . $acv );
if(!empty($_POST["passwordlama"])) {
$result = mysql_query("SELECT count(*) FROM usergarap WHERE password='" . $dacv. "'");
$row = mysql_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "<span style='color: #2FC332;;'> password lama benar.</span>";
else echo "<span style='color: #D60202'> password lama salah</span>";
}

?>