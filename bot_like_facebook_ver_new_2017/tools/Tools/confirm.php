
<div class="col-md-5">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-thumbs-up"></i> Auto  Confirm Friends - Hệ Thống Tự Động Chấp Nhận Lời Mời Kết Bạn </h4>
			
		</div>
		<div class="box-body">
			<h4><strong><p class="text-danger"> Hệ Thống Tự Động Chấp Nhận Lời Mời Kết Bạn </p></strong></h4>
			<font style="color:#23c6c8;">Bước 1:</font> Sử Dụng Mục Bên " Danh Sách Lời Mời Kết Bạn" Để Chọn ID Cần Kết Bạn Của Bạn.  <br />
			<hr>


<form action="" method="post">
			<div id="bodyup" class="form-group">
				<button type="submit" class="btn btn-success btn-block"  onClick="done()" >
					<i class="fa fa-exchange"></i> Thực Hiện
				</button>
			</div>
                       <div id="thongbao" style="display: none;">
				<button type="submit" class="btn btn-success btn-block" disabled>
					<i class="fa fa-refresh fa-spin"></i> Đang Thực Hiện
				</button><BR><BR>
                                <div class="alert alert-info"><i class="fa fa-refresh fa-spin"></i> Đang Thực Hiện - Vui Lòng Đợi!
                                </div>
                       </div>
		</div>
		<div class="box-footer">
<?php
if( isset($_POST['id']) && is_array($_POST['id']) ) {
echo '<div class="alert alert-info"> ';
  foreach($_POST['id'] as $lol) {
   $gay = auto('https://graph.facebook.com/me/friends/'.$lol.'/?access_token='.$_SESSION['matoken'].'&method=post').'';
    $jancok = json_decode($gay);
    if($jancok=="1000")
       echo " Đã Xác Nhận ". $lol ."<br>";
    else
        echo "<font color=red>Không Thể Xác Nhận Bạn Bè Với ". $lol ."</font><br>";
    sleep(1);
   }
echo '</div>'; 
}
?>
			

		</div>
	</div>
</div>

<div class="col-md-7">
	<div class="box box-info">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-credit-card"></i> Danh Sách Lời Mời Kết Bạn </h4>
		</div>
		<div class="box-content">
		<div class="input-group" style="margin-left: 20px;">
                     <div class="checkbox" style="margin-left: 30px;">
                          <label><input type="checkbox" value="" onClick="checkbox(this)"> Chọn Tất Cả </label>
                     </div>
                          <div class="control-group">
<?php
$stat=json_decode(auto('https://graph.beta.facebook.com/me/friendrequests?access_token='.$_SESSION['matoken'].'&method=GET&limit=500'),true);
for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
?>
<div class="checkbox">
<label><input type="checkbox" value="<?=$stat[data][$i-1][from][id]?>" name="id[]"><a href="https://www.facebook.com/<?=$stat[data][$i-1][from][id]?>" target="_blank"><?=$stat[data][$i-1][from][name]?></a> [ Gửi Lúc : <?=$stat[data][$i-1][created_time]?> ]</label>
</div>
<?
if($i=='10'){
?>
                          </div>
                          <div class="control-group">
<?
}
?>
<?
}
}
?>
                        </div>
                 </div>
</form>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>
<script type="text/javascript">
function done()
	{
	$("#bodyup").hide();
	$("#thongbao").show();
	}
</script>
<script>

function checkbox(source) {
  checkboxes = document.getElementsByName('id[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>

</form>
