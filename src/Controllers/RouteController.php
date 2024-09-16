<?php

namespace src\Controllers;

use Exception;
use src\Models\Route;
use src\Models\User;
use src\Repositories\RouteRepository;

class RouteController {

    public function addRoute() {
        try {
            
  
            // Sanitize and validate inputs
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
            $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : null;
            $duration = isset($_POST['duration']) ? htmlspecialchars($_POST['duration']) : null;
            $distance = isset($_POST['distance']) ? htmlspecialchars($_POST['distance']) : null;
            $elevation = isset($_POST['elevation']) ? htmlspecialchars($_POST['elevation']) : null;
            $altitude = isset($_POST['altitude']) ? htmlspecialchars($_POST['altitude']) : null;
            $circuit = isset($_POST['circuit']) ? htmlspecialchars($_POST['circuit']) : null;
            $creation_date = isset($_POST['creation_date']) ? htmlspecialchars($_POST['creation_date']) : null;
            $map_link = isset($_POST['map_link']) ? htmlspecialchars($_POST['map_link']) : null;

            // var_dump($name, $description, $duration, $distance, $elevation, $altitude, $circuit, $creation_date, $map_link);
            // die();

            // Vérifiez si tous les champs obligatoires sont remplis
            if (!$name || !$description || !$duration || !$distance || !$elevation || !$altitude || !$circuit || !$creation_date || !$map_link) {
                throw new Exception('Des champs obligatoires sont manquants.');
            }

            // Vérifiez que l'utilisateur a les droits d'admin
            $user = new User($_SESSION['user']);
            if ($user->getNameRole() !== 'Admin') {
                throw new Exception('Cette action est réservée aux administrateurs.');
            }

            // Créez l'objet Route après avoir récupéré les valeurs
            $route = new Route(null, $name, $description, $duration, $distance, $elevation, $altitude, $circuit, $creation_date, $map_link, null, null, null, null, null, null, null, null);

            $routeRepository = new RouteRepository();

            // Instancier le repository et ajouter la route
            $routeRepository->CreateRoute($route);

            // Rediriger vers le tableau de bord après l'insertion réussie
            header('Location: /dashboard');
            exit;

        } catch (Exception $e) {
            // En cas d'erreur, journaliser l'erreur et rediriger avec un message
            error_log("Route Add Error: " . $e->getMessage());
            header('Location: /dashboard/createRoute?error=' . urlencode($e->getMessage()));
            exit;
        }
    }
}
