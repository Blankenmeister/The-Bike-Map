<?php

use src\Services\Routing;

 include_once __DIR__ . '/../Includes/header.php'; ?>


<h1>Liste des parcours</h1>


<?php

foreach ($routes as $route) { ?>
  <div class="routeCard">
    <div class="titre"><?= $route->getName() ?>
    </div>

    <p>Durée : <?php

                $durationString = $route->getDuration();
                try {
                  $duration = new DateTime($durationString);
                  echo $duration->format('H:i');
                } catch (Exception $e) {
                  echo "Durée non valide";
                }
                ?></p>

    <p>Création date : <?php
                        $creationDateString = $route->getCreationDate();
                        try {
                          $creationDate = new DateTime($creationDateString);
                          echo $creationDate->format('d/m/Y'); 
                        } catch (Exception $e) {
                          echo "Date non valide"; 
                        }
                        ?></p>
    <a href="<?= Domain . HOME_URL . 'dashboard/route/detail/' . Routing::nameToSlug($route->getName()) ?>">Détail parcours</a>

    



  <?php } ?>

  </div>








  <?php include_once __DIR__ . '/../Includes/footer.php'; ?>