<?php


$host = '45.229.194.198';
$dbname = 'teste';
$user = 'root';
$pass = '1234';


$mysqli = new mysqli($host, $user, $pass, $dbname);

if (mysqli_connect_errno())

    trigger_error(mysql_connect_error());





$mysqli->set_charset("utf8");

date_default_timezone_set('America/Sao_Paulo');

