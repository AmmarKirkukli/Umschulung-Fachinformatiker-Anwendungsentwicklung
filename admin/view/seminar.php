

<?php
if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=loginAdmin");
    exit();
}

include_once(__DIR__ . '/../model/seminarModel.php');
include_once(__DIR__ . '/../model/Database.php');
$posts = new Post();
$con = $posts->getAllPosts();
?>

<a class="btn btn-outline-secondary btn-lg rounded-pill main-btn me-5 ms-5 mt-2 mb-2" id="save-btn" href="index.php?action=seminarNew">Seminar New</a>
<div class="ms-auto mb-2 mb-lg-0">
    <h1>Blog Post</h1>
    <div>

        <table style="width: 100%;" >
            <?php if (isset($con) && count($con) > 0) : ?>
                <?php foreach ($con as $post) : ?>
                    <tr class="border border-primary ">
                        <td >
                          <p class="ps-3 pt-1"> Created At : <?php echo $post['created_at']; ?> </p>
                            <h3 class="ps-3 "> Title :  <?php echo $post['title']; ?>   </h3>
                            <p class="tdA p-3 "> <b>Content :</b>  <?php echo $post['content']; ?>  </p>
                        </td>

                        <td style="width: 10%;" class="p-2">
                            <button type="button" class="btn btn-outline-info mb-2 "><a class="text-decoration-none " href="../admin/index.php?action=editPost&id=<?php echo $post['post_id']; ?>">Edit</a></button>

                            <button type="button" class="btn btn-outline-danger  text-decoration-none mb-2"><a class="text-decoration-none" href="../admin/index.php?action=deletePost&id=<?php echo $post['post_id']; ?>">Delete</a> </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3">No posts found.</td>
                </tr>
            <?php endif; ?>
        </table>