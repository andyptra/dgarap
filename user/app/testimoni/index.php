<div class="col-md-12 col-sm-12 col-xs-12">

<div class="row">
    <?php
	include"../../../inc/konek.php";
	koneksi_buka();
	session_start();
	$namaz=$_SESSION[namauser];
    $pft=mysql_fetch_array(mysql_query("select * from usergarap where username='$namaz'"))or die("gagaal".mysql_error());
	$qq=mysql_query("select count(id) as numb from testimoni where id_userk='$pft[id_userk]'");
	$rr=mysql_fetch_array($qq);
	if($rr[numb]==0){
		?>
	<form action="ee9e86749051daebc8e27212ff119a4e" method="testimoni" enctype="multipart/form-data">
            <button type="Submit" class="btn btn-primary">Tambah Testimoni</button>
			</form>
	
		<?php
	}else{
		echo"<button class='btn btn-danger'>testimoni hanya bisa di isi 1 kali</button>";
	}
	?>
    
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
    var main = "app/testimoni/kdata_h.php";
    
    // tampilkan data k dari berkas k.data.php 
    // ke dalam <div id="data-ptra"></div>
    $("#data-ptra").load(main); 
	      
		
		
		// ketika tombol hapus ditekan
		$(document).on("click", ".hapus", function () {
			var url = "app/testimoni/hapus.php";
			// ambil nilai id dari tombol hapus
			kd_k = this.id;
			
			// tampilkan dialog konfirmasi
			var answer = alertify.set({ buttonFocus: "cancel" });
			alertify.confirm("Apakah anda yakin mau menghapus data ini?", function (e) {
				if (e) {
					
					$.post(url, {hapus: kd_k} ,function() {
					// tampilkan data k yang sudah di perbaharui
					// ke dalam <div id="data-ptra"></div>
					$("#data-ptra").load(main);
				});
					alertify.success("Data Berhasil di hapus");
				} else {
					alertify.error("Proses Dibatalkan");
				}
			});
						
		});
		
		// ketika tombol simpan ditekan
		
  });
}) (jQuery);

    </script>

            