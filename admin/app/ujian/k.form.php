<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
// tangkap variabel kd_k

$kd_k = $_POST['id'];
// query untuk menampilkan  berdasarkan kd_k
$d = mysql_fetch_array(mysql_query("SELECT * FROM ujianku WHERE id=".$kd_k));

// jika kd_k > 0 / form ubah data
if($kd_k> 0) { 
$nama_ujian=$d[nama_ujian];
$id_matkul=$d[id_matkul];
$jsoal=$d[jsoal];
$penilaian=$d[penilaian];
$kkm=$d[kkm];
$waktu=$d[waktu];
$aktif=$d[aktif];
$mode_soal=$d[mode_soal];



//form tambah data
} else {
$nama_ujian='';
$id_matkul='';
$jsoal='';
$penilaian='';
$kkm='';
$waktu='';
$aktif='';
$mode_soal='';


		 }
	 ?>
<form class="form-horizontal">

            <div class="form-group">
                    <label>Nama Ujian</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-check"></i>
                      </div>
                     <select name="nama_ujian"  class="form-control">
                  <option value="">- Pilih Ujian -</option>
                    <?php $querydz=mysql_query("select * from dujian");
					while($ddz=mysql_fetch_array($querydz)){
					if($ddz[0]==$nama_ujian){?>
					<option value="<?php echo"$ddz[0]";?>" selected><?php echo"$ddz[1]";?></option>
					<?php } else {?> <option value="<?php echo"$ddz[0]";?>"><?php echo"$ddz[1]";?><?php }} ?></option>
                     </select></div><!-- /.input group -->
                  </div><!-- /.form group -->
				
                   <div class="form-group">
                    <label>Mata kuliah</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-check"></i>
                      </div>
                     <select name="id_matkul"  class="form-control">
                  <option value="">- Pilih -</option>
                    <?php $queryl=mysql_query("select * from matakuliah");
					while($dl=mysql_fetch_array($queryl)){
					if($dl[0]==$id_matkul){?>
					<option value="<?php echo"$dl[0]";?>" selected><?php echo"$dl[1]";?></option>
					<?php } else {?> <option value="<?php echo"$dl[0]";?>"><?php echo"$dl[1]";?><?php }} ?></option>
                     </select></div><!-- /.input group -->
                  </div><!-- /.form group -->
				
						
                    <div class="form-group">
                    <label>jumlah_soal</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div><input name='jsoal' class="form-control" type='text' size="100" placeholder="Jumlah soal" value="<?php echo"$jsoal";?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                    <div class="form-group">
                    <label>Skala Nilai</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div><input name='penilaian' class="form-control" type='text' size="100" placeholder="Skala Nilai" value="<?php echo"$penilaian";?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

 					<div class="form-group">
                    <label>KKM</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div><input name='kkm' class="form-control" type='text' size="100" placeholder="KKM" value="<?php echo"$kkm";?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>Waktu Ujian</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-check"></i>
                      </div>
                     <select name="waktu"  class="form-control">
                  <option value="">- Pilih -</option>
                    <?php $query2w=mysql_query("select * from waktu");
					while($d2w=mysql_fetch_array($query2w)){
					if($d2w[1]==$waktu){?>
					<option value="<?php echo"$d2w[1]";?>" selected><?php echo"$d2w[2]";?></option>
					<?php } else {?> <option value="<?php echo"$d2w[1]";?>"><?php echo"$d2w[2]";?><?php }} ?></option>
                     </select></div><!-- /.input group -->
                  </div><!-- /.form group -->

					<div class="form-group">
                    <label>Aktif</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-check"></i>
                      </div>
                     <select name="aktif"  class="form-control">
                  <option value="">- Pilih -</option>
                    <?php $query2a=mysql_query("select * from aktif");
					while($d2a=mysql_fetch_array($query2a)){
					if($d2a[0]==$aktif){?>
					<option value="<?php echo"$d2a[0]";?>" selected><?php echo"$d2a[1]";?></option>
					<?php } else {?> <option value="<?php echo"$d2a[0]";?>"><?php echo"$d2a[1]";?><?php }} ?></option>
                     </select></div><!-- /.input group -->
                  </div><!-- /.form group -->
<div class="form-group">
                    <label>Mode Soal</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-check"></i>
                      </div>
                     <select name="mode_soal"  class="form-control">
                  <option value="">- Pilih -</option>
                    <?php $query2m=mysql_query("select * from mode");
					while($d2m=mysql_fetch_array($query2m)){
					if($d2m[0]==$mode_soal){?>
					<option value="<?php echo"$d2m[0]";?>" selected><?php echo"$d2m[1]";?></option>
					<?php } else {?> <option value="<?php echo"$d2m[0]";?>"><?php echo"$d2m[1]";?><?php }} ?></option>
                     </select></div><!-- /.input group -->
                  </div><!-- /.form group -->


          
     
</form>
