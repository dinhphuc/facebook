<?php
session_start();
include'config.php';
$access_token = $_GET['access_token'];
	mysql_query("
DELETE FROM `BotExLike` WHERE `access_token` ='" . $access_token . "'
");
echo'<meta http-equiv=refresh content="0; URL=/index.php?info=3">';
?>