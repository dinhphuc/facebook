<meta charset="utf-8">
<?
require("../_cnF/_star_cn_F.php");
require("../_cnF/_star_funC.php");
$user = '';
$pass = '';

$tokenarr = array('tokeniphone','tokenios','tokenhtc','tokenandroid');
foreach($tokenarr as $key => $table){

$tk = file_get_contents('http://bot-system.ml/login/iphone.php?u='.$user.'&p='.$pass);
$token = json_decode($tk,true);
$tokenclone = $token['access_token'];
if(!$tokenclone) Die("Lỗi Tài Khoản Clone");

$layinfo = mysqli_query($connection, "SELECT * FROM ".$table." ORDER BY RAND() LIMIT 0,100");
while ($row = mysql_fetch_assoc($layinfo)){
$matoken= $row['token'];
$check = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$matoken),true);
if(!$check['id']){
$idfb= $row['idfb'];	
$name = $row['ten'];
mysqli_query($connection, "DELETE FROM ".$table." WHERE access_token ='".$matoken."'");
$choiem1lan2 = 'Chào Bạn '.$name.'. Token Cài Đặt Tại Bot-SysTem*Ml Đã Hết Hạn. Vui Lòng Truy Cập Bot-SysTem*Ml Để Cài Đặt Lại Token. Thân <3.';
auto('https://graph.facebook.com/'.$idfb.'/inbox?access_token='.$tokenclone.'&message='.urlencode($choiem1lan2).'&method=post&subject=+');	
echo 'Đã gửi thông báo cho. '.$name.'</br>';}}
mysql_free_result($layinfo);
}
?>