         <?php 
		 session_start();
			$idku=$_SESSION[iduser];
			include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
			$angkas='1';
			$pp=mysql_query("select * from profil where id='$angkas'");
			$rr=mysql_fetch_array($pp);
		 ?>
		 
		 
		 <link rel="stylesheet" href="../css/alertify.core.css" />
			<link rel="stylesheet" href="../css/alertify.default.css" id="toggleCSS" />
			<script src="../js/jquery.min.js"></script>
			<script type="text/javascript" src="app/profil/prose.js"></script>
			<script src="../js/alertify.min.js"></script>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Halaman Profil Website</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">
					<input type="hidden" name="id" value="<?php echo"$rr[id]";?>"/>
					<div class="form-group" id="nama_course">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_course">Nama Course
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control col-md-7 col-xs-12" name="nama_course" value="<?php echo"$rr[nama_course]";?>">
                      </div>
                    </div>
                    <div id="founder" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="founder">Founder
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="founder" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo"$rr[founder]";?>">
                      </div>
                    </div>
                     <div id="email" class="form-group">
                      <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input  class="form-control col-md-7 col-xs-12" type="text" name="email" value="<?php echo"$rr[email]";?>">
                      </div>
                    </div>
					
					 <div  id="no_tlp" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telp">Nomor Telephone
				
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="no_tlp"  class="form-control col-md-7 col-xs-12" name="no_tlp" value="<?php echo"$rr[no_tlp]";?>">
                      </div>
                    </div>
                    <div  id="alamat" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telp">Alamat
				
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <textarea name="alamat"  class="form-control"><?php echo"$rr[alamat]"?></textarea>
                      </div>
                    </div>
                    
                   
					
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                       
                        <button type="submit" class="btn btn-success">Update</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>