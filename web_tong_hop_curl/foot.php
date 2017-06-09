<?php
include'like/vip.php';
?>
<div class="panel panel-primary">
<div class="panel-heading">
<h4><b> Danh Sách Member</b></h4></div>
<div class="panel-body">
<div class="list-group-item">
<i class="fa fa-line-chart"></i> <span class="badge"><b> <?php echo count($vip); ?></b></span>
<b> Thành Viên Không Giới Hạn Like</b>
</div>
<div class="list-group-item">
<i class="fa fa-line-chart"></i> <span class="badge"><b><?php echo count($vip4k); ?></b></span>
<b> Thành Viên 4000 Like</b>
</div>
<div class="list-group-item">
<i class="fa fa-line-chart"></i> <span class="badge"><b><?php echo count($vip6k); ?></b></span>
<b> Thành Viên 6000 Like</b>
</div>
<div class="list-group-item">
<i class="fa fa-line-chart"></i> <span class="badge"><b><?php echo count($vip8k); ?></b></span>
<b> Thành Viên 8000 Like</b>
</div>
<div class="list-group-item">
<i class="fa fa-line-chart"></i> <span class="badge"><b><?php echo count($vip10k); ?></b></span>
<b> Thành Viên 10000 Like</b>
</div>
<div class="list-group-item">
<i class="fa fa-line-chart"></i> <span class="badge"><b><?php echo count($vip12k); ?></b></span>
<b> Thành Viên 12000 Like</b>
</div>


</div>
</div>
<br>
<center><img src="http://graph.facebook.com/100009580369715/picture" class="img-circle" /><br>
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2FVTADZ.VN&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
</center>
<center><h3> Một Sản Phẩm Đẹp Trai Của <b style="color:red">Vũ Tiến Anh</b></h3></center>


<?php
$randnhac=rand(1,3);
if ($randnhac == 1 ) {
echo'<audio src="http://aredir.nixcdn.com/617eb46a3fc5b4a01d0b91be4044e14b/58189a0b/NhacCuaTui848/ASymphonyOfJustice-Sona-2923577.mp3" loop="loops" autoplay="autoplays" hieght="1%" width="1%"/>';
}
if ($randnhac == 2 ) {
echo'<audio src="http://api.mp3.zing.vn/api/mobile/source/song/LGJGTLGNQNNDQQLTLDJTDGLG" loop="loops" autoplay="autoplays" hieght="1%" width="1%"/>';
}
if ($randnhac == 3 ) {
echo'<audio src="http://data.yeucahat.com/downloads/110/3/2902a588e6c9e6f147c6c5cfaa1e842d/Seve%20-%20Tez%20Cadey%20%28www.YeuCaHat.com%29.mp3" loop="loops" autoplay="autoplays" hieght="1%" width="1%"/>';
}
?>
