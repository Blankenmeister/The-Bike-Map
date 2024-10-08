<?php



include_once __DIR__ . '/../Includes/header.php'; ?>


<?php echo 'vous etes sur la homepage'; ?>

<main>

<!--<div class="hero-home">
    <img src="assets/image/Background_topo.svg" />
    <div class="hero-text">
      <p class="text1">Des parcours à vélo tous niveaux au départ des centres-villes.</p>
      <p class="text2">Vélo de route, VTT, Gravel, trouvez facilement votre itinéraire.</p>
      <a href="<?= Domain . HOME_URL ?>mapList" class="btn btn-bg rounded-pill px-3" role="button">PARCOURS</a>
    </div>
  </div> -->

  <div class="image">
    <div class="text-home">
      <h1 class="title-home">Des parcours à vélo tous niveaux au départ des centres-villes.</h1>
      <p class="title2-home">Vélo de route, VTT, Gravel, trouvez facilement votre itinéraire.</p>
      <div class="d-flex justify-content-center">
        <a href="<?= Domain . HOME_URL ?>mapList" class="btn-bg btn-home rounded-pill px-3 py-2" role="button">PARCOURS</a>
      </div>
    </div>
  </div>


  <div class="container my-5">
    <div class="row g-4">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <a class="card-link" href="">
          <div class="card">
            <img class="card-img-top" src="assets/image/bali.jpg" />
            <div class="card-text p-4">
              <div class="type-heart d-flex justify-content-between align-items-end mb-1">
                <p class="card-type m-0">VTT</p>
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </div>
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
            <div class="card-text p-4">
              <div class="type-heart d-flex justify-content-between align-items-end mb-1">
                <p class="card-type m-0">VTT</p>
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </div>
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
            <div class="card-text p-4">
              <div class="type-heart d-flex justify-content-between align-items-end mb-1">
                <p class="card-type m-0">VTT</p>
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </div>
              </div>
              <h5 class="card-name">Le Fort de Comboire</h5>
              <p class="card-level">Niveau familial</p>

            </div>
          </div>
        </a>
      </div>
    </div>
  </div>




  <div class="container line mb-3"></div>

  <div class="container banner2 d-flex flex-column flex-md-row justify-content-md-around align-items-md-baseline gap-3">
    <div class="d-flex flex-column justify-content-center align-items-center gap-1">
      <svg class="svg-profil" xmlns="http://www.w3.org/2000/svg" width="25%" version="1.1" viewBox="0 0 109 106">
        <defs>
          <style>
            .cls-1 {
              fill: #22a737;
              isolation: isolate;
            }
          </style>
        </defs>
        <!-- Generator: Adobe Illustrator 28.7.1, SVG Export Plug-In . SVG Version: 1.2.0 Build 142)  -->
        <g>
          <g id="Calque_1">
            <g id="Calque_1-2" data-name="Calque_1">
              <g>
                <path class="cls-1" d="M54.82,103.8c-6.87,0-13.54-1.35-19.81-4-6.06-2.56-11.5-6.23-16.18-10.91-4.67-4.67-8.34-10.12-10.91-16.18-2.66-6.28-4-12.94-4-19.81s1.35-13.54,4-19.81c2.56-6.06,6.23-11.5,10.91-16.18s10.12-8.34,16.18-10.91c6.28-2.66,12.94-4,19.81-4s13.54,1.35,19.81,4c6.06,2.56,11.5,6.23,16.18,10.91,4.67,4.67,8.34,10.12,10.91,16.18,2.66,6.28,4,12.94,4,19.81s-1.35,13.54-4,19.81c-2.56,6.06-6.23,11.5-10.91,16.18s-10.12,8.34-16.18,10.91c-6.28,2.66-12.94,4-19.81,4ZM54.82,9.23c-11.66,0-22.63,4.54-30.88,12.79-8.25,8.25-12.79,19.21-12.79,30.88s4.54,22.63,12.79,30.88c8.25,8.25,19.21,12.79,30.88,12.79s22.63-4.54,30.88-12.79,12.79-19.21,12.79-30.88-4.54-22.63-12.79-30.88-19.21-12.79-30.88-12.79Z" />
                <path class="cls-1" d="M81.27,83.15c-6.81,6.24-16.45,10.09-26.45,10.09s-19.13-3.93-26.45-10.09c1.29-6.24,3.93-11.76,5.72-13.1,3.41-2.56,9.29-4.36,13.2-5.46.56-1.5.94-3.06,1.13-4.65-4.41-2.41-7.99-7.11-8.6-12.64-1.9-1.25-3.47-5.77-3.47-7.04,0-1.48,1.2-2.68,2.68-2.68.14,0,.29,0,.43.03-.58-3.3-1.03-6.68-.42-9.97.64-3.48,2.6-7.05,5.9-8.31,3.16-1.2,6.42-1.53,9.24-1.6,4.15-.1,8.8.52,11.87,2.39,3.62,2.21,6.01,5.39,3.87,17.55.22-.06.46-.09.7-.09,1.48,0,2.68,1.2,2.68,2.68,0,1.27-1.57,5.79-3.47,7.04-.59,5.58-4.11,10.32-8.59,12.71.19,1.56.56,3.11,1.12,4.58,3.91,1.1,9.79,2.9,13.19,5.46,1.79,1.35,4.44,6.86,5.72,13.1Z" />
              </g>
            </g>
          </g>
        </g>
      </svg>

      <p class="text-signin">Créé ton compte</p>
    </div>

    <div class="d-flex flex-column justify-content-center align-items-center gap-1">
      <svg class="svg-download" xmlns="http://www.w3.org/2000/svg" width="20%" version="1.1" viewBox="0 0 109 106">
        <defs>
          <style>
            .cls-1 {
              fill: #22A737;
            }
          </style>
        </defs>
        <!-- Generator: Adobe Illustrator 28.7.1, SVG Export Plug-In . SVG Version: 1.2.0 Build 142)  -->
        <g>
          <g id="Calque_1">
            <g>
              <path class="cls-1" d="M83.75,11.15c6.95,0,12.6,5.65,12.6,12.6v57.5c0,6.95-5.65,12.6-12.6,12.6H26.25c-6.95,0-12.6-5.65-12.6-12.6V23.75c0-6.95,5.65-12.6,12.6-12.6h57.5M83.75,3.15H26.25C14.87,3.15,5.65,12.37,5.65,23.75v57.5c0,11.38,9.22,20.6,20.6,20.6h57.5c11.38,0,20.6-9.23,20.6-20.6V23.75c0-11.38-9.22-20.6-20.6-20.6h0Z" />
              <g>
                <path class="cls-1" d="M53,65.2c.51.57,1.24.89,2,.89s1.49-.32,2-.89l11.98-13.27c.71-.79.89-1.92.46-2.9-.43-.97-1.4-1.6-2.46-1.6h-5.66v-14.51c0-1.49-1.2-2.69-2.69-2.69h-7.27c-1.49,0-2.69,1.2-2.69,2.69v14.51h-5.66c-1.06,0-2.03.63-2.46,1.6-.43.97-.25,2.11.46,2.9l11.98,13.27Z" />
                <path class="cls-1" d="M77.11,69.45h-44.22c-1.45,0-2.64,1.18-2.64,2.64s1.18,2.64,2.64,2.64h44.22c1.45,0,2.63-1.18,2.63-2.64s-1.18-2.64-2.63-2.64Z" />
              </g>
            </g>
          </g>
        </g>
      </svg>
      <div class="text-download">Télécharges ton fichier</div>
    </div>


    <div class="d-flex flex-column justify-content-center align-items-center gap-1">
      <svg class="svg-ride" xmlns="http://www.w3.org/2000/svg" width="40%" version="1.1" viewBox="0 0 109 106">
        <defs>
          <style>
            .cls-1 {
              fill: #22a737;
            }

            .cls-2 {
              opacity: .21;
            }

            .cls-2,
            .cls-3 {
              fill: #22a737;
            }

            .cls-4 {
              fill: #666;
            }

            .cls-5 {
              fill: #333;
            }

            .cls-6 {
              fill: #f6bc9f;
            }

            .cls-7 {
              fill: #b3b3b3;
            }

            .cls-8 {
              fill: #3c3439;
            }
          </style>
        </defs>

        <g>
          <g id="Calque_1">
            <rect class="cls-2" x="5" y="92.6" width="98.94" height="9.55" rx="4.78" ry="4.78" />
            <path class="cls-5" d="M55.67,14.67v-.89c0-2.76-2.25-5.01-5.01-5.01h-7.89c-2.75,0-5.01,2.25-5.01,5.01v.89h17.91Z" />
            <path class="cls-4" d="M50.75,83.52c-.19-11.8-7.96-33.11-8.04-33.32l2.82-1.03c.33.89,8.02,22,8.22,34.31l-3,.05Z" />
            <path class="cls-8" d="M82.13,98.68c-8.78,0-15.92-7.14-15.92-15.92s7.14-15.92,15.92-15.92,15.92,7.14,15.92,15.92-7.14,15.92-15.92,15.92ZM82.13,69.64c-7.24,0-13.12,5.89-13.12,13.12s5.89,13.12,13.12,13.12,13.12-5.89,13.12-13.12-5.89-13.12-13.12-13.12Z" />
            <path class="cls-3" d="M47.74,53.93s0,.02,0,.02c0,.18-.15.33-.33.33h-5.37c0,.97-.79,1.75-1.75,1.75h-3.59c-1.12,0-2.12-.83-2.19-1.95-.04-.64.2-1.22.61-1.63.38-.38.9-.62,1.48-.62h9.05c1.15,0,2.09.93,2.1,2.08Z" />
            <path class="cls-3" d="M82.13,85.12c-1.3,0-2.36-1.06-2.36-2.36s1.06-2.36,2.36-2.36,2.36,1.06,2.36,2.36-1.06,2.36-2.36,2.36ZM82.13,80.9c-1.03,0-1.86.84-1.86,1.86s.83,1.86,1.86,1.86,1.86-.84,1.86-1.86-.84-1.86-1.86-1.86Z" />
            <path class="cls-3" d="M82.13,84.26c-.63,0-1.21-.4-1.42-1.03l-10.28-30.92c-.26-.79.17-1.64.95-1.9.78-.26,1.63.17,1.9.95l10.28,30.92c.26.79-.17,1.63-.95,1.9-.16.05-.32.08-.47.08Z" />
            <path class="cls-8" d="M12.59,82.76c0-8.78,7.14-15.92,15.92-15.92s15.92,7.14,15.92,15.92-7.14,15.92-15.92,15.92-15.92-7.14-15.92-15.92ZM15.39,82.76c0,7.24,5.89,13.12,13.12,13.12s13.12-5.89,13.12-13.12-5.89-13.12-13.12-13.12-13.12,5.89-13.12,13.12Z" />
            <path class="cls-3" d="M26.15,82.76c0-1.3,1.06-2.36,2.36-2.36s2.36,1.06,2.36,2.36-1.06,2.36-2.36,2.36-2.36-1.06-2.36-2.36ZM26.65,82.76c0,1.03.84,1.86,1.86,1.86s1.86-.84,1.86-1.86-.83-1.86-1.86-1.86-1.86.84-1.86,1.86Z" />
            <path class="cls-3" d="M28.51,84.26c-.33,0-.66-.11-.94-.33-.65-.52-.75-1.46-.23-2.11l13.79-17.11c.52-.65,1.46-.75,2.11-.23s.75,1.46.23,2.11l-13.79,17.11c-.3.37-.73.56-1.17.56Z" />
            <path class="cls-3" d="M80.37,61.64c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5c1.49,0,2.7-1.21,2.7-2.7s-1.21-2.7-2.7-2.7h-8.51c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h8.51c3.14,0,5.7,2.56,5.7,5.7s-2.56,5.7-5.7,5.7Z" />
            <path class="cls-3" d="M74.44,61.13h-32.93c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h32.93c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z" />
            <path class="cls-3" d="M53.05,84.26h-24.54c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h24.54c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z" />
            <path class="cls-3" d="M53.06,84.26c-.53,0-1.04-.28-1.32-.78-2.53-4.61-15.13-27.64-15.32-28.01-.37-.74-.07-1.64.67-2.01.74-.37,1.64-.07,2.01.67.27.52,10.11,18.49,15.27,27.92.4.73.13,1.64-.59,2.04-.23.12-.48.18-.72.18Z" />
            <path class="cls-3" d="M53.05,84.26c-.36,0-.73-.13-1.02-.4-.61-.56-.65-1.51-.08-2.12l21.39-23.13c.56-.61,1.51-.64,2.12-.08.61.56.65,1.51.08,2.12l-21.39,23.13c-.3.32-.7.48-1.1.48Z" />
            <path class="cls-3" d="M53.05,89.46c-3.69,0-6.7-3.01-6.7-6.7s3.01-6.7,6.7-6.7,6.7,3.01,6.7,6.7-3.01,6.7-6.7,6.7ZM53.05,79.06c-2.04,0-3.7,1.66-3.7,3.7s1.66,3.7,3.7,3.7,3.7-1.66,3.7-3.7-1.66-3.7-3.7-3.7Z" />
            <path class="cls-6" d="M60.5,33.42c-.1,0-.19,0-.29-.02-1.1-.16-1.87-1.19-1.71-2.29l.81-5.59c.16-1.1,1.18-1.87,2.29-1.71,1.1.16,1.87,1.19,1.71,2.29l-.81,5.59c-.15,1-1.01,1.73-1.99,1.73Z" />
            <path class="cls-5" d="M58.87,13.25h1.81c2.43,0,4.4,1.97,4.4,4.4v3.76c0,2.43-1.97,4.4-4.4,4.4h-1.81c-2.43,0-4.4-1.97-4.4-4.4v-3.76c0-2.43,1.97-4.4,4.4-4.4Z" />
            <rect class="cls-6" x="57.33" y="13.25" width="10.1" height="14.93" rx="4.29" ry="4.29" />
            <path class="cls-5" d="M60.47,22.36c0,.96-.78,1.74-1.74,1.74h0c-.96,0-1.74-.78-1.74-1.74v-5.95c0-.96.78-1.74,1.74-1.74h0c.96,0,1.74.78,1.74,1.74v5.95Z" />
            <path class="cls-6" d="M59.51,23.03c0,.89-.72,1.61-1.61,1.61s-1.61-.72-1.61-1.61.72-1.61,1.61-1.61,1.61.72,1.61,1.61Z" />
            <path class="cls-7" d="M42.82,52.16c-.25,0-.5-.02-.76-.07-2.1-.42-3.47-2.46-3.05-4.56,1.89-9.52,7.31-14.1,11.51-16.27,4.48-2.31,8.5-2.38,8.94-2.38l.02,7.76,1.35,1.78s-2.77.07-5.7,1.66c-3.76,2.04-6.26,5.18-7.28,10.27-.37,1.85-3.22,1.82-5.04,1.82Z" />
            <path class="cls-4" d="M48.9,52.16h-8.71c-1.35,0-2.44-1.46-2.44-3.25h0c0-1.8,1.09-3.25,2.44-3.25h9.27l-.57,6.51Z" />
            <rect class="cls-6" x="58.32" y="23.03" width="1.19" height="2.42" transform="translate(117.83 48.49) rotate(180)" />
            <path class="cls-5" d="M64.07,18.78h-7.44l2.17-5.53h9.33v1.47c0,2.24-1.82,4.06-4.06,4.06Z" />
            <path class="cls-6" d="M54.51,83.12l-2.92-.71c.02-.1,2.46-10.21,2.79-16.83.36-7.25-7.43-14.02-7.51-14.09l1.95-2.28c.37.31,8.99,7.79,8.55,16.52-.34,6.9-2.77,16.97-2.87,17.39Z" />
            <path class="cls-4" d="M55.81,77.06l-2.95-.57c.86-4.41,1.38-8.18,1.52-10.91.36-7.25-7.43-14.02-7.51-14.09l1.95-2.28c.37.31,8.99,7.79,8.55,16.52-.14,2.91-.67,6.72-1.57,11.33Z" />
            <path class="cls-6" d="M82.24,53.95c-.06-.1-1.81-2.85-7.04-3.25-11.79-.91-15.65-13.97-15.81-14.52l2.88-.82-1.44.41,1.44-.41c.03.12,3.46,11.61,13.16,12.36,6.89.53,9.3,4.57,9.4,4.74l-2.6,1.5Z" />
            <circle class="cls-6" cx="83.47" cy="52.81" r="3.13" />
            <g>
              <rect class="cls-7" x="50.7" y="80.72" width="4.36" height="3.17" transform="translate(73.88 177.84) rotate(-159.68)" />
              <g>
                <path class="cls-4" d="M50.76,86.33l7.66,2.84c.32.12.67-.09.72-.44.11-.88-.03-1.76-.39-2.55-.5-1.08-1.41-1.98-2.61-2.42l-1.76-.65c-1.32-.49-2.73-.33-3.88.3-1.19.66-1.03,2.44.25,2.91Z" />
                <rect class="cls-4" x="50.09" y="82.47" width="4.56" height="2.97" transform="translate(72.32 180.87) rotate(-159.68)" />
              </g>
              <path class="cls-7" d="M54.96,84.42h0c.29.11.62-.04.72-.33l.38-1.03c.11-.29-.04-.62-.33-.72h0c-.29-.11-.62.04-.72.33l-.38,1.03c-.11.29.04.62.33.72Z" />
              <path class="cls-7" d="M56.66,85.54h0c.19.07.39-.03.46-.21l.35-.94c.07-.19-.03-.39-.21-.46h0c-.19-.07-.39.03-.46.21l-.35.94c-.07.19.03.39.21.46Z" />
              <path class="cls-7" d="M55.66,85.17h0c.19.07.39-.03.46-.21l.35-.94c.07-.19-.03-.39-.21-.46h0c-.19-.07-.39.03-.46.21l-.35.94c-.07.19.03.39.21.46Z" />
            </g>
            <path class="cls-7" d="M55.94,32.1l2.46,9.29c.14-.11.3-.18.47-.23l5.82-1.59s.02,0,.04,0l-2.43-9.16c-.26-.94-1.32-1.53-2.61-1.53-.37,0-.77.05-1.17.16-1.76.46-2.92,1.84-2.59,3.07Z" />
            <path class="cls-1" d="M53.86,16.57h0c-.48-.45-.51-1.21-.06-1.69l2.42-2.6c.45-.48,1.21-.51,1.69-.06h0c.48.45.51,1.21.06,1.69l-2.42,2.6c-.45.48-1.21.51-1.69.06Z" />
            <rect class="cls-5" x="49.32" y="87.15" width="9.93" height=".8" transform="translate(33.78 -13.4) rotate(20.32)" />
          </g>
        </g>
      </svg>
      <div class="text-ride">Pars rouler</div>
    </div>
  </div>

  <div class="container line my-5"></div>

  <div class="container my-5">
    <div class="row g-4">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <a class="card-link" href="">
          <div class="card">
            <img class="card-img-top" src="assets/image/bali.jpg" />
            <div class="card-text p-4">
              <div class="type-heart d-flex justify-content-between align-items-end mb-1">
                <p class="card-type m-0">VTT</p>
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </div>
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
            <div class="card-text p-4">
              <div class="type-heart d-flex justify-content-between align-items-end mb-1">
                <p class="card-type m-0">VTT</p>
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </div>
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
            <div class="card-text p-4">
              <div class="type-heart d-flex justify-content-between align-items-end mb-1">
                <p class="card-type m-0">VTT</p>
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#22A737" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </div>
              </div>
              <h5 class="card-name">Le Fort de Comboire</h5>
              <p class="card-level">Niveau familial</p>

            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="grey py-5">
    <div class="container">
      <div class="row justify-content-center align-items-center g-4">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="d-flex justify-content-center gap-3">
            <p class="nb3">3</p>
            <div class="d-flex flex-column justify-content-center align-items-start ">
              <p class="level m-0">NIVEAUX</p>
              <p class="type">PRATIQUES</p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 px-3">
          <p class="text-parcours">Des parcours sûr au départ de ta ville</p>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <a href="<?= Domain . HOME_URL ?>mapList" class="btn-bg-grey rounded-pill px-3 py-2" role="button">PARCOURS</a>
        </div>

      </div>
    </div>

  </div>

  <div class="d-flex justify-content-center my-5">
    <a href="<?= Domain . HOME_URL ?>mapList" class=" btn-bg-green rounded-pill px-3 py-2 " role="button">CONNEXION</a>
  </div>


  

</main>

<?php include_once __DIR__ . '/../Includes/footer.php'; ?>