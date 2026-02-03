<?php  

    if(isset($_POST["submit"])) 
    {

            $username = $_POST["username"];
            $password = $_POST["password"];


        include "../model/dbh.cla.php";
        include "../model/login.class.php";
        include "../model/login-contr.cla.php";

        $login = new LoginContr($username, $password);

        $login->loginUser(); 

        header("location: ../index.php?action=home");
    }
    else {
        header("location: ../index.php?action=home");
        exit(); 
    }   

?>

