<?php  include('inc/header.php');  ?> 
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center display-4 border my-5 p-2"> Login</h1>
            </div>
            <div class="col-sm-6 mx-auto">
                <div class="border p-5 my-3">
                <div class="col-sm-6 mx-auto">
                <?php if(isset($_SESSION['error'])): ?> 
                    <h5 class="bg-danger text-center p-3"> <?php echo $_SESSION['error']; ?>  </h5>
                    <?php unset($_SESSION['error']) ?>
                <?php  endif; ?>
                    <form action="handler/changepassword.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" placeholder="Your old passwod">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password" placeholder="Your new passwod">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm passwod">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-block btn-primary"  value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php  include('inc/footer.php');  ?> 
