<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'artyom_db';

$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$db->set_charset("utf8");
?>