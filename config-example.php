<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'thestimulusproject');
define('DB_USER', 'root');
define('DB_PASS', 'ehacks');

//$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

?>