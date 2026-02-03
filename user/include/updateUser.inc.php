<?php
 session_start();


if (isset($_POST['submit'])) {
   
    $new_username = $_POST['new_username'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);
    $new_email = $_POST['new_email'];
    $username = $_SESSION['username'];
   
    include "../model/dbh.cla.php";
    include "../model/updateUser.class.php";
    include "../model/updateUser-contr.cla.php";



    $update = new updateUserContr($new_username, $new_password, $new_email, $username);
 
    $update->updateUsers(); 

    $_SESSION['username'] = $new_username;

    header("Location: ../index.php?action=home");

} else {
    header("Location: ../index.php?action=updateUser");
    
}
?>