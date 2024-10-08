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
  <h1 class="title text-center mb-5">Vélo de route, VTT, Gravel, trouvez facilement votre itinéraire.</h1>


  <div class="d-flex flex-column justify-content-center align-items-center gap-5 my-5">

<form action="<?= Domain . HOME_URL . 'signin' ?>" method="POST" id="formConnexion" class="form-connexion">

  <!--<input type="email" id="emailSignIn" name="email" class="mb-3 form-control form-control-sm email-connexion" aria-describedby="emailHelp" placeholder="Enter your email" required autocomplete="email" />-->

  <label for="emailSignIn" class="form-label">Adresse email</label>
  <input type="email" id="emailSignIn" name="email" class="form-control" required placeholder="name@example.com" />

  <!--<input type="password" id="mdp" name="password" class="mb-3 form-control mdp-connexion" required placeholder="Enter your password" />-->

  <label for="mdp" class="form-label">Mot de passe</label>
  <input type="password" id="mdp" name="password" class="form-control" required placeholder="Entrez votre mot de passe" aria-describedby="passwordHelpBlock" />
  

  
    <button id="submissionButtonSignIn" type="submit" class="btn-bg-green rounded-pill px-3 py-2 ">CONNEXION</button>
  </div>

 
</form>
</div>
</div>

</div>



<?php include_once __DIR__ . '/../Includes/footer.php'; ?>