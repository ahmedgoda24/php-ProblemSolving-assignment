<?php

class auth{
    
       public $data = [
                   ["goda@gmail.com", "12345", "12345"],
                   ["ahmed@gmail.com", "1234", "1234"],
                   ["mohamed@gmail.com", "123", "123"],
               ];
    
       public $userDataInClass;
    
       public function login()
       {
          if(in_array($this->userDataInClass, $this->data))
          {
              return "email,password and repassword is valid";
          }else{
              return "email,password and repassword is invalid";
          }
    
       }
    
    
    }
    
    
    
    if(isset($_POST['submit']))
    {
        $email=$_POST["email"];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is a valid email address");
        } else {
        echo("$email is not a valid email address ");
        }
        echo "<br> <hr>";
       $userDataFromUser = [$_POST["email"], $_POST['password'], $_POST['repassword']];
    
       $user = new auth();
       $user->userDataInClass = $userDataFromUser;
    
    
       echo $user->login();
    }

?> 

<table>
    <tr>
        <th>email</th>
        <th>password</th>
        <th>repassword</th>

    </tr>
            <tr>
                <td><?php echo $email?></td>
                <td><?php echo$_POST['password']?></td>
                <td><?php echo $_POST['repassword']?></td>
            </tr>
</table>

