<?php

namespace src\Models;


use src\Services\Hydratation;

class Favourite {
    
    private int $Id_favourite;
    private User $user;
    private Route $route;



    use Hydratation;



    /**
     * Get the value of Id_favourite
     */
    public function getIdFavourite(): int
    {
        return $this->Id_favourite;
    }

    /**
     * Set the value of Id_favourite
     */
    public function setIdFavourite(int $Id_favourite): self
    {
        $this->Id_favourite = $Id_favourite;

        return $this;
    }

    /**
     * Get the value of user
     */
    public function getUser(): User
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
    public function getRoute(): Route
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