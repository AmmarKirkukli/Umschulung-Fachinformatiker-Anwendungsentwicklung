


<?PHP

include(__DIR__ . '/../model/seminarModel.php');



class PostController  {


    public function posts() {
        $postModel = new Post;
        $posts = $postModel->getAllPosts();
        include(__DIR__ . '/../view/seminar.php');

    }
    

    public function show($post_id) {
    $postModel = new Post;
    $posts = $postModel->getPostById($post_id);
    include(__DIR__ . '/../view/editSeminar.php');
    }

    public function create($data) {
        $postModel = new Post;
        $postModel->createPost($data);
    }

    public function edit($data) {
        $postModel = new Post;
        $postModel->updatePost($data);
        header('Location: ../admin/index.php?action=seminar');
    
    }

    public function delete($post_id) {
        $postModel = new Post;
        $postModel->deletePost($post_id);
        header('Location: ../admin/index.php?action=seminar');
    }
}



// https://ammar96.online/index.php?action=seminar
// https://ammar96.online/model/index.php?action=seminar
