<?php
include"../../../inc/konek.php";
session_start();
$nama=$_SESSION[namauser];
$qq=mysql_fetch_array(mysql_query("select * from usergarap where username='$nama'"))or die("gagaal".mysql_error());

?>

  
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-soal" class="table table-striped table-bordered">
                    <thead>
                      <tr >
                        <th >nomer</th>
                        <th >nama</th>
                        <th >isi testimoni</th>
                        <th>status</th>
                        <th  >action</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=1;
                    $data=mysql_query("select testimoni.*,usergarap.firstn,usergarap.lastn from testimoni,usergarap where testimoni.id_userk='$qq[id_userk]' AND usergarap.id_userk=testimoni.id_userk")or die("gagaal".mysql_error());
                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo "$i";?></td>
                        <td><?php echo "$r[firstn] $r[lastn]";?></td>
                        <td><?php echo $r[isi];?></td>
                         <?php 
                        if($r[status]=='N'){
                          ?>
                          <td><button type="button" class="btn btn-danger">tertunda</button></td>
                          <?php
                        }else{
                          ?>
                          <td><button type="button" class="btn btn-primary">sudah di terbitkan</button></td>
                          <?php
                        }
                        ?>
                        
                        <td>
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