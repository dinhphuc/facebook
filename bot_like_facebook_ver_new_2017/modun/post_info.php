<?php
if ($_GET['goi']) {
	switch ($_GET['goi']) {
		case '1':
			$array = array(
			    "name" => "VIP Member",
			    "limit_liketus" => "100",
			    "limitday" => "6",
			    "price" => "3000" 
			);
			break;
		case '2':
			$array = array(
			    "name" => "Medium Member",
			    "limit_liketus" => "150",
			    "limitday" => "6",
			    "price" => "5000" 
			);
			break;
		case '3':
			$array = array(
			    "name" => "Super Member",
			    "limit_liketus" => "200",
			    "limitday" => "6",
			    "price" => "7000" 
			);
			break;
		case '4':
			$array = array(
			    "name" => "Boss Member",
			    "limit_liketus" => "250",
			    "limitday" => "6",
			    "price" => "9000" 
			);
			break;
	}

	die(json_encode($array));
}
?>
