<?php
include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();

$dzp=$_POST['d'];
$soal=mysql_query("select * from soal where id_soal='$dzp'");
$rr=mysql_fetch_array($soal);
?>

<link rel="stylesheet" href="../css/alertify.core.css" />
<link rel="stylesheet" href="../css/alertify.default.css" id="toggleCSS" />
 <script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../addon/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="app/soal/soalubah.js"></script>

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

<div class="container-fluid">
<div class="row">
<h2 class="demo-text">Form tambah soal</h2>
<div class="container">
<div class="row">
	<div class="col-lg-10 nopadding">
    <form method="post" name="cform" id="cform">
        <input type="hidden" name="id_soal" value="<?php echo"$dzp";?>"/>
    	<div id="txtEditorContent6" class="form-group">
                    <label>Isikan Soal di bawah ini  </label>
    <textarea name="txtEditorContent6" style="width:100%"><?php echo"$rr[soal]";?></textarea><br />
        
                    </div><!-- /.input group -->
                  
        <div id="txtEditorContent5" class="form-group">
                    <label>Jawaban A  </label>
      				<textarea name="txtEditorContent5"><?php echo"$rr[a]";?></textarea>
        
                  </div><!-- /.form group -->
                  
                   <div id="txtEditorContent4" class="form-group">
                    <label>Jawaban B  </label>
                    <div class="form-group">
      						  <textarea name="txtEditorContent4"><?php echo"$rr[b]";?></textarea>
        
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                 
                  <div id="txtEditorContent3" class="form-group">
                    <label>Jawaban C  </label>
                    <div class="form-group">
      						  <textarea name="txtEditorContent3"><?php echo"$rr[c]";?></textarea>
        
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div id="txtEditorContent2" class="form-group">
                    <label>Jawaban D  </label>
                    <div class="form-group">
      						  <textarea name="txtEditorContent2"><?php echo"$rr[d]";?></textarea>
        
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                   <div id="txtEditorContent1" class="form-group">
                    <label>Jawaban E  </label>
                    <div class="form-group">
      						  <textarea name="txtEditorContent1"><?php echo"$rr[e]";?></textarea>
        
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                 <div class="form-group" id="jawab">
                    <label>Pilih Kunci Jawaban</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-dot-circle-o"></i>
                      </div>
                     
                      <select name="jawab" class="form-control">
                        <option value="<?php    echo "$rr[jawab]";?>" selected><?php    echo "$rr[jawab]";?></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        
                      </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
<div id="simple-msg"></div>

		<input type="submit" class="btn btn-success" value="ubah Soal"></button>
<a href="69438e8a13c1e6e67c3960d16e5c0a6e"><input type="button" class="btn btn-warning" value="Selesai"></button></a>

</form>		

</div>
</div>  
</div>
</div>
</div>
<div class="container-fluid footer">
</div>

</body>
</html>
