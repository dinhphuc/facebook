 <?php

include'../config.php'; // chèn file kết nối database

$laytoken = mysql_query("SELECT * FROM `share` ORDER BY RAND() LIMIT 0,4"); 


while ($get = mysql_fetch_array($laytoken)) {
$id = $get['id'];
$user = $get['user_id']; 
$access = $get['access_token'];
$token = $get['token_page']; 

                 $check = json_decode(cURL('https://graph.facebook.com/me?access_token='.$access),true);
                       if(!$check[id]){  @mysql_query("DELETE FROM share WHERE access_token ='".$access."' ");  continue; }
 
$feed = json_decode(cURL('https://graph.facebook.com/' . $user . '/feed?access_token='.$access.'&limit=1'),true);

    echo $user.': '.cURL('https://graph.facebook.com/' . $feed['data'][0]['id'] . '/sharedposts?method=post&access_token='.$token);

// echo $return['error'];


}



function cURL ($url) {
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}