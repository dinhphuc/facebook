<?php
ob_start('ob_gzhandler');
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == 'admin' && $pass == '12345') {
$_SESSION['user'] = $user;
echo '<i class="fa fa-check"></i> Success!
 <script language="javascript">
window.location.href = "admin/index.php";
      </script>';
}else {
session_destroy();
echo 'Đăng Nhập
 <script language="javascript">
alert("Sai Rồi Kìa! Lêu Lêu :)");
      </script>';
}