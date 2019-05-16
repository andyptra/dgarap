
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
    var main = "app/testimoni/k.data.php";
    
    // tampilkan data k dari berkas k.data.php 
    // ke dalam <div id="data-ptra"></div>
    $("#data-ptra").load(main); 
	       
		
		
		// ketika tombol hapus ditekan
		$(document).on("click", ".hapus", function () {
			var url = "app/testimoni/k.proses.php";
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
		$(document).on("click", ".update", function () {
			var url = "app/testimoni/publish.php";
			// ambil nilai id dari tombol hapus
			kd_k = this.id;
			
			// tampilkan dialog konfirmasi
			var answer = alertify.set({ buttonFocus: "cancel" });
			alertify.confirm("Apakah anda yakin mau publish testimoni ini?", function (e) {
				if (e) {
					
					$.post(url, {update: kd_k} ,function() {
					// tampilkan data k yang sudah di perbaharui
					// ke dalam <div id="data-ptra"></div>
					$("#data-ptra").load(main);
				});
					alertify.success("testimoni berhasil di terbitkan");
				} else {
					alertify.error("Proses Dibatalkan");
				}
			});
						
		});
			$(document).on("click", ".batal", function () {
			var url = "app/testimoni/batal.php";
			// ambil nilai id dari tombol hapus
			kd_k = this.id;
			
			// tampilkan dialog konfirmasi
			var answer = alertify.set({ buttonFocus: "cancel" });
			alertify.confirm("Apakah anda yakin mau batalkan testimoni ini?", function (e) {
				if (e) {
					
					$.post(url, {batal: kd_k} ,function() {
					// tampilkan data k yang sudah di perbaharui
					// ke dalam <div id="data-ptra"></div>
					$("#data-ptra").load(main);
				});
					alertify.success("testimoni berhasil di batalkan publish");
				} else {
					alertify.error("Proses Dibatalkan");
				}
			});
						
		});


  });
}) (jQuery);

    </script>
  
            <link href=".../js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  			<link href=".../js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
			<script src="../js/datatables/jquery.dataTables.min.js"></script>
            <script src="../js/datatables/dataTables.bootstrap.js"></script>     
            <script src="../js/datatables/dataTables.fixedHeader.min.js"></script>