<?php

namespace src\Models;


use src\Services\Hydratation;

class Role {
    
    private ?int $Id_role = null;
    private ?string $name = null;
    private ?User $user = null;


    use Hydratation;



    /**
     * Get the value of Id_role
     */
    public function getIdRole(): ?int
    {
        return $this->Id_role;
    }

    /**
     * Set the value of Id_role
     */
    public function setIdRole(int $Id_role): self
    {
        $this->Id_role = $Id_role;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of user
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }
}