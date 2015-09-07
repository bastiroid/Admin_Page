<?php 

//diplay errors on screen
ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://dev.mw.metropolia.fi/floorball/Web-Prototype/');

$host = 'localhost';
$dbname = 'floorball';
$user = 'floorball';
$pass = '!lv09fkDO';

//connect to database
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

require 'functions.php'; 