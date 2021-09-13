
<?php  include('inc/header.php'); ?>

<?php  include('inc/validation.php'); ?>

<?php

        if(isset($_POST['submit']))
        {  
            $name =     santString($_POST['name']);
            $email =    santEmail($_POST['email']);
            $checkEmail=checkEmail($email);

            if(requiredInput($name) &&  requiredInput($email)  )
            {
               
                if(count($checkEmail)==0){
                        $id = $_POST['id'];
                        if($password)
                        {
                            $password = santString($_POST['password']);
                            $hashed_password = password_hash($password,PASSWORD_DEFAULT);

                            $sql = "UPDATE `users` SET  `name`='$name' ,`email`='$email',`password`='$hashed_password' 
                            WHERE `id`='$id' ";

                        }   
                        else 
                        {
                            $sql = "UPDATE `users` SET  `name`='$name' ,`email`='$email'  
                            WHERE `id`='$id' ";
                        }

                        $result =$con->prepare($sql);
                        $result->execute();

                        if($result)
                        {
                            $success = "Updated Successfully ";
                            header("refresh:3;url=index.php");
                        }
                  
                    else 
                    {
                        $error = "Please Type Valid Email !";
                    }
                }else
                {
               
                   $error =  "Email is Exist !";
               }
               
               
            }
            else 
            {
                $error =  "Please Fill All  Fields !";
            }
        }

?>




    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Update Info About User</h1>
  
    <?php if($error): ?>
        <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
        <a href="javascript:history.go(-1)" class="btn btn-primary"><< Go Back</a>
    <?php endif;  ?>

    <?php if($success): ?>
        <h5 class="alert alert-success text-center"><?php echo $success; ?></h5>
    <?php endif;  ?>

<?php  include('inc/footer.php'); ?>

 
  
