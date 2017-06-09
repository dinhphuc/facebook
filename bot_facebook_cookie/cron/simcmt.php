<meta http-equiv="refresh" content="10">
<?php 
set_time_limit(0); 
echo '<meta charset="utf-8"/>';
require("../config.php");
require("function.php");
$res = mysql_query("SELECT * FROM simcmt ORDER BY RAND() LIMIT 0,7");
while ($getinfo = mysql_fetch_array($res)) {
	$iduser = $getinfo[idfb];
    $cooke = $getinfo[cookie];
	$token = file_get_contents(''.$dm.'/nokia.php?cookie='.urlencode($cooke).'');

  if(!$token){  @mysql_query("DELETE FROM simcmt WHERE cookie ='".$cooke."' ");  continue; }
	
	$getID = json_decode(auto('https://graph.facebook.com/me?access_token='.$token.'&fields=id'),true);
	$getStt = json_decode(auto('https://graph.facebook.com/'.$iduser.'/feed?limit=1&access_token='.$token),true);
	$log = json_encode(file('logsimcmt.txt'));
	for($i=1;$i<=count($getStt[data]);$i++){
		$getcmt = json_decode(auto('https://graph.facebook.com/'.$getStt[data][$i-1][id].'/comments?access_token='.$token.'&limit=1000&fields=id,from,message'),true);
		if(count($getcmt[data]) > 0){
			for($c=1;$c<=count($getcmt[data]);$c++){
				$check_log = explode($getcmt[data][$c-1][id],$log);
				if(count($check_log) > 1)
				{
				echo'Đã Trả Lời!';
				}
				else
				{
					$log1 = $getcmt[data][$c-1][id].'_';
					$log2 = fopen('logsimcmt.txt','a');
					fwrite($log2,$log1);
					fclose($log2);
					$cmt = trim($getcmt[data][$c-1][message]);
					if(preg_match('/kết bạn/is', $cmt) || preg_match('/ket ban/is',$cmt) || preg_match('/add/is',$cmt))
					{
						if($getcmt[data][$c-1][from][id] !== $getID[id])
						{
							auto('https://graph.facebook.com/me/friends?uid='.$getcmt[data][$c-1][from][id].'&access_token='.$token.'&method=post');
							$str = $getcmt[data][$c-1][from][name];
							$traloi = '#'.str_replace( ' ', '_', $str).': ';
							$traloi .= 'Gửi Lời Mời Kết Bạn Rồi Nha!';
							auto('https://graph.facebook.com/'.$getStt[data][$i-1][id].'/comments?access_token='.$token.'&message='.urlencode($traloi).'&method=post');
						}
					}
					else
					{
						$str = $getcmt[data][$c-1][from][name];
						$traloi = '#'.str_replace( ' ', '_', $str).': ';
						$traloi .= StarSim($getcmt[data][$c-1][message]);
						if($getcmt[data][$c-1][from][id] !== $getID[id])
						{
						auto('https://graph.facebook.com/'.$getStt[data][$i-1][id].'/comments?access_token='.$token.'&message='.urlencode($traloi).'&method=post');
						}
					}
					@mysql_query("INSERT INTO `LogSimCmt` (`ten`, `idstt`,`noidungcmt`,`idngta`,`tenngta`) VALUES ('".$getinfo[ten]."', '".$getStt[data][$i-1][id]."','".$traloi."','".$getcmt[data][$c-1][from][id]."','".$getcmt[data][$c-1][from][name]."')");
				}
			}
		}
	}
}
?>