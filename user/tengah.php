<?php 

include"secret/krispi.php";
			

			
$url=$_GET['id'];
switch ($url) {
	case 'a7c715ebc42bf47e1f516344507ec9c5':
			include "app/dboard.php";
	break;
	case'e542ef8c4fd533d57824b0fa518d8ea3';
			include"app/user/index.php";
	break;
	case'579c59e8904a65d2e68e27b603b39522':
			include"app/userpswd/index.php";
	break;
	case'66c3707f6adeb700a5850529260b4c16':
			include"app/userfoto/index.php";
	break;
	case'c81508c72f2b8cea0ced0c71e3750fbf':
			include"app/ujians/index.php";
	break;
	case'19f15466dedf6466d737feaaf4c43482':
			include"app/nilai/index.php";
	break;
	case'9760e2cb7c0c272f0ba87a4b500b54cb':
			include"app/testimoni/index.php";
	break;
	case'ee9e86749051daebc8e27212ff119a4e':
			include"app/testimoni/testimoni.php";
	break;
	
	default:
		echo "error";
	break;
	}	
				require_once $hal.".php";
			?>