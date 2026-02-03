

<?php
if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=loginAdmin");
    exit();
}
?>
 
<div class="mt-2 ms-3 newPost">
    <h2>Create a New Post</h2>
    <form method="post" action="./model/create_post.php">
        <div class="mb-3">
            <label class="form-label border-bottom border-warning" for="title">Title:</label>
            <input type="text" class="form-control me-3 border border-warning border-3 w-50" name="title" id="title" required maxlength="100" placeholder="Enter post title">
        </div>

        <div class="mb-3 postContent">
            <label class="form-label border-bottom border-warning" for="content">Content:</label>
            <textarea class="form-control border border-warning border-3 Content " name="content" id="content" rows="16" required placeholder="Enter post content"></textarea>
        </div>

        <div class="d-flex gap-2">
            <input type="submit" class="btn btn-outline-info" value="Create Post">
            <a class="btn btn-outline-secondary" href="index.php?action=seminar">Back</a>
        </div>
    </form>
</div>