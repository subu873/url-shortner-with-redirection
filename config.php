<?php
// Hostname for your URL shortener
$hostname = 'http://zyla';

// PDO connection to the database
$connection = new PDO('mysql:dbname=shortner;host=localhost', 'root', '');

// Choose your character set (default)
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';


$salt = '';

$padding = 3;
?>
