<?php 
session_start();
$xdz=$_POST['d']; 
$_SESSION['id']=$xdz;
$data=mysql_query("SELECT ujianku.id,ujianku.jsoal,dujian.nama_ujian, mode.acak,aktif.aktif, matakuliah.nama_matkul FROM ujianku,matakuliah,mode,aktif,dujian WHERE ujianku.nama_ujian=dujian.id AND ujianku.id_matkul=matakuliah.id_matkul AND ujianku.aktif=aktif.id AND ujianku.mode_soal=mode.id AND ujianku.id='$xdz'")or die("gagaal".mysql_error());
$dz=mysql_fetch_array($data);?>
<div class="col-md-12 col-sm-12 col-xs-12">

<div class="row">
    
    <form action="0873ef93125b406d922477cde1daf78f" method="post" enctype="multipart/form-data">
            <input type="hidden" name="d" value="<?php echo"$xdz";?>">
				 <button type="Submit" class="btn btn-primary">Tambah Soal</button>
			</form>

    <!-- tempat untuk menampilkan data k -->

   <div id="data-ptra"></div>
   
    <!-- awal untuk modal dialog -->


    <div class="modal fade" id="dialog-ptra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah data ujian</h4>
          </div>

          <div class="modal-body">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button id="simpan-k" type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
<!-- akhir kode modal dialog -->
  </div>
            
            </div>
            
<script type="text/javascript">

(function($) {
  // fungsi dijalankan setelah seluruh dokumen ditampilkan
  $(document).ready(function(e) {
    
    // deklarasikan variabel
    var kd_k = 0;
    var main = "app/soal/k.datas.php";
    
    // tampilkan data k dari berkas k.data.php 
    // ke dalam <div id="data-ptra"></div>
    $("#data-ptra").load(main); 
	       // ketika tombol ubah/tambah di tekan
		   	// ketika tombol ubah/tambah di tekan
		$(document).on("click", ".ubah, .tambah", function () {

			
			var url = "app/soal/k.form.php";
			// ambil nilai id dari tombol ubah
			kd_k = this.id;
			
			if(kd_k != 0) {
				// ubah judul modal dialog
				$("#myModalLabel").html("Ubah Data Ujian");
			} else {
				// saran dari mas hangs 
				$("#myModalLabel").html("Tambah Data Ujian");
			}

			$.post(url, {id: kd_k} ,function(data) {
				// tampilkan k.form.php ke dalam <div class="modal-body"></div>
				$(".modal-body").html(data).show();
				
			});
		});
		
		// ketika tombol hapus ditekan
		$(document).on("click", ".hapus", function () {
			var url = "app/soal/k.proses.php";
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
		$("#simpan-k").bind("click", function(event) {
			
			var url = "app/soal/k.proses.php";

			// mengambil nilai dari inputbox, textbox dan select
			var v_nama_ujian 		= $('input:text[name=nama_ujian]').val();
	
		 	// mengirimkan data ke berkas transaksi.proses.php untuk di proses
			
			$.post(url, {nama_ujian: v_nama_ujian, id: kd_k} ,function() {
				// tampilkan data k yang sudah di perbaharui
				// ke dalam <div id="data-ptra"></div>
				$("#data-ptra").load(main);
 				
				// tampilkan dialog konfirmasi
			
			var answer = alertify.success("Data Berhasil Di simpan");

				// sembunyikan modal dialog
				$('#dialog-ptra').modal('hide');
				
				
				// kembalikan judul modal dialog
				$("#myModalLabel").html("Tambah Data Ujian");
			});
		});
  });
}) (jQuery);

    </script>

            