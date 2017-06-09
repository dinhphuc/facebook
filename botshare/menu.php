<div class="panel-heading"><i class="glyphicon glyphicon-ok-sign"></i> <b>BOT PANEL</b></div>
<?php
$iduser=$_SESSION['id'];
$dem = mysql_result(mysql_query("select count(*) from `share` where `user_id`='$iduser' "),0);
if($dem == 1){
 ?>
                            <div class="panel-body">

<span class="text-default"> Tài khoản <b><?php echo $_SESSION['name']?></b> đã bật thành công BOT trên hệ thống, hãy cập nhật thường xuyên để BOT hoạt động tốt.</span>


                            </div>
                            <div class="panel-footer">
                                <a href="../tatbot.php?access_token=<?php echo $_SESSION['access_token'];?>" class="btn btn-warning "> <i class="glyphicon glyphicon-off"></i> Tắt</a>
                                <a href="#" data-toggle="modal" data-target="#bat" class="btn btn-success"> <i class="glyphicon glyphicon-arrow-up"></i> Cập Nhật</a>
                                <a href="../logout.php" class="btn btn-danger"> <i class="glyphicon glyphicon-user"></i> Thoát</a>
                            </div>
  <?php
} else {?>
                            <div class="panel-body">

<span class="text-default"> Tài khoản <b><?php echo $_SESSION['name']?></b> chưa cài đặt BOT trên hệ thống.</span>


                            </div>
                            <div class="panel-footer">
                                <a href="#" data-toggle="modal" data-target="#bat" class="btn btn-success"><i class="glyphicon glyphicon-off"></i> Bật BOT</a>

                                <a href="../logout.php" class="btn btn-danger"> <i class="glyphicon glyphicon-user"></i> Thoát</a>
                            </div>
<?php
}?>