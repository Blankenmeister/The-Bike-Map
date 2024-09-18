<?php

namespace src\Models;


use src\Services\Hydratation;

class Favourite {
    
    private ?User $user = null;
    private ?Route $route = null;



    use Hydratation;



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