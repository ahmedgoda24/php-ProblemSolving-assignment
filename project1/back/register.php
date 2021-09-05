<?php
include "functions.php";

if (isset($_POST['submitRegister'])) {
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailValidtion = checkEmail($email);
    if (count($emailValidtion) == 0) {


        $addUser = $cont->prepare("INSERT INTO users(name,email,password) VALUES (?,?,?)");

        if ($addUser->execute([$name, $email, $password])) {
            $_SESSION['acountCreated'] = "<strong style=color:green>Your Acount Hasbeen Created</strong>";

            header("Location:../index.php");

        } 

    } else
    {
        $_SESSION['emailExist'] = "<strong style=color:red>this mail is exits</strong> ";

        header("Location:../index.php");
    }
}




;