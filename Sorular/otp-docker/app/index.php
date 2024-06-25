<?php
session_start(); // Oturumu başlat

if(isset($_SESSION['login']) === TRUE){
header("Location: access.php");
exit;
}

// İzin verilen telefon numaraları dizisi
$allowedPhoneNumbers = array(
    '2106923121', '7994909648', '6034421584', '2937394245', '4454985120',
    '9199266306', '5383668407', '1077421065', '9839553257', '4647227851',
    '8747618641', '6321309522', '3416259737', '1899815140', '9305936815',
    '9526797240', '9543944023', '5414245948', '1101295161', '5225673532',
    '5187414266', '4931948690', '4916795946', '8871328052', '7312867680',
    '1686316062', '1999591665', '7131224921', '7041808924', '8621184807',
    '5345015856', '1368454527', '6104207497', '9633795197', '4558169658',
    '2966373277', '1836191630', '3727397776', '4036312329', '3512643202',
    '6196761736', '5194234701', '4238059145', '8388486710', '3551039134',
    '9565503611', '1735778063', '3621124049', '3716699778', '8746454030',
    '2165462694', '3897771491', '8734818461', '9861994512', '2445939034',
    '6455113156', '4004932235', '4556321048', '6399193337', '8153781111',
    '3423449983', '9244376962', '8577485105', '4769764805', '8885418563',
    '1736909947', '3502377729', '6686288467', '5742198012', '6509604135',
    '1727122400', '1335021509', '4309027568', '8321558639', '3449588011',
    '3565676726', '2495058462', '8049598071', '6338095987', '9877895767',
    '4792829064', '8485751005', '1117170683', '1612858158', '7844393905',
    '9251322365', '9829278351', '7035739755', '5182753396', '1491884678',
    '2671853684', '1386194596', '1521614922', '3327909008', '1509949345',
    '3295989689', '6477424308', '4467934382', '6365795725', '3598807908',
    '6856143933', '2467201785', '1314586219', '5982715810', '2465968292',
    '2598051522', '9853021507', '8876234068'
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $phoneNumber = $_POST["phone"];


    if (in_array($phoneNumber, $allowedPhoneNumbers)) {
    
        $_SESSION['phone'] = $phoneNumber;
        $_SESSION['login'] = TRUE;
        
        header("Location: access.php");
        exit; 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282a36; 
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="tel"] {
            width: 85%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;
            transition: border-color 0.3s ease;
        }

        input[type="tel"]:focus {
            border-color: #8be9fd; 
            outline: none;
        }

        input[type="submit"] {
            width: 85%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #111311; 
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d42f11;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form id="loginForm" method="POST">
            <label for="phone" id="phone">ID</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
            <input type="submit" value="Giriş Yap">
        </form>
    </div>
</body>
</html>
