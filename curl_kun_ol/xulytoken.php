<?php
/***********************************************
               Code Update Token By Kunkey
Không Xóa Dòng Này Nếu Bạn là người Có Học
************************************************/
include'func.php';


$cooke = $_GET['cookie']; // nhập cookie đã cài token tại đây





if (!$cooke) {
echo 'chưa nhập cookie';
exit();
}

$app = '41158896424';

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
exit();
} else{
echo $token[0];
}
}