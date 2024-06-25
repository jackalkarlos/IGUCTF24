<?php
session_start();


if(isset($_SESSION['login']) && $_SESSION['login'] === true && isset($_SESSION['OTP_Status']) === TRUE) {
    
    http_response_code(200);
    
    if($_SESSION['phone'] == "1117170683"){
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Administrator</title>
  <link rel="stylesheet" href="./e0d5501e5bc54f64b7aaa79a88ce7ade.css">

</head>
<body>
<div class="grid"></div>

<div class="warning"></div>

<div class="base">
	<button id="activate">
		<span></span>
	</button>
</div>

<div class="box opened" id="cover">
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<span></span><span></span>
</div>

<div class="hinges"></div>

<div class="text">
	IGUCTF-&thinsp;2024
</div>

<div id="panel">
	<div id="msg">OTP Bypassed!</div>
	<div id="time">9</div>
	<span id="abort">Flag Loading...</span>
	<span id="detonate">Flag Alert!</span>
</div>

<div id="turn-off"></div>
<div id="closing"></div>

<div id="restart"><button id="reload"></button></div>

<div id="mute"></div>

<audio id="alarm">
	<source src="https://cdn.josetxu.com/audio/self-destruct-count.mp3" type="audio/mpeg">
</audio>

  <script  src="./0c5688259a380c09a63e0ae56e466cd9.js"></script>


</body>
</html>

<?php
}else{
  ?>
  <!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Administrator </title>
    <link rel="stylesheet" href="./e0d5501e5bc54f64b7aaa79a88ce7ade.css">

  </head>
  <body>
 
  <div class="grid"></div>

  <div class="warning"></div>

  <div class="base">
  	<button id="activate">
  		<span></span>
  	</button>
  </div>

  <div class="box opened" id="cover">
  	<div></div>
  	<div></div>
  	<div></div>
  	<div></div>
  	<div></div>
  	<div></div>
  	<span></span><span></span>
  </div>

  <div class="hinges"></div>

  <div class="text">
  	IGUCTF-&thinsp;2024
  </div>

  <div id="panel">
  	<div id="msg">OTP Bypassed!</div>
  	<div id="time">9</div>
  	<span id="abort">Flag Loading...</span>
  	<span id="detonate">Permission Denied!</span>
  </div>

  <div id="turn-off"></div>
  <div id="closing"></div>

  <div id="restart"><button id="reload"></button></div>

  <div id="mute"></div>

  <audio id="alarm">
  	<source src="https://cdn.josetxu.com/audio/self-destruct-count.mp3" type="audio/mpeg">
  </audio>
 
    <script  src="./4bbb5052b1b4078be4092f63ee82c11a.js"></script>


  </body>
  </html>
<?php
}
} else {
   
    http_response_code(403);
    echo "Forbidden";
}
?>
