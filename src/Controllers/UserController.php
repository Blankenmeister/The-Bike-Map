<?php

namespace src\Controllers;

use Exception;
use src\Repositories\UserRepository;

class userController {




public function treatmentSignInController()
    {
        try {

            $userRepository = new UserRepository();

            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
            $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;



            $user = $userRepository->treatmentSignInRepo($email, $password);



            if ($user) {


                $_SESSION['connecte'] = true;
                $_SESSION['Id_user'] = $user['Id_user'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['rgpd'] = $user['rgpd'];
                $Id_role = $user['Id_role'];
                $_SESSION['role'] = $userRepository->getRole($Id_role);

                // var_dump($_SESSION);
                // die();

                header('Location: ' . HOME_URL . 'dashboard?success=Vous êtes connectés avec succès.');
                exit();
            }
        } catch (Exception $e) {
            error_log("SignUp Error: " . $e->getMessage()); // Log the error for debugging
            // Redirect to sign-up page with error message
            header('Location: ' . HOME_URL . '?error=' . urlencode($e->getMessage()));
        }
    }




}