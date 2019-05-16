
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
    var main = "app/nilai/k.data.php";
    
    // tampilkan data k dari berkas k.data.php 
    // ke dalam <div id="data-ptra"></div>
    $("#data-ptra").load(main); 
	     
		
  });
}) (jQuery);

    </script>

          