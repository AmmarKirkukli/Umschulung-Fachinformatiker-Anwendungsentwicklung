


<?php
class Post {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPosts() {
        $this->db->query('SELECT * FROM posts ORDER BY created_at DESC');
        return $this->db->resultSet();
    }

    public function getPostById($post_id) {
        $this->db->query('SELECT * FROM posts WHERE post_id = :post_id');
        $this->db->bind(':post_id', $post_id);
        return $this->db->single();
    }

    public function createPost($data) {
        $this->db->query("INSERT INTO posts (title, content) VALUES (:title, :content)");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        return $this->db->execute();
    }

    public function updatePost($data) {
        $this->db->query("UPDATE posts SET title = :title, content = :content WHERE post_id = :post_id");
        $this->db->bind(':post_id', $data['post_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        return $this->db->execute();
    }

    public function deletePost($post_id) {
        // First delete all subscriptions for this post
        $this->db->query("DELETE FROM subscriptions WHERE post_id = :post_id");
        $this->db->bind(':post_id', $post_id);
        $this->db->execute();
        
        // Then delete the post
        $this->db->query("DELETE FROM posts WHERE post_id = :post_id");
        $this->db->bind(':post_id', $post_id);
        return $this->db->execute();
    }
}
