<?php

namespace src\Models;

use src\Services\Hydratation;

class User {

    private $Id_user;
    private $last_name;
    private $first_name;
    private $email;
    private $password;
    private $rgpd;
    private $Id_role;
    private $NameRole;


    use Hydratation;
    

    
    /**
     * Get the value of Id_user
     */
    public function getIdUser()
    {
        return $this->Id_user;
    }

    /**
     * Set the value of Id_user
     */
    public function setIdUser($Id_user): self
    {
        $this->Id_user = $Id_user;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName($last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of first_name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName($first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of rgpd
     */
    public function getRgpd()
    {
        return $this->rgpd;
    }

    /**
     * Set the value of rgpd
     */
    public function setRgpd($rgpd): self
    {
        $this->rgpd = $rgpd;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Id_role
     */
    public function getIdRole()
    {
        return $this->Id_role;
    }

    /**
     * Set the value of Id_role
     */
    public function setIdRole($Id_role): self
    {
        $this->Id_role = $Id_role;

        return $this;
    }

    /**
     * Get the value of NameRole
     */
    public function getNameRole()
    {
        return $this->NameRole;
    }

    /**
     * Set the value of NameRole
     */
    public function setNameRole($NameRole): self
    {
        $this->NameRole = $NameRole;

        return $this;
    }
}