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
						<th>Nomer Peserta</th>
                        <th>Nama </th>
                        <th>email</th>
					  <th>action</th>
						</tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("select * from usergarap order by id ASC")or die("gagaal".mysql_error());

                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[id_userk];?></td>
                        <td><?php echo $r[firstn];?> <?php echo $r[lastn];?></td>
                        <td><?php echo $r[email];?></td>
                        
                        <td><a href="#" id="<?php echo $r['id'] ?>" class="hapus btn btn-danger">hapus</a></td>
                        
                        
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