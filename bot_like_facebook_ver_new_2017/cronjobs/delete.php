<?php
set_time_limit(0);
require("../_cnF/_star_cn_F.php");
require("../_cnF/_star_funC.php");
$tab = array('tokeniphone','tokenandroid','tokenios','tokenhtc','tokenvip',);
$i = 0;
$ao = 0;
foreach($tab as $tabl => $table){
	$result = mysqli_query($connection, "SELECT * FROM ".$table);
	if($result){
		while($row = mysql_fetch_array($result)){
			$token = $row['token'];
			$me = me($token);
			if(!$me['id']){
				$i++;
				mysqli_query($connection, "DELETE FROM ".$table." WHERE token = '".mysql_real_escape_string($token)."'");
			}
			else if(ereg('@tfbnw.net',$me['email'])||ereg('CAAC',$token)){
				$i++;
				$ao++;
				mysqli_query($connection, "DELETE FROM ".$table." WHERE token = '".mysql_real_escape_string($token)."'");
			}
		}
	}
}
echo'Số Token Die Đã Xoá Của Tất Cả Các Table Là: '.$i.'<br>';
echo'Số Token Ảo Xuất Hiện Trên Hệ Thống Là: '.$ao.'<br>';
foreach($tab as $tabl => $table){
	$result = mysqli_query($connection, "SELECT * FROM ".$table);
	if($result){
		echo 'Số Token Live Còn Lại Của Table '.$table.' Là: '.mysql_result(mysqli_query($connection, "SELECT COUNT(*) FROM ".$table), 0).'<br>';
	}
}
?>