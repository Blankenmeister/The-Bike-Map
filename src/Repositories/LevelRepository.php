<?php

namespace src\Repositories;

use Exception;
use PDO;
use PDOException;
use src\Models\Level;
use src\Services\Database;

class LevelRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();
    require_once __DIR__ . '/../../config.php';
  }

  public function getLevelById($id)
  {
    try {
      $sql = "SELECT * FROM bike_level
          WHERE id_level = :id;";

      $statement = $this->DB->prepare($sql);
      $statement->execute([':id' => $id]);
      $statement->setFetchMode(PDO::FETCH_CLASS, Level::class);
      $user = $statement->fetch();

      return $user;
    } catch (PDOException $e) {
      error_log('Database Error: ' . $e->getMessage());
      throw new Exception('An error occurred during query: ' . $e->getMessage());
    }
  }
}
