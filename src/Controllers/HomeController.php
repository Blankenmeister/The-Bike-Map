<?php

namespace src\Controllers;

use src\Repositories\RouteRepository;


class HomeController
{

  public


 function index()
  {

    include_once __DIR__ . '/../Views/Pages/homepage.php';
  }

  public function displayMaplist()
  {

    $routeRepository = new RouteRepository();
        // Récupérer tous les parcours
        $routes = $routeRepository->getAllRoutes();
    include_once __DIR__ . '/../Views/Pages/mapList.php';
  }

  public function displayMapDetail()
  {
    include_once __DIR__ . '/../Views/Pages/mapDetail.php';
  }

  public function displayContact()
  {
    include_once __DIR__ . '/../Views/Pages/contact.php';
  }

  public function signIn()
  {
    include_once __DIR__ . '/../Views/SignIn/signIn.php';
  }


  public function routeDetail()
  {
    include_once __DIR__ . '/../Views/Dashboard/routeDetail.php';
  }


  public function signOut()
  {
    session_destroy();
    header('Location: ' . HOME_URL . 'signin?success=Vous êtes deconnectés avec succès.');
  }

  public function displayPage404()
  {

    include_once __DIR__ . '/../Views/Pages/page404.php';
  }
}
