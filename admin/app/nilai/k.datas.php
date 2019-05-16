<?php
session_start();
include"../../../inc/konek.php";
koneksi_buka();

?>

  
 <div class="x_panel">
        
                <div class="x_content">
                 
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>Nama Peserta</th>
                        <th>Nama ujian</th>
                        <th>Nama Matkul</th>
                       <th>benar</th>
					   <th>salah</tj>
					   <th>kosong</th>
					   <th>nilai</th>
					   <th>Keterangan</th>
						</tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("SELECT hasil_jwb.*, usergarap.firstn, usergarap.lastn,dujian.nama_ujian, matakuliah.nama_matkul 
					FROM hasil_jwb,usergarap,dujian,matakuliah,ujianku WHERE hasil_jwb.id_user=usergarap.id_userk 
					and hasil_jwb.id_ujian=ujianku.id and hasil_jwb.id_matkul='$_SESSION[id_matkul]' and dujian.id='$_SESSION[id]' AND matakuliah.id_matkul='$_SESSION[id_matkul]' GROUP BY hasil_jwb.id")or die("gagaal".mysql_error());

                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[firstn];?> <?php echo $r[lastn];?></td>
                        <td><?php echo $r[nama_ujian];?></td>
						<td><?php echo $r[nama_matkul];?></td>
                        <td><?php echo $r[benar];?></td>
                        <td><?php echo $r[salah];?></td>
						<td><?php echo $r[kosong];?></td>
						<td><?php echo $r[nilai];?></td>
						<td><?php echo $r[keterangan];?></td>
                        
                        
                        
                      </tr>
                    <?php
    $i++;
    }
  ?>
                     
                    </tbody>
                  </table>
				  <form action="app/nilai/cetaknilai.php" method="post" enctype="multipart/form-data">
				  <input type="hidden" name="id" value="<?php echo"$_SESSION[id]";?>">
            <input type="hidden" name="id_matkul" value="<?php echo"$_SESSION[id_matkul]";?>">
         <button type="Submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
      </form>
                </div>
              </div>

              
        

          <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>