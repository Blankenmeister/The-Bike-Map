<?php include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="container mt-4">
<div class="d-flex justify-content-end my-5">
    <a href="<?= Domain . HOME_URL ?>signout" class=" btn-bg-green rounded-pill px-3 py-2 " role="button">Déconnexion</a>
  </div>
    
    <div class="role-content">
        <?php
        if ($user->getRole()->getName() === 'Admin') {
            include_once __DIR__ . '/admin.php';
        } elseif ($user->getRole()->getName() === 'User') {
            include_once __DIR__ . '/../User/user.php';
        } else {
            echo '<div class="alert alert-warning">Erreur - veuillez vous déconnecter</div>';
        };
        ?>
    </div>
</div>

<?php include_once __DIR__ . '/../Includes/footer.php'; ?>