<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION[idfb]) 
{	
	require("../_cnF/_star_cn_F.php");
	require("../_cnF/_star_funC.php");
	$yeucau = isset($_POST['yeucau']) ? baove($_POST['yeucau']) : FALSE;
	$idfb = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
	$token = isset($_POST['token']) ? baove($_POST['token']) : FALSE;
	$server = $_POST['_SERVER'];
	if ($server != $_SESSION['_SERVER']) die("Đã Xảy Ra Lỗi");
	if (!$yeucau) 
	{
		die('ERROR: Không Tìm Thấy Yêu Cầu.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
	}
	$loai = $_POST['auto'];
	if ($loai == "botcamxuc"){
		$tk = checktk($token);
		if($tk['id'] !== '6628568379'){
                echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
		die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
                }
	        $camxuc =  isset($_POST['camxuc']) ? baove($_POST['camxuc']) : FALSE;
	 	$likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK"){
			$res = @mysqli_query($connection, "SELECT * FROM botcamxuc WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "INSERT INTO botcamxuc SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`camxuc` = '".$camxuc."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "UP") {
			$res = @mysqli_query($connection, "SELECT * FROM botcamxuc WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "UPDATE botcamxuc
				         SET
				            `token` = '".$token."',
				            `camxuc` = '".$camxuc."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "HUY") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM botcamxuc WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "DELETE FROM botcamxuc
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		else
		{
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botlike") 
	{	$likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK"){
			$res = @mysqli_query($connection, "SELECT * FROM botlike WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "INSERT INTO botlike SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "UP") {
			$res = @mysqli_query($connection, "SELECT * FROM botlike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "UPDATE botlike
				         SET
				            `token` = '".$token."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "HUY") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM botlike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "DELETE FROM botlike
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		else
		{
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botexlike") 
	{	$likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK"){
			$res = @mysqli_query($connection, "SELECT * FROM botex WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "INSERT INTO botex SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "UP") {
			$res = @mysqli_query($connection, "SELECT * FROM botex WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script><meta http-equiv="refresh" content="3">');
			}
			@mysqli_query($connection, "UPDATE botex
				         SET
				            `token` = '".$token."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "HUY") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM botex WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "DELETE FROM botex WHERE idfb = '".$idfb."'");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}else{
			die('ERROR: Sai Cú Pháp. Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botexlove"){
		$tk = checktk($token);
		if($tk['id'] !== '6628568379'){
                echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
		die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
                }
             $likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK"){
			$res = @mysqli_query($connection, "SELECT * FROM botexlove WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "INSERT INTO botexlove SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "UP") {
			$res = @mysqli_query($connection, "SELECT * FROM botexlove WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "UPDATE botexlove
				         SET
				            `token` = '".$token."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "HUY") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM botexlove WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "DELETE FROM botexlove
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}else{
			die('ERROR: Sai Cú Pháp. Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botcmt"){	
		$bieutuong =  isset($_POST['bieutuong']) ? baove($_POST['bieutuong']) : FALSE;
		$quangcao =  isset($_POST['quangcao']) ? baove($_POST['quangcao']) : FALSE;
		if($yeucau == "OK")
		{
			$res = @mysqli_query($connection, "SELECT * FROM botcmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "INSERT INTO botcmt SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`bieutuong` = '".$bieutuong."',
				`quangcao` = '".$quangcao."',  
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		elseif ($yeucau == "UP") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM botcmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "UPDATE botcmt SET `token` = '".$token."', `quangcao` = '".$quangcao."', `bieutuong` = '".$bieutuong."' WHERE `idfb` = ".$idfb."");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		elseif ($yeucau == "HUY") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM botcmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "DELETE FROM botcmt
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		else
		{
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "bottuongtac"){	
		if($yeucau == "OK")
		{
			$res = @mysqli_query($connection, "SELECT * FROM bottuongtac WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "INSERT INTO bottuongtac SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."',  
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		elseif ($yeucau == "UP") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM bottuongtac WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "UPDATE bottuongtac SET `token` = '".$token."' WHERE `idfb` = ".$idfb);
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		elseif ($yeucau == "HUY") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM bottuongtac WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "DELETE FROM bottuongtac
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		else
		{
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
		}
	}
	elseif ($loai == "bottralike") 
	{
		if($yeucau == "OK"){
			$res = @mysqli_query($connection, "SELECT * FROM bottralike WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "INSERT INTO bottralike SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "UP") {
			$res = @mysqli_query($connection, "SELECT * FROM bottralike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "UPDATE bottralike
			         SET
			            `token` = '".$token."'
			         WHERE
			            `idfb` = ".$idfb."
			      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}elseif ($yeucau == "HUY") 
		{
			$res = @mysqli_query($connection, "SELECT * FROM bottralike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Chọn ON Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt BOT.","Thông Báo Lỗi")</script>');
			}
			@mysqli_query($connection, "DELETE FROM bottralike
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script><meta http-equiv="refresh" content="3">');
		}
		else
		{
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Chọn ON Để Bật Bot, UP Để Cập Nhật Bot, OFF Để Xoá Bot.","Thông Báo Lỗi")</script>');
		}
	}
		
}