<?php

namespace src\Models;

use src\Services\Hydratation;

class Users {

    private $Id_user;
    private $last_name;
    private $first_name;
    private $password;
    private $rgpd;


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
}