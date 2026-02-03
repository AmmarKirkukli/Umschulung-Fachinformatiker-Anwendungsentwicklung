<?php 
class login extends Dbh {

    protected function getUser($username, $password) {
        $stmt = $this->connect()->prepare('SELECT password FROM users WHERE (username = ? OR email = ?)');
        
        if (!$stmt->execute(array($username, $username))) {
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            header("Location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]["password"]);

        if ($checkPwd) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE (username = ? OR email = ?) AND password = ?');
            
            if (!$stmt->execute(array($username, $username, $pwdHashed[0]["password"]))) {
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                header("Location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["user_id"] = $user[0]["user_id"];
            $_SESSION["username"] = $user[0]["username"];
            header("Location: ../index.php?action=home");
            exit();
        }
    }
}
