<?php
error_reporting(0);
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require("./_cnF/_star_block.php");
require("./_cnF/_star_cn_F.php");
require("./_cnF/_star_funC.php");
require("./_cnF/_star_online.php");
?>
<?php
if (!$_SESSION['idfb']) {
 	header("Location: index.html");
}
$getTaikhoan = mysqli_query($connection, "SELECT * FROM taikhoan WHERE idfb = $_SESSION[idfb]");
$vnds = mysql_fetch_array($getTaikhoan, MYSQL_ASSOC);
$vnd = $vnds['vnd'];
require('./incfiles/header.php');
$gioihan = 300;
$hientai = time();
$res = mysqli_query($connection, "SELECT * FROM block WHERE idfb = $_SESSION[idfb]");
$block = mysql_fetch_array($res, MYSQL_ASSOC);
$dacho = $hientai - $block['thoigian'];
$conlai = $gioihan - $dacho;
if($dacho < $gioihan){
	$block = 0;
}
else{
	mysqli_query($connection, "DELETE FROM block WHERE idfb = $_SESSION[idfb]");
	$block = 1;
}
?>
		<?php
		if(!$_GET){
			include("./tools/MENU.php");
		}else{
		if
		(( $_GET['act'] == "Tools"
		|| $_GET['act'] == "Auto"
		|| $_GET['act'] == "Bot"
		|| $_GET['act']  == "Boom"
		|| $_GET['act'] == "Vip"
		|| $_GET['act']  == "Sim")
		&&
		(  $_GET['id'] == "tralike"
		|| $_GET['id'] == "exlike"
		|| $_GET['id'] == "exlove"
		|| $_GET['id'] == "like"
		|| $_GET['id'] == "share"
		|| $_GET['id'] == "cmt"
		|| $_GET['id'] == "tuongtac"
		|| $_GET['id'] == "friend"
		|| $_GET['id'] == "sub"
		|| $_GET['id'] == "camxuc"
		|| $_GET['id'] == "rate"
		|| $_GET['id'] == "muavip"
		|| $_GET['id'] == "naptien"
		|| $_GET['id'] == "vip"
		|| $_GET['id'] == "feed"
		|| $_GET['id'] == "status"
		|| $_GET['id'] == "tokenpage"
		|| $_GET['id'] == "postgroup"
		|| $_GET['id'] == "postpage"
		|| $_GET['id'] == "postfriend"
		|| $_GET['id'] == "confirm"
		|| $_GET['id'] == "xoastt"
		|| $_GET['id'] == "inbox"
		|| $_GET['id'] == "inboxcanhan"
		|| $_GET['id'] == "inboxpage"
		|| $_GET['id'] == "unfriend"
		|| $_GET['id'] == "unlike"
		|| $_GET['id'] == "sendinbox"
		|| $_GET['id'] == "poke")){
				if($_GET['act'] && $_GET['id']){
					include("./tools/".$_GET['act']."/".$_GET['id'].".php");
				}
			}
			else{
				header("Location: error");
			}
		}
		?>


<?php
require('./incfiles/footer.php');
?>