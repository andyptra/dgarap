<?php
include"../../../inc/konek.php";
?>
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nama kategori</th>
                        <th>action</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("select * from cat_post order by id asc")or die("gagaal".mysql_error());
                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[nama];?></td>
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