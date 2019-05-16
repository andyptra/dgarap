<?php

if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');



session_start();
include"../inc/set.php";

$nama=$_SESSION['namauser'];



$mhs=mysql_query("SELECT * FROM usergarap WHERE username='$nama'") or die("gagal111".mysql_error());
$dmhs=mysql_fetch_array($mhs);
 
    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 

   $keys=array_keys($_POST);
   $order=join(",",$keys);
   

   
   
   $zz=mysql_query("select id,jawab from soal where id IN($order) ORDER BY FIELD(id,$order)")   or die("gagal en1111".mysql_error());
   
   while($result=mysql_fetch_array($zz)){
  
        $r=$result['id'];
     $rr=$_POST[$result['id']];
     if($result['jawab']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]=="F"){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   } 
   //menghitung nilai
   $qq=mysql_query("select * from ujianku where id='$_SESSION[id_ujians]'");
   $dqq=mysql_fetch_array($qq);
   $skalanilai=$dqq[penilaian];
   $kkm=$dqq[kkm];
   $jml_soal=$dqq[jsoal];
   $score=$skalanilai/$jml_soal*$right_answer;
   $hasil=number_format($score,1);
   if($score>=81){
   	$hrf='A';

   } 
   elseif($score>=61 and $score<=80){
   	$hrf='B';
   }
    elseif($score>=41 and $score<=60){
   	$hrf='C';
   }
    elseif($score>=21 and $score<=40){
   	$hrf='D';
   }
    elseif($score>=1 and $score<=20){
   	$hrf='E';
   }
    if($hasil>=$kkm){
    //rekap jwb
  $maks=date(' g:i:s');
     
        mysql_query("insert into hasil_jwb(benar,salah,kosong,status,id_ujian,id_user,id_matkul,nilai,keterangan,nilai_hrf)
                  values('$right_answer','$wrong_answer','$unanswered','1','$_SESSION[id_ujians]','$dmhs[id_userk]','$_SESSION[id_matkul]','$hasil','lulus','$hrf')");
      }
      else{
        mysql_query("insert into hasil_jwb(benar,salah,kosong,status,id_ujian,id_user,id_matkul,nilai,keterangan,nilai_hrf)
                  values('$right_answer','$wrong_answer','$unanswered','1','$_SESSION[id_ujians]','$dmhs[id_userk]','$_SESSION[id_matkul]','$hasil','tidak lulus','$hrf')");
      }
      
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "$course";?></title>
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
                        
                          
                        
                       
                        <p><a href="c81508c72f2b8cea0ced0c71e3750fbf"><button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Selesai</button></a></p>               
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
