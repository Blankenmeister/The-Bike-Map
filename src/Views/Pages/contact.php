<?php include_once __DIR__ . '/../Includes/header.php'; ?>

<div class="container my-5">

  <a href="<?= Domain . HOME_URL . 'mapList' ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#22A737" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
    </svg>
  </a>

</div>


<!-- div for messages -->
<div class="my-3 successAndErrorMessage">

  <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
  <?php endif; ?>
  <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
  <?php endif; ?>
</div>


<?php if (isset($erreur)) { ?>
  <div class="alert alert-danger">Erreur lors de la création du parcours : <?php echo $erreur; ?></div>
<?php } ?>

<div class="container">

  <h4 class="title-signin text-center">Une question ?</h4>
  <h4 class="title-signin text-center  mb-5">N’hésitez pas à nous contactez</h4>


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
        <label for="object" class="form-label">Objet</label>
        <input type="text" id="object" name="object" class="form-control" required placeholder="Entrez votre mot de passe" aria-describedby="passwordHelpBlock" />
      </div>

      <div>
        <label for="message" class="form-label">Message </label>
        <textarea class="form-control" id="message" name="message" required placeholder="Saisissez votre message ici..."></textarea>
      </div>

      <div class="d-flex justify-content-center my-5">
        <button id="submissionButtonSignIn" type="submit" class="btn-bg-green rounded-pill px-3 py-2 ">ENVOYER</button>
      </div>
    </div>

  </form>
</div>




<?php include_once __DIR__ . '/../Includes/footer.php'; ?>