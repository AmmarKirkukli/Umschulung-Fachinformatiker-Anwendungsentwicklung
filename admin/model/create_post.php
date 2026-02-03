<?php

include_once(__DIR__ . '/../model/seminarModel.php');
require_once(__DIR__ . '/../model/Database.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';

    $newPost = new Post(); 

    $data = [
        'title' => $title,
        'content' => $content,
    ];

    if ($newPost->createPost($data)) {
        header('Location: ../index.php?action=seminar');
        exit();
    } else {
        echo 'Error creating the post.';
    }
}



?>
