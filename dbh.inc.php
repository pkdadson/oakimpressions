<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$mysqli = new mysqli('localhost', 'root', '', 'loginsystem');
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);