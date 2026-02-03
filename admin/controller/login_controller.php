<?php
include_once(__DIR__ . '/../model/admin_model.php');

class AdminController {
    private $model;

    public function __construct(AdminModel $model) {
        $this->model = $model;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $admin = $this->model->verifyAdminCredentials($username, $password);

            if ($admin) {
                // Valid login
                session_start();
                $_SESSION['admin_id'] = $admin['admin_id'];
                $_SESSION['admin_name'] = $admin['username'];
                header('Location: ../index.php?action=profileAdmin');
                exit();
            } else {
                // Invalid login
                echo "Invalid username or password";
            }
        }

        include_once(__DIR__ . '/../view/login_view.php');
    }

    public function islogin(){
        $erg=false;
        if(isset($_SESSION['admin_name'])){
            $erg=true;
        }
        return $erg;
        
    }
}

include(__DIR__ . '/../model/db.php');

   

    $model = new AdminModel($db);
    $controller = new AdminController($model);
    $controller->login();
