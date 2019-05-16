<?php
include("inc/konek.php");
koneksi_buka();


if(!empty($_POST["email"])) {
$result = mysql_query("SELECT count(*) FROM usergarap WHERE email='" . $_POST["email"] . "'");
$row = mysql_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "<span style='color: #D60202;'> email sudah dipakai.</span>";
else echo "<span style='color: #2FC332;'> email tersedia.</span>";
}
?>