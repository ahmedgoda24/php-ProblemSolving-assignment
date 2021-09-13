<?php
include('db.php');
class show{
    public static function data(){
        global $con;
        $sql = "SELECT * FROM users";
        $user = $con->prepare($sql);
        $user->execute();
        return $user->fetchAll(PDO::FETCH_CLASS);

    }
}