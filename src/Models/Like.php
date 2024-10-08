<?php

namespace src\Models;


use src\Services\Hydratation;

class Like {
    
    private ?int $Id_like = null;
    private ?User $user = null;
    private ?Route $route = null;



    use Hydratation;


    /**
     * Get the value of Id_like
     */
    public function getIdLike(): ?int
    {
        return $this->Id_like;
    }

    /**
     * Set the value of Id_like
     */
    public function setIdLike(int $Id_like): self
    {
        $this->Id_like = $Id_like;

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

    /**
     * Get the value of route
     */
    public function getRoute(): ?Route
    {
        return $this->route;
    }

    /**
     * Set the value of route
     */
    public function setRoute(Route $route): self
    {
        $this->route = $route;

        return $this;
    }

}