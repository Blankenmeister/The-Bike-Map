<?php echo 'je suis dans le dashborad admin'; ?>

<div class="titre">Bienvenue <?= $user->getLastName() ?>

  <p>Nom : <?= $user->getLastName() ?></p>
  <p>Prénom : <?= $user->getFirstName() ?></p>
  <p>Email : <?= $user->getEmail() ?></p>

</div>




<iframe width="100%" height="300px" frameborder="0" allowfullscreen allow="geolocation" src="//umap.openstreetmap.fr/fr/map/new/?scaleControl=false&miniMap=false&scrollWheelZoom=true&zoomControl=true&editMode=disabled&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=false&datalayersControl=true&onLoadPanel=none&captionBar=false&captionMenus=true"></iframe>
<p><a href="//umap.openstreetmap.fr/fr/map/new/?scaleControl=false&miniMap=false&scrollWheelZoom=true&zoomControl=true&editMode=disabled&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=false&datalayersControl=true&onLoadPanel=none&captionBar=false&captionMenus=true">Voir en plein écran</a></p>


<div class="col-lg-3 col-md-6 mobile-center">
  <a class="btn rounded-pill" href="<?= Domain . HOME_URL ?>dashboard/route/create">Créer un parcours</a>
</div>

<div class="col-lg-3 col-md-6 mobile-center">
  <a class="btn rounded-pill" href="<?= Domain . HOME_URL ?>dashboard/routeList">Liste des parcours</a>
</div>