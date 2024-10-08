<div class="container">

  <a href="<?= Domain . HOME_URL . 'signin' ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#22A737" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
    </svg>
  </a>


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

  <h4 class="title-signin text-center">Bonjour <?= $user->getFirstName() ?> <?= $user->getLastName() ?></h4>
  <h4 class="title-signin text-center mb-5">Bienvenue sur votre compte.</h4>

  <form action="<?= Domain . HOME_URL . 'signin' ?>" method="POST" id="formConnexion">

    <div class="contact-form d-flex flex-column gap-4 my-5">
      <div>
        <label for="lastName" class="form-label">Nom</label>
        <input type="text" id="lastName" name="lastName" class="form-control" required placeholder="Entrez votre nom" />
      </div>

      <div>
        <label for="firstName" class="form-label">Prénom</label>
        <input type="text" id="firstName" name="firstName" class="form-control" required placeholder="Entrez votre prénom" />
      </div>

      <div>
        <label for="emailSignIn" class="form-label">Adresse email</label>
        <input type="email" id="emailSignIn" name="email" class="form-control" required placeholder="name@example.com" />
      </div>

      <div>
        <label for="mdp" class="form-label">Mot de passe</label>
        <input type="password" id="mdp" name="password" class="form-control" required placeholder="Entrez votre mot de passe" aria-describedby="passwordHelpBlock" />
      </div>

      <div>
        <label for="mdpConf" class="form-label">Confirmation du mot de passe</label>
        <input type="password" id="mdpConf" name="passwordConf" class="form-control" required placeholder="Entrez votre mot de passe" aria-describedby="passwordHelpBlock" />
      </div>

      <div class="d-flex justify-content-center my-3">
        <button id="submissionButtonSignIn" type="submit" class="btn-bg-green rounded-pill px-3 py-2 ">MODIFIER</button>
      </div>
    </div>

  </form>
  <div class="line my-5"></div>

  <h4 class="title-signin text-center mb-4">Vos parcours téléchargés</h4>

  <div class="d-flex justify-content-center mb-5">
    <a href="<?= Domain . HOME_URL ?>dashboard/user/download" class=" btn-bg-green rounded-pill px-3 py-2 " role="button">PARCOURS</a>
  </div>

  <div class="line my-5"></div>
  <h4 class="title-signin text-center mb-4">Vos parcours favoris</h4>

  <div class="d-flex justify-content-center mb-5">
    <a href="<?= Domain . HOME_URL ?>dashboard/user/favourite" class=" btn-bg-green rounded-pill px-3 py-2 " role="button">FAVORIS</a>
  </div>

</div>