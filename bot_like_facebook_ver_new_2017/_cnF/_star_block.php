<?php
ob_start();
session_start();
$content = file('./modun_txt/block.log');
$count = count($content);
for($i=0;$i<=$count-1;$i++){
	$value = trim($content[$i]);
	if(strlen($value)>1){
		if($value==$_SESSION['idfb']){
			header("Location: ../error");
		}
	}
}
?>