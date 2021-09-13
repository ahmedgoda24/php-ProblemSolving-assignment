<?php

$server="localhost";
$username="root";
$password="";
$dbname="practise2";
$dsn="mysql:host=$server;dbname=$dbname";
try{
$con=new PDO($dsn,$username,$password);
}catch(PDOException $e){
    echo "error:".$e->getMessage();
    die();

}
?>