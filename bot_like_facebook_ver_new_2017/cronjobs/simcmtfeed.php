<?php 
set_time_limit(0); 
echo '<meta charset="utf-8"/>';
require("../_cnF/_star_cn_F.php");
require("../_cnF/_star_funC.php");
$res = mysqli_query($connection, "SELECT * FROM simcmtfeed ORDER BY RAND() LIMIT 0,5");
while ($getinfo = mysql_fetch_array($res)) 
{
	$iduser = $getinfo[idfb];
	$token = $getinfo[token];
	$userData = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$token.'&fields=name,id'),true);
	if(!$userData[name]){
	mysqli_query($connection, "
	DELETE FROM
	simcmtfeed
	WHERE
	token = '" . mysql_real_escape_string($token) . "'
	");
	continue;
	}
	$getID = json_decode(auto('https://graph.facebook.com/me?access_token='.$token.'&fields=id'),true);
	$home = json_decode(auto('https://graph.facebook.com/me/home?access_token='.$token.'&limit=5&fields=id,message,from,type,created_time,comments.id,comments.message,comments.from,comments.limit(100)'),true);
	$log = json_encode(file('logsimcmtfeed.txt'));
	for($i=0;$i<count($home);$i++){	
                $aloneboy = explode('_', $home[data][$i][id]);
		$check_log = explode($aloneboy[1],$log);
		if(count($check_log) > 1){
		echo'Đã Trả Lời!';
		}else{
			if($home[data][$i]){
				$log1 = $aloneboy[1].'_';
				$log2 = @fopen('logsimcmtfeed.txt','a');
				@fwrite($log2,$log1);
				@fclose($log2);
				if($home[data][$i][type] == "photo"){
					//continue();
				}else{
					$traloi = StarSim($home[data][$i][message]).'.';
				}
				if($home[data][$i][from][id] !== $getID[id]){
				auto('https://graph.facebook.com/'.$home[data][$i][id].'/comments?access_token='.$token.'&message='.urlencode($traloi).'&method=post');
				@mysqli_query($connection, "INSERT INTO `logsimfeed` (`ten`, `idstt`,`noidungcmt`,`idngta`,`tenngta`) VALUES ('".$getinfo[ten]."', '".$home[data][$i][id]."','".$traloi."','".$home[data][$i][from][id]."','".$home[data][$i][from][name]."')");
				}
			}
		}
	}
	
}
?>