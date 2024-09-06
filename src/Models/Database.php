<?php

namespace src\Models;

use PDO;
use PDOException;

final class Database
{
    private $DB;
    private $config;

    public function __construct()
    {
        $this->config = __DIR__ . '/../../config.php';
        require_once $this->config;

        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $this->DB = new PDO($dsn, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $error) {
            echo "DB connection error : " . $error->getMessage();
        }
    }

    public function getDB(): PDO
    {
        if ($this->DB instanceof PDO) {
            return $this->DB;
        } else {
            throw new \RuntimeException("Database connection failed.");
        }
    }
}
