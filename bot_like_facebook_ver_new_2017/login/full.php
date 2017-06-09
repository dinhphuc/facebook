<?php
$email = $_POST['email'];
$password = $_POST['password'];
$app_id = $_POST['app_id'];
if($app_id == 350685531728){$type = 'android';}
else if($app_id == 6628568379){$type = 'iphone';}
else if($app_id == 41158896424){$type = 'htc';}
else if($app_id == 165907476854626){$type = 'ios';}

if($type == 'android'||$type == 'iphone'){
$json = json_decode(auto('http://hotlike.net/login/ios.php?u='.$email.'&p='.$password),true);
if($json['access_token']){
$json = json_decode(auto('http://hotlike.net/login/'.$type.'.php?u='.$email.'&p='.$password),true);
if($json['access_token']){
echo $json['access_token'];
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
echo $title,' ',$noidung;
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
echo $title,' ',$noidung;
}
}
else{
$json = json_decode(auto('http://hotlike.net/login/'.$type.'.php?u='.$email.'&p='.$password),true);
if($json['access_token']){
echo $json['access_token'];
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
echo $title,' ',$noidung;
}
}
function auto($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
      )
   );
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}
?>