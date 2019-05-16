<?php
session_start();
include"../../../inc/konek.php";
koneksi_buka();
$usr=mysql_query("select * from usergarap where username='$_SESSION[namauser]'") or die("gagal".mysql_error());
$dusr=mysql_fetch_array($usr);

?>	

  
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nama ujian</th>
                        <th>Nama Matkul</th>
                        <th>status</th>
                        <th>waktu</th>
                        <th>jumlah soal</th>
                        <th>kerjakan</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("SELECT ujianku.id,ujianku.waktu,ujianku.jsoal,ujianku.id_matkul,dujian.nama_ujian,aktif.aktif, matakuliah.nama_matkul FROM ujianku,matakuliah,mode,aktif,dujian WHERE ujianku.nama_ujian=dujian.id AND ujianku.id_matkul=matakuliah.id_matkul AND ujianku.aktif=aktif.id AND ujianku.mode_soal=mode.id ORDER BY ujianku.id ASC")or die("gagaal".mysql_error());

                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[nama_ujian];?></td>
                        <td><?php echo $r[nama_matkul];?></td>
                        
                        <?php if($r[aktif]=='aktif'){?>
                          <td><button class="btn btn-primary"><?php echo $r[aktif];?></button></td>
                          <?php
                          }else{
                            ?>
                            <td><button class="btn btn-danger"><?php echo $r[aktif];?></button></td>
                          <?php
                          }
                          $data2=mysql_query("select * from hasil_jwb where id_user='$dusr[id_userk]' and
						   id_ujian='$r[id]' and id_matkul='$r[id_matkul]'") or die("Gagal".mysql_error());
                        $rr=mysql_fetch_array($data2);  
                        ?>
                        <td><?php
                        $j = $r[waktu]/3600;
                        $t = $r[waktu]%3600;
                        $m = $t/60;
                        $d = $t%60;
 
                      echo floor($j).' jam, '.floor($m).' menit ';?></td>
                      <td><?php echo $r[jsoal];?></td>
                        <td>
						<?php if(($rr[status]==1)){ ?><a href="#services" class="page-scroll btn bg-warning btn-danger">Kamu sudah ujian</a>
						<?php }elseif(($r[aktif]==aktif)){ ?>
						
						
                         <form action="sedang-mengerjakan-soal.html" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="id_ujian" value="<?php echo"$r[id]";?>">
                         <input type="hidden" name="id_matkul" value="<?php echo"$r[id_matkul]";?>">
                         <button class='btn btn-success' type='submit'>MASUK UJIAN</button>
                         </form>                     
                 <?php }else{
					 ?>
                     <a href="#services" class="page-scroll btn bg-warning btn-danger">ujian belum aktif</a>
                     <?php
				 }?>
         
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
       