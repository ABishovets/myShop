<?php

require '../library/maineFunctions.php';

/**
 * initial load for database
 */

$dblocation = "localhost";
$dbname = "myshop";
$dbuser = "admin";
$dbpassword = "qaz";

$mysqli = new mysqli($dblocation, $dbuser, $dbpassword, $dbname);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//echo $mysqli->host_info . "\n";

/*
$rez = $mysqli->query('
   SELECT * FROM categories       

');

$rows = $rez->fetch_assoc();

d($rows);*/