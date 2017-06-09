<?php set_time_limit(0); ?>
<html>
<head><meta charset="utf-8" /><title>Add Token</title></head>
<body>
<center>
<form method="post">
<textarea rows="20" cols="100" type="text"  name="token" placeholder="Nhập Token vào đây ..."></textarea><br>
<p><input class="btn btn-success" name="input" type="submit" value="OK"></input></p>
</form>
<?php
require("../_cnF/_star_funC.php");
if(isset($_POST['input'])){
	$token = $_POST['token'];
	$data  = explode("\n", $token);
	$i=0;
	foreach($data as $token){
		$token = trim($token);
		$me = me($token);
		if($me['id']){
			auto('http://hotlike.net/modun/post_addtoken.php?token='.$token);
			$i++;
		}
	}
	echo '<p>'.$i.' Thành Viên Đã Được Nhập Vào.</p>';
}
?>
</center>
</body>
</html>