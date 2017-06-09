<?php
session_start();
error_reporting(0);
include('config.php');
include'incfiles/head.php';
?>

				<?php if(($_SESSION['id'])){
include 'menu.php';
}else{
include'incfiles/dangnhap.php';
}?>
</div>
			</div>
		</div>

<!-- FOOTER -->
<?php
include'incfiles/foot.php';
?>



<!-- KHAI BÁO PHẦN THÔNG TIN TRÊN HEAD -->
<?php
include'incfiles/info.php';
?>


<!-- KHAI BÁO CHO THÀNH PHẦN JQUERY -->
<?php 
include'incfiles/panel.php';
?>

<!-- HIỆU ỨNG KHI BẬT TẮT BOT -->
<?php 
switch ($_GET['info']) {
case '1': include('./modal/1.php');
break;
case '2': include('./modal/2.php');
break;
case '3': include('./modal/3.php');
break;
} ;?>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<?php
include'incfiles/ajax.php';
?>
</body>
</html>