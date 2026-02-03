<?php

include_once(__DIR__ . '/config.php');

class subscribeModel {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
 
    public function getAllsubscribe() {
        $stmt = $this->db->query('
            SELECT 
                s.id,
                s.user_id,
                s.post_id,
                u.username,
                u.email,
                p.title,
                p.created_at
            FROM subscriptions s
            JOIN users u ON s.user_id = u.user_id
            JOIN posts p ON s.post_id = p.post_id
            ORDER BY s.id DESC
        ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function deleteSubscribeById($subscribe_id) {
        $stmt = $this->db->prepare('DELETE FROM subscriptions WHERE id = :id');
        $stmt->bindParam(':id', $subscribe_id, PDO::PARAM_INT);
        return $stmt->execute();
    }

}    