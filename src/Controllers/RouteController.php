<?php

namespace src\Controllers;

use DateTime;
use Exception;
use src\Models\Route;
use src\Models\User;
use src\Repositories\RouteRepository;

class RouteController {


    public function displayCreateRoute()
    {
      include_once __DIR__ . '/../Views/Dashboard/createRoute.php';
    }



    public function addRoute() {
        try {
            
            $routeRepository = new RouteRepository();
            // Sanitize and validate inputs
            $data = [
                'name' => isset($_POST['name']) ? (string) $_POST['name'] : null,
                'description' => isset($_POST['description']) ? (string)  $_POST['description'] : null,
                'duration' => isset($_POST['duration']) ? new DateTime($_POST['duration']) : null,
                'distance' => isset($_POST['distance'])? floatval($_POST['distance']) : null,
                'elevation' => isset($_POST['elevation'])? intval($_POST['elevation']) : null,
                'altitude' => isset($_POST['altitude'])? intval($_POST['altitude']) : null,
                'circuit' => isset($_POST['circuit'])? $_POST['circuit'] : null,
                'creation_date' => new DateTime('now'),
                'map_link' => isset($_POST['map_link'])? $_POST['map_link'] : null,
                'Id_level' => isset($_POST['Id_level'])? intval($_POST['Id_level']) : null,
                'Id_type' => isset($_POST['Id_type'])? intval($_POST['Id_type']) : null,
            ];

            // Vérifiez si tous les champs obligatoires sont remplis
            foreach ($data as $key => $value) {
                if (!$value) {
                    throw new Exception("Le champ $key est obligatoire. Veuillez renseigner tous les champs.");
                } else {
                    if ($key !== "duration" && $key !== "distance" && $key !== "elevation" && $key !== "altitude" && $key !== "creation_date") {
                        $data[$key] = htmlspecialchars($value);
                    }
                }
            }

            
            // Vérifiez que l'utilisateur a les droits d'admin
            // $user = new User($_SESSION['user']);
            $user = $_SESSION['user'];

           
            if ($user->getRole()->getName() !== 'Admin') {
                throw new Exception('Cette action est réservée aux administrateurs.');
            }

            // Créez l'objet Route après avoir récupéré les valeurs
            $route = new Route($data);

            
            
            // $route->getLevel()->getIdLevel();
            // $route->gettype()->getIdType();

            var_dump($route);
            
            // Instancier le repository et ajouter la route
            $routeRepository->CreateRoute($route);

            // var_dump($route);
            // die;

            // Rediriger vers le tableau de bord après l'insertion réussie
            header('Location: /dashboard');
            // echo'Votre parcours a bien été ajouté.';
            exit;

        } catch (Exception $e) {
            // En cas d'erreur, journaliser l'erreur et rediriger avec un message
            error_log("Route Add Error: " . $e->getMessage());
            $erreur = $e->getMessage();
            include __DIR__. '/../Views/Dashboard/createRoute.php';
            exit;
        }
    }


    public function displayRouteList()
    {
        $routeRepository = new RouteRepository();
        // Récupérer tous les parcours
        $routes = $routeRepository->getAllRoutes();

        // var_dump($routes);
        // die();
        


     
      include_once __DIR__ . '/../Views/Dashboard/routeList.php';
    }




  


}
