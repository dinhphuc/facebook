<?php
include'../config.php';
$cooke = $_GET['cookie'];
$idfb = $_GET['idfb'];

if(!$cooke) {
die('<b color="red">  Lỗi! Hãy Nhập Cookie</b>');
}else if(!$idfb) {
die('<b color="red">  Lỗi! Hãy Nhập ID Nick Bot Like</b>');
}

$token = file_get_contents(''.$dm.'/nokia.php?cookie='.urlencode($cooke).'');

if(!$token) {
die('<b color="red">Cookie Lỗi Hoặc Nick Bạn Chưa Cài Token Nokia</b>');
}

$check = json_decode(file_get_contents('https://graph.facebook.com/'.$idfb.'/feed?limit=1&access_token='.$token.''),true);

if(!$check[data]){
die('<b color="red">  Lỗi! ID Bot Like Không Hợp Lệ</b>');
}








if($token && $check) {
mysql_query("CREATE TABLE IF NOT EXISTS `botlike` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `idfb` varchar(32) NOT NULL,
      `cookie` varchar(999) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");


   $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         botlike
      WHERE
         idfb = '" . mysql_real_escape_string($idfb) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               botlike
            WHERE
               idfb='" . mysql_real_escape_string($idfb) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            botlike
         SET
            `idfb` = '" . mysql_real_escape_string($idfb) . "',
            `cookie` = '" . mysql_real_escape_string($cooke) . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            botlike
         SET
            `cookie` = '" . mysql_real_escape_string($cooke) . "'
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
  echo '<b color="green"> Thành Công!</b>';
}