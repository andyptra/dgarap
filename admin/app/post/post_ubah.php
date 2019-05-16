<?php
include"../../../inc/konek.php";
koneksi_buka();
$dzp=$_POST['d'];
$_SESSION['pz']=$dzp;
$post=mysql_query("select * from post where id='$dzp'");
$rr=mysql_fetch_array($post);
?>
<!doctype html>
<html>
<head>
<title>Soal</title>
<link rel="stylesheet" href="../css/alertify.core.css" />
<link rel="stylesheet" href="../css/alertify.default.css" id="toggleCSS" />
 <script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../addon/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="app/post/post_ubah.js"></script>

<script src="../js/alertify.min.js"></script>

<script type="text/javascript">
tinymce.init({
    mode: "textareas",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    
});
</script>





</head>
<body>



<div class="container-fluid">


<div class="container">
<div class="row">
	<div class="col-lg-10 nopadding">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo"$dzp";?>"/>
<div class="form-group" id="judul">
                    <label>Judul Berita</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-info"></i>
                      </div><input name='judul' class="form-control" type='text' size="100" placeholder="Judul Berita" value="<?php echo"$rr[judul]";?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

     <div class="form-group" id="gambar">
                    <label>Feature Image</label>
                    
                    <div class="input-group">
                     <img width="50" height="50"  src="../uploads/<?php echo"$rr[feature_image]";?>"> <input type="file" name="file" id="file"  />
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->   
<div id="isi-group" class="form-group">
                    <label>Isi Berita atau Konten  </label>
    <textarea name="isi" style="width:100%;"><?php echo"$rr[isi]";?></textarea><br />
        
                    </div><!-- /.input group -->
<div class="form-group" id="kategori_berita-group">
                    <label>Pilih Kategori Berita</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-tag"></i>
                      </div>
                      <select name="kategori_berita" class="form-control">
                    <option value="" selected>- Pilih Kategori Berita -</option>
                    <?php $querya=mysql_query("select*from cat_post");
					while($da=mysql_fetch_array($querya)){
						if($rr[id_kategori]==$da[id]){
					?>
					<option value="<?php echo"$da[0]";?>" selected><?php echo"$da[1]";?></option>
					<?php } else {?><option value="<?php echo"$da[0]";?>"><?php echo"$da[1]";?></option>
					<?php }} ?>
                </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
<div id="simple-msg"></div>

		<input type="submit" class="btn btn-success" name="simpan" value="ubah Post"></button>
		<a href="e0bb6d929cb37f05126ff2c112e6bc14"><input type="button" class="btn btn-info" value="Kembali"></button></a>

</form>

</div>
</div>  
</div>
</div>



</body>
</html>
