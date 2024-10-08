<?php include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="titre">Créer un parcours</div>

<?php if (isset($erreur)) { ?>
  <div class="alert alert-danger">Erreur lors de la création du parcours : <?php echo $erreur; ?></div>
<?php } ?>


<form action="<?= Domain . HOME_URL . 'dashboard/route/create' ?>" method="POST" class="mb-4" onsubmit="return validateFormCreateRoute();" enctype="multipart/form-data">

  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="name" class="form-label d-flex">Nom du parcours :</label>
    <input type="text" id="name" name="name" autocomplete="name" class="form-control add-name" required placeholder="Entrez le nom de votre parcours" value="<?= $data['name'] ?? '' ?>" >
  </div>

  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="description" class="form-label">Description :</label>
    <textarea type="textarea" id="description" name="description" autocomplete="description" class="form-control add-description" required placeholder="Entrez le texte descriptif" rows="5" ><?= $data['description'] ?? '' ?></textarea>
  </div>

  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="duration" class="form-label">Durée :</label>
    <input type="time" id="duration" name="duration" autocomplete="duration" class="form-control add-duration" required placeholder="Entrez la durée du parcours" value="<?= $data['duration'] ?? '' ?>">
  </div>

  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="distance" class="form-label">Distance :</label>
    <input type="number" id="distance" name="distance" autocomplete="distance" class="form-control add-distance" required placeholder="Entrez la distance du parcours (en km)" value="<?= $data['distance'] ?? '' ?>">
  </div>

  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="elevation" class="form-label">Dénivelé + :</label>
    <input type="number" id="elevation" name="elevation" autocomplete="elevation" class="form-control add-elevation" required placeholder="Entrez le dénivelé (en m)" value="<?= $data['elevation'] ?? '' ?>">
  </div>

  <div class="mb-3 d-flex flex-row justify-content-between">
    <label for="altitude" class="form-label">Altitude :</label>
    <input type="number" id="altitude" name="altitude" autocomplete="altitude" class="form-control add-altitude" required placeholder="Entrez l'altitude (en m)" value="<?= $data['altitude'] ?? '' ?>">
  </div>

  <div class="form-check">
    <p>Ce parcours est une boucle</p>
    <input class="form-check-input" type="checkbox" name="circuit" id="circuit" checked="<?= $data['circuit'] == 1 ? 'checked' : '' ?>>
    <label class="form-check-label" for="circuit">
      oui
    </label>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="mb-3 d-flex flex-row justify-content-between">
      <label for="type" class="form-label">Type de pratique :</label>
      <select id="type" name="Id_type" class="form-select add-type" required>
        <option value="1" selected="<?= $data['Id_type'] == 1 ? 'selected' : '' ?>">Route</option>
        <option value="2" selected="<?= $data['Id_type'] == 2 ? 'selected' : '' ?>">Gravel</option>
        <option value="3" selected="<?= $data['Id_type'] == 3 ? 'selected' : '' ?>">VTT</option>
      </select>
    </div>

    <div class="mb-3 d-flex flex-row justify-content-between">
      <label for="level" class="form-label">Niveau :</label>
      <select id="level" name="Id_level" class="form-select add-level" required>
        <option value="1" selected="<?= $data['Id_level'] == 1 ? 'selected' : '' ?>>">Familial</option>
        <option value="2" selected="<?= $data['Id_level'] == 2 ? 'selected' : '' ?>">Sportif</option>
        <option value="3" selected="<?= $data['Id_level'] == 3 ? 'selected' : '' ?>">Expert</option>
      </select>
    </div>


    <div class="mb-3 d-flex flex-row justify-content-between">
      <label for="image" class="form-label">Photo :</label>
      <input type="file" id="image" name="image">
      <img width="200px" height="200px" src="" alt="preview" id="preview">
    </div>

    <div class="mb-3 d-flex flex-row justify-content-between">
      <label for="gpx" class="form-label">Trace GPX :</label>
      <input type="file" id="gpx" name="gpx">
    </div>


    <div class="mb-3 d-flex flex-row justify-content-between">
      <label for="map_link" class="form-label">Carte :</label>
      <textarea name="map_link" id="map_link" autocomplete="map_link" class="form-control add-map_link" placeholder="Ajoutez l'iframe de votre carte" rows="5"><?= $data['map_link'] ?? '' ?></textarea>
    </div>

    <div class="d-flex justify-content-end my-5">
      <button type="submit" class="btn rounded-pill">Ajouter</button>
    </div>
  </div>

</form>


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