<?php 


class updateUser extends Dbh {
    
    protected function setUpdate($new_username, $new_password, $new_email, $username) {
        try {
            $stmt = $this->connect()->prepare('UPDATE users SET username = ?, password = ?, email = ? WHERE username = ?');
            $stmt->execute([$new_username, $new_password, $new_email, $username]);
            header("Location: index.php?action=profile.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }           
    } 
}
