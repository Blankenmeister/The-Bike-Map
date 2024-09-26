<?php

namespace src\Repositories;

use Exception;
use PDO;
use PDOException;
use src\Models\Type;
use src\Services\Database;

class TypeRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();
    require_once __DIR__ . '/../../config.php';
  }

  public function getTypeById($id): bool|Type
  {
    try {
      $sql = "SELECT * FROM bike_type
          WHERE id_type = :id;";

      $statement = $this->DB->prepare($sql);
      $statement->execute([':id' => $id]);
      $statement->setFetchMode(PDO::FETCH_CLASS, Type::class);
      $type = $statement->fetch();

      return $type;
    } catch (PDOException $e) {
      error_log('Database Error: ' . $e->getMessage());
      throw new Exception('An error occurred during query: ' . $e->getMessage());
    }
  }
}
