<?php 

include"secret/krispi.php";
			
$url=$_GET['id'];
switch ($url) {
	case 'a7c715ebc42bf47e1f516344507ec9c5':
			include "app/dboard/index.php";
			break;
		case'e0bb6d929cb37f05126ff2c112e6bc14':
			include'app/post/index.php';
			break;
		case'37fa18ef31d26aa7994347ec39907a7b':
			include'app/post/post.php';
			break;
		case'5ddf6a1b3b296c88ba18fe6ef61f90dc':
			include'app/post/post_ubah.php';
			break;
		case'e1c76febd68a6a0038df985aee0daa13':
			include'app/post/process_ubah.php';
			break;
		case'236daa7b8f061d2ab54c18ed49727d71':
			include'app/cat/index.php';
			break;
		case '69438e8a13c1e6e67c3960d16e5c0a6e':
			include "app/soal/index.php";
			break;
		case 'c30d2d09d9c1ea1f4b462d736f9e045e':
			include "app/soal/indexs.php";
			break;
		 case'0873ef93125b406d922477cde1daf78f':
			include"app/soal/soals.php";
			break; 
		case '6ceb97728d383f60991f54284024af15':
			include"app/soal/soalsubah.php";
			break;
		case '0c1e7ee024f09cecb7d6d45f44c2b422':
			include"app/soal/proses.ubah.php";
			break;
		case'c3d9bced195476bd1254a752d7c365a3':
			include"app/dujian/index.php";
			break;
		case'4ee8c71652b7ff9e0efadcee7d4e0e51':
			include"app/matkul/index.php";
			break;
		case'fa49525f069d5ed41566e880daa99377':
			include"app/materi/index.php";
			break;
		case'24b4cf721af724f45e902cda98e5ae37';
			include"app/ujian/index.php";
			break;
		case'fd13463351e2acca938349321e1e0d10':
			include"app/nilai/index.php";
			break;
		case'e2df1c72bca6166485f57fb567cfe02b':
			include"app/profil/index.php";
		break;
		case'2a436f1151d667b411c3af77c2b0883c':
			include"app/usergarap/index.php";
		break;
		case'5dab570428ba7310c9e6f689c3c65e2d':
			include"app/nilai/indexs.php";
		break;
		case '0a65b95c9cc798bcc62b3febb8cf27b5':
			include"app/user/index.php";
			break;
		case 'bc81a83ad6096ac7f777ece30fd16dcb':
			include"app/userfoto/index.php";
			break;
		case '235f048a44f5711cad917e5a45dcb6d5':
			include"app/userpswd/index.php";
			break;
		case'ae7277f5c7a9836bab1ce22d9a089add':
			include"app/testimoni/index.php";
		break;
		default:
			 echo "error";
			break;
	}	
				require_once $hal.".php";
			?>