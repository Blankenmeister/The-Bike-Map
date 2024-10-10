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

  <h5 class="title-signin text-center mb-3">Vos parcours favoris</h5>

  <div class="line my-4"></div>

  <h1 class="title-list mb-3">LES PARCOURS</h1>

  <?php

  foreach ($routes as $route) { ?>



    <div class="dist-date d-flex justify-content-between">

      <p class="name-list mb-1"><?= $route->getName() ?></p>

      <a href="<?= Domain . HOME_URL . 'dashboard/route/delete/' . Routing::nameToSlug($route->getName()) ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#22A737" class="bi bi-trash3 trash-list" viewBox="0 0 16 16">
          <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
        </svg>
      </a>
    </div>

</div>


</div>

<p class="text-list m-0">Distance : <?= $route->getDistance(); ?> km</p>

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