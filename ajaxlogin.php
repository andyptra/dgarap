<?php
include("inc/konek.php");
session_start();
koneksi_buka();
if(isset($_POST['username']) && isset($_POST['password']))
{
// username and password sent from Form
$username=mysql_real_escape_string($_POST['username']); 
$ps=md5(mysql_real_escape_string($_POST['password'])); 
$acv = "kuiol9skdsmdwrewrq99908765rftyu7";
$dacv= md5($acv . md5($ps) . $acv );
$result=mysql_query("SELECT * FROM usergarap WHERE username='$username' and password='$dacv'") or die(mysql_error());
$count=mysql_num_rows($result);

$row=mysql_fetch_array($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0)
{
$_SESSION['namauser']=$row['username'];
$_SESSION['passuser']=$row['password'];
$_SESSION['iduser']=$row['id_userk'];
echo $row['username'];
echo $row['password'];
}

}
?>