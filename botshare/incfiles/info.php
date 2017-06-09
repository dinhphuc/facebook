<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Trang Cá Nhân</h4>
      </div>
      <div class="modal-body">

<?php if(($_SESSION['id'])) {
print '<center><img class="img-circle" src="https://graph.facebook.com/'.$_SESSION['id'].'/picture" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x"><p><strong>'.$_SESSION['name'].'</strong></p></center>
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">'.$_SESSION['email'].'</span>
    Email
  </li>
  <li class="list-group-item">
    <span class="badge">'.$_SESSION['birthday'].'</span>
    Ngày sinh
  </li>
  <li class="list-group-item">
    <span class="badge">'.$_SESSION['id'].'</span>
    Profile ID
  </li></ul>';
}else{
print'Vui lòng đăng nhập vào hệ thống';}?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <!--<button type="button" class="btn btn-primary">Xác nhận</button>-->
      </div>
    </div>
  </div>
</div>


<!-- ADMIN LOGIN -->

<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Đăng Nhập Admin</h4>
      </div>
      <div class="modal-body">
<center><strong> Chức Năng Này Chỉ Dành Cho Quản Trị Viên</strong></center>


<div class="input-group">
      <input type="text" id="adminuser" class="form-control" placeholder="Nhập Username Admin">
      <input type="text" id="adminpass" class="form-control" placeholder="Nhập Password Admin">
    </div><!-- /input-group -->
      <span class="input-group-btn">
<center>
        <button class="btn btn-danger" id="adminsubmit" onclick="adminlogin()" title="Đăng nhập"> Đăng Nhập</button>
      </span>
   </center>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <!--<button type="button" class="btn btn-primary">Xác nhận</button>-->
      </div>
    </div>
  </div>
</div>