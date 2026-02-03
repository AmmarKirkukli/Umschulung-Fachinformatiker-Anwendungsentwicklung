


<?php
if (isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=home");
    exit();
}

$error = isset($_GET['error']) ? htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8') : '';
?>

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="card-title text-center mb-4">
                        <i class="fas fa-lock"></i> Admin Login
                    </h1>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <form action="controller/login_controller.php" method="post" novalidate>
                        <div class="mb-3">
                            <label for="username" class="form-label">
                                <i class="fas fa-user"></i> Username:
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   name="username" 
                                   id="username" 
                                   placeholder="Enter your username"
                                   required 
                                   autofocus
                                   autocomplete="username">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">
                                <i class="fas fa-key"></i> Password:
                            </label>
                            <input type="password" 
                                   class="form-control" 
                                   name="password" 
                                   id="password" 
                                   placeholder="Enter your password"
                                   required
                                   autocomplete="current-password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </form>

                    <hr class="my-4">
                    
                    <div class="alert alert-info alert-sm" role="alert">
                        <small>
                            <strong>Demo Credentials:</strong><br>
                            <i class="fas fa-user"></i> Username:<code>ammar66</code><br>
                            <i class="fas fa-key"></i> Password:<code>123123</code>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>