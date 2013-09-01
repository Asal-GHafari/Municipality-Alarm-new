<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css"  rel="stylesheet" href="css/reset.css"/>
<link type="text/css"  rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="js/java.js"></script>
</head>

<body>
	<div class="slider-big">
    	<?PHP include("php/slider/animate-slider.php"); ?>
    </div>
	<div class="content">
		<?php include("php/header.php") ?>
        <div class="slider"><?PHP include("php/slider/slider-home.php"); ?></div>
        <div class="mainpanel"><?php include("php/mainpanel/home.php")?></div>
        <?php include("php/footer.php") ?>
    </div>
    <div class="footer-big"></div>
</body>
</html>