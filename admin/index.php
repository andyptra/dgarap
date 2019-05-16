<?php include"../inc/set.php";?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title><?php echo "$course";?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css"/>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.shake.js"></script>
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
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
           window.location = "a7c715ebc42bf47e1f516344507ec9c5";
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

</head>

<body>


<div id="box">
<h1><i class="fa fa-paw" style="font-size: 32px;"> </i> <?php echo "$course";?></h1>
<p><b>E-learning</b>
<form action="ajaxLogin.php" method="post">
  <p>
  
  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>  
                      <input type="text" required="" placeholder="Masukkan username" id="username" autocomplete="off" class="form-control" name="username">

                    </div>
                    <br/>
  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>  
                      <input type="password" required="" placeholder="Masukkan Password" id="password" autocomplete="off" class="form-control" name="password">

                    </div>
 <br/>
  <input type="submit" class="button btn-info" value="Log In" id="login"/> 
  </p>
  <p><b>Programmer &copy; Andy Saputra<span class='msg'></span></b> 
  <p>15 S1 TI 08<span class='msg'></span> 
    
  </p>
  <div id="error">
    
</div>	


</form>	




        </div>
    </div>
</body>
</html>