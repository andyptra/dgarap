<?php
session_start();
include"../inc/set.php";
$id_ujian=$_GET['id_ujian'];
$id_matkul=$_GET['id_matkul'];


if(!empty($_SESSION['namuser']))
{
header('Location: index.php');
}

//menampilkan data user
$user=mysql_query("select * from user where username='$_SESSION[namauser]'") or die("gagal".mysql_error());
$duser=mysql_fetch_array($user);


//menampilkan nama matkul
$tmatkul=mysql_query("select * from matakuliah where id_matkul='$id_matkul'");
$dtmatkul=mysql_fetch_array($tmatkul);

//menampilkan data ujian
$ujiank=mysql_query("select dujian.nama_ujian from ujianku,dujian where ujianku.id='$id_ujian' and ujianku.nama_ujian=dujian.id")
or die("gagal".mysql_error());
$dujiank=mysql_fetch_array($ujiank);

//menampilkan ujian
$ujiant=mysql_query("select * from ujianku  where ujianku.id='$id_ujian'")
or die("gagal".mysql_error());
$dujiant=mysql_fetch_array($ujiant);

$_SESSION['id_ujians']=$id_ujian;
$_SESSION['dnis']=$duser[nis];
$_SESSION['id_matkuls']=$id_matkul;

if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$maks=date(' g:i:s');
$date = date_create($maks);
$ts="$dujiant[waktu] seconds";
date_add($date, date_interval_create_from_date_string($ts));
$waktu=date_format($date, 'H:i:s');


  
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo "$course";?></title>
    <!-- Bootstrap Core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/alertify.min.js"></script>
<link rel="stylesheet" href="../css/alertify.core.css" />
<link rel="stylesheet" href="../css/alertify.default.css" id="toggleCSS" />

    <!-- Custom CSS -->
    <link href="../css/1-col-portfolio.css" rel="stylesheet">
   <script src="../js/countdown.js"></script>
   <script src="../js/jquery-1.10.2.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/jquery.autoSave.js">
    
    </script>
<script>
function fadeMessage(){
		$('#message p').fadeOut('slow');
	}
	

	function performDelete ( a_element ) {
    // perform your delete here
    // a_element is the <a> tag that was clicked
}
function confirmAction ( a_element, message, action ) {
  var answer = alertify.set({ buttonFocus: "cancel" });
			alertify.confirm("Kamu yakin mau mengakhiri ujian?", function (e) {
				if (e) {
					
					 $('#login').submit();
					// tampilkan data k yang sudah di perbaharui
					// ke dalam <div id="data-k"></div>
				} else {
					alertify.error("Proses Melanjutkan Ujian");
				}
			});
}
</script>
    
    <style>
.digit-separator {position: relative; float: left; width: 17px; height: 44px; overflow: hidden; background-image: url(foto/digit_separator.png);
  background-repeat: no-repeat;
  background-position: 0px 0px;
  }
  
@-webkit-keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}
@-moz-keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}
@-o-keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}
@keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: auto;
  width: 25px;
  height: 18px;
  -webkit-transition: all 0.15s ease-out 0;
  -moz-transition: all 0.15s ease-out 0;
  transition: all 0.15s ease-out 0;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  outline: none;
  position: relative;
  margin-right: 0.5rem;
  z-index: 1000;
}

.option-input:hover { background: #9faab7; }

.option-input:checked { background: #2980b9; }

.option-input:checked::before {
  width: 25px;
  height: 18px;
  position: absolute;
  content: '\2716';
  display: inline-block;
  font-size: 21.66667px;
  text-align: center;
  line-height: 15px;
}

.option-input:checked::after {

  background: #2980b9;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}

.option-input.radio { border-radius: 50%; }

.option-input.radio::after { border-radius: 50%; }


  .digit {
  background-image:url(foto/digits.png)
  }.klik { background-color: #e74c3c;
    border-radius:10px;
    height:10px;
    width:10px;
    position: absolute;
        margin-top: -25px;
      margin-left: 20px;

  }
  .pas {
  font-size:31px;
  color:#FFF;
  }
  .jr {
  padding:5px;
  margin:4px;
  width:40px;
  height:40px;
  }
  
  .jp {
  margin:0px;
  }
  .fixed { height:570px; overflow-y:scroll;  }
  .scrollit { height:570px; overflow-y:scroll;  } 
  .an {
  color: #fff;
  }
  .bd{ border-radius:10px;
  background-color:#2980b9;
  color:#FFF;  }
  .yellowBackground {
    background-color:yellow;
} 
#divCounter{
	font-size: 30px;
    font-weight: bold;
}
.biru{
  background: #2980b9;
  border-color: #2980b9;
}

    </style>
    
    
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top  biru" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-lg-7">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
               <div class="pas"><?php echo"$course"; ?></div>
               
     </div>
     <div class="col-lg-4">
            
          
      </div>
        </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>

    <!-- Page Content -->
    <div class="container">
    

        <!-- Page Heading -->
          <div class="row bd well">
          <div class="col-lg-4">
      
            <b>Nama<span class="an">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span> <?php echo"$duser[username]";?></b>
            </div>
             <div class="col-lg-5">
      <b>Mata Kuliah<span class="an">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span><?php echo"$dtmatkul[nama_matkul]";?></b> <br>
            <b>Jenis Ujian<span class="an">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span> <?php echo"$dujiank[nama_ujian]";?></b> 
        </b>
            </div>
			<div class="col-lg-2">
          <div id="counter" align="left">       
          </div>      
          
          <div id="divCounter"></div>
      </div>
            </div>
        <hr>
        <!-- /.row -->
        <div class="row con">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 scrollit">
     
        
        <p><form class="form-horizontal" role="form" id='login' method="post" action="selesai.html">
          
                     <div id='questiona' class='cont'>
				
             <p>Selamat datang di halaman Ujian Online <?php echo "$course";?></p>
             <p><?php echo "$course";?> merupakan aplikasi berbasis web yang dapat digunakan untuk melakukan ujian secara online</p>
             <p><strong>Tata Cara Ujian</strong></p>
             <p>1. Klik tombol navigasi yang ada di samping kanan soal untuk berpindah soal.</p>
             <p>2. Untuk menjawab soal cukup tekan option yang ada di masing-masing soal, sesuaikan jawban yang menurut anda benar A,B,C,D,E</p>
             <p><strong>Peraturan</strong></p>
             <p>1. Waktu Ujian berjalan mundur dan tidak bisa di tambah</p>
             <p>2. Ketika ujian, and akan memperoleh soal dengan urutan yang acak, sehingga meminimalkan kecurangan dalam menyelesaikan soal.</p>
             <p>3. Ketika waktu ujian sudah habis, maka semua jawaban soal akan otomatis tersimpan dan aplikasi akan tertutup. Hal ini akan memudahkan dalam mendisiplinkan peserta dalam proses ujian.</p>
             <p>4. Ketika proses ujian sudah selesai, admin dapat melihat (jawaban dan nilai) dan bisa mencetak laporan.</p>
             <p>5. Ketika waktu ujian selesai, peserta dapat melihat nilaihasil ujiannya sendiri. dan dapat mencetaknya</p>
             <p>6. Hasil ujian yang transparan, dapat memberikan kepuasan bagi peserta dan penyelengara.</p>
             <p><strong><em>~~Selamat Mengerjakan~~</em></strong> </p>
             <p>&nbsp;</p>
           </div>
          <?php 
          if($dujiant[mode_soal]==1){
          $res = mysql_query("select * from soal where id_ujian='$id_ujian' ORDER BY id asc") or die(mysql_error());
          }
          else {
          $res = mysql_query("select * from soal where id_ujian='$id_ujian' ORDER BY id asc") or die(mysql_error());
          }
                    $rows = mysql_num_rows($res);
          $i=1;
          
                  while($result=mysql_fetch_array($res)){?>
                    
                    
                    <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>
                     <button id='<?php echo $i;?>' class='next btn btn-primary' type='button'>Next</button> 
                     <hr>
                 
                    <p class='questions' id="qname<?php echo $i;?>"><b>Soal No. <?php echo $i?></b> <?php echo $result['soal'];?></p>
                    <hr>
                   
       <font size="+1"><b><?php echo"A";?>.</font></b><input type="radio" value="<?php echo"A";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['a'];?>
                   <br/>
        
         <font size="+1"><b><?php echo"B";?>.</font></b><input type="radio" value="<?php echo"B";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['b'];?>
                <br/>
        <font size="+1"><b><?php echo"C";?>.</font></b><input type="radio" value="<?php echo"C";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['c'];?>
              <br/>
        <font size="+1"><b><?php echo"D";?>.</font></b><input type="radio" value="<?php echo"D";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['d'];?>
              <br/>
        <font size="+1"><b><?php echo"E";?>.</font></b><input type="radio" value="<?php echo"E";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['e'];?>                                                               
        <hr> 
        <input type="radio" checked="checked" style='display:none' value="F" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' />                                                                      
          

        <button id='<?php echo $i;?>' class='next btn btn-primary' type='button'>Next</button> 
                    
                    </div> 
                      
                     <?php }elseif($i<1 || $i<$rows){?>
                     
                       <div id='question<?php echo $i;?>' class='cont'>
                   <button id='<?php echo $i;?>' class='previous btn btn-primary' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-primary' type='button' >Next</button> 
                    <hr>

                    <p class='questions' id="qname<?php echo $i;?>"><b>Soal No. <?php echo $i?></b><?php echo $result['soal'];?></p>
                    <hr>
                    <font size="+1"><b><?php echo"A";?>.</font></b><input type="radio" value="<?php echo"A";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
                <?php echo $result['a'];?>
                   <br/>
        
                 <font size="+1"><b><?php echo"B";?>.</font></b><input type="radio" value="<?php echo"B";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
                <?php echo $result['b'];?>
                        <br/>
                <font size="+1"><b><?php echo"C";?>.</font></b><input type="radio" value="<?php echo"C";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
                <?php echo $result['c'];?>
                      <br/>
                <font size="+1"><b><?php echo"D";?>.</font></b><input type="radio" value="<?php echo"D";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
                <?php echo $result['d'];?>
                      <br/>
                <font size="+1"><b><?php echo"E";?>.</font></b><input type="radio" value="<?php echo"E";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
                <?php echo $result['e'];?>                                                               
             
                <input type="radio" checked="checked" style='display:none' value="F" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' />                                                                      
    
                    
                    <hr>
                     <button id='<?php echo $i;?>' class='previous btn btn-primary' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-primary' type='button' >Next</button>
                    </div>
                       
                       
                       
                        
                        
                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                             <button id='<?php echo $i;?>' class='previous btn btn-primary' type='button'>Previous</button>                  
                    <hr>
    
                    <p class='questions' id="qname<?php echo $i;?>"><b>Soal No. <?php echo $i?></b><?php echo $result['soal'];?></p>
                    <font size="+1"><b><?php echo"A";?>.</font></b><input type="radio" value="<?php echo"A";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['a'];?>
                   <br/>
        
         <font size="+1"><b><?php echo"B";?>.</font></b><input type="radio" value="<?php echo"B";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['b'];?>
                <br/>
        <font size="+1"><b><?php echo"C";?>.</font></b><input type="radio" value="<?php echo"C";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['c'];?>
              <br/>
        <font size="+1"><b><?php echo"D";?>.</font></b><input type="radio" value="<?php echo"D";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['d'];?>
              <br/>
        <font size="+1"><b><?php echo"E";?>.</font></b><input type="radio" value="<?php echo"E";?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' class="option-input radio" onClick="document.getElementById('aku<?php echo $i;?>').setAttribute('class', 'klik');"/>
        <?php echo $result['e'];?>                                                               
      
        <input type="radio" checked="checked" style='display:none' value="F" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>' />                                                                      
   
                    
                    
    <hr>                
                     <button id='<?php echo $i;?>' class='previous btn btn-primary' type='button'>Previous</button>                   
                    </div>
          <?php } $i++;} ?>
          
        
      </div>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 fixed">
<div id="message"><p></p></div>
        <b>Navigasi Soal</b>
        <br/><br/>

                   <?php 
           
          if($dujiant[mode_soal]==1){
           $res1=mysql_query("select * from soal where id_ujian='$id_ujian'") or die(mysql_error());
          }
          else {
         $res1=mysql_query("select * from soal where id_ujian='$id_ujian' ORDER BY id asc") or die(mysql_error());

          }
                    $rows1 = mysql_num_rows($res1);
          $j=1;
                while($result1=mysql_fetch_array($res1)){?>
                   <!-- <button  id="aku<?php //echo $j;?>" class="btn btn-danger">test <?php //echo"$j";?></button> -->
                    <button id='<?php echo $j;?>' class='pencet btn btn-info col-lg-2 jr'  type='button'><?php echo"$j";?><div id="aku<?php echo"$j";?>"></div> </button> 
                     
                    <?php $j++;} ?>
              <button id='<?php echo $i;?>' class='next btn btn-info btn-lg' type='submit' onclick="confirmAction(this, 'Are you sure you wish to remove this?', performDelete); return false;">
Selesai</button>

    </div>

</div>
        <hr>

        </form>
    <!-- /.container -->

    <!-- jQuery -->
    <?php
    
    
if(isset($_POST[1])){ 
   $keys=array_keys($_POST);
   $order=join(",",$keys);
   echo"$order";
   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;
   
   $response=mysql_query("select id,jawban from soal where id IN($order) ORDER BY FIELD(id,$order)")   or die(mysql_error());
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
       
   while($result=mysql_fetch_array($response)){
     
       if($result['answer']==$_POST[$result]['id']){
               $right_answer++;
           }else if($_POST[$result]['id']==F){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
       
   }
   
   
   echo "right_answer : ". $right_answer."<br>";
   echo "wrong_answer : ". $wrong_answer."<br>";
   echo "unanswered : ". $unanswered."<br>";
}
 
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    
<script>
    $('.cont').addClass('hide');
    count=$('.questions').length;
    
    $('#questiona').removeClass('hide');   
           
        
       $(document).on('click','.next',function(){
         last=parseInt($(this).attr('id'));     
         nex=last+1;
       prev=last-1;
       count=$('.questions').length;
       
       $('#question'+last).addClass('hide');
       $('#question'+nex).removeClass('hide');
      });
      
      
       $(document).on('click','.previous',function(){
             last=parseInt($(this).attr('id'));     
             pre=last-1;
             
       $('#question'+last).addClass('hide'); 
             $('#question'+pre).removeClass('hide');
         });
       
          $(document).on('click','.pencet',function(){
             last=parseInt($(this).attr('id')); 
         
             count=$('.questions').length;
        
       pre=last-1;
       pres=last+1;
       $( "input" ).on( "click", function() {  
       var thisName = $(this).attr('name');
         var qNum = thisName.substring(1);
             $( "#log"+last ).html(css('color','blue') + "");


        });
      
       var u=count;
       var l=last;
       for ( var m = 1; m <= count; m++ ) {
         if(u==l){
      $( "#question"+m ).addClass('hide');
      $( "#question"+count ).removeClass('hide');
          $('#questiona').addClass('hide');  

       }
       else {
       $( "#question"+last ).removeClass('hide');
       $( "#question"+m ).addClass('hide');
        $('#questiona').addClass('hide'); 
       }
       }
       

       });
       <?php $wa=$dujiant[waktu]; 
         $stw=$wa * 1000; ?>
          setTimeout(function() {
             $("form").submit();
          }, <?php echo"$stw";?>);
  

  </script> 
<script>
var hoursleft = 0;
var minutesleft = 0; //give minutes you wish
var secondsleft = <?php echo "$dujiant[waktu]";?>; // give seconds you wish
var finishedtext = "waktu ujian habis";
var end1;
if(localStorage.getItem("end1")) {
end1 = new Date(localStorage.getItem("end1"));
} else {
end1 = new Date();
end1.setMinutes(end1.getMinutes()+minutesleft);
end1.setSeconds(end1.getSeconds()+secondsleft);

}
var counter = function () {
var now = new Date();
var diff = end1 - now;

diff = new Date(diff);

var milliseconds = parseInt((diff%1000)/100)
    var sec = parseInt((diff/1000)%60)
    var mins = parseInt((diff/(1000*60))%60)
    var hours = parseInt((diff/(1000*60*60))%24);
    //var hours = parseInt((diff/(1000*60*60))%24);
if( hours<10){
    hours="0" +hours;
}
if (mins < 10) {
    mins = "0" + mins;
}
if (sec < 10) { 
    sec = "0" + sec;
}     
if(now >= end1) {     
    clearTimeout(interval);
   // localStorage.setItem("end", null);
     localStorage.removeItem("end1");
     localStorage.clear();
    document.getElementById('divCounter').innerHTML = finishedtext;
     if(confirm("waktu habis"))
             $("form").submit();
}
else {
    var value = hours+ ":" + mins + ":" + sec;
    localStorage.setItem("end1", end1);
    document.getElementById('divCounter').innerHTML = value;
}
$('form').submit(function() {
    clearTimeout(interval);
   // localStorage.setItem("end", null);
     localStorage.removeItem("end1");
     localStorage.clear();
});
}
 

var interval = setInterval(counter, 1000);
</script>
    
</body>

</html>
