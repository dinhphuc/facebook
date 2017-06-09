<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
$id = $_GET['id'];

include'../config.php';

$gettoken = mysql_query("SELECT * FROM `share` ORDER BY RAND() LIMIT 0,1");
$get = mysql_fetch_array($gettoken);

$token = $get['access_token'];
//check xem có token trong db ko
if (!$token) {
die('Hết token Để Check Rồi');
}

// check id xem có life ko
$check = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/?access_token='.$token),true);
if (!$check['id']) {
die('ID ko tồn tại');
}else {
$name = $check['name'];
}

// kết nối
$connection = mysql_connect($host,$username,$password);
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
mysql_query("CREATE TABLE IF NOT EXISTS `vip` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");

    $result = mysql_query("
      SELECT
         *
      FROM
         vip
      WHERE
         user_id = '" . $id . "'
   ");

   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);

      if($row){
        die('ID Này đã Có Trên Hệ Thống');
      }else {
      mysql_query(
         "INSERT INTO 
            vip
         SET
            `user_id` = '" .$id. "',
            `name` = '" . $name. "'
      ");
echo 'Đã Thêm User '.$name;
   }
}
// thành công cmnr





?>