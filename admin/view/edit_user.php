

<?php
if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=loginAdmin");
    exit();
}

// Validierung der User-Daten
if (!isset($user) || !is_array($user) || empty($user['user_id'])) {
    echo "<div class='alert alert-danger m-3'>User nicht gefunden!</div>";
    exit;
}
?>

<div class="container my-4">
    <h2>Edit User</h2>
    
    <form method="post" action="index.php?action=update&id=<?php echo (int)$user['user_id']; ?>" class="mt-3">
        
        <div class="mb-3">
            <label class="form-label" for="username">Username:</label>
            <input type="text" 
                   name="username" 
                   id="username"
                   class="form-control border border-info border-3" 
                   value="<?php echo htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'); ?>" 
                   required 
                   maxlength="50">
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password:</label>
            <input type="password" 
                   name="password" 
                   id="password"
                   class="form-control border border-info border-3" 
                   placeholder="Leave blank to keep current password"
                   minlength="6"
                   maxlength="100">
            <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Email:</label>
            <input type="email" 
                   name="email" 
                   id="email"
                   class="form-control border border-info border-3" 
                   value="<?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?>" 
                   required 
                   maxlength="100">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-outline-info">
                <i class="fas fa-save"></i> Update User
            </button>
            <a class="btn btn-outline-secondary" href="index.php?action=userlist">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </form>
</div>



