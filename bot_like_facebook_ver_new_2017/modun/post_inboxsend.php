<?
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
require("../_cnF/_star_funC.php");
if(isset($_POST['fid'])) {
$fid=$_POST['fid'];
$token=$_SESSION['matoken'];
$traloi=$_POST['traloi'];

$getms = json_decode(auto('https://graph.facebook.com/'.$fid.'/messages?access_token='.$_SESSION['matoken'].'&limit=5000'),true);

echo auto('https://graph.fb.me/'.$getms['data'][0]['from']['id'].'/inbox?access_token='.$token.'&message='.urlencode($traloi).'&method=post&subject=+'); 
die('<script type="text/javascript">toarst("success","Gửi Tin Nhắn Thành Công.","Lời Nhắn")</script>');
}


?>
