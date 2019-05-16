 <section id="formasi">
	    	<div class="container text-center">
				<div class="row text-center">
					<div class="bg-image">
						<div class="col-md-6 col-md-offset-3 text-center share-text wow animated zoomInDown heading-text">
		                	<p class="heading">
		                		Login jika sudah punya akun, daftar jika belum punya akun
							</p>
						</div>
					</div>
				</div>
				<div class="row text-center main_content col-md-6">
				<div id="box">
					<form method="post" action="ajaxlogin.php">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="form">
							
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user fa-fw"></i>
	  								</span>
								 	<input type="text" required="" placeholder="Masukkan username" id="username" autocomplete="off" class="form-control" name="username">
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-lock fa-fw"></i>
	  								</span>
								 	<input type="password" required="" placeholder="Masukkan Password" id="password" autocomplete="off" class="form-control" name="password">
								</div>
								
							</div>
							<br/>
							
							
							<input class="btn btn-sub" type="submit" value="Sign In" id="login">
							<div id="error"></div>
						</div>
						
					</form>	
						

				</div></div>
				
				<div class="row text-center main_content col-md-6" id="#lgnf">
					<form method="post" action="#" id="daftardisik">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="form">
									
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" name="firstname" placeholder="First Name" id="firstname" >
								</div>
								<label  class="error" for="firstname"></label>
								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user fa-fw"></i>
	  								</span>
								 	<input class="form-control error" type="text" name="lastname" placeholder="Last Name" id="lastname" >
								</div>
								<label  class="error" for="lastname"></label>
								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user-secret fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" name="username" placeholder="username" id="usernama" >
								</div>
								<label  class="error" for="username"></label>
								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-envelope fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" name="email" placeholder="Email" id="email" >
								</div>
								
								<label  class="error" for="email"></label>

								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-lock fa-fw"></i>
	  								</span>
								 	<input class="form-control" name="password_name" type="text" placeholder="Password" id="password_id">
								</div>
								<label  class="error" for="password_id"></label>
								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-lock fa-fw"></i>
	  								</span>
								 	<input class="form-control" name="confirm_password_name" type="text" placeholder="Ulangi password" id="confirm_password_id">
								</div>
								<label  class="error" for="confirm_password_id"></label>
							</div>
							<br/>
							<input class="btn btn-sub" type="submit" value="Sign Up">
						</div>
						
					</form>	
				</div>
			</div>
	    </section>	<!-- contacts --> 