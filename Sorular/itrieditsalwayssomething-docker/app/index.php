<?php
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Sayi = $_POST["sayi"];
    $Length = strlen($Sayi);
    if (!is_numeric($Sayi)) {
        echo "Geçersiz giriş!";
        exit;
    }
    if (strlen($Sayi) > 80) {
        echo "Fazla abartmasak mı :)";
        exit;
    }
    $dogruSayi = "117754242096910539668276807226044621494303352529793244323854205";

    if ($Sayi > $dogruSayi) {
        echo $Sayi . " sayısı büyüktür.";
    } else if ($Sayi < $dogruSayi) {
        echo $Sayi . " sayısı küçüktür.";
    } else {
        echo "Tebrikler, doğru numara {$Sayi}";
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Magic Numbers</title>
<style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat);

  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family: Montserrat;
    background: #313E50;
  }

  .text-input {
    position: relative;
    margin-top: 50px;
  }

  .label-container {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 40px;
    line-height: 40px;
    color: white;
    border-radius: 3px 0 0 3px;
    padding: 0 20px;
    background: #E03616;
    transition: all 0.3s ease-in;
    transition-delay: 0.2s;
  }

  input[type="text"] {
    display: inline-block;
    width: 950px;
    height: 40px;
    box-sizing: border-box;
    outline: none;
    border: 1px solid lightgray;
    border-radius: 3px;
    padding: 10px 10px 10px 100px;
    transition: all 0.1s ease-out;
  }

  input[type="text"]:focus + .label-container {
    transform: translateY(-120%) translateX(0%);
    border-radius: 3px;
    transition: all 0.1s ease-out;
  }

  input[type="text"]:focus {
    padding: 10px;
    transition: all 0.3s ease-out;
    transition-delay: 0.2s;
  }

  .label-container.green {
    background: green;
    color: white;
    animation: blink 1s infinite;
  }

  @keyframes blink {
    50% {
      opacity: 0;
    }
  }
</style>
</head>
<body>

<div class="text-input">
  <input type="text" id="input1" placeholder=":)" onkeypress="sendRequest(event)" max="100">
  <div class="label-container">
    <label for="input1">Start</label>
  </div>
</div>

<script>
  function sendRequest(event) {
    if (event.key === "Enter") {
      var inputValue = document.getElementById("input1").value;
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "index.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var labelContainer = document.querySelector(".label-container");
          labelContainer.textContent = xhr.responseText;
          if (xhr.responseText.includes("Tebrikler")) {
            labelContainer.classList.add("green");
          } else {
            labelContainer.classList.remove("green");
          }
        }
      };
      xhr.send("sayi=" + inputValue);
    }
  }
</script>

</body>
</html>
