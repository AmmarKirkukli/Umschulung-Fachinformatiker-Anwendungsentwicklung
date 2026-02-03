<?php
class UserModel {
    private $db;

    public function getAllUsers() {
        $stmt = $this->db->query('SELECT * FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function __construct() {
        $db_host = 'localhost';
        $db_name = 'Umschulung-Fachinformatiker-Anwendungsentwicklung-Schuler';
        $db_user = 'root';
        $db_password = '';
    
        $this->db = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getUserById($user_id) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE user_id = ?');
        $stmt->execute([$user_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($user_id, $username, $password, $email) {
        $stmt = $this->db->prepare('UPDATE users SET username=?, password=?, email=? WHERE user_id=?');
        $stmt->execute([$username, $password, $email, $user_id]);
    }

    public function deleteUser($user_id) {
        $stmt = $this->db->prepare('DELETE FROM users WHERE user_id = ?');
        $stmt->execute([$user_id]);
    }
}
