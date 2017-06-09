<?php
function StarSim($noidung){
$c = curl_init("http://hotlike.net/_cnF/_star_api.php?hoi=$noidung");
curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$phanhoi = curl_exec($c);
curl_close($c);
if(strpos($phanhoi, '')===false)
$st = 1;
else $phanhoi = 'Hệ Thống Phản Hồi Đang Quá Tải';
return $phanhoi;
} 
function cap( $length ) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$size = strlen( $chars );
for( $i = 0; $i < $length; $i++ ) {
$str .= $chars[ rand( 0, $size - 1 ) ];
 }
return $str;
}
function baove($star){
	$star = trim($star);
	$star = stripslashes($star);
	$star = mysql_real_escape_string($star);
	return $star;

}
function LikeAD($id, $token){
$starthien = json_decode(auto('https://graph.facebook.com/'.$id.'/feed?limit=1&access_token='.$token),true);
$sttid = $starthien[data][0][id];
return auto('https://graph.facebook.com/'.$sttid.'/likes?method=post&access_token='.$token);
}
function me($star){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$star),true);
}
function checktk($thienbk){
return json_decode(auto('https://graph.facebook.com/app/?access_token='.$thienbk), true);
}
function auto($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
      )
   );
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}
function cURL($url, $biencookie, $fields = false){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIE, $biencookie);
if($fields){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
}
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
return curl_exec($ch);
curl_close($ch);
}
function thoigiantinhlogin($from){
	$to = time();
	$diff = (int)abs($to - $from);
	if($diff <= 60){
		$since = sprintf('Vừa Xong');
	}
	else if($diff <= 3600){
		$mins = round($diff / 60);
		$since = sprintf('%s Phút Trước', $mins);
	}
	else if(($diff <= 86400)&&($diff > 3600)){
		$hours = round($diff/3600);
		if($hours <= 1){
			$hours = 1;
		}
		$since = sprintf('%s Giờ Trước', $hours);
	}
	else if($diff >= 86400){
		$days = round($diff / 86400);
		if($days <= 1){
			$days = 1;
		}
		$since = sprintf('%s Ngày Trước', $days);
	}
	return $since;
}
function thoigiantinhvip($from){
	$to = time();
	$diff = (int)abs($to - $from);
	if($diff <= 60){
		$since = sprintf('Còn Vài Giây');
	}
	else if($diff <= 3600){
		$mins = round($diff / 60);
		$since = sprintf('Còn %s Phút', $mins);
	}
	else if(($diff <= 86400)&&($diff > 3600)){
		$hours = round($diff/3600);
		if($hours <= 1){
			$hours = 1;
		}
		$since = sprintf('Còn %s Giờ', $hours);
	}
	else if($diff >= 86400){
		$days = round($diff / 86400);
		if($days <= 1){
			$days = 1;
		}
		$since = sprintf('Còn %s Ngày', $days);
	}
	return $since;
}
$mobile = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
?>