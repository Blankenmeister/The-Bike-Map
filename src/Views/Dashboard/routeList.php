<?php

use src\Services\Routing;

 include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="container my-5">

<a href="<?= Domain . HOME_URL . 'dashboard' ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#22A737" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
  </svg>
</a>

</div>
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
    <a href="<?= Domain . HOME_URL . 'dashboard/route/modify/' . Routing::nameToSlug($route->getName()) ?>">Modifier</a>

    <a href="<?= Domain . HOME_URL . 'dashboard/route/delete/' . Routing::nameToSlug($route->getName()) ?>">Supprimer</a>





  <?php } ?>

  </div>






  <?php include_once __DIR__ . '/../Includes/footer.php'; ?>