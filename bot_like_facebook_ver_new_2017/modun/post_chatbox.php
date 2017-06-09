<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require("../_cnF/_star_cn_F.php");
$file = '../modun_txt/log.log';
$fileblock = '../modun_txt/block.log';

if(isset($_POST['mess'])){
	if(!isset($_SESSION['ten'])){
		echo"<script>window.location.href = '".$text['link']."';</script>";
	}
	else{
		$username = $_SESSION['ten'];
		$userid = $_SESSION['idfb'];
		$post = $_POST['mess'];
		$message = addslashes($_POST['mess']);
		$message = htmlentities($message);
		$user_ip = $_SERVER['REMOTE_ADDR'];
		$time = date('H:i:s d-m-Y');
		$keynoibay = array(
		'dm','đm','đéo','Dm','Đm','dcm','đcm','vl','fuck',
		'djt','địt','lồn','loz','clm','cac','vc','cc','cặc',
		'djt','dit','đụ','cai lon','con cu','lol'
		);
		foreach($keynoibay as $keynb => $noibay){
			if(ereg($noibay,strtolower($post))){
				$bikhoanb = true;
			}
		}
		$keyquangcao = array(
		'http','//','goo.gl','.asia','.com','.tk',
		'.net','.xyz','www.','.info','.org','.ga',
		'.top','.vn','.pro','.online','.club'
		);
		foreach($keyquangcao as $keyqc => $quangcao){
			if(ereg($quangcao,strtolower($post))){
				$bikhoaqc = true;
			}
		}
		$keyhack = array(
		'/>','</','script','hack'
		);
		foreach($keyhack as $keyh => $hack){
			if(ereg($hack,strtolower($post))){
				$bikhoahack = true;
			}
		}
		if($bikhoanb){
			$noidungblock = 'Tài Khoản: '.$username.' || Id: '.$userid.' || Nói Bậy Với Nội Dung: '.$_POST['mess'].' || Vào Lúc: '.$time;
			$opfile = @fopen($file,"a");
			@fwrite($opfile,$noidungblock);
			@fwrite($opfile,"\n");
			@fclose($opfile);
			echo'<script type="text/javascript">toarst("success","Đừng Nói Bậy Bạn Ơi.<br>Không Chịu Được Xin Mời Đi Chỗ Khác Chơi.","Lời Nhắn")</script>';
		}
		else if($bikhoaqc){
			$noidungblock = 'Tài Khoản: '.$username.' || Id: '.$userid.' || Quảng Cáo Với Nội Dung: '.$_POST['mess'].' || Vào Lúc: '.$time;
			$opfile = @fopen($file,"a");
			@fwrite($opfile,$noidungblock);
			@fwrite($opfile,"\n");
			@fclose($opfile);
			echo'<script type="text/javascript">toarst("success","Đừng Quảng Cáo Bạn Ơi.<br>Không Chịu Được Xin Mời Đi Chỗ Khác Chơi.","Lời Nhắn")</script>';
		}
		else if($bikhoahack){
			$opfile = @fopen($fileblock,"a");
			@fwrite($opfile,$userid);
			@fwrite($opfile,"\n");
			@fclose($opfile);
			mysqli_query($connection, 'INSERT INTO shoutbox(user,user_id,message,ip_address,date_time) VALUES("'.$username.'","'.$userid.'","Thành Viên '.$username.' Vừa Định Tấn Công Hệ Thống Và Đã Bị Khoá. Vui Lòng Không Thực Hiện Theo Thành Viên Này!","'.$user_ip.'","'.$time.'")');
			echo'<script type="text/javascript">toarst("success","Thành Công.","Lời Nhắn")</script>';
			echo'<meta http-equiv="refresh" content="5;URL='.$text['link'].'" />';
		}
		else if(($_SESSION['idfb']=='100006716972752')&&(ereg('/xoa',strtolower($post)))){
			mysqli_query($connection, 'DELETE FROM shoutbox');
			mysqli_query($connection, 'INSERT INTO shoutbox(user,user_id,message,ip_address,date_time) VALUES("'.$username.'","'.$userid.'","Trung Hậu vừa xóa chatbox.","'.$user_ip.'","'.$time.'")');
			echo'<script type="text/javascript">toarst("success","Xoá Chat Box Thành Công.","Lời Nhắn")</script>';
		}
		else{
			mysqli_query($connection, 'INSERT INTO shoutbox(user,user_id,message,ip_address,date_time) VALUES("'.$username.'","'.$userid.'","'.$message.'","'.$user_ip.'","'.$time.'")');
			echo'<script type="text/javascript">toarst("success","Thành Công.","Lời Nhắn")</script>';
		}
	}
}

$req = mysqli_query($connection, "SELECT * FROM `shoutbox` ORDER BY `id` DESC LIMIT 30");
while($res = mysql_fetch_assoc($req)) {
	$res['user'] = str_replace('Trung Hậu','<font style="color:red;text-shadow: 0px 0px 0px rgb(17, 17, 17), 0px 0px 0.5em yellow, 0px 0px 0.4em yellow; font-weight:bold;">Trung Hậu <i class="fa fa-check-square" aria-hidden="true" tille="Đã Xác Minh"></i></font>', $res['user']);
	$data = @file('../modun_txt/camxuc.log');
	$i=0;
	foreach($data as $value){
		$i++;
		$ex = explode(' => ',$value);
		$kytu = str_replace('"','\\"',$ex[0]);
		$urlbt = trim($ex[1]);
		$res['message'] = str_replace($kytu,'<img src="'.$urlbt.'" alt="Biểu Tượng Cảm Xúc" height="20" width="20">', $res['message']); 
	}
	echo'<div class="shout_msg">
	<img class="direct-chat-img" src="https://graph.facebook.com/'.$res[user_id].'/picture" alt="Message User Image">
	<a href="https://www.facebook.com/profile.php?id='.$res[user_id].'" target="_blank" class="username">
	<i class="fa fa-fw fa-user"></i> '.$res[user].'</a>
	<i class="fa fa-fw fa-star"></i><b> '.$res[message].'</b>
	<time>'.$res[date_time].'</time></div>';
}
?>