<?php
	header('Content-type: text/html; charset=utf-8');

	$servidor="localhost";
	$banco="dbaula";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	
?>