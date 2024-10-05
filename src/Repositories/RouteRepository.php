<?php

namespace src\Repositories;

use Exception;
use src\Models\Route;
use PDO;
use src\Services\Database;

class RouteRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.php';
  }

  public function getAllRoutes() {
    
    $sql = "SELECT bike_route.Id_route, 
    bike_route.name, 
    bike_route.description, 
    bike_route.duration, 
    bike_route.distance, 
    bike_route.elevation, 
    bike_route.altitude, 
    bike_route.circuit, 
    bike_route.creation_date, 
    bike_route.map_link,
    bike_route.Id_User AS Id_user,
    bike_level.Id_level AS Id_level,
    bike_level.name AS levelName,
    bike_type.Id_type AS Id_type,
    bike_type.name AS typeName
    FROM bike_route 
    LEFT JOIN bike_type ON bike_route.Id_type = bike_type.Id_type
    LEFT JOIN bike_user ON bike_route.Id_User = bike_user.Id_user
    LEFT JOIN bike_favourite ON bike_route.Id_route = bike_favourite.Id_route
    LEFT JOIN bike_like ON bike_route.Id_route = bike_like.Id_route
    LEFT JOIN bike_level ON bike_route.Id_level = bike_level.Id_level;";
            
        $statement = $this->DB->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Route::class);
        return $statement->fetchAll();
        
  }

  public function CreateRoute(Route $route)
{
    try {

        $sql = "INSERT INTO bike_route 
                (name, description, duration, distance, elevation, altitude, circuit, creation_date, map_link, Id_level, Id_type, Id_user)    
                VALUES (:name, :description, :duration, :distance, :elevation, :altitude, :circuit, :creation_date, :map_link, :Id_level, :Id_type, :Id_user);";
        
        $statement = $this->DB->prepare($sql);

        $statement->execute([
            ':name'            => $route->getName(),
            ':description'     => $route->getDescription(),
            ':duration'        => $route->getDuration()->format('H:i'),
            ':distance'        => $route->getDistance(),
            ':elevation'       => $route->getElevation(),
            ':altitude'        => $route->getAltitude(),
            ':circuit'         => $route->getCircuit(),
            ':creation_date'   => $route->getCreationDate()->format('Y-m-d'),
            ':map_link'        => $route->getMapLink(),
            ':Id_level'        => $route->getLevel()->getIdLevel(),
            ':Id_type'         => $route->getType()->getIdType(),
            ':Id_user'         => $route->getUser()->getIdUser()
        ]);

        return $this->DB->lastInsertId();
        
    } catch (Exception $e) {
        error_log('Erreur lors de la création de la route : ' . $e->getMessage());
        return false; 
    }
}

  public function getRouteById($idRoute) {
    
    $sql = "SELECT bike_route.Id_route, 
    bike_route.name, 
    bike_route.description, 
    bike_route.duration, 
    bike_route.distance, 
    bike_route.elevation, 
    bike_route.altitude, 
    bike_route.circuit, 
    bike_route.creation_date, 
    bike_route.map_link,
    bike_level.Id_level AS Id_level,
    bike_level.name AS levelName,
    bike_type.Id_type AS Id_type,
    bike_type.name AS typeName
    FROM bike_route 
    LEFT JOIN bike_type ON bike_route.Id_type = bike_type.Id_type
    LEFT JOIN bike_level ON bike_route.Id_level = bike_level.Id_level
    WHERE bike_route.Id_route = :Id_route;";

    $statement = $this->DB->prepare($sql);
    $statement->execute([':Id_route' => $idRoute]);
    $statement->setFetchMode(PDO::FETCH_CLASS, Route::class);
    $route = $statement->fetch();

    return $route;
        
  }

  public function getRouteByName($nameRoute) {
    
    $sql = "SELECT bike_route.Id_route, 
    bike_route.name, 
    bike_route.description, 
    bike_route.duration, 
    bike_route.distance, 
    bike_route.elevation, 
    bike_route.altitude, 
    bike_route.circuit, 
    bike_route.creation_date, 
    bike_route.map_link,
    bike_level.Id_level AS Id_level,
    bike_level.name AS levelName,
    bike_type.Id_type AS Id_type,
    bike_type.name AS typeName
    FROM bike_route 
    LEFT JOIN bike_type ON bike_route.Id_type = bike_type.Id_type
    LEFT JOIN bike_level ON bike_route.Id_level = bike_level.Id_level
    WHERE bike_route.name = :name;";

    $statement = $this->DB->prepare($sql);
    $statement->execute([':name' => $nameRoute]);
    $statement->setFetchMode(PDO::FETCH_CLASS, Route::class);
    $route = $statement->fetch();

    return $route;
        
  }
        
  

}

