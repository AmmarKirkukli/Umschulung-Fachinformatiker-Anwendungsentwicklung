


<?php
$basePath = '../../../Umschulung-Fachinformatiker-Anwendungsentwicklung-Schuler/user/img/';
$isLoggedIn = isset($_SESSION["user_id"]);
$username = $_SESSION['username'] ?? '';

$navMenu = [
    ['action' => 'home', 'label' => 'Home'],
    ['action' => 'seminarUser', 'label' => 'Seminar'],
    ['action' => 'about', 'label' => 'About'],
    ['action' => 'products', 'label' => 'Products'],
    ['action' => 'team', 'label' => 'Team'],
    ['action' => 'profile', 'label' => 'Profile']
];
?>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand " href="index.php?action=home">
            <img class="logo1" src="<?php echo $basePath; ?>schule-logo2.png" alt="Schule Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars-progress"></i>
        </button>
        <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach ($navMenu as $item): ?>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-3 fs-5 fw-semibold" href="index.php?action=<?php echo $item['action']; ?>">
                        <?php echo $item['label']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>

            <div class="search ps-3 pe-0 d-none d-lg-block me-3">
                <i class="fa-solid fa-magnifying-glass fa-lg"></i>
            </div>

            <ul class="navbar-nav menu-member ms-auto">
                <?php if ($isLoggedIn): ?>
                    <li class="nav-item me-2">
                        <a class="nav-link p-2 p-lg-3 fs-5 fw-semibold" href="index.php?action=profile">
                            <?php echo htmlspecialchars($username); ?>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="btn btn-outline-secondary rounded-pill main-btn" href="index.php?action=logout">
                            Logout
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-secondary rounded-pill main-btn" href="index.php?action=register">
                            Sign in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary rounded-pill main-btn" href="index.php?action=login">
                            Login
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>