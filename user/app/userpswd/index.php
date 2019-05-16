         <?php 
		 session_start();
			$idku=$_SESSION[iduser];
include"../../../inc/konek.php";
koneksi_buka();
			$pp=mysql_query("select * from usergarap where username='$_SESSION[namauser]'");
			$rr=mysql_fetch_array($pp);
		 ?>
		 
		 
		 <link rel="stylesheet" href="../css/alertify.core.css" />
			<link rel="stylesheet" href="../css/alertify.default.css" id="toggleCSS" />
			<script src="../js/jquery.min.js"></script>
			<script type="text/javascript" src="app/userpswd/prose.js"></script>
			<script src="../js/alertify.min.js"></script>
			<script src="../js/falidasi.js"></script>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Edit <small>data user </small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="daftardisik" method="post" data-parsley-validate class="form-horizontal form-label-left">
					<input type="hidden" name="id" value="<?php echo"$rr[id]";?>"/>
					<div class="form-group" id="id_userk">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID User
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"   disabled class="form-control col-md-7 col-xs-12" value="<?php echo"$rr[id_userk]";?>">
                      </div>
                    </div>
                    
					 <div  id="username" class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username 
				
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="username"  class="form-control col-md-7 col-xs-12" disabled value="<?php echo"$rr[username]";?>">
                      </div>
                    </div>
                    <div id="password1" class="form-group">
                      <label  class="control-label col-md-3 col-sm-3 col-xs-12">Password lama</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control" type="password" name="passwordlama" placeholder="password lama" id="passwordlama" onBlur="ckpassword()">
						<span id="passwordstatus"></span>
                      </div>
                    </div>
					<div id="password2" class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">password Baru</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control" name="password_name" type="password" placeholder="Password" id="password_id">
						<label  class="error" for="password_id"></label>
                      </div>
                    </div>
                    
					<div id="password3" class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">confirm password Baru</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <input class="form-control" name="confirm_password_name" type="password" placeholder="Ulangi password" id="confirm_password_id">
					   <label  class="error" for="confirm_password_id"></label>
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
			
			<script type="text/javascript">
			jQuery(function ($) {
			
				$("#daftardisik").validate({
				
				rules: {
					
					 password_name: {
							required: true,
							minlength: 5
						},
						confirm_password_name: {
							required: true,
							minlength: 5,
							equalTo: "#password_id"
						},
				},
				messages: {
					
					password_name: {
						required: "Masukkan Password anda",
						minlength: "Password harus terdiri dari minimal 5 karakter"
					},
					confirm_password_name: {
						required: "Ulangi Password anda",
						minlength: "Password harus terdiri dari minimal 5 karakter",
						equalTo: "Password tidak cocok"
					},
				}
				});
		});
			</script>
            <script type="application/javascript">
			function ckpassword() {
			jQuery.ajax({
			url: "app/userpswd/lib.php",
			data:'passwordlama='+$("#passwordlama").val(),
			type: "POST",
			success:function(data){
			$("#passwordstatus").html(data);
			},
			error:function (){}
			});
		}
            </script>