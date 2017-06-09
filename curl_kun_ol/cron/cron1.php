<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
include'../config.php'; // chèn file kết nối database

$laycookie = mysql_query("SELECT * FROM `curl` ORDER BY RAND() LIMIT 0,1");

while ($get = mysql_fetch_array($laycookie)){
$id = $get['id']; // Lấy số thứ tụ của bản ghi
$idfb = $get['idfb']; // lấy idfb
$cooke = $get['cookie']; // lấy cookie

$token = file_get_contents(''.$dm.'/xulytoken.php?cookie='.urlencode($cooke).'');

  if(!$token){  @mysql_query("DELETE FROM curl WHERE cookie ='".$cooke."' ");  continue; }

auto(''.$dm.'/cron.php?token='.$token.'&idfb='.$idfb.'');

}




function auto($url) {
   $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_exec($ch);
    curl_close($ch);
}