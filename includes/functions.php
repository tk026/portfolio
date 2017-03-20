<?php 

function connectDatabase($host, $database, $user, $pass){
  try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    return $dbh;

  } catch (PDOException $e) {
    print('Error! ' . $e->getMessage() . '<br>');
    die();
  }
}

function getPortfolio($dbh){
	$sth = $dbh->prepare("select * from projects");
	$sth->execute();

	$result = $sth->fetchAll();
	return $result;
}