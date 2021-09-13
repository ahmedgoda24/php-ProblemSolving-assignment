<?php  include('inc/header.php'); ?>

<?php

if(!isset($_GET['id']) or !is_numeric($_GET['id']) ){
        header("location:index.php");
    }
    $id=$_GET["id"];
    $result=$con->prepare("SELECT * FROM users WHERE id=$id LIMIT 1");
    $result->execute();
    $check  = $result->rowCount(); 
    if(!$check){
        header("location:index.php");

    }
    $result=$con->prepare("DELETE FROM `users` WHERE `id`='$id'");
    $result->execute();
    ?>

    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User hasbeen Deleted</h1>
    <?php header("refresh:1;url=index.php"); ?>
  
   
<?php  include('inc/footer.php'); ?>

 
  