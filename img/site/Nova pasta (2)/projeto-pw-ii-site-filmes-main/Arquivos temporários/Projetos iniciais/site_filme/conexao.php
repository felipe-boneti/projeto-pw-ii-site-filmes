<?php
	$servidor="localhost";
	$banco="dbsite";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>