<?php
if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php?action=loginAdmin");
    exit();
}

// Debug: Überprüfe ob Variablen existieren
if (!isset($subscribes)) {
    echo "<div class='alert alert-warning m-3'><i class='fas fa-exclamation'></i> Subscriptions-Variable nicht gefunden</div>";
    $subscribes = [];
}
?>

<div class="container my-4">
    <h2 class="mb-4">
        <i class="fas fa-bell"></i> Subscriptions Management
    </h2>
    
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="width:20%" class="ps-3">Subscriber</th>
                    <th scope="col" style="width:20%" class="ps-3">Email</th>
                    <th scope="col" style="width:35%" class="ps-3">Post Title</th>
                    <th scope="col" style="width:15%" class="ps-3">Date</th>
                    <th scope="col" style="width:10%" class="text-end pe-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($subscribes) > 0): ?>
                    <?php foreach ($subscribes as $subscribe): ?>
                        <tr>
                            <td class="ps-3">
                                <i class="fas fa-user"></i> 
                                <?php echo htmlspecialchars($subscribe['username'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                            </td>
                            <td class="ps-3">
                                <a href="mailto:<?php echo htmlspecialchars($subscribe['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                                    <?php echo htmlspecialchars($subscribe['email'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </td>
                            <td class="ps-3">
                                <a href="index.php?action=editPost&id=<?php echo (int)($subscribe['post_id'] ?? 0); ?>" 
                                   title="View post">
                                    <?php echo htmlspecialchars($subscribe['title'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </td>
                            <td class="ps-3">
                                <small class="text-muted">
                                    <?php 
                                    try {
                                        echo date('d.m.Y H:i', strtotime($subscribe['created_at'] ?? 'now'));
                                    } catch (Exception $e) {
                                        echo 'N/A';
                                    }
                                    ?>
                                </small>
                            </td>
                            <td class="text-end pe-3">
                                <a href="index.php?action=subscribelistdelete&id=<?php echo (int)($subscribe['id'] ?? 0); ?>" 
                                   class="btn btn-outline-danger btn-sm" 
                                   title="Remove subscription"
                                   onclick="return confirm('Remove this subscription?');">
                                    <i class="fas fa-trash"></i> Remove
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <i class="fas fa-inbox fa-2x text-muted mb-2"></i>
                            <p class="text-muted mb-0">No subscriptions found.</p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
