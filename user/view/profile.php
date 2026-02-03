<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php?action=login');
    exit();
}

$basePath = './img/';
$userId = $_SESSION['user_id'];
$username = $_SESSION['username'] ?? '';
$email = $_SESSION['email'] ?? '';
$avatar = $_SESSION['avatar'] ?? 'man1.png';
?>

<div class="flex-content mt-4 mb-4" style="min-height: 440px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-9">
                <div class="card shadow-sm">
                    <div class="card-body d-flex gap-3 align-items-center">
                        <img src="<?php echo htmlspecialchars($basePath . $avatar); ?>" alt="<?php echo htmlspecialchars($username); ?> avatar" class="rounded-circle" style="width:96px; height:96px; object-fit:cover;">
                        <div class="flex-grow-1">
                            <h4 class="mb-1"><?php echo htmlspecialchars($username); ?></h4>
                            <?php if ($email): ?>
                                <p class="mb-1 text-muted small"><?php echo htmlspecialchars($email); ?></p>
                            <?php endif; ?>
                            <div class="mt-2">
                                <a class="btn btn-sm btn-outline-secondary rounded-pill me-2" href="index.php?action=updateUser">Profil bearbeiten</a>
                                <a class="btn btn-sm btn-outline-danger rounded-pill" href="index.php?action=logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

