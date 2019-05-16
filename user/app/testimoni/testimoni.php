<?php
include"../../../inc/konek.php";
koneksi_buka();
session_start();
$nama=$_SESSION[namauser];
$qq=mysql_fetch_array(mysql_query("select * from usergarap where username='$nama'"))or die("gagaal".mysql_error());

?>
<!doctype html>
<html>
<head>
<title>Soal</title>
<link rel="stylesheet" href="../css/alertify.core.css" />
<link rel="stylesheet" href="../css/alertify.default.css" id="toggleCSS" />
 <script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../addon/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="app/testimoni/post.js"></script>

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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_post" value="<?php echo"$_POST[d]";?>"/>
		<input type="hidden" name="id_userk" value="<?php echo"$qq[id_userk]";?>"/>
<div class="form-group" id="judul">
                    <label>nama user</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-info"></i>
                      </div><input name='nama' class="form-control" disabled size="100" placeholder="nama" value="<?php echo"$qq[firstn]  $qq[lastn]";?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

        
<div id="isi-group" class="form-group">
                    <label>Isi testimoni  </label>
    <textarea name="isi" style="width:100%;"></textarea><br />
        
                    </div><!-- /.input group -->
<div id="simple-msg"></div>

		<input type="submit" class="btn btn-success" value="Simpan testimoni"></button>
		<a href="9760e2cb7c0c272f0ba87a4b500b54cb"><input type="button" class="btn btn-info" value="Kembali"></button></a>

</form>

</div>
</div>  
</div>
</div>



</body>
</html>
