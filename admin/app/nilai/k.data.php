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
				
                        <th>Nama ujian</th>
                        <th>Nama Matkul</th>
                       
					   <th>Lihat</th>
						</tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("SELECT ujianku.id_matkul,dujian.id, dujian.nama_ujian, matakuliah.nama_matkul FROM dujian,matakuliah,ujianku WHERE 
					 dujian.id=ujianku.nama_ujian AND ujianku.nama_ujian=dujian.id AND matakuliah.id_matkul=ujianku.id_matkul")or die("gagaal".mysql_error());

                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        
                        <td><?php echo $r[nama_ujian];?></td>
						<td><?php echo $r[nama_matkul];?></td>
                        
						<td> <div class="btn-group">
                    <form action="5dab570428ba7310c9e6f689c3c65e2d" method="Post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo"$r[id]";?>">
					<input type="hidden" name="id_matkul" value="<?php echo"$r[id_matkul]";?>">
                    <button type="Submit" class="btn btn-primary">Nilai</button>
      </form>
                  </div></td>
                        
                        
                        
                      </tr>
                    <?php
    $i++;
    }
  ?>
                     
                    </tbody>
                  </table>
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