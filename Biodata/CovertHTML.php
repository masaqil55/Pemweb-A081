<?php
$web_title = "Biodataku";
$judul = "bioDiriku";
$name = "Mas Muhammad Aqil Salim";
$text = "We UIUX Designer From";
$text_bold = " Kab.Sidoarjo, Indonesia";
$paragraph = "Halo, Selamat Datang di Website saya. Perkenalkan nama saya Aqil, Saya Ahli dalam Analisis dan Desain Sistem, Special Skill saya di UIUX Designer & Researcher, saya juga ahli dalam IT Support serta Data Analyst.";
$h2 = "Switch Tab?";
$button = "Next Tab";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?= $web_title; ?> </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main"><br>
		<div class="img"></div>
		<h1><?= $name; ?></h1>
		<div class="text"><?= $text; ?><strong><?= $text_bold; ?></strong></div>
		<p><?= $paragraph; ?></p>
		<br>
		<ul>
			<li><a href="http://facebook.com" target="blank"><img src="fb.png" width="32px" height="32px" alt=""></a></li>
			<li><a href="http://instagram.com" target="blank"><img src="ig.png" width="32px" height="32px" alt=""></a></li>
			<li><a href="http://twitter.com" target="blank"><img src="tw.png" width="32px" height="32px" alt=""></a></li>
			<li><a href="http://whatsapp.com" target="blank"><img src="link.png" width="32px" height="32px" alt=""></a></li>
		</ul>
	</div>
	<footer>
		<div class="footer-content">
			<h2><?= $h2; ?></h2>
			<a href="ConvertHTML2.php" class="tombol-aktif animasi biru"><?= $button; ?></a>
		</div>
	</footer>
</body>
</html>