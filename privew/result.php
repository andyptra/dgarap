<?php
session_start();
include"../inc/set.php";

$nama=$_SESSION['namauser'];


?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo"$course";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/style.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <header>
            <p class="text-center">
                
            </p>
        </header>
        <div class="container result">
            <div class="row"> 
                    <div class='result-logo'>
                    </div>    
           </div>  
           <hr>   
           <div class="row">
             <div class="col-xs-6"> 
                     
              <div>
                        <b><p>Hai  <?php echo $nama;?> Selamat Kamu telah menyelesaikan Ujian Online </span></p>
                        
                          
                        
                       
                        <p><a href="../admin/69438e8a13c1e6e67c3960d16e5c0a6e"><button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Selesai</button></a></p>               
                       </div> 
                   
                   </div>
                    
            </div>    
            <div class="row">    
                    
            </div>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../js/jquery-1.10.2.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/jquery.validate.min.js"></script>
    </body>
</html>
