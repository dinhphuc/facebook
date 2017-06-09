<?php
ob_start();
session_start(); 
$cookie = $_POST['cookie'];
$app = $_POST['app'];
if($_POST){
if($app=='htc'){$type = '41158896424';}
else if($app=='ios'){$type = '165907476854626';}
else{die('<script type="text/javascript">toarst("error","Ứng Dụng Đăng Nhập Sai. Bạn Chỉ Có Thể Chọn APP HTC Sense Hoặc PAGES MANAGER FOR IOS.","Chú Ý");</script>');}
if(!$cookie){
	die('<script type="text/javascript">toarst("error","Bạn Chưa Nhập Cookie. Vui Lòng Nhập Cookie Vào Để Đăng Nhập.","Chú Ý");</script>');
}
else{
	include'../_cnF/_star_funC.php';
	$data = cURL('https://mbasic.facebook.com/profile.php', $cookie);
	if(preg_match('#name=\\"fb_dtsg\\" value=\\"(.*?)\\"#is', $data, $fb_dtsg)){
		$result_token = cURL('https://www.facebook.com/v2.7/dialog/oauth/confirm', $cookie, 'fb_dtsg='.$fb_dtsg[1].'&app_id='.$type.'&redirect_uri=fbconnect://success&display=popup&access_token=&sdk=&from_post=1&private=&tos=&login=&read=&write=&extended=&social_confirm=&confirm=&seen_scopes=&auth_type=&auth_token=&auth_nonce=&default_audience=&ref=Default&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1');
		if(preg_match("'access_token=(.*?)&expires_in='", $result_token, $access_token)){
			$_SESSION['ses_token'] = $access_token[1];
			$_SESSION['ses_cookie'] = $cookie;
			echo('<script type="text/javascript">toarst("success","Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng.","Chú Ý");window.location="../login-captcha.html";</script>');
		}
	}
	else{
		die('<script type="text/javascript">toarst("error","Cookie Bị Lỗi Hoặc Đã Hết Hạn. Vui Lòng Lấy Lại Cookie.","Chú Ý");</script>');
	}
}
}