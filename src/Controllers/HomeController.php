<?php

// namespace src\Controllers;

// use src\Repositories\PersonnelsRepository;
// use src\Repositories\VehiculesRepository;


// class HomeController
// {
//     public function index()
//     {
//         include_once __DIR__ . '/../Views/home/connexion.php';
//     }

//     public function displayDashboard()
//     {
//         $personnelsRepository = new PersonnelsRepository();

//         $personnels = $personnelsRepository->getAllPersonnelsDetailed();

//         $allPersonnelsWithStatus = [];

//         foreach ($personnels as $personnel) {
//             $Id_personnel = $personnel['Id_personnel'];

//             $status = $personnelsRepository->getTheLastStatusForEachPersonnel($Id_personnel);

//             $personnel['status_name'] = $status ? $status['status_name'] : 'Aucun statut';

//             $evaluations = $personnelsRepository->getTheLastEvaluationsForEachPersonnel($Id_personnel);
//             $personnel['evaluations'] = $evaluations;

//             $allPersonnelsWithStatus[] = $personnel;
//         }


//         $vehiculesRepository = new VehiculesRepository;
//         $vehicules = $vehiculesRepository->getAllVehicules();
//         $etats = $vehiculesRepository->getAllEtats();
//         include_once __DIR__ . '/../Views/dashboard/dashboard.php';
//     }



//     public function afficherPageGestionPersonnels()
//     {
//         include_once __DIR__ . '/../Views/dashboard/ajouter_personnel.php';
//     }
//     public function afficherPagePersonnelDetaille($Id_personnel)
//     {
//         $personnelsRepository = new PersonnelsRepository();
//         $personnel = $personnelsRepository->getPersonnelById($Id_personnel);
//         $statuts = $personnelsRepository->getAllStatus();
//         $statuts_personnel = $personnelsRepository->getStatusOfThisPersonnel($Id_personnel);

//         include_once __DIR__ . '/../Views/dashboard/personnel_detaille.php';
//     }


//     public function afficherPageVehiculeDetaille($Id_vehicule)
//     {
//         $vehiculesRepository = new VehiculesRepository();
//         $vehicule = $vehiculesRepository->getVehiculeById($Id_vehicule);
//         $etats = $vehiculesRepository->getAllEtatOfVehicule();
//         $Id_role = 2; // role mecanicien
//         $commentaire_mecanicien = $vehiculesRepository->getLastCommentairesByIdVehicule($Id_vehicule, $Id_role);
//         $Id_role = 3; // role conducteur
//         $commentaire_conducteur = $vehiculesRepository->getLastCommentairesByIdVehicule($Id_vehicule, $Id_role);

//         include_once __DIR__ . '/../Views/vehicule/vehicule_detaille.php';
//     }
//     public function deconexion()
//     {
//         session_destroy();
//         header('Location: ' . HOME_URL . '?success=Vous êtes deconnectés avec succès.');
//     }
//     public function page404()
//     {
//         include_once __DIR__ . '/../Views/home/404.php';
//     }
// }



namespace src\Controllers;

use src\Repositories\UserRepository;

class HomeController
{

  public function index()
  {

    include_once __DIR__ . '/../Views/Pages/homepage.php';
  }





  public function displayMaplist()
  {
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


  // public function displayDashboard($id) 
  // {
  //     $userRepository = new UserRepository();
  //     $user = $this->$userRepository->getUserById($id);
  //     include_once __DIR__ . '/../Views/Dashboard/dashboard.php';

  // }

  public function displayCreateRoute()
  {
    include_once __DIR__ . '/../Views/Dashboard/createRoute.php';
  }

  public function routeDetail()
  {
    include_once __DIR__ . '/../Views/Dashboard/routeDetail.php';
  }



  public function signOut()
  {
    session_destroy();
    header('Location: ' . HOME_URL . 'signIn?success=Vous êtes deconnectés avec succès.');
  }

  public function displayPage404()
  {

    include_once __DIR__ . '/../Views/Pages/page404.php';
  }
}
