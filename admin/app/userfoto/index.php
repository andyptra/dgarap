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
					<script src="../js/alertify.min.js"></script>
		
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Edit <small>data admin</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form enctype="multipart/form-data" method="post"  action="prosesupload.php" class="form-horizontal form-label-left">
					<input type="hidden" name="id" value="<?php echo"$rr[id]";?>"/>
					<div class="text-center">
					<?php if(empty($rr[dp])){
					?>
					<img src="foto/avatar04.png" width="250px" style='height: 205px !important;' class="img-thumbnail">
					  <?php					
					}else{	
					?>
					<img src="foto/<?php echo"$rr[dp]";?>" width="250px" style='height: 205px !important;' class="img-thumbnail">
					<?php
					}
					?>
					
					  
					</div>
					
                    <br>
					 <div  id="username" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username 
				
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="username"  class="form-control col-md-7 col-xs-12" disabled value="<?php echo"$rr[username]";?>">
                      </div>
                    </div>
                    <div id="email" class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input  class="form-control col-md-7 col-xs-12" type="file" name="fgambar" size="100">
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