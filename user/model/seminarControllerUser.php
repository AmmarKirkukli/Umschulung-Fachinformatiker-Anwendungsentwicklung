<?PHP
include ('./model/seminarModel.php');

class PostController  {


    public function posts() {
        $postModel = new PostUser;
        $posts = $postModel->getAllPosts();
        include 'C:\xampp\htdocs\Umschulung-Fachinformatiker-Anwendungsentwicklung-Schuler\admin\view\seminar.php';
    }
}

