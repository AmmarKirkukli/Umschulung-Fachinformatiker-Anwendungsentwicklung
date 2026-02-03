


<?php
if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=loginAdmin");
    exit();
}

include_once(__DIR__ . '/../model/seminarModel.php');
include_once(__DIR__ . '/../model/Database.php');

$posts = new Post();

// Validierung der ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<div class='alert alert-danger m-3'>Ungültige Post-ID!</div>";
    exit;
}

$post_id = (int)$_GET['id'];
$con = $posts->getPostById($post_id);

if (!$con) {
    echo "<div class='alert alert-danger m-3'>Post nicht gefunden!</div>";
    exit;
}
?>

<div class="m-3">
    <h2>Edit Post</h2>
    <form method="post" action="index.php?action=updatePost&id=<?php echo htmlspecialchars($con['post_id']); ?>">
        
        <div class="mb-3">
            <label class="form-label" for="title">Title:</label>
            <input type="text" 
                   name="title" 
                   id="title"
                   class="form-control border border-info border-3" 
                   value="<?php echo htmlspecialchars($con['title']); ?>" 
                   required 
                   maxlength="100">
        </div>

        <div class="mb-3">
            <label class="form-label" for="content">Content:</label>
            <textarea name="content" 
                      id="content"
                      rows="16"
                      class="form-control border border-info border-3" 
                      required><?php echo htmlspecialchars($con['content']); ?></textarea>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-outline-info">Update Post</button>
            <a class="btn btn-outline-secondary" href="index.php?action=seminar">Back</a>
        </div>
    </form>
</div>











