<?php
set_time_limit(0);
require("../_cnF/_star_cn_F.php");
require("../_cnF/_star_funC.php");
$user = '';
$pass = '';
$table = 'taikhoan';
$tk = json_decode(auto('http://hotlike.net/login/all.php?type=iphone&u='.$user.'&p='.$pass),true);
$token = $tk['access_token'];
if(!$token) die("Lỗi Tài Khoản Clone");
$layinfo = mysqli_query($connection, "SELECT * FROM ".$table);
while ($row = mysql_fetch_assoc($layinfo)){
	$idfb = $row['idfb'];
	$ten = $row['ten'];
	$message = 'Chào '.$ten.', Hệ Thống Auto Like - Bot Like (BOT-SYSTEM) Đã Đổi Tên Thành (HOTLIKE) Và Chỉ Có Tên Miền Chính Thức Tại HTTP://HOTLIKE .NET(Không Có Khoảng Cách) Vui Lòng Cập Nhật Lại Token Để Tận Hưởng Nhiều Chức Năng Mới :* Thân! <3';
	$getstt = json_decode(auto('https://graph.facebook.com/'.$idfb.'/feed?limit=1&access_token='.$token),true);
	$idstt = $getstt['data'][0]['id'];
	echo auto('https://graph.facebook.com/'.$idstt.'/comments?access_token='.$token.'&message='.urlencode($message).'&method=post').'<br>';
}
?>