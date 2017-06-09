<?php
include'incfiles/head.php';  
?>
<?php
$act = $_GET['act'];
if(
$act == 'caitoken' ||
$act == 'layid' ||
$act == 'gettokenbangcookie' ||
$act == 'simcmtstt' ||
$act == 'botlike' ||
$act == 'botcmt' ||
$act == 'botstt'
){
include 'menu/'.$act.'.php';
}else {
print '

                    <!-- BODY FUNCTION -->
  <div class="box-body">
                   <!-- BANNER -->
				   <center><h2><p class="text-danger"><strong> All Function With Cookie Code</strong></p></h2><hr>

    <!-- START FUNCTION -->
				   <div class="col-md-4">
					<div class="box box-danger" style="background-color:aqua;">
					     <div class="box-title box-header with-border">
					          <center style="font-size: 20px;">Cài Đặt Token</center>
					     </div>
					     <div class="box-body">
						  <a href="?act=caitoken" class="btn btn-block  btn-success">Cài Đặt</a>
					     </div>
					</div>
				   </div>
                    <!-- END FUNCTION -->



   <!-- START FUNCTION -->
				   <div class="col-md-4">
					<div class="box box-danger" style="background-color:aqua;">
					     <div class="box-title box-header with-border">
					          <center style="font-size: 20px;"> Lấy ID Bài Viết & Người Dùng</center>
					     </div>
					     <div class="box-body">
						  <a href="?act=layid" class="btn btn-block  btn-success"> Sử Dụng</a>
					     </div>
					</div>
				   </div>
                    <!-- END FUNCTION -->





             <!-- START FUNCTION -->
				   <div class="col-md-4">
					<div class="box box-danger" style="background-color:aqua;">
					     <div class="box-title box-header with-border">
					          <center style="font-size: 20px;">Get Token Bằng Cookie</center>
					     </div>
					     <div class="box-body">
						  <a href="?act=gettokenbangcookie" class="btn btn-block  btn-success">Sử Dụng</a>
					     </div>
					</div>
				   </div>
                    <!-- END FUNCTION -->



    <!-- START FUNCTION -->
				   <div class="col-md-4">
					<div class="box box-danger" style="background-color:aqua;">
					     <div class="box-title box-header with-border">
					          <center style="font-size: 20px;">Bot Like Bảng Tin</center>
					     </div>
					     <div class="box-body">
						  <a href="?act=botlike" class="btn btn-block  btn-success">Sử Dụng</a>
					     </div>
					</div>
				   </div>
                    <!-- END FUNCTION -->


    <!-- START FUNCTION -->
				   <div class="col-md-4">
					<div class="box box-danger" style="background-color:aqua;">
					     <div class="box-title box-header with-border">
					          <center style="font-size: 20px;">Bot Comment Bảng Tin</center>
					     </div>
					     <div class="box-body">
						  <a href="?act=botcmt" class="btn btn-block  btn-success">Sử Dụng</a>
					     </div>
					</div>
				   </div>
                    <!-- END FUNCTION -->



    <!-- START FUNCTION -->
				   <div class="col-md-4">
					<div class="box box-danger" style="background-color:aqua;">
					     <div class="box-title box-header with-border">
					          <center style="font-size: 20px;">Bot Auto Bớp Status</center>
					     </div>
					     <div class="box-body">
						  <a href="?act=botstt" class="btn btn-block  btn-success">Sử Dụng</a>
					     </div>
					</div>
				   </div>
                    <!-- END FUNCTION -->




    <!-- START FUNCTION -->
				   <div class="col-md-4">
					<div class="box box-danger" style="background-color:aqua;">
					     <div class="box-title box-header with-border">
					          <center style="font-size: 20px;">SimSimi Comment Status</center>
					     </div>
					     <div class="box-body">
						  <a href="?act=simcmtstt" class="btn btn-block  btn-success">Sử Dụng</a>
					     </div>
					</div>
				   </div>
                    <!-- END FUNCTION -->



                   </div>
                    <!-- END BODY FUNCTION -->

';
}
?>
<?php
include'incfiles/foot.php';
?>