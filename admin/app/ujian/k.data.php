<?php
include"../../../inc/konek.php";
?>
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th width="13%" align="center">Nama Ujian </th>
                                                <th width="20%" align="center">Nama matkul </th>
                                                <th width="15%" align="center">Jumlah Soal </th>
                                                <th width="12%" align="center">Aktif  </th>
                                                <th width="17%" align="center">Bentuk Ujian  </th>
                                                <th width="28%" align="center">Action</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
				  $i=0;
                    $data=mysql_query("SELECT  ujianku.*, dujian.nama_ujian, matakuliah.*, mode.acak, aktif.aktif from matakuliah, ujianku,dujian,mode,aktif WHERE ujianku.id_matkul=matakuliah.id_matkul and ujianku.nama_ujian=dujian.id and ujianku.aktif=aktif.id and ujianku.mode_soal=mode.id ORDER BY ujianku.id")or die("gagaal".mysql_error());
                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[nama_ujian];?></td>
                        <td><?php echo $r[nama_matkul];?></td>
                        <td><?php echo $r[jsoal];?></td>
                        <?php if($r[aktif]=='aktif'){?>
                          <td><button class="btn btn-primary"><?php echo $r[aktif];?></button></td>
                          <?php
                          }else{
                            ?>
                            <td><button class="btn btn-danger"><?php echo $r[aktif];?></button></td>
                          <?php
                          }?>
                        <td><?php echo $r[acak];?></td>
                        <td>
                        <div class="btn-group">
                    <button class="btn btn-danger" type="button">Action</button>
                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger dropdown-toggle" type="button">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#dialog-ptra" id="<?php echo $r['id'] ?>" class="ubah" data-toggle="modal">ubah</a>
                      </li>
                      <li><a href="#" id="<?php echo $r['id'] ?>" class="hapus">hapus</a>
                      </li>
                      
                    </ul>
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