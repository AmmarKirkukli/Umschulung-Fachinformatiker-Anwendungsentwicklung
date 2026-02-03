

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/css/all.min.css">
    <link rel="stylesheet" href="./css/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body class="body1">
    <?php include './view/navbarAdmin.php';?>
    
<div class="body1">
<?php



include_once(__DIR__ . '/model/config.php');
include_once(__DIR__ . '/model/db.php');
include_once(__DIR__ . '/controller/UserController.php');
include_once(__DIR__ . '/controller/subscribeController.php');
include_once(__DIR__ . '/model/Database.php');
include_once(__DIR__ . '/controller/seminarController.php');

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'NULL';
$view = $action;

$userController = new UserController(); 

$subscribeController = new subscribeController(); 

$PostController =new PostController();

switch ($action) {
    case 'homeAdmin':
        require 'view/homeAdmin.php';
        break;

    case 'Students Profile':
        require 'view/students_Profile.php';
        break;

    case 'userlist':
        $userController->userList();
        break;

    case 'subscribelist':
        $subscribeController->subscribeList();
        break;

    case 'subscribelistdelete':
        $subscribe_id = $_GET['id'];
        $subscribeController->deleteSubscribe($subscribe_id);
        break;

    case 'profileAdmin':
        require 'view/profileAdmin.php';
        break;

    case 'loginAdmin':
        require 'view/login_view.php';
        break;

    case 'logoutAdmin':
        require './include/logoutAdmin.php';
        break;

    case 'edit':
        $user_id = $_GET['id'];
        $userController->editUser($user_id);
        break;

    case 'update':
        $user_id = $_GET['id'];
        $userController->updateUser($user_id);
        break;

    case 'delete':
        $user_id = $_GET['id'];
        $userController->deleteUser($user_id);
        break;

// ---------------

    case 'seminar':
        require './view/seminar.php';
        break;  

    case 'seminarNew':
        require './view/seminarNew.php';
        break; 

    case 'deletePost':
        $post_id = $_GET['id'];
        $PostController->delete($post_id);
        break;

    case 'editPost':
        $post_id = $_GET['id'];
        $PostController->show($post_id);
        break;  

    case 'updatePost':
        require './model/editPost.php';
        $post_id = $_GET['id'];
        $PostController->edit($data);
        break;  

    default:
        require 'view/homeAdmin.php';
        break;
}
?>
</div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/all.min.js"></script>
</body>
</html>
