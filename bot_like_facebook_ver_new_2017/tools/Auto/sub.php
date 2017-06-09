<div class="col-md-12">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-users"></i> Auto Follow - Tăng Lượt Theo Dõi Tự Động</h4>
			
		</div>
		<div class="box-body">
			<h4><strong><p class="text-danger"> Hệ Thống Tăng Lượt Theo Dõi Facebook Theo ID Bất Kỳ</p></strong></h4>
			<p class="text-danger"><strong>Lưu Ý:</strong> Có Thể Sử Dụng ID Người Khác Để Auto.  Mặc Định Hệ Thống Đã Chọn Là ID Của Bạn.</p>
			<hr>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
					<input name="id" type="text" id="id" class="form-control" value="<? echo $_SESSION[idfb];?>"><span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
				<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
			</div><br />
			<div class="form-group">
				<label for="name">Chọn Số Lượng Theo Dõi - Kéo Thanh Trượt Để Điều Chỉnh</label>
				<center>
					<div id="soluong" class="label label-info" align="center">30</div>
				</center>
				<input class="form-control" type="range" name="soluong" min="1" max="30" id="limit" value="30" onchange="document.getElementById('soluong').innerHTML=this.value;">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-block" id="sub" onclick="post_Sub();">
					<i class="fa fa-exchange"></i> Auto Theo Dõi
				</button>
			</div>
		</div>
		<div class="box-footer">
			<center>
			<section class="navigation" style="cursor: pointer;color: #f37e09;margin: 0px 4px 0 0;font-weight: bold;">
			<span id="countdown" class="timer" style="font-size: 14px"></span>
                            	</section>
                            	</center>
		</div>
	</div>
</div>