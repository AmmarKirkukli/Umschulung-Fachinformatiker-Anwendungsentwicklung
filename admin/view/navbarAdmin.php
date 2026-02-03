
<?php session_start(); ?>
<nav class="navbar navbar-expand-lg  sticky-top pt-3  pb-3">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php?action=profileAdmin">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="index.php?action=homeAdmin">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?action=seminar">seminar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?action=userlist">userlist</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?action=subscribelist">Subscriptions</a>
            </li> 
            
           
                <?php
                
                    if(isset($_SESSION['admin_id'])) {
                ?>
                    <li class= "list-unstyled pt-1"><a class="text-decoration-none me-2 pt-4 fw-bold" href="index.php?action=profileAdmin"><?php echo $_SESSION['admin_name']; ?></a>
                    <a class="btn btn-secondary btn-sm rounded-pill main-btn" id="save-btn" class="btn btn-success" href="index.php?action=logoutAdmin" >L0GOUT</a></li>
                <?php 
                    }else {
                ?>
                    <a class="btn btn-secondary btn-sm rounded-pill main-btn pt-2" id="save-btn" class="btn btn-success" href="index.php?action=loginAdmin">LOGIN</a></1i> 
                <?php 
                    }
                
                ?>

            
        </ul>
        </div>
    </div>
</nav>


