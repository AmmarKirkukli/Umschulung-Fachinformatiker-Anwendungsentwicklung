
<?php
// Simple registration form view - use server-side validation in include/signup.inc.php
$action = './include/signup.inc.php';
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-3">Registrierung</h2>
            <div class="card p-4">
                <form action="<?php echo $action; ?>" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">Benutzername</label>
                        <input id="username" name="username" type="text" class="form-control" placeholder="Benutzername" required maxlength="50">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <input id="email" name="email" type="email" class="form-control" placeholder="email@example.com" required maxlength="255">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Passwort</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Mind. 8 Zeichen" required minlength="8">
                        <div class="form-text">Verwenden Sie mindestens 8 Zeichen, vorzugsweise mit Zahlen und Sonderzeichen.</div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" name="submit" class="btn btn-primary rounded-pill">Registrieren</button>
                        <a class="btn btn-outline-secondary rounded-pill" href="index.php?action=login">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>