<?php
$dbServer = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'artyom_db';

$db = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName)
    or die ('Connection failed!!!');

$db->set_charset("utf8");



?>