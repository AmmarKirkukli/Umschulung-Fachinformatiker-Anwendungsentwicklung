
<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?action=login");
    exit();
}

include_once './model/seminarModelUser.php';
include_once './model/DatabaseUser.php';

$posts = new PostUser();
$con = $posts->getAllPosts();


function isSubscribed($userId, $postId)
{
    global $dbh;

    $stmt = $dbh->prepare("SELECT * FROM subscriptions WHERE user_id = ? AND post_id = ?");
    $stmt->execute([$userId, $postId]);
    
    return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
}
?>

<div class="flex-content" style="min-height: 500px;">
    <h1>Blog Post</h1>

        <table style="width: 100%;" >
        
            <?php if (isset($con) && count($con) > 0) : ?>
                <?php foreach ($con as $post) : ?>
                    <tr class="border border-primary ">

                        <td >
                        <p class="ps-3 pt-1"> Created At : <?php echo $post['created_at']; ?> </p>
                            <h3 class="ps-3 "> Title :  <?php echo $post['title']; ?>   </h3>
                            <p class="tdA ps-3 "> <b>Content :</b>  <?php echo $post['content']; ?>  </p>
                        </td>

                        <td style="width: 10%;" class="p-2">
                        <?php
                        $postId = $post['post_id'];
                        $userId = $_SESSION['user_id'];

                        if (isSubscribed($userId, $postId)) {
                            echo "<a href='index.php?action=unsubscribe&id=$postId' class='btn btn-outline-danger text-decoration-none mb-2'>Nicht Teilnahmen</a>";
                        } else {
                            echo "<a href='index.php?action=subscribe&id=$postId' class='btn btn-outline-info mb-2'>Teilnahmen</a>";
                        }
                        ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3">No posts found.</td>
                </tr>
            <?php endif; ?>
        </table>
</div>