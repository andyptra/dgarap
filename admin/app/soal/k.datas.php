<?php
include"../../../inc/konek.php";
session_start();
?>

  
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-soal" class="table table-striped table-bordered">
                    <thead>
                      <tr >
                        <th >Nama matkul</th>
                        <th width="30%">soal</th>
                        <th width="10%" > A</th>
                        <th width="10%"> B</th>
                        <th width="10%"> C</th>
                        <th width="10%" > D</th>
                        <th  width="10%"> E</th>
                        <th width="5%">jawaban Benar</th>
                        <th  >action</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("SELECT soal.id, ujianku.jsoal, dujian.nama_ujian, matakuliah.nama_matkul,soal.* FROM ujianku,dujian,soal,matakuliah WHERE ujianku.id_matkul=matakuliah.id_matkul AND ujianku.nama_ujian=dujian.id AND soal.id_ujian=ujianku.id AND ujianku.id='$_SESSION[id]' ORDER BY soal.id ASC")or die("gagaal".mysql_error());
                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[nama_matkul];?></td>
                        <?php
								$isi_soal=mysql_real_escape_string($r['soal']);
								$isi=substr($isi_soal,0,50);

								
								
								?>
                        <td><?php echo $isi;?></td>
                        <td><?php echo $r[a];?></td>
                        <td><?php echo $r[b];?></td>
                        <td><?php echo $r[c];?></td>
                        <td><?php echo $r[d];?></td>
                        <td><?php echo $r[e];?></td>
                        
                        <td><?php echo $r[jawab];?></td>
                     
                        <td>
                        <form action="6ceb97728d383f60991f54284024af15" method="post" enctype="multipart/form-data">
            <input type="hidden" name="d" value="<?php echo"$r[id_soal]";?>">
         <button type="Submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>
      </form>
<a href="#" id="<?php echo $r['id'] ?>" class="hapus">
         <button type="Submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
      </a>
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
			$('#datatable-soal').DataTable({
				"ordering": false
			});
            
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>