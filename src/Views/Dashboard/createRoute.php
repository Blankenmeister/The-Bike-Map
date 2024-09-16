<?php include_once __DIR__ . '/../Includes/header.php'; ?>



<?php echo 'je suis dans créer route'; ?>

<div class="titre">Créer un parcours</div>


<form action="<?= Domain . HOME_URL . 'dashboard/routeDetail' ?>" method="POST" class="mb-4" onsubmit="return validateFormCreateRoute();">
  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="name" class="form-label d-flex">Name :</label>
    <input type="text" id="name" name="name" autocomplete="name" class="form-control add-name" required placeholder="Entrez le nom de votre parcours">
  </div>
  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="description" class="form-label">Description :</label>
    <input type="text" id="description" name="description" autocomplete="description" class="form-control add-description" required placeholder="Entrez le texte descriptif">
  </div>
  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="duration" class="form-label">Durée :</label>
    <input type="text" id="duration" name="duration" autocomplete="duration" class="form-control add-duration" required placeholder="Entrez la durée du parcours">
  </div>
  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="distance" class="form-label">Distance :</label>
    <input type="text" id="distance" name="distance" autocomplete="distance" class="form-control add-distance" required placeholder="Entrez la distance du parcours">
  </div>
  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="elevation" class="form-label">Dénivelé + :</label>
    <input type="elevation" id="elevation" name="elevation" autocomplete="elevation" class="form-control add-elevation" required placeholder="Entrez le dénivelé">
  </div>
  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="altitude" class="form-label">Altitude :</label>
    <input type="altitude" id="altitude" name="altitude" autocomplete="altitude" class="form-control add-altitude" required placeholder="Entrez l'altitude">
  </div>
  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="creation_date" class="form-label">Date de création :</label>
    <input type="date" id="creation_date" name="creation_date" autocomplete="creation_date" class="form-control add-creation_date" required placeholder="Sélectionnez la date de création du parcours">
  </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <div class="mb-3 d-flex flex-row justify-content-between">
      <label for="Id_type" class="form-label">Type de pratique :</label>
      <select id="Id_type" name="Id_type" class="form-select add-type" required>
        <option value="1">Route</option>
        <option value="2">Grave</option>
        <option value="3">VTT</option>
      </select>
    </div>
    <div class="mb-3 d-flex flex-row justify-content-between">
      <label for="Id_level" class="form-label">Niveau :</label>
      <select id="Id_level" name="Id_level" class="form-select add-level" required>
        <option value="1">Familial</option>
        <option value="2">Sportif</option>
        <option value="3">Expert</option>
      </select>
    </div>
    <div id="divForStatusDates" class="d-none">
      <div class="mb-3 d-flex flex-row justify-content-between">
        <label for="map_link" class="form-label">Carte :</label>
        <input type="text" id="map_link" name="map_link" autocomplete="map_link" class="form-control add-map_link" placeholder="Ajoutez l'iframe de votre carte ">
      </div>

    </div>
  <input type="hidden" name="action" value="add_route" />
    <div class="d-flex justify-content-end my-5">
      <button type="submit" class="btn rounded-pill">Ajouter</button>
    </div>
</form>



<?php echo password_hash("romain@bike.fr", PASSWORD_DEFAULT);
?>