<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION[idfb]) 
{
	require("../_cnF/_star_cn_F.php");
	require("../_cnF/_star_funC.php");
	$idfb = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
	if(!is_numeric($idfb)){
		die('<script type="text/javascript">toarst("error","Lỗi, Bạn Đang Nhập ID Không Tồn Tại.","Thông Báo Lỗi")</script>');
	}
	$token = isset($_POST['token']) ? baove($_POST['token']) : FALSE;
	$soluong = isset($_POST['limit']) ? baove($_POST['limit']) : FALSE;
	$cmt = isset($_POST['cmt']) ? baove($_POST['cmt']) : FALSE;
	$server = $_POST['_SERVER'];
	if ($server != $_SESSION['_SERVER']) die('Đã Xảy Ra Lỗi<script type="text/javascript">toarst("error","Đã Có Lỗi Xảy Ra.","Thông Báo Lỗi")</script>');
	if (!$idfb){
	die('ERROR: Không Tìm Thấy ID.<script type="text/javascript">toarst("error","Trường ID Đang Trống, Bạn Cần Nhập ID Vào.","Thông Báo Lỗi")</script>');
	}
	$loai = $_POST['auto'];
	if ( $loai == "boomlike"){
        $s = $c = 0;
	$getinfo = json_decode(auto('https://graph.beta.facebook.com/'.$idfb.'/feed?fields=id&limit='.$soluong.'&access_token='.$token), true);
	for ($i = 0; $i <= count($getinfo[data]); $i++) {
	auto('https://graph.beta.facebook.com/'.$getinfo[data][$i][id].'/likes?method=post&access_token='.$token);
	$s++;
	if ($cmt == 1){
	$cmt = json_decode(auto('https://graph.beta.facebook.com/'.$getinfo[data][$i][id].'/comments?fields=id&limit=500&access_token='.$token), true);
	for ($j=1;$j<=count($cmt[data]);$j++){
	auto('https://graph.facebook.com/'.$cmt[data][$j][id].'/likes?method=post&access_token='.$token);
	$c++;
	}
	}
	}
	die('SUCCESS: Bão Like Thành Công.<br /> '.$s.' : Like Trạng Thái & '.$c.' : Like Comment.<script type="text/javascript">toarst("success","Bão Like Thành Công!.","Lời Nhắn Từ Hệ Thống")</script>');
	}elseif ( $loai == "boomcamxuc"){
	$tk = checktk($token);
	if($tk['id'] !== '6628568379'){
        echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
	die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
        }
        $type = isset($_POST['camxuc']) ? $_POST['camxuc'] : FALSE;
   	$s = $c = 0;
	$getinfo = json_decode(auto('https://graph.beta.facebook.com/'.$idfb.'/feed?fields=id&limit='.$soluong.'&access_token='.$token), true);
	for ($i = 0; $i <= count($getinfo[data]); $i++){
	auto('https://graph.beta.facebook.com/'.$getinfo[data][$i][id].'/reactions?type='.$type.'&method=post&access_token='.$token);
	$s++;
	if ($cmt == 1){
	$cmt = json_decode(auto('https://graph.beta.facebook.com/'.$getinfo[data][$i][id].'/comments?fields=id&limit=500&access_token='.$token), true);
	for ($j=1;$j<=count($cmt[data]);$j++) {
	auto('https://graph.facebook.com/'.$cmt[data][$j][id].'/reactions?type='.$type.'&method=post&access_token='.$token);
	$c++;
	}
	}
	}
	die('SUCCESS: Bão Cảm Xúc Thành Công.<br /> '.$s.' : Cảm Xúc Trạng Thái & '.$c.' : Cảm Xúc Comment.<script type="text/javascript">toarst("success","Bão Cảm Xúc Thành Công!.","Lời Nhắn Từ Hệ Thống")</script>');
	}elseif ($loai == "boomcmt"){
        $noidungs = isset($_POST['noidung']) ? $_POST['noidung'] : FALSE;
	$s = 0;
	$getinfo = json_decode(auto('https://graph.facebook.com/'.$idfb.'/feed?fields=id&limit='.$soluong.'&access_token='.$token), true);
	for ($i=0;$i<=count($getinfo[data]);$i++){
        $array_noidung = explode("\n", $noidungs);
	$noidung = $array_noidung[array_rand($array_noidung)];
	auto("https://graph.facebook.com/".$getinfo[data][$i][id]."/comments?access_token=".$token."&method=post&message=".urlencode($noidung));
	$s++;
	}
	die('SUCCESS: Bão Comment Thành Công.<br /> Số Comment Bão Thành Công Là: '. $s.'.<script type="text/javascript">toarst("success","Bão Comment Thành Công!.","Lời Nhắn Từ Hệ Thống")</script>');
	}elseif ($loai == "boomcmt2"){
	$noidungs = isset($_POST['noidung']) ? $_POST['noidung'] : FALSE;
	$s = 0;
	for ($i=1;$i<=$soluong;$i++){
	$array_noidung = explode("\n", $noidungs);
	$noidung = $array_noidung[array_rand($array_noidung)];
	auto("https://graph.facebook.com/".$idfb."/comments?access_token=".$token."&method=post&message=".urlencode($noidung));
	$s++;
	}
	die('SUCCESS: Bão Comment Thành Công.<br /> Số Comment Bão Thành Công Là: '. $s.'.<script type="text/javascript">toarst("success","Bão Comment Thành Công!.","Lời Nhắn Từ Hệ Thống")</script>');
	}
}