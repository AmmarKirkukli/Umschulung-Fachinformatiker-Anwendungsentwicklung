<?php

$host = "localhost";
$dbname = "Umschulung-Fachinformatiker-Anwendungsentwicklung-Schuler";
$user = "root";
$pass = "";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    die("Fehler bei der Verbindung zur Datenbank: " . $e->getMessage());
}

class PostSubscribe {

    function subscribePost($userId, $postId) {
        global $dbh;

        $stmt = $dbh->prepare("INSERT INTO subscriptions (user_id, post_id) VALUES (?, ?)");
        $stmt->execute([$userId, $postId]);
        
        header('Location: ./index.php?action=seminarUser');
        exit();
    }

    function unsubscribePost($userId, $postId) {
        global $dbh;

        $stmt = $dbh->prepare("DELETE FROM subscriptions WHERE user_id = ? AND post_id = ?");
        $stmt->execute([$userId, $postId]);
        header('Location: ./index.php?action=seminarUser');
        exit();
    }
}

            $postId = isset($_GET['id']) ? $_GET['id'] : null;
            $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        if (isset($_GET['action'])) {
            // $postId = isset($_GET['id']) ? $_GET['id'] : null;
            // $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

            if ($postId == null && $userId == null) {
                $postSubscribe = new PostSubscribe();

                if ($_GET['action'] === 'subscribe') {
                    $postSubscribe->subscribePost($userId, $postId);
                } elseif ($_GET['action'] === 'unsubscribe') {
                    $postSubscribe->unsubscribePost($userId, $postId);
                }
                // header('Location: ./index.php?action=home');
                // exit();
            }  
        
        }
?>

