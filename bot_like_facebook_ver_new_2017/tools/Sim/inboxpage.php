<?php  
$res = @mysqli_query($connection, "SELECT * FROM `siminboxpage` WHERE `idfb`= '".$_SESSION[idfb]."'");
if(@mysql_num_rows($res) > 0){
$key = 1;
}else{
$key = 0;
}
?>
<?
$token = mysql_fetch_array(mysqli_query($connection, "SELECT * FROM `siminboxpage` WHERE `idfb`= '".$_SESSION['idfb']."'"));
$udata = json_decode(auto('https://graph.facebook.com/me?access_token='.$token['token']),true);
?>
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-reddit" aria-hidden="true"></i> Bot Simsimi Inbox FanPage - Robot Trả Lời Simsimi</h4>
			
		</div>
		<div class="box-body">
			<div class="alert alert-info" style="font-size: 15px; background-color: rgba(157, 248, 89, 0.62); border-color: rgba(157, 248, 89, 0.62);">
                              		<?php echo ($key == 1) ? 'Chào Bạn<strong> '.$_SESSION[ten].'</strong>. Hiện Tại Bạn <strong style="color: red; font-size: 15px;"> Đã </strong> Cài Đặt Bot Trên Hệ Thống Cho FanPage <strong style="color: red; font-size: 15px;"> '.$udata['name'].'</strong>' : 'Chào Bạn <strong>'.$_SESSION['ten'].'</strong>. Hiện Tại Bạn <strong style="color: red; font-size: 15px;"> Chưa </strong> Cài Đặt Bot Trên Hệ Thống'; ?>
                           	</div>
                           	<div class="alert alert-success" style="background-color: rgba(245, 215, 66, 0.32); border-color: rgba(245, 215, 66, 0.32);">
				<strong>Hướng Dẫn Sử Dụng</strong><br />
				<b>Bước 1: </b> Nhập Mã Token Facebook For Iphone Cho FanPage Dùng Để Trả Lời Inbox Vào Ô "Điền Access Token FanPage"<br/>
				<b>Bước 2: </b> Điền OK Ở Ô Tiếp Theo. Sau Đó Nhấn Vào Thực Thi<br/>
				<b style="font-color:red;">Lưu Ý:</b> Token Facebook For Iphone  Bạn Phải Đăng Nhập Bằng Tài Khoản Facebook và Chọn App "Token For iPhone" Ở  <code><a href="/index.html" target="_blank"><font color=red> Đăng Nhập Hệ Thống</font></a></code><br /> Rồi Vào Lại Đây và Click vào <code><a href="/Tools-tokenpage.html" target="_blank"><font color=red> Vào Đây Để Lấy Token Page</font></a></code><br>
                                <b> Nhớ là đăng nhập Bằng account và chọn app là Facebook For Iphone và lấy đúng token page cần cài bot.</b>
			</div>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<hr> <center><h2><p class="text-danger"><strong>Thiết Lập BOT</strong></p></h2></center><hr>
			
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
				 <input type="text" class="form-control" id="token" name="token" style="color: red; font-size: 15px;" placeholder="Điền Access Token Iphone Của Page">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
			</div><br />
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
					<select id="yeucau" name="yeucau" style="color: black; font-size: 15px;" class="form-control">
					<?php if($key != 1){ ?>
						<option value="OK">ON - Bật Bot</option>
					<?php }else{ ?>
						<option value="UP">UP - Cập Nhật Bot</option>
						<option value="HUY">OFF - Tắt Bot</option>
					<?php } ?>
					</select>
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
			</div><br />
			<? $_SESSION['_SERVER'] = cap(30); ?>
			<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
			<input type="hidden" class="form-control" id="id" name="idfb" value="<?php echo $_SESSION['idfb']; ?>">
			<div class="form-group">
				<button class="btn btn-success btn-block" id="siminboxpage" onclick="post_SimInboxPage();">
					<i class="fa fa-exchange"></i> Thực Thi
				</button>
			</div>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>