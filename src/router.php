<?php

use src\Services\Routing;
use src\Controllers\RouteController;
use src\Controllers\HomeController;
use src\Controllers\UserController;

$homeController = new HomeController();
$userController = new UserController();
$routeController = new RouteController();

$route = Routing::routeCompound();
$method = $_SERVER['REQUEST_METHOD'];

switch ($route[0]) {

  case '':
    $homeController->index();
    break;

  case 'mapList':
    $homeController->displayMapList();
    break;

  case 'mapDetail':
    $nameRoute = Routing::slugToName($route[1]);

    $homeController->displayMapDetail($nameRoute);

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

              $nameRoute = Routing::slugToName($route[3]);

              $routeController->displayRouteDetail($nameRoute);
            } else {
              $homeController->signIn();
            }
            break;

          case 'modify':
            if (isset($_SESSION['connecte']) && $_SESSION['connecte']) {
              if ($method === 'GET') {
                $nameRoute = Routing::slugToName($route[3]);
                $routeController->displayModifyRoute($nameRoute);
              } else if ($method === 'POST') {
                $routeController->modifyRoute();
              } else {
                $homeController->displayPage404();
              }
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
        switch ($route[2]) {
          case 'download':
            if (isset($_SESSION['connecte']) && $_SESSION['connecte']) {
              $userController->displayDownloaded();
            } else {
              $homeController->signIn();
            }
            break;

          case 'favourite':
            if (isset($_SESSION['connecte']) && $_SESSION['connecte']) {
              $userController->displayFavourite();
            } else {
              $homeController->signIn();
            }
            break;

          default:
            $homeController->displayPage404();
            break;
        }
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
