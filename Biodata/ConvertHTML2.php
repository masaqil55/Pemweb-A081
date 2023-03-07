<?php 
$web_title = "Biodataku";
$body_h1 = "My Hobby";
$text = "My Hobby is";
$text_bold = " Make a Design System";
$paragraph = "Saya pribadi menyukai hal-hal dalam dunia IT yang berhubungan dengan Analisis, dan Desain Sistem. Layaknya para UIUX Designer & Researcher lainnya, karena skill Analisis dan Desain Sistem saya Dapat Diandalkan";
$h2 = "Switch Tab?";
$button = "Next Tab";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $web_title ?></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="main"><br>
		<div class="img"></div>
		<h1><?= $body_h1 ?></h1>
		<div class="text"><?= $text ?><strong><?= $text_bold ?></strong></div>
		<p><?= $paragraph ?></p>
		<br>
	</div>
	<footer>
		<div class="footer-content">
			<h2><?= $h2 ?></h2>
			<a href="ConvertHTML3.php" class="tombol-aktif animasi biru"><?= $button ?></a>
		</div>
	</footer>
</body>
</html>