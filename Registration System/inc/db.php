<?php

$server="localhost";
$username="root";
$password="";
$dbname="practise1";
$dsn="mysql:host=$server;dbname=$dbname";
try{
$pdo=new PDO($dsn,$username,$password);
}catch(PDOException $e){
    echo "error:".$e->getMessage();
    die();

}
?>