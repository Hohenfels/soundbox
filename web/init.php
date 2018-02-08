<?php
require ('web/database/pdo.php');

try {
	$sql = "CREATE DATABASE IF NOT EXISTS soundbox";
	$db->exec($sql);

	$sql = "USE soundbox";
	$db->exec($sql);

	$sql = "CREATE TABLE IF NOT EXISTS `users` (
		`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`login` varchar(255) NOT NULL,
		`password` varchar (128) DEFAULT NULL
	)";
	$db->exec($sql);

	$sql = "CREATE TABLE IF NOT EXISTS `sound` (
		`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`name` varchar(255) NOT NULL,
		`icon` varchar (255) DEFAULT NULL
	)";
	$db->exec($sql);
	header("Location: index.php");
}
catch(PDOException $tmp)
{
	echo $tmp->getMessage().PHP_EOL;
	die();
}
?>
