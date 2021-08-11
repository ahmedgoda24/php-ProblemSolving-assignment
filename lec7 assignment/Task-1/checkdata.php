
<?php
class auth{
    
           public $data = [
                       ['goda@gmail.com', "12345"],
                       ['test@gmail.com',"1234"],
                       ['ahmed@cloud.com',"123"]
                   ];
        
           public $userDataInClass;
        
           public function login()
           {
              if(in_array($this->userDataInClass, $this->data))
              {
                  return "email and password valid";

              }
              else{
                 return "email and password invalid";
              }
        
           }
        
        
        }
        
        
        
        if(isset($_POST['submit']))
        {
           $userDataFromUser = [$_POST['email'], $_POST['password']];
        
           $user = new auth();
           $user->userDataInClass = $userDataFromUser;
        
        
           echo $user->login();
        }

?>
