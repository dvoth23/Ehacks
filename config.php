<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'thestimulusproject');
define('DB_USER', 'root');
define('DB_PASS', '');

global $pdo;
$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

include 'Question.php';
include 'includes/data/dataHandler.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>