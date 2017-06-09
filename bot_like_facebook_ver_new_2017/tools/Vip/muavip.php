<div class="col-md-12">
	<div class="box box-success text-left">
		<div class="box-title box-header with-border"><h4><i class="fa fa-heart"></i> VIP Tương Tác</h4></div>
		<div class="box-body">
			+ Hệ thống Tự Động Nhận Dạng ID Người Dùng, Tự Động Tăng Like Trong Vòng 1-30P, Bạn Chỉ Việt Đăng Nội Dung Mới.<br>
			+ Hệ Thống Tự Động Một Cách Hoàn Toàn Giúp Bạn Yên Tâm Trong Việc Tương Tác Bạn Bè.<br> 
			+ Khi Bạn Trở Thành V.I.P, Bạn Sẽ Không Phải LIKE, SUB, COMMENT, SHARE Cho Bất Cứ Ai.<br>
			+ Thông Tin Của Bạn Sẽ Được An Toàn, Sẽ Không Bị Xoá Tài Khoản Như Nếu Không Hoạt Động Như Các Member Khác.<br>
			+ Bạn Sẽ Không Cần Cập Nhật Token Hằng Ngày Vì Chúng Tôi Chỉ Cần ID Của Bạn.<br>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="box box-info">
		<div class="box-title box-header with-border"><h4><i class="fa fa-heartbeat"></i> Panel Chính</h4></div>
		<div class="box-body">
			<div class="form-group has-success">
				<label class="control-label">Tên Người Dùng</label>
				<input type="text" class="form-control" value="<? echo $_SESSION[ten]; ?>" id="tenfb" name="tenfb" disabled>
			</div>
			<div class="form-group has-success">
				<label class="control-label">ID Facebook</label>
				<input type="text" class="form-control" value="<? echo $_SESSION[idfb]; ?>" id="idfb" name="idfb" disabled>
			</div>
			<div class="form-group has-success">
				<label class="control-label">Chọn Gói VIP</label>
				<select class="form-control m-b" onchange='muavip()' name='level' id='goi_vip' class='input'>
					<option value='0'>Chọn Gói</option>
					<option value='1'>VIP Member</option>
					<option value='2'>Medium Member</option>
					<option value='3'>Super Member</option>
					<option value='4'>Boss Member</option>
				</select>
			</div>
			<div class="form-group has-success">
				<label class="control-label">Ngày Sử Dụng</label>
				<select class="form-control m-b" onchange='muavip()' id='time' name='time' class='input'>
					<option value='3'>3 Ngày</option>
					<option value='7'>1 Tuần</option>
					<option value='30'>1 Tháng</option>
					<option value='60'>2 Tháng</option>
					<option value='90'>3 Tháng</option>
					<option value='365'>1 Năm</option>
				</select>
			</div>
			<button type="button" class="btn btn-block btn-primary" id="muavip" onclick="postVip();"><i class="fa fa-exchange"></i> Mua VIP</button>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="box box-info">
		<div class="box-title box-header with-border"><h4><i class="fa fa-info"></i> Panel Thông Tin Vip</h4></div>
		<div class="box-body">
			<table class="table">
				<div class="alert alert-info" id="star" style="display: none;">
					<div id="message"></div>
				</div>
				<tbody>
					<tr>
						<td>Tài Khoản</td>
						<td><b><? echo number_format($vnd).' VNĐ'; ?></b></td>
					</tr>
					<tr>
						<td>Số Tiền Cần</td>
						<td><b id="tien">0</b> VNĐ</td>
					</tr>
					<tr>
						<td>Còn Lại</td>
						<td><b id="sodu"><? echo number_format($vnd); ?></b> VNĐ</td>
					</tr>
				</tbody>
			</table>
			<div class="col-md-12">
			<ul>
				<li>
					<h3>Thông Tin Gói V.I.P</h3>
				</li>
				<li>
				<ul>
					<li> Tên Gói VIP: <b id="tenvip"></b></li>
					<li> Số Like: <b id="luonglike"></b> Like</li>
					<li> Thời Hạn: <b id="luongngay"></b> Ngày</li>
					<li> Bạn Sẽ Không Phải Làm Điều Gì Với Bất Cứ Ai.(Like Chéo, Sub Chéo...)</li>
					<li><p class="text-danger" style="font-size: 14px;"> KHÔNG NÊN ĐĂNG QUÁ NHIỀU BÀI VIẾT TRONG 1 NGÀY. TRÁNH VIỆC BỊ BLOCK KHỎI HỆ THỐNG</p></li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>