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

    public function displayModifyRoute($nameRoute)
    {
        $routeRepository = new RouteRepository();
        $route = $routeRepository->getRouteByName($nameRoute);
        include_once __DIR__ . '/../Views/Dashboard/modifyRoute.php';
    }

    public function modifyRoute() {
        try {
            $routeRepository = new RouteRepository();
            //récupération des anciennes valeurs
            $route = $routeRepository->getRouteById($_POST['idroute']);
            // Sanitize and validate inputs
            $data = [
                'name' => isset($_POST['name']) ? (string) $_POST['name'] : null,
                'description' => isset($_POST['description']) ? (string)  $_POST['description'] : null,
                'duration' => isset($_POST['duration']) ? new DateTime($_POST['duration']) : null,
                'distance' => isset($_POST['distance'])? floatval($_POST['distance']) : null,
                'elevation' => isset($_POST['elevation'])? intval($_POST['elevation']) : null,
                'altitude' => isset($_POST['altitude'])? intval($_POST['altitude']) : null,
                'circuit' => isset($_POST['circuit'])? $_POST['circuit'] : '0',
                'map_link' => isset($_POST['map_link'])? $_POST['map_link'] : null,
                'Id_level' => isset($_POST['Id_level'])? intval($_POST['Id_level']) : null,
                'Id_type' => isset($_POST['Id_type'])? intval($_POST['Id_type']) : null,
            ];

            // vérification de l'image mais elle peut être vide
            if (empty($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                if (!in_array($_FILES['image']['type'], ['image/jpeg', 'image/png', 'image/jpg', 'image/svg'])) {
                    throw new Exception("Le champ image n'a pas le bon type (png/jpg/jpeg/svg)");
                }
            
                $max_upload = rtrim("2M", 'M');
                $max_upload = $max_upload * 1024 * 1024;
                if (!($_FILES['image']['size'] <= $max_upload)) {
                    throw new Exception("Le champ image est trop lourd (2Mo)");
                }
                $image = $_FILES['image'];
            }
            
            // vérification du gpx mais il peut être vide
            if (empty($_FILES['gpx']) || $_FILES['gpx']['error'] == UPLOAD_ERR_OK) {
                // if (!in_array($_FILES['gpx']['type'], ['application/gpx+xml', 'text/xml'])) {
                //     throw new Exception("Le champ GPX n'a pas le bon type (gpx/xml)");
                // }
            
                $max_upload = rtrim("2M", 'M');
                $max_upload = $max_upload * 1024 * 1024;
                if (!($_FILES['gpx']['size'] <= $max_upload)) {
                    throw new Exception("Le champ gpx est trop lourd (2Mo)");
                }
                $gpx = $_FILES['gpx'];
            }

            // Vérifiez si tous les champs obligatoires sont remplis
            foreach ($data as $key => $value) {
                if (!isset($value)) {
                    throw new Exception("Le champ $key est obligatoire. Veuillez renseigner tous les champs.");
                } else {
                    if ($key !== "duration" && $key !== "distance" && $key !== "elevation" && $key !== "altitude" && $key !== "creation_date" && $key !== "map_link") {
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
            //Traitement des fichiers image
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                //Suppression de l'ancien fichier
                if (file_exists(BASE_DIR . '/public/uploaded/images/' . $route->getImage())) {
                    unlink(BASE_DIR . '/public/uploaded/images/' . $route->getImage());
                }

                $nom = basename($image['name']);
                $i = 0;
                while (file_exists(BASE_DIR . '/public/uploaded/images/' . $nom)) {
                    $i++;
                    $nom = basename($i .'_' . $image['name']);
                }
                move_uploaded_file($image['tmp_name'], BASE_DIR . '/public/uploaded/images/' . $nom);
                $data['image'] = "/uploaded/images/" . $nom;
                $route->setImage($data['image']);
            }

            //Traitement des fichiers 
            if (isset($_FILES['gpx']) && $_FILES['gpx']['error'] == UPLOAD_ERR_OK) {
                //suppression de l'ancien fichier
                if (file_exists(BASE_DIR . '/public/uploaded/gpx/' . $route->getGpx())) {
                    unlink(BASE_DIR . '/public/uploaded/gpx/' . $route->getGpx());
                }
                $nom = basename($gpx['name']);
                $i = 0;
                while (file_exists(BASE_DIR . '/public/uploaded/gpx/' . $nom)) {
                    $i++;
                    $nom = basename($i .'_' . $gpx['name']);
                }
                move_uploaded_file($gpx['tmp_name'], BASE_DIR . '/public/uploaded/gpx/' . $nom);
                $data['gpx'] = "/uploaded/gpx/" . $nom;
                $route->setGpx($data['gpx']);
            }

            // Créez l'objet Route après avoir récupéré les valeurs
            $route->setName($data['name']);
            $route->setDuration($data['duration']);
            $route->setDistance($data['distance']);
            $route->setElevation($data['elevation']);
            $route->setAltitude($data['altitude']);
            $route->setMapLink($data['map_link']);
            $route->setCircuit($data['circuit']);
            $route->setDescription($data['description']);

            
            // Instancier le repository et ajouter la route
            $updated = $routeRepository->updateRoute($route);


            // Rediriger vers le tableau de bord après l'insertion réussie
            header('Location: /dashboard/route/list');
            $message = 'le parcours a bien été mis à jour';
            // echo'Votre parcours a bien été ajouté.';
            exit;

        } catch (Exception $e) {
            // En cas d'erreur, journaliser l'erreur et rediriger avec un message
            error_log("Route modify Error: " . $e->getMessage());
            $erreur = $e->getMessage();
            
            include __DIR__. '/../Views/Dashboard/modifyRoute.php';
            exit;
        }
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
                'circuit' => isset($_POST['circuit'])? $_POST['circuit'] : '0',
                'creation_date' => new DateTime('now'),
                'map_link' => isset($_POST['map_link'])? $_POST['map_link'] : null,
                'Id_level' => isset($_POST['Id_level'])? intval($_POST['Id_level']) : null,
                'Id_type' => isset($_POST['Id_type'])? intval($_POST['Id_type']) : null,
            ];

            // vérification de l'image
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                if (!in_array($_FILES['image']['type'], ['image/jpeg', 'image/png', 'image/jpg', 'image/svg'])) {
                    throw new Exception("Le champ image n'a pas le bon type (png/jpg/jpeg/svg)");
                }
            
                $max_upload = rtrim("2M", 'M');
                $max_upload = $max_upload * 1024 * 1024;
                if (!($_FILES['image']['size'] <= $max_upload)) {
                    throw new Exception("Le champ image est trop lourd (2Mo)");
                }
                $image = $_FILES['image'];
            }
            
            // vérification du gpx
            if (isset($_FILES['gpx']) && $_FILES['gpx']['error'] == UPLOAD_ERR_OK) {
                if (!in_array($_FILES['gpx']['type'], ['application/gpx+xml', 'text/xml'])) {
                    throw new Exception("Le champ GPX n'a pas le bon type (gpx/xml)");
                }
            
                $max_upload = rtrim("2M", 'M');
                $max_upload = $max_upload * 1024 * 1024;
                if (!($_FILES['gpx']['size'] <= $max_upload)) {
                    throw new Exception("Le champ gpx est trop lourd (2Mo)");
                }
                $gpx = $_FILES['gpx'];
            }

            // var_dump($data);

            // Vérifiez si tous les champs obligatoires sont remplis
            foreach ($data as $key => $value) {
                if (!$value) {
                    throw new Exception("Le champ $key est obligatoire. Veuillez renseigner tous les champs.");
                } else {
                    if ($key !== "duration" && $key !== "distance" && $key !== "elevation" && $key !== "altitude" && $key !== "creation_date" && $key !== "map_link") {
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
            //Traitement des fichiers image
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $nom = basename($image['name']);
                $i = 0;
                while (file_exists(BASE_DIR . '/public/uploaded/images/' . $nom)) {
                    $i++;
                    $nom = basename($i .'_' . $image['name']);
                }
                move_uploaded_file($image['tmp_name'], BASE_DIR . '/public/uploaded/images/' . $nom);
                $data['image'] = "/uploaded/images/" . $nom;
            }

            //Traitement des fichiers 
            if (isset($_FILES['gpx']) && $_FILES['gpx']['error'] == UPLOAD_ERR_OK) {
                $nom = basename($gpx['name']);
                $i = 0;
                while (file_exists(BASE_DIR . '/public/uploaded/gpx/' . $nom)) {
                    $i++;
                    $nom = basename($i .'_' . $gpx['name']);
                }
                move_uploaded_file($gpx['tmp_name'], BASE_DIR . '/public/uploaded/gpx/' . $nom);
                $data['gpx'] = "/uploaded/gpx/" . $nom;
            }

            // Créez l'objet Route après avoir récupéré les valeurs
            $route = new Route($data);

            // Définir l'utilisateur connecté comme auteur du contenu
            $route->setUser($_SESSION['user']);
            

            // var_dump($route);
            
            // Instancier le repository et ajouter la route
            $idRoute = $routeRepository->CreateRoute($route);

            // Rediriger vers le tableau de bord après l'insertion réussie
            header('Location: /dashboard/route/list');
            $message = 'le parcours a bien été ajouté';
            // echo'Votre parcours a bien été ajouté.';
            exit;

        } catch (Exception $e) {
            // En cas d'erreur, journaliser l'erreur et rediriger avec un message
            error_log("Route Add Error: " . $e->getMessage());
            $erreur = $e->getMessage();
            $data = $_POST;
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


    public function displayRouteDetail($nameRoute) {
        $routeRepository = new RouteRepository();
      
        $route = $routeRepository->getRouteByName($nameRoute);

        //  var_dump($route);
        

        include_once __DIR__. '/../Views/Dashboard/routeDetail.php';

    }



}
