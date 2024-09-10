<?php

namespace src\Repositories;

use Exception;
use src\Models\User;
use PDO;
use PDOException;
use src\Models\Database;

class UserRepository 
{
    private $DB;

    public function __construct() 
    {
        $database = new Database;
        $this->DB = $database->getDB();


        require_once __DIR__ . '/../../config.php';
    }


    public function treatmentSignInRepo($email, $password)
    {
        try {

            $query = $this->DB->prepare('SELECT * FROM ' . PREFIXE . 'user WHERE email = :email');
            $query->execute(['email' => $email]);
            $user = $query->fetch(PDO::FETCH_ASSOC);

        //     var_dump($user['password']);
        // die();

            if (!$user) {
                throw new Exception('Votre mot de passe est incorrect');
            }

            

            // Verify mdp
            if (!password_verify($password, $user['password'])) {
                
            
                throw new Exception('votre email est pas ok');
                    
            }

            // var_dump($password, $user['password']);
            // die();

            return $user;

            
            
        } catch (PDOException $e) {
            // Log detailed error message
            error_log('Database Error: ' . $e->getMessage());

            throw new Exception('An error occurred during registration: ' . $e->getMessage());
        }
    }


    public function getRole($Id_role)
    {
        $query = $this->DB->prepare('SELECT * FROM ' . PREFIXE . 'role WHERE Id_role = :Id_role');
        $query->execute(['Id_role' => $Id_role]);
        $role = $query->fetch(PDO::FETCH_ASSOC);
        // var_dump( $role['name']);
        // die();
        return $role['name'];
    }


    



}


