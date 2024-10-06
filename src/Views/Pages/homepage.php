<?php



include_once __DIR__ . '/../Includes/header.php'; ?>


<?php echo 'vous etes sur la homepage'; ?>



<div class="hero-home">
  <img src="assets/image/Background_topo.svg" />
  <div class="hero-text">
    <p class="text1">Des parcours à vélo tous niveaux au départ des centres-villes.</p>
    <p class="text2">Vélo de route, VTT, Gravel, trouvez facilement votre itinéraire.</p>
    <a href="<?= Domain . HOME_URL ?>mapList" class="btn btn-bg rounded-pill px-3" role="button">PARCOURS</a>
  </div>
</div>



<div class="container my-5">
  <div class="row g-4">
    <div class="col-sm-12 col-md-6 col-lg-4">
      <a class="card-link" href="">
        <div class="card">
          <img class="card-img-top" src="assets/image/bali.jpg" />
          <div class="card-text p-5">
            <div class="type-heart d-flex justify-content-between">
              <p class="card-type">VTT</p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
              </svg>
            </div>
            <h5 class="card-name">Le Fort de Comboire</h5>
            <p class="card-level">Niveau familial</p>

          </div>
        </div>
      </a>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4">
      <a class="card-link" href="">
        <div class="card">
          <img class="card-img-top" src="assets/image/bali.jpg" />
          <div class="card-text p-5">
            <div class="type-heart d-flex justify-content-between">
              <p class="card-type">VTT</p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
              </svg>
            </div>
            <h5 class="card-name">Le Fort de Comboire</h5>
            <p class="card-level">Niveau familial</p>

          </div>
        </div>
      </a>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4">
      <a class="card-link" href="">
        <div class="card">
          <img class="card-img-top" src="assets/image/bali.jpg" alt="photographie pour illustrer un endroit du parcours" />
          <div class="card-text p-5">
            <div class="type-heart d-flex justify-content-between">
              <p class="card-type">VTT</p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
              </svg>
            </div>
            <h5 class="card-name">Le Fort de Comboire</h5>
            <p class="card-level">Niveau familial</p>

          </div>
        </div>
      </a>
    </div>
  </div>
</div>


<div class="image"></div>



<?php include_once __DIR__ . '/../Includes/footer.php'; ?>