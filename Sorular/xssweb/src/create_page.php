<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];
    $bad_words = array('alert', 'window', 'prompt','svg','image','img','onload','eval','exec','aside','iframe','SRC','xss','Rsnake','href','nigga','marquee','video','audio','blink','div','svg');

	foreach ($bad_words as $word) {
	    $content = str_replace($word, '', $content);
	}
    $randomFileName = 'page_' . uniqid() . '.html';
    $filePath = __DIR__ . '/uploads/' . $randomFileName;
    $fileContent = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ah Yalan Dünya Note System</title>
    <link rel=\"icon\" href=\"https://cdn.gelisim.edu.tr/logo/favicon.ico\" type=\"image/x-icon\" />
	<link href=\"style.css\" rel=\"stylesheet\">
</head>
<body>
    <div class=\"noise\"></div>
    	<center>
		<br>
		<br>
		<br>
		<br>
		<img src=\"https://ctftime.org/media/cache/e9/a8/e9a848849a5418f80754ffd5c793755f.png\" alt=\"Logo\" class=\"logo\" width=\"150\" height=\"150\">
		<div class=\"container\">
        <h1 class=\"mb-4\">Ah Yalan Dünya Note System</h1>
        <p>" . ($content) . "</p>
		</div>
    </div>
</body>
</html>";
    file_put_contents($filePath, $fileContent);
    echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ah Yalan Dünya Note System</title>
    <link rel=\"icon\" href=\"https://cdn.gelisim.edu.tr/logo/favicon.ico\" type=\"image/x-icon\" />
	<link href=\"style.css\" rel=\"stylesheet\">
</head>
<body>
    <div class=\"noise\"></div>
    	<center>
		<br>
		<br>
		<br>
		<br>
		<img src=\"https://ctftime.org/media/cache/e9/a8/e9a848849a5418f80754ffd5c793755f.png\" alt=\"Logo\" class=\"logo\" width=\"150\" height=\"150\">
		<div class=\"container\">
        <h1 class=\"mb-4\">Ah Yalan Dünya Note System</h1>
        <div class='container mt-5'><p>Gönderdiğin not için yeni bir sayfa oluşturuldu: <a href=\"/uploads/$randomFileName\">/uploads/$randomFileName</a></p></div>
		</div>
    </div>
</body>
</html>";
}
?>
