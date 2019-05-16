<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_k

$kd_k = $_POST['id'];
// query untuk menampilkan  berdasarkan kd_k
$d = mysql_fetch_array(mysql_query("SELECT * FROM cat_post WHERE id=".$kd_k));

// jika kd_k > 0 / form ubah data
if($kd_k> 0) { 
$nama=$d[nama];


//form tambah data
} else {
$nama='';
	 }
	 ?>
<form class="form-horizontal">

           <div class="col-md-9 col-sm-9 col-xs-12">
                       <input name='nama' class="form-control" type='text' size="100" placeholder="Nama ujian" value="<?php echo"$nama";?>"/>
                      </div>
 

          
     
</form>
