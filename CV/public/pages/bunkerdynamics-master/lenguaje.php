<?php
	$fp = fopen("lenguaje.txt", "w");
	fputs($fp, $_GET["leng"]);
	fclose($fp);
	header('Location: index.php');