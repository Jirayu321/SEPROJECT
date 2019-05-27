<?php

session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db_con = 'pretty';

$mysqli = mysqli_connect($host, $user, $pass ,$db_con);

$mysqli->set_charset("utf8");

?>
