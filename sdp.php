<?php
include("inc/konek.php");
koneksi_buka();

$js = "U";
$query = "SELECT max(id_userk) as maxID FROM usergarap WHERE id_userk LIKE '$js%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$idMax = $data['maxID'];
$noUrut = (int) substr($idMax, 1, 10);
$noUrut++;
$newID = $js . sprintf("%09s", $noUrut);

$namad=$_POST['firstname'];
$namab=$_POST['lastname'];
$usr=$_POST['username'];
$mail=$_POST['email'];
$ps=$_POST['password_name'];
$psd=md5($ps);
$acv = "kuiol9skdsmdwrewrq99908765rftyu7";
$finalpassword = md5($acv . md5($psd) . $acv );

$a=mysql_query("insert into usergarap(id,id_userk,firstn,lastn,username,password,email)
 values('','$newID','$namad','$namab','$usr','$finalpassword','$mail')");
header('location:index.html');
