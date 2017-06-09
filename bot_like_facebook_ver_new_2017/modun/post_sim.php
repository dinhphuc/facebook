<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION['idfb']) 
{	
	require("../_cnF/_star_cn_F.php");
	require("../_cnF/_star_funC.php");
	$yeucau = isset($_POST['yeucau']) ? baove($_POST['yeucau']) : FALSE;
	$idfb = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
	$token = isset($_POST['token']) ? baove($_POST['token']) : FALSE;
	$server = $_POST['_SERVER'];
	$check = me($token);
	$loai = $_POST['auto'];
	if ($server != $_SESSION['_SERVER']) die("Đã Xảy Ra Lỗi");
	if (!$yeucau){
		die('ERROR: Không Tìm Thấy Yêu Cầu.<script type="text/javascript">toarst("error","Chọn ON Để Bật Sim, UP Để Cập Nhật Sim, OFF Để Xoá Sim.","Thông Báo Lỗi")</script>');
	}
   if ($loai == "siminboxpage"){
      $tk = checktk($token);
	  if($yeucau == "OK"){
	     $res = @mysqli_query($connection, "SELECT * FROM siminboxpage WHERE idfb = $idfb");
	     if (mysql_num_rows($res) > 0) {
		  die('ERROR: Bạn Đang Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa Sim.","Thông Báo Lỗi")</script>');
	     }
		 else if (!$check['id']){
		  die('ERROR: Vui Lòng Nhập Lại Token Để Tiếp Tục.<script type="text/javascript">toarst("error","Token Đã Chết, Vui Lòng Nhập Lại Token Mới.","Thông Báo Lỗi")</script>');
		 }
		 else{
		 if($tk['id'] !== '6628568379'){
		  echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
		  die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
		 }
		 else{
	     @mysqli_query($connection, "INSERT INTO siminboxpage SET `idfb` = '".$idfb."', `token` = '".$token."', `ten` = '".$_SESSION[ten]."'");
		die('SUCCESS: Cài Đặt Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		 }
		 }
		}elseif ($yeucau == "UP") {
	     $res = @mysqli_query($connection, "SELECT * FROM siminboxpage WHERE idfb = $idfb");
	     if (mysql_num_rows($res) <= 0) {
		die('ERROR: Bạn Không Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt Sim<script type="text/javascript">toarst("error","Bạn Không Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  Sim.","Thông Báo Lỗi")</script>');
	     }
		 else if (!$check['id']){
		  die('ERROR: Vui Lòng Nhập Lại Token Để Tiếp Tục.<script type="text/javascript">toarst("error","Token Đã Chết, Vui Lòng Nhập Lại Token Mới.","Thông Báo Lỗi")</script>');
		 }
		 else{
		 if($tk['id'] !== '6628568379'){
		  echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
		  die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
		 }
		 else{
	     @mysqli_query($connection, "UPDATE siminboxpage SET `token` = '".$token."' WHERE `idfb` = ".$idfb." ");
		die('SUCCESS: Cập Nhật Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		 }
		 }
	  }elseif ($yeucau == "HUY") {
	     $res = @mysqli_query($connection, "SELECT * FROM siminboxpage WHERE idfb = $idfb");
	     if (mysql_num_rows($res) <= 0) {
		die('ERROR: Bạn Không Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt Sim<script type="text/javascript">toarst("error","Bạn Không Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  Sim.","Thông Báo Lỗi")</script>');
	     }
	     @mysqli_query($connection, "DELETE FROM siminboxpage WHERE idfb = '".$idfb."' ");
		die('SUCCESS: Xóa Sim Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	     }else{
		die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Sim, UP Để Cập Nhật Sim, OFF Để Xoá Sim.","Thông Báo Lỗi")</script>');
	  }
   }else
   if ($loai == "siminboxcanhan"){
      $tk = checktk($token);
	  if($tk['id'] !== '6628568379'){
              echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
	      die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
	  }
	  if($yeucau == "OK"){
		  
	     $res = @mysqli_query($connection, "SELECT * FROM siminboxcanhan WHERE idfb = $idfb");
	     if (mysql_num_rows($res) > 0) {
		die('ERROR: Bạn Đang Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa Sim.","Thông Báo Lỗi")</script>');
	     }
	     @mysqli_query($connection, "INSERT INTO siminboxcanhan SET `idfb` = '".$idfb."', `token` = '".$token."', `ten` = '".$_SESSION[ten]."'");
		die('SUCCESS: Cài Đặt Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	  }elseif ($yeucau == "UP") {
	     $res = @mysqli_query($connection, "SELECT * FROM siminboxcanhan WHERE idfb = $idfb");
	     if (mysql_num_rows($res) <= 0) {
		die('ERROR: Bạn Không Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt Sim<script type="text/javascript">toarst("error","Bạn Không Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  Sim.","Thông Báo Lỗi")</script>');
	     }
	     @mysqli_query($connection, "UPDATE siminboxcanhan SET `token` = '".$token."' WHERE `idfb` = ".$idfb." ");
		die('SUCCESS: Cập Nhật Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	  }elseif ($yeucau == "HUY") {
	     $res = @mysqli_query($connection, "SELECT * FROM siminboxcanhan WHERE idfb = $idfb");
	     if (mysql_num_rows($res) <= 0) {
		die('ERROR: Bạn Không Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt Sim<script type="text/javascript">toarst("error","Bạn Không Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  Sim.","Thông Báo Lỗi")</script>');
	     }
	     @mysqli_query($connection, "DELETE FROM siminboxcanhan WHERE idfb = '".$idfb."' ");
		die('SUCCESS: Xóa Sim Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	     }else{
		die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Sim, UP Để Cập Nhật Sim, OFF Để Xoá Sim.","Thông Báo Lỗi")</script>');
	  }
   }elseif ($loai == "simfeed"){
	  if($yeucau == "OK"){
		$res = @mysqli_query($connection, "SELECT * FROM simcmtfeed WHERE idfb = $idfb");
		if (mysql_num_rows($res) > 0) {
		   die('ERROR: Bạn Đang Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa Sim.","Thông Báo Lỗi")</script>');
		}
		@mysqli_query($connection, "INSERT INTO simcmtfeed SET `idfb` = '".$idfb."', `token` = '".$token."', `ten` = '".$_SESSION[ten]."'");
		   die('SUCCESS: Cài Đặt Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	  }elseif ($yeucau == "UP") {
		$res = @mysqli_query($connection, "SELECT * FROM simcmtfeed WHERE idfb = $idfb");
		if (mysql_num_rows($res) <= 0) {
		   die('ERROR: Bạn Không Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt Sim<script type="text/javascript">toarst("error","Bạn Không Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  Sim.","Thông Báo Lỗi")</script>');
		}
		@mysqli_query($connection, "UPDATE simcmtfeed SET `token` = '".$token."' WHERE `idfb` = ".$idfb." ");
		   die('SUCCESS: Cập Nhật Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	  }elseif ($yeucau == "HUY") {
		$res = @mysqli_query($connection, "SELECT * FROM simcmtfeed WHERE idfb = $idfb");
		if (mysql_num_rows($res) <= 0) {
		   die('ERROR: Bạn Không Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt Sim<script type="text/javascript">toarst("error","Bạn Không Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  Sim.","Thông Báo Lỗi")</script>');
		}
		@mysqli_query($connection, "DELETE FROM simcmtfeed WHERE idfb = '".$idfb."' ");
		   die('SUCCESS: Xóa Sim Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	  }else{
	     die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Sim, UP Để Cập Nhật Sim, OFF Để Xoá Sim.","Thông Báo Lỗi")</script>');
	  }
   }elseif ($loai == "simstatus"){	
	  if($yeucau == "OK"){
		$res = @mysqli_query($connection, "SELECT * FROM simcmt WHERE idfb = $idfb");
		if (mysql_num_rows($res) > 0) {
		   die('ERROR: Bạn Đang Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa Sim.","Thông Báo Lỗi")</script>');
		}
		else if (!$check['id']){
		  die('ERROR: Vui Lòng Nhập Lại Token Để Tiếp Tục.<script type="text/javascript">toarst("error","Token Đã Chết, Vui Lòng Nhập Lại Token Mới.","Thông Báo Lỗi")</script>');
		}
		else{
		   @mysqli_query($connection, "INSERT INTO simcmt SET `idfb` = '".$idfb."', `token` = '".$token."', `ten` = '".$_SESSION[ten]."'");
		   die('SUCCESS: Cài Đặt Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	    }
	  } elseif ($yeucau == "UP")  {
		if (!$check['id']){
		  die('ERROR: Vui Lòng Nhập Lại Token Để Tiếp Tục.<script type="text/javascript">toarst("error","Token Đã Chết, Vui Lòng Nhập Lại Token Mới.","Thông Báo Lỗi")</script>');
		}
		else{
		   @mysqli_query($connection, "UPDATE simcmt SET `token` = '".$token."' WHERE `idfb` = ".$idfb." ");
		   die('SUCCESS: Cập Nhật Sim Thành Công. Sim Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật Sim Thường Xuyên Để Sim Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật Sim Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
	    }
	  }elseif ($yeucau == "HUY"){
		$res = @mysqli_query($connection, "SELECT * FROM simcmt WHERE idfb = $idfb");
		if (mysql_num_rows($res) <= 0) {
		   die('ERROR: Bạn Không Sử Dụng Sim Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt Sim<script type="text/javascript">toarst("error","Bạn Không Sử Dụng Sim Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  Sim.","Thông Báo Lỗi")</script>');
		}
		@mysqli_query($connection, "DELETE FROM simcmt WHERE idfb = '".$idfb."' ");
		   die('SUCCESS: Xóa Sim Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}else{ 
		   die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Sim, UP Để Cập Nhật Sim, OFF Để Xoá Sim.","Thông Báo Lỗi")</script>');
		}
	  }
}