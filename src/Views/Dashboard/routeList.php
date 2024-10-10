<?php

use src\Services\Routing;

include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="container my-5">

  <a href="<?= Domain . HOME_URL . 'dashboard' ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#22A737" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
    </svg>
  </a>


  <?php if (isset($success)) { ?>
    <div class="alert alert-success">Vous êtes connecté avec succès : <?php echo $success; ?></div>
  <?php } ?>

  <?php if (isset($success)) { ?>
    <div class="alert alert-success">Vous êtes connecté avec succès : <?php echo $success; ?></div>
  <?php } ?>

  <?php
  if (isset($message)) {
    echo "<p>$message</p>";  // Le message de connexion s'affiche ici
  }
  ?>

  <h5 class="title-signin text-center mb-3">Ajouter un parcours</h5>

  <div class="d-flex justify-content-center">
    <a href="<?= Domain . HOME_URL ?>dashboard/route/create" class=" btn-bg-green rounded-pill px-3 py-2 " role="button">Ajouter un parcours</a>
  </div>

  <div class="line my-4"></div>

  <h1 class="title-list mb-3">LES PARCOURS</h1>

  <?php

  foreach ($routes as $route) { ?>
    <div class="routeCard">
      <p class="name-list"><?= $route->getName() ?></p>

      <p>Distance : <?= $route->getDistance(); ?> km</p>

      <p>Création date : <?php
                          $creationDateString = $route->getCreationDate();
                          try {
                            $creationDate = new DateTime($creationDateString);
                            echo $creationDate->format('d/m/Y');
                          } catch (Exception $e) {
                            echo "Date non valide";
                          }
                          ?></p>
      <a href="<?= Domain . HOME_URL . 'dashboard/route/modify/' . Routing::nameToSlug($route->getName()) ?>">Modifier</a>

      <a href="<?= Domain . HOME_URL . 'dashboard/route/delete/' . Routing::nameToSlug($route->getName()) ?>">Supprimer</a>



      </div>

    <?php } ?>

    



</div>




<?php include_once __DIR__ . '/../Includes/footer.php'; ?>