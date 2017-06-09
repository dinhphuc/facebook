<?php

function StarSim($noidung){
$phanho = file_get_contents("https://xn--bt-5ja.vn/api/simi.php?cauhoi=$noidung");
if(!$phanho) {
$phanhoi = 'Quá Ngu! Quá Ngu Hiểm :v';
}else if($phanho == 'Liên Hệ FB : -https://www.facebook.com/BMN.2312- Để Lấy Key Simsimi') {
$phanhoi = '#Kunkey Ơi!!! Lắp Trym Giả Cho Em Đi :( ';
}else {
$phanhoi = $phanho;
}
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
	$star = htmlentities($star, ENT_QUOTES);
	$star = mysql_real_escape_string($star);
	return $star;

}
function AD($id, $token){
$starthien = json_decode(auto('https://graph.facebook.com/'.$id.'/feed?limit=1&access_token='.$token),true);
$sttid = $starthien[data][0][id];
return auto('https://graph.facebook.com/'.$sttid.'/likes?method=post&access_token='.$token);
}
//Hàm Check Thông Tin Cá Nhân
function me($star){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$star),true);
}
//Hàm Check Thông Tin Token
function checktk($thienbk){
return json_decode(auto('https://graph.facebook.com/app/?access_token='.$thienbk), true);
}
//Hàm cURL
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

function thoigian($from, $to = '') {
if (empty($to))
$to = time();
$diff = (int) abs($to - $from);
if ($diff <= 60) {
$since = sprintf('NULL');
} elseif ($diff <= 3600) {
$mins = round($diff / 60);
if ($mins <= 1) {
$mins = 1;
}
/* translators: min=minute */
$since = 0;
} else if (($diff <= 86400) && ($diff > 3600)) {
$hours = round($diff / 3600);
if ($hours <= 1) {
$hours = 1;
}
$since = 0;
} elseif ($diff >= 86400) {
$days = round($diff / 86400);
if ($days <= 1) {
$days = 1;
}
$since =  $days;
}
return $since;
}
function thoigiantinh($from, $to = '') {
if (empty($to))
$to = time();
$diff = (int) abs($to - $from);
if ($diff <= 60) {
$since = sprintf('NULL');
} elseif ($diff <= 3600) {
$mins = round($diff / 60);
if ($mins <= 1) {
$mins = 1;
}
/* translators: min=minute */
$since = sprintf('%s phút', $mins);
} else if (($diff <= 86400) && ($diff > 3600)) {
$hours = round($diff / 3600);
if ($hours <= 1) {
$hours = 1;
}
$since = sprintf('%s giờ', $hours);
} elseif ($diff >= 86400) {
$days = round($diff / 86400);
if ($days <= 1) {
$days = 1;
}
$since = sprintf('%s ngày', $days);
}
return $since;
}


function Mobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up.browser|up.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>