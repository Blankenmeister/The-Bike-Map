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

    <div class="dist-date d-flex justify-content-between">

      <p class="name-list mb-1"><?= $route->getName() ?></p>

      <div class="icon-list d-flex gap-3">
        <a class="btn-update" href="<?= Domain . HOME_URL . 'dashboard/route/modify/' . Routing::nameToSlug($route->getName()) ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square trash-list" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
          </svg>
        </a>

        <a href="<?= Domain . HOME_URL . 'dashboard/route/delete/' . Routing::nameToSlug($route->getName()) ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#22A737" class="bi bi-trash3 trash-list" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
          </svg>
        </a>
      </div>

    </div>




    
      <p class="text-list m-0">Distance : <?= $route->getDistance(); ?> km</p>
      <p class="text-list m-0">Date de création du parcours :
        <?php $creationDateString = $route->getCreationDate();
        try {
          $creationDate = new DateTime($creationDateString);
          echo $creationDate->format('d/m/Y');
        } catch (Exception $e) {
          echo "Date non valide";
        } ?></p>
    






    <div class="line my-3"></div>



  <?php } ?>





</div>




<?php include_once __DIR__ . '/../Includes/footer.php'; ?>