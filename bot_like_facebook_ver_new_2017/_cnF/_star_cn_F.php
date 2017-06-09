<?php
error_reporting(0);
session_start();
$text = array(
'linkvh' => 'https://seakbz.design/',
'vh' => 'HOTLIKE',
'vtat' => 'HL',
'link' => 'https://seakbz.design/',
);

$db_host = 'localhost'; //MySQL HOST
$db_user = 'kreeyech_kBz'; //MySQL USER
$db_pass = 'seakBz.18..08'; //MySQL PASS
$db_name = 'kreeyech_kBz'; //MySQL NAME

$connection = mysqli_connect($db_host,$db_user,$db_pass);
if (!$connection){
die('Không Thể Kết Nối: ' . mysql_error($connection));}
mysqli_select_db($connection, $db_name) or die(mysql_error($connection));
mysqli_query($connection, "SET NAMES utf8");
?>

