<?php
/* Database connection settings */
$host = 'localhost';
$user = 'myuser';
$pass = '12345';
$db = 'myuser';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
