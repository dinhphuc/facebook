<div class="col-md-5">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-comments"></i> Auto Comment - Tăng Lượt Bình Luận Tự Động</h4>
			
		</div>
		<div class="box-body">
			<h4><strong><p class="text-danger"> Hệ Thống Tăng Lượt Bình Luận Facebook Theo ID Bất Kỳ</p></strong></h4>
			<font style="color:#23c6c8;">Bước 1:</font> Sử Dụng Mục Bên " Trạng Thái - Gần Đây" Để Copy ID Status, Ảnh, Video Của Bạn. Có Thể Sử Dụng ID Người Khác Để Tăng Comment. <br />
			<font style="color:#23c6c8;">Bước 2:</font> Nhập ID Vào Khung Bên Dưới Sau Đó Thực Hiện Auto Comment. <br />
			<font style="color:#ed5565;">Lưu Ý: Với Những Bạn Không Lấy Được ID Hoặc Việc Lấy ID Gặp Khó Khăn Thì Bạn Có Thể Nhập Luôn Link Status, Ảnh, Video... Vào Khung Bên Dưới. </font>
			<hr>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
					<input name="id" type="text" id="id" class="form-control" placeholder="Nhập ID Hoặc Link Status, Ảnh, Video..."><span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
				<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
			</div><br />
			<div class="form-group">
				<label for="name">Nhập Nội Dung Comment  </label>
				<textarea id="param" class="form-control" rows="5" placeholder="Nhập mỗi dòng 1 comment nếu muốn auto comment nhiều nội dung khác nhau"></textarea>
			</div>
			<div class="form-group">
				<label for="name">Chọn Số Lượng Bình Luận - Kéo Thanh Trượt Để Điều Chỉnh</label>
				<center>
					<div id="soluong" class="label label-info" align="center">30</div>
				</center>
				<input class="form-control" type="range" name="soluong" min="1" max="30" id="limit" value="30" onchange="document.getElementById('soluong').innerHTML=this.value;">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-block" id="cmt" onclick="post_Cmt();">
					<i class="fa fa-exchange"></i> Auto Bình Luận
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
<div class="col-md-7">
	<div class="box box-info">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-credit-card"></i> Trạng Thái - Gần Đây </h4>
		</div>
		<div class="box-content">
			<div class="tabs-container">
				<ul class="nav nav-tabs tab-border-top-info">
					<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="false"> All Post</a></li>
					<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="true" onclick="loadstatus();"> Status</a></li>
					<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="true" onclick="loadphotos();">Photos</a></li>
					<li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="true" onclick="loadvideos();">Video</a></li>
					<li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="true" onclick="loadlinks();">Link</a></li>

				</ul>
				<div class="tab-content">
					<div id="tab-1" class="tab-pane active">
						<div class="panel-body">
							<div id="allposts"></div>
						</div>
					</div>
					<div id="tab-2" class="tab-pane active">
						<div class="panel-body">
							<div id="status"></div>
						</div>
					</div>
					
					<div id="tab-3" class="tab-pane active">
						<div class="panel-body">
							<div id="photos"></div>
						</div>
					</div>
					<div id="tab-4" class="tab-pane">
						<div class="panel-body">
							<div id="videos"></div>
						</div>
					</div>
					<div id="tab-5" class="tab-pane">
						<div class="panel-body">
							<div id="links"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>