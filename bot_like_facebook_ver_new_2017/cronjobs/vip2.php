<?php 
set_time_limit(0); 
require("../_cnF/_star_cn_F.php");
require("../_cnF/_star_funC.php"); 
$resid = @mysqli_query($connection, "SELECT * FROM `vip` WHERE `level` = 2");
$restk = @mysqli_query($connection, "SELECT * FROM tokenvip ORDER BY RAND() LIMIT 0,80");
while ($vipid = @mysql_fetch_array($resid)){
	$idfb = $vipid['idfb'];
	while ($viptk = @mysql_fetch_array($restk)) {
		$token = $viptk['token'];
		@mysqli_query($connection, "DELETE FROM `tokenvip`     WHERE `idfb`='".$vipid['idfb']."' ");
		@mysqli_query($connection, "DELETE FROM `tokenios`     WHERE `idfb`='".$vipid['idfb']."' ");
		@mysqli_query($connection, "DELETE FROM `tokeniphone`  WHERE `idfb`='".$vipid['idfb']."' ");
		@mysqli_query($connection, "DELETE FROM `tokenhtc`     WHERE `idfb`='".$vipid['idfb']."' ");
		@mysqli_query($connection, "DELETE FROM `tokenandroid` WHERE `idfb`='".$vipid['idfb']."' ");
		if (($vipid['time'] - time()) <= 0) {
			@mysqli_query($connection, "DELETE FROM `vip` WHERE `idfb`='".$vipid['idfb']."' ");
		}
		$stat = json_decode(auto('https://graph.facebook.com/'.$idfb.'/feed?fields=id&access_token='.$token.'&limit=1'),true);
		$countlike = $stat[data][0][likes][count];
		if($countlike <= 60){
			for($i=1;$i<=count($stat['data']);$i++){
				auto('https://graph.facebook.com/'.$stat['data'][$i-1]['id'].'/likes?access_token='.$token.'&method=post');
			}
		}
	}
}
echo 'Xong';
?>