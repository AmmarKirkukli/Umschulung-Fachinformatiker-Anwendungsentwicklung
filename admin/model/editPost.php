<?php
include_once(__DIR__ . '/../model/seminarModel.php');
require_once(__DIR__ . '/../model/Database.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

 
    $post_id = $_GET['id']; 
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';

    $newPost = new Post();

    $data = [
        'title' => $title,
        'content' => $content,
        'post_id' => $post_id,
    ];

}
?>

