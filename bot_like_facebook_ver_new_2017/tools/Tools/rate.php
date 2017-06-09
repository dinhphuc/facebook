<div class="col-md-12">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-star"></i> Auto Đánh Giá FanPage - Tăng Lượt Đánh Giá FanPage Tự Động</h4>
			
		</div>
		<div class="box-body">
			<h4><strong><p class="text-danger"> Hệ Thống Tăng Lượt Đánh Giá FanPage Facebook Theo ID Bất Kỳ</p></strong></h4>
			<hr>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
					<input name="id" type="text" id="id" class="form-control" value="" placeholder="Nhập ID FanPage..."><span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
				<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
			</div><br />
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-star"></i>
				</span>
                                      <select id="rate" class="form-control">	
                                              <option value="1">1 Sao</option> 
                                              <option value="2">2 Sao</option> 									
                                              <option value="3">3 Sao</option>
                                              <option value="4">4 Sao</option>
                                              <option value="5" selected>5 Sao</option>
                                       </select> 
				<span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>                               
			</div><br />
			<div class="form-group">
				<label for="name">Chọn Số Lượng Đánh Giá - Kéo Thanh Trượt Để Điều Chỉnh</label>
				<center>
					<div id="soluong" class="label label-info" align="center">30</div>
				</center>
				<input class="form-control" type="range" name="soluong" min="1" max="30" id="limit" value="30" onchange="document.getElementById('soluong').innerHTML=this.value;">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-block" id="danhgia" onclick="post_Danhgia();">
					<i class="fa fa-exchange"></i> Auto Đánh Giá
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