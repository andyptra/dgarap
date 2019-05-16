<?php
include"../../../inc/konek.php";
?>
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th width="20%">nama</th>
                        <th>isi</th>
                        <th>opsi</th>
                        <th>hapus</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("select testimoni.*,usergarap.firstn,usergarap.lastn FROM testimoni,usergarap WHERE testimoni.id_userk=usergarap.id_userk order by testimoni.id DESC")or die("gagaal".mysql_error());
                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo "$r[firstn] $r[lastn]";?></td>
                        <td><?php echo $r[isi];?></td>
                        <?php 
                        if($r[status]=='N'){
                          ?>
                          <td><a href="#" id="<?php echo $r['id'] ?>" class="update">
         <button type="Submit" class="btn btn-primary">publish</button>
      </a></td>
                          <?php
                        }else{
                          ?>
                          <td><a href="#" id="<?php echo $r['id'] ?>" class="batal">
         <button type="Submit" class="btn btn-danger">batal</button>
      </a></td>
                          <?php
                        }
                        ?>
                        
                        <td><a href="#" id="<?php echo $r['id'] ?>" class="hapus">
         <button type="Submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
      </a></td>
                        
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