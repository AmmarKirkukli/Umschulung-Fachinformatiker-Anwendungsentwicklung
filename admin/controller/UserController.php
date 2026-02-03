<?php

include_once(__DIR__ . '/../model/userModel.php');


class UserController {
    public function editUser($user_id) {
        $userModel = new UserModel();
        $user = $userModel->getUserById($user_id);
        include(__DIR__ . '/../view/edit_user.php');
    }

    public function updateUser($user_id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $email = $_POST['email'];

            $userModel = new UserModel();
            $userModel->updateUser($user_id, $username, $password, $email);
        }
        header('Location: ../admin/index.php?action=userlist');
    }

    public function deleteUser($user_id) {
        $userModel = new UserModel();
        $userModel->deleteUser($user_id);
        header('Location: ../admin/index.php?action=userlist');
    }
    
    public function userList() {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        include(__DIR__ . '/../view/user_list.php');

    }
    
}

?>