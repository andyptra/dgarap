<?php
include"../../../inc/konek.php";
koneksi_buka(); 
header('Content-Type: application/vnd.ms-excel'); //IE and Opera  
header('Content-Type: application/x-msexcel'); // Other browsers  
header('Content-Disposition: attachment; filename=Laporan_Nilai.xls');
header('Expires: 0');  
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

$id_matkul=$_POST['id_matkul'];
$id_ujian=$_POST['id'];

$mk =mysql_query("SELECT ujianku.id, matakuliah.nama_matkul,dujian.nama_ujian FROM ujianku,matakuliah,dujian
WHERE ujianku.id_matkul='$id_matkul' AND matakuliah.id_matkul='$id_matkul' AND dujian.id='$id_ujian'");
$dmk=mysql_fetch_array($mk);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo"$dmk[nama_matkul]";?> </title>
</head>

<body>

<table width="800" border="1">
  <tr>
    <td colspan="8" align="center"><h2><strong>HASIL UJIAN <?php echo"$dmk[nama_ujian]";?> Mata Kuliah <?php echo"$dmk[nama_matkul]";?> </strong></h2></td>
	
  </tr>
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td>No</td>
    <td>No Peserta</td>
    <td>Nama Peserta</td>
    <td>Benar</td>
    <td>Salah</td>
    <td>Kosong</td>
    <td>NA</td>
	<td>Keterangan</td>
  </tr>
<?php
$i=0;
$data=mysql_query("SELECT hasil_jwb.*, usergarap.firstn, usergarap.lastn,dujian.nama_ujian, matakuliah.nama_matkul 
					FROM hasil_jwb,usergarap,dujian,matakuliah,ujianku WHERE hasil_jwb.id_user=usergarap.id_userk 
					and hasil_jwb.id_ujian=ujianku.id and hasil_jwb.id_matkul='$id_matkul' and dujian.id='$id_ujian' AND matakuliah.id_matkul='$id_matkul' GROUP BY hasil_jwb.id_user")or die("gagaal".mysql_error());

                    while($r=mysql_fetch_array($data)){
					$i++;
?>
  <tr>
    <td><?php echo"$i";?></td>
    <td><?php echo"$r[id_user]";?></td>
    <td><?php echo $r[firstn];?> <?php echo $r[lastn];?></td>
    <td><?php echo $r[benar];?></td>
    <td><?php echo $r[salah];?></td>
	<td><?php echo $r[kosong];?></td>
	<td><?php echo $r[nilai];?></td>
	<?php if($r[keterangan]=='lulus'){
		?>
		<td style='background:#2ecc71;'><?php echo $r[keterangan];?></td>
		<?php
	}else{
		?>
		<td style='background:#e74c3c;'><?php echo $r[keterangan];?></td>

		<?php
	}?>
	
  </tr>
  <?php } ?>
</table>
</body>
</html>