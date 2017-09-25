<?php

/**
 * initial load for database
 */

$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpassword = "";

$db = mysql_connect($dblocation, $dbuser, $dbpassword);

if (!$db) {
    echo 'error wih access to lockalhost';
    exit();
}

mysql_set_charset('utf-8');

if (! mysql_select_db($dbname, $db)) {
    echo 'error to load DB';
    exit();
}

