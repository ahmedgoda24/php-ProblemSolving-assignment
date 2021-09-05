<?php
include 'dbcon.php';
function checkEmail($email)
{
    global $cont;
    $checkEmail = $cont->prepare("SELECT id FROM users WHERE email=? LIMIT 1");
    $checkEmail->execute([$email]);
    return $checkEmail->fetchAll();
}