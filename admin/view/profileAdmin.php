<?php
if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=loginAdmin");
    exit();
}
?>

<div class="container my-4">
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <h2 class="alert-heading">
            <i class="fas fa-user-circle"></i> Welcome, <?php echo htmlspecialchars($_SESSION['admin_name'], ENT_QUOTES, 'UTF-8'); ?>
        </h2>
        <hr>
        <p class="mb-0">You are logged in as an administrator. You have full access to manage all site content and users.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="d-flex gap-2">
        <a class="btn btn-outline-danger" href="index.php?action=logoutAdmin">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <a class="btn btn-outline-info" href="index.php?action=home">
            <i class="fas fa-home"></i> Dashboard
        </a>
    </div>
</div>