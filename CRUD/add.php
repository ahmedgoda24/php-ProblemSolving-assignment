<?php include('inc/header.php');


?>
<?php include('inc/validation.php');
?>

<?php
if (isset($_POST['submit'])) {
    $name =     santString($_POST['name']);
    $email =    santEmail($_POST['email']);
    $password = santString($_POST['password']);
    $checkEmail=checkEmail($email);
    if (requiredInput($name) && requiredInput($email) && requiredInput($password)) {

        if(count($checkEmail)==0){
        $user = $con->prepare("INSERT INTO users(name,email,password) VALUES (?,?,?)");
        $user->execute([$name, $email, $password]);
        $success = "Added Successfully ";
        // $_SESSION["success"] = "data added";
        // header("Location:add.php");
        }
        else
         {
        //     $_SESSION["errors"] = "Email is Exist";
            // header("Location:add.php");
            $error =  "Email is Exist !";
        }
    } 
    else
     {
        // $_SESSION["error"] = "please add all fields";
        
        // header("Location:add.php");
        $error =  "Please Fill All  Fields !";

    }
}
?>

<h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
<?php if($error): ?>
        <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
    <?php endif;  ?>

    <?php if($success): ?>
        <h5 class="alert alert-success text-center"><?php echo $success; ?></h5>
    <?php endif;  ?>
<?php /* if (isset($_SESSION['success'])) : ?>
    <!-- <h5 class="bg-success text-center p-3"> <?php echo $_SESSION['success']; ?> </h5> -->
    <?php unset($_SESSION['success']) ?>
<?php endif; ?>
<?php if (isset($_SESSION['error'])) : ?>
    <h5 class="bg-success text-center p-3"> <?php echo $_SESSION['error']; ?> </h5>
    <?php unset($_SESSION['error']) ?>
<?php endif; ?>
<?php if (isset($_SESSION['error'])) : ?>
    <h5 class="bg-success text-center p-3"> <?php echo $_SESSION['errors']; ?> </h5>
    <?php unset($_SESSION['error']) ?>
<?php endif; */?>

<div class="col-md-6 offset-md-3">
    <form class="my-2 p-3 border" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="exampleInputName1">Full Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" minlength="3">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" maxlength="20">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('inc/footer.php'); ?>