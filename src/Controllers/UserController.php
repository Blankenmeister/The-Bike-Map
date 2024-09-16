<?php

namespace src\Controllers;

use Exception;
use src\Models\User;
use src\Repositories\UserRepository;

class userController
{

  public function treatmentSignInController()
  {
    try {

      $userRepository = new UserRepository();

      // traiter les erreurs
      $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
      $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;



      $user = $userRepository->getUserByMail($email, $password);

      // Verify password
      if (!$user || !password_verify($password, $user->getPassword())) {

        echo 'Mot de passe ou email incorrect';
        die;
      }

      $_SESSION['connecte'] = true;
      $_SESSION['user'] = $user->transformObjectToArray();

      // $_SESSION['Id_user'] = $user->getIdUser();
      // $_SESSION['last_name'] = $user->getLastName();
      // $_SESSION['first_name'] = $user->getFirstName();
      // $_SESSION['email'] = $user->getEmail();
      // $_SESSION['password'] = $user->getPassword();
      // $_SESSION['rgpd'] = $user->getRgpd();
      // // $Id_role = $user['Id_role'];
      // $_SESSION['role'] = $user->getNameRole();
      // $_SESSION['role'] = $userRepository->getRole($Id_role);
      // echo "<pre>";
      // var_dump($_SESSION);
      // echo "</pre>";
      // die();

      header('Location: ' . HOME_URL . 'dashboard?success=Vous êtes connectés avec succès.');
      exit();
      // include 'dashboard avec une $success message'; puis dans la vue : echo $success;
          } catch (Exception $e) {
      error_log("SignUp Error: " . $e->getMessage()); // Log the error for debugging
      // Redirect to sign-up page with error message
      header('Location: ' . HOME_URL . 'signIn?error=' . urlencode($e->getMessage()));
      
    }
  }

  public function displayDashboard()
  {
    $user = new User($_SESSION['user']);

    include_once __DIR__ . '/../Views/Dashboard/dashboard.php';
  }
}
