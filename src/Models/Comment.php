<?php

namespace src\Models;


use src\Services\Hydratation;

class Comment {
    
    private ?int $Id_comment = null;
    private ?string $text = null;
    private ?User $user = null;
    private ?Route $route = null;



    use Hydratation;



    /**
     * Get the value of Id_comment
     */
    public function getIdComment(): ?int
    {
        return $this->Id_comment;
    }

    /**
     * Set the value of Id_comment
     */
    public function setIdComment(int $Id_comment): self
    {
        $this->Id_comment = $Id_comment;

        return $this;
    }

    /**
     * Get the value of text
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Set the value of text
     */
    public function setText(string $text): self
    {
        $this->text = $text;

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