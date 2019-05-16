<?php
session_Start();
$id_ujian=$_POST['id'];
$id_matkul=$_POST['id_matkul'];
$_SESSION['id']=$id_ujian;
$_SESSION['id_matkul']=$id_matkul;
mysql_query("SELECT hasil_jwb.*, usergarap.firstn, usergarap.lastn,dujian.nama_ujian,
					matakuliah.nama_matkul FROM hasil_jwb,usergarap,dujian,matakuliah,ujianku WHERE 
					hasil_jwb.id_user=usergarap.id_userk  and hasil_jwb.id_ujian=ujianku.id and 
					hasil_jwb.id_matkul='$id_matkul' and dujian.id='$id_ujian'")or die("gagaal".mysql_error());
?>
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="row">
    


    <!-- tempat untuk menampilkan data k -->

    <div id="data-ptra"></div>
   
    <!-- awal untuk modal dialog -->


    
<!-- akhir kode modal dialog -->
  </div>
            
            </div>
            
<script type="text/javascript">

(function($) {
  // fungsi dijalankan setelah seluruh dokumen ditampilkan
  $(document).ready(function(e) {
    
    // deklarasikan variabel
    var kd_k = 0;
    var main = "app/nilai/k.datas.php";
    
    // tampilkan data k dari berkas k.data.php 
    // ke dalam <div id="data-ptra"></div>
    $("#data-ptra").load(main); 
	    
		
  });
}) (jQuery);

    </script>

          