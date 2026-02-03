
<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php?action=login');
    exit();
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$currentUsername = $_SESSION['username'] ?? '';
$currentEmail = $_SESSION['email'] ?? '';
$action = './include/updateUser.inc.php';
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <h2 class="mb-3">Profil bearbeiten</h2>
            <div class="card p-4">
                <form action="<?php echo $action; ?>" method="POST" novalidate>
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

                    <div class="mb-3">
                        <label for="new_username" class="form-label">Benutzername</label>
                        <input id="new_username" name="new_username" type="text" class="form-control" value="<?php echo htmlspecialchars($currentUsername); ?>" maxlength="50" required>
                    </div>

                    <div class="mb-3">
                        <label for="new_email" class="form-label">E-Mail</label>
                        <input id="new_email" name="new_email" type="email" class="form-control" value="<?php echo htmlspecialchars($currentEmail); ?>" maxlength="255" required>
                    </div>

                    <div class="mb-3">
                        <label for="new_password" class="form-label">Neues Passwort</label>
                        <input id="new_password" name="new_password" type="password" class="form-control" placeholder="Leer lassen, wenn unverändert" minlength="8">
                        <div class="form-text">Mindestens 8 Zeichen (leer lassen, falls Passwort behalten werden soll).</div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" name="submit" class="btn btn-primary rounded-pill">Speichern</button>
                        <a class="btn btn-outline-secondary rounded-pill" href="index.php?action=profile">Abbrechen</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>