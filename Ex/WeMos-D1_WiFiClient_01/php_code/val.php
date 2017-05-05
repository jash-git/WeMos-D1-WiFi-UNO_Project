<?php
	$val = $_GET['string'];
	$bf = fopen("test.txt","a+");
	fwrite ($bf,$val."\r\n");
	fclose($bf);
	echo "get data=";
	echo $val;
?>