
<?php
if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=loginAdmin");
    exit();
}
?>

<div class="container my-4">
    <h2 class="mb-4">User Management</h2>
    
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="width:30%" class="ps-3">Username</th>
                    <th scope="col" style="width:45%" class="ps-3">Email</th>
                    <th scope="col" style="width:25%" class="text-end pe-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($users) && is_array($users) && count($users) > 0): ?>
                    <?php foreach ($users as $user) :  ?>
                        <tr>
                            <td class="ps-3"><?php echo htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td class="ps-3"><?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td class="text-end pe-3">
                                <a href="index.php?action=edit&id=<?php echo (int)$user['user_id']; ?>" 
                                   class="btn btn-outline-info btn-sm me-2" 
                                   title="Edit user">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="index.php?action=delete&id=<?php echo (int)$user['user_id']; ?>" 
                                   class="btn btn-outline-danger btn-sm" 
                                   title="Delete user"
                                   onclick="return confirm('Are you sure you want to delete this user?');">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center py-4">
                            <i class="fas fa-users fa-2x text-muted mb-2"></i>
                            <p class="text-muted mb-0">No users found.</p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


