<?php

namespace src\Repositories;

use Exception;
use src\Models\Route;
use PDO;
use PDOException;
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
    bike_route.image,
    bike_route.gpx,
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
                (name, description, duration, distance, elevation, altitude, circuit, gpx, image,creation_date, map_link, Id_level, Id_type, Id_user)    
                VALUES (:name, :description, :duration, :distance, :elevation, :altitude, :circuit, :gpx, :image, :creation_date, :map_link, :Id_level, :Id_type, :Id_user);";
        
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
            ':gpx'        => $route->getGpx(),
            ':image'        => $route->getImage(),
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

public function updateRoute(Route $route)
{
    try {

        $sql = "UPDATE bike_route SET name = :name, description = :description, duration = :duration, distance = :distance, elevation = :elevation, altitude = :altitude, circuit = :circuit, gpx = :gpx, image = :image, map_link = :map_link, Id_level = :Id_level, Id_type = :Id_type where Id_route = :Id_route;";
        
        $statement = $this->DB->prepare($sql);

        $statement->execute([
            ':name'            => $route->getName(),
            ':description'     => $route->getDescription(),
            ':duration'        => $route->getDuration()->format('H:i'),
            ':distance'        => $route->getDistance(),
            ':elevation'       => $route->getElevation(),
            ':altitude'        => $route->getAltitude(),
            ':circuit'         => $route->getCircuit(),
            ':map_link'        => $route->getMapLink(),
            ':gpx'        => $route->getGpx(),
            ':image'        => $route->getImage(),
            ':Id_level'        => $route->getLevel()->getIdLevel(),
            ':Id_type'         => $route->getType()->getIdType(),
            ':Id_route'        => $route->getIdRoute()
        ]);

         // Get the number of affected rows
        $affectedRows = $statement->rowCount();
        if ($affectedRows > 0) {
            return true;
        } else {
            return false;
        }
        
    } catch (Exception $e) {
        error_log('Erreur lors de la modification de la route : ' . $e->getMessage());
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
    bike_route.gpx,
    bike_route.image,
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
    bike_route.gpx,
    bike_route.image,
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
        
  public function getRoutesByUser($idUserSession) {
    try {
      $sql = "SELECT bike_route.id_route, 
            bike_route.name, 
            bike_route.description, 
            bike_route.duration, 
            bike_route.distance, 
            bike_route.date_creation, 
            bike_route.date_last_modification, 
            bike_user.id_user, 
            bike_user.first_name, 
            bike_user.last_name 
            FROM bike_route 
            INNER JOIN bike_user ON bike_route.id_user = bike_user.id_user 
            WHERE bike_route.id_user = :id_user;";
 
            $statement = $this->DB->prepare($sql);
      $statement->execute([':id_user' => $idUserSession]);
      $statement->setFetchMode(PDO::FETCH_CLASS, Route::class);
      return $statement->fetchAll();
 
      } catch (PDOException $e) {
        error_log('Database Error: '. $e->getMessage());
        throw new Exception('An error occurred during query: '. $e->getMessage());
      }
    
  }

  public function deleteRoute($idRoute) {
    try {
      $sql = "DELETE FROM bike_route WHERE id_route = :id_route;";
      $statement = $this->DB->prepare($sql);
      $statement->execute([':id_route' => $idRoute]);
      $affectedRows = $statement->rowCount();
      if ($affectedRows > 0) {
        return true;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      error_log('Database Error: '. $e->getMessage());
      throw new Exception('An error occurred during query: '. $e->getMessage());
    }
  }

  public function getRoutesByUserAndFavourite($idUserSession) {
    try {
      $sql = "SELECT bike_route.id_route, 
                  bike_route.name, 
                  bike_route.description, 
                  bike_route.duration, 
                  bike_route.distance, 
                  bike_route.date_creation, 
                  bike_route.date_last_modification, 
                  bike_user.id_user, 
                  bike_user.first_name, 
                  bike_user.last_name 
                  FROM bike_route 
                  INNER JOIN bike_user ON bike_route.id_user = bike_user.id_user 
                  INNER JOIN bike_user_favourite ON bike_user.id_user = bike_user_favourite.id_user 
                  WHERE bike_user_favourite.id_route = :id_route AND 
                  bike_user_favourite.id_user = :id_user;";
                  
      $statement = $this->DB->prepare($sql);
      $statement->execute([':id_user' => $idUserSession]);
      $statement->setFetchMode(PDO::FETCH_CLASS, Route::class);
      return $statement->fetchAll();
      
    } catch (PDOException $e) {
      error_log('Database Error: '. $e->getMessage());
      throw new Exception('An error occurred during query: '. $e->getMessage());
  
  }
  

}

}