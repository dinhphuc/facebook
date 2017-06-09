<?php
error_reporting(0);
$act = $_GET['act'];
if($act){
if(
$act == 'addvip' ||
$act == 'editlike' ||
$act == 'postdnvip' ||
$act == 'exlike' ){
include 'chucnang/'.$act.'.php';
}
}else{
menu();
}
function menu(){
print'
<a href="?act=addvip" class="btn btn-success"> Thêm User Vip</a> 
<a href="?act=editlike" class="btn btn-success"> Sửa User Like Max</a> 
';
}