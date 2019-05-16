<?php include"secret/krispi.php";
?>
 <ul class="nav side-menu">
 <li>
              <a href="<?php echo"$datadashboard";?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>            </li>
			<li>
			<a href="<?php echo"$datamenuprofil";?>">
            <i class="fa fa-institution"></i> <span>Profil Website</span></a>            </li>
			<li><a><i class="fa fa-book"></i>Berita<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo"$datamenupost";?>">post</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenucat";?>">kategori</a>
                                        </li>
                                        
                                    </ul>
                                </li>
			
   <li>
              <a href="<?php echo"$datamenumatkul";?>">
            <i class="fa fa-graduation-cap"></i> <span>mata kuliah</span></a>            </li> 
			
			
		
                               
                                <li><a><i class="fa fa-question-circle"></i>Ujian <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo"$datamenusoal";?>">soal</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenudujian";?>">data ujian</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenuujian";?>">setting ujian</a>
                                        </li>
                                    </ul>
                                </li>
                               <li>
			<a href="<?php echo"$datamenunilai";?>">
            <i class="fa fa-server"></i> <span>nilai</span></a>            </li> 
			
			<li>
			<a href="<?php echo"$datamenuusergarap";?>">
            <i class="fa fa-users"></i> <span>User</span></a>            </li>
			<li>
			<a href="<?php echo"$datamenutestimoni";?>">
            <i class="fa fa-comments"></i> <span>testimoni</span></a>            </li>

            <li><a><i class="fa fa-user"></i>admin <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo"$datamenuuseradmin";?>">Ubah biodata</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenuuserfoto";?>">Ubah foto</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenuuserpassword";?>">Ubah Password</a>
                                        </li>
                                    </ul>
                                </li> 
                            </ul>
							
							