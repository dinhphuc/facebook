<?php
$email = $_GET['u'];
$pass = $_GET['p'];
$array = array();

cURL('https://m.facebook.com/login.php', true, 'email='.urlencode($email).'&pass='.urlencode($pass).'&login=Login');
$data = cURL('https://mbasic.facebook.com/profile.php');
if(preg_match('#name=\\"fb_dtsg\\" value=\\"(.*?)\\"#is', $data, $fb_dtsg)){
	$result_token = cURL('https://www.facebook.com/v2.7/dialog/oauth/confirm', true, 'fb_dtsg='.$fb_dtsg[1].'&app_id=41158896424&redirect_uri=fbconnect://success&display=popup&access_token=&sdk=&from_post=1&private=&tos=&login=&read=&write=&extended=&social_confirm=&confirm=&seen_scopes=&auth_type=&auth_token=&auth_nonce=&default_audience=&ref=Default&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1');
	if(preg_match("'access_token=(.*?)&expires_in='", $result_token, $access_token)){
		$array['access_token'] = $access_token[1];
	}
	else{
		$array['error_code'] = 405;
	}
}
else{
	$array['error_code'] = 2608;
}
echo json_encode($array);
function cURL($url, $get_cookie = true, $fields = false){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
if($get_cookie){
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
}
if($fields){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
}
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
return curl_exec($ch);
curl_close($ch);
}
unlink('cookie.txt');
?>