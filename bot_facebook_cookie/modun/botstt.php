<?php
include'../config.php';
$cooke = $_GET['cookie'];
$idfb = $_GET['idfb'];
$stt = $_GET['stt'];

if(!$cooke) {
die('<b color="red">  Lỗi! Hãy Nhập Cookie</b>');
}else if(!$idfb) {
die('<b color="red">  Lỗi! Hãy Nhập ID Nick Bot Like</b>');
}

$token = file_get_contents(''.$dm.'/nokia.php?cookie='.urlencode($cooke).'');

if(!$token) {
die('<b color="red"> Lỗi! Hãy Kiểm Tra Lại Cookie Hoặc Nick Bạn Chưa Cài Đặt Token Nokia</b>');
}

$check = json_decode(file_get_contents('https://graph.facebook.com/'.$idfb.'/feed?limit=1&access_token='.$token.''),true);

if(!$check[data]){
die('<b color="red">  Lỗi! ID Bot Like Không Hợp Lệ</b>');
}



if(!$stt) {
die('<b color="red"> Lỗi! Hãy Nhập Danh Sách Status Vào, Nhớ Phân Cách Mỗi Status Bằng Ký Tự | Nha!</b>');
}else if(strlen($stt) <= 10) {
die('<b color="red"> Lỗi! Stt Phải Lớn Hơn Hoặc Bằng 10 Ký Tự, Xin Hãy Nhập Lại!</b>');
}







if($token && $check) {
mysql_query("CREATE TABLE IF NOT EXISTS `botstt` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `idfb` varchar(32) NOT NULL,
      `status` varchar(9999) NOT NULL,
      `cookie` varchar(999) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");


   $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         botstt
      WHERE
         idfb = '" . mysql_real_escape_string($idfb) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               botstt
            WHERE
               idfb='" . mysql_real_escape_string($idfb) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            botstt
         SET
            `idfb` = '" . mysql_real_escape_string($idfb) . "',
            `status` = '" . mysql_real_escape_string($stt) . "',
            `cookie` = '" . mysql_real_escape_string($cooke) . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            botstt
         SET
            `status` = '" . mysql_real_escape_string($stt) . "',
            `cookie` = '" . mysql_real_escape_string($cooke) . "'
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
  echo '<b color="green"> Thành Công!</b><br>
Khi Không Thấy Bot Hoạt Động Nữa Thì Bạn Phải Vào Cài Lại Nhé!';
}