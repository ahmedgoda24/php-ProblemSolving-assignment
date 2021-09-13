<?php
include('db.php');
$success='';
$error='';
function checkEmail($email)
{
    global $con;
    $checkEmail = $con->prepare("SELECT id FROM users WHERE email=? LIMIT 1");
    $checkEmail->execute([$email]);
    return $checkEmail->fetchAll();
}
function requiredInput($value){
    $str = trim($value);
    if(strlen($str) > 0)
    {
        return true;
    }
    return false;
}
//  sanitize string inputs

function santString($value)
{
    $str=trim($value);
    $str = filter_var($str,FILTER_SANITIZE_STRING);
    return $str;
}
function santEmail($email)
{
    $email=trim($email);
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
    return $email;
}


?>