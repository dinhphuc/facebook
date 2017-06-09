<?php
ob_start();
session_start();
$time = time();
$timelimit = 300;
$timenew = $time - $timelimit;
mysqli_query($connection, "DELETE FROM online WHERE time < ".$timenew);
if($_SESSION['ten']&&$_SESSION['idfb']){
	$name = $_SESSION['ten'];
	$idfb = $_SESSION['idfb'];
	$result = mysqli_query($connection, "SELECT * FROM online WHERE `idfb` = '".$idfb."'");
	if(mysql_num_rows($result) < 1){
		mysqli_query($connection, "INSERT INTO online SET `time` = '".$time."', `ten` = '".$name."', `idfb` = '".$idfb."'");
	}
	else if(mysql_num_rows($result) >= 1){
		mysqli_query($connection, "DELETE FROM online WHERE `idfb` = '".$idfb."'");
		mysqli_query($connection, "INSERT INTO online SET `time` = '".$time."', `ten` = '".$name."', `idfb` = '".$idfb."'");
	}
}
?>