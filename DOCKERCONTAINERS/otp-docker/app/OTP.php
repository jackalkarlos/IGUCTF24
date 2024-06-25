<?php
session_start();


if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
  
    http_response_code(200);
    if (!isset($_SESSION['otp'])) {
    $_SESSION['otp'] = rand(133500, 133999);
}


$postdata = file_get_contents("php://input");


$request = json_decode($postdata, true);
sleep(3);

if(isset($request['otp'])) {
   
    if (!is_array($request['otp'])) {
        $request['otp'] = array($request['otp']);
    }


    foreach($request['otp'] as $otp) {

        if($otp == $_SESSION['otp']) {
            http_response_code(200);
            echo json_encode(array("message" => "Giriş izni verildi. (OTP: $otp)"));
            $_SESSION['OTP_Status'] = TRUE;
            return; 
        }
    }

    
    http_response_code(403);
    echo json_encode(array("message" => "Hata! Giriş izni reddedildi. Yanlış OTP girdiniz."));
    
if (!isset($_SESSION['count'])) {
    
    $_SESSION['count'] = 0;
}


$_SESSION['count']++;


if ($_SESSION['count'] >= 10) {
   
    echo "\n";
    echo json_encode(array("message" => "Yeni OTP Oluşturuldu"));
    $_SESSION['otp'] = rand(133700, 133999);
    $_SESSION['count'] = 0;
}
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Geçersiz istek!"));
}
} else {

    http_response_code(403);
    echo "Forbidden";
}



?>
