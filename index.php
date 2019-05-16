
		<?php include"inc/set.php";?>
		
		<!DOCTYPE html>
<html>
	<head>
		<title><?php echo "$course";?></title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/ionicons.min.css"> -->
		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
	    <link rel="stylesheet" href="css/animate.css">
	    <link rel="stylesheet" href="js/nivo-lightbox/nivo-lightbox.css">
		<link rel="stylesheet" href="js/nivo-lightbox/nivo-lightbox-theme.css">
	    <link rel="stylesheet" href="css/customa.css">

	    <!-- js -->
	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/owl.carousel.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.ui.shake.js"></script>
		<script src="js/jquery.actual.min.js"></script>
		<script src="js/falidasi.js"></script>
		<script>
		jQuery(function ($) {
			
    $("#daftardisik").validate({
			
			rules: {
				firstname: "required",
				lastname: "required",
				usernama: {
					required: true,
					minlength: 2
				},
				 password_name: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password_name: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password_id"
                    },
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				firstname: "Masukkan Nama Depan anda",
				lastname: "Masukkan Nama Belakang Anda",
				usernama: {
					required: "Masukkan USername Anda",
					minlength: "username harus terdiri dari minimal 2 karakter"
				},
				password_name: {
					required: "Masukkan Password anda",
					minlength: "Password harus terdiri dari minimal 5 karakter"
				},
				confirm_password_name: {
					required: "Ulangi Password anda",
					minlength: "Password harus terdiri dari minimal 5 karakter",
					equalTo: "Password tidak cocok"
				},
				email: "Masukkan Email yang valid",
				
			}
		});

		// propose username by combining first- and lastname
		$("#usernama").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

			});
		</script>
		<script>
			$(document).ready(function() {
			
			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "ajaxlogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
           window.location = "user/a7c715ebc42bf47e1f516344507ec9c5";
            }
            else
            {
             $('#box').shake();
			 $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span>  username and password Salah !!!. ");
            }
            }
            });
			
			}
			return false;
			});
			
				
			});
		</script>
		<script type="text/javascript">
 
        function checkAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
			url: "lib.php",
			data:'username='+$("#usernama").val(),
			type: "POST",
			success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide();
			},
			error:function (){}
			});
		}
		function checkemail() {
			$("#isun").show();
			jQuery.ajax({
			url: "libra.php",
			data:'email='+$("#email").val(),
			type: "POST",
			success:function(data){
			$("#emailstatus").html(data);
			$("#isun").hide();
			},
			error:function (){}
			});
		}
   	   </script>
	</head>

	<body data-spy="scroll" data-target="#navbar-example">
<?php
include"../inc/konek.php";
						koneksi_buka();
?>
		<!-- ****************************** Preloader ************************** -->
		<div id="preloader"></div>


		<div id="wrapper">
			<div id="overlay-1">
			<section id="navigation-scroll">
					<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example">
					        <span class="sr-only">Toggle navigation</span>
					        <i class="fa fa-bars"></i>
					      </button>
					      <a class="navbar-brand" href="#"><?php echo "$course";?></a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="navbar-example">
					      <ul class="nav navbar-nav navbar-right">
					        <li><a href="#about" class="active">About</a></li>
	  						<li><a href="#our_service">Berita</a></li>
							<li><a href="blog/">Blog</a></li>
	    					<li><a href="#testimonial">Testimoni</a></li>
	    					
	    					
	    					<li><a href="#formasi">Daftar</a></li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->	
				
				
				<section id="starting">
					<div class="text-center starting-text wow animated zoomInDown">
						<h2>Selamat datang di E-Learning</h2>
						<h1 class="rene"><?php echo "$course";?></h1>
						<a href="#formasi" class="bttn apple-store btn btn-lg">
							<img src="img/apple.png" alt="apple">
							<p>Login User</p>
							<h6>SIGN IN USER</h6>
						</a>
						<a href="#formasi" class="bttn google-play btn btn-lg">
							<img src="img/play.png" alt="play">
							<p>Register User</p>
							<h6>SIGN UP USER</h6>
						</a>
					</div>
				</section>
				<div id="bottom" class="bottom text-center">
			        <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			    </div>
			</div><!-- overlay-1 -->
		</div>	<!-- wrapper -->		
			
		<!-- About Us -->
		<section id="about">
			<div class="container">
				<div class="row text-center heading">
					<div class="wow animated zoomInDown heading-text">
						<h3>Tentang Kami</h3>
	                	<hr class="full">
	                	<br/>
					</div>
				</div>	<!-- row -->
				<div class="row about-us-text">
					<div class="col-md-12">
						<p class="text-center">Selamat datang di E-Learning <?php echo"$course";?><br>
						<?php echo"$course";?> merupakan sebuah aplikasi berbasis web yang di gunakan untuk ujian online
						Silahkan anda mendaftar terlebih dahulu agar dapat melakukan ujian online
						setelah anda selesai mendaftar silahkan login. di halaman user anda dapat mengedit biodata. dan dapat mengerjakan soal,
						dan anda langsung dapat melihat nilainya dan langsung bisa untuk di cetak</p>
					</div>
				</div>	<!-- row -->
				<div class="row main_content">
					<div class="col-md-4 col-sm-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure>
							<img class="pro  radiusku img-responsive center-block" src="image/11.png" alt="image">
						</figure>
						<h5 class="text-center">CLEAN DESIGN</h5>
					</div>	<!-- col-md-4 -->

					<div class="col-md-4 col-sm-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure>
							<img class="pro radiusku img-responsive center-block" src="image/33.png" alt="image">
						</figure>
						<h5 class="text-center">USER FRIENDY SYSTEM</h5>
					</div>	<!-- col-md-4 -->

					<div class="col-md-4 col-sm-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure>
							<img class="pro radiusku img-responsive center-block" src="image/22.png" alt="image">
						</figure>
						<h5 class="text-center">EASY NAVIGATION MATTER</h5>
					</div>	<!-- col-md-4 -->
				</div><!-- row main_content -->
			</div>	<!-- container -->
		</section>	<!-- about us -->
		
		<!-- Our service -->
		<section id="our_service">
			<div class="container">
				<div class="row text-center heading">
	        		<div class="wow animated zoomInDown heading-text">
	        			<h3>News</h3>
	                	<hr class="full">
	                	<br/>
	        		</div>
		        </div>
			    <div class="main_content">
				    <div class="services">
			        	<div class="row"><?php
						$tampil=mysql_query("SELECT post.*,cat_post.nama FROM post,cat_post WHERE post.id_kategori=cat_post.id order by post.id DESC limit 4");
while($r=mysql_fetch_array($tampil)){
							$judul = preg_replace("/\s/","-",$r['judul']);
						$url_link = "blog/berita".$r['id']."-".$judul.".html";
?>
			        		<div class="col-md-3 col-sm-6">
			        			<div class="service">
			        				<img src="uploads/<?php echo $r[feature_image] ;?>" alt="service1">
			        				<div class="text-center">
				        				<h4><?php echo "<a target='_blank' class='button big' href=\"".$url_link."\">$r[judul]</a>";?></h4>
				        				<p>
				        					 <?php
								$isi_berita=htmlentities(strip_tags($r['isi']));
								$isi=substr($isi_berita,0,100);
								$isi=substr($isi_berita,0,strrpos($isi," "));	
								echo $isi;
								?>
				        			</p>		
			        				</div> <!-- .text-center -->
			        			</div> <!-- .service -->
			        		</div> <!-- .col-md-3 -->
<?php }?>	
			        	</div>	<!-- row -->
					</div>	<!-- services -->
				</div>	<!-- main_content -->
			</div>	<!-- container -->
		</section>	<!-- our_service -->
			<section id="download">
			<div class="container">
				<div class="row text-center heading">
	        		<div class="wow animated zoomInDown heading-text">
	        			<h3>Elearning - <?php echo"$course";?></h3>
	                	<hr class="full">
	                	</div>	<!-- row -->
						
	        		</div> <!-- #heading-text -->
		        </div>
			    
			<!-- </div>	container -->
		</section>	<!-- Meet -->
		<section id="testimonial">
	    	<div class="container">
	    		<div class="row text-center heading">
	    			<div class="bg-image col-md-12">
	    				<div class="wow animated zoomInDown heading-text">
		        			<h3>Testimonials</h3>
		                	<hr class="full">
		                	<br/>
		        		</div>
	    			</div>
	    		</div>
	    		<div class="row main_content">
	    			<div class="col-md-10 col-md-offset-1">
	    				<div id="client-speech" class="owl-carousel owl-theme">
						<?php
						
						$qq=mysql_query("SELECT testimoni.*, usergarap.firstn,usergarap.lastn,usergarap.dp from usergarap,testimoni WHERE testimoni.status='Y' AND testimoni.id_userk=usergarap.id_userk order by testimoni.id DESC LIMIT 3");
						while($r=mysql_fetch_array($qq)){
						?>
							<div class="item">
								<img class="img-circle radiusku img-responsive center-block" src="user/foto/<?php echo"$r[dp]";?>" alt="text">
								<div class="client-comment text-center">
								<?php echo"$r[isi]";?>
								</div>
								<div class="row text-center">
									<p class="client-name text-center"> ----- <?php echo"$r[firstn] $r[lastn]";?></p>
								</div>
							</div>
							<?php
						}
							?>
						</div>
	    			</div>
	    		</div>
	    	</div>	
	    </section>	<!-- clients -->
		<!-- contact -->
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
				<div class="row  main_content col-md-6">
				<div id="box">
					<form method="post" action="ajaxlogin.php">
						<div class="col-md-10 col-md-offset-2 well">
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
				<div class="row   main_content col-md-6" id="#lgnf">
					<form method="post" action="sdp.php" id="daftardisik">
						<div class="col-md-10 col-md-offset-2 well">
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
								 	<input class="form-control" type="text" name="username" placeholder="username" id="usernama" onBlur="checkAvailability()">
								 	<p><img src="img/loader.gif" id="loaderIcon" style="display:none" /></p>
								</div><span id="user-availability-status"></span> 
								<label  class="error" for="username"></label>
								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-envelope fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" name="email" placeholder="Email" id="email" onBlur="checkemail()">
								 	<p><img src="img/loader.gif" id="isun" style="display:none" /></p>
								</div>
								<span id="emailstatus"></span>
								<label  class="error" for="email"></label>

								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-lock fa-fw"></i>
	  								</span>
								 	<input class="form-control" name="password_name" type="password" placeholder="Password" id="password_id">
								</div>
								<label  class="error" for="password_id"></label>
								
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-lock fa-fw"></i>
	  								</span>
								 	<input class="form-control" name="confirm_password_name" type="password" placeholder="Ulangi password" id="confirm_password_id">
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
			
		<!-- footer -->
		<section id="footer" class="main-footer">
			<div class="container">
				<p>&copy; 2016 programmer by andy saputra theme by themewagon.com</p>
				<a href="#starting" class="up"><i class="fa fa-arrow-circle-up"></i></a>
			</div>
		</section><!-- footer -->

		<!-- js -->
		<script>
 			new WOW().init();
		</script>
		<script>
			$( function() {
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup =$( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script src="js/script.js"></script>
       
	</body>
</html>
