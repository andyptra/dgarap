<?php include"secret/krispi.php";
?>
 <ul class="nav side-menu">
			<li>
				<a href="<?php echo"$datadashboard";?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>            
			</li>	
			<li>
				<a href="<?php echo"$datamenuujian";?>"><i class="fa fa-question-circle"></i> <span>ujian</span></a> 
			</li>
			<li>
				<a href="<?php echo"$datamenunilai";?>"><i class="fa fa-server"></i> <span>Nilai</span></a> 
			</li>			
            <li><a><i class="fa fa-user"></i>Biodata <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo"$datamenuedituser";?>">ubah data</a>
                    </li>
                    <li><a href="<?php echo"$datamenuedituserfoto";?>">ubah foto</a>
                    </li>
                    <li><a href="<?php echo"$datamenuedituserpswd";?>">ubah password</a>
                      </li>
                 </ul>
            </li>
			<li>
				<a href="<?php echo"$datamenutestimoni";?>"><i class="fa fa-commenting"></i> <span>Testimoni</span></a> 
			</li>
                                
 </ul>