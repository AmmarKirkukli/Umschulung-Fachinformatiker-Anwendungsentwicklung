<?PHP
session_start();
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$postId = isset($_GET['id']) ? $_GET['id'] : null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="./css/css/all.min.css">
    <link rel="stylesheet" href="./css/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<?PHP

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'NULL'; 
$view = $action;
?>


    <?php  include './view/navbar.php'; 
    require_once('./model/Subscribe.php');
    $postSubscribe = new postSubscribe();

    switch ($action) {
        case'home':
            include 'view/home.php';
            break;

        case 'seminarUser':
            include 'view/seminarUser.php';
            break;

        case 'subscribe':
            $post_id = $_GET['id'];
            $postSubscribe->subscribePost($userId, $postId);
            break;

        case 'unsubscribe':
            $post_id = $_GET['id'];
            $postSubscribe->unsubscribePost($userId, $postId);
            break;
    
        case'about':
            include 'view/about.php';
            break;

        case 'products':
            require 'view/products.php';
            break;

        case 'team':
            require 'view/team.php';
            break;
        
        case 'profile':
            require 'view/profile.php';
            break;

        case 'login':
            require 'view/login1.php';
            break;
        
        case 'updateUser':
            require 'view/updateUser.php';
            break;
        
        case 'register':
            require 'view/register1.php';
            break;

        case 'logout':
            require './include/logout.inc.php';
            break;

        default :
            include 'view/home.php';
            break;
    }
    ?>
    <?php  include './view/footer.php'; ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src=" ./js/all.min.js"></script>
</body>
</html>