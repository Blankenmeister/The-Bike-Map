<?php include_once __DIR__ . '/../Includes/header.php'; ?>


<h1>Liste des parcours</h1>


  <?php

  foreach ($routes as $route) { ?>
    <div class="routeCard">
      <div class="titre"><?= $route->getName() ?>
      </div>
      <p>Durée : <?= $route->getDuration() ?></p>
      <p>Distance : <?= $route->getDistance() ?></p>

      
  <?php } ?>

</div>









<?php include_once __DIR__ . '/../Includes/footer.php'; ?>