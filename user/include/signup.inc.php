<?php

    if(isset($_POST["submit"])) 
    {

        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];


    include "../model/dbh.cla.php";
    include "../model/signup.class.php";
    include "../model/signup-contr.cla.php";


    $signup = new signupContr($username, $password, $email );

    $signup->signupUser(); 

    header("Location: ../index.php?action=login");
    
    
    }
    else {
        header("Location: ../index.php?action=register");
        exit(); 
    }


