<?php

$serverName = 'localhost';
$userName = 'root';
$passWord = '';
$databaseName = 'adressebuch';

$conn = mysqli_connect($serverName, $userName, $passWord, $databaseName)
         or die ("Die Verbindung war nicht erfolgreich !");