<?php
include"../../../inc/konek.php";

?>

  
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nama ujian</th>
                        <th>Nama Matkul</th>
                        <th>jumlah soal</th>
                        <th>status</th>
                        <th>priview</th>
                        <th>action</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("SELECT ujianku.id,ujianku.id_matkul,ujianku.jsoal,dujian.nama_ujian, mode.acak,aktif.aktif, matakuliah.nama_matkul FROM ujianku,matakuliah,mode,aktif,dujian WHERE ujianku.nama_ujian=dujian.id AND ujianku.id_matkul=matakuliah.id_matkul AND ujianku.aktif=aktif.id AND ujianku.mode_soal=mode.id ORDER BY ujianku.id ASC")or die("gagaal".mysql_error());
                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[nama_ujian];?></td>
                        <td><?php echo $r[nama_matkul];?></td>
                        <td><?php echo $r[jsoal];?></td>
                        <td><?php echo $r[aktif];?></td>
                        <td><a href="../privew/soal-<?php echo"$r[id]";?>-<?php echo"$r[id_matkul]";?>.html" target="_new"><button type="button" class="btn btn-success">Preview</button></a></td>
                        <td>
                        <div class="btn-group">
                    <form action="c30d2d09d9c1ea1f4b462d736f9e045e" method="Post" enctype="multipart/form-data">
                    <input type="hidden" name="d" value="<?php echo"$r[id]";?>">
                    <button type="Submit" class="btn btn-primary">Soal</button>
      </form>
                  </div>
                        </td>
                        
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