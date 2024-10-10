<?php include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="container my-5">

  <a href="<?= Domain . HOME_URL . 'dashboard/route/list' ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#22A737" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
    </svg>
  </a>

  <?php if (isset($erreur)) { ?>
    <div class="alert alert-danger">Erreur lors de la création du parcours : <?php echo $erreur; ?></div>
  <?php } ?>

  <h1 class="title-list my-5">MODIFIER UN PARCOURS</h1>


  <?php if (isset($erreur)) { ?>
    <div class="alert alert-danger">Erreur lors de la modification du parcours : <?php echo $erreur; ?></div>
  <?php } ?>


  <form action="<?= Domain . HOME_URL . 'dashboard/route/modify' ?>" method="POST" class="mb-4" onsubmit="return validateFormCreateRoute();" enctype="multipart/form-data">
    <input type="hidden" id="idroute" name="idroute" value="<?= $route->getIdRoute(); ?>">

    <div class="signin-form d-flex flex-column gap-4 my-5">

      <div>
        <label for="name" class="form-label d-flex">Nom</label>
        <input type="text" id="name" name="name" autocomplete="name" class="form-control" required placeholder="Entrez le nom de votre parcours" value="<?= $route->getName(); ?>">
      </div>

      <div>
        <label for="description" class="form-label">Description</label>
        <textarea type="textarea" id="description" name="description" autocomplete="description" class="form-control" required placeholder="Entrez le texte descriptif" rows="5"><?= $route->getDescription(); ?></textarea>
      </div>

      <div>
        <label for="duration" class="form-label">Durée</label>
        <input type="time" id="duration" name="duration" autocomplete="duration" class="form-control" required placeholder="Entrez la durée du parcours" value="<?= $route->getDuration(); ?>">
      </div>

      <div>
        <label for="distance" class="form-label">Distance</label>
        <input type="number" id="distance" name="distance" autocomplete="distance" class="form-control" required placeholder="Entrez la distance du parcours (en km)" value="<?= $route->getDistance(); ?>">
      </div>

      <div>
        <label for="elevation" class="form-label">Dénivelé +</label>
        <input type="number" id="elevation" name="elevation" autocomplete="elevation" class="form-control" required placeholder="Entrez le dénivelé (en m)" value="<?= $route->getElevation(); ?>">
      </div>

      <div>
        <label for="altitude" class="form-label">Altitude max</label>
        <input type="number" id="altitude" name="altitude" autocomplete="altitude" class="form-control" required placeholder="Entrez l'altitude (en m)" value="<?= $route->getAltitude(); ?>">
      </div>


      <p class="circuit m-0">Ce parcours est une boucle</p>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="circuit" id="circuit" checked="<?= $route->getCircuit() == 1 ? 'checked' : '' ?>">
        <label class="form-check-label" for="circuit">
          oui
        </label>
      </div>


      <div>
        <label for="type" class="form-label">Type de pratique</label>
        <select id="type" name="Id_type" class="form-select" required>
          <option value="1" selected="<?= $route->getType()->getIdType() == 1 ? 'selected' : '' ?>">Route</option>
          <option value="2" selected="<?= $route->getType()->getIdType() == 2 ? 'selected' : '' ?>">Gravel</option>
          <option value="3" selected="<?= $route->getType()->getIdType() == 3 ? 'selected' : '' ?>">VTT</option>
        </select>
      </div>

      <div>
        <label for="level" class="form-label">Niveau</label>
        <select id="level" name="Id_level" class="form-select" required>
          <option value="1" selected="<?= $route->getLevel()->getIdLevel() == 1 ? 'selected' : '' ?>>">Familial</option>
          <option value="2" selected="<?= $route->getLevel()->getIdLevel() == 2 ? 'selected' : '' ?>">Sportif</option>
          <option value="3" selected="<?= $route->getLevel()->getIdLevel() == 3 ? 'selected' : '' ?>">Expert</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Photo</label>
        <input class="form-control" type="file" id="image" name="image">
        <img src="<?= $route->getImage() ?>" width="200px" height="200px" alt="preview" id="preview">
      </div>

      <div class="mb-3">
        <label for="gpx" class="form-label">Trace GPX</label>
        <input class="form-control" type="file" id="gpx" name="gpx">
        <a href="<?= $route->getGpx() ?>" target="_blank">Voir la trace</a>
      </div>

      <div>
        <label for="map_link" class="form-label">Carte :</label>
        <textarea name="map_link" id="map_link" autocomplete="map_link" class="form-control add-map_link" placeholder="Ajoutez l'iframe de votre carte" rows="5"><?= $route->getMapLink(); ?></textarea>
      </div>

      <div class="d-flex justify-content-center my-3">
        <button id="submissionButtonSignIn" type="submit" class="btn-bg-green rounded-pill px-3 py-2 ">MODIFIER</button>
      </div>

    </div>
  </form>

</div>


<script>
  let image = document.getElementById('image');
  image.addEventListener('change', function(event) {
    const files = event.target.files;
    if (files.length > 0) {
      let file = files[0];
      if (file.type == "image/png" || file.type == "image/jpeg") {
        document.getElementById('preview').src = URL.createObjectURL(file);
      } else {
        console.log("Erreur de typage");
      }
    }
  })
</script>