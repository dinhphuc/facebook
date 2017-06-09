<?php
$tk = $_GET['token'];
if($tk){
$feed=json_decode(file_get_contents('https://graph.facebook.com/me/accounts?access_token='.$tk),true);
foreach ($feed['data'] as $data) {
    echo $data['access_token'];
}

}
?>