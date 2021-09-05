<?php
include "db.php";
/**
 * check email
 * Steps:
 * 1- get email from user.
 * 2- check database if exists.
 * 3- return status.
 */
function checkEmail($email)
{
   global $pdo;
    $checkEmail = $pdo->prepare("SELECT email FROM users WHERE email=? LIMIT 1");
    $checkEmail->execute([$email]);
    return $checkEmail->fetchAll();
}


/**
 * check Phone
 * Steps:
 * 1- get phone from user.
 * 2- check database if exists.
 * 3- return status
 */

function checkPhone($mobile)
{
    global $pdo;
    $checkPhone = $pdo->prepare("SELECT mobile FROM users WHERE mobile=? LIMIT 1");
    $checkPhone->execute([$mobile]);
    return $checkPhone->fetchAll();
}