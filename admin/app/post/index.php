<div class="col-md-12 col-sm-12 col-xs-12">

<div class="row">
    
    <form action="37fa18ef31d26aa7994347ec39907a7b" method="post" enctype="multipart/form-data">
            <button type="Submit" class="btn btn-primary">Tambah Berita</button>
			</form>

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
    var main = "app/post/kdata_h.php";
    
    // tampilkan data k dari berkas k.data.php 
    // ke dalam <div id="data-ptra"></div>
    $("#data-ptra").load(main); 
	      
		
		
		// ketika tombol hapus ditekan
		$(document).on("click", ".hapus", function () {
			var url = "app/post/hapus.php";
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

            