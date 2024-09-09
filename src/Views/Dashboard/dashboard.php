<?php include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="container mt-4">
    <div class="d-flex justify-content-end align-items-center">
        <a href="<?= Domain . HOME_URL ?>deconnexion" class="btn rounded-pill">Déconnexion</a>

    </div>

    <div class="role-content">
        <?php
        if ($_SESSION['role'] === 'admin')
        {
            include_once __DIR__ . '/admin.php';

        }elseif ($_SESSION['role'] === 'user')

        {
            include_once __DIR__ . '/../user.php';

        }else{

            echo '<div class="alert alert-warning">Erreur - veuillez vous déconnecter</div>';
            
        };
        ?>
    </div>
</div>
    

<?php include_once __DIR__ . '/../Includes/footer.php'; ?> 