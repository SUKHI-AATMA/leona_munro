<?php
	$base64Img = $_POST['img'];
	$outputfile = $_POST['imgName'];
	base64ToImage($base64Img,$outputfile);
?>