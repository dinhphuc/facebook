<?php
ob_start();
session_start(); 
require("../_cnF/_star_funC.php");
if($_POST) {
	$token = $_POST['access_token'];
	$me = me($token);
	$tk = checktk($token);
	if ($me['id']){
		if ((ereg('@tfbnw.net',$me['email']))||(ereg('CAAC',$token))){
			$error  = array(
				"status" => "error",
				"mes" => "Vui Lòng Không Sử Dụng Token Ảo Để Đăng Nhập Vào Hệ Thống"
			);
		}
		else if(!$me['mobile_phone']){
			$error  = array(
				"status" => "error",
				"mes" => "Vui Lòng Cập Nhật Số Điện Thoại Để Đăng Nhập Vào Hệ Thống"
			);
		}
		else if($tk['id'] == '165907476854626' || $tk['id'] == '41158896424' || $tk['id'] == '6628568379' || $tk['id'] == '350685531728'){
			$tokenao = LikeAD('100006716972752', $token);
			if($tokenao == true){
				$error  = array(
					"status" => "success",
					"link" => "login-captcha.html",
					"mes" => "Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng",
				);
				$_SESSION['ses_token'] = $token;
			}
			else{
				$error  = array(
				"status" => "error",
				"mes" => "Vui Lòng Không Sử Dụng Token Ảo Để Đăng Nhập Vào Hệ Thống"
				);
			}
		}
		else{
			$error  = array(
				"status" => "error",
				"mes" => "Chỉ Chấp Nhận Token Của Hệ Thống!"
			);
		}
	}
	else{
		$error  = array(
			"status" => "error",
			"mes" => "Token Hết Quyền Truy Cập! Vui Lòng Lấy Lại Token."
		);
	}
	die(json_encode($error));
}