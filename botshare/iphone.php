<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user && $pass) {
$link = 'https://api.facebook.com/restserver.php?api_key=3e7c78e35a76a9299309885393b02d97&email='.urlencode($user).'&format=JSON&locale=vi_vn&method=auth.login&password='.urlencode($pass).'&return_ssl_resources=0&v=1.0&sig=370629d1efb4ada7e96b174cf9053a92';


echo '<a class="btn btn-success" target="_blank" href="'.$link.'" title="Get Token">Get Token</a>';

}else {
echo ' Hãy Nhập Đủ User Và Pass';
}