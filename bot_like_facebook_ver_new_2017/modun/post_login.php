<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if($_POST){
	include'../_cnF/_star_funC.php';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$app_id = $_POST['app'];
	if($app_id == 350685531728){$type = 'android';}
	else if($app_id == 6628568379){$type = 'iphone';}
	else if($app_id == 41158896424){$type = 'htc';}
	else if($app_id == 165907476854626){$type = 'ios';}

	if($type == 'android'||$type == 'iphone'){
		$json = json_decode(auto('http://hotlike.net/login/ios.php?u='.$email.'&p='.$password),true);
		if($json['access_token']){
			$json = json_decode(auto('http://hotlike.net/login/'.$type.'.php?u='.$email.'&p='.$password),true);
			if($json['access_token']){
				$_SESSION['ses_token'] = $json['access_token'];
				die('<script type="text/javascript">toarst("success","Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng","Lời Nhắn");window.location="../login-captcha.html";</script>');
			}
			else{

				if($json['error_code']==400){
					$title = 'Tên Người Dùng Không Chính Xác.';
					$noidung = 'Tên Người Dùng Bạn Đã Nhập Có Vẽ Không Thuộc Về Tài Khoản Nào. Vui Lòng Kiểm Tra Tên Người Dùng Và Thử Lại.';
				}
				else if($json['error_code']==401){
					$title = 'Mật Khẩu Không Chính Xác.';
					$noidung = 'Mật Khẩu Bạn Đã Nhập Không Chính Xác. Vui Lòng Thử Lại.';
				}
				else if($json['error_code']==405){
					$title = 'Tài Khoản Tạm Thời Không Truy Cập Được.';
					$noidung = 'Tài Khoản Của Bạn Đã Bị Tạm Khóa. Vui Lòng Truy Cập Vào www.facebook.com Để Mở Lại Tài Khoản Của Bạn.';
				}
				else if($json['error_code']==2608){
					$title = 'Lỗi Tài Khoản Hoặc Mật Khẩu.';
					$noidung = 'Lỗi, Tài Khoản Hoặc Mật Khẩu Của Bạn Không Chính Xác. Vui Lòng Nhập Đúng Tài Khoản Hoặc Mật Khẩu Để Đăng Nhập.';
				}
				else{
					$title = 'Lỗi Tài Khoản.';
					$noidung = 'Lỗi, Tài Khoản Của Bạn Đã Bị Khóa Chức Năng Lấy Token Hoặc Đã Bị Lỗi.';
				}
				die('<script type="text/javascript">toarst("error","'.$noidung.'","'.$title.'");</script>');
			}
		}
		else{
			if($json['error_code']==400){
				$title = 'Tên Người Dùng Không Chính Xác.';
				$noidung = 'Tên Người Dùng Bạn Đã Nhập Có Vẽ Không Thuộc Về Tài Khoản Nào. Vui Lòng Kiểm Tra Tên Người Dùng Và Thử Lại.';
			}
			else if($json['error_code']==401){
				$title = 'Mật Khẩu Không Chính Xác.';
				$noidung = 'Mật Khẩu Bạn Đã Nhập Không Chính Xác. Vui Lòng Thử Lại.';
			}
			else if($json['error_code']==405){
				$title = 'Tài Khoản Tạm Thời Không Truy Cập Được.';
				$noidung = 'Tài Khoản Của Bạn Đã Bị Tạm Khóa. Vui Lòng Truy Cập Vào www.facebook.com Để Mở Lại Tài Khoản Của Bạn.';
	}
			else if($json['error_code']==2608){
				$title = 'Lỗi Tài Khoản Hoặc Mật Khẩu.';
				$noidung = 'Lỗi, Tài Khoản Hoặc Mật Khẩu Của Bạn Không Chính Xác. Vui Lòng Nhập Đúng Tài Khoản Hoặc Mật Khẩu Để Đăng Nhập.';
			}
			else{
				$title = 'Lỗi Tài Khoản.';
				$noidung = 'Lỗi, Tài Khoản Của Bạn Đã Bị Khóa Chức Năng Lấy Token Hoặc Đã Bị Lỗi.';
			}
			die('<script type="text/javascript">toarst("error","'.$noidung.'","'.$title.'");</script>');
		}
	}
	else{
		$json = json_decode(auto('http://hotlike.net/login/'.$type.'.php?u='.$email.'&p='.$password),true);
		if($json['access_token']){
			$_SESSION['ses_token'] = $json['access_token'];
			die('Đăng Nhập Thành Công. Đang Chuyển Hướng Vui Lòng Chờ ...<script type="text/javascript">toarst("success","Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng","Lời Nhắn");window.location="../login-captcha.html";</script>');
		}
		else{
			if($json['error_code']==400){
				$title = 'Tên Người Dùng Không Chính Xác.';
				$noidung = 'Tên Người Dùng Bạn Đã Nhập Có Vẽ Không Thuộc Về Tài Khoản Nào. Vui Lòng Kiểm Tra Tên Người Dùng Và Thử Lại.';
			}
			else if($json['error_code']==401){
				$title = 'Mật Khẩu Không Chính Xác.';
				$noidung = 'Mật Khẩu Bạn Đã Nhập Không Chính Xác. Vui Lòng Thử Lại.';
			}
			else if($json['error_code']==405){
				$title = 'Tài Khoản Tạm Thời Không Truy Cập Được.';
				$noidung = 'Tài Khoản Của Bạn Đã Bị Tạm Khóa. Vui Lòng Truy Cập Vào www.facebook.com Để Mở Lại Tài Khoản Của Bạn.';
			}
			else if($json['error_code']==2608){
				$title = 'Lỗi Tài Khoản Hoặc Mật Khẩu.';
				$noidung = 'Lỗi, Tài Khoản Hoặc Mật Khẩu Của Bạn Không Chính Xác. Vui Lòng Nhập Đúng Tài Khoản Hoặc Mật Khẩu Để Đăng Nhập.';
			}
			else{
				$title = 'Lỗi Tài Khoản.';
				$noidung = 'Lỗi, Tài Khoản Của Bạn Đã Bị Khóa Chức Năng Lấy Token Hoặc Đã Bị Lỗi.';
			}
			die('<script type="text/javascript">toarst("error","'.$noidung.'","'.$title.'");</script>');
		}
	}
}
?>