<?php

use src\Services\Routing;

include_once __DIR__ . '/../Includes/header.php'; ?>



<div class="container mt-5">

  <a href="<?= Domain . HOME_URL ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#22A737" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
    </svg>
  </a>


  <div class="row mb-5">
    <div class="col-sm-12 col-md-6 ">
      <label for="level" class="form-label"></label>
      <select id="level" name="Id_level" class="form-select rounded-pill p-3" required>
        <option selected>NIVEAU</option>
        <option value="1">Familial</option>
        <option value="2">Sportif</option>
        <option value="3">Expert</option>
      </select>
    </div>

    <div class="col-sm-12 col-md-6">
      <label for="type" class="form-label"></label>
      <select id="type" name="Id_type" class="form-select rounded-pill p-3" required>
        <option selected>PRATIQUE</option>
        <option value="1">Route</option>
        <option value="2">Gravel</option>
        <option value="3">VTT</option>
      </select>
    </div>

  </div>
</div>
</div>

<div class="container mb-5">
  <div class="row g-4">

    <?php
    foreach ($routes as $route) { ?>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <a href="<?= Domain . HOME_URL . 'mapDetail/' . Routing::nameToSlug($route->getName()) ?>">
          <div class="card">
            <img class="card-img-top" src="assets/image/bali.jpg" />
            <div class="card-text p-4">
              <div class="type-heart d-flex justify-content-between align-items-end mb-1">
                <p class="card-type m-0"><?= $route->getType() ?></p>
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </div>
              </div>
              <h5 class="card-name"><?= $route->getName() ?></h5>
              <p class="card-level">Niveau <?= $route->getLevel() ?></p>
            </div>
          </div>
        </a>
      </div>
      </a>


    <?php } ?>
  </div>
</div>




<?php include_once __DIR__ . '/../Includes/footer.php'; ?>