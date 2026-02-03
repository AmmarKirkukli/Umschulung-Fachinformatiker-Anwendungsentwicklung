<?php
class PostUser {
    private $db;

    public function __construct() {
        $this->db = new DatabaseUser;
    }

    public function getAllPosts() {
        $this->db->query('SELECT * FROM posts ORDER BY created_at DESC');
        return $this->db->resultSet();
    }
}
