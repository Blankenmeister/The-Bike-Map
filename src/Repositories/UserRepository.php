<?php

namespace src\Repositories;

use Exception;
use src\Models\User;
use PDO;
use PDOException;
use src\Models\Route;
use src\Services\Database;

class UserRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();
    require_once __DIR__ . '/../../config.php';
  }

  public function getUserByMail($email)
  {
    try {
      $sql = "SELECT bike_user.id_user,
          bike_user.last_name,
          bike_user.first_name,
          bike_user.email, 
          bike_user.password, 
          bike_user.rgpd, 
          bike_role.name AS name_role,
          bike_role.id_role AS id_role FROM bike_user
          LEFT JOIN bike_role ON bike_user.id_role = bike_role.id_role 
          WHERE bike_user.email = :email;";

      $statement = $this->DB->prepare($sql);
      $statement->execute([':email' => $email]);
      $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
      $user = $statement->fetch();

      return $user;
    } catch (PDOException $e) {
      error_log('Database Error: ' . $e->getMessage());
      throw new Exception('An error occurred during query: ' . $e->getMessage());
    }
  }

  public function getUserById($id)
  {
    try {
      $sql = "SELECT bike_user.id_user,
          bike_user.last_name,
          bike_user.first_name,
          bike_user.email, 
          bike_user.password, 
          bike_user.rgpd, 
          bike_role.name AS name_role,
          bike_role.id_role AS id_role FROM bike_user
          LEFT JOIN bike_role ON bike_user.id_role = bike_role.id_role 
          WHERE bike_user.id_user = :id_user;";

      $statement = $this->DB->prepare($sql);
      $statement->execute([':id_user' => $id]);
      $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
      $user = $statement->fetch();

      return $user;
    } catch (PDOException $e) {
      error_log('Database Error: ' . $e->getMessage());
      throw new Exception('An error occurred during query: ' . $e->getMessage());
    }
  }


}
