<?php

$server = "localhost";
$userName = "root";
$password = "";
$dbName  = "project1";

try{
    $cont = new PDO("mysql:host=$server;dbname=$dbName", $userName, $password);
} catch (PDOException $e)
{
    echo "error : " . $e->getMessage();
}