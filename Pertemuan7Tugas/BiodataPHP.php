<?php
$web_title = "Biodataku";
$judul = "bioDiriku";
$name = "Mas Muhammad Aqil Salim";
$text = "We UIUX Designer From";
$text_bold = " Kab.Sidoarjo, Indonesia";
$paragraph = "Halo, Selamat Datang di Website saya. Perkenalkan nama saya Aqil, Saya Ahli dalam Analisis dan Desain Sistem, Special Skill saya di UIUX Designer & Researcher, saya juga ahli dalam IT Support serta Data Analyst.";
$h2 = "Switch Tab?";
$button = "Next Tab";
$ul = array(
	array("link"=>"https://www.facebook.com/mas.a.salim.98?mibextid=ZbWKwL", "icon"=>"fb.png"),
	array("link"=>"https://instagram.com/aqilsalimm123?igshid=ZDdkNTZiNTM=", "icon"=>"ig.png"),
	array("link"=>"https://twitter.com/aqilsalimm?t=IiU84v0JakR3AC_02OVHIw&s=09", "icon"=>"tw.png"),
	array("link"=>"https://www.linkedin.com/in/mas-aqil-5226671b3", "icon"=>"link.png")
)
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
			<?php foreach($ul as $array): ?>
			<li><a href="<?= $array['link'] ?>" target="blank"><img src="<?= $array['icon'] ?>" width="32px" height="32px" alt=""></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<footer>
		<div class="footer-content">
			<h2><?= $h2; ?></h2>
			<a href="BiodataPHP2.php" class="tombol-aktif animasi biru"><?= $button; ?></a>
		</div>
	</footer>
</body>
</html>