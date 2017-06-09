<?php
$u = $_GET['url'];
if(!$u) {
die('<b color="red"> Lỗi! Bạn Chưa Nhập Url Status @@</b>');
}

if($_GET['id']) {
echo '<div class="form-group"><label for="id">* ID Người Dùng:</label>
<input type="text" class="form-control" value="'.$_GET['id'].'">
</div>';
}else {
echo '<b color="red"> Lỗi! Không Lấy Được ID Người Dùng</b>';
}


$title = explode('story_fbid=',$u);
$title1 = explode('&id=',$title[1]); 


if($title1[0]) {
echo '<div class="form-group"><label for="id">* ID Status:</label>
<input type="text" class="form-control" value="'.$title1[0].'">
</div>';
}else {
echo '<b color="red"> Lỗi! Không Lấy Được ID Status</b>';
}