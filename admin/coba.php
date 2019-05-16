<?php
session_start();
include"inc/konek.php";
if(!empty($_SESSION[namauser]) AND !empty($_SESSION[passuser])){
	echo"login berhasil";
}
else{
echo"salah";
}