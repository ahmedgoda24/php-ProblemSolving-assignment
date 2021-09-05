<?php
include "functions.php";
session_start();

if(isset($_POST['submitLogin']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$checkEmail=checkEmail($email);


if(count($checkEmail)!=0){
    $logIn = $cont->prepare("SELECT * FROM users WHERE email=? AND password=? LIMIT 1");
    $logIn->execute([$email,$password]);
    $userData=$logIn->fetch();
    if(empty($userData)){
        $_SESSION['userName']="<strong style=color:green>logIn successfully</strong>";
        header("Location:../index.php");
    }else{
        $_SESSION['errors']="<strong style=color:red>errors</strong>";
          header("Location:../index.php");
    }
}else{
        
        $_SESSION['error']="<strong style=color:red>Email not found</strong>";
        header("Location:../index.php");
    }



// if(count($checkEmail) !=0){


//     $logIn = $cont->prepare("SELECT * FROM users WHERE email=? AND password=? LIMIT 1");
//     $logIn->execute([$email,$password]);

//     $userData = $logIn->fetch();
//     if (!empty($userData)) {
//         $_SESSION['userName']=$userData['name'];
//         header("Location:../index.php");

//     }else
//     {
//         $errors[] = "password not found";
//         $_SESSION['errors']=$errors;
//         header("Location:../index.php");
//     }
    
// }else{
//     $errors[] = "Email not found";
//     $_SESSION['errors']=$errors;
//     header("Location:../index.php");
// }


}
