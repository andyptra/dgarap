<?php
include("inc/konek.php");
koneksi_buka();


if(!empty($_POST["username"])) {
$result = mysql_query("SELECT count(*) FROM usergarap WHERE username='" . $_POST["username"] . "'");
$row = mysql_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "<span style='color: #D60202;'> Username tidak tersedia.</span>";
else echo "<span style='color: #2FC332;'> Username tersedia.</span>";
}
?>