<?php
$web_title = "Biodataku";
$body_h1 = "My Portofolio";
$text = "I Have";
$text_bold = " Portofolio Design System";
$paragraph = "Saya sudah bekerja, dan mendapatkan klien untuk dibuatkan sebuah Design System, oleh karena itu akan saya lampirkan beberapa design System yang saya buat untuk dijadikan portofolio saya";
$h2 = "Switch Tab?";
$button = "Back To Main";
$ul = array(
	array("link"=>"https://www.figma.com/proto/yU5ifHZCL81lE3lxFyxDQy/Travance?page-id=0%3A1&node-id=419%3A10&viewport=-851%2C-305%2C0.71&scaling=scale-down&starting-point-node-id=105%3A2","icon"=>"Porject1.png","name"=>"Project 1"),
	array("link"=>"https://www.figma.com/proto/knU9FfI5ROk9DwAL1pAF1E/DailyVity?page-id=0%3A1&node-id=19%3A1156&viewport=428%2C228%2C0.17&scaling=scale-down&starting-point-node-id=19%3A1156", "icon"=>"tr.png","name"=>"Project 2")
)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $web_title ?></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<div class="main"><br>
		<div class="img"></div>
		<h1><?= $body_h1 ?></h1>
		<div class="text"><?= $text ?><strong><?= $text_bold ?></strong></div>
		<p><?= $paragraph ?></p>
		<br>
        <ul>
			<?php foreach($ul as $data): ?>
			<li><a href="<?= $data['link'] ?>" target="blank"><img src="<?= $data['icon'] ?>" width="35px" height="35px" alt=""></a><?= $data['name'] ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<footer>
		<div class="footer-content">
			<h2><?= $h2 ?></h2>
			<a href="BiodataPHP.php" class="tombol-aktif animasi biru"><?= $button ?></a>
		</div>
	</footer>
</body>
</html>