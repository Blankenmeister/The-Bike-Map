<?php include_once __DIR__ . '/../Includes/header.php'; ?>

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


    </div>

    <p class="text-list m-0">Distance : <?= $route->getDistance(); ?> km</p>
    <p class="text-list m-0"><?= $route->getDistance(); ?></p>

    <p class="text-list m-0"><?php $durationString = $route->getDuration();
                              try {
                                $duration = new DateTime($durationString);
                                $hours = (int) $duration->format('H');  // Convertir en entier pour enlever le zéro avant
                                $minutes = $duration->format('i');  // Les minutes

                                // Vérifier si les minutes sont égales à "00"
                                if ($minutes == '00') {
                                  // Afficher uniquement les heures si les minutes sont égales à "00"
                                  echo $hours . 'h';
                                } else {
                                  // Afficher les heures et les minutes si elles sont différentes de "00"
                                  echo $hours . 'h' . $minutes;
                                }
                              } catch (Exception $e) {
                                echo "Durée non valide";
                              }
                              ?></p>

    <div class="line my-3"></div>

  <?php } ?>

</div>




<?php include_once __DIR__ . '/../Includes/footer.php'; ?>