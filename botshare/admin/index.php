<?php
session_start();
error_reporting(0);
include('../config.php');
include'../incfiles/head.php';
?>

<center><h3><b>ADMIN PANEL</b></h3></center>

<div class="container">
<div class="panel panel-default">
                            <div class="panel-body">
<div class="row">
<center>

		<?php if(($_SESSION['user'])){
include 'menu.php';
}else{
echo '
 <script language="javascript">
window.location.href = "../index.php";
      </script>';
}?>
</center>
</div>
                            </div>
  
                            </div>
                        </div>
<?php
include'foot.php';
?>