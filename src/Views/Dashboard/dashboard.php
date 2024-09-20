<?php include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="container mt-4">
    <div class="d-flex justify-content-end align-items-center">
        <a href="<?= Domain . HOME_URL ?>signOut" class="btn rounded-pill">Déconnexion</a>

    </div>

    <div class="role-content">

        <?php

        echo '<pre>';
      var_dump($user);
      echo '</pre>';
      die;
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