<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_k

$kd_k = $_POST['id'];
// query untuk menampilkan  berdasarkan kd_k
$d = mysql_fetch_array(mysql_query("SELECT * FROM materi WHERE id=".$kd_k));

// jika kd_k > 0 / form ubah data
if($kd_k> 0) { 
$nama_materi=$d[nama_materi];
$isi_materi=$d[fupload];

//form tambah data
} else {
$nama_materi='';
$isi_materi='';
	 }
	 ?>
<form class="form-horizontal"  enctype="multipart/form-data">

           <div class="col-md-9 col-sm-9 col-xs-12">
                       <input name='nama_materi' class="form-control" type='text' size="100" placeholder="Nama materi" value="<?php echo"$nama_materi";?>"/>
                       <div class="form-group">
                      
                      <input type="file"  name="fupload" size="40">
                      <p class="help-block">Pilih Foto</p>
                    </div>
                      </div>
 

          
     
</form>
