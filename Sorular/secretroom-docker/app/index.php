<?php
error_reporting(0);
// Mevcut olan cookie'yi kontrol et
if (isset($_COOKIE['LoginCount']) && intval(base64_decode($_COOKIE['LoginCount'])) >= 10) {
    // LoginCount değeri 10 veya daha büyükse, 403 Forbidden HTTP durum kodu döndür
    http_response_code(403);
    // 403.html sayfasını içeriğini göster
    include('403.php');
    // Sayfanın işleme devam etmesini engelle
    exit;
}


$Auth = "Auth";
$AuthTestValue = "233447130ebded0b70940b2c82d9762317b5ec120d618bfa817c169a9ca494390edbb434b077923d43e75a35f7f082f9119e7c22ff95e350372f3caa1e658423";
$expire = time() + (30 * 24 * 60 * 60);

if(!isset($_COOKIE["Auth"])){
    setcookie($Auth, $AuthTestValue, $expire, '/');
}
$Secret = $_POST['Secret'] ?? null;
if(isset($_POST['Secret']) && $_POST['Secret'] == "5c16ea0dc84113e8f31f080855d8d6e1d892fdcaafcc6f83ede159cf0c0fc65f8745839a6b35472aab28dccf46c7ae36a54ed28bcfab86b6f6dfa3e305c87250"){
    setcookie($Auth, $Secret, $expire, '/');
}



$ErcumentKey="5c16ea0dc84113e8f31f080855d8d6e1d892fdcaafcc6f83ede159cf0c0fc65f8745839a6b35472aab28dccf46c7ae36a54ed28bcfab86b6f6dfa3e305c87250";
if($Secret == $ErcumentKey || $_COOKIE["Auth"] == $ErcumentKey ){
    header("Location: c70859db9f7b64bc846afa8f522ef92d.php");
    exit;
}


// Gelen cookie değerini kontrol et
$SecretCookie = $_COOKIE['Auth'];

if ($SecretCookie != '5c16ea0dc84113e8f31f080855d8d6e1d892fdcaafcc6f83ede159cf0c0fc65f8745839a6b35472aab28dccf46c7ae36a54ed28bcfab86b6f6dfa3e305c87250' ||
    $SecretCookie != '233447130ebded0b70940b2c82d9762317b5ec120d618bfa817c169a9ca494390edbb434b077923d43e75a35f7f082f9119e7c22ff95e350372f3caa1e658423') {

    setcookie("Auth", "233447130ebded0b70940b2c82d9762317b5ec120d618bfa817c169a9ca494390edbb434b077923d43e75a35f7f082f9119e7c22ff95e350372f3caa1e658423", time() + (86400 * 30), "/"); // 30 gün boyunca geçerli
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Secret System Login</title>
<link rel="stylesheet" href="cc7d42451cec34c7b59a4e031d5b6cfd.css">
</head>
<body>
<div class="background"></div>
<div class="page-content">
  <div class="profile-avatar"></div>
  <div class="password-box">
    <input id="passwordInput" placeholder="Ercüment [Admin]" autocomplete="off" spellcheck="false"/>
    <button id="login"></button>
  </div>
</div>
<audio id="errorAudio" src="error.wav"></audio>
<script src="1b96c06d83a553a7bda09d341c7e1b2c.js"></script>
</body>
</html>
