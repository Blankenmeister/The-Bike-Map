<?php include_once __DIR__ . '/../Includes/header.php'; ?>


<div class="container my-5">

  <a href="<?= Domain . HOME_URL . 'mapList' ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#22A737" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
    </svg>
  </a>

</div>

<div class="grey py-5">
  <div class="container">
    <div class="d-flex justify-content-end">
      <div class="circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
        </svg>
      </div>
    </div>
    <h1 class="route-name text-center"><?= $route->getName() ?></h1>

    <div class="d-flex justify-content-center gap-3">
      <p class="text-km text-center"><?= $route->getDistance() ?>km</p>
      <p class="text-km text-center"><?= $route->getType() ?></p>
      <p class="text-km text-center"><?= $route->getLevel() ?></p>
    </div>
  </div>
</div>

<div class="container my-4">
  <div class="row">
    <div class="col-6 col-md-3">
      <div class="duration d-flex justify-content-start justify-content-md-center align-items-start gap-2">
        <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" width="25" heigth="25" viewBox="0 0 259 259">
          <defs>
            <style>
              .cls-1 {
                fill: #22A737;
              }
            </style>
          </defs>
          <g id="Calque_1-2" data-name="Calque 1">
            <g>
              <path class="cls-1" d="m129.5,0C58.09,0,0,58.09,0,129.5s58.09,129.5,129.5,129.5,129.5-58.09,129.5-129.5S200.91,0,129.5,0Zm0,244c-63.14,0-114.5-51.36-114.5-114.5S66.36,15,129.5,15s114.5,51.36,114.5,114.5-51.36,114.5-114.5,114.5Z" />
              <path class="cls-1" d="m130.35,127.09v-56.59c0-4.14-3.36-7.5-7.5-7.5s-7.5,3.36-7.5,7.5v59.7c0,1.99.79,3.9,2.2,5.3l46.3,46.3c1.46,1.46,3.38,2.2,5.3,2.2s3.84-.73,5.3-2.2c2.93-2.93,2.93-7.68,0-10.61l-44.1-44.1Z" />
            </g>
          </g>
        </svg>
        <p class="text-icon"><?php $durationString = $route->getDuration();
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
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="elevation d-flex justify-content-start justify-content-md-center align-items-start gap-2">
        <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" width="25" heigth="25" viewBox="0 0 285.5 219.5">
          <defs>
            <style>
              .cls-1 {
                fill: #22A737;
              }
            </style>
          </defs>
          <g id="Calque_1-2" data-name="Calque 1">
            <path class="cls-1" d="m285.5,0c-18.64,12.98-44.8,26.97-65.88,32.26l28.94,7.72-74.3,106.81-61.18-111.4c-1.31-2.38-3.79-3.87-6.51-3.89h-.07c-2.69,0-5.17,1.44-6.51,3.77L.99,208.27c-2.06,3.6-.81,8.18,2.79,10.24,1.17.67,2.45.99,3.72.99,2.6,0,5.13-1.36,6.52-3.78L106.37,54.34l60.56,110.27c1.25,2.28,3.59,3.74,6.18,3.88,2.61.14,5.07-1.08,6.55-3.21l81.21-116.74,17.31,24.45c-2.37-21.6,1.65-51,7.33-72.99Z" />
          </g>
        </svg>
        <p class="text-icon"><?= $route->getElevation() ?>D+</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="altitude d-flex justify-content-start justify-content-md-center align-items-start gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#22A737" class="bi bi-triangle" viewBox="0 0 16 16">
          <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
        </svg>
        <p class="text-icon"><?= $route->getAltitude() ?>m</p>
      </div>
    </div>


    <?php if ($route->getCircuit() == "1") {
      echo '<div class="col-6 col-md-3">
      <div class="circuit d-flex justify-content-start justify-content-md-center align-items-start gap-2">
        <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" width="25" heigth="25" viewBox="0 0 246 265.94">
          <defs>
            <style>
              .cls-1 {
                fill: #22A737;
              }
            </style>
          </defs>
          <g id="OBJECTS">
            <path class="cls-1" d="m233.87,89.61c-1.8-3.73-6.28-5.29-10.01-3.5-3.73,1.8-5.3,6.28-3.5,10.01,7.06,14.66,10.65,30.41,10.65,46.82,0,59.55-48.45,108-108,108S15,202.49,15,142.94,63.45,34.94,123,34.94c11.71,0,23.13,1.84,34.06,5.48l-20.94,15.74,80.6.99L159.88,0l3.38,26.69c-12.91-4.48-26.41-6.75-40.26-6.75C55.18,19.94,0,75.12,0,142.94s55.18,123,123,123,123-55.18,123-123c0-18.68-4.08-36.62-12.13-53.33Z" />
          </g>
        </svg>
        <p class="text-icon">Boucle</p>';
    } else {
      echo "";  // Affiche ceci si circuit vaut 0
    }; ?>


  </div>
</div>

</div>

</div>

<iframe width="100%" height="300px" frameborder="0" allowfullscreen allow="geolocation" src="//umap.openstreetmap.fr/fr/map/le-tour-du-neron_1121432?scaleControl=false&miniMap=false&scrollWheelZoom=true&zoomControl=true&editMode=disabled&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=false&datalayersControl=true&onLoadPanel=none&captionBar=false&captionMenus=false&fullscreenControl=false"></iframe>

<div class="container mt-3">

  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum ligula id consectetur molestie. Suspendisse eget sodales augue. Etiam vestibulum in turpis rutrum accumsan. Ut sem tortor, finibus ac turpis vitae, fringilla semper mauris. Mauris posuere nibh nisi, at scelerisque neque vehicula ac. Quisque consectetur orci non nibh pellentesque, eget dapibus tortor pulvinar. Etiam auris. Mauris posuere nibh nisi, at scelerisque neque vehicula ac. Quisque consectetur orci non nibh </p>

  <img class="route-image mt-3" src="../assets/image/grece.jpg" alt="Photo représentant l'ambiance d'un parcours" />

  <div class="d-flex flex-column justify-content-center align-items-center my-5 gap-3">
    <svg width="60" height="60" viewBox="0 0 100 99" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M78.7499 8.1499C85.6999 8.1499 91.3499 13.7999 91.3499 20.7499V78.2499C91.3499 85.1999 85.6999 90.8499 78.7499 90.8499H21.2499C14.2999 90.8499 8.6499 85.1999 8.6499 78.2499V20.7499C8.6499 13.7999 14.2999 8.1499 21.2499 8.1499H78.7499ZM78.7499 0.149902H21.2499C9.8699 0.149902 0.649902 9.3699 0.649902 20.7499V78.2499C0.649902 89.6299 9.8699 98.8499 21.2499 98.8499H78.7499C90.1299 98.8499 99.3499 89.6199 99.3499 78.2499V20.7499C99.3499 9.3699 90.1299 0.149902 78.7499 0.149902Z" fill="#22A737" />
      <path d="M48.0001 51.97C48.5101 52.54 49.2401 52.86 50.0001 52.86C50.7601 52.86 51.4901 52.54 52.0001 51.97L63.9801 38.7C64.6901 37.91 64.8701 36.78 64.4401 35.8C64.0101 34.83 63.0401 34.2 61.9801 34.2H56.3201V19.69C56.3201 18.2 55.1201 17 53.6301 17H46.3601C44.8701 17 43.6701 18.2 43.6701 19.69V34.2H38.0101C36.9501 34.2 35.9801 34.83 35.5501 35.8C35.1201 36.77 35.3001 37.91 36.0101 38.7L47.9901 51.97H48.0001Z" fill="#22A737" />
      <path d="M72.11 56.22H27.89C26.44 56.22 25.25 57.4 25.25 58.86C25.25 60.32 26.43 61.5 27.89 61.5H72.11C73.56 61.5 74.74 60.32 74.74 58.86C74.74 57.4 73.56 56.22 72.11 56.22Z" fill="#22A737" />
      <path d="M42.5391 74.5684V80.2031C42.3177 80.4701 41.9759 80.7598 41.5137 81.0723C41.0514 81.3783 40.4557 81.6419 39.7266 81.8633C38.9974 82.0846 38.1152 82.1953 37.0801 82.1953C36.1621 82.1953 35.3255 82.0456 34.5703 81.7461C33.8151 81.4401 33.1641 80.9941 32.6172 80.4082C32.0768 79.8223 31.6602 79.1061 31.3672 78.2598C31.0742 77.4069 30.9277 76.4336 30.9277 75.3398V74.4512C30.9277 73.3574 31.0677 72.3841 31.3477 71.5312C31.6341 70.6784 32.041 69.959 32.5684 69.373C33.0957 68.7871 33.724 68.3411 34.4531 68.0352C35.1823 67.7292 35.9928 67.5762 36.8848 67.5762C38.1217 67.5762 39.1374 67.778 39.9316 68.1816C40.7259 68.5788 41.3314 69.1322 41.748 69.8418C42.1712 70.5449 42.4316 71.3522 42.5293 72.2637H39.6875C39.6159 71.7819 39.4792 71.362 39.2773 71.0039C39.0755 70.6458 38.7858 70.3659 38.4082 70.1641C38.0371 69.9622 37.5553 69.8613 36.9629 69.8613C36.4746 69.8613 36.0384 69.9622 35.6543 70.1641C35.2767 70.3594 34.9577 70.6491 34.6973 71.0332C34.4368 71.4173 34.2383 71.8926 34.1016 72.459C33.9648 73.0254 33.8965 73.6829 33.8965 74.4316V75.3398C33.8965 76.082 33.9681 76.7396 34.1113 77.3125C34.2546 77.8789 34.4661 78.3574 34.7461 78.748C35.0326 79.1322 35.3841 79.4219 35.8008 79.6172C36.2174 79.8125 36.7025 79.9102 37.2559 79.9102C37.7181 79.9102 38.1022 79.8711 38.4082 79.793C38.7207 79.7148 38.9714 79.6204 39.1602 79.5098C39.3555 79.3926 39.5052 79.2819 39.6094 79.1777V76.6582H36.9336V74.5684H42.5391ZM50.4395 76.9316H46.8164V74.6465H50.4395C50.9993 74.6465 51.4551 74.5553 51.8066 74.373C52.1582 74.1842 52.4154 73.9238 52.5781 73.5918C52.7409 73.2598 52.8223 72.8854 52.8223 72.4688C52.8223 72.0456 52.7409 71.6517 52.5781 71.2871C52.4154 70.9225 52.1582 70.6296 51.8066 70.4082C51.4551 70.1868 50.9993 70.0762 50.4395 70.0762H47.832V82H44.9023V67.7812H50.4395C51.5527 67.7812 52.5065 67.9831 53.3008 68.3867C54.1016 68.7839 54.7135 69.334 55.1367 70.0371C55.5599 70.7402 55.7715 71.5443 55.7715 72.4492C55.7715 73.3672 55.5599 74.1615 55.1367 74.832C54.7135 75.5026 54.1016 76.0202 53.3008 76.3848C52.5065 76.7493 51.5527 76.9316 50.4395 76.9316ZM59.7559 67.7812L62.4316 72.7422L65.1074 67.7812H68.457L64.3262 74.832L68.5645 82H65.1855L62.4316 76.9414L59.6777 82H56.2793L60.5273 74.832L56.3867 67.7812H59.7559Z" fill="#22A737" />
    </svg>

    <a href="../uploaded/gpx/le_tour_du_n_ron.gpx" download class=" btn-bg-green rounded-pill px-4 py-2 " role="button">Télécharger</a>
  </div>

</div>



<?php include_once __DIR__ . '/../Includes/footer.php'; ?>