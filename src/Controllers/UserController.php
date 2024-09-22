<?php

namespace src\Controllers;

use Exception;
use src\Repositories\UserRepository;

class userController
{
  public function treatmentSignInController()
  {
    try {
      $userRepository = new UserRepository();

      // Vérification des données du formulaire
      $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
      $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;

      $user = $userRepository->getUserByMail($email);

      // Vérification du mot de passe
      if (!$user || !password_verify($password, $user->getPassword())) {
        echo 'Mot de passe ou email incorrect';
        die;
      }

      // Ajout du role dans la session
      $_SESSION['connecte'] = true;
      $_SESSION['user'] = $user;

      // Redirige vers le dashboard avec un message de succes
      header('Location: ' . HOME_URL . 'dashboard?success=Vous êtes connectés avec succès.');
      exit();
    } catch (Exception $e) {
      error_log("SignUp Error: " . $e->getMessage());

      // Redirige vers la page de connexion avec un message d'erreur
      header('Location: ' . HOME_URL . 'signIn?error=' . urlencode($e->getMessage()));
      exit();
    }
  }

  public function displayDashboard()
  {
    // Créer l'objet User basé sur l'utilisateur de la session
    $user = $_SESSION['user'];

    include_once __DIR__ . '/../Views/Dashboard/dashboard.php';
  }
}
