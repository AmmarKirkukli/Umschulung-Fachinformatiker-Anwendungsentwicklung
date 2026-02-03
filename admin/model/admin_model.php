


<?php
class AdminModel {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function verifyAdminCredentials($username, $password) {
        $query = "SELECT * FROM admins WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && $password === $admin['password']) {
            return $admin;
        } else {
            return false;
        }
    }
}
