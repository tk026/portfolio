<?php

require 'includes/functions.php';

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'portfolio';

$dbh = connectDatabase($host, $database, $user, $pass);
$portfolio = getPortfolio($dbh);
?>