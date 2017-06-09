<?php if(($_SESSION['id'])) {
print '<!-- Modal -->
<div class="modal fade" id="bat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Xác Nhận Bật Bot</h4>
      </div>
      <div class="modal-body">
<form method="post" action="xuly.php?access_token='.$_SESSION['access_token'].'&tokenpage='.$_SESSION['token_page'].'">
<h5> BẠN CÓ MUỐN BẬT BOT ?</h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" id="batbot" onclick="batbot()" class="btn btn-primary">Xác nhận</button>
      </div>
    </div>
  </div>
</div>';
}else{
print'<!-- Modal -->';}?>


<!-- Modal -->
<div class="modal fade" id="huongdan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Giới thiệu hệ thống</h4>
      </div>
      <div class="modal-body">
<p>
Lưu ý: Bạn nên trên 18 tuổi, nếu không hãy <a href="https://www.facebook.com/me/about?section=contact-info&pnref=about" target="_blank" class="text-warning"> <b>thay đổi năm sinh </b></a> thành trên 18 tuổi. Nếu không sẽ không bật theo giõi được</p> 
<p>
Đầu tiên, bạn click vào <a href="https://www.facebook.com/settings?tab=followers" target="_blank"  class="text-warning"><b>đây</b></a> để thay đổi thiết lập người theo giõi. Trong phần: "<b>Ai có thể theo dõi tôi</b>" bạn chọn và sửa thành <span class="label label-warning"><i class="glyphicon glyphicon-globe"></i> Tất cả mọi người</span></p><p>
		Tiếp theo phần: "<b>Bình luận của người theo dõi</b>" bạn chọn và sửa thành:  <span class="label label-warning"> <i class="glyphicon glyphicon-globe"></i> Tất cả mọi người </span>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="gioithieu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Giới thiệu hệ thống</h4>
      </div>
      <div class="modal-body">
<p><b>Botviet.Mobi</b> là một hệ thống trao đổi Like Facebook.
<br/>
Hệ thống sẽ giúp bạn nhận được một số like  nhất định mỗi khi bạn có status mới ! Bạn không cần phải làm gì cả!
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <!--<button type="button" class="btn btn-primary">Xác nhận</button>-->
      </div>
    </div>
  </div>
</div>