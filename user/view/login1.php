
<?php
$action = './include/login.inc.php';
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-3">Login</h2>
            <div class="card p-4 mb-5">
                <form action="<?php echo $action; ?>" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">Benutzername</label>
                        <input id="username" name="username" type="text" class="form-control" placeholder="Benutzername" required maxlength="50">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Passwort</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Passwort" required minlength="8">
                    </div>
                    <P>Benutzername: ammartest , Passwort: 00123123</P>
                    <div class="d-flex gap-2">
                        <button type="submit" name="submit" class="btn btn-primary rounded-pill">Login</button>
                        <a class="btn btn-outline-secondary rounded-pill" href="index.php?action=register">Registrieren</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
