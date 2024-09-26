<?php

use src\Services\Routing;
use src\Controllers\RouteController;
use src\Controllers\HomeController;
use src\Controllers\UserController;

$homeController = new HomeController();
$userController = new UserController(); // Correction : majuscule pour 'U' dans UserController
$routeController = new RouteController();

$route = Routing::routeComposee();
$method = $_SERVER['REQUEST_METHOD'];

switch ($route[0]) {

    case '':
        $homeController->index();
        break;

    case 'mapList':
        $homeController->displayMapList();
        break;

    case 'mapDetail':
        $homeController->displayMapDetail();
        break;

    case 'contact':
        $homeController->displayContact();
        break;

    case 'signin':
        if ($method === 'POST') {
            $userController->treatmentSignInController();
        } else {
            $homeController->signIn();
        }
        break;

    case 'dashboard':

        switch ($route[1]) {
            case 'route':
                switch ($route[2]) {
                    case 'create':
                        if (isset($_SESSION['connecte']) && $_SESSION['connecte']) {
                            if ($method === 'GET') {
                                $routeController->displayCreateRoute();
                            } else if ($method === 'POST') {
                                $routeController->addRoute();
                            } else {
                                $homeController->displayPage404();
                            }
                        } else {
                            $homeController->signIn();
                        }
                        break;

                    case 'list':
                    case null:

                        if (isset($_SESSION['connecte']) && $_SESSION['connecte']) {

                            $routeController->displayRouteList();
                        } else {
                            $homeController->signIn();
                        }
                        break;


                    case 'detail':
                        if (isset($_SESSION['connecte']) && $_SESSION['connecte']) {

                            $TitleRoute = Routing::slugToTitle($route[3]);

                            $routeController->displayRouteDetail($TitleRoute);
                        } else {
                            $homeController->signIn();
                        }
                        break;

                    default:
                        $homeController->displayPage404();
                        break;
                }
                break;

            case 'user':
                //
                break;

            default:
                if (isset($_SESSION['connecte']) && $_SESSION['connecte']) {
                    $userController->displayDashboard();
                } else {
                    $homeController->signIn();
                }
                break;
        }

        break;


    case 'signout':
        $homeController->signOut();
        break;

    default:
        // Si aucune des routes ne correspond, afficher une page 404
        $homeController->displayPage404();
        break;
        
}
