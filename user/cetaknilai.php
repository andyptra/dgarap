<?php
session_start();
include"../inc/konek.php";
koneksi_buka();
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
	   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
		$BulanIndo = array("Januari", "Februari", "Maret",
	   "April", "Mei", "Juni",
	   "Juli", "Agustus", "September",
	   "Oktober", "November", "Desember");
		$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
		$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
		$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
	}
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40"><head>
 <?php
 
    
header('Content-Type: application/vnd.ms-word'); 
header('Content-Type: application/x-msword'); 
header('Content-Disposition: attachment; filename=Laporan-nilai.doc');
header('Expires: 0');  
header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); ?>
	<style type="text/css">


.halus thead{
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
.halus td{
	border-width: 1px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
.Section{
	width:700px;
	padding:10px;
	border:1px solid #000;
}

.myfixed1 { p 
	text-align:left;
	font-size:12px;
}
</style>


	<?php






?>

</head>

<body lang=EN-US style='tab-interval:32.0pt; font-size: 9px;'>
<?php 
$tus="select * from usergarap where username='$_SESSION[namauser]'";
$qus=mysql_query($tus) or die("Gagal Tampil tahap2".mysql_error());
$dataus=mysql_fetch_array($qus);
 $noku=$dataus[id_userk];
 $rrs=mysql_query("SELECT  dujian.nama_ujian FROM hasil_jwb,usergarap,dujian,matakuliah,ujianku WHERE hasil_jwb.id_user=usergarap.id_userk and usergarap.id_userk='$noku' and hasil_jwb.id_ujian=ujianku.id and hasil_jwb.id_matkul=matakuliah.id_matkul and dujian.id=ujianku.nama_ujian")or die ("gagal nilai".mysql_error());
 $rrss=mysql_fetch_array($rrs);
?>

<div class="Section">
<table width=100%>
 <tr>
   
   <td width=663 height="41" align=center><h3>UJIAN ONLINE <?php echo "$course";?></h3></td>
 </tr>
 <tr>
   <td align=center><p style="line-height:4px"><?php echo "$alamat";?></p>
     <p> Telp : <?php echo "$no_telp";?> | Email : <?php echo "$email";?></p></td>  
 </tr>
 <tr>
   <td colspan=3 valign=top><hr color=black></td>
 </tr>
 
 
</table>
  <table width="100%" border="0" height="auto">
    <tr>
    <td height="120"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#666666">
      <tr height="20">
        <td width="116"><span class="MsoNormal">Ujian</span></td>
        <td width="237"><span class="MsoNormal"><span class="style13">: <?php echo $rrss[nama_ujian];?></span></td>
        <td width="99"><span class="MsoNormal">Kelas</span></td>
        <td width="108"><span class="MsoNormal"><span class="style13">: Malware</span></td>
      </tr>
      <tr height="20">
        <td><span class="MsoNormal">Nama</span></td>
        <td><span class="MsoNormal"><span class="style13">: <?php echo"$dataus[firstn]";?> <?php echo"$dataus[lastn]";?></span></td>
        <td><span class="MsoNormal">Semester</span></td>
        <td><span class="MsoNormal"><span class="style13">: dua</span></td>
      </tr>
      <tr height="20">
        <td width="116"><span class="MsoNormal">Nomor Peserta</span></td>
        <td><span class="MsoNormal"><span class="style13">: <?php echo"$dataus[id_userk]";?></span></td>
        <td><span class="MsoNormal">Tahun Akademik</span></td>
        <td><span class="MsoNormal"><span class="style13">: 2015/2016</span></td>
      </tr>
     
      
    </table></td>
  </tr>
  <tr>
    <td><table class="halus" width="100%">
		   <thead><tr><td width="21%" align="center"><b>MATA KULIAH</b></font></td>
		  
		   <td width="21%" align="center"><b>NILAI ANGKA</b></td>
		   <td width="19%" align="center"><b>NILAI HURUF</b></td></tr></thead>
	       <?php
		   $nopes=$dataus[id_userk];
		    $s=mysql_query("SELECT  hasil_jwb.*, usergarap.firstn, usergarap.lastn,dujian.nama_ujian,matakuliah.nama_matkul FROM hasil_jwb,usergarap,dujian,matakuliah,ujianku WHERE hasil_jwb.id_user=usergarap.id_userk and usergarap.id_userk='$nopes' and hasil_jwb.id_ujian=ujianku.id and hasil_jwb.id_matkul=matakuliah.id_matkul and dujian.id=ujianku.nama_ujian")or die ("gagal nilai".mysql_error());
					
  while($r=mysql_fetch_array($s))
  { 
  			
		   ?>
           <tr><td ><?php echo $r['nama_matkul']; ?></td><td align="center"><?php echo $r['nilai']; ?></td>
           
          
           	<td align="center"><?php echo $r['nilai_hrf'] ?></td>
           
           
           </tr>
           <?php
		   }
		   ?>
		</table><br>
        <div class="myfixed1" style="float: right; width: 100%; ">
        <br>

</div></td>
  </tr>
  <tr>
    <td>
	
	 <table width="100%" border="0">
	   <tr>
	     <td width="33%" height="21">&nbsp;</td>
	     <td width="33%">&nbsp;</td>
	     <td width="33%">Boyolali, <?php echo(DateToIndo(date('Y m d')));?></td>
	     </tr>
	   <tr>
	     <td><span class="style13">Orang Tua/Wali Peserta</span></td>
	     <td>&nbsp;</td>
	     <td><span class="style13">Founder Web</span></td>
	     </tr>
	   <tr>
	     <td height="38"><div align="center"><span class="style3"><span class="style4"><span class="style11"><span class="style12"></span></span></span></span></div></td>
	     <td height="38">&nbsp;</td>
	     <td height="38"><div align="center"><span class="style3"><span class="style4"><span class="style11"><span class="style12"></span></span></span></span></div></td>
	     </tr>
	   <tr>
	     <td><div class="style13">(..............................)</div></td>
	     <td>&nbsp;</td>
	     <td><div class="style13"> <u><?php echo "$founder";?> cS.Kom</u> </div></td>
	     </tr>
	   </table>

	</td>
  </tr>
</table>
</div>

<span style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>



</body>

</html>
