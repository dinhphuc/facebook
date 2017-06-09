<div class="col-md-12" id="back">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-thumbs-up"></i> Nạp Tiền Bằng Thẻ Cào</h4>
			
		</div>
		<div class="box-body">
			<h4><strong><p class="text-danger"> Nạp Tiền Vào Tài Khoản</p></strong></h4>
			<font style="color:#ed5565;">Lưu Ý: Tiền Sẽ Được Cộng Vào Tài Khoản Đang Đăng Nhập Trên Website Của Chúng Tôi. </font><br /><br />
			<center><img src="./img/napthe.png" class="img-responsive"></center>
			<hr>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-drupal"></i>
				</span>
					<input name="id" type="text" disabled class="form-control" value="<? echo $_SESSION[ten];?>">
					<input type="hidden" name="id" id="name" class="form-control" value="<? echo $_SESSION[ten];?>">
			</div><br />
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-shield"></i>
				</span>
					<input name="id" type="text" disabled class="form-control" value="<? echo $_SESSION[idfb];?>">
					<input type="hidden" name="id" id="id" class="form-control" value="<? echo $_SESSION[idfb];?>">
			</div><br />
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-paypal"></i>
				</span>
				<select name="telcoCode" id="telcoCode" class="form-control m-b">
					<option value="0">Chọn loại thẻ</option>
					<option value="VIETEL">Thẻ Vietel</option>
					<option value="MOBI">Thẻ Mobifone</option>
					<option value="VINA">Thẻ Vinaphone</option>
					<option value="GATE">Thẻ Gate</option>
					<option value="VTC">Thẻ VTC</option> 
				</select>
			</div><br />
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-gavel"></i>
				</span>
      					<input type="text" class="form-control" name="cardPin" id="cardPin" placeholder="Nhập mã số sau lớp bạc mỏng" value="" />
			</div><br />
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-slideshare"></i>
				</span>
      					<input type="text" class="form-control" name="cardSerial" id="cardSerial" placeholder="Nhập mã serial nằm sau thẻ" value="" />
			</div><br />
			<div class="form-group">
				<button class="btn btn-success btn-block" id="naptien" onclick="postNaptien();">
					<i class="fa fa-exchange"></i> Thanh Toán
				</button>
			</div>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>