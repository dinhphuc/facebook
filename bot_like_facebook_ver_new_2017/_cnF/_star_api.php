<?php
$text = $_GET[hoi];
$bot = json_decode(auto('http://simsimi.com/getRealtimeReq?uuid=m0njJQ6vh8ElgCfIsaZ6Zp8yYoZ0O1szQWaIvPOlpXg&lc=vi&ft=0&reqText='.urlencode($text)),true);
if($bot['status']=='200'){
$bot =  preg_replace("/đụ|cặc|lồn|cặt|loz|buồi|địt/is", "***", $bot[respSentence]);
}
else if($bot=='404'){
$bot = 'Nói Cái Gì Thế Hả??? <3 :*';
}
echo $bot;
function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;}
?>