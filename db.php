<?php 
	$dbname = "tiketshop";
	$dbuser = "root";
	$dbpassword = "";
	$hostname = "localhost";

	$mysqli = new mysqli($hostname, $dbuser, $dbpassword, $dbname);
	$mysqli->query("SET NAMES utf8");
?>