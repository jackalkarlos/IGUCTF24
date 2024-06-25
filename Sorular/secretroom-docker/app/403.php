<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - 403</title>
  <link rel="stylesheet" href="./403.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<div id="app">
   <div>403</div>
   
   <br>
   <div class="txt">
      Siber Saldırı Tespit Edildi!<span class="blink">_</span><br>
      <br>
	  <span id="ipAddress">
	  <?php $ip = $_SERVER['REMOTE_ADDR'];
      echo $ip;
      
	  ?></span>
   </div>
</div>

<audio id="myAudio" loop>
  <source src="denied.wav" type="audio/mpeg">
</audio>

<script>
document.addEventListener('click', function() {
  var audio = document.getElementById("myAudio");
  audio.play();
});
</script>

  
</body>
</html>
