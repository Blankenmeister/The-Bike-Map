
<?php include_once __DIR__ . '/../Includes/header.php'; ?>



<?php echo 'je suis dans la page signIn';?>


<div class="container">

    <!-- div for messages -->
    <div class="my-3 successAndErrorMessage">

      <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
      <?php endif; ?>
      <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
      <?php endif; ?>
    </div>


    <div class="d-flex  flex-column justify-content-center align-items-center gap-4">
      <img class="logo-connexion" src="<?= Domain . HOME_URL . 'assets/image/logoBike.png'; ?>" alt="logotype du site internet" />


      <form action="<?= Domain . HOME_URL . 'signIn' ?>" method="POST" id="formConnexion" class="form-connexion">

        <input type="email" id="emailSignIn" name="email" class="mb-3 form-control form-control-sm email-connexion" aria-describedby="emailHelp" placeholder="Enter your email" required autocomplete="email" />

        <input type="password" id="mdp" name="password" class="mb-3 form-control mdp-connexion" required placeholder="Enter your password" />

        <div class="btn-connexion d-flex flex-column justify-content-center">
          <button id="submissionButtonSignIn" type="submit" class="btn rounded-pill">Connexion</button>
        </div>
      </form>
    </div>
  </div>



<?php include_once __DIR__ . '/../Includes/footer.php'; ?>