<?
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
require("../_cnF/_star_funC.php");
if(isset($_POST['fid'])) {
$fid=$_POST['fid'];

$getms = json_decode(auto('https://graph.facebook.com/'.$fid.'/messages?access_token='.$_SESSION['matoken'].'&limit=5000'),true);
for($ii=0;$ii<count($getms['data']);$ii++){
$idtime = $getms['data'][$ii]['created_time'];
$stt = explode("+", $idtime);
$post_id= $stt[0];

echo '<b><img src="https://graph.facebook.com/'.$getms['data'][$ii]['from']['id'].'/picture?width=50&height=50" alt="avatar" class="dev">'; 
echo $getms['data'][$ii]['message'].'<br>';


if(isset($getms['data'][$ii]['shares']['data'][0]['link'])){
echo '<img src="'.$getms['data'][$ii]['shares']['data'][0]['link'].'" alt="">';
}

if(isset($getms['data'][$ii]['attachments']['data'][0]['image_data']['url'])){
echo '<img src="'.$getms['data'][$ii]['attachments']['data'][0]['image_data']['url'].'" width="500" alt="">';
}


if(isset($getms['data'][$ii]['attachments']['data'][0]['file_url'])){
echo '<a href="'.$getms['data'][$ii]['attachments']['data'][0]['file_url'].'" target="_blank"><font color=red> '.$getms['data'][$ii]['attachments']['data'][0]['name'].' </font> [ '.$getms['data'][$ii]['attachments']['data'][0]['size'].' kp ] </a>';
}
echo '<time><span class="text-info"><br>'.   $post_id.'</span></time></b><hr>';   
}
die('<script type="text/javascript">toarst("success","Load Tin Nhắn Thành Công.","Lời Nhắn")</script>');
}
?>
