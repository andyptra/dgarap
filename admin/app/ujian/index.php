
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="row">
    
    
<a href="#dialog-ptra" id="0" class="btn tambah" data-toggle="modal">
				<button class="btn btn-primary ">
      Tambah data
    </button>
			</a>
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
    var main = "app/ujian/k.data.php";
    
    // tampilkan data k dari berkas k.data.php 
    // ke dalam <div id="data-ptra"></div>
    $("#data-ptra").load(main); 
	       // ketika tombol ubah/tambah di tekan
		   	// ketika tombol ubah/tambah di tekan
		$(document).on("click", ".ubah, .tambah", function () {

			
			var url = "app/ujian/k.form.php";
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
			var url = "app/ujian/k.proses.php";
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
			
			var url = "app/ujian/k.proses.php";

			// mengambil nilai dari inputbox, textbox dan select
			var v_nama_ujian 		= $('select[name=nama_ujian]').val();
			var v_id_matkul			= $('select[name=id_matkul]').val();
			var v_jsoal	 			= $('input:text[name=jsoal]').val();
			var v_penilaian 		= $('input:text[name=penilaian]').val();
			var v_kkm				= $('input:text[name=kkm]').val();
			var v_waktu				= $('select[name=waktu]').val();
			var v_aktif				= $('select[name=aktif]').val();
			var v_mode_soal			= $('select[name=mode_soal]').val();
			
		 	// mengirimkan data ke berkas transaksi.proses.php untuk di proses
			
			$.post(url, {nama_ujian: v_nama_ujian, id_matkul: v_id_matkul, jsoal: v_jsoal, 
			penilaian: v_penilaian, kkm: v_kkm, waktu: v_waktu, aktif : v_aktif, mode_soal: v_mode_soal, id: kd_k} ,function() {
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
  
             