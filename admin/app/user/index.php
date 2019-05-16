         <?php 
		 session_start();
			$idku=$_SESSION[iduser];
		// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
			$pp=mysql_query("select * from user where username='$_SESSION[namauser]'");
			$rr=mysql_fetch_array($pp);
		 ?>
		 
		 
		 <link rel="stylesheet" href="../css/alertify.core.css" />
			<link rel="stylesheet" href="../css/alertify.default.css" id="toggleCSS" />
			<script src="../js/jquery.min.js"></script>
			<script type="text/javascript" src="app/user/prose.js"></script>
			<script src="../js/alertify.min.js"></script>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Edit <small>data admin </small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">
					<input type="hidden" name="id" value="<?php echo"$rr[id]";?>"/>
					
                    <div id="firstn" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Depan<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="firstn" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo"$rr[firstn]";?>">
                      </div>
                    </div>
                    <div id="lastn" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Belakang <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="lastn" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo"$rr[lastn]";?>">
                      </div>
                    </div>
					 <div  id="username" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username 
				
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="username"  class="form-control col-md-7 col-xs-12" disabled value="<?php echo"$rr[username]";?>">
                      </div>
                    </div>
                    <div id="email" class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input  class="form-control col-md-7 col-xs-12" type="text" name="email" value="<?php echo"$rr[email]";?>">
                      </div>
                    </div>
                    <div id="nomerhp" class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">nomer Telephone</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input  class="form-control col-md-7 col-xs-12" type="text" name="nomerhp" value="<?php echo"$rr[nomerhp]";?>">
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