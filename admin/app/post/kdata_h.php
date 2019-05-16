<?php
include"../../../inc/konek.php";
session_start();
?>

  
 <div class="x_panel">
                
                <div class="x_content">
                 
                  <table id="datatable-soal" class="table table-striped table-bordered">
                    <thead>
                      <tr >
                        <th >judul</th>
                        <th >kategori</th>
                        <th > penulis</th>
                       
                        <th > tanggal</th>
                        <th > jam</th>
                        
                        <th  >action</th>
                        
                      </tr>
                    </thead>


                    
                  
                    <tbody><?php 
                  koneksi_buka();
          $i=0;
                    $data=mysql_query("select post.*,cat_post.nama from post,cat_post where post.id_kategori=cat_post.id order by post.id DESC")or die("gagaal".mysql_error());
                    while($r=mysql_fetch_array($data)){
                    ?>
                      <tr>
                        <td><?php echo $r[judul];?></td>
                        <td><?php echo $r[nama];?></td>
                        <td><?php echo $r[penulis];?></td>
                        
                        <td><?php echo $r[tanggal];?></td>
                        <td><?php echo $r[jam];?></td>
                        <td>
                        <form action="5ddf6a1b3b296c88ba18fe6ef61f90dc" method="post" enctype="multipart/form-data">
            <input type="hidden" name="d" value="<?php echo"$r[id]";?>">
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