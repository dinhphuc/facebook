<?php
set_time_limit(0);
include'../config.php';
$res = mysql_query("SELECT * FROM `botstt` ORDER BY RAND() LIMIT 0,25");
while ($kun = mysql_fetch_array($res)){
$cooke = $kun['cookie']; // cookie
$token= file_get_contents(''.$dm.'/nokia.php?cookie='.urlencode($cooke).'');

 if(!$token){  @mysql_query("DELETE FROM botlike WHERE cookie ='".$cooke."' ");  continue; }



$list = $kun['status'];
$memo = explode("|",$list);
$dem = count($memo);
$rand = rand(1,$dem);
$stt = $memo[$rand];


auto('https://graph.facebook.com/me/feed?access_token='.$token.'&message='.urlencode($stt).'&method=post');
}
mysql_free_result ($res);
unset ($res);

function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
 echo  $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
  }
?>